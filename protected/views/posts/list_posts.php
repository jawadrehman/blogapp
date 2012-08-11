<?php
Yii::app() -> clientscript -> scriptMap['jquery.js'] = false;
Yii::app() -> clientscript -> scriptMap['bootstrap.min.js'] = false;
$posts_no = 4;

$first_post_to_load = $load_no * $posts_no;
function createLink($id) {
	return '<a class = "btn pull-right" id = "link' . $id . '");">Show More </a>';
};

$dbCommand = Yii::app() -> db -> createCommand();
$dbCommand -> setSelect(array('substring(content,1,5) as content', 'title', 'id'));
$dbCommand -> setFrom('posts');
//$dbCommand -> where('posts');
$dbCommand -> setWhere('id>=' . $first_post_to_load);
$posts = $dbCommand -> limit(4) -> queryAll(true);

if (count($posts) < 4) {

	$ourscript = 'posts_empty = true';

	Yii::app() -> clientScript -> registerScript('helloscript', $ourscript, CClientScript::POS_HEAD);
}
//print_r($posts);
/*
 foreach ($posts as $key => $value) {
 echo $value['title'].'<br>';
 echo $value['content'].'<br>';
 }

 */

foreach ($posts as $key => $fish) :

	$this -> beginWidget('bootstrap.widgets.BootHero', array('heading' => $fish['title'], ));

	echo '<div id = "' . $fish['id'] . '">';

	$this -> renderPartial('_ajaxContent', array('myValue' => $fish['content']));

	echo ' </div>';

	echo createLink($fish['id']);

	$this -> endWidget();
endforeach;
?>
