<?php $this->set("content_title","<span class='ss_sprite
ss_layout'>&nbsp;&nbsp;Document Library</span>");?>
<div class="myFiles index">
<h2><?php __('FTO Documents');?></h2>
<fieldset>
<?php
echo $paginator->counter(array(
'format' => __('Showing '.$total.' FTO document(s) out of %count% total documents.', true)
));
    ?> 
</fieldset>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th><?php echo $paginator->sort('size');?></th>
	<th><?php echo $paginator->sort('Uploaded', 'created');?></th>
	<th class="actions"><?php __('');?></th>
</tr>
<?php
$i = 0;
foreach ($myFiles as $myFile):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
<?php if ($myFile['MyFile']['fto'] == 1): ?>

	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($myFile['MyFile']['name'], array('controller'=>'my_files', 'action'=>'download', $myFile['MyFile']['id'])); ?>
		</td>
		<td>
			<?php echo $myFile['MyFile']['type']; ?>
		</td>
		<td>
			<?php echo $myFile['MyFile']['size']; ?>
		</td>
		<td>
			<?php echo $time->format('l, F j, Y h:i a', $myFile['MyFile']['created']); ?>
		</td>
		<td class="actions">&nbsp;		</td>
	</tr>
	
<?php endif; ?>
	
	
	
<?php endforeach; ?>
</table>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
</div>

<div class="actions">
		<?php if ( $session->read('Auth.User.group_id') < 3 ) {
				
				echo $this->element('admin/menuFiles');
				
			}
		?>
	
	
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Documentation', true), array('controller'=>'documentations', 'action' => 'index'), array('class'=>'list')); ?></li>
		<li><?php echo $this->Html->link(__('List Observation', true), array('controller' => 'observations', 'action' => 'index'), array('class'=>'list')); ?> 
		<li><?php echo $this->Html->link(__('List Comments', true), array('controller' => 'comments', 'action' => 'index'), array('class'=>'list')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lesson Plans', true), array('controller' => 'plans', 'action' => 'index'), array('class'=>'list')); ?> 
	</ul>
</div>