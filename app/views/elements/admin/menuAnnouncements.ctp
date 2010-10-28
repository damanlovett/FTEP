<h3>Admin Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add Announcement', true), array('controller'=>'announcements', 'action' => 'add'), array('class'=>'new')); ?></li>
		 <li><?php echo $this->Html->link(__('List Announcement', true), array('controller'=>'announcements', 'action' => 'my_list'), array('class'=>'list')); ?></li> 
	</ul>
