	$(function() {
	
			$('#tabs').tabs();
			
			$('#tabsbd').tabs();
			
			$('.actions a').button();
			
			$('.actions a.new').button({ icons: {primary:'ui-icon-plus'} });
			
			$('.actions a.list').button({ icons: {primary:'ui-icon-folder-collapsed'} });
			
			$('.actions a.report').button({ icons: {primary:'ui-icon-note'} });
			
			$('.actions a.delete').button({ icons: {primary:'ui-icon-close'} });
			
			$('td.actions a:nth-child(1)').button({ icons: {primary:'ui-icon-search'} });
			
			$('td.actions a:nth-child(2)').button({ icons: {primary:'ui-icon-pencil'} });
			
			$('td.actions a:nth-child(3)').button({ icons: {primary:'ui-icon-close'} });
			
			$('.submit input:submit').button();
			
			$('div#loginContainer').draggable();
									
			// $('#flashMessage').removeClass('message').addClass('ui-state-error ui-corner-all');
			
			
			$('#flashMessage').removeClass('message').addClass('blueFlash').delay(300).slideDown().delay(1600).slideUp();
			$('#authMessage').removeClass('message').addClass('blueFlash').delay(300).slideDown().delay(1600).slideUp();
			
			$('#observation div:even').addClass('altDiv');
			
			$('#ObservationDateOf').datepicker({
			dateFormat: 'yy-mm-dd',
			showOn: 'button',
			buttonImage: '../img/calendar.gif',
			buttonImageOnly: true
		});
		
	//		$("#dialog").dialog({
	//		autoOpen: false,			
	//	});
			
			$('#add-doc')
			.button()
			.click(function() {
				$('#dialog').dialog('open');
			});
			
			//$(".DefaultHtmlArea").htmlarea(); // Initialize jHtmlArea's with all default values

			// Slide divs	
	
			//Hide (Collapse) the toggle containers on load
			$("div.toggle_container").hide(); 
		  
			//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
			$("span.trigger").click(function(){
				$(this).toggleClass("active").next().slideToggle("slow");
			});
			
		});
		
		

