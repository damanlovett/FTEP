<div id="#navAdmin">
	<ul id="menu">
		<li><?php echo $html->link(__('Announcement', true), array('controller'=>'announcements', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Observation', true), array('controller'=>'observations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Documentation', true), array('controller'=>'documentations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Trainee', true), array('controller'=>'employees', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Lesson Plans', true), array('controller'=>'plans', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Comments', true), array('controller'=>'comments', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('users', true), array('controller'=>'users', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Document Library', true), array('controller'=>'my_files', 'action'=>'index')); ?></li>
	</ul>
</div>
