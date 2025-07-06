<?php 

if ($_SERVER["REQUEST_SERVER"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  try {
    include_once 'db.php';

  } catch(PDOException $e) {
    die("Error" . $e->getMessage());
  }
}