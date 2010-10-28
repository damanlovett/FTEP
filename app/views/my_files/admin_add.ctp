<div class="myFiles form">
<?php echo $form->create('MyFile');?>
	<fieldset>
 		<legend><?php __('Add MyFile');?></legend>
	<?php
        echo $form->create('MyFile', array('action' => 'add', 'type' => 'file'));
        echo $form->input('name', array('label'=>'Title', 'style'=>'width:250px'));
        echo $form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
        echo $form->file('File');
		echo $form->end('Upload Document');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List MyFiles', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
