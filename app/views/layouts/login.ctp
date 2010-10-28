<?php

$content_title = isset($content_title) ? $content_title : 'Dashboard';

?>
<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
	<title>
		<?php __('LCCM:'); ?>
		<?php echo $title_for_layout; ?>
	</title>


	 <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">

	     <?php echo $this->Html->meta('icon'); ?>
		 <?php echo $this->Html->css(array('blue4/jquery-ui-1.8.4.custom','mainui/jquery-ui-1.8.4.custom','login')); ?>
		 <?php echo $this->Html->script(array('jquery-1.4.2.min','init','jquery.tools.min','jquery-ui-1.8.4.custom.min'));?>
		 <?php echo $scripts_for_layout; ?>

</head>
<body>
	
	<?php 
	
		echo $session->flash('auth');
		echo $this->Session->flash();
		echo $content_for_layout; 

	?>
	
	<?php echo  $this->element('sql_dump'); ?>
	<?php echo  $js->writeBuffer(); // Write cached scripts?>

</body>
</html>