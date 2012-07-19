<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>


<div class="span-5 last">
	<div id="sidebar">
	
	<h3> Operations </h3>
	<?php
		/*
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
			'decorationCssClass' => 'nav',
			//'titleCssClass' => 'nav nav-tabs nav-stacked',
		));
	
		
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			//'decorationCssClass' => 'nav',
			
			'itemCssClass'=>'nav nav-tabs nav-stacked',
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
		
		
		*/
	
	
	$this->widget('bootstrap.widgets.BootMenu', array(
			'type'=>'list',
			'items'=> $this ->  menu,
	));
		
		
		

	?>
	
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>