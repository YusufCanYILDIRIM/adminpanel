<?php
if(!session_start()){
  session_start();  
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'adminpanel';

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname;charset=utf8", $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sorgu = $conn->prepare("SELECT * FROM ayarlar");
$sorgu->execute();
$ayar = $sorgu->fetch(PDO::FETCH_ASSOC);
