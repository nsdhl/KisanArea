<html lang="en">

<head>
    <title>KisanArea | Login</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- <script src="./js/validate.js"></script> -->
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- js for dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body class="bg-dark">

    <?php
    require './includes/menu.php';
    ?>
    <section class="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center border-2 border-success">
                <div class="col-5 d-flex justify-content-center m-auto">
                    <div class="card mb-5 mt-5 wid text-black border-2 border-success" style="border-radius: 25px;">
                        <div class="card-body">
                            <!-- <div class="container border border-success border-5 rounded"> -->
                            <form action="./logdb.php" name="form" class="mx-1 mx-md-4" id="form" method="POST" enctype="multipart/form-data">
                                <!-- <h1 class="p-3 mb-2 bg-success bg-gradient text-white" style="font-family: 'Courier New'; text-align: center;">Namaste</h1><br> -->
                                <img src="./image/kisanarea.png" width="37%" alt="KisanArea" class="center">
                                <h4 class="text-success d-flex justify-content-center mt-2 mb-3 font">Sign in to KisanArea</h4>
                                <div class="form-group">
                                    <label for="username">
                                        <h5>Username: <span class=" text-danger">*</span></h5>
                                    </label>
                                    <input type="text" id="username" name="username" required placeholder="Username" class="form-control border-success" />
                                    <span class="text-danger username-not-found"></span>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="mt-3">
                                        <h5>Password: <span class="text-danger">*</span></h5>
                                    </label>
                                    <input type="password" id="password" name="password" required placeholder="Password" class="form-control border-success" />
                                    <span class="text-danger password-not-found"></span>
                                </div>

                                <div class=" text-white">
                                    <button name="login" id="login" class="d-flex m-auto justify-content-center btn navigation text-white form group mt-3">Login</button>
                                    <span class="text-success form-submitted"></span>
                                </div>
                                <div class="form-group d-flex justify-content-center mt-3 mb-2">
                                    Don't have an account? &nbsp
                                    <a href="./buyer.php" class="myA">Sign Up</a>
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