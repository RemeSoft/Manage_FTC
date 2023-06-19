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
        $banner__title = "Our Services";
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
                    <a class="breadcrumb:item__link" href="/services.php">Our Services</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------
                   MAIN CONTENT START
    ---------------------------------------------->
    <main class="about">
        <div class="center__container">
            <p class="about__peragraph">FTC Education Bangladesh is one of the highly-rated and well-recognized
            education consultancy firms in Sylhet (British Council Listed Education Consultancy). We started our
            journey in
            2014 and now we are one of the leading and fastest-growing education consultancy firms in Bangladesh. We
            have a group of dynamic and experienced management and counselors to help students who want to study
            abroad. We believe that it is our responsibility and duty to help students efficiently, quickly, and
            successfully to help them get into their desired top colleges/ universities and make every aspiring
            student’s dream come true.</p>

            <h3 class="about__title--md">Why FTC Services ?</h3>
            <ul class="about:list" style="margin-left:3rem">
                <li class="about:list__item">Admission in 100+ Universities in 18 countries.</li>
                <li class="about:list__item">Choosing the Right University/Course/Country.</li>
                <li class="about:list__item">Application and Documentation Help.</li>
                <li class="about:list__item">Free Mock Interviews.</li>
                <li class="about:list__item">Accommodation Support.</li>
                <li class="about:list__item">Arrival Support.</li>
                <li class="about:list__item">Bank Loan / Scholarship Support.</li>
                <li class="about:list__item">IELTS/TOEFL/DUOLINGO Free Training.</li>
                <li class="about:list__item">Free Visa Filing.</li>
                <li class="about:list__item">No Service Charge.</li>
                <li class="about:list__item">A to Z Visa Support.</li>
            </ul>
        </div>
    </main>




    <!-- REQUIRE FOOTER  -->
    <?php include 'partials/footer.php'; ?>
    <script src="./js/script.js"></script>
</body>

</html>