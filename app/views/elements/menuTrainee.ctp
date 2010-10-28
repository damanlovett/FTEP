<div id="#navAdmin">
	<ul id="menu">
		<li>Trainee:</li>
		<li><?php echo $html->link(__('My Account', true), array('controller'=>'employees', 'action'=>'my_view')); ?></li>
		<li><?php echo $html->link(__('Announcements', true), array('controller'=>'announcements', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Observation', true), array('controller'=>'observations', 'action'=>'trainee')); ?></li>
		<li><?php echo $html->link(__('Comments', true), array('controller'=>'comments', 'action'=>'trainee')); ?></li>
		<li><?php echo $html->link(__('Document Library', true), array('controller'=>'my_files', 'action'=>'index')); ?></li>
	</ul>
</div>
