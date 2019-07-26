<!--Contact page of Blog-->
<!--Author: Rahul Eswar-->

<?php
    $page = "contact";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include 'includes/header.php';
    ?>

	<title>Contact - Beauty in the Struggle</title>

	<!--Link to css sheet used in contact us page-->
	<link href="css/contact.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class="content-flex">
		<?php
			include 'includes/navigation.php';
		?>

		<form class="contactForm" action="contactFormHandler.php" method="post" align="center">
			<div class="inputFields">
				<input class="inputBox" type="text" name="name" placeholder="Name" required></input>
				<input class="inputBox" type="text" name="subject" placeholder="Subject" required></input>
				<input class="inputBox" type="text" name="userEmail" placeholder="Email (Optional)"></input>
			</div>
			<div class="message">
				<textarea rows="8" columns="20" name="message" placeholder="Any thoughts? Comments? Questions?" required></textarea>
				<button id="submitBtn" type="submit" data-submit="...Sending"><span>Submit</span></button>
			</div>
		</form>

		<?php
			include 'includes/footer.php';
		?>
	</div>
</body>

</html>

<?php
	/*For user feedback after sending a message*/
	if (isset($_GET['Message'])) {
		print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
	}
?>