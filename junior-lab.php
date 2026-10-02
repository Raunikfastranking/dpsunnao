<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $junior_lab_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $junior_lab_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $junior_lab_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($junior_lab_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($junior_lab_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ol-overflow">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Academics
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Facalities
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Laboratories
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="laboratories" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"><?= strip_tags($junior_lab_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
         <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
        <div class="mt-5 mb-10">
            <?= $junior_lab_data['data']['sections'][1]['content'] ?? '' ?>
            <!-- <h3 class="text-gray-600 text-[20px] mt-4 font-[700]">Play Lab</h3>

<p class="text-gray-600 text-[16px] mt-2">Our Play Lab is designed to support holistic development through play-based learning. The lab fosters cognitive, emotional, social, and physical growth by offering age-appropriate toys, games, and activities that encourage exploration, creativity, and problem-solving. By integrating hands-on, experiential learning, the Play Lab ensures children develop critical thinking, motor skills, and emotional intelligence in a safe, nurturing environment, laying a strong foundation for lifelong learning</p>

<h3 class="text-gray-600 text-[20px] mt-4 font-[700]">The Curiosity Lab</h3>
<p class="text-gray-600 text-[16px] mt-2">Effective teaching and learning of Science thrives in an environment of continuous exploration and discovery. The Junior Science Lab, known as The Curiosity Lab, embodies this philosophy by providing students with the opportunity to collaborate and seek answers to their own questions. Here, students gain a deeper understanding of scientific phenomena, with concepts becoming more memorable as
they emerge from personal experiences. 'Learning by Doing' encourages careful observation and analysis of evidence and data, ensuring active student engagement in scientific inquiry. Through their work in the Junior Science Lab, students not only explore scientific concepts but also learn to relate them to real-life situations, fulfilling a key objective of educational pedagogy.</p>
<h3 class="text-gray-600 text-[20px] mt-4 font-[700]">Junior Mathematics Lab</h3>
<p class="text-gray-600 text-[16px] mt-2">Our Junior Mathematics Lab is a vibrant, interactive space where young learners engage with mathematics through hands-on activities. The lab is equipped with educational tools such as the abacus, number charts, puzzles, and interactive models, providing students with the opportunity to explore concepts visually and practically. The use of the abacus enhances mental calculation skills, while the lab’s activities foster logical thinking, problem-solving, and a love for math from an early age.</p> -->

        </div>

    </div>
</div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>