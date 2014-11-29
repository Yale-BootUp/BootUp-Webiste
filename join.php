<?php
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			function sendmail($to, $subject, $message, $from) {
				mail($to, $subject, "
					<html>
						<head>
							<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
						</head>
						<body>
							$message
						</body>
					</html>
				", "From: $from\r\nReply-To: $from\r\nMIME-Version: 1.0\r\nContent-type: text/html; charset: utf8\r\n");
			}
			sendmail('qingyang.chen@yale.edu, jason.brooks@yale.edu', "New BootUp mailing list subscription!", "
				This is an automated message from the submission system for the Join Us form on the BootUp website.
				<br />New email: $email", 'qingyang.chen@yale.edu');
			sendmail($email, "Joined the Yale BootUp Mailing List!", "
				Thanks for joining the Yale BootUp mailing list!", 'qingyang.chen@yale.edu');
			echo 'Joined!';
		} else {
			echo 'Invalid email address!';
		}
	} else {
?>
<form action="join.php" method="post">
	<input type="email" name="email" placeholder="youremail@yale.edu" required />
</form>
<?php
	}
?>