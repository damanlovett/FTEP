<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
  $this->set("content_title", "<span class='ss_sprite ss_book_edit'></span>&nbsp;&nbsp;Lesson Plan Manager");  
?>
<div class="plans form">

	<h2><?php echo "New Plan"; ?></h2>
<?php echo $this->Form->create('Plan');?>
	<fieldset>
 		<legend></legend>
	<?php
		echo $this->Form->hidden('observation_id', array('value'=> $this->params['pass'][0]));
		echo $this->Form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
      echo $this->Form->input('due');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plans', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
