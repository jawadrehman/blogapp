<?php
$this -> breadcrumbs = array('Posts', );

$this -> menu = array( array('label' => 'Create Posts', 'url' => array('create')), array('label' => 'Manage Posts', 'url' => array('admin')), );

?>
<div id = "posts_list">

 </div>
 <div id = "ajaxloader">
 <?php $this->widget('bootstrap.widgets.BootProgress', array(
    'type'=>'danger', // '', 'info', 'success' or 'danger'
    'percent'=>100, // the progress
    'striped'=>true,
    'animated'=>true,
    
)); ?>
</div>
 <?php
 
  Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseurl.'/js/postsIndex.js', CClientScript::POS_END);
 
 /*
 <h1>Posts</h1>

  * echo CHtml::ajaxButton ("Update data",
	 CController::createUrl('helloWorld/UpdateAjax'),
	 array('update' => '#1'));
 $this->widget('zii.widgets.CListView', array(
 'dataProvider'=>$dataProvider,
 'itemView'=>'_view',
 ));*/
?>

