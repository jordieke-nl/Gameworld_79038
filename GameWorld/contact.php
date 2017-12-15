


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Home">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Contact</title>
</head>
<body>

	<header id="header">
		<?php include 'inc/menu.php';?>


	</header>
	<div id="main-container1">
		<div class="container">
		  <form action="">

		    <label for="fname">First Name</label>
		    <input type="text" id="fname" name="firstname" placeholder="Your name..">

		    <label for="lname">Last Name</label>
		    <input type="text" id="lname" name="lastname" placeholder="Your last name..">


			 <label for="Email">E-mail</label>
			 <input type="text" id="lname" name="E-mail" placeholder="Your E-mail..">


		    <label for="subject">Subject</label>
		    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

		    <input type="submit" value="Send">

		  </form>
		</div>
	</div>
	<div id="footer">
	<?php include 'inc/footer.php';?>
	</div>
