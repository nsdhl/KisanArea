<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Signup Buyer | KisanArea</title>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <!-- js for dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/signup.js" defer></script>
</head>

<body class="bg-dark">
    <?php
    require './includes/menu.php';
    ?>

    <section class="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-5 d-flex justify-content-center m-auto">
                    <div class="card mb-5 mt-5 wid text-black border-2 border-success" style="border-radius: 25px;">
                        <div class="card-body">
                            <form action="./regbuyer.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">
                                <img src="./image/kisanarea.png" width="45%" alt="Kisan Area" class="center">
                                <h5 class="text-success d-flex justify-content-center mt-2 mb-4">Sign up as buyer</h5>

                                <div class="form-group mb-3">
                                    <input type="text" name="fname" id="fname" placeholder="Name" class="form-control border-success" />
                                    <span class="text-danger fname-not-found mt-2"></span>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="email" name="email" id="email" class="form-control border-success" placeholder="E-mail" />
                                    <span class="text-danger email-not-found"></span>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="address" name="address" id="address" class="form-control border-success" placeholder="Address" />
                                    <span class="text-danger address-not-found"></span>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="phone" name="phone" id="phone" class="form-control border-success" placeholder="Phone Number" />
                                    <span class="text-danger phone-not-found"></span>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="username" name="username" id="username" class="form-control border-success" placeholder="Username" />
                                    <span class="text-danger username-not-found"></span>
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control border-success" />
                                    <span class="text-danger password-not-found"></span>
                                </div>

                                <div class=" text-white form-group mt-2">
                                    <input type="button" name="login" id="login" class="btn navigation text-white d-flex justify-content-center m-auto" value="Submit" />
                                    <span class="text-success form-submitted"></span>
                                </div>
                            </form>
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