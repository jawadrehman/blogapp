<?php
$posts = Posts::model() -> findAll();

foreach ($posts as $fish) :

	echo '<div class = hero-unit>';
	echo 'hello';
	echo '</div>';

	//echo '<p id = "'.$fish->id.'">' . substr($fish -> content, 0, 2) . '</p>';

endforeach;
?>

<div class="hero-unit">
	<h1>Heading</h1>
	<p>
		Tagline
	</p>
	<p>
		<a class="btn btn-primary btn-large"> Learn more </a>
	</p>
</div>