<?php
    session_start();
    require '../db/connection.php';
    require './Notification.php';

    if(isset($_POST['submit'])) {

        // GETTING ALL INFORMATIONS
        $fileName = $_FILES['file']['name'];
        $name = $_POST['name'];
        $positon = $_POST['position'];
        $mobile = $_POST['mobile'];


        if(!empty($fileName) && !empty($name) && !empty($positon)&& !empty($mobile)){

            // MANAGEING FILE DATA
            $tmpName = $_FILES['file']['tmp_name'];
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            $uploadDir = "../img/team/";
            $unique_name = uniqid().".". $extension;
            
            // PREPARE SQL FOR INSERTING
            $sql = "INSERT INTO `staffs`(`name`, `position`, `mobile`, `image`) VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql);

            // BIND PERAMETER ((ssss)) means = string string string string
            $stmt->bind_param("ssss", $name, $positon,$mobile,$unique_name);

            // Execute the statement
            if ($stmt->execute()) {
                    move_uploaded_file($tmpName, $uploadDir.$unique_name);
                    redirector("/admin.php", "The inserted successfully!","success");     
            } else {
                redirector("/admin.php", "", "warning");         
            }
        }else{
            redirector("/admin.php", "There was an empty field.", "warning");
        }
    }
?>