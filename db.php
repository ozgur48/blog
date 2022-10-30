<?php
$server = "localhost";
$user = "root";
$password = "demo1234";
$database = 'blog_db';

$db = new mysqli($server, $user, $password, $database);
if($db->connect_error){
  die("Connection error ".$db->connect_error);
}

