<?php
ini_set('display_errors', 1);
require_once ('searchFunctions.php');

$query = $_POST["search"];

searchNYT($query);
searchInstagram($query);
