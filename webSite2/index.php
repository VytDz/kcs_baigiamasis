<?php require_once('pagesPhp/head.php') ?>
<body>
    <!-- <h1></h1> -->
<?php require_once('pagesPhp/header.php') ?>
    <!-- ======================================================  -->
    <div class="container-fluid height-100">
      <!-- Push element from top of the page by header height  -->
    </div>
    <!-- ======================================================= -->

    
<!--***************************testing search**********************************  -->

<form action="search.html">
<div class="tipue_search_left"><img src="tipuesearch/search.png" class="tipue_search_icon"></div>
<div class="tipue_search_right"><input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required></div>
<div style="clear: both;"></div>
</form>

<!--***************************testing search**********************************  -->




    <div class="container-fluid  top-picks-gallery"> <!-- start container -->
      <div class="row d-flex align-items-stretch">
        <h2 class="col-md top_pics">Pick of the month</h2>
        <h2 class="col-md top_pics">Pick of the week</h2>
        <h2 class="col-md top_pics">Pick of the day</h2>
      </div>
      <article class="row d-flex align-items-stretch">
        <img class="col-md top-picks" src="images/top_pics/2.jpg" alt="top pic 1">
        <img class="col-md top-picks" src="images/top_pics/3.jpg" alt="top pic 2">
        <img class="col-md top-picks" src="images/top_pics/1.jpg" alt="top pic 3">
      </article><!--  === END row === -->
      <article class="">

      </article>
    </div><!--  END container -->
    <div class="wrapper container-fluid">
      <footer class="row footer-atr">
          <div class="col-md-12">
            &copy; Vytenis_D 2018
          </div>
      </footer>
    </div><!--  END container -->



























</body>
</html>
