<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
?>

<div class="observations view">
<h2><?php echo $time->format( 'l F d, Y', $observation['Observation']['date_of'])." - ".$observation['Employee']['name']; ?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($observation['User']['name'], array('controller' => 'users', 'action' => 'view', $observation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($observation['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $observation['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('#'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $time->format('m/d/y', $observation['Observation']['date_of']) ; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Month'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['month']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Station'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['station']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nw'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['nw']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lost Day'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['lost_day']; ?>
			&nbsp;
		</dd>
		<div class="tableView toggle_containerf">
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('1 General Appearance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('2 Acceptance of Feedback - FTO /Program'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('3 Attitude Towards EMS Work'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['3']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('4 Knowledge of Divsional Standards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['4t']; ?>
			&nbsp;
		</dd>


<div class="hideDiv">		
	<!-- Hide Until sure to be deleted -->
	
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('4p Knowledge of Divisional Standards'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['4p']; ?>
			&DELETE;
		</dd>
		
</div>		
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('5 Operational Testing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['5t']; ?>
			&nbsp;
		</dd>
		
<div class="hideDiv">		
	<!-- Hide Until sure to be deleted -->
	
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('5p Knowledge of Cardiac Protocols'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['5p']; ?>
			&DELETE;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('6t Knowledge of Trauma Protocols'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['6t']; ?>
			&DELETE;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('6p Knowledge of Trauma Protocols'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['6p']; ?>
			&DELETE;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('7t Knowledge of Medical Protocols'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['7t']; ?>
			&DELETE;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('7p Knowledge of Medical Protocols'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['7p']; ?>
			&DELETE;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('8t Knowledge of Pharmacology'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['8t']; ?>
			&DELETE;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('8p Knowledge of Pharmacology'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['8p']; ?>
			&DELETE;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('9t Knowledge of Pediatric Protocols'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['9t']; ?>
			&DELETE;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('9p Punctuality / Pediatric Protocols'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['9p']; ?>
			&DELETE;
		</dd>>
		
</div>		
		
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('6 Punctuality / Shift Change Procedures'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['10']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('7 Equipment Readiness'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['11']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('8 Assessment / Decision Making'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['12']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('9 BLS Skills'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['13']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('10 ALS Skills'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['14']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('11 Driving Skills: Non - Emergent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['15']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('12 Driving Skills: Emergent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['16']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('13 Orientation: Response to Call / Mapping'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['17']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('14 Field Performance: Stressful Conditions'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['18']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('15 Self Initiated Field Activity: Protocols/Mapping'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['19']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('16 Medic Safety: General'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['20']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('17 Medic Safety: Universal Precautions'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['21']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('18 Control of Scene: voice Command'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['22']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('19 Control of Scene: Physical Skill'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['23']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('20 Radio: Appropriate Use of Codes /Procedures'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['24']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('21 Radio: Listens and Comprehends'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['25']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('22 Radio: Articulation of Transmissions'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['26']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('23 Supplementary Forms'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['27']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('24 Report Writing: ECR'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['28']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('25 Report Writing: Grammar / Spelling'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['29']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('26 Report Writing: Appropriate Time Used'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['30']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('27 With Patient / Citizens in General'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['31']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('28 With Department Members, Peers and Other PS'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['32']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('29 With Hospital Staff'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['33']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comments'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['comments']; ?>
			&nbsp;
		</dd>
		</div>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $observation['Observation']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Observation', true), array('action' => 'edit', $observation['Observation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Observation', true), array('action' => 'delete', $observation['Observation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $observation['Observation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Comments');?></h3>
	<?php if (!empty($observation['Comment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Employee Id'); ?></th>
		<th><?php __('Month'); ?></th>
		<th><?php __('Comments'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($observation['Comment'] as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comment['employee_id'];?></td>
			<td><?php echo $comment['month'];?></td>
			<td><?php echo $comment['comments'];?></td>
			<td><?php echo $comment['created'];?></td>
			<td><?php echo $comment['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php __('Related Documentations');?></h3>
	<?php if (!empty($observation['Documentation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Ob Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($observation['Documentation'] as $documentation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $documentation['ob_date'];?></td>
			<td><?php echo $documentation['created'];?></td>
			<td><?php echo $documentation['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'documentations', 'action' => 'view', $documentation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'documentations', 'action' => 'edit', $documentation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'documentations', 'action' => 'delete', $documentation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php __('Related Plans');?></h3>
	<?php if (!empty($observation['Plan'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($observation['Plan'] as $plan):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $plan['created'];?></td>
			<td><?php echo $plan['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'plans', 'action' => 'view', $plan['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'plans', 'action' => 'edit', $plan['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'plans', 'action' => 'delete', $plan['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $plan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
