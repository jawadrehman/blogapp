<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
if(isset(Yii::app()->user->username)){
$username = Yii::app()->user->username;
include_once '_viewloggedstate.php';
}
else{
	include_once '_viewlogin.php';
}

?>

