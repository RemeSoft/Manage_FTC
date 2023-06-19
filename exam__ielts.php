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
        $banner__class = "exam__banner";
        $banner__title = "IELTS EXAM";
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
                    <a class="breadcrumb:item__link" href="/exam__ielts.php">IELTS</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------
                   MAIN CONTENT START
    ---------------------------------------------->
    <main class="about">
        <div class="center__container">
                <p class="about__peragraph">The IELTS (International English Language Testing System) exam is a widely
                recognized English proficiency test that assesses the language skills of non-native English speakers. It
                is commonly used for immigration, study, and work purposes in English-speaking countries. While I can
                provide general information about the IELTS exam, please note that specific requirements and details may
                vary, so it's best to refer to the official IELTS website or consult with the institution or
                organization where you plan to submit your test results for the most accurate and up-to-date
                information.</p>


                <div class="about__ftc">
                    <div class="ftc__support">
                        <p class="about__peragraph"><b> IELTS accepted universities:</b></p>
                        <ul class="about__list exam--support">
                            <li class="about:list__item"><a href="https://www.westminster.ac.uk/">University of Westminster</a></li>
                            <li class="about:list__item"><a href="https://www.cam.ac.uk/">University of Cambridge</a></li>
                            <li class="about:list__item"><a href="https://www.ox.ac.uk/">University of Oxford</a></li>
                            <li class="about:list__item"><a href="https://www.ucl.ac.uk/">University College London</a></li>
                            <li class="about:list__item"><a href="https://www.imperial.ac.uk/">Imperial College London</a></li>
                            <li class="about:list__item"><a href="https://www.kcl.ac.uk/">King's College London</a></li>
                            <li class="about:list__item"><a href="https://www.ed.ac.uk/">University of Edinburgh</a></li>
                            <li class="about:list__item"><a href="https://www.manchester.ac.uk/">University of Manchester</a></li>
                            <li class="about:list__item"><a href="https://www.lse.ac.uk/">London School of Economics and Political Science</a></li>
                            <li class="about:list__item"><a href="https://www.uclan.ac.uk/">University of Central Lancashire</a></li>
                        </ul>
                    </div>
                    <div class="ftc__support__img">
                        <img src="img/exam/IELTS.png" alt="">
                    </div>
                </div>

                <p class="about__peragraph"><b>The IELTS exam consists of four main components:</b></p>

                <ul class="about__list" style="list-style-type:decimal;">
                    <li class="about:list__item">
                        Listening: This section evaluates your ability to understand spoken English in various contexts,
                        such as conversations, lectures, or interviews. You will answer questions based on the audio
                        recordings you listen to during the test.
                    </li>
                    <li class="about:list__item">
                        Reading: The reading section assesses your reading comprehension skills. You will be presented with
                        a variety of texts, including articles, passages, and essays, and you will answer questions to
                        demonstrate your understanding of the information presented.
                    </li>
                    <li class="about:list__item">
                        Writing: In the writing section, you will have tasks that assess your ability to write in an
                        academic or general context. For the Academic IELTS, you may need to write an essay or a report
                        based on a given topic. For the General Training IELTS, you may be required to write a letter or
                        respond to a situation.
                    </li>
                    <li class="about:list__item">
                        Speaking: The speaking section is a face-to-face interview designed to assess your spoken English
                        skills. It consists of a conversation with an examiner, where you will discuss a range of topics and
                        demonstrate your ability to communicate effectively.
                    </li>
                </ul>

                <p class="about__peragraph">Each section of the IELTS exam is scored individually, and the overall score is
                    usually reported on a 9-band scale. The scores are used to determine your English language proficiency
                    level.</p>
                <p class="about__peragraph">It's important to note that there may be specific score requirements for
                    different institutions, organizations, or visa applications. The score requirements can vary depending
                    on the purpose of taking the test, such as immigration, academic study, or professional certification.
                    Therefore, it is recommended to check the specific requirements of the institution or organization where
                    you plan to use your IELTS scores.</p>
        </div>

    </main>

    <!-- REQUIRE FOOTER  -->
    <?php include 'partials/footer.php'; ?>
    <script src="./js/script.js"></script>
</body>

</html>