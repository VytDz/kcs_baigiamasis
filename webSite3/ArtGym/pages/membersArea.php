<?php

   session_start();
   include('../registrationForm/databaseFunctions.php');

   if(isset($_POST['username']) and isset($_POST['password'])) {
      // username and password sent from form

      $username = $_POST['username'];
      $password = $_POST['password'];
      // $passwordHashed = password_hash( $password, PASSWORD_DEFAULT);




      $query = "SELECT * FROM users WHERE username = '$username' and userPwd = '$password'";

      $result = mysqli_query(getConnection(), $query) or die(mysqli_error($connection));
      $count = mysqli_num_rows($result);


      if ($count == 1) {
        $_SESSION['username'] = $username;
      }else {
        $fmsg = "Invalid Login Credentials.";

      }
    }

      if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];

        echo "Hello there"." ".$username."<br/>";
        echo "This is members area"."<br/>";
        echo "<a href='logout.php'>Logout</a>";

      }

?>





























</body>
</html>
