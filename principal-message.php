<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $principal_msg_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $principal_msg_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $principal_msg_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($principal_msg_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($principal_msg_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="principal-message" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($principal_msg_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div class="mt-8 mb-16 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto px-3 ">
            <!-- <div class="flex justify-center">
                <img src="https://res.cloudinary.com/dvzfuapyy/image/upload/v1730305735/Layer_1_fjuspj.png" alt="">
            </div> -->
            <div class="mt-10 relative">

                <div class="sm:flex gap-10">
                    <div class="sm:w-[50%]">
                        <?= $principal_msg_data['data']['sections'][1]['columns'][0]['content'] ?? '' ?>
                        <!-- <p class="text-[18px] sm:text-left text-center text-gray-600 mt-3">
                            Greetings 
                        </p>
                        <p class="text-[18px] sm:text-left text-center text-gray-600 mt-3">
                            Welcome to our website- a gateway to the lively world of DPS, Unnao, where we transform our students into competent individuals.
                        </p>
                        <p class="text-[18px] sm:text-left text-center text-gray-600 mt-3">In this quest, we firmly believe that each child has strengths that are unique, and our role as facilitators is to make every child realise their potential. We bring them varied practical experiences, a myriad of choices and learning that goes beyond textbooks. Our approach encompasses overall personality development, as the real world requires more than just grades.</p>
<p class="text-[18px] sm:text-left text-center text-gray-600 mt-3">We offer top-notch facilities that foster an ideal and supportive educational atmosphere for our learners. The current students are the architects of the nation and the promise of the future. We concentrate on motivating them and cultivating a passion for learning. We create an inclusive atmosphere that encourages curiosity, independence, and critical thinking. It is the unwavering dedication of our educators to fostering every child's potential that has enabled our alumni to achieve top rankings in competitive exams, universities, and job placements.</p> -->
                    </div>
                    <div class="sm:w-[50%] mt-4">
                        <img src="<?= $principal_msg_data['data']['sections'][1]['columns'][1]['image_path'] ?? '' ?>" class="border-[1px] border-gray-100" alt=""
                            class="sm:w-auto w-[100%]">
                        <div class="mt-1">
                            <?= $principal_msg_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                            <!-- <h2 class="font-[600]">Niti Khanna</h2>
                            <span class="text-[14px] text-gray-600">Principal</span> -->
                        </div>
                    </div>

                </div>
                <?= $principal_msg_data['data']['sections'][2]['content'] ?? '' ?>
                <!-- <p class="text-[18px] sm:text-left text-center text-gray-600 mt-3">
                    Through collaboration and a common goal, we eagerly anticipate equipping each child for a future brimming with opportunities and achievements!
                </p>
                <p class="text-[18px] sm:text-left text-center text-gray-600 mt-3">
                   To our learners—think big, set ambitious goals, and put in the effort. To our parents—your support and engagement are irreplaceable!
                </p>
                <p class="text-[18px] sm:text-left text-center text-gray-600 mt-3">
                    Best wishes
                </p> -->
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>