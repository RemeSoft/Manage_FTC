<?php
    session_start();
    require 'db/connection.php';

    if(!$_SESSION['AdminLoginId']){
        header("Location: /login.php");
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
                    <form class="form" method="POST" action="./controller/CreateStaff.php" enctype="multipart/form-data">
                        <input class="form__file_input" type="file" name="file" require>
                        <input class="form__text_input" type="text" name="name" placeholder="Enter staff name">
                        <input class="form__text_input" type="text" name="position" placeholder="Enter staff positions">
                        <input class="form__text_input" type="number" name="mobile" placeholder="Enter staff mobile">
                        <input class="form__button" type="submit" value="Submit" name="submit">
                    </form>
                </div>

                <div class="right:bottom">
                    <div class="scroller">
                        <div class="scroller__content">
                            <div class="table__holder">
                                <table class="table">
                                    <tr class="table__row">
                                        <th class="table__title">S.N</th>
                                        <th class="table__title">Image</th>
                                        <th class="table__title">Name</th>
                                        <th class="table__title center">Position</th>
                                        <th class="table__title center">Mobile</th>
                                        <th class="table__title end" style="padding-right:1rem">Actions</th>
                                    </tr>

                                    <?php 
                                        $sql = "SELECT * FROM staffs";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $scrial_no = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr class="table__row">
                                            <td class="table__data"><?php echo $scrial_no ?></td>
                                            <td class="table__data">
                                                <div class="row__image">
                                                    <img src="./img/team/<?=$row['image']?>" alt="">
                                                </div>
                                            </td>
                                            <td class="table__data"><?=$row['name']?></td>
                                            <td class="table__data center"><?=$row['position']?></td>
                                            <td class="table__data center"><?=$row['mobile']?></td>
                                            <td class="table__data">
                                                <div class="table__action">
                                                    <form action="./admin_update_staff.php" method="POST">
                                                        <input type="hidden" name="id" value="<?=$row['id']?>">
                                                        <button class="actions__item update" type="submit" name="update">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                    </form>
                                                    <form action="./controller/DeleteStaff.php" method="POST">
                                                        <input type="hidden" name="id" value="<?=$row['id']?>">
                                                        <button class="actions__item delete" onclick="return confirmAlert()" type="submit" name="delete">
                                                            <i class="bi bi-trash2-fill"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php 
                                        $scrial_no++;
                                        }
                                        } else {
                                            echo "No results found.";
                                        }
                                    ?>
                                </table>
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