<?php

$content_title = isset($content_title) ? $content_title : "<span class='ss_sprite ss_monitor'></span>&nbsp;&nbsp;".$session->read('Auth.User.first_name')."'s Dashboard!";

?>
<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
	<title>
		<?php __('LCCM:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	   
	 <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('cake.generic','sprite','blue4/jquery-ui-1.8.4.custom','mainui/jquery-ui-1.8.4.custom','default','menu_style'));		
		echo $this->Html->script(array('jquery-1.4.2.min','jquery-ui-1.8.4.custom.min','init'));
		echo $scripts_for_layout;
	?>
</head>
<body>

<div id="doc3" class="yui-t2 mainui">
   <div id="hd" role="banner">		
   
		<div id="account" class="1ui-tabs-nav 1ui-helper-reset 1ui-helper-clearfix 1ui-widget-header">
		<h1>Welcome, <span><?php echo $session->read('Auth.User.first_name') ;?></span> you are logged in as a <span><?php echo $switches->groupLevel($session->read('Auth.User.group_id')) ;?></span><?php echo "  [ ".$this->Html->link('Logout','/users/logout')."]" ;?></h1>
		</div>
		
		<div id="banner">
			<div id="logo">
		<h1>Field Training and Evaluation Program<h1>
		<h2>cary area emergency medical services</h2>
			</div>
		</div>
		
<div role="navigation" class="yui-g">


	<?php echo $this->element('menuTrainee');?>
	

	<?php //echo $this->element('navEmployee');?>	
	</div>		
	</div>
   <div id="bd" role="main">
	
<div id="tabsbd"  role="main" class="yui-g">
				<ul>

					<li class="pageheader" ><a href="#pagebd"><?php echo $content_title;?></a></li>
	
				</ul>
							
			<div id="bodyContent"  class="mainui" >	
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
			
			
			</div>	</div>

	</div>
      <div id="ft" role="contentinfo" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header"><p>Footer</p></div>
</div>
	<?php echo  $this->element('sql_dump'); ?>
	<?php echo  $js->writeBuffer(); // Write cached scripts?>
</body>
</html>