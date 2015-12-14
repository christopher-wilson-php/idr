<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Me</title>

	<link rel="stylesheet" href="stylesheets/app.css" />
</head>
<body>

	<div class="mail-form container small-11 medium-10 large-6 radius round">
		<form id="mail_form" method="post" action="contact">

			<!-- Left Pane, Sender Details -->
			<div class="small-6 left">
				<div class="row">
					<div class="small-6 columns">
						<label for="first_name">First Name
							<input type="text" name="first_name" id="first_name" required>
						</label>
					</div>
					<div class="small-6 columns">
						<label for="last_name">Last Name
							<input type="text" name="last_name" id="last_name" required>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="small-6 columns">
						<label for="phone">Phone Number
							<input type="tel" name="phone" id="phone" required>
						</label>
					</div>

					<div class="small-6 column">
						<label for="email">E-Mail
							<input type="email" name="email" id="email">
						</label>
					</div>
				</div>

				<div class="row">
					<div class="small-12 columns">
						<label for="subject">Subject
							<input type="text" name="subject" id="subject">
						</label>
					</div>
				</div>

				<div class="row">
					<div class="small-12 columns">
						<button class="small button left" type="reset">Reset Email</button>
					</div>
				</div>
			</div>

			<!--  Right Pane, Body, and Select -->
			<div class="small-6 right">
				<div class="row">
					<div class="small-12 columns">
						<label for="body">Your Message
							<textarea class="round" name="body" id="body" cols="30" rows="10"></textarea>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="small-12 columns">
						<button type="submit" class="small button right success">Submit Email</button>
					</div>
				</div>

			</div>
		</form>

		<script type="text/javascript" src="bower_components/autosize/dist/autosize.min.js"></script>
<?php include "_inc/footer.inc.php" ?>