<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/nivo-slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/jquery.stickynotes.css" />
<link href='http://fonts.googleapis.com/css?family=Qwigley' rel='stylesheet' type='text/css'>

<?php
$id = $model -> id;
$path = 'uploads/' . $id . '/';
$this -> breadcrumbs = array('Clinics' => array('index'), $model -> Name, );

$this -> menu = array( array('label' => 'List Clinic', 'url' => array('index')), array('label' => 'Create Clinic', 'url' => array('create')), array('label' => 'Update Clinic', 'url' => array('update', 'id' => $model -> id)), array('label' => 'Delete Clinic', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model -> id), 'confirm' => 'Are you sure you want to delete this item?')), array('label' => 'Manage Clinic', 'url' => array('admin')), );
?>


<div class = "span6 offset3">
<div id = "notes">
<img id = "pin" src="<?php echo Yii::app()->baseurl;?>/images/pin.png" />
<ul>  
  <li>  
    <a href="#">  
       <u><h1> <?php echo $model -> Name; ?></h1> </u>
      <br /> 
      <p> <?php echo $model -> Notes; ?> </p>  
    </a>  
  </li>  
 
 </ul>
</div>
</div>
<div id = "blinker"> <i class="icon-th"></i> </div>


<?php //$this -> widget('zii.widgets.CDetailView', array('data' => $model, 'attributes' => array('id', 'Name', 'Notes', ), )); ?>
<br />

<div id = "photos">
	<br />
	<br />
	<br />
<?php

if (is_dir($path)) {
	$files = scandir('uploads/' . $id);
	//print_r($files);
	echo '<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">';

	$i = 2;

	for ($i = 2; $i < count($files); $i++) {
		echo '<img src="' . Yii::app() -> baseurl . '/' . $path . $files[$i] . '" alt="" />';
	}

	echo '</div>
	</div>';
} else {
	echo 'why so serious';
}

// /echo 'something'.$id;
?>
</div>
<script type="text/javascript" src="<?php echo Yii::app()->baseurl?>/js/clinic-view.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseurl?>/js/jquery.nivo.slider.pack.js"></script>