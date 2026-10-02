<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $PP_stage_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $PP_stage_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $PP_stage_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($PP_stage_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($PP_stage_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Foundational Stage
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
                        <a href="pre-primary-stage" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($PP_stage_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $PP_stage_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="" class="w-[100%]">
                </div>
                <div class="md:w-[60%] text-gray-600">
                    <?= $PP_stage_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <p class="text-gray-600 text-[16px]"> Our Pre-Primary curriculum is thoughtfully designed to create
                        a joyful, nurturing, and stimulating
                        environment that builds a strong foundation for lifelong learning. At this crucial stage of
                        development, we focus on the holistic growth of every child — intellectually, socially,
                        emotionally,
                        and physically.</p>

                    <h3 class="text-gray-600 text-[20px] mt-4 font-[700]"> · Core Areas of Learning</h3>
                    <ul class="text-gray-600 text-[16px] mt-2">
                        <li class="font-[700]"> 1. Language and Literacy</li>
                        <li>Ø Introduction to phonics and early vocabulary Storytelling, rhymes, and picture books</li>
                        <li> Ø Listening and speaking skills through interactive activities</li>

                        <li class="font-[700]"> 2. Numeracy</li>
                        <li> Ø Number recognition and counting</li>
                        <li> Ø Basic concepts: shapes, patterns, and sizes</li>
                        <li> Ø Fun math games and puzzles</li>
                    </ul> -->

                </div>
            </div>

            <div class="mt-10 ">
                <?= $PP_stage_data['data']['sections'][2]['content'] ?? '' ?>
                 <!-- <ul class="text-gray-600 text-[16px] mt-2">
                <li class="font-[700]"> 3. Environmental Awareness</li>
                <li> Ø Exploring nature and surroundings</li>
                <li> Ø Understanding community helpers, animals, and seasons</li>
                <li> Ø Sensory and experiential learning</li>

                <li class="font-[700]">4. Creative Expression</li>
                <li>Ø Art and craft using various materials</li>
                <li>Ø Music, movement, and dance</li>
                <li>Ø Dramatic play and role-playing</li>

                <li class="font-[700]">5. Motor Skills Development</li>
                <li>Ø Fine motor activities: colouring, beading, and puzzles</li>
                <li>Ø Gross motor play: running, jumping, balancing</li>
                <li>Ø Yoga and simple exercises</li>

                <li class="font-[700]">6. Life Skills and Social Development</li>
                <li>Ø Manners, sharing, and cooperation</li>
                <li> Ø Basic self-care routines</li>
                <li>Ø Emotional awareness and expression</li>
                </ul>
                <h3 class="text-gray-600 text-[20px] mt-4 font-[700]"> · Teaching Methodology</h3>
                <p class="text-gray-600 text-[16px] mt-2"> We follow a play-based and theme-based learning approach,
                    supported by interactive teaching aids,
                    storytelling, music, and hands-on activities. Learning is child-centered, allowing each child to
                    explore and grow at their own pace.</p>

                <h3 class="text-gray-600 text-[20px] mt-4 font-[700]">· Assessment</h3>
                <p class="text-gray-600 text-[16px] mt-2">Ongoing observational assessments are used to understand
                    each child’s progress, strengths, and areas
                    for support, rather than formal examinations.</p> -->

            </div>


        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>