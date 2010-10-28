<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
?>

<div class="documentations form">
<?php echo $this->Form->create('Documentation');?>
	<fieldset>
 		<legend><?php __('Edit Documentation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('observation_id');
		echo $this->Form->input('doc_area');
		echo $this->Form->input('most_satisfactory');
		echo $this->Form->input('least_satisfactory');
		echo $this->Form->input('comments');
		echo $this->Form->input('e_comments');
		echo $this->Form->input('ob_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Documentation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Documentation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Documentations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observation', true), array('controller' => 'observations', 'action' => 'add')); ?> </li>
	</ul>
</div>