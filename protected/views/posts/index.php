<?php

$posts_limit = 10;

//limit of posts to display

if (isset($_GET('posts_limit'))) {
	$posts_limit = $_GET('posts_limit');
	
	if (!empty($posts_limit)) {
		//do nothing
	} else {
		//set the default value of 10
		$posts_limit = 10;
	}

}

$posts_range = $posts_limit - 10;

$this -> breadcrumbs = array('Posts', );

$this -> menu = array( array('label' => 'Create Posts', 'url' => array('create')), array('label' => 'Manage Posts', 'url' => array('admin')), );
?>

<?php
$posts = Posts::model() -> findAll('id<2');

foreach ($posts as $fish) :
	//echo $fish->title;
	$this -> beginWidget('bootstrap.widgets.BootHero', array('heading' => $fish -> title, ));
	echo '<p>' . $fish -> content . '</p>';

	$this -> widget('bootstrap.widgets.BootButton', array('type' => 'primary', 'size' => 'large', 'label' => 'Learn more', ));
	$this -> endWidget();
endforeach;
?>

//echo $rows = mysql_num_rows($query_results);

<p>
	This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
</p>

<?php

/*
 <h1>Posts</h1>

 $this->widget('zii.widgets.CListView', array(
 'dataProvider'=>$dataProvider,
 'itemView'=>'_view',
 ));*/
?>

