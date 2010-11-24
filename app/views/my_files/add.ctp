<div class="myFiles form">
<h2>Document Upload</h2>
	<fieldset>
<?php echo $form->create('MyFile', array('action' => 'add', 'type' => 'file'));?>
	<?php
		echo $form->input('name');
		echo $form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
		echo $form->input('fto', array('label'=>'For FTO\'s only'));
		echo $form->file('File');
	?>
<?php echo $form->end('Upload');?>
	</fieldset>
</div>

<div class="actions">
		<?php if ( $session->read('Auth.User.group_id') < 3 ) {
				
				echo $this->element('admin/menuFiles');
				
			}
		?>
	
	
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Documentation', true), array('controller'=>'documentations', 'action' => 'index'), array('class'=>'list')); ?></li>
		<li><?php echo $this->Html->link(__('List Observation', true), array('controller' => 'observations', 'action' => 'index'), array('class'=>'list')); ?> 
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index'), array('class'=>'list')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lesson Plans', true), array('controller' => 'plans', 'action' => 'index'), array('class'=>'list')); ?> 
	</ul>
</div>