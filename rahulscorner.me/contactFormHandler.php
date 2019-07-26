<?php

	if ($_POST) {
		/*Enabling error reporting*/
		error_reporting(-1);
		ini_set('display_errors', 'On');
		set_error_handler("var_dump");

		$name = $_POST['name'];
		$userEmail = $_POST['userEmail'];
		$userSubject = $_POST['subject'];
		$message = $_POST['message'];

		$destEmail = 'reswar@uoguelph.ca';

		$mailSubject = 'Blog Site' . '-' . $userSubject;
		$mailHeader = 'From Beauty in the Struggle Blog!';

		$emailBody = "Sender's Name: $name\n\n".
						"Subject: $userSubject\n\n".
							"Reply Email: $userEmail\n\n".
								$message;

		if (mail($destEmail, $mailSubject, $emailBody, $mailHeader)) {
			/*echo "<script type='text/javascript'>alert('Thanks for contacting! Your email has been sent!');</script>";*/
			$notification = 'Thanks for contacting! Your email has been sent!';
		}
		else {
			/*echo "<script type='text/javascript'>alert('Sorry, something went wrong and email was not sent!');</script>";*/
			$notification = 'Sorry, something went wrong and email was not sent!';
		}
	} 
	else {
		/*echo "<script type='text/javascript'>alert('Sorry, something has gone wrong :(');</script>";*/
		$notification = 'Sorry, something has gone wrong :(';
	}

	header("Location: contact.php?Message=" . urlencode($notification));
?>