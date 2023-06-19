<?php
    session_start();
    require '../db/connection.php';
    require './Notification.php';

    if(isset($_POST['submit'])) {

        // GET FILE NAMES
        $fileName = $_FILES['file']['name'];

        if(!empty($fileName)){

            // GETING FILE INFORMATIONS
            $tmpName = $_FILES['file']['tmp_name'];
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            $uploadDir = "../img/event/";
            $unique_name = uniqid().".". $extension;

            // PREPARE THE SQL STATEMENT
            $sql = "INSERT INTO `event`(`image`) VALUES (?)";
            $stmt = $conn->prepare($sql);


            // Bind the parameters
            $stmt->bind_param("s", $unique_name);

            // EXICUTE THE STATEMENT
            if ($stmt->execute()) {
                move_uploaded_file($tmpName, $uploadDir.$unique_name);
                redirector("/admin_event.php", "The event was inserted successfully!","success");
            } else {
                redirector("/admin_event.php", "Event insertion failed in the database!","warning");
            }

        }else{
            redirector("/admin_event.php", "Please select an image and try again!", "warning");
        }
    }else{
        redirector("/admin_event.php", "There appears to be a problem in our system!!","warning");
    }
?>