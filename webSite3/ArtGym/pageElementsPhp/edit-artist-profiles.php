<?php include_once('head.php') ?>


<?php
include_once('../registrationForm/databaseFunctions.php');
// if  (admin||savininkas) { //tikrinam, kad hakeriai nelistu viskas sitas turi but ife, kad tikrint ar adminas


// echo $_GET['userId'];
$nr = $_GET['numeris'];

$user = getSelection($nr);

// print_r($gyd);//test

 ?>

<form class="" action="update-user.php" method="get">
  <input type="text" name="username" value="<?php echo $user['username'] ?>">
  <input type="text" name="email" value="<?php echo $user['email'] ?>">

  <input type="hidden" name="Id" value="<?php echo $user['id'] ?>">

  <input type="submit" name="" value="Save">
</form>
