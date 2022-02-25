<?php
include('classes/Header.php');
include('classes/Footer.php');


$header = new Header();
$footer = new Footer();


?>
<!DOCTYPE html>
<html>

<head>
	<title>
		Contact
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
	<!-- including header file -->
	<?php echo $header->header();?>
	<div id="main">
		<div id="contact-form">
			<form action="" method="">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control">
				<label for="email">Email:</label>
				<input type="text" name="email" class="form-control">
				<label for="message">Message:</label>
				<textarea name="message" cols="45" rows="6" class="form-control"></textarea>
				<p class="submit">
					<input type="submit" name="submit" value="Submit">
				</p>
			</form>
		</div>

	</div>
	<!-- including footer file -->
	<?php echo $footer->footer();?>
</body>

</html>