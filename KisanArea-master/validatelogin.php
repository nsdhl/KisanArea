<?php

include './includes/dbconn.php';

if (isset($_POST['login'])) {
    login();
}
function login()
{
    global $db, $username, $errors;

    // grap form values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) { // user found
        // check if user is admin or user
        $logged_in_user = mysqli_fetch_assoc($results);
        if ($logged_in_user['user_type'] == 'admin') {

            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success']  = "You are now logged in";
            header('location: home.php');
        } else {
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success']  = "You are now logged in";

            header('location: index.php');
        }
    } else {
        array_push($errors, "Wrong username/password combination");
    }
}
