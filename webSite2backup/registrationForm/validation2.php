<?php

session_start();
define('HOST','localhost');
define('MYSQL_USERNAME','root');
define('MYSQL_PASSWORD','root');
define('DB_NAME','hospital4');



$_SESSION['message'] = '';
$mysqli = mysqli_connect('localhost','root', 'root', 'artgym');
// if ($mysqli) {
//   echo "1";
// }else {                            //testing for connection
//   echo "bad";
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
echo "2";

  //two passwords are equal to eachother
  if ($_POST['password'] == $_POST['confirmpassword']) {
    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
echo "3";
//susidet visur echo kad psitikrint kur luzta, greiciausiai luzta sql

    //file type == image
    if (preg_match("!image!", $_FILES['avatar']['type'])) {
echo "4";
      //copy image to images/ folder
      if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) {

        $_SESSION['username'] = $username;
        $_SESSION['avatar'] = $avatar_path;

        $sql = " INSERT INTO users
                        VALUES ( '','$username','$password','$avatar_path', '$email', '', '', '', '' );
               ";
               //if the query is successful, redirect to artist_portfolios.php
               echo "5";
               // mysqli_query($mysqli, $sql);
           if ($mysqli->query($sql) === true) {
             echo "6";
             $_SESSION['message'] = "Registration successful! Wellcome $username !";
             header("location: ../pages/artist_portfolios.php");

           }
           else {
             $_SESSION['message'] = "user coud not be added to the database";
           }
      }
      else {
        $_SESSION['message'] = "file upload failed";
      }
    }
    else {
      $_SESSION['message'] = "use .jpg, .gif, or .png images";
    }

  }
  else {
      $_SESSION['message'] = "your passwords doesnt match";
  }

}


?>
