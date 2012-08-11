<?php

if (isset($_GET['input'])) {
	//$myArray = array($_GET['input']);
	$input = $_GET['input'];
	$dbCommand = Yii::app() -> db -> createCommand();
	$dbCommand -> setSelect('title');
	$dbCommand -> setFrom('posts');
	//$dbCommand -> where('posts');
	$dbCommand -> setWhere('title LIKE "' . $input . '%"');
	$posts = $dbCommand -> queryAll(true);
	$i = 0;
	$myArray = array();

	foreach ($posts as $key => $value) {
		$myArray[$i] = $value['title'];
		$i++;
	}

	$dataarray = array("myarray" => $myArray);
	echo json_encode($dataarray);

}

if (isset($_GET['selected'])) {
	$selected = $_GET['selected'];
	$dbCommand = Yii::app() -> db -> createCommand();
	$dbCommand -> selectDistinct('title');
	$dbCommand -> setSelect('content');

	$dbCommand -> setFrom('posts');
	//$dbCommand -> where('posts');
	$dbCommand -> setWhere('title ="' . $selected . '"');
	$posts = $dbCommand -> queryAll(true);

	foreach ($posts as $key => $value) {
		echo $value['content'];
	}
}

if (isset($_POST['city'])) {
	$title = $_POST['city'];
	$post = Posts::model() -> find('title = "'.$title.'"');
	
	//$content = $_POST['contentinput'];
	//$post = Posts::model() -> find(array('select' => 'title', 'content', 'condition' => 'id=:id', 'params' => array(':id' == 0), ));
	//echo print_r($post);
	$post->content = $_POST['contentinput'];
	$post->save();
	//echo $_POST['city'];
	echo $_POST['contentinput'];
}
?>