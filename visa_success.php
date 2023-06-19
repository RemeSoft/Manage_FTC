<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT FTC - FENANTIAL TRANING COLLEGE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        .center__container {
            max-width: 1100px;
        }
    </style>

</head>

<body>

    <!-- REQUIRE HEADER  -->
    <?php include 'partials/header.php'; ?>
    
    <!-- REQUIRE BANNER  -->
    <?php 
        require 'db/connection.php';
        $banner__class = "";
        $banner__title = "Visa Success Stories";
        include 'partials/banner.php'; 
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
    ?>


    <!-- ---------------------------------------
                    BREADCRUMB START
    -------------------------------------->
    <div class="breadcrumb">
        <div class="center__container">
            <ul class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a class="breadcrumb:item__link" href="/">Home</a>
                </li>
                <li class="breadcrumb__item">
                    <a class="breadcrumb:item__link" href="/visa_success.php">Success Story</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------
                   MAIN CONTENT START
    ---------------------------------------------->
    <main class="grid">
        <div class="center__container">
            <div class="grid__content">
                <button class="grid__showmore">Show More</button>
                <div class="grid_shadow"></div>

                <?php 
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <img class="grid__image" src="img/success/<?=$row['image']?>" alt="">
                    <?php
                    }
                    } else {
                        echo "No results found.";
                    }
                ?>
            </div>
        </div>
    </main>



    <!-- REQUIRE FOOTER  -->
    <?php include 'partials/footer.php'; ?>
    <script src="./js/script.js"></script>
</body>

</html>