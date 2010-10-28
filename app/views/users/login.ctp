

<div id="loginContainer">

	<div id="header">
		
		<h1>Field Training and Evaluation Program</h1>
		<h2>cary area emergency medical services</h2>
		
	</div>
	<div id="bd">
	<div id="info">
		
		<p>Welcome to the Cary Area EMS Field Training and Evaluation Program.  FTEP is an organized approach to training new employees in to an agency. It involves formally trained and designated FTOs, utilizing an agency standard toolset.
	</div>
	<div id="loginBox">
		
		<?php
				echo $form->create('User', array('action' => 'login'));
				echo $form->input('username');
				echo $form->input('password');
				
				echo $form->end('Login');
		?>
		
	</div>
	</div>
	<div class="clear"></div>

</div>
