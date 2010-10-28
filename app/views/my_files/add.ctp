<div class="myFiles form">
<h2>My Resume</h2>
	<fieldset>
<?php echo $form->create('MyFile', array('action' => 'add', 'type' => 'file'));?>
	<?php
		echo $form->input('name');
		echo $form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
		echo $form->file('File');
	?>
<?php echo $form->end('Upload');?>
	</fieldset>
</div>
