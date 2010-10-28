	

	<?php //echo $this->element('navEmployee');?>	
	</div>		
	</div>
   <div id="bd" role="main">
	
<div id="tabsbd"  role="main" class="yui-g">
				<ul>

					<li class="pageheader" ><a href="#pagebd"><?php echo $content_title;?></a></li>
	
				</ul>
							
			<div id="bodyContent"  class="mainui" >	
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
			
			
			</div>	</div>

	</div>
      <div id="ft" role="contentinfo" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header"><p>Footer</p></div>
</div>
	<?php echo  $this->element('sql_dump'); ?>
	<?php echo  $js->writeBuffer(); // Write cached scripts?>
</body>
</html>