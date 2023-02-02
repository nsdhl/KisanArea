<?php
session_start();
include('./includes/dbconn.php');



if (mysqli_connect_error()) {
  echo "<script>
  alert('cannot connect to database');
    window.location.href='./mycart.php';
  </script>";
  exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST")    //checking the server method is post or not
{
  $total = 0;
  if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
      $sr = $key + 1;
      if (isset($_POST['purchase']))   //checking make purchse button
      {
        $pname = $value['Item_name'];
        $productDetail = mysqli_query($mysqli, "SELECT * FROM products WHERE name = '$pname'");

        $oid = rand(1, 100);
        $query1 = "INSERT INTO orders(item_name, price, quantity, order_id, orderedby, address, phoneno, payment_mode) VALUES ('$value[Item_name]','$value[price]','$value[Quantity]',$oid,'$_POST[fullname]','$_POST[address]','$_POST[phone_no]','$_POST[pay_mode]')";
        if (mysqli_query($mysqli, $query1)) {
          //prepared statement -> creates templates    //preparing query once and executing it multiple times
          // $Order_Id = mysqli_insert_id($mysqli);
          // $query2 = "INSERT INTO orders(item_name, price, quantity, order_id) VALUES ('$value[Item_name]','$value[price]','$value[Quantity]',$oid)";
          // $stmt = mysqli_prepare($mysqli, $query2);

          while ($product = mysqli_fetch_array($productDetail)) {
            $query3 = "UPDATE products SET stock = ('$product[stock]'-'$value[Quantity]') WHERE name = '$pname'";
            $stmt = mysqli_prepare($mysqli, $query3);
          }
          if ($stmt) {
            // mysqli_stmt_bind_param($stmt, $Order_Id, $Item_Name, $Price, $Quantity);       //binding the prepare statement with parameters '?''
            foreach ($_SESSION['cart'] as $key => $values) {
              $Item_Name = $values['Item_name'];   //values = form names
              $Price = $values['price'];
              $Quantity = $values['Quantity'];
              mysqli_stmt_execute($stmt);
            }
            unset($_SESSION['cart']);
            echo "<script>
  alert('Order Placed');
    window.location.href='./index.php';
  </script>";
          } else {

            echo "<script>
    alert('SQL query prepared error');
      window.location.href='./mycart.php';
    </script>";
          }
        } else { {
            echo "<script>
    alert('SQL error');
      window.location.href='./mycart.php';
    </script>";
          }
        }
      }
    }
  }
}
