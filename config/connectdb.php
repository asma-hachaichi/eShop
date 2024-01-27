<?php
$conn = new mysqli('localhost','root', '', 'Shop');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>