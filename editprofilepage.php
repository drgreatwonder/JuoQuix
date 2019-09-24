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

    <div class="container p-4">
        <h1 class="">Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">

                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">

                <h3>Personal info</h3>

                <form class="form-horizontal" method="post" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                            <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname'] ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                            <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname'] ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                            <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>" />
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="exampleFormControlSelect1">Most Preferred Languages</label>
                        <select class="form-control" name="most_preferred_language" id="exampleFormControlSelect1">
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="MySQL">MySQL</option>
                            <option value="PHP">PHP</option>
                        </select>
                    </div>

                    <div class="col-md-6 col-sm-12 mt-3">
                        <label>About Me</label>
                        <div class="form-group">
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5" placeholder="" name="bio" value="<?php echo $row['bio'] ?>"></textarea>
                        </div>
                    </div>
                    <a href="profilepage.php"><input type="submit" name="btn" class="btn btn-primary" value="Save Changes"></a>
                    <span></span>
                    <input type="reset" class="btn btn-default" value="Cancel">
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    <hr>

    <?php

    if (isset($_POST['btn'])) {
        # code...

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $most_preferred_language = $_POST['most_preferred_language'];
        $bio = $_POST['bio'];
        // $profile_pix = $_FILES ['profile_pix'] ['name'];

        // $uploadfile = $_FILES["profile_pix"]["tmp_name"];

        // $target = "quixphotos/". basename ($_FILES ['profile_pix'] ['name'] );

        // move_uploaded_file( $uploadfile , $target);

        $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', username = '$username',
	    email = '$email', most_preferred_language = '$most_preferred_language', bio = '$bio' where username = '$username' ";

        if (mysqli_query($con, $sql)) {
            ?>
            <script type="text/javascript">
                window.setTimeout(function() {
                    window.location.href = 'profilepage.php';
                }, 0);
            </script>
            <?php
        } else {
            echo "error" . $sql . mysqli_error($con);
        }
    }

    mysqli_close($con);
    ?>





    <?php require('footer.php') ?>

    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
</body>

</html>