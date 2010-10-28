<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
  $this->set("content_title", "<span class='ss_sprite ss_vcard'></span>&nbsp;&nbsp;Trainee Roster");  
?>

<div class="employees view">
<h2><?php  echo $employee['Employee']['name'];?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo "********"; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Admin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $switches->groupLevel($employee['Employee']['group_id']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $time->format('m/d/y h:i a', $employee['Employee']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $time->format('m/d/y h:i a', $employee['Employee']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trainee', true), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Trainee', true), array('action' => 'delete', $employee['Employee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainee', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trainee', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Observations');?></h3>
	<?php if (!empty($employee['Observation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Date'); ?></th>
		<th><?php __('Month'); ?></th>
		<th><?php __('Station'); ?></th>
		<th><?php __('Not Working'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['Observation'] as $observation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $observation['date_of'];?></td>
			<td><?php echo $observation['month'];?></td>
			<td><?php echo $observation['station'];?></td>
			<td><?php echo $observation['nw'];?></td>
			<td><?php echo $time->format('m/d/y h:i a', $observation['created']);;?></td>
			<td><?php echo $time->format('m/d/y h:i a', $observation['modified']);;?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'observations', 'action' => 'view', $observation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'observations', 'action' => 'edit', $observation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'observations', 'action' => 'delete', $observation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $observation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
