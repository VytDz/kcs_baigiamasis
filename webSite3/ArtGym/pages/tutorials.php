<!--========================HEAD import ===========================  -->
<?php require_once('../pageElementsPhp/head.php') ?>
<!--========================HEAD import ===========================  -->
<body>
    <!-- <h1></h1> -->
  <!--========================Header import ===========================  -->
<?php require_once('../pageElementsPhp/header.php') ?>
  <!--========================Header import ===========================  -->
    <!-- ======================================================  -->
    <div class="container-fluid height-60">
        <!-- Push element from top of the page by header height  -->
      </div>
    <!-- ======================================================= -->
    <div class="container-fluid"> <!-- IDEA: start container -->

              <h2>  stuff from database...  </h2>

              <?php
              include_once('../registrationForm/databaseFunctions_comments.php');

              $comments = getComments();

                while ( $comment = mysqli_fetch_assoc($comments)  ) {
                    echo "<h2>".$comment['username']."</h2>", "<br />", "<p class = 'generic-text'>".$comment['comment']."</p>","<br />";
                  }
              ?>

              <div class="">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LtsG5eAZj0c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>



    </div><!-- IDEA: END container -->



    <?php require_once('../pageElementsPhp/footer.php') ?>




























</body>
</html>
