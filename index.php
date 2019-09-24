<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Chidinma Esther Muoghalu">
  <meta name="description" content="this is a quiz web app for programmers">
  <meta name="keywords" content="quiz, HTML, CSS, JavaScript, PHP, MySQL, Frameworks">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JuoQuix</title>
  <link rel="icon" type="image/png" href="images/questions.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mainn.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body class="index">

  <div class="">

    <div class="jumbotron jumbotron-fluid bg-dark value p-0 md-12 mb-5">

      <div class="opacity pt-3">
        <div class="sticky-top">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand">
              <img src="" alt=""><b>JuoQuix</b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link mr-5 text-white" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-5 text-white" href="aboutus.php">About Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link mr-5 text-white" href="#Contact Us" tabindex="-1" aria-disabled="true">Contact Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link mr-5 text-white" href="dashboard.php" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#elegantModalForm">Login</a>


                </li>

                <li class="nav-item">
                  <a class="nav-link mr-5 text-white" href="#blog" tabindex="-1" aria-disabled="true">Blog</a>
                </li>
              </ul>


            </div>
          </nav>



          <hr class="my-4 bg-stylish-color
#4B515D">
        </div>
        <h1 class="display-4">JuoQuix<h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="getstarted.php" role="button">Get Started</a>


      </div>

    </div>

    <!-- The End oh Hero Image and Navbar -->

    <!-- Blog Section -->
    <div class="container-fluid mt-5 mb-5" id="blog">
      <h2 class="text-center mb-3">OUR BLOG</h2>
      <div class="row">
        <div class="col-md-3 col-sm-12 mb-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/html.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary text-white">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 mb-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/js.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary text-white">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 mb-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/mysql.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary text-white">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 mb-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/php2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary text-white">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Blog Section -->


    <!-- Contact Us Section -->

    <div class="container col-md-6 justify-content-center mb-3" id="Contact Us">
      <h2 class="text-center mb-3">CONTACT US</h2>


      <form class="text-center border border-light p-5" action="#!">
        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
        <div class="form-group">
          <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5" placeholder="Message"></textarea>
        </div>
        <button class="btn btn-info ml-auto" type="submit">Send</button>

      </form>
    </div>
    <!-- End of Contact Us Section -->


    <!-- Modal -->
    <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
          <!--Header-->
          <div class="modal-header text-center">
            <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
            <div id="adminpage" class="row">

            </div>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body mx-4">
            <!--Body-->
            <form method="post" enctype="multipart/form-data">
              <div class="md-form mb-5">
                <input type="text" id="" name="username" class="form-control validate">
                <label data-error="wrong" data-success="right" for="Form-email1">Your Username</label>
              </div>

              <div class="md-form pb-3">
                <input type="password" id="" name="password" class="form-control validate">
                <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
                <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="fpasswordpage.php" class="blue-text ml-1">
                    Password?</a></p>
              </div>

              <div class="text-center mb-3">

                <input type="submit" name="btn" class="btn btn-primary" value="Admin Login"><a href="dashboard.php" class="p-3"><span class="text-white">
                    <input type="submit" name="btn" class="btn btn-primary" value="Student Login"><a href="profilepage.php" class="p-3"></span>
                  


              </div>

              <div class="modal-footer mx-5 pt-3 mb-1">
                <p class="font-small text-secondary">Not a member?<a href="getstarted.php" class="blue-text ml-1">
                Sign Up</a></p>
              </div>
              <?php


              require 'dbconnection.php';

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = mysqli_real_escape_string($con, $_POST['username']);
                $password = mysqli_real_escape_string($con, $_POST['password']);
                $query = "SELECT * FROM users where username = '$username' and password = '$password'";
                $sql = mysqli_query($con, $query);
                $row = mysqli_fetch_array($sql);
                $count = mysqli_num_rows($sql);
                if ($count == 1) {
                  $_SESSION['user'] = $username;
                  ?>
                  <script type="text/javascript">
                    window.setTimeout(function() {
                      window.location.href = 'profilepage.php';
                    }, 0);
                  </script>
              <?php
                } else {
                  echo "<font color='#600000'>Your Email or Password is invalid</font>";
                }
              }
              ?>



            </form>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!-- Modal -->



      <!-- This is the end of Contact Us Section -->

    </div>
    <?php
    require 'footer.php';
    ?>
  </div>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
</body>

</html>