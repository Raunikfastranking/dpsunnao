<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $secondary_stage_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $secondary_stage_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $secondary_stage_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($secondary_stage_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($secondary_stage_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ol-overflow">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-blue-main">
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Overview
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Pedagogy
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
                        <a href="secondary-stage" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($secondary_stage_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $secondary_stage_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <?= $secondary_stage_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <p class="text-gray-600 text-[16px]">
                        With senior classes comes more responsibilities. At DPS, we ensure that every student of class
                        IX and above is empowered with innovative teaching practices. We guide them to become active,
                        self-motivated learners.</p>


                       <p class="text-gray-600 text-[16px]"> 1. <strong>Experiential Learning:</strong> With difficult concepts comes the challenge to understand them better.
                        We offer hands-on experiences that make learning practical and meaningful.</p>


                       <p class="text-gray-600 text-[16px]"> 2. <strong>Blended Learning:</strong> We combine traditional and digital methods to ensure a flexible, modern,
                        and engaging approach to learning.</p>


                       <p class="text-gray-600 text-[16px]"> 3. <strong>Collaborative Learning:</strong> Our students engage in peer interactions and teamwork. Thus, they
                        build essential social and communication skills.</p>


                       <p class="text-gray-600 text-[16px]"> 4. <strong>In-demand Skills and Entrepreneurship:</strong> We cultivate confidence and skills in our students so
                        that tomorrow they innovate new things and meet the demands of the world.</p>
                       <p class="text-gray-600 text-[16px]"> 5. <strong>Differentiated Instruction</strong>: We tailor teaching methods to meet the diverse learning needs of
                        students.</p> -->

                       

                    </p>
                </div>
            </div>

            <div class="mt-10">
                <?= $secondary_stage_data['data']['sections'][2]['content'] ?? '' ?>
                 <!-- <p class="text-gray-600 text-[16px]">6. <strong>Culturally Responsive Teaching (CRT):</strong> We integrate students' diverse cultural backgrounds
                        into the learning process. Thus, we promote inclusivity and respect for diversity.</p>

                        <p class="text-gray-600 text-[16px]">7. <strong>Scaffolding Difficult Concepts:</strong> Provides support and gradual release of responsibility to
                        help students grasp challenging concepts.</p> -->
            </div>

        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>