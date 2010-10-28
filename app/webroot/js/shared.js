/*---------------------------------------------------------------
Setup Flash Messages UI 
----------------------------------------------------------------*/
document.observe('dom:loaded', function() { 
    Flash.setup();
});


/*---------------------------------------------------------------
Flash message
----------------------------------------------------------------*/
var Flash = {
  
  setup: function() {
    this.responders();
    if ($('flash')) {
      new Effect.Appear('flash', { duration: 0.5, queue: { position: 'front', scope: 'flash', limit: 1 }, 
        afterFinish: function(effect) {  
          new Effect.DropOut('flash', { delay: 2.0, duration: 0.3, queue: { position: 'end', scope: 'flash', limit: 1 } });
        } 
      });   
    }     
  },
  
  responders: function() {
    Ajax.Responders.register({
      onCreate: function() {
        new Effect.Appear('ajax-request', { duration: 0.5, queue: { position: 'front', scope: 'request' } });  
      },
      onComplete: function() {
        if (Ajax.activeRequestCount == 0) {
          new Effect.Fade('ajax-request', { duration: 0.3, queue: { position: 'end', scope: 'request' } });
        }   
      }
    }); 
  }
}

/*---------------------------------------------------------------
Setup Forms UI Flash Messages
----------------------------------------------------------------*/
document.observe('dom:loaded', function() { 
    Forms.setup();
});

/*---------------------------------------------------------------
Forms: Flashes message to user on form submit
----------------------------------------------------------------*/
var Forms = {
  
  setup: function() {
    document.observe('submit', this.submit.bind(this));    
  },
  
  submit: function(event) {
    var element = event.element();
    /* do something to forms */
  }
}


/*--------------------------------------------------------
Forms.Validation: Validates forms
---------------------------------------------------------*/
Forms.Validation = {
  
  setup: function() {
    this.errors = new Array();
  },
  
  validateField: function(field, rule, msg) {
    
    var func = Forms.Validation[rule];
   
    if (!Object.isFunction(func)) alert('invalid rule: ' + rule);  
    if (!$(field)) alert('invalid field: ' + field); 
    if (msg.blank()) alert('invalid msg for field: ' + field);
    
    if(!func($F(field))) {    
      this.markFieldError(field, msg);  
      this.errors.push(msg);
      $('ajax-request').hide();
    } else {
      this.unmarkFieldError(field);
    }
    
  },
 
  markFieldError: function(field, msg) {
   $(field).up('.input').addClassName('error');
   $(field).addClassName('form-error');
   if(!$(field).next('.error-message')) $(field).insert({ after: new Element('div', { 'class': 'error-message' }).update(msg) });
  },
  
  unmarkFieldError: function(field, msg) {
   $(field).up('.input').removeClassName('error');
   $(field).removeClassName('form-error');
   var errorDiv = $(field).next('.error-message');
   if(errorDiv) errorDiv.remove();
  }, 
  
  alertErrors: function() {
    alert(this.errors.join("\n"));
  },
  
  flashWarning: function(msg) {
    $('ajax-warning').down('.inner').update(msg);
    new Effect.BlindDown('ajax-warning', { duration: 0.5, queue: { position: 'front', scope: 'warning', limit: 1 }, 
      afterFinish: function(effect) {  
        new Effect.BlindUp('ajax-warning', { delay: 2.0, duration: 0.3, queue: { position: 'end', scope: 'warning', limit: 1 } });
      } 
    }); 
  },
  
  required: function(data) {
    return !data.strip().blank();
  }  
  
}

var SortableTree = Class.create({
  initialize: function(element, options) {
    this.element = $(element);
    this.root = new SortableTree.Node(this, null, element, options);
		this.isSortable = false;
  },
  
  toggleSortable: function() {
    this.isSortable ? this.setUnsortable() : this.setSortable();
  },
  
  setSortable: function() {
    Element.addClassName(this.root.element, 'sortable');
		this.root.setSortable();
		this.isSortable = true;
  },

	setUnsortable: function() {
    Element.removeClassName(this.root.element, 'sortable');
		this.root.setUnsortable();
		this.isSortable = false;
	},
  
  find: function(element) {
    return this.root.find($(element));
  },

	unmark_all: function() {
    this.root.unmark();
	}
});

SortableTree.Node = Class.create({
  initialize: function(tree, parent, element, options) {
    this.tree = tree;
    this.parent = parent;
    this.element = $(element);

    this.options = Object.extend({
      tagName: 'LI',
      containerTagName: 'UL',
			droppable: {},
			draggable: {}
    }, options || {});

    this.droppable_options = Object.extend({
      onHover:      function(drag, drop, overlap){ this.onHover(drag, drop, overlap) }.bind(this),
      onDrop:       function(drag, drop, event){ this.onDrop(drag, drop, event) }.bind(this), 
      overlap:      'vertical',
      hoverclass:   'drop_hover'
    }, options.droppable);

    this.draggable_options = Object.extend({
      ghosting: true,
      revert: true,
      constraint:  'vertical',
      reverteffect: function(element, top_offset, left_offset) {
		    element.setStyle({left: '0px', top:  '0px'});
				// would be so cool to be able to use this. but it leaves a backgroundColor
				// style property on the element which overwrites the class' value
				// (i.e. the drop marker) and apperently can't be removed anymore (?)
				// new Effect.Highlight(element, { startcolor: '#FFFF99' })
      }
    }, options.draggable);

    this.initChildren()
  },
  
  id: function() {
    if (!this._id) {
      var match = this.element.id.match(/^[\w]+_([\d]*)$/);
      this._id = encodeURIComponent(match ? match[1] : null);
    }
    return this._id;
  },
  
  previousSibling: function() {
    var pos = this.parent.children.indexOf(this);
    return pos > 0 ? this.parent.children[pos - 1] : null;
  },
  
  initChildren: function() {
    this.children = [];  
    var container = this.findContainer(this.element)
    if(container){
      $A(container.childNodes).each(function(child) {
        if(this.acceptTagName(child)) {
          this.children.push(new SortableTree.Node(this.tree, this, child, this.options));
        }
      }.bind(this));
    }
  },

  acceptTagName: function(element) {
    return element.tagName && element.tagName.toUpperCase() == this.options.tagName
  },

  setSortable: function() {
    Droppables.add(this.element, this.droppable_options);
    this.draggable = new Draggable(this.element, this.draggable_options);
    this.children.each(function(child) { child.setSortable() });
  },

  setUnsortable: function() {
		Droppables.remove(this.element)
		this.draggable.destroy();
    this.children.each(function(child) { child.setUnsortable() });
  },
  
  find: function(element) {
    if(element == this.element) return this;
    for(var i = 0; i < this.children.length; i++) {
      var node = this.children[i].find(element);
      if(node) return node; 
    }
  },

  findContainer: function(element) {
    if(element.tagName != this.options.containerTagName) {
      element = $A(element.childNodes).detect(function(node) { 
        return node.tagName == this.options.containerTagName
      }.bind(this));
    }
    return element;
  },

  findOrCreateContainer: function(element) {
    var container = this.findContainer(element);
    if(!container) {
      container = document.createElement(this.options.containerTagName);
      element.appendChild(container);
    }
    return container;
  },

  onHover: function(drag, drop, overlap) {		
		if(this.canContainChildren(drop)) {
		  this.dropPosition = overlap < 0.33 ? 'bottom' : overlap > 0.77 ? 'top' : 'insert';
		} else {
			this.dropPosition = overlap < 0.5 ? 'bottom' : 'top';
		}
    this.mark(drop);
		// $('log').update('hovering: ' + drop.tagName + ': ' + drop.id + "<br />" + 
		//                 'classes: ' + drop.className + "<br />" + 
		// 							  'dropPosition: ' + this.dropPosition)
  },	

	canContainChildren: function(element) {
		if(this.options.droppable.container) {
			return element.match(this.options.droppable.container);
		}
		return true;
	},

  onDrop: function(drag, drop, event) {
    drag = this.tree.find(drag);
    drop = this.tree.find(drop);

		// i.e. don't do anything if it's a toplevel node and has been dropped on "itself"
		// another way around this could be to change scriptaculous to affect() a node
		// when it has been dropped on itself
		if(drop.parent || this.dropPosition == 'insert') { 
	    switch(this.dropPosition) {
	      case 'top':    drop.parent.insertBefore(drag, drop); break;
	      case 'bottom': drop.parent.insertBefore(drag, drop.nextSibling()); break;
	      case 'insert': this.insertBefore(drag, this.firstChild()); break;
	    }
		}

    if(this.options.onDrop) this.options.onDrop(drag, drop, event);
  },

  mark: function(element, position) {
		this.tree.unmark_all();
    Element.addClassName(element, 'drop_' + this.dropPosition);
  },

  unmark: function() {
    ['drop_top', 'drop_bottom', 'drop_insert'].each(function(classname){
      Element.removeClassName(this.element, classname);
    }.bind(this));
		this.children.each(function(child) { child.unmark(); }) 
  },
  
  to_params: function(name) {
		name = name || this.tree.element.id;
    var leftNode = this.previousSibling();
    return name + '[' + this.id() + '][parent_id]=' + this.parent.id() + '&' + 
           name + '[' + this.id() + '][left_id]=' + (leftNode ? leftNode.id() : ''); // null
  },
  
  firstChild: function() {
    return this.children.length > 0 ? this.children[0] : null;
  },
  
  previousSibling: function() {
    var pos = this.parent.children.indexOf(this);
    return pos > 0 ? this.parent.children[pos - 1] : null;
  },
  
  nextSibling: function() {
    var pos = this.parent.children.indexOf(this);
    return pos + 1 < this.parent.children.length ? this.parent.children[pos + 1] : null;    
  },
  
  removeChild: function(node) {
    this.children.splice(this.children.indexOf(node), 1);
    node.element.parentNode.removeChild(node.element)
  },
  
  insertBefore: function(node, sibling) {
		if(node == sibling) return;
		
		node.parent.removeChild(node);
    node.parent = this;
    var pos = sibling ? this.children.indexOf(sibling) : this.children.length;
    this.children.splice(pos, 0, node);

    this.findOrCreateContainer(this.element).insertBefore(node.element, sibling ? sibling.element : null)
  }
});