<?php	echo $this->Html->script('jHtmlArea-0.7.0');?>
<?php	echo $this->Html->css('jHtmlArea');?>
<div class="announcements form">
	<h2><?php __('Edit Announcement'); ?></h2>
<?php echo $this->Form->create('Announcement');?>
	<fieldset>
 		<legend></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
		echo $this->Form->input('title', array('style'=>'width: 250px;'));
		echo $this->Form->input('announcement', array('class'=>'DefaultHtmlArea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Announcement.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Announcement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Announcements', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>