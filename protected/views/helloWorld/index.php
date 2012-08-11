<?php
if (isset($_POST['city'])) {
	$city = $_POST['city'];

	$post = new Posts;

	$post -> title = $city;
	$post -> content = $city;
	$post -> save();

}
?>

<div id = "content1"></div>

<a href = "#" id = "testing" class = "btn" onclick = listPost();> Testing Awesomeness </a>
<br>
<br>
<br>

<div id = "result"></div>

	
	<input type="search" id="city" name="city" placeholder="Type a city name" data-provide="typeahead" autocomplete="off" />
	<br />
	<textarea id = "contentinput"></textarea>
	<br />
	<button id = "submit" class = "btn">Submit</button>



<script type="text/javascript" src="<?php echo Yii::app()->baseurl?>/js/test.js"></script>