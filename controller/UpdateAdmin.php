<?php
    session_start();
    require '../db/connection.php';
    require './Notification.php';


    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $passoword = $_POST['password'];
    

 
        if(!empty($username) && !empty($passoword)){

             $sql = "UPDATE `auth` SET `username`=' $username',`password`='$passoword' WHERE 1";
             if(mysqli_query($conn, $sql)){
                redirector("/admin.php", "Record updated successfully!", "success");
             }else{
                redirector("/admin.php", "Record updateding failed!", "warning");
             }
        }else{
             redirector("/admin.php", "There was an empty field.", "warning");
        }
     }else{
        redirector("/admin.php", "There appears to be a problem in our system!!","warning");
     }

?>