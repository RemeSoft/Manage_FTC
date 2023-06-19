<?php
    session_start();
    require '../db/connection.php';
    require './Notification.php';


    if(isset($_POST['submit'])) {

        // GET FILE NAMES
        $fileName = $_FILES['file']['name'];

        //CHECK FILE IS EXIEST
        if(!empty($fileName)){

            //GETING FILE INFORMATIONS
            $tmpName = $_FILES['file']['tmp_name'];
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            $uploadDir = "../img/success/";
            $unique_name = uniqid().".". $extension;

            //  PREPARING SQL FOR POST
            $sql = "INSERT INTO `student`(`image`) VALUES (?)";
            $stmt = $conn->prepare($sql);

            // BINDING PERAMETERS
            $stmt->bind_param("s", $unique_name);

            // Execute the statement
            if ($stmt->execute()) {
                move_uploaded_file($tmpName, $uploadDir.$unique_name);
                redirector("/admin_student.php", "The student was inserted successfully!","success");
            } else {
                redirector("http://localhost/project_ftc/admin_student.php", "Record Cireation failed!","warning");
            }

        }else{
            redirector("/admin_student.php", "Please select an image and try again!", "warning");
        }
    }else{
        redirector("/admin_student.php", "There appears to be a problem in our system!!","warning");
    }
?>