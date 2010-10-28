<div class="users form">
<h2><?php __('Edit: '.$users['User']['name']); ?></h2>
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_id');
		echo $this->Form->input('username', array('size'=>'35'));
		//echo $this->Form->input('password');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), array('class'=>'delete'), sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'),array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index'),array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add'),array('class'=>'new'));?></li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index'),array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add'),array('class'=>'new'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index'),array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add'),array('class'=>'new'));?></li>
	</ul>
</div>