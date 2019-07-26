<!--Posts page of Blog-->
<!--Author: Rahul Eswar-->

<?php
    $page = "posts";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
		include 'includes/header.php';
    ?>

	<title>Posts - Beauty in the Struggle</title>

	<!--Link to css sheet used in library page-->
	<link href="css/posts.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class="content-flex">
		<?php
			include 'includes/navigation.php';
		?>

		<div class="top-background">
			<!--Space for background photo-->
		</div>

		<div class="grid"> 
			<a class="post-card" href="blog-posts/the-bell-jar.php">
				<div class="preview-image"></div>
				<div class="preview-text">
					<h1 class="date">June 12, 2019</h1>
					<h2 class="title">What I Learned From 'The Bell Jar'</h2>
					<h3 class="caption">The book that changed my perspective on mental illness</h3>
					<p class="description">It was just a couple years ago when I started to recognize the abundance of mental illness awareness promotions
					that were all around me. I must confess that at the time, mental illness was never truly a cause I could get behind.</p>
				</div>
			</a>
		</div>
		<?php
			include 'includes/footer.php';
		?>
	</div>
</body>

</html>