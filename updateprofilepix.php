<?php require 'dbconnection.php';
require 'sessiongetstarted.php';
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

<body>


    <div class="container-fluid p-4">
        <h1 class="">Edit Profile Picture</h1>
        <hr>
        <div class="row pb-5">

            <!-- left column -->
            <div class="col-md-6 offset-3">
                <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                    <div class="text-center">
                        <?php echo  "<img src='quixphotos/" . $row['profile_pix'] . "' width='400' height='400' class='checky' alt='image'>"; ?>
                        <br><br>
                        <input type="file" class="form-control" name="profile_pix">


                        <a href="profilepage.php"><input type="submit" name="btn" class="btn btn-primary" value="Save Changes"></a>
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">

                    </div>
                </form>

            </div>

        </div>

        <?php



        if (isset($_POST['btn'])) {

            $profile_pix = $_FILES['profile_pix']['name'];

            $uploadfile = $_FILES["profile_pix"]["tmp_name"];

            $target = "quixphotos/" . basename($_FILES['profile_pix']['name']);

            move_uploaded_file($uploadfile, $target);

            $sql = "UPDATE users SET profile_pix = '$profile_pix' where user_id = '$id' ";

            echo $sql;

            if (mysqli_query($con, $sql)) {
                ?>
                <!-- <script type="text/javascript">
              window.setTimeout(function(){
                //   window.location.href = 'profilepage.php';
              }, 0);
                        
              </script> -->
        <?php
            } else {
                echo "error" . $sql . mysqli_error($con);
            }
        }

        mysqli_close($con);
        ?>
    </div>
    <?php
    require 'footer.php';
    ?>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>

</html>