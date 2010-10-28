<?php

$content_title = isset($content_title) ? $content_title : "<span class='ss_sprite ss_monitor'></span>&nbsp;&nbsp;".$session->read('Auth.User.first_name')."'s Dashboard";

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
		<h1>Welcome, <span><?php echo $session->read('Auth.User.first_name') ;?></span> you are logged in as a <span>administrator</span><?php echo "  [ ".$this->Html->link('Logout','/users/logout')."]" ;?></h1>
		</div>
		
		<div id="banner">
			<div id="logo">
		<h1>Field Training and Evaluation Program<h1>
		<h2>cary area emergency medical services</h2>
			</div>
		</div>
		
<div role="navigation" class="yui-g">