<?php 
$servername = "sql213.epizy.com";
$username = "epiz_33996965";
$password = "KdNjoFC3ZWCEt";
$dbname = "epiz_33996965_ainatasha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>