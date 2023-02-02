<?php
include('./includes/dbconn.php');

$productid = $_GET['pid'];
$productDetail = mysqli_query($mysqli, "SELECT * FROM products WHERE productid = '$productid'");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$propertyID = $productid;
	$username = $_SESSION["username"];
	header("Location:products.php?pid=" . $productid);
}
// Save Business Contact Info
?>

<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>KisanArea | Product Info</title>
	<!-- Website Logo-->
	<link rel="icon" type="image/x-icon" href="./image/kisanarea.png" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="./css/bootstrap.css" rel="stylesheet" />
	<!-- <link href="./css/bootstrap.min.css" rel="stylesheet" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">
	<!-- js for dropdown -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<?php require 'includes/menu.php'; ?>

	<?php while ($product = mysqli_fetch_array($productDetail)) { ?>

		<header class="bg-dark p-3">
			<div class="container my-3">
				<div class="text-center text-white">
					<h1 class="display-4 fw-bolder"><?php echo $product['name']; ?></h1>
					<!-- <p class="lead fw-normal text-white-50 mb-0">Welcome to KisanArea !!!</p> -->
				</div>
			</div>
		</header>
		<!-- Section-->

		<!-- Property Detail Start  -->
		<section class="">
			<div class="container">
				<div class="d-flex justify-content-center align-items-center">
					<div class="col-5 d-flex justify-content-center m-auto">
						<div class="card mb-5 mt-5 wid text-black border-success" style="border-radius: 25px;">
							<div class="card-body">
								<form method="POST" action="./addtocart.php">
									<img class="card-img-top center" width="45%" style="border-radius: 25px;" src="uploads/products/<?php echo $product['photo']; ?>" alt="" />
									<h1 class="text-center"><?php echo $product['name']; ?></h1>
									<input type="hidden" id="pname" name="pname" value="<?php echo $product['name']; ?>">
									<h4 class="text-center">Rs. <?php echo $product['price'] . ' ' . '/' . ' ' . $product['unit']; ?></h4>
									<div class="text-center Reveal-block-body">
										<h5 class="mb-2"><?php echo $product['description']; ?></h5>
									</div>
									<div class="text-center Reveal-block-body">
										<?php if ($product['stock'] == 0) {
											echo '<h5 class="mb-2 text-danger">Out of Stock</h5>';
										} else {
											echo '<h5 class="mb-2 mt-2 text-success">Available stock: ' . $product['stock'] . " " .
												$product['unit'];
											'</h5>';
										}
										?>
									</div>
									<div class="text-center Reveal-block-body">
										<?php
										if (isset($_SESSION['username'])) {
											if ($product['stock'] != 0) {
												echo '<input type="number" name="Mod_Quantity" id="Mod_Quantity" class="form-control wrapper" required placeholder="Quantity">';
											} else {
												echo '<a href="./index.php" class="a d-flex justify-content-end">Go back</a>';
											}
										} ?>
									</div>
									<div class="d-flex justify-content-center m-auto mb-3 mt-3">

										<?php if (isset($_SESSION['username'])) {
											if ($product['stock'] != 0) {
												echo '<button type="submit" name="Add_To_cart" class="btn btn navigation text-white">
										Add to cart
									</button>';
											}
										} else {
											echo
											'<a href="./login.php" name="" class="btn navigation text-white">
										Please Login
									</a>';
										}

										?>
										<input type="hidden" name="Item_name" value="<?php echo $product['name']; ?>">
										<input type="hidden" name="price" value="<?php echo $product['price']; ?>">

									</div>
								</form>
							</div>
						</div>
						<hr>
					</div>
				</div>
		</section>

	<?php } ?>

	<?php include('includes/footer.php'); ?>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->

</body>

</html>