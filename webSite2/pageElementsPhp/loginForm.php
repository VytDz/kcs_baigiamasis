
 <!--========================HEAD import ===========================  -->
 <?php require_once('../pageElementsPhp/head.php') ?>
 <!--========================HEAD import ===========================  -->


 <link rel="stylesheet" href="../css/regForm.css" type="text/css">
 <body class="position-relative">
   <div class="module">
     <h1>Login</h1>
     <form class="form" action="../pages/membersArea.php" method="post" enctype="multipart/form-data" autocomplete="off">
       <!-- <div class="alert alert-error"><?php// $_SESSION['message'] ?></div> -->
       <input type="text" placeholder="User Name" name="username" required />
       <!-- <input type="email" placeholder="Email" name="email" required /> -->
       <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
       <!-- <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
       <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div> -->
       <input type="submit" value="Login" name="Login" class="btn btn-block bg-success" />
     </form>
   </div>
   <?php require_once('../pageElementsPhp/footer.php') ?>
 </body>
<!--  -->
