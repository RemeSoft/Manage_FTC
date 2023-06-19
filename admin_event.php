<?php
    session_start();
    require 'db/connection.php';

    if(!$_SESSION['AdminLoginId']){
        header("Location: http://localhost/project_ftc/login.php");
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
            $isActive_staff = "";
            $isActive_student = "";
            $isActive_event = "active";
            include 'partials/sidebar.php'; 
        ?>

        <div class="right">
            <!-- INCLUDEING ADMINB HEADER  -->
            <?php include 'partials/admin_header.php'; ?>

            <div class="right__content">
                <div class="right:top">
                    <form class="right:top__input" method="POST" action="./controller/CreateEvent.php" enctype="multipart/form-data">
                        <input class="form__file_input" type="file" name="file">
                        <input class="form__button" name="submit" type="submit" value="Add New Event">
                    </form>
                </div>

                <div class="right:bottom">
                    <div class="scroller">
                        <div class="scroller__content">
                            <div class="card__holder" style="grid-template-columns: repeat(4, 1fr)">
                                <?php 
                                    $sql = "SELECT * FROM `event` ORDER BY id DESC";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="card">
                                        <div class="card__action">
                                            <form action="./controller/DeleteEvent.php" method="POST">
                                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                                <button class="action__delete" onclick="return confirmAlert()" type="submit" name="delete">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <img src="./img/event/<?=$row['image']?>" alt="">
                                    </div>
                                    <?php
                                    }
                                    } else {
                                        echo "No results found.";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./js/vandor/autotyping.min.js"></script>
    <script src="js/admin.js"></script>
</body>
</html>