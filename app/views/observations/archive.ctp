<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
?>

<div class="observations index">
	<h2><?php __('Observations');?></h2>
	
	<!-- <div id="add-doc">Add Document</div> -->
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('employee_id');?></th>
			<th><?php echo $this->Paginator->sort('Date','date_of');?></th>
			<th><?php echo $this->Paginator->sort('month');?></th>
			<th><?php echo $this->Paginator->sort('station');?></th>
			<th class="actions">&nbsp;</th>
	</tr>
	<?php
	$i = 0;
	foreach ($observations as $observation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $observation['Observation']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($observation['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $observation['Employee']['id'])); ?>
		</td>
		<td><?php echo $time->format('m/d/y', $observation['Observation']['date_of']); ?>&nbsp;</td>
		<td><?php echo $observation['Observation']['month']; ?>&nbsp;</td>
		<td><?php echo $observation['Observation']['station']; ?>&nbsp;</td>

		
		
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $observation['Observation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $observation['Observation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $observation['Observation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $observation['Observation']['name'])); ?>
			<?php echo $this->Html->link('Download', '/observations/export/'.$observation['Observation']['id']); ?>

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
	<h3><?php __('Observation Reports'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Basic Report', true), array('action' => 'export'), array('class'=>'report')); ?></li>
	</ul>
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Observation', true), array('action' => 'add'), array('class'=>'new')); ?></li>
		<li><?php echo $this->Html->link(__('List Documentations', true), array('controller' => 'documentations', 'action' => 'index'), array('class'=>'list')); ?> 
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index'), array('class'=>'list')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lesson Plans', true), array('controller' => 'plans', 'action' => 'index'), array('class'=>'list')); ?> 
	</ul>
</div>
