<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Home">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>About</title>
</head>
<body>
<div id="map"></div>
	<header id="header">

		<?php include 'inc/menu.php';?>


	</header>
  <div id="main-container1">
      <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</h4>
</div>
<div id="googleMaps">

	<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.402994,5.744078),
    zoom:15,
    position:new google.maps.LatLng(51.402994,5.744078)

};
var map=new google.maps.Map(document.getElementById("googleMaps"),mapProp);
}
</script>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQtW2ZN5vdnAX7r0Af4X5Jyt7Rc0MWYho&callback=myMap"></script>
<div id="footer">
<?php include 'inc/footer.php';?>
</div>
