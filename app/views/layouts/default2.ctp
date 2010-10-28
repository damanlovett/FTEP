<html xmlns="http://www.w3.og/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('LCCM:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	   
	 <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		
		echo $this->Html->css('blue4/jquery-ui-1.8.4.custom');
		
		echo $this->Html->css('mainui/jquery-ui-1.8.4.custom');
		
		echo $this->Html->css('default');
		
		echo $this->Html->script('jquery-1.4.2.min');

		echo $this->Html->script('jquery-ui-1.8.4.custom.min');

		echo $this->Html->script('init');

		echo $scripts_for_layout;
	?>
</head>
<body>
<div id="doc3" class="yui-t1">

   <div id="hd" role="banner">
   
		<div id="account" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header"><h1>Header</h1></div>
		<div id="banner">&nbsp;</div>
				
	</div>
   
   <div id="bd" role="main">
	
		<div id="yui-main">
			<div class="yui-b">
			
				<div id="tabsbd"  role="main" class="yui-g">

				<ul>

					<li class="pageheader" ><a href="#pagebd"><?php echo '$content_title';?></a></li>
	
				</ul>
				
			<div id="bodyContent" class="mainui" >	
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
			</div>
	
	
				</div>
			</div>
		
		</div>
	
	<div id="nav" role="navigation" class="yui-b ui-corner-all">
	
	<?php echo $this->element('navAdmin');?>
	<?php echo $this->element('navEmployee');?>
	
	</div>
	
	</div>
   <div id="ft" role="contentinfo" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header"><p>Footer</p></div>
</div>
	<?php echo  $this->element('sql_dump'); ?>
	<?php echo  $js->writeBuffer(); // Write cached scripts?>
</body>
</html>