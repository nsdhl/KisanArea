<?php
include './includes/dbconn.php';
session_start();

extract($_POST);
if (isset($update)) {
    mysqli_query($mysqli, "UPDATE alldetails SET fullname='$fname', email='$email',username='$username',password='$password' where username='" . $_SESSION['username'] . "'");
    mysqli_query($mysqli, "UPDATE users SET username='$username',password='$password' where username='" . $_SESSION['username'] . "'");
    $err = "<font color='blue'>Profile updated </font>";
    echo '<script>
	alert("Profile Updated");
	window.location.href="index.php";
	</script>';
}

//select old product

$q = mysqli_query($mysqli, "SELECT * FROM alldetails WHERE username='" . $_SESSION['username'] . "'");
$res = mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>KisanArea | Edit Profile</title>
    <link rel="icon" type="image/x-icon" href="../image/kisanarea.png" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

</head>

<body class="bg-dark">
    <?php
    // require './includes/menu.php';
    ?>

    <section class="">
        <div class="container font">
            <div class="d-flex justify-content-center align-items-center">

                <div class="col-5 d-flex justify-content-center m-auto mt-5">
                    <div class="card mb-5 mt-5 wid text-black border-2 border-success" style="border-radius: 25px;">
                        <div class="card-body">
                            <a href="./index.php" class="a d-flex justify-content-end">Go back</a>

                            <form method="POST" class="mx-1 mx-md-4">

                                <img src="./image/kisanarea.png" width="45%" alt="Kisan Area" class="center">
                                <h5 class="text-success d-flex justify-content-center mt-2 mb-4">Edit Profile</h5>

                                <div class="form-group mb-3">
                                    <div class="col-sm-4"><?php echo @$err; ?></div>
                                </div>
                                <div class="form-group mb-3">
                                    <b>Enter New Name</b>
                                    <input type="text" name="fname" class="mt-2 border-secondary form-control" value="<?php echo $res['fullname']; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <b>Enter New Email</b>
                                    <input type="email" name="email" class="mt-2 border-secondary form-control" value="<?php echo $res['email']; ?>">
                                </div>

                                <div class="form-group mb-3">
                                    <b>Enter New Username</b>
                                    <input type="text" name="username" class="mt-2 border-secondary form-control" value="<?php echo $res['username']; ?>">
                                </div>

                                <div class="form-group mb-3">
                                    <b>Enter New Password</b>
                                    <input type="password" name="password" class="mt-2 border-secondary form-control" value="<?php echo $res['password']; ?>">
                                </div>

                                <div class="text-white form-group mt-4 mb-3">
                                    <input type="submit" value="Update" name="update" class="btn btn-primary" />
                                    <input type="reset" class="btn btn-dark" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>