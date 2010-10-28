<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
?>

<div class="documentations index">
	<!-- <div id="add-doc">Add Document</div> -->

	<h2><?php __('Documentations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('observation_id');?></th>
			<th><?php echo $this->Paginator->sort('Date','date_of');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions">&nbsp;</th>
	</tr>
	<?php
	$i = 0;
	foreach ($documentations as $documentation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($documentation['Observation']['name'], array('controller' => 'observations', 'action' => 'view', $documentation['Observation']['id'])); ?>
		</td>
		<td><?php echo $time->format('m/d/y', $documentation['Observation']['date_of']); ?>&nbsp;</td>
		<td><?php echo $time->format('m/d/y - h:i:s a', $documentation['Documentation']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $documentation['Documentation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $documentation['Documentation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $documentation['Documentation']['id']), null, sprintf(__('Are you sure you want to delete  %s?', true), $documentation['Documentation']['name'])); ?>
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
		<li><?php echo $this->Html->link(__('New Documentation', true), array('action' => 'add'), array('class'=>'new')); ?></li>
		<li><?php echo $this->Html->link(__('List Observation', true), array('controller' => 'observations', 'action' => 'index'), array('class'=>'list')); ?> 
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index'), array('class'=>'list')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lesson Plans', true), array('controller' => 'plans', 'action' => 'index'), array('class'=>'list')); ?> 
	</ul>

</div>