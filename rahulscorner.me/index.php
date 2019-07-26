<!--Main HTML Sheet for Rahul's Blog-->
<!--Author: Rahul Eswar-->

<?php
    $page = "welcome";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'includes/header.php';
	?>

	<title>Welcome to My Blog</title>

	<!--Link to index stylesheet-->
	<link href="css/main-style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class="content-flex">
		<!--Including navigation bar-->
		<?php
			include 'includes/navigation.php';
		?>

		<!--Welcome Header and Photo-->
		<div id="head-image">
			<p>Finding Beauty in the Struggle</p>
		</div>

		<!--Two column with Text on Left and Featured on Right-->
		<div class="introduction-section">
			<div class="introduction-text">
				<h1 class="intro-header">Intro</h1>
				<hr class="intro-title-underline"/>
				<div class="intro-body">
					<p>Hello all! My name is Rahul and welcome to my personal corner of the internet!</p>
					<p>To those who may not know me: I am an amiable introvert who enjoys reading and writing. Born in India and raised in the 
					Toronto area, I am fortunate to have grown with a myriad of cultural influences brought on by my family, friends and environment.</p>
					<p>A recent engineering graduate, I have a developing admiration for technology. My other areas of passion include music, literature 
					and basketball! For me, this website is a way to share my writings on topics which are close to my heart or persisting in my mind.</p>
					<p>I hope you might find something relatable, enjoyable or otherwise interesting! All <a href="contact.php">comments and feedback</a> 
					are welcomed. <i class="fa fa-smile-o"></i></p>
				</div>
			</div>

			<div class="featured-post">
				<a class="post-card" href="blog-posts/the-bell-jar.php">
					<div class="preview-text">
						<h1 class="date">June 12, 2019</h1>
						<h2 class="title">What I Learned from 'The Bell Jar'</h2>
					</div>
					<img class="preview-image" src="blog-posts/images/plath-fig-tree.jpg">
				</a>
			</div>
		</div>

		<!--Including footer class-->
		<?php
			include 'includes/footer.php';
		?>
    </div>

</body>

</html>