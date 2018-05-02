<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost','root', 'root', 'artgym');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //two passwords are equal to eachother
  if ($_POST['password'] == $_POST['confirmpassword']) {
    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

    //file type == image
    if (preg_match("!image!", $_FILES['avatar']['type'])) {

      //copy image to images/ folder
      if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) {

        $_SESSION['username'] = $username;
        $_SESSION['avatar'] = $avatar_path;

        $sql = " INSERT INTO users ('username', 'userPwd', 'email', 'avatar')
                        VALUES ('$username', '$email', '$password', '$avatar_path')
               ";
               //if the query is successful, redirect to artist_portfolios.php
          if ($mysqli->query($sql) == true) {
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
