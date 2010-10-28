<div class="documentations form">

<?php echo $form->create(null, array('url' => '/documentations/add'));?>


	<fieldset>
 		<legend><?php __('Add Documentation'); ?></legend>
	<?php
		echo $this->Form->input('observation_id');
		
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