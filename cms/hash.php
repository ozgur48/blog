<?php


function hash_password(string $str) : string {
  return sha1(md5($str));
}


$password = 'ozgur.durak';


echo hash_password($password) . PHP_EOL;
