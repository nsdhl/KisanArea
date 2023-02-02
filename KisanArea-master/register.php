<?php

if (!isset($_SESSION['username'])) {
    $_SESSION['count'] = 1;
} else {
    ++$_SESSION['count'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KisanArea | Register</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- js for dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="bg-dark">
    <?php
    require './includes/menu.php';
    ?>
    <section class="p-0 font">
        <div class="container d-flex justify-content-center p-5">
            <div class="col-6 row">
                <div class="col d-flex justify-content-center py-4 zoom">
                    <div class="card h-100 mx-5 w-50 border-2 border-success" style="border-radius: 25px;">
                        <h4 class="center mt-3 mb-3 fw-bolder">Sign Up</h4>
                        <img class="card-img-top img center w-50" src="./image/cartg.png" width="50%" />
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="fw-bolder">KisanArea</h5>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a href="./buyer.php" class="btn btn-outline-dark btn-sm mt-auto fw-bold">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require './includes/footer.php';
    ?>

</body>

</html>