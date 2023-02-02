<?php

if (!isset($_SESSION['username'])) {
    $_SESSION['count'] = 1;
} else {
    ++$_SESSION['count'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- js for dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Website Logo -->
    <link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>About | KisanArea</title>

</head>


<body>
    <?php
    require './includes/menu.php';
    ?>
    <!-- <div class="about-section bg-dark"> -->
    <header class="bg-dark p-1">
        <div class="container my-4">
            <div class="text-center text-white">
                <h1 class="display-3 fw-bolder">About Us</h1>
                <h5 class="mt-4">Easy to buy, Easy to sell !!!</h5>
            </div>
        </div>
    </header>

    <div>
        <img src="./image/image (4).jpg" class="container d-flex img-fluid mb-5 mt-5" width="100%">
    </div>

    <section class="section mb-3 ">
        <div class="container ">
            <div>
                <div class="d-flex justify-content-center font">
                    <h2 class="mb-4">Who We Are ?</h2>
                </div>

                <h4>
                    The Scenario
                </h4>
                <p class="">
                    Today, there are more than 750 million farms globally, and the families of farmers operate them.
                    With so many farmers engaged in the farming industry, we will get food. Still, it is different
                    for the families dependent on farming for their livelihoods. To battle such competition in
                    agriculture farmers can use online farming app.A farmers’ assistance web application (KisanArea)
                    is one of the web applications that is built to help the farmer to ensure greater profitability
                    through direct communication of farmer to supplier and farmer to farmer. The KisanArea helps to
                    connect agricultural producers and provide them with shared knowledge. Spreading agricultural
                    related information to farmers in the poorest communities made easier with the help of Kisan Area.
                </p>
                <h4>Solution</h4>
                <p class="text-justify">KisanArea provides an intelligent digital agriculture platform built to solve challenges faced by commercial and smallholder farmers. Kishan Area helps in transmitting information related to farming and make a connectivity between the experts and farmers. KisanArea also helps in scheduling the farming activities timely.</p>

                <h4>Mission</h4>
                <p>
                    The Mission of ‘Kisan Area’ is to use all available information and expertise to enable the automation of sustainable process in farming.
                </p>
                <h4>Objectives</h4>
                <ul>
                    <li style=" list-style: disc; list-style-position: inside;">It helps to uplifts the socio-economic status of farmers.
                    </li>
                    <li style="list-style: disc; list-style-position: inside;">It helps to remove the broker system i.e. middlemen.
                    </li>
                    <li style="list-style: disc; list-style-position: inside;">It helps farmers to be modernize about the marketing and trading.
                    </li>
                    <li style="list-style: disc; list-style-position: inside;">It allows farmers to make smart decisions about farming.

                    </li>

                </ul>
                <!-- <p class="col-lg-MB-20">&nbsp;</p>

                <p>
                  <a class="custom-btn primary big" href="#">Get in touch</a>
                </p>
              </div> -->

                <!-- <div class="col-lg-4 offset-lg-1">
                  <div class="col-MB-30">
                    <img
                      class="d-block mx-auto img-fluid"
                      src="../img/l2.png"
                      alt="demo"
                    />
                  </div>

                  <div class="col-MB-30">
                    <img class="img-fluid" src="../img/slogan.png" alt="demo" />
                  </div>
                </div> -->
            </div>
        </div>
    </section>





    <!-- <h2 style="text-align:center" class="mt-1 mb-1">Team</h2> -->
    <!-- <div class="row justify-content-center mt-3">
        <div class="col mb-3">
            <div class="card h-100 m-auto w-50 justify-content-center border-secondary font">
                <img src="./image/bim.jpg" alt="Bimo" style="width:90%" class="image-fluid mt-3 d-flex justify-content-center m-auto">
                <div class="container">
                    <h2>Bimochan Bajimaya</h2>
                    <p class="title my-1">Founder/Developer</p>
                    <p class="my-1">Studying BCA at ICMS, Samarpan Academy</p>
                    <p class="my-1">bimochanbajimaya@tuicms.edu.np</p>
                    <p class="my-1">+977-9860232480</p> -->
    <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="./regform.php">Contact</a></div> -->
    <!-- </div>
            </div>
        </div>
        <div class="col mb-3">

            <div class="card h-100 m-auto w-50 justify-content-center border-secondary font">
                <img src="./image/nis.jpg" alt="Nischal" style="width:90%" class="image-fluid mt-3 d-flex justify-content-center m-auto">
                <div class="container">
                    <h2>Nischal Dahal</h2>
                    <p class="title my-1">Founder/Developer</p>
                    <p class="my-1">Studying BCA at ICMS, Samarpan Academy</p>
                    <p class="my-1">nischaldahal@tuicms.edu.np</p>
                    <p class="my-1">+977-9805940865</p> -->
    <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="./regform.php">Contact</a></div> -->

    <!-- </div>
    </div>
    </div>
    </div> -->
</body>
<?php
require './includes/footer.php';
?>

</html>