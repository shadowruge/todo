<?php
require_once('config.php');
try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
 
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}