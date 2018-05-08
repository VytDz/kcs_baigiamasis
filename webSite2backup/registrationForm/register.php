<?php

include_once('validation3.php');


// print_r( $_GET );
// print_r( $_POST );

$username =  $_POST['username'];
$password =   $_POST['password'];
$email =   $_POST['email'];
// $avatar_path = $_POST['avatar']


createUser( $username, $password,$email);
