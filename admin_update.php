<?php
    session_start();
    require 'db/connection.php';

    if(!$_SESSION['AdminLoginId']){
        header("Location: http://localhost/project_ftc/login.php");
    }

    $sql = "SELECT * FROM auth";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
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
            $isActive_staff = "";
            $isActive_student = "active";
            $isActive_event = "";
            include 'partials/sidebar.php'; 
        ?>

        <div class="right">
            <!-- INCLUDEING ADMINB HEADER  -->
            <?php include 'partials/admin_header.php'; ?>

            <div class="right__content">
                <div class="right:top">
                    <h2 style="margin-bottom:1.5rem">Update username and password</h2>
                    <form class="right:top__input" method="POST" action="./controller/UpdateAdmin.php" >
                        <div class="update__admin">
                            <div class="input__holder">
                                <label class="input__label">Update your username</label>
                                <input class="form__text_input" value="<?=$row['username']?>" type="text" name="username" placeholder="Enter new username">
                            </div>
                            <div class="input__holder">
                                <label class="input__label">Update your password</label>
                                <input class="form__text_input" value="<?=$row['password']?>" type="text" name="password" placeholder="Enter new password">
                            </div>
                            <input class="form__button" name="update" type="submit" value="Update Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="./js/vandor/autotyping.min.js"></script>
    <script src="js/admin.js"></script>
</body>
</html>