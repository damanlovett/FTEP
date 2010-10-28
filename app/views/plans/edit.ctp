<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
  $this->set("content_title", "<span class='ss_sprite ss_book_edit'></span>&nbsp;&nbsp;Lesson Plan Manager");  
?>

<div class="plans form">
<?php echo $this->Form->create('Plan');?>
	<fieldset>
 		<legend><?php __('Edit Plan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('observation_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Plan.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Plan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>