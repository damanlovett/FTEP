<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
?>

<div class="documentations view">
<h2><?php  __('Documentation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($documentation['Observation']['name'], array('controller' => 'observations', 'action' => 'view', $documentation['Observation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Doc Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentation['Documentation']['doc_area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Most Satisfactory'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentation['Documentation']['most_satisfactory']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Least Satisfactory'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentation['Documentation']['least_satisfactory']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comments'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentation['Documentation']['comments']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employee Comments'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentation['Documentation']['e_comments']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ob Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentation['Documentation']['ob_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentation['Documentation']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentation['Documentation']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Documentation', true), array('action' => 'edit', $documentation['Documentation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Documentation', true), array('action' => 'delete', $documentation['Documentation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentation['Documentation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documentation', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
	</ul>
</div>
