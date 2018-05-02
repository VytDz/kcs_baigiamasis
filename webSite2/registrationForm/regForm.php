<!--========================HEAD import ===========================  -->
<?php require_once('../pageElementsPhp/head.php') ?>
<!--========================HEAD import ===========================  -->

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

<link rel="stylesheet" href="../css/regForm.css" type="text/css">
<body class="position-relative">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="regForm.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block bg-success" />
    </form>
  </div>
  <?php require_once('../pageElementsPhp/footer.php') ?>
</body>
