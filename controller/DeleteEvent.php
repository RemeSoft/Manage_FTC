<?php
    session_start();
    require '../db/connection.php';
    require './Notification.php';

    if(isset($_POST['delete'])){

        // GETING IMAGE ID.
        $record_id = $_POST['id'];

        // GETING IMAGE NAME
        $sql = "SELECT * FROM `event` WHERE `id`=$record_id;";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $image_name = $row['image'];
        
        $file_path = "../img/event/$image_name";

        // DELETEING IMAGE AND IT'S RECORD
        $sql = "DELETE FROM `event` WHERE id=$record_id";
        if(file_exists($file_path)){
            if($conn->query($sql) === TRUE){
                if(unlink($file_path)){
                    redirector("/admin_event.php", "The event was deleted successfully!", "success");
                    $conn->close();
                }else{
                    redirector("/admin_event.php", "Image deletion failed!", "warning");
                }
            }else{
                redirector("/admin_event.php", "Record deletion failed!", "warning");
            }
        }else{
            redirector("/admin_event.php", "The image does not exist.", "warning");
        }
    }else{
        redirector("/admin_event.php", "There appears to be a problem in our system!!","warning");
    }
?>