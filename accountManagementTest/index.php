<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ================       Fonts        =================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Mono|PT+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
    <!-- ================      END Fonts     =================== -->

    <!-- ================       libs         =================== -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
    <!-- ================      END libs      =================== -->

    <!-- ================        CSS         =================== -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <!-- ================      END CSS       =================== -->
    <title>ArtGym</title>
</head>
<body>
    <!-- <h1></h1> -->
    <header class=" height-60 container-fluid clearfix header-atr">
      <div class="wrapper row">
        <!-- === categories list ===  -->
        <nav class="col-md-5 my-3 float-left">
            <ul class="row ">
                <li class="mx-2">
                  <a href="html/contests.html">Contests</a>
                </li>
                <li class="mx-2">
                  <a href="html/artist_portfolios.html">Artist portfolios</a>
                </li>
                <li class="mx-2">
                  <a href="html/tutorials.html">Tutorials</a>
                </li>
                <li class="mx-2">
                  <a href="html/job_offers.html">Job offers</a>
                </li>
                <li class="mx-2">
                  <a href="html/about.html">About</a>
                </li>
            </ul><!-- === END row === -->
        </nav>
        <!-- === search bar === -->
        <nav class=" col-md-3 my-3">
            <form class="form-inline">
                <input type="text" class="search-bar" placeholder="Search">
                <button type="submit" class = "btn btn-sm btn-outline-success" >go</button>
            </form>
        </nav>
        <!-- === sign in bar === -->
        <nav class="col-md float-right my-3">
            <form class="form-inline">
                <input type="text" class="search-bar" placeholder="Sign in">
                <button type="submit" class = "btn btn-sm  btn-outline-success"  >Sign In</button>
                <button type="submit" class = "btn btn-sm  btn-outline-success">Sign Up</button>
            </form>
        </nav>
        <!-- ==== home button  -->
        <nav>
          <a class="logo col-md mt-3" href="index.html">
            <img class="img-responsive" src="images/icon.svg" alt="Site Logo">
            <div class="logo float-right ml-1 mb-2">
                ArtGym
            </div>
          </a>
        </nav>

      </div><!--  === End wrapper === -->
    </header><!--  =====  END container ==== -->
</body>
</html>
