<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
  $this->set("content_title", "<span class='ss_sprite ss_comment_edit'></span>&nbsp;&nbsp;Comment Manager");  
?>
<div class="comments form">
	<h2><?php __('New Comment'); ?></h2>
<?php echo $this->Form->create('Comment');?>
	<fieldset>
 		<legend></legend>
	<?php
		echo $this->Form->input('observation_id', array('label'=>'For Observation Comment', 'empty'=>'Choose an observation'));
		echo "<p>OR</p><br />";
		echo $this->Form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
		echo $this->Form->input('employee_id', array('label'=>'For Trainee Comment', 'empty'=>'Choose a trainee'));
		echo $this->Form->input('month');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>