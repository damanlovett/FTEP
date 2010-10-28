<?php if ($session->read('Auth.User.group_id') == 1):?>
<div id="#navAdmin">
	<ul id="menu">
		<li>Super Admin:</li>
		<li><?php echo $html->link(__('My Account', true), array('controller'=>'employees', 'action'=>'my_view')); ?></li>
		<li><?php echo $html->link(__('Announcements', true), array('controller'=>'announcements', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Observation', true), array('controller'=>'observations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Documentation', true), array('controller'=>'documentations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Trainees', true), array('controller'=>'employees', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Lesson Plans', true), array('controller'=>'plans', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Comments', true), array('controller'=>'comments', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('users', true), array('controller'=>'users', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Document Library', true), array('controller'=>'my_files', 'action'=>'index')); ?></li>
		<li><?php echo $session->read('Auth.User.group_id'); ?></li>
	</ul>
</div>
<?php elseif ($session->read('Auth.User.group_id') == 2):?>
<div id="#navAdmin">
	<ul id="menu">
		<li>C</li>
		<li><?php echo $html->link(__('My Account', true), array('controller'=>'employees', 'action'=>'my_view')); ?></li>
		<li><?php echo $html->link(__('Announcements', true), array('controller'=>'announcements', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Observation', true), array('controller'=>'observations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Documentation', true), array('controller'=>'documentations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Trainees', true), array('controller'=>'employees', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Lesson Plans', true), array('controller'=>'plans', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Comments', true), array('controller'=>'comments', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('users', true), array('controller'=>'users', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Document Library', true), array('controller'=>'my_files', 'action'=>'index')); ?></li>
	</ul>
</div>
<?php elseif ($session->read('Auth.User.group_id') == 3):?>
<div id="#navAdmin">
	<ul id="menu">
		<li>F</li>
		<li><?php echo $html->link(__('My Account', true), array('controller'=>'employees', 'action'=>'my_view')); ?></li>
		<li><?php echo $html->link(__('Announcements', true), array('controller'=>'announcements', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Observation', true), array('controller'=>'observations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Documentation', true), array('controller'=>'documentations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Trainees', true), array('controller'=>'employees', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Lesson Plans', true), array('controller'=>'plans', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Comments', true), array('controller'=>'comments', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Document Library', true), array('controller'=>'my_files', 'action'=>'index')); ?></li>
	</ul>
</div>
<?php elseif ($session->read('Auth.User.group_id') == 4):?>
<div id="#navAdmin">
	<ul id="menu">
		<li>P</li>
		<li><?php echo $html->link(__('My Account', true), array('controller'=>'employees', 'action'=>'my_view')); ?></li>
		<li><?php echo $html->link(__('Announcements', true), array('controller'=>'announcements', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Observation', true), array('controller'=>'observations', 'action'=>'pre_index')); ?></li>
		<li><?php echo $html->link(__('Documentation', true), array('controller'=>'documentations', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Trainees', true), array('controller'=>'employees', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Lesson Plans', true), array('controller'=>'plans', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Comments', true), array('controller'=>'comments', 'action'=>'index')); ?></li>
		<li><?php echo $html->link(__('Document Library', true), array('controller'=>'my_files', 'action'=>'index')); ?></li>
	</ul>
</div>
 <?php endif; ?>