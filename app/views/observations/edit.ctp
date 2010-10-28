<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
?>
<div class="observations form">
	<h2><?php __('Edit Observation'); ?></h2>
<?php echo $this->Form->create('Observation');?>

	<?php echo $this->Form->input('archive'); ?>

	<fieldset>
 		<legend></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('user_id');
		//echo $this->Form->input('employee_id');
 		 
  		echo $this->Form->input('observation_num', array('label'=>'Report #','size'=>'2'));
		echo $this->Form->input('date_of', array('label'=>'Date of Observation','type'=>'text'));
		echo $this->Form->input('month', array('label'=>'Month', 'options'=>array(
																				'January'=>'January',
																				'Feburary'=>'Feburary',
																				'March'=>'March',
																				'April'=>'April',
																				'May'=>'May',
																				'June'=>'June',
																				'July'=>'July',
																				'August'=>'August',
																				'September'=>'September',
																				'October'=>'October',
																				'November'=>'November',
																				'December'=>'December',
																				)));
		echo $this->Form->input('station', array('label'=>'Station Assignment', 'size'=>'2'));
		echo $this->Form->input('nw', array('label'=>'Employee at Work', 'options'=>array(
																		'Yes'=>'Yes',
																		'No'=>'No')));
		echo $this->Form->input('lost_day');
		
	echo "<div id='observation'>";
		echo $this->Form->input('1', array('label'=>'General Appearance', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('2', array('label'=>'Acceptance of Feedback - FTO /Program', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('3', array('label'=>'Attitude Towards EMS Work', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('4t', array('label'=>'Knowledge of Divsional Standards', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('4p', array('label'=>'Knowledge of Divisional Standards', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('5t', array('label'=>'Knowledge of Cardiac Protocols', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('5p', array('label'=>'Knowledge of Cardiac Protocols', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('6t', array('label'=>'Knowledge of Trauma Protocols', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('6p', array('label'=>'Knowledge of Trauma Protocols', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('7t', array('label'=>'Knowledge of Medical Protocols', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('7p', array('label'=>'Knowledge of Medical Protocols', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('8t', array('label'=>'Knowledge of Pharmacology', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('8p', array('label'=>'Knowledge of Pharmacology', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('9t', array('label'=>'Knowledge of Pediatric Protocols', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('9p', array('label'=>'Knowledge of Pediatric Protocols', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('10', array('label'=>'Punctuality / Shift Change Procedures', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('11', array('label'=>'Equipment Readiness', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('12', array('label'=>'Assessment / Decision Making', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('13', array('label'=>'BLS Skills', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('14', array('label'=>'ALS Skills', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('15', array('label'=>'Driving Skills: Non - Emergent', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('16', array('label'=>'Driving Skills: Emergent', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('17', array('label'=>'Orientation: Response to Call / Mapping', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('18', array('label'=>'Field Performance: Stressful Conditions', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('19', array('label'=>'Self Initiated Field Activity: Protocols/Mapping', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('20', array('label'=>'Medic Safety: General', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('21', array('label'=>'Medic Safety: Universal Precautions', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('22', array('label'=>'Control of Scene: voice Command', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('23', array('label'=>'Control of Scene: Physical Skill', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('24', array('label'=>'Radio: Appropriate Use of Codes /Procedures', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('25', array('label'=>'Radio: Listens and Comprehends', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('26', array('label'=>'Radio: Articulation of Transmissions', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('27', array('label'=>'Supplementary Forms', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('28', array('label'=>'Report Writing: ECR', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('29', array('label'=>'Report Writing: Grammar / Spelling', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('30', array('label'=>'Report Writing: Appropriate Time Used', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('31', array('label'=>'With Patient / Citizens in General', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('32', array('label'=>'With Department Members, Peers and Other PS', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo $this->Form->input('33', array('label'=>'With Hospital Staff', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		
		echo "</div>";
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Observation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Observation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Observations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment', true), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentations', true), array('controller' => 'documentations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documentation', true), array('controller' => 'documentations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plans', true), array('controller' => 'plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan', true), array('controller' => 'plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
