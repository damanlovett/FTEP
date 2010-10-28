<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Admin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['admin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php __('Related Profiles');?></h3>
	<?php if (!empty($user['Profile'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['title'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['created'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Profile', true), array('controller' => 'profiles', 'action' => 'edit', $user['Profile']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Observations');?></h3>
	<?php if (!empty($user['Observation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Date Of'); ?></th>
		<th><?php __('Month'); ?></th>
		<th><?php __('Station'); ?></th>
		<th><?php __('Nw'); ?></th>
		<th><?php __('1'); ?></th>
		<th><?php __('2'); ?></th>
		<th><?php __('3'); ?></th>
		<th><?php __('4t'); ?></th>
		<th><?php __('4p'); ?></th>
		<th><?php __('5t'); ?></th>
		<th><?php __('5p'); ?></th>
		<th><?php __('6t'); ?></th>
		<th><?php __('6p'); ?></th>
		<th><?php __('7t'); ?></th>
		<th><?php __('7p'); ?></th>
		<th><?php __('8t'); ?></th>
		<th><?php __('8p'); ?></th>
		<th><?php __('9t'); ?></th>
		<th><?php __('9p'); ?></th>
		<th><?php __('10'); ?></th>
		<th><?php __('11'); ?></th>
		<th><?php __('12'); ?></th>
		<th><?php __('13'); ?></th>
		<th><?php __('14'); ?></th>
		<th><?php __('15'); ?></th>
		<th><?php __('16'); ?></th>
		<th><?php __('17'); ?></th>
		<th><?php __('18'); ?></th>
		<th><?php __('19'); ?></th>
		<th><?php __('20'); ?></th>
		<th><?php __('21'); ?></th>
		<th><?php __('22'); ?></th>
		<th><?php __('23'); ?></th>
		<th><?php __('24'); ?></th>
		<th><?php __('25'); ?></th>
		<th><?php __('26'); ?></th>
		<th><?php __('27'); ?></th>
		<th><?php __('28'); ?></th>
		<th><?php __('29'); ?></th>
		<th><?php __('30'); ?></th>
		<th><?php __('31'); ?></th>
		<th><?php __('32'); ?></th>
		<th><?php __('33'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Observation'] as $observation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $observation['id'];?></td>
			<td><?php echo $observation['user_id'];?></td>
			<td><?php echo $observation['date_of'];?></td>
			<td><?php echo $observation['month'];?></td>
			<td><?php echo $observation['station'];?></td>
			<td><?php echo $observation['nw'];?></td>
			<td><?php echo $observation['1'];?></td>
			<td><?php echo $observation['2'];?></td>
			<td><?php echo $observation['3'];?></td>
			<td><?php echo $observation['4t'];?></td>
			<td><?php echo $observation['4p'];?></td>
			<td><?php echo $observation['5t'];?></td>
			<td><?php echo $observation['5p'];?></td>
			<td><?php echo $observation['6t'];?></td>
			<td><?php echo $observation['6p'];?></td>
			<td><?php echo $observation['7t'];?></td>
			<td><?php echo $observation['7p'];?></td>
			<td><?php echo $observation['8t'];?></td>
			<td><?php echo $observation['8p'];?></td>
			<td><?php echo $observation['9t'];?></td>
			<td><?php echo $observation['9p'];?></td>
			<td><?php echo $observation['10'];?></td>
			<td><?php echo $observation['11'];?></td>
			<td><?php echo $observation['12'];?></td>
			<td><?php echo $observation['13'];?></td>
			<td><?php echo $observation['14'];?></td>
			<td><?php echo $observation['15'];?></td>
			<td><?php echo $observation['16'];?></td>
			<td><?php echo $observation['17'];?></td>
			<td><?php echo $observation['18'];?></td>
			<td><?php echo $observation['19'];?></td>
			<td><?php echo $observation['20'];?></td>
			<td><?php echo $observation['21'];?></td>
			<td><?php echo $observation['22'];?></td>
			<td><?php echo $observation['23'];?></td>
			<td><?php echo $observation['24'];?></td>
			<td><?php echo $observation['25'];?></td>
			<td><?php echo $observation['26'];?></td>
			<td><?php echo $observation['27'];?></td>
			<td><?php echo $observation['28'];?></td>
			<td><?php echo $observation['29'];?></td>
			<td><?php echo $observation['30'];?></td>
			<td><?php echo $observation['31'];?></td>
			<td><?php echo $observation['32'];?></td>
			<td><?php echo $observation['33'];?></td>
			<td><?php echo $observation['created'];?></td>
			<td><?php echo $observation['modified'];?></td>
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
