<!--========================HEAD import ===========================  -->
<?php require_once('pageElementsPhp/head_idx.php') ?>
<!--========================HEAD import ===========================  -->
<body>
    <!-- <h1></h1> -->
  <!--========================Header import ===========================  -->
<?php require_once('pageElementsPhp/header_idx.php') ?>
  <!--========================Header import ===========================  -->

    <!-- ======================================================  -->
    <div class="container-fluid height-100">
      <!-- Push element from top of the page by header height  -->


    </div>
    <!-- ======================================================= -->


<!--***************************testing search**********************************  -->

<!-- <form action="search.html">
<div class="tipue_search_left"><img src="tipuesearch/search.png" class="tipue_search_icon"></div>
<div class="tipue_search_right"><input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required></div>
<div style="clear: both;"></div>
</form> -->

<!--***************************testing search**********************************  -->






    <div class="container-fluid  top-picks-gallery"> <!-- start container -->
      <div class="row d-flex align-items-stretch">
        <h2 class="col-md top_pics">Pick of the month</h2>
        <h2 class="col-md top_pics">Pick of the week</h2>
        <h2 class="col-md top_pics">Pick of the day</h2>
      </div><!--  === END row === -->
      <article class="row d-flex align-items-stretch">
        <img class="col-md top-picks" src="images/top_pics/2.jpg" alt="top pic 1">
        <img class="col-md top-picks" src="images/top_pics/3.jpg" alt="top pic 2">
        <img class="col-md top-picks" src="images/top_pics/1.jpg" alt="top pic 3">
      </article><!--  === END row === -->
    </div> <!-- END container -->


    <article class="container my-5">
      <?php require_once('pageElementsPhp/carouselMainPage.php') ?>
    </article>

    <article class="container my-5 mainPageGallery">
      <figure class="figure1">
         <img class="figure-img" src="images/top_pics/6.jpg" alt="conceptart">
      </figure>
      <figure class="figure2">
         <img class="figure-img" src="images/top_pics/7.jpg" alt="conceptart">
      </figure>
      <figure class="figure3">
         <img class="figure-img" src="images/top_pics/8.jpg" alt="conceptart">
      </figure>
      <figure class="figure4">
         <img class="figure-img" src="images/top_pics/9.jpg" alt="conceptart">
      </figure>
      <figure class="figure5">
         <img class="figure-img" src="images/top_pics/10.jpg" alt="conceptart">
      </figure>
      <figure class="figure2">
         <img class="figure-img" src="images/top_pics/11.jpg" alt="conceptart">
      </figure>

      <figure class="figure1">
         <img class="figure-img" src="images/top_pics/12.jpg" alt="conceptart">
      </figure>
      <figure class="figure2">
         <img class="figure-img" src="images/top_pics/13.jpg" alt="conceptart">
      </figure>
    </article>








<?php include_once('pageElementsPhp/footer_idx.php') ?>
















<!--================  scritps  =====================  -->
<script src="./libs/bootstrap/js/bootstrap.js"></script>


<!--================  scritps  =====================  -->



</body>
</html>
