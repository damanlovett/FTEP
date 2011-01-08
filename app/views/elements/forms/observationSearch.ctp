<div class="hideDivs search">
	
	<?php echo $this->Form->create('Observation', array('action' => 'month'));?>
	
	<?php echo $this->Form->input('id', array('label'=>'Filter by Month', 'options'=>array(
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
																				)));?>
	<?php echo $this->Form->end(__('Submit', true));?>
 </div>
<div class="hideDivs search">
	
	<?php echo $this->Form->create('Observation', array('action' => 'user'));?>
	
	<?php echo $this->Form->input('user', array('type'=>'select', 'label'=>'Filter by Employee'));?>
	<?php echo $this->Form->end(__('Submit', true));?>
 </div>
<div class="hideDivs search">
	
	<?php echo $this->Form->create('Observation', array('action' => 'export_xls'));?>
	
	<?php echo $this->Form->input('month', array('label'=>'Monthly Report', 'options'=>array(
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
																				)));?>
	<?php echo $this->Form->end(__('Submit', true));?>
 </div>
