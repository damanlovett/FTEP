	<div id="profileInfo">
	<h3>Profile Information</h3>
	<ul>
		<li><strong><?php echo $session->read('Auth.User.name') ;?></strong></li>
		<li><?php echo $switches->accessLevel($session->read('Auth.User.admin')) ?>
		<li><?php echo $switches->groupLevel($session->read('Auth.User.group_id')) ;?></li>
		<li><?php echo $session->read('Auth.User.username') ;?></li>
	</ul>
	</div>
	<br />
	<br />
	<h3>Important Links</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Calendar', true), array('action'=>'calendar')); ?></li>
		<li><?php echo $this->Html->link(__('Profile', true), array('controller'=>'employees', 'action'=>'my_view')); ?></li>
		<li><?php echo $this->Html->link(__('Observations', true), array('controller'=>'observations')); ?></li>
	</ul>
	<br />