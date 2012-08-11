<?php $this->beginContent('//layouts/main'); ?>
<div class="span-23">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>


<div class="span-5 last">
	<div id="sidebar">
	
	
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
	
	if(isset(Yii::app()->user->username)){
	'<h3> Operations </h3>';
	$this->widget('bootstrap.widgets.BootMenu', array(
			'type'=>'list',
			'items'=> $this ->  menu,
	));
	}
		
		
		

	?>
	
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>