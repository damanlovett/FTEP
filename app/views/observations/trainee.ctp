<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Trainee Daily Observation Report');
?>

<div class="observations index">
	<h2><?php __('Trainee Observations');?></h2>
	
	<!-- <div id="add-doc">Add Document</div> -->
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
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
		<td><?php echo $time->format('m/d/y', $observation['Observation']['date_of']); ?>&nbsp;</td>
		<td><?php echo $observation['Observation']['month']; ?>&nbsp;</td>
		<td><?php echo $observation['Observation']['station']; ?>&nbsp;</td>

		
		
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'trainee_view', $observation['Observation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'trainee'), array('class'=>'list')); ?> </li>
		 <!-- <li><?php //echo $this->Html->link(__('List Lesson Plans', true), array('controller' => 'plans', 'action' => 'trainee'), array('class'=>'list')); ?> </li> -->
	</ul>
</div>
