<?php 
if(isset($_GET['logout'])){
	
	$logout = $_GET['logout'];
	if(!empty($logout)){
			
	}
}
$this->pageTitle=Yii::app()->name;
 

$this->widget('bootstrap.widgets.BootCarousel', array(
    'items'=>array(
        array('image'=> CHtml::encode(Yii::app()->baseurl).'/images/php.png', 'label'=>'php', 'caption'=>'Somebody I used to know.'),
        array('image'=>'http://placehold.it/770x400&text=Second+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/770x400&text=Third+thumbnail', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); ?>