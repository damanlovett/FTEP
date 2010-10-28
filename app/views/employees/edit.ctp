<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
  $this->set("content_title", "<span class='ss_sprite ss_vcard'></span>&nbsp;&nbsp;Trainee Roster"); 
?>

<div class="employees form">
<h2><?php __('Edit: '.$this->data['Employee']['name']); ?></h2>
<?php echo $this->Form->create('Employee');?>
	<fieldset>
		<legend></legend>
	<?php
		echo $this->Form->input('group_id', array('options'=>array(
																'5'=>'Volunteer',
																'6'=>'Full-time',
																)));
		echo $this->Form->input('username', array('size'=>'35'));
		echo $this->Form->input('admin', array('options'=>array(
																'0'=>'Read Only',
																'1'=>'Read/Write',
																'2'=>'Read/Write/Delete',
																'3'=>'Full Access',
																)));
		echo $this->Form->input('first_name', array('size'=>'25'));
		echo $this->Form->input('last_name', array('size'=>'25'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Employee.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Employee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trainee', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
	</ul>
</div>