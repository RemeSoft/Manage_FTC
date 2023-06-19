<?php
    session_start();
    require 'db/connection.php';

    if(!$_SESSION['AdminLoginId']){
        header("Location: http://localhost/project_ftc/login.php");
    }

    if(isset($_POST['update'])){
        $record_id = $_POST['id'];
        $sql = "SELECT * FROM `staffs` WHERE `id` = $record_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
    <main class="admin">

        <!-- INCLUDEING SIDEBAR START  -->
        <?php 
            $isActive_staff = "active";
            $isActive_student = "";
            $isActive_event = "";
            include 'partials/sidebar.php'; 
        ?>

        <div class="right">
            <!-- INCLUDEING ADMINB HEADER  -->
            <?php include 'partials/admin_header.php'; ?>

            <div class="right__content">
                <div class="right:top">
                    <h2 style="margin-bottom:1.5rem">Update your specific field.</h2>
                    <form class="form" method="POST" action="./controller/UpdateStaff.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <input type="hidden" name="file_name" value="<?=$row['image']?>">
                        <input class="form__file_input" type="file" name="file" require>
                        <input class="form__text_input" value="<?=$row['name']?>" type="text" name="name" placeholder="Enter staff name">
                        <input class="form__text_input" value="<?=$row['position']?>" type="text" name="position" placeholder="Enter staff positions">
                        <input class="form__text_input" value="<?=$row['mobile']?>" type="number" name="mobile" placeholder="Enter staff mobile">
                        <input class="form__button" type="submit" name="update" value="Update">
                    </form>
                </div>

            </div>
        </div>
    </main>
    <script src="./js/vandor/autotyping.min.js"></script>
    <script src="js/admin.js"></script>
</body>
</html>