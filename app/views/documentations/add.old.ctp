<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
?>

<div class="documentations form">
<?php echo $this->Form->create('Documentation');?>
	<fieldset>
 		<legend><?php __('Add Documentation'); ?></legend>
	<?php
		echo $this->Form->input('observation_id');
		echo $this->Form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
		echo "<div class='instructions'>
		<h2>Documentation of areas that scored \"1\" or \"7\". Please note the Objective #, score and reason for score.</h2>
		</div>";
		
		echo $this->Form->input('doc_area', array('label'=>''));
		
		echo "<div class='instructions'>
		<h2>The most satisfactory area of performance during this evaluation period. Please note the Objective #, and explain why this area was the most satisfactory: </h2>
		</div>";
		
		echo $this->Form->input('most_satisfactory', array('label'=>''));
		
		echo "<div class='instructions'>
		<h2>The least satisfactory area of performance during this evaluation period. Please note the Objective #,and explain why this area was the least satisfactory: </h2>
		</div>";
		
		echo $this->Form->input('least_satisfactory', array('label'=>''));
		
		echo "<div class='instructions'>
		<h2>Field Trainer Comments: </h2>
		</div>";
		
		echo $this->Form->input('comments', array('label'=>''));
		
		echo "<div class='instructions'>
		<h2>Employee Comments: </h2>
		</div>";
		
		echo $this->Form->input('e_comments', array('label'=>''));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Documentations', true), array('action' => 'index'), array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('controller' => 'observations', 'action' => 'index'), array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index'), array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index'), array('class'=>'list'));?></li>
	</ul>
</div>
<div id="dialog">
<?php echo $this->Form->create(null, array('url' => array('controller' => 'comments', 'action' => 'add'))); ?>
	<fieldset>
 		<legend><?php __('Add Comment'); ?></legend>
	<?php
		//echo $this->Form->input('observation_id');
		echo $this->Form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
		echo $this->Form->input('employee_id');
		echo $this->Form->input('month');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<div id="add-doc">ADD DOCUMENTATION</div>
<?php echo $this->Form->end(__('Submit', true));?>
</div>