<?php
include('./includes/dbconn.php');
?>
<html lang="en">

<head>
    <title>KisanArea | Search</title>
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

<body background="./image/a.jpg">

    <?php
    require './includes/menu.php';
    ?>

    <div class="col-md-12 container mb-5 p-lg-5">
        <h2 class="d-flex mt-5 text-light font">YOUR SEARCH IS HERE</h2>
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-bordered border border-dark">
                    <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST" action="./addtocart.php">
                            <?php
                            $mysqli = mysqli_connect("localhost", "root", "", "kisanarea");
                            if (isset($_GET['search'])) {
                                $filtervalues = $_GET['search'];
                                $query = "SELECT * FROM products WHERE CONCAT(name) LIKE '%$filtervalues%' ";
                                $query_run = mysqli_query($mysqli, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $featuredProd) {
                            ?>
                                        <tr>
                                            <td class="w-25 "><img class=" card-img-top img-fluid img-thumbnail w-50" src="admin/uploads/products/<?php echo $featuredProd['photo']; ?>" alt="" />
                                            </td>
                                            <td><?= $featuredProd['name']; ?></td>
                                            <td><?= $featuredProd['description']; ?></td>
                                            <td><?= $featuredProd['price']; ?></td>
                                            <td><?php if (isset($_SESSION['username'])) {
                                                    echo '<button type="submit" name="Add_To_cart" class="btn btn navigation text-white">
										Add to cart
									</button>';
                                                } else {
                                                    echo
                                                    '<a href="./login.php" name="" class="btn navigation text-white">
										Please Login
									</a>';
                                                }
                                                ?>
                                                <input type="hidden" name="Item_name" value="<?php echo $featuredProd['name']; ?>">
                                                <input type="hidden" name="price" value="<?php echo $featuredProd['price']; ?>">
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {

                                    ?>
                                    <tr>
                                        <td colspan="5">No Records Found</td>
                                    </tr>
                            <?php
                                }
                            }

                            ?>

                        </form>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    require './includes/footer.php';
    ?>
</body>

</html>