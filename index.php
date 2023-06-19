
<?php
    require 'db/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT FTC - FENANTIAL TRANING COLLEGE</title>
    <script src="https://unpkg.com/vanilla-counter"></script>
    <link rel="stylesheet" href="css/vandor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vandor/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- REQUIRE HEADER  -->
    <?php include 'partials/header.php'; ?>

    <!-- ----------------------------------------
                 CARUSAL SECTION START
    ----------------------------------------------->
    <section class="hero">
        <div class="center__container">
            <div class="hero__content">
                <h1 class="hero__heading">We Help to <span class="hero__heading--highlight">Build</span> <br> Your
                    Dream.</h1>
                <p class="hero__desc">We are always availed to consult on taking your higher education to the next
                    level so you can stay
                    competitive in the global world.</p>

                <div class="hero__avater">
                    <img src="./img/student/student.png" alt="">
                </div>
                <div class="hero:avater__bg">
                </div>

                <a class="hero__button" href="./contact.php">Contact Us <i class="fa-solid fa-arrow-right"></i></a>

                <div class="hero__links">
                    <a class="hero:link__icon" href="https://www.facebook.com/official.ftcbd"><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="hero:link__icon" href=""><i class="fa-brands fa-instagram"></i></a>
                    <a class="hero:link__icon" href=""><i class="fa-brands fa-twitter"></i></a>
                </div>

            </div>
        </div>
    </section>

    <!-- ----------------------------------------
                 WELCOME SECTION START
    ----------------------------------------------->
    <section class="welcome highlight__section">
        <div class="center__container">
            <div class="welcome__content">
                <h1 class="welcome__title">WELCOME TO FTC - STUDY ABROAD</h1>
                <p class="welcome__description">We Are A Professional Consulting Firm, Dedicated To Providing Best
                    Solutions
                    To
                    Students Seeking For Education In International Educational Institutions. We Believe That Education
                    Is A
                    Fundamental Right And Everyone Should Have Access To Quality Higher Education. With This View In
                    Mind,
                    We Strive To Create Opportunities For Students.</p>
            </div>

        </div>
    </section>

    <!-- ------------------------------------------------
            CHOOSE COUNTRY MARKDOWN START  
    ---------------------------------------------->
    <section class="country">
        <div class="center__container">
            <div class="section__header">
                <h2 class="header__title">Choose Your Country</h2>
            </div>
            <div class="country:card__holder">
                <div class="country:card">
                    <a class="country:card__link" href="./study_in_uk.php">
                        <div class="country:card__flag">
                            <img src="./img/flag/icon/uk.png" alt="">
                        </div>
                        <div class="country:card__content">
                            <h3 class="country:card__title">Study in UK</h3>
                            <p class="country:card__desc">Studying in the USA can be a great opportunity for students
                                seeking a high-quality education, diverse cultural experiences, and career opportunities
                                ...</p>
                            <button class="country:card__readmore">Read More <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </a>
                </div>
                <div class="country:card">
                    <a class="country:card__link" href="./study_in_usa.php">
                        <div class="country:card__flag">
                            <img src="./img/flag/icon/usa.png" alt="">
                        </div>
                        <div class="country:card__content">
                            <h3 class="country:card__title">Study in USA</h3>
                            <p class="country:card__desc">Studying in the USA can be a great opportunity for students
                                seeking a high-quality education, diverse cultural experiences, and career opportunities
                                ...</p>
                            <button class="country:card__readmore">Read More <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </a>
                </div>
                <div class="country:card">
                    <a class="country:card__link" href="./study_in_danmark.php">
                        <div class="country:card__flag">
                            <img src="./img/flag/icon/denmark.png" alt="">
                        </div>
                        <div class="country:card__content">
                            <h3 class="country:card__title">Study in DENMARK</h3>
                            <p class="country:card__desc">Studying in the DENMARK can be a great opportunity for
                                students seeking a high-quality education, diverse cultural experiences, and career
                                opportunities ...</p>
                            <button class="country:card__readmore">Read More <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </a>
                </div>
                <div class="country:card">
                    <a class="country:card__link" href="./study_in_australia.php">
                        <div class="country:card__flag">
                            <img src="./img/flag/icon/canada.png" alt="">
                        </div>
                        <div class="country:card__content">
                            <h3 class="country:card__title">Study in Canada</h3>
                            <p class="country:card__desc">Canada is also known for its welcoming and friendly culture,
                                making it an ideal destination for international students....
                            </p>
                            <button class="country:card__readmore">Read More <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </a>
                </div>
                <div class="country:card">
                    <a class="country:card__link" href="/study_in_australia.php">
                        <div class="country:card__flag">
                            <img src="./img/flag/icon/australia.png" alt="">
                        </div>
                        <div class="country:card__content">
                            <h3 class="country:card__title">Study in Australia</h3>
                            <p class="country:card__desc">Australia is a multicultural country, with people from all
                                over the world living and studying together. International students can experience......
                            </p>
                            <button class="country:card__readmore">Read More <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </a>
                </div>
                <div class="country:card">
                    <a class="country:card__link" href="/study_in_others.php">
                        <div class="country:card__flag">
                            <img src="./img/flag/icon/others.png" alt="">
                        </div>
                        <div class="country:card__content">
                            <h3 class="country:card__title">Other Visa Services</h3>
                            <p class="country:card__desc">FTC Education Consultants also processes student
                                dependent/spouse visa, family visit visa and others......</p>
                            <button class="country:card__readmore">Read More <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ------------------------------------------------
            BENIFIT SECTION START  
    ---------------------------------------------->
    <section class="benefit highlight__section">
        <div class="center__container">
            <div class="section__header">
                <h2 class="header__title">Why Choose FTC</h2>
            </div>

            <div class="benefit:card__holder">
                <div class="benefit:card">
                    <div class="benefit:card__header">
                        <img class="benefit:header__image" src="./img/benefit/01.jpeg" alt="">
                    </div>
                    <div class="benefit:card__content">
                        <div class="benefit:card__icon"><i class="fa-solid fa-gear"></i></div>
                        <h3 class="benefit:card__title">EXPERIENCE</h3>
                        <p class="benefit:card__desc">
                            Experience - all that matters! Having more than 10+ years of experience in education
                            consultancy.
                        </p>
                    </div>
                </div>

                <div class="benefit:card">
                    <div class="benefit:card__header">
                        <img class="benefit:header__image" src="./img/benefit/02.jpg" alt="">
                    </div>
                    <div class="benefit:card__content">
                        <div class="benefit:card__icon"><i class="fa-solid fa-heart"></i></div>
                        <h3 class="benefit:card__title">HONESTY</h3>
                        <p class="benefit:card__desc">
                            We offer impartial, straight forward advice and we do not promise more than we can
                            deliver.
                        </p>
                    </div>
                </div>
                <div class="benefit:card">
                    <div class="benefit:card__header">
                        <img class="benefit:header__image" src="./img/benefit/03.jpeg" alt="">
                    </div>
                    <div class="benefit:card__content">
                        <div class="benefit:card__icon"><i class="fa-solid fa-circle-check"></i></div>
                        <h3 class="benefit:card__title">RELIABILITY</h3>
                        <p class="benefit:card__desc">
                            We do what we say we will do when we say we will do it. We communicate regularly and
                            clearly with our customers.
                        </p>
                    </div>
                </div>
                <div class="benefit:card">
                    <div class="benefit:card__header">
                        <img class="benefit:header__image" src="./img/benefit/04.jpg" alt="">
                    </div>
                    <div class="benefit:card__content">
                        <div class="benefit:card__icon"><i class="fa-solid fa-heart"></i></div>
                        <h3 class="benefit:card__title">LONG TERM RELATIONSHIP</h3>
                        <p class="benefit:card__desc">
                            Business is our signature! At FTC, we are committed to provide much more than excellent
                            education consultancy with us.
                        </p>
                    </div>
                </div>
                <div class="benefit:card">
                    <div class="benefit:card__header">
                        <img class="benefit:header__image" src="./img/benefit/05.jpg" alt="">
                    </div>
                    <div class="benefit:card__content">
                        <div class="benefit:card__icon"><i class="fa-sharp fa-solid fa-shield-halved"></i></div>
                        <h3 class="benefit:card__title">FREE VISA FILING</h3>
                        <p class="benefit:card__desc">
                            ...
                        </p>
                    </div>
                </div>
                <div class="benefit:card">
                    <div class="benefit:card__header">
                        <img class="benefit:header__image" src="./img/benefit/06.png" alt="">
                    </div>
                    <div class="benefit:card__content">
                        <div class="benefit:card__icon"><i class="fa-solid fa-arrow-down-a-z"></i></div>
                        <h3 class="benefit:card__title">A TO Z VISA SUPPORT</h3>
                        <p class="benefit:card__desc">
                            ...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ------------------------------------------------
            ACHIVEMENT SECTION START  
    ---------------------------------------------->
    <section class="achivement">
        <div class="center__container">
            <div class="achivement__content">
                <div class="achivement:item">
                    <div class="achivement:item__icon">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="achivement:item__text">
                        <h4 class="acrivement:number">
                            <span data-vanilla-counter data-start-at="0" data-end-at="12" data-time="1000"
                                data-delay="0" data-format="{}+"></span>
                        </h4>
                        <p class="achivement:desc">Years of Exprience</p>
                    </div>
                </div>
                <div class="achivement:item">
                    <div class="achivement:item__icon">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <div class="achivement:item__text">
                        <h4 class="acrivement:number">
                            <span data-vanilla-counter data-start-at="0" data-end-at="20" data-time="1000"
                                data-delay="0" data-format="{}+">
                        </h4>
                        <p class="achivement:desc">Countries</p>
                    </div>
                </div>
                <div class="achivement:item">
                    <div class="achivement:item__icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="achivement:item__text">
                        <h4 class="acrivement:number"><span data-vanilla-counter data-start-at="0" data-end-at="500"
                                data-time="1000" data-delay="0" data-format="{}+"></h4>
                        <p class="achivement:desc">Univeristys</p>
                    </div>
                </div>
                <div class="achivement:item">
                    <div class="achivement:item__icon">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div class="achivement:item__text">
                        <h4 class="acrivement:number"><span data-vanilla-counter data-start-at="0" data-end-at="200"
                                data-time="1000" data-delay="0" data-format="{}+"></h4>
                        <p class="achivement:desc">Success Story</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ------------------------------------------------
           SECCESS SECTION START
    ---------------------------------------------->
    <section class="testimonial highlight__section">
        <div class="center__container">
            <div class="testimonial__content">
                <div class="testimonial:left">
                    <h2 class="testimonial__heading">Congratulations on <br> Your Visa Success!!</h2>
                    <p class="testimonial__desc">
                        Celebrate your triumph! Congratulations on visa approval. Your hard work paid off, unlocking new
                        opportunities. Embrace this achievement and embark on your exciting journey.</p>
                </div>
                <div class="testimonial:right">
                    <div class="testimonial__sliders">
                        <button class="owl__button owl__next success__next"><i
                                class="fa-solid fa-chevron-left"></i></button>
                        <button class="owl__button owl__previous success__previous"><i
                                class="fa-solid fa-chevron-right"></i></button>
                        <div class="owl-five owl-carousel owl-theme">
                            <?php 
                                $sql = "SELECT * FROM student LIMIT 10";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <img src="./img/success/<?=$row['image']?>" alt="">
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
    </section>


    <!-- ------------------------------------------------
            OUR TEAM SECTION START  
    ---------------------------------------------->
    <section class="ourteam">
        <div class="center__container">
            <div class="ourteam__content">
                <div class="section__header">
                    <h2 class="header__title">Meet Our Team</h2>
                </div>
                <!-- Set up your HTML -->
                <div class="ourteam:member__holder">
                    <button class="owl__button owl__next team__next"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="owl__button owl__previous team__previous"><i
                            class="fa-solid fa-chevron-right"></i></button>
                    <div id="" class="owl-two owl-carousel owl-theme">

                        <?php 
                            $sql = "SELECT * FROM staffs LIMIT 10";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="ourteam:card">
                                <img class="ourteam:card__image" src="./img/team/<?=$row['image']?>" alt="">
                                <div class="outteam:card__content">
                                    <h4 class="outteam:member"><?=$row['name']?></h4>
                                    <p class="ourteam:position"><?=$row['position']?></p>
                                    <small>Phone: <?=$row['mobile']?></small>
                                </div>
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
    </section>

    <!-- ------------------------------------------------
            EVENT SECTION START  
    ---------------------------------------------->
    <section class="event highlight__section">
        <div class="center__container">
            <div class="event__content">
                <div class="section__header">
                    <h2 class="header__title no__devider">Event and University Visits</h2>
                </div>
                <!-- Set up your HTML -->
                <div class="event__slider">
                    <button class="owl__button owl__next owl__next__event"><i
                            class="fa-solid fa-chevron-left"></i></button>
                    <button class="owl__button owl__previous owl__previous__event"><i
                            class="fa-solid fa-chevron-right"></i></button>
                    <div class="owl-three owl-carousel owl-theme">
                        <?php 
                            $sql = "SELECT * FROM `event` LIMIT 10";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <a class="event__link" href="">
                                <img class="event__image" src="./img/event/<?=$row['image']?>" alt="">
                            </a>
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
    </section>

    <!-- ------------------------------------------------
            UNIVERSITY SECTION START  
    ---------------------------------------------->
    <section class="university">
        <div class="center__container">
            <div class="university__content">
                <!-- Set up your HTML -->
                <div class="event__slider">
                    <div class="owl-four owl-carousel owl-theme">
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/01.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/02.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/03.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/04.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/05.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/07.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/03.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/05.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/02.png" alt="">
                        </div>
                        <div class="university__logo">
                            <img src="./img/universitys/university__logo/05.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- REQUIRE FOOTER  -->
    <?php include 'partials/footer.php'; ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./js/vandor/owl.carousel.min.js"></script>
    <script src="./js/swiper.js"></script>
    <script src="./js/script.js"></script>
    <script>

    </script>
</body>

</html>