<?php
    session_start();
    require '../db/connection.php';
    require './Notification.php';

   


    if(isset($_POST['update'])){
        $staff_id = $_POST['id'];
        $staff_name = $_POST['name'];
        $staff_position = $_POST['position'];
        $staff_mobile = $_POST['mobile'];
        $prv_staff_image = $_POST['file_name'];
        $prv_file_path = "../img/team/$prv_staff_image";

        if(!empty($staff_name) && !empty($staff_position)&& !empty($staff_mobile)){

            // GET FILE NAMES
            $present_staff_image = $_FILES['file']['name'];

            if(!empty($present_staff_image)){
                //GETING FILE INFORMATIONS
                $tmpName = $_FILES['file']['tmp_name'];
                $extension = pathinfo($present_staff_image, PATHINFO_EXTENSION);
                $uploadDir = "../img/team/";
                $unique_name = uniqid().".". $extension;
                

                // SETTING UP QUERY FOR UPDATE
                $sql = "UPDATE `staffs` SET `name`='$staff_name',`position`='$staff_position',`mobile`='$staff_mobile',`image`='$unique_name' WHERE `id` = $staff_id";
                
                //DELETEING PREVIOUS FILE.
                if(file_exists($prv_file_path)){
                    if(mysqli_query($conn, $sql)){
                        if(unlink($prv_file_path)){

                            // UPLOADING NEW FILE
                            move_uploaded_file($tmpName, $uploadDir.$unique_name);
                            redirector("/admin.php", "Record updated successfully!", "success");
                            mysqli_close($conn);
                        }
                    }else{
                        redirector("/admin.php", "Record deletion failed!", "warning");
                    }
                }else{
                    redirector("/admin.php", "Image doesn't exist!", "warning");
                }
            }


            // SETTING UP QUERY FOR UPDATE
            $sql = "UPDATE `staffs` SET `name`='$staff_name',`position`='$staff_position',`mobile`='$staff_mobile' WHERE `id` = $staff_id";
            
            // UPDATEING THE REOCORD.
            if (mysqli_query($conn, $sql)){
                redirector("/admin.php", "Record updated successfully!", "success");
            }else{
                redirector("/admin.php", "Error updating record!", "warning");
            }
        }else{
            redirector("/admin.php", "There was an empty field.", "warning");
        }
    }else{
        redirector("/admin.php", "There appears to be a problem in our system!!","warning");
    }
?>