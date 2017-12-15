<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['category'])) {
  $games = $_GET['category'];
  $sql = "SELECT gamesId, gamePrice, categoryId, gameTitle, gameImage, gameDescription FROM games WHERE categoryId='". $games."'";
}
else {
  $sql = "SELECT gamesId, gamePrice, categoryId, gameTitle, gameImage, gameDescription FROM games";

}
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Home">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Games</title>
</head>
<body>

	<header id="header">
		<?php include 'inc/menu.php';?>

		<div id="main-container">
<?php
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          ?>

			<div class="product-item">
        <img src=' <?php echo $row["gameImage"] ?>'></img>
        <h2 class="gameName"> <?php echo $row["gameTitle"]; ?> </h2>
        <div class="order-button"><h5><a href="checkout.php"> Order </a></h5></div>
        <div class="productPrice"><h4><?php echo "&euro;". $row["gamePrice"].""; ?></h4></div>
      </div>
      <?php
}
}
?>
  		<div class="clearfix"></div>
  </div>
  </body>
  </html>
