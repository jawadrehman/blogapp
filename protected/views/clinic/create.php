<?php
$this -> breadcrumbs = array('Clinics' => array('index'), 'Create', );

$this -> menu = array( array('label' => 'List Clinic', 'url' => array('index')), array('label' => 'Manage Clinic', 'url' => array('admin')), );
?>

<h1>Create Clinic</h1>

<?php

echo $this -> renderPartial('_form', array('model' => $model));
?>

<form id="imageform" method="post" enctype="multipart/form-data" action='image_upload'>
	Upload image
	<input type="file" name="photoimg" id="photoimg" />
</form>

<div id='preview'></div>
<script type = "text/javascript" src="<?php echo Yii::app()->baseurl?>/js/jquery.form.js"></script>
<script type = "text/javascript" src="<?php echo Yii::app()->baseurl?>/js/clinic_form.js"></script>