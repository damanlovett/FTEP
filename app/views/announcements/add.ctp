<?php	echo $this->Html->script('jHtmlArea-0.7.0');?>
<?php	echo $this->Html->css('jHtmlArea');?>
<div class="announcements form">
<?php echo $this->Form->create('Announcement');?>
<h2><?php __('New Announcement'); ?></h2>
	<fieldset>
 		<legend></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Announcements', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>