<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $NWS_academy_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $NWS_academy_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $NWS_academy_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($NWS_academy_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($NWS_academy_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Future Ready Skills
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
                        <a href="north-west-sports-academy" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($NWS_academy_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $NWS_academy_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <div>
                        <?= $NWS_academy_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                        <!-- <p class="text-[16px] text-gray-600">
                            DPS Unnao, upholds its goal to impart holistic development of each student and lays great
                            emphasis on sports to support the young generation to be educated in every field of
                            instruction and education. We have a gamut of indoor and outdoor sports activities to
                            encourage young sports enthusiasts to pursue their sporting excellence. The school provides
                            its students with various opportunities to build/explore their skills with top class
                            facilities and qualified coaches,who use their knowledge and expertise to bring out the best
                            of the students’ potentials without compromising on their academics.
                        </p>
                        <p class="text-[16px] text-gray-600">
                            The school campus accommodates prodigious sports infrastructure to upskill talented
                            youngsters for varied sports to accomplish their dreams in sports and make them stay active
                            and healthy.
                        </p>
                        <h3 class="text-[18px] font-[700] text-gray-700 mt-5">Facilities under Sports Academy</h3>
                        <ul class="list-disc sm:ml-6 mt-2 space-y-1 text-gray-600">
                            <li>Basketball Court</li>
                            <li> Badminton Court</li>
                            <li> Enclosed Swimming Pool</li>
                            <li> Indoor Chess Room</li>
                            <li>Table Tennis Hall</li>
                            <li> Two Turf Cricket Pitches</li>
                            <li>Skating Rink</li>
                            <li> Football Ground</li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <?= $NWS_academy_data['data']['sections'][2]['content'] ?? '' ?>
                <!-- <h3 class="text-[18px] font-[700] text-gray-700 mt-5">Other Sports and Activities</h3>
                <ul class="list-disc sm:ml-6 mt-2 space-y-1 text-gray-600">
                    <li>Marshall Arts</li>
                    <li> Yoga</li>
                    <li> Adventure Sports</li>
                </ul>

                <p class="text-[16px] text-gray-600 mt-3">Among various sports, Athletics too has been added to the
                    sports orbit, coached by the trained professionals who facilitate the participation in all CBSE,
                    Inter DPS, Inter School, District level, Zonal level, State level, National level events and
                    tournaments.</p>
                <p class="text-[16px] text-gray-600 mt-3">Professionally qualified sports teachers diligently foster the
                    sporting talent of the students and their overall development which help them become champions in
                    the games of their choice.</p> -->

            </div>

        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>