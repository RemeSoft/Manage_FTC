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
        $banner__title = "OIETC EXAM";
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
                    <a class="breadcrumb:item__link" href="/exam__oiect.php">OIETC</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------
                   MAIN CONTENT START
    ---------------------------------------------->
    <main class="about">
        <div class="center__container">
            <p class="about__peragraph">The OIECT (OpenAI International English Certification Test) is an exam developed
                by OpenAI to assess proficiency in the English language. As an AI language model, I can provide general
                guidance on what might be expected for an English certification exam, but please note that the specific
                requirements and content of the OIECT exam may vary. It is recommended to refer to the official OIECT
                guidelines and resources for accurate and up-to-date information.</p>



            <div class="about__ftc">
                <div class="ftc__support">
                    <h3 class="about__title--md"><b>FTC: Your Partner for OIECT Exam <br>Preparation and Support</b>
                    </h3>
                    <ul class="about__list small-gap">
                        <li class="about:list__item">Class taken by Experts</li>
                        <li class="about:list__item">Course Exam</li>
                        <li class="about:list__item">Exam Center</li>
                        <li class="about:list__item">MOCK Tests</li>
                        <li class="about:list__item">Guaranteed score</li>
                        <li class="about:list__item">Expert assistance available</li>
                    </ul>
                    <p class="about__peragraph"><b>OIETC accepted universities:</b></p>
                    <ul class="about__list exam--support">
                        <li class="about:list__item"><a href="https://www.bangor.ac.uk/">Bangor University</a></li>
                        <li class="about:list__item"><a href="https://www.bcu.ac.uk/">Birmingham City University</a>
                        </li>
                        <li class="about:list__item"><a href="https://www.dmu.ac.uk/">De Montfort University</a></li>
                        <li class="about:list__item"><a href="https://www.lsbu.ac.uk/">London South Bank University</a>
                        </li>
                        <li class="about:list__item"><a href="https://www.rgu.ac.uk/">Robert Gordon University</a></li>
                        <li class="about:list__item"><a href="https://www.staffs.ac.uk/">Staffordshire University</a>
                        </li>
                        <li class="about:list__item"><a href="https://www.birmingham.ac.uk/">The University of
                                Birmingham</a></li>
                        <li class="about:list__item"><a href="https://www.chester.ac.uk/">The University of Chester</a>
                        </li>
                        <li class="about:list__item"><a href="https://www.herts.ac.uk/">The University of
                                Hertfordshire</a></li>
                        <li class="about:list__item"><a href="https://www.leeds.ac.uk/">The University of Leeds</a></li>
                        <li class="about:list__item"><a href="https://www.westminster.ac.uk/">The University of
                                Westminster</a></li>
                        <li class="about:list__item"><a href="https://www.canterbury.ac.uk/">Canterbury Christ Church
                                University</a></li>

                    </ul>
                </div>
                <div class="ftc__support__img">
                    <img src="img/exam/oietc.jpg" alt="">
                </div>
            </div>
            <p class="about__peragraph"><b>Generally, for an English certification exam like OIECT, the following areas
                    of proficiency may be evaluated:</b></p>

            <ul class="about__list" style="list-style-type:decimal;">
                <li class="about:list__item">
                    Reading Comprehension: This section assesses your ability to understand and interpret written
                    passages, articles, or texts. It may involve answering multiple-choice questions, identifying main
                    ideas, drawing inferences, and demonstrating comprehension skills.
                </li>
                <li class="about:list__item">
                    Listening Comprehension: This section tests your ability to understand spoken English. You may be
                    required to listen to
                    conversations, lectures, or recordings and answer questions based on the information provided.
                </li>
                <li class="about:list__item">
                    Vocabulary and Grammar: Expect questions that assess your knowledge and proper usage of English
                    vocabulary, idiomatic expressions, phrasal verbs, grammar rules, sentence structure, and word
                    choice.
                </li>
                <li class="about:list__item">
                    Writing Skills: This section evaluates your ability to express yourself effectively in written
                    English. You may be asked to write essays, summaries, letters, or reports, demonstrating proper
                    organization, coherence, clarity, and grammar usage.
                </li>
                <li class="about:list__item">
                    Speaking Skills: Some English certification exams, including the OIECT, may include a speaking
                    component. This can involve recorded or live interviews, presentations, or conversations, where you
                    will be assessed on your pronunciation, fluency, vocabulary usage, and ability to communicate ideas
                    effectively.
                </li>
            </ul>

            <p class="about__peragraph">It's important to note that the OIECT exam may have its own specific format,
                timing, scoring criteria,
                and requirements. Therefore, for accurate and detailed information, it is recommended to refer to
                official OIECT documentation and resources provided by OpenAI.</p>
        </div>
    </main>

    <!-- REQUIRE FOOTER  -->
    <?php include 'partials/footer.php'; ?>
    <script src="./js/script.js"></script>
</body>

</html>