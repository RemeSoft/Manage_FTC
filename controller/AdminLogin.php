<?php
require '../db/connection.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM `auth` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['AdminLoginId'] = $username;
        header("Location: /admin.php");
        exit;
    }else {
        echo "<script>alert('Wrong credentials');</script>";
        header("Location: /login.php");
        exit;
    }
}
?>