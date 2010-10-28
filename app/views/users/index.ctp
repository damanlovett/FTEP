<div class="users index">
	<h2><?php __('System Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('group_id');?></th>
			<th><?php echo $this->Paginator->sort('admin');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td><?php echo $switches->accessLevel($user['User']['admin']); ?>&nbsp;</td>
		<!-- <td><?php echo $user['User']['admin']; ?>&nbsp;</td> -->
		<td><?php echo $time->format('m/d/y - h:i:s a', $user['User']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete %s? This can not be undone and will delete all their observations!!', true), $user['User']['name'])); ?>
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
	
		<?php if ( $session->read('Auth.User.group_id') < 3 ) {
				
				echo $this->element('admin/menuUser');
				
			}
		?>
		
	
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Documentation', true), array('controller'=>'documentations', 'action' => 'index'), array('class'=>'list')); ?></li>
		<li><?php echo $this->Html->link(__('List Observation', true), array('controller' => 'observations', 'action' => 'index'), array('class'=>'list')); ?> 
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index'), array('class'=>'list')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lesson Plans', true), array('controller' => 'plans', 'action' => 'index'), array('class'=>'list')); ?> 
	</ul>
</div>