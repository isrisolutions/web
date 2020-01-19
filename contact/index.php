<?php 
if(isset($_POST['submit'])){
    $to = "isrisolutions@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $budget = $_POST['budget'];
    $service = $_POST['service'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:". "\nEmail: " . $from . "\nPhone: " . $phone  .  "\nBudget: " . $budget  . "\nService: " . $service  ."\n\n" . $_POST['message'];
    $message2 = $name . ", thank you for contacting Isri Solutions. We will get back to you shortly.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    header('Location: thank_you.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Isri Solutions</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="http://abhinavthukral.in/lab/Manuscript/css/master-theme-sun.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,600,700,800,900|Roboto:100,300,300i,400,400i,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://abhinavthukral.in/lab/Manuscript/css/master.js"></script>
</head>
<body>
<header class="fixed">
	<div class="content">
		<div class="header-logo">
			<img src="../Logo.svg" class="small-fit"><div class="text-logo">isri solutions <div class="beta">PVT. LTD.</div></div>
		</div>
		<div class="links">
			<a href="../"><div class="link underline">Home</div></a>
			<a href="../about"><div class="link underline">About</div></a>
			<a href="../services"><div class="link underline">Services</div></a>
			<div class="link underline active">Contact</div>
		</div>
	</div>
</header>
<section class="title-section header-fixed">
	<div class="half-content">
		<h1 class="white">Start a Project</h1>
	</div>
</section>
<section>
	<div class="half-content">
		<form method="post" action="">
			<div class="form-title">Tell us about your project</div>
			<div class="form-text required">Your Name</div><input type="text" name="name" class="full-width">
			<div class="form-text required">Your E-mail</div><input type="e-mail" name="email" class="full-width">
			<div class="form-text required">Contact Number</div><input type="text" name="phone" class="full-width">
			<div class="form-text">Type of Service</div><input type="text" name="service" class="full-width">
			<div class="form-text">Budget</div><input type="text" name="budget" class="full-width">
			<div class="form-text">Project Description</div><textarea class="full-width" name="message"></textarea>
			<input type="submit" name="submit" value="Request a Quote">
		</form>
	</div>
</section>
<footer>
      <div class="content">
        <p class="madeby center">&copy; Isri Solutions Pvt. Ltd. 2019</p>
      </div>
</footer>
</body>
</html>