<div class="users form">
	<h2><?php __('New System User'); ?></h2>
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend></legend>
	<?php
		echo $this->Form->input('group_id');
		echo $this->Form->input('username', array('size'=>'35'));
		echo $this->Form->input('password');
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

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'), array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index'), array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index'), array('class'=>'list'));?></li>
	</ul>
</div>