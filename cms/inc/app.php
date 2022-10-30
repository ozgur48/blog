<?php
// begin session : Note: Do it on all pages.
session_start();

// connect db
$server="localhost";
$user="root";
$password="demo1234";
$data_base="blog_db";

$db = mysqli_connect($server, $user, $password, $data_base);
if($db->connect_error){
  die("Connection error ".$db->connect_error);
}

// create a function that checks if the visitor is logged in. If user is not logged in, redirect to login page.
// YANLIS
// fun checkLoggedIn
//         check if session has a email value.
//         if is user logged in: do nothing
//         else: redirect to login
function checkLoggedIn(){
  // user email will never be 'email'
  if($_SESSION["email"] == "email"){
    return true;
  }
  else{
    // redirect user to /login page.
    $seconds_wait = 2;
    header("Refresh:$seconds_wait");
    exit();
  }
}

//

function hash_password(string $str) : string {
  return sha1(md5($str));
}
// create a function that signs user in
// fun login(email, password)
//     hash_password(password)
//     SELECT * FROM user WHERE email = @email AND password = @hashed_password
//      if returns user id:
//          create user sessions: email, name
//       else:
//            return false
function login($email,$password){
  global $db;
  $hashed = hash_password($password);
  $check = $db->prepare("SELECT * FROM users WHERE email=? AND password=?");
  $check->bind_param('ss', $email, $hashed);
  $check->execute();
  $result = $check->get_result()->fetch_assoc();
  // if result is null, give user an error. "echo a string"
  // if result is an user array, create user sessions
  // $_SESSION['key'] = 'value';



}


// logout function that destroy all the session
// fun logout()
//   session_destroy() OR remove each defined user session variables example: unset($_SESSION['email'])
//   redirect user to login: php redirect user to a different page
