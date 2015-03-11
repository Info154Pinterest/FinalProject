<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

</body>
</html>

<?php
ini_set('display_errors', 1);
require_once ('searchFunctions.php');

$query = $_POST["search"];
echo "<div id='nyt'><h1>New York Times Results</h1>";
searchNYT($query);
echo "</div>";
echo "<div id='instagram'><h1>Instagram Results</h1>";
searchInstagram($query);
echo "</div>";
?>