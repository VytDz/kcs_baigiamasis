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

          <main class="">



            <!-- <h2>About us</h2>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->

            <div class="">
              <h2>Find us</h2>
              <div id="map"></div>
                <script>
                  function initMap() {
                    var uluru = {lat: 54.936971, lng: 23.890129};
                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 15,
                      center: uluru
                    });
                    var marker = new google.maps.Marker({
                      position: uluru,
                      map: map
                    });
                  }
                </script>

                <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxP0zX9yVmgu7mY6RSYnm4QKN_5l_dZcM&callback=initMap">
                </script>
            </div>


          </main><!-- IDEA: === END main === -->




<?php require_once('../pageElementsPhp/footer.php') ?>

<script src="../js/about.js"> </script>



























</body>
</html>
