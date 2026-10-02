<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $sports_academy_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $sports_academy_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $sports_academy_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>
        <style>
        .list_styles ul {
            list-style: disc !important;
        }

        .list_styles ol {
            list-style: auto !important;
        }
    </style>

    <div class="main relative   mb-[40px] sm:mb-[120px]">
        <div class="bg-center flex items-center text-center h-[300px] 
            bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($sports_academy_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($sports_academy_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ol-overflow">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Facilities
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
                        <a href="sports" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"><?= strip_tags($sports_academy_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">


                <div class="sm:flex gap-10">
                    <div class="sm:w-[40%]">
                        <img src="<?= $sports_academy_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="" class="w-[105%]" alt="Sports">
                    </div>
                    <div class="sm:w-[60%] ">
                        <div class="list_styles">
                        <?= $sports_academy_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                        </div>
                        <!-- <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400]">
                            DPS Unnao, upholds its goal to impart holistic development of each student and lays great
                            emphasis on sports to support the young generation to be educated in every field of
                            instruction and education. We have a gamut of indoor and outdoor sports activities to
                            encourage young sports enthusiasts to pursue their sporting excellence. The school provides
                            its students with various opportunities to build/explore their skills with top class
                            facilities and qualified coaches,who use their knowledge and expertise to bring out the best
                            of the students’ potentials without compromising on their academics.
                        </p>
                        <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5"> The school campus
                            accommodates prodigious sports infrastructure to upskill talented youngsters for varied
                            sports to accomplish their dreams in sports and make them stay active and healthy.
                        </p>

                        <h3 class="text-[20px] font-[600] mt-2">Facilities under Sports Academy</h3>
                        <ul class="sm:ml-5 text-gray-500" style="list-style: disc;">
                            <li class="mb-2 text-[16px] sm:text-[18px] mt-2">Basketball Court</li>
                            <li class="mb-2 text-[16px] sm:text-[18px]">Badminton Court</li>
                            <li class="mb-2 text-[16px] sm:text-[18px]">Enclosed Swimming Pool</li>
                            <li class="mb-2 text-[16px] sm:text-[18px]">Indoor Chess Room</li>


                        </ul> -->

                    </div>
                </div>
            </div>

            <div class="mt-5">

               <div class="list_styles">
                <?= $sports_academy_data['data']['sections'][2]['content'] ?? '' ?>
            </div>

                <!-- <ul class="sm:ml-5 text-gray-500" style="list-style: disc;">
                    <li class="mb-2 text-[16px] sm:text-[18px]">Table Tennis Hall</li>
                    <li class="mb-2 text-[16px] sm:text-[18px]">Two Turf Cricket Pitches</li>
                    <li class="mb-2 text-[16px] sm:text-[18px]">Skating Rink</li>
                    <li class="mb-2 text-[16px] sm:text-[18px]">Football Ground</li>
                </ul>
                <div>

                    <h3 class="text-[20px] font-[600]">Other Sports and Activities</h3>
                    <ul class="sm:ml-5 text-gray-500" style="list-style: disc;">
                        <li class="mb-2 text-[16px] sm:text-[18px] mt-2">Marshall Arts</li>
                        <li class="mb-2 text-[16px] sm:text-[18px]">Yoga</li>
                        <li class="mb-2 text-[16px] sm:text-[18px]">Adventure Sports</li>
                    </ul>

                    <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5"> Among various sports, Athletics
                        too has been added to the sports orbit, coached by the trained professionals who facilitate the
                        participation in all CBSE, Inter DPS, Inter School, District level, Zonal level, State level,
                        National level events and tournaments.</p>
                    <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5"> Professionally qualified sports
                        teachers diligently foster the sporting talent of the students and their overall development
                        which help them become champions in the games of their choice.</p><br>

                    <h3 class="text-[20px] font-[600]">Cricket</h3>
                    <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5">We think that cricket represents
                        more than just a game! It is a lifestyle that imparts discipline, perseverance, and
                        collaboration. At NWSA (NORTHWEST SPORTS ACADEMY), we provide a comprehensive development
                        program aimed at delivering a well-organised and vibrant pathway for our students.</p><br>

                    <h3 class="text-[20px] font-[600]">Football</h3>
                    <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5">At DELHI PUBLIC SCHOOL UNNAO, we
                        aim to encourage students to play this wonderful sport in a positive spirit. Football is open to
                        all ability levels, from beginners to advanced players. It offers children the opportunity to
                        enhance their technical, psychological, and physical skills. Our experienced coaching staff is
                        dedicated to training and guiding students. As the best sports school in Unnao, DELHI PUBLIC
                        SCHOOL UNNAO believes that more experiential learning occurs through sports and games than
                        anywhere else. We constantly inspire our students to actively participate in various games and
                        sports to enhance their overall personalities. DELHI PUBLIC SCHOOL UNNAO is proud to have won
                        numerous Inter-school, District, State, Zonal, and National level competitions.</p><br>

                    <h3 class="text-[20px] font-[600]">Basketball</h3>
                    <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5">At DELHI PUBLIC SCHOOL UNNAO, we
                        believe in nurturing well-rounded individuals. Our commitment to holistic education extends to
                        sports, and one of our proudest offerings is our basketball program. In the tranquil,
                        picturesque surroundings of Unnao, our students not only excel academically but also shine on
                        the basketball court. Join us on a journey to explore the dynamic world of basketball at DELHI
                        PUBLIC SCHOOL UNNAO.</p><br>
                    <h3 class="text-[20px] font-[600]">Table Tennis</h3>
                    <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5">Table Tennis—a sport that
                        demands precision, agility, and lightning-quick reflexes—has found a cherished home at DELHI
                        PUBLIC SCHOOL UNNAO. With a commitment to holistic development and a passion for sports, we
                        offer an exciting journey through the world of table tennis, where students learn not only to
                        master the game but also to cultivate discipline, teamwork, and a healthy competitive spirit.
                    </p><br>
                    <h3 class="text-[20px] font-[600]">Swimming</h3>
                    <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5">Swimming is not just a sport;
                        it’s a life skill, a form of exercise, and a gateway to both personal development and
                        competitive achievement. At DELHI PUBLIC SCHOOL UNNAO, we recognize the multifaceted benefits of
                        swimming and have developed a comprehensive program that caters to students of all levels. Our
                        goal is not only to produce champion swimmers but also to instill a love for water-based
                        activities, promote water safety, and encourage holistic well-being</p><br>
                    <h3 class="text-[20px] font-[600]">Badminton</h3>
                    <p class="sm:text-[18px] text-[16px] text-gray-500 font-[400] mt-5">At DELHI PUBLIC SCHOOL UNNAO, we
                        take pride in fostering a holistic educational environment that values not only academic
                        excellence but also physical fitness and sportsmanship. Among the wide array of sports we offer,
                        badminton stands out as a popular and highly competitive discipline. With its graceful yet
                        dynamic nature, badminton provides numerous physical and mental benefits to our students. We
                        invite you to explore the world of badminton at DELHI PUBLIC SCHOOL UNNAO and discover its
                        significance in our curriculum. </p><br> -->

                </div>
            </div>


        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>