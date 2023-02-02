<?php
session_start();
include '../includes/dbconn.php';

$name = '';
$photo = 'no-image.jpg';
$unit = '';
$description = '';
$features = '';
$category = '';
$isFeatured = '';


// Edit Products
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $photo = $_FILES["photo"]["name"];
  $unit = $_POST['unit'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $isActive = $_POST['isActive'];
  $isFeatured = $_POST['isFeatured'];
  $category = $_POST['category'];
  $stock = $_POST['stock'];

  try {

    // Code to Upload FIles
    $target_path =  "uploads/products/";
    $target_path = $target_path . basename(
      $_FILES['photo']['name']
    );

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
      '<script>console.log("File uploaded successfully!");</script>';
    } else {
      '<script>console.log("Sorry, file not uploaded, please try again!");</script>';
    }
    // Code to Upload Files

    $query = mysqli_query($mysqli, "INSERT INTO products (name,photo,unit,description,price,stock,isActive,isFeatured,category) values ('$name','$photo','$unit','$description','$price','$stock','$isActive','$isFeatured','$category')");
  } catch (Exception $e) {
    $message = 'Unable to add new product.' . $e;
    throw new Exception('Unable to save details. Please try again later.', 0, $e);
  }

  if ($mysqli->affected_rows == 0) {
    echo '<script>alert("Cannot Add Product");</script>';
    header("Location:../admin/add-product.php");
  } else {
    echo '<script>alert("Product Added Succesfully");window.location.href="./dashboard.php";</script>';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KisanArea | Add new Product</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css" />
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" />
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css" />
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css" />
  <link rel="icon" type="image/x-icon" href="../image/kisanarea.png" />

</head>

<body class="hold-transition sidebar-mini font">
  <?php
  include '../includes/aside.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container d-flex justify-content-center">
        <b class="font">
          <h1>Add New Product</h1>
        </b>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">

        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body font">
        <form method="POST" id="ProductDetails" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6 col-lg-6">
              <label>Product Name</label>
              <input type="text" name="name" id="name" class="form-control border-1 border-secondary" value="" required placeholder="Product Name">
            </div>

            <div class="form-group col-md-6 col-lg-6">
              <label>Photo URL</label>
              <input type="file" name="photo" id="photo" class="form-control border-1 border-secondary" required placeholder="Photo URL">
            </div>

            <div class="form-group col-sm-4">
              <label>Price</label>
              <input type="number" name="price" id="price" required placeholder="Price" class="form-control border-1 border-secondary">
            </div>

            <div class="form-group col-sm-4">
              <label>Unit</label>
              <select name="unit" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="unit">
                <option value="Kg">Kg</option>
                <option value="Dozen">Dozen</option>
                <option value="Piece">Piece</option>
                <option value="Mutha">Mutha</option>
                <option value="Bunch">Bunch</option>
              </select>
            </div>

            <div class="form-group col-sm-4">
              <label>Stock</label>
              <input type="number" name="stock" id="stock" required placeholder="Stock" class="form-control border-1 border-secondary">
            </div>

            <div class="form-group col-md-8 col-lg-12">
              <label>Product Description:</label>
              <textarea name="description" id="description" cols="10" rows="5" class="form-control border-1 border-secondary" required placeholder="Product Description"></textarea>
            </div>

            <div class="form-group col-sm-4">
              <label>Is Active</label>
              <select name="isActive" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="isActive">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
            </div>
            <div class="form-group col-sm-4">
              <label>Is Featured</label>
              <select name="isFeatured" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="isFeatured">
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
            </div>
            <div class="form-group col-sm-4">
              <label>Category</label>
              <select name="category" required autocomplete="off" class="form-control border-1 border-secondary combobox" id="category">
                <option default>Category</option>
                <option value="Fruit">Fruit</option>
                <option value="Vegetable">Vegetable</option>
                <option value="Others">Others</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" value="ADD" name="submit_prod" id="submit" class="btn btn-success text-white" />
              <input type="reset" value="RESET" name="" id="submit" class="btn btn-dark" />
            </div>
          </div>

        </form>
        <!-- /.content-wrapper -->
        <footer class="d-flex justify-content-center mt-5">
          <strong>Copyright &copy; 2022
            <a href="#">KisanArea</a>.</strong>
        </footer>

      </div>
    </section>
  </div>

</body>

</html>