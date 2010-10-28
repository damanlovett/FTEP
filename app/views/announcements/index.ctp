<div class="announcements index">
	<h2><?php __('System Announcements');?></h2>
	<table id="announceTable" cellpadding="0" cellspacing="0">
	<?php
	$i = 0;
	foreach ($announcements as $announcement):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>&nbsp;</tr>
	<tr>
		<td>
		
			<h3><?php echo $announcement['Announcement']['title']; ?></h3>
			<?php echo $announcement['Announcement']['announcement']; ?>
			<h5><?php echo $time->format('m/d/y - h:i a', $announcement['Announcement']['created'])." - ".$announcement['User']['name']; ?></h5>
			<br />
			<br />
		</td>
			</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<!-- <ul>
		<li><?php echo $this->Html->link(__('New Announcement', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
	-->
	<div id="profileInfo">
	<h3>Profile Information</h3>
	<ul>
		<li><strong><?php echo $session->read('Auth.User.name') ;?></strong></li>
		<li><?php echo $switches->accessLevel($session->read('Auth.User.admin')) ?>
		<li><?php echo $switches->groupLevel($session->read('Auth.User.group_id')) ;?></li>
		<li><?php echo $session->read('Auth.User.username') ;?></li>
	</ul>
	</div>
	<?php if ( $session->read('Auth.User.group_id') < 3 ) {
				
				echo $this->element('admin/menuAnnouncements');
				
			}
		?>
</div>