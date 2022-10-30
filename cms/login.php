<?php
// add app.php: look for difference between include, include_once, require, require_once for php
require('inc/app.php');
?>
<?php
require ('inc/header.php');
if (isset($_POST['email']) && !empty($_POST['email'])) {
  login($_POST['email'], $_POST['password']);
}
?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
<form action="" method="post">
  Email: <input type="email" name="email"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit">
</form>
</body>
</html>
<!-- include footer -->

<?
require ('inc/footer.php');
// create a post form that has two inputs: email and password
// run app.login with posted data.
?>
