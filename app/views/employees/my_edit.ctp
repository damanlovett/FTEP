<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
  $this->set("content_title", "<span class='ss_sprite ss_vcard'></span>&nbsp;&nbsp;Account Manager");  
?>

<div class="employees form">
	<h2><?php __('Edit Account'); ?></h2>
<?php echo $this->Form->create('Employee');?>
	<fieldset>
 		<legend></legend>
	<?php
		echo $this->Form->input('username', array('size'=>'35'));
		echo $this->Form->input('first_name', array('size'=>'25'));
		echo $this->Form->input('last_name', array('size'=>'25'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

<div class="actions">

	<?php echo $this->element('profileInfo'); ?>

	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account', true), array('action' => 'my_edit')); ?> </li>
		<li><?php echo $this->Html->link(__('Change Password', true), array('action' => 'my_password')); ?> </li>
	</ul>
</div>
