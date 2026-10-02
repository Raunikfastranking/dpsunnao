<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $DPS_unnao_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $DPS_unnao_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $DPS_unnao_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($DPS_unnao_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($DPS_unnao_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">About Us
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
                        <a href="dps-history" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($DPS_unnao_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px]  md:w-[767px] sm:w-[640px] sm:mx-auto px-3 mb-16">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $DPS_unnao_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <?= $DPS_unnao_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <p class="text-[16px] text-gray-600">
                        Delhi Public School, Unnao, is a co-educational CBSE school offering excellence in education. A
                        very affordable fee structure allows smart education to the masses. Located at the quiet
                        juncture of Kanpur and Unnao, it extends its span to the children of Kanpur and Unnao, away from
                        the city life disturbance, in a serene atmosphere.

                        <br><br> Inaugurated on 7th April 2019 by Mrs Shahina Amin, the Vice-Chairperson of the
                        Superhouse Education Foundation, the school boasts the best academics and various co-curricular
                        activities. We are privileged to be led by an exemplary educationist and a visionary, Mr
                        Mukhtarul Amin, the Pro-Vice Chairman of the Super House Group.

                        <br><br> Delhi Public School, Unnao, provides spacious study space for PG to Class IX learners.
                        The specially equipped classrooms offer a great attraction to the little learners. We have a
                        highly supportive and productive staff that caters to each child as the school plans to bring
                        forth the individual capabilities of children. The multiple-activity schedule provides a
                        plethora of opportunities to its scholars.
                    </p>
                    <br>
                    <p class="text-gray-600">
                        Keeping in tune with our mission ‘Service Before Self”, we aim to proceed and flourish to forge
                        ahead with a lot of hope and active participation from all our stakeholders.

                    </p> -->
                </div>
            </div>

        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>