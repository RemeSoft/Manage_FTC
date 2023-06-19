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

    <!-- ---------------------------------------
                    BANNER START
        -------------------------------------->
    <section class="map">
        <iframe class="map__loader"
            src="https://maps.google.com/maps?q=FTC - Study Abroad, Sylhet&t=&z=17&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </section>

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
                    <a class="breadcrumb:item__link" href="/contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------
                   MAIN CONTENT START
    ---------------------------------------------->
    <main class="about">
        <div class="center__container">
            <p class="about__peragraph">We are an official representative of more than 120+ universities in the UK. Our
                highly experienced team can handle all university admission-related activities. We provide free and
                unbiased advice to our students.</p>
            <p class="about__peragraph"><b>Here is a list of a few top UK universities popular among the international
                    students for foundation and postgraduate course:</b></p>

        </div>

        <div class="about__contact">
            <div class="center__container">
                <div class="contact__boxes">
                    <div class="boxes__box">
                        <i class="box__icon fa-solid fa-phone"></i>
                        <div class="box__content">
                            <h4 class="box__title">Mobile Number</h4>
                            <p class="box__info">+880 1318221536</p>
                        </div>
                    </div>
                    <div class="boxes__box">
                        <i class="box__icon fa-solid fa-envelope"></i>
                        <div class="box__content">
                            <h4 class="box__title">Email</h4>
                            <p class="box__info">admission.ftcbd@gmail.com</p>
                        </div>
                    </div>
                    <div class="boxes__box">
                        <i class="box__icon fa-solid fa-location-dot"></i>
                        <div class="box__content">
                            <h4 class="box__title">Address</h4>
                            <p class="box__info">Galleria Shopping Complex ( 7th floor )</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- REQUIRE FOOTER  -->
    <?php include 'partials/footer.php'; ?>
    <script src="./js/script.js"></script>
</body>

</html>