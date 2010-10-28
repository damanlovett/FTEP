<?php //$javascript->link('jquery.tools.min', false);?>
<?php $javascript->link('tooltip', false);?>
<?php 
  $this->set('body_attr', array('class' => 'add_observation'));
  $this->set('title_for_layout', 'Daily Observation Report');
?>
<div class="observations form">
	<h2><?php __('New Observation: '); ?><span>STEP 1 OF 2</span></h2>
<?php echo $this->Form->create('Observation');?>
	<fieldset>
		<legend></legend>
	<?php
	
	
		//echo $this->Form->input('user_id');
		echo $this->Form->hidden('user_id', array('value'=>$session->read('Auth.User.id')));
		echo $this->Form->input('employee_id', array('label'=>'Trainee'));
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
			echo "<div class='helpimg'><img src='../img/questionmark.png' title='<span>1. GENERAL APPEARANCE - Evaluates physical appearance, dress and demeanor.</span> <br /><br />(1)Unacceptable -  Dirty or unpolished shoes and wrinkled uniform. Uniform fits poorly or is improperly worn.  Uniform insignias- badge, nametag etc.. missing or improperly displayed. Refer to Divisional Standard 4.6.   Hair ungroomed and/or in violation of Divisional Standard 4.8.  Offensive body odor and breath. Note: Employees are not responsible for equipment not issued.
<br /><br />(4) Acceptable - Uniform neat, pressed and clean. Uniform fits and is worn properly. Hair within regulations, Footwear is shined.

<br /><br />(7) Superior - Uniform neat, clean and tailored. Displays professional posture. Footwear is spit-shined'/></div>";

		echo $this->Form->input('1', array('label'=>'1 General Appearance', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='2. ACCEPTANCE OF FEEDBACK: FTO/FTO PROGRAM - Evaluates the way the new employee accepts trainers criticism and how that feedback is used to further the learning process and improve performance.
<br /><br />(1) Unacceptable - Rationalizes mistakes, denies that errors were made, is argumentative, refuses to, or does not attempt to, make corrections. Considers criticism as personal attack.
<br /><br />(4) Acceptable - Accepts criticism in a positive manner and applies it to improve performance and further learning.
<br /><br />(7) Superior - Actively solicits criticism/feedback in order to further learning and improve performance. Does not argue or blame others for errors.'/></div>";

		echo $this->Form->input('2', array('label'=>'2 Acceptance of Feedback - FTO /Program', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='3. ATTITUDE TOWARD EMS WORK - Evaluates how the new employee views new career in terms of personal motivation, goals and acceptance of the responsibilities of the job.
<br /><br />(1) Unacceptable - Sees career only as a job, uses job to boost ego, abuses authority, demonstrates little dedication to the principles of the profession.<br /><br />

(4) Acceptable - Demonstrates an active interest in new career and in EMS responsibilities.
<br /><br />(7) Superior - Utilizes off-duty time to further professional knowledge and improve skills. Demonstrates concern for community education. Maintains high ideals in terms of professional responsibilities.'/></div>";
																	
		echo $this->Form->input('3', array('label'=>'3 Attitude Towards EMS Work', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='4. CLINICAL TESTING: Evaluates the new employee knowledge of the clinical aspects of the job including a working knowledge of the protocols and ability to apply that knowledge in field situations.<br /><br />

-Can be Reflected by Testing/Field Performance-<br /><br />

(1) Unacceptable - Does not know the elements of protocols. Is unable to choose the correct medications or dosages. Does not recognize rhythm strips when encountered or makes mistakes relative to whether or not treatment should be given. When tested, verbally or written, answers with 69% or less accuracy.<br /><br />

(4) Acceptable - Recognizes commonly encountered protocols and applies appropriate treatment. Selects correct medications in timely manner and administers correctly. Know difference between when to treat and when not to treat. When tested, verbally or written, answers with over 70% accuracy.<br /><br />

(7) Superior - Has outstanding knowledge of protocols and applies that knowledge to normal and unusual calls. Quickly and effectively applies treatment protocols. When tested, verbally or written, answers with 100% accuracy. .'/></div>";
		echo $this->Form->input('4t', array('label'=>'4 Clinical Testing', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));				
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='5. OPERATIONAL TESTING: Evaluates the new employee knowledge of departmental procedures, operation tasks and the ability to apply this knowledge under field conditions.<br /><br />

-Can be Reflected by Testing/Field Performance-<br /><br />

(1) Unacceptable - Fails to display knowledge of department policies/regulation/procedures/operational tasks or violates same. When tested, verbally or written, answers with 69% or less accuracy.<br /><br />

(4) Acceptable - Familiar with most commonly applied department policies/regulation/procedures/operational tasks, including lesser-known and seldom used ones. When tested, verbally or written, answers with over 70% accuracy. When tested, verbally or written, answers with 100% accuracy.<br /><br />

(7) Superior - Familiar with all department policies and operational tasks. Including lesser used policies.'/></div>";
																							
		echo $this->Form->input('5t', array('label'=>'5 Operational Testing', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));									
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='6.PUNCUTALITY / SHIFT CHANGE PROCEDURES - Evaluates the new employee punctuality in reporting for duty.  Evaluates new employee conformance to Divisional Standard in regards to uniform and PPE when reporting for duty. Evaluates new employees conformance to Divisional Standards in regards to shift change procedures.(ie. Controlled substance change over, unit report)<br /><br />

(1) Unacceptable - Fails to report for duty at scheduled time. Fails to arrive at work in uniform ready for duty. Fails to follow proper procedures for shift change.<br /><br />

(4) Acceptable - Arrives at work at the assigned time. Reports to work in the proper uniform ready for duty. Follows proper procedures for shift change.<br /><br />

(7) Superior - Arrives at work at least 30 minutes prior to shift change. Volunteers to stay past assigned shift time to help in the event of shift vacancies. Ensures off going and oncoming relief adheres to proper shift change procedures. '/></div>";

		echo $this->Form->input('10', array('label'=>'6 Punctuality / Shift Change Procedures', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='7. EQUIPMENT READINESS- Evaluates the new employees ability to effectively prepare their equipment on a daily basis. Evaluates the new employees ability to restock equipment after each call.

   <br /><br />(1) Unacceptable- Fails or has to be prompted to follow departmental policy and procedure.

   (4) Acceptable- Follows departmental policy and procedure.  Understands and applies this to daily operations.

   <br /><br />(7) Superior- Always prepares equipment no matter what the situation.  Keeps partner informed and determines the best option for equipment readiness.'/></div>";
																	

		echo $this->Form->input('11', array('label'=>'7 Equipment Readiness', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='8. ASSESSMENT / DECISION MAKING – Evaluates the new employees ability to perform a thorough patient assessment, interprets findings accurately, plans an appropriate course of treatment and transports in a timely manner.

<br /><br />(1)                    Unacceptable- Unable to perform a focused exam and determine patient’s underlying condition accordingly. Is indecisive, naïve and is unable to reason through a patient complaint and come to a treatment decision. Does not know when to begin transport.

<br /><br />(4)                    Acceptable- Is able to perform a focused exam and determine a patient’s underlying condition accordingly. Is able to make appropriate treatment decisions based on assessment findings. Transports in a timely manner.

<br /><br />(7) Superior- Is able to perform a pertinent advanced, comprehensive patient assessment.  Accurately interprets atypical patient presentations.  Anticipates problems and prepares resolutions in advance. Transports in a timely manner.'/></div>";
																	

		echo $this->Form->input('12', array('label'=>'8 Assessment / Decision Making', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='9.  BLS SKILLS- Evaluates the new employees skill in the delivery of Basic Life Support skills to the patient.
<br /><br />(1) Unacceptable - Does not perform BLS skills in a timely, appropriate or proper manner (ie-bag valve mask use, oral airway use, CPR, c-spine protection, etc.)
(4) Acceptable - Performs required BLS, does correctly and properly in a timely and appropriate manner.
<br /><br />(7) Superior - Performs in all cases, anticipating needs of patient and care team.'/></div>";
																	

		echo $this->Form->input('13', array('label'=>'9 BLS Skills', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='10.  ALS SKILLS- Evaluates the new employees skill in the delivery of Advanced Life Support skills to the patient.
<br /><br />(1) Unacceptable - Does not perform ALS skills in a timely, appropriate or proper manner. ie-IV start, EKG monitoring, medication use and delivery, etc.

<br /><br />(4) Acceptable - Follows required ALS skills correctly and properly in a timely and appropriate manner.

<br /><br />(7) Superior - Follows proper skills in all cases, anticipating needs of patient and care team.'/></div>";
																	

		echo $this->Form->input('14', array('label'=>'10 ALS Skills', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='11.   DRIVING SKILL: NON-EMERGENT - Evaluates the new employees skill in the operation of the emergency vehicle under normal driving conditions.
<br /><br />(1) Unacceptable - Frequently violates traffic laws. Involved in chargeable accidents. Fails to maintain control of vehicle or displays poor manipulative skills in vehicle operation.
(4) Acceptable - Obeys traffic laws at all times. Maintains control of the vehicle. Performs vehicle operation while maintaining an alertness to surrounding activity. Drives defensively.
<br /><br />(7) Superior - Sets an example for lawful, courteous driving. Maintains complete control of the vehicle while performing other tasks. Is a superior defensive driver.'/></div>";
																	

		echo $this->Form->input('15', array('label'=>'11 Driving Skills: Non - Emergent', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='12.   DRIVING SKILL: EMERGENT - Evaluates the new employees skill in vehicle operation under emergency situations and in situations calling for other than usual driving skill.
<br /><br />(1)                     Unacceptable - Involved in chargeable accidents. Uses red lights and siren unnecessarily or improperly. Drives too fast. Loses control of the vehicles.
<br /><br />(4) Acceptable - Maintains control of vehicle and evaluates driving situations properly.
<br /><br />(7) Superior - Displays high degree of reflex ability and driving competence. Anticipates driving situations in advance and acts accordingly. Practices defensive techniques. Responds very well relative to the degree of stress present.'/></div>";
																	

		echo $this->Form->input('16', array('label'=>'12 Driving Skills: Emergent', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='13.   ORIENTATION/RESPONSE TO CALLS/MAPPING - Evaluates the new employees awareness of surroundings, ability to find locations and arrive at destination within an acceptable period of time. Ability to navigate.
<br /><br />(1) Unacceptable - Unaware of location while driving. Does not properly use the map system.
Unable to relate location to destination. Gets lost. Expends too much time getting to destination. Reflex times are not within standard.
(4) Acceptable - Is aware of location while driving. Properly uses the map system. Can relate location to destination. Employee’s reflex times are within acceptable according to standards throughout the shift. Arrives within reasonable amount of time.
<br /><br />(7) Superior - Remembers locations from previous visits and does not need the map to get there. Is aware of shortcuts and utilizes them to save time. High level of orientation to the district and / or city.'/></div>";
																	

		echo $this->Form->input('17', array('label'=>'13 Orientation: Response to Call / Mapping', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='14.   FIELD PERFORMANCE: STRESS CONDITIONS - Evaluates the new employees ability to perform in moderate and high stress situations. (ie, During calls)
<br /><br />(1) Unacceptable - Becomes emotional, is panic stricken, can not function, holds back, loses temper or displays inability to make a decision. Overreacts.
<br /><br />(4) Acceptable - Maintains calm and self-control in most situations, determines proper course of action and takes it. Does not allow the situation to further deteriorate.
<br /><br />(7) Superior - Maintains calm and self-control in even the most extreme situations. Quickly restores control in the situation and takes command. Determines best course of action and takes it.'/></div>";
																	

		echo $this->Form->input('18', array('label'=>'14 Field Performance: Stressful Conditions', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='15.   SELF-INITIATED FIELD ACTIVITY:MAPPING, MEDICAL JOURNAL READING, AMBULANCE INVENTORY AND FAMILIARIZATION, AND PROTOCOL STUDY- Evaluates the new employees interest and ability to initiate EMS related activity. To view same and to act on even low-priority situations.
<br /><br />(1) Unacceptable - Does not see or avoids activity. Does not properly follow up situations. Does not study district maps or system protocols. Does not familiarize self with emergency vehicle compartments or equipment,
(4) Acceptable - Recognizes and identifies time to read medical journals, study maps and protocols. Familiarize self with contents of emergency vehicle and equipment. Displays inquisitiveness.
<br /><br />(7) Superior - Seldom misses opportunity to improve, study or learn.'/></div>";
																	

		echo $this->Form->input('19', array('label'=>'15 Self Initiated Field Activity: Protocols/Mapping', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='16.   PARAMEDIC SAFETY: GENERAL - Evaluates the new employees ability to perform EMS tasks without injuring self or others or exposing self or others to unnecessary danger/risk.
 
<br /><br />(1) Unacceptable - Fails to follow accepted safety procedures or to exercise Paramedic safety, ie....
A) Exposes self to combative/intoxicated patients/families/bystanders
B) Does not keep patient in sight.
C) Fails to use illumination when necessary or uses it improperly.
D) Does not anticipate potentially dangerous situations.
E) Stands too close to passing vehicular traffic.
F) Stands in front of doors when knocking.
G) Lifts inappropriately or places partner in danger of injury. (Body   mechanics).
<br /><br />(4) Acceptable - Follows accepted safety procedures. Understand and applies them.
<br /><br />(7) Superior - Always works safely. Foresees dangerous situations and prepares for them Keeps partner informed and determines the best position for self and partner. Is not overconfident.'/></div>";
																	

		echo $this->Form->input('20', array('label'=>'16 Medic Safety: General', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='17.   PARAMEDIC SAFETY: UNIVERSAL PRECAUTIONS- Evaluates the new employees ability to perform procedures in a safe manner while dealing with patients.
<br /><br />(1) Unacceptable - Violates Paramedic safety procedures. OHSA/OR-OHSA REGULATIONS.  Fails to wear gloves, etc.
(4) Acceptable - Follows accepted safety procedures with all patient contact.
<br /><br />(7) Superior - Follows accepted safety procedures with all patients. Uses goggles and mask when appropriate.'/></div>";
																	

		echo $this->Form->input('21', array('label'=>'17 Medic Safety: Universal Precautions', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='18.   CONTROL OF SCENE: VOICE COMMAND - Evaluates the new employees ability to gain and maintain control of situations through verbal command and instruction.
<br /><br />(1) Unacceptable - Speaks too softly or timidly, speaks too loudly, confuses or angers patient or listeners by what is said and/or how it is said. Fails to use voice when appropriate or speaks when inappropriate.
<br /><br />(4) Acceptable - Speaks with authority in a calm, clear voice. Proper selection of words and knowledge of when and how to use them.
<br /><br />(7) Superior - Completely controls with voice tone, word selection, inflection, and the bearing which accompanies what is said. Restores order in even the most trying situations through use of voice.'/></div>";
																	

		echo $this->Form->input('22', array('label'=>'18 Control of Scene: voice Command', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='19.   CONTROL OF SCENE: PHYSICAL SKILL - Evaluates the new employees ability to use proper level of force for the given situation.

<br /><br />(1) Unacceptable - Uses too little or too much force for the given situation. Is physically unable to perform the task. Does not use proper restraints.

(4) Acceptable - Obtains and maintains control through use of the proper amounts of techniques of force when necessary. Correct use of soft restraints and chemical restraints.

<br /><br />(7) Superior - Excellent knowledge and ability in the use of restraints. Selects the right amount of force for the given situation. Correct use of soft restraints and chemical restraints.'/></div>";
																	

		echo $this->Form->input('23', array('label'=>'19 Control of Scene: Physical Skill', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='20.   RADIO: APPROPRIATE USE OF EMS RADIO- Evaluates the new employees ability to use the EMS radio in accordance with department policy and procedure.
<br /><br />(1) Unacceptable - Violates policy concerning use of radio. Does not follow procedures or follows wrong procedure.
(4) Acceptable - Follows policy and accepted procedures. Has good working knowledge and able to contact appropriate resource.
<br /><br />(7) Superior - Always follows proper procedures, adheres to policy. Has superior working knowledge and applies knowledge when using the EMS radio.'/></div>";
																	

		echo $this->Form->input('24', array('label'=>'20 Radio: Appropriate Use of Codes /Procedures', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='21.   RADIO: LISTENS AND COMPREHENDS - Evaluates the new employees ability to pay attention to radio traffic and to understand the information transmitted.
<br /><br />(1) Unacceptable - Repeatedly misses own call sign and is unaware of calls in other areas. Requires dispatcher to repeat radio transmissions or does not accurately comprehend transmission.
<br /><br />(4) Acceptable - Copies own radio transmissions and is generally aware of radio traffic directed to other emergency vehicles.
<br /><br />(7) Superior - Is aware of own radio traffic and traffic in the surrounding areas. Is aware of traffic in other parts of the city and uses previously transmitted information to advantage.'/></div>";
																	

		echo $this->Form->input('25', array('label'=>'21 Radio: Listens and Comprehends', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='22.   RADIO: ARTICULATION OF TRANSMISSIONS - Evaluates the new employees ability to communicate with others via the EMS radio and hospital pre-arrival reports.
<br /><br />(1) Unacceptable - Does not pre-plan his or her transmissions. Over or under modulates. Cuts message off through improper use of the microphone. Speaks too fast or too slowly. Too long or incomplete hospital report.
<br /><br />(4) Acceptable - Uses proper procedures with clear, concise and complete transmissions. Provides hospital with clear report on patient condition and treatment.
<br /><br />(7) Superior - Transmits clearly, calmly, concisely and complete in even the most stressful situations. Transmissions are well thought out and do not have to be repeated. Hospital reports are clear and concise.'/></div>";
																	

		echo $this->Form->input('26', array('label'=>'22 Radio: Articulation of Transmissions', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='23.   SUPPLEMENTARY FORMS – Evaluate new employees ability to properly complete daily supplementary forms necessary to job accomplishment. These forms include but are not limited to Billing/HIPPA, Refusal Form, Intubation Audit.
 
  <br /><br />(1) Unacceptable – Does not complete or improperly completes supplementary forms.
 
   4) Acceptable – Completes supplementary forms as required by divisional standards in the proper time frame and with accuracy. Obtains required signatures, and are completed in black ink.
  <br /><br />(7) Superior – Consistently completes supplementary forms without assistance. Ensures that forms are attached to the appropriate ECR. Always are very neat and legible. Contain no spelling or grammatical errors'/></div>";
																	

		echo $this->Form->input('27', array('label'=>'23 Supplementary Forms', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='24.   REPORT WRITING: ECR – Evaluates the new employees’ ability to complete an Electronic Call Report for each call response in a detailed               and organized manner.
 
  <br /><br />(1) Unacceptable – Does not get pertinent patient demographic or medical history. Fails to document in an organized manner that reflects a chronological summary               of the call.
 
  <br /><br />(4) Acceptable – Completes the ECR with pertinent patient demographic and medical history information. Documents a summary that depicts a chronological summary of the call. Uses approved medical abbreviations and terminology. Ensures that a completed report is left with hospital staff.
<br /><br />(7) Superior – Documents in a well formatted manner as well as showing a detailed focused exam of the patient complaint  (ie OPQRST for chest pain complaint)'/></div>";
																	

		echo $this->Form->input('28', array('label'=>'24 Report Writing: ECR', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='25.   REPORT WRITING: GRAMMAR/SPELLING/NEATNESS - Evaluates the new employees ability to follow proper rules for English and spelling.<br /><br />
(1) Unacceptable - Reports are illegible, contains excessive number of misspelled words. Sentence structure or word usage is improper or incomplete.
<br /><br />(4) Acceptable - Reports are legible and grammar is at an acceptable level. Spelling is acceptable and errors are rare. Errors, if present, do not impair an understanding of the report.
(7) Superior - Reports are very neat, legible and well organized. Contain no spelling or grammatical errors.'/></div>";
																	

		echo $this->Form->input('29', array('label'=>'25 Report Writing: Grammar / Spelling', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='26.   REPORT WRITING: APPROPRIATE TIME USED - Evaluates the new employees efficiency relative to the amount of time taken to write a report.<br /><br />
(1) Unacceptable - Requires an excessive amount of time to complete a report. Does not show continued improvement in ECR completion time.
<br /><br />(4) Acceptable - Completes the reports within a reasonable amount of time.
<br /><br />(7) Superior - Consistently completes reports timely and efficiently.'/></div>";
																	

		echo $this->Form->input('30', array('label'=>'26 Report Writing: Appropriate Time Used', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='27.   WITH PATIENT/CITIZENS IN GENERAL - Evaluates the new employees ability to interact with citizens (including patient, family and bystanders) in an appropriate, efficient manner.
<br /><br />(1) Unacceptable -Abrupt, belligerent, overbearing, arrogant, non-communicative. Overlooks or avoids SERVICE aspect of the job. Introverted, insensitive and uncaring.  Poor NON-VERBAL skills.
<br /><br />(4) Acceptable -Courteous, friendly, and empathetic. Communicates in a professional, respectful and unbiased manner. Is customer service oriented.  Good NON-VERBAL skills.
<br /><br />(7) Superior - Is very much at ease with citizen contacts. Quickly establishes rapport and leaves people with feeling that the EMS employee was interested in serving them. Is objective in all contacts. Excellent NON-VERBAL skills.'/></div>";
																	

		echo $this->Form->input('31', array('label'=>'27 With Patient / Citizens in General', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='28.   WITH  DEPARTMENT MEMBERS, PEERS AND OTHER PUBLIC SAFETY AGENCIES (Specify) -Evaluates the new employees ability to effectively interact with department members, peers and other public safety agencies regardless of  ranks and capacities.
<br /><br />(1) Unacceptable - Patronizes FTO/superiors/peers or is antagonistic toward them. Gossips. Is insubordinate, argumentative, sarcastic. Resists instructions. Considers themself superior. Belittles others or engages in sexually harassing conduct. Is not a TEAM player.  Does not cooperate with other public safety agency personnel.
<br /><br />(4) Acceptable - Adheres to the chain of command and accepts role in the organization. Good peer and FTO relationships and is accepted as a group member. Good interagency relationships.
<br /><br />(7) Superior - Is at ease in contact with all, including superiors. Understands superiors' responsibilities, respects and supports their position. Peer group leader. Actively assists others.  TEAM PLAYER with all public safety agencies.'/></div>";
																	

		echo $this->Form->input('32', array('label'=>'28 With Department Members, Peers and Other PS', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		echo "<div class='helpimg'><img src='../img/questionmark.png' title='29. HOSPTIAL STAFF - Evaluates new employees ability to effectively interact with hospital staff.
<br /><br />(1) Unacceptable - Patronizes, antagonistic, belittles or engages in unprofessional conduct. Does not act as TEAM PLAYER.
<br /><br />(4) Acceptable - Works well with hospital staff, gives patient reports in a respectful and professional manner.
<br /><br />(7) Superior - Consistently has a strong rapport with hospital staff. Actively pursues role of patient advocate. (ie. patient placement)'/></div>";
																	

		echo $this->Form->input('33', array('label'=>'29 With Hospital Staff', 'empty'=>'--------------------','class'=>'hradio', 'type'=>'select', 'options' => array(
																		'1'=>'1 - Unacceptable',
																		'2'=>'2',
																		'3'=>'3',
																		'4'=>'4 - Acceptable',
																		'5'=>'5',
																		'6'=>'6',
																		'7'=>'7 - Superior',
																		'8'=>'N.O.')));
		
		echo "</div>";
		
		echo $this->Form->input('comments', array('column'=>'10', 'rows'=>'5'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Observations', true), array('action' => 'index'),array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Documentations', true), array('controller' => 'documentations', 'action' => 'index'),array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index'),array('class'=>'list'));?></li>
		<li><?php echo $this->Html->link(__('List Plan', true), array('controller' => 'plans', 'action' => 'index'),array('class'=>'list'));?></li>
	</ul>
</div>