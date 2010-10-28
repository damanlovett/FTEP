<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
  $this->set("content_title", "<span class='ss_sprite ss_vcard'></span>&nbsp;&nbsp;Trainee Manager");  
?>

<div class="employees index">
	<h2><?php __('Trainee Roster');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($employees as $employee):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><strong><?php echo $employee['Employee']['name']; ?>&nbsp;</strong><br />
			<?php echo $switches->groupLevel($employee['Employee']['group_id']) ?>
		</td>
		<td><?php echo $employee['Employee']['username']; ?>&nbsp;</td>
		<td><?php echo $time->format('m/d/y h:i a',$employee['Employee']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $employee['Employee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['Employee']['first_name'])); ?>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Documentation', true), array('controller'=>'documentations', 'action' => 'index'), array('class'=>'list')); ?></li>
		<li><?php echo $this->Html->link(__('List Observation', true), array('controller' => 'observations', 'action' => 'index'), array('class'=>'list')); ?> 
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index'), array('class'=>'list')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lesson Plans', true), array('controller' => 'plans', 'action' => 'index'), array('class'=>'list')); ?> 
	</ul>
</div>