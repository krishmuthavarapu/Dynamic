<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="shortcut icon" href="img/logoprime.png" type="image/x-icon">
  <title>Prime Classes</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet" />
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <style>
    .logo-pop {
      width: 160px;
      float: left;
      /* position: absolute; */
      top: 35px;
      right: 0;
      left: 25px;
    }

    .btn-mb {
      padding: 8px 20px 8px 20px;
    }

    .sect {
      /* height: 100%; */
    }

    @media only screen and (max-width: 800px) {
      .logo-pop {
        width: 160px;
        float: left;
        /* position: absolute; */
        top: 20px;
        right: 0;
        left: 20px;
      }

      .sect {
        background-color: rgba(0, 0, 0, 0.4) !important;
      }
    }
    @media only screen and (max-width: 350px) {
       body{
        background-repeat: initial !important;
       }
    }

    @media only screen and (max-width: 600px) {
      .btn-mb {
        padding: 4px 4px 4px 4px;
        font-size: 8px;
      }
      .d-cont{
            display: block !important;
      }
      .logo-pop {
        width: 130px;
        float: none;
        position: relative;
        top: 0px;
        left: 0px;
      }

      .h1-head {
        font-size: 22px;
      }

      .sect {
        height: auto;
      }

      body {
        /* background-size: initial !important; */
      }
    }
    .btn-primary {
    background-color: #580075!important;
    color: #fff;
}
.btn-success {
    background-color: #580075!important;
    color: #fff;
}
  </style>
</head>

<body style="background-image: url('img/ground5.jpg'); background-repeat: no-repeat; background-size: cover;">
  <?php include('config.php'); ?>
  <section class="mask rgba-black-light overflow-hidden sect" style=" background-color: rgba(0,0,0,0.5);">
  <nav class="navbar navbar-expand-lg navbar-dark white">
  <img src="img/logoprime.png" class="logo-pop bg-transparent pl-4 pt-2 pb-2" alt="" />
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div class="navbar-collapse" id="navbarText" style="display: contents;">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
    </ul>
    <span class="navbar-text white-text">
    <p class="text-dark mb-1 font-weight-bolder">
    Email : team.primeclasses@gmail.com   &nbsp &nbsp Contact :
9703709221

</p>    </span>
  </div>
</nav>
  <!-- <div style="float:right" class="pr-4 pt-4 d-none d-cont d-lg-block"><p class="text-white mb-1 font-weight-bolder">
Contact :
9703709221
</p>
</div> -->
  
    <div class="container">
      <?php

      if (isset($_POST['save'])) {
        $mysqltime = date_create()->format('Y-m-d H:i:s'); 
        $sql = "INSERT INTO users (username, email, number, location, team, matchd, date)
          VALUES ('" . $_POST["username"] . "','" . $_POST["email"] . "', '" . $_POST["number"] . "','" . $_POST["location"] . "', '" . $_POST["team"] . "', '" . $_POST["matchd"] . "', '".$mysqltime."')";

        $result = mysqli_query($conn, $sql);

        header('Location: thank.php');
      }

      ?>
      <form class="" action="" method="post">

        <div class="text-center white-text mx-2 mt-lg-0 pt-0 wow fadeIn">

          <h1 class="mb-0 pl-md-4 pt-lg-0 mt-sm-1 font-weight-bolder h1-head " style="font-size:40px;text-transform:uppercase">
            <strong>Guess the winner now</strong>
          </h1>
<h3><b>&</b></h3>
          <p style="font-size:20px" class="">
            <strong>Lucky Winners Get  <b style="background: #580075;
    padding: 5px;">FREE APTITUDE TRAINING</b></strong>
          </p>

        </div>
        <div class="container mt-0 pt-0 ">
          <!-- Grd row -->
          <div class="form-row mt-lg-5 mt-3">
            <!-- Grid column -->
            <div class="col-lg-3 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="Name" name="username" required />
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-3 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="Email" name="email" required />
            </div>
            <div class="col-lg-3 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" placeholder="Phone number" name="number" required />
            </div>
            <div class="col-lg-3 pl-lg-3 pr-lg-3 p-1">
              <!-- Default input -->
              <input type="text" class="form-control" name="location" placeholder="location" required />
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grd row -->
        </div>

        <div class="row justify-content-center d-flex mt-3">
          <div class="col-12 mb-sm-2 text-center d-none d-lg-block">
          <textarea name="matchd" class="white-text text-center" readonly=readonly>Match on Fri 8th June. Sophia Gardens, Cardiff</textarea>
            <!-- <small class="white-text " name="match">Match on Fri 7th June. County Ground, Bristol</small> -->

          </div>
          <div class="col-4 col-sm-4  text-center ">
            <div>
              <img src="img/team/i1.png" width="250px" class="img-fluid hoverable" alt="" />
            </div>
            <button style="" type="button" class="btn btn-primary btn-mb mt-lg-4" onclick="document.getElementById('defaultUnchecked').click()">
              England
            </button>
            <div class="custom-control custom-radio radio-b">
              <input type="radio" class="custom-control-input" id="defaultUnchecked" name="team" value="England" required />
              <label class="custom-control-label" for="defaultUnchecked"></label>
            </div>
          </div>
          <div class="col-2 col-sm-2 text-center">
            <div class="">
              <div>
                <img src="img/cup.png" width="100px" class="img-fluid" alt="" />
              </div>
              <h3 class="text-white mt-3 font-italic font-weight-bold">VS</h3>
            </div>
          </div>

          <div class="col-4 col-sm-4 text-center">
            <div class="">
              <img src="img/team/i2.png" width="250px" class="img-fluid hoverable" alt="" />
            </div>
            <button style="" type="button" class="btn btn-primary mt-lg-4 btn-mb" onclick="document.getElementById('defaultChecked').click()">
              Bangladesh
            </button>
            <div class="custom-control custom-radio radio-b">
              <input type="radio" class="custom-control-input" id="defaultChecked" name="team" value="Bangladesh" required />
              <label class="custom-control-label" for="defaultChecked"></label>
            </div>
          </div>
        </div>
        <div class="col-12 text-center mt-lg-1 pt-0">
          <button class="btn btn-success " type="submit" name="save">Submit</button>
        </div>
      </form>

    </div>
  </section>
  <!-- Navbar -->
  <script>

  </script>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>