<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
  $this->set("content_title", "<span class='ss_sprite ss_vcard'></span>&nbsp;&nbsp;Trainee Roster");  
?>

<div class="employees form">
	<h2><?php __('New Trainee'); ?></h2>
<?php echo $this->Form->create('Employee');?>
	<fieldset>
 		<legend></legend>
	<?php
		echo $this->Form->input('group_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('admin');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trainee', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
	</ul>
</div>