<?php 
include_once 'db.php';

if ($_SERVER["REQUEST_SERVER"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
}