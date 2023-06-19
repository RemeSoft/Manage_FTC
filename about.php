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
        $banner__class = "";
        $banner__title = "About FTC";
        include 'partials/banner.php'; 
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
                    <a class="breadcrumb:item__link" href="./about.php">About Us</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------
                   MAIN CONTENT START
    ---------------------------------------------->
    <main class="about">
        <div class="center__container">
            <h2 class="about__title">About FTC - Financial Training College</h2>
            <p class="about__peragraph">FTC Education Bangladesh is one of the highly-rated and well-recognized
                education consultancy firms in Sylhet (British Council Listed Education Consultancy). We started our
                journey in
                2014 and now we are one of the leading and fastest-growing education consultancy firms in Bangladesh. We
                have a group of dynamic and experienced management and counselors to help students who want to study
                abroad. We believe that it is our responsibility and duty to help students efficiently, quickly, and
                successfully to help them get into their desired top colleges/ universities and make every aspiring
                student’s dream come true.</p>
        </div>
    </main>


    <?php include 'partials/footer.php'; ?>
    <script src="./js/script.js"></script>
</body>

</html>