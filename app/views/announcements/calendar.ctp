<div class="announcements index">
	<h2><?php __('FTEP Calendar');?></h2>


<iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ff6600&amp;src=3up2auidbk8su34nbs2va17s7k%40group.calendar.google.com&amp;color=%23B1365F&amp;src=gp86qv284ueuv87gigs90dau1g%40group.calendar.google.com&amp;color=%231B887A&amp;src=p5m15b5utif46ck527nm4gau6o%40group.calendar.google.com&amp;color=%23A32929&amp;src=p2t4oetevpgbtd0e2sv91otogc%40group.calendar.google.com&amp;color=%2323164E&amp;ctz=America%2FNew_York" style=" border:solid 1px #777 " width="800" height="600" frameborder="0" scrolling="no"></iframe>


</div>
<div class="actions">
	<!-- <ul>
		<li><?php echo $this->Html->link(__('New Announcement', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
	-->

	<?php echo $this->element('profileInfo');?>

	<?php if ( $session->read('Auth.User.group_id') < 3 ) {
				
				echo $this->element('admin/menuAnnouncements');
				
			}
		?>
</div>