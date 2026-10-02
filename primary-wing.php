<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $primary_wing_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $primary_wing_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $primary_wing_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($primary_wing_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($primary_wing_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Future Ready Skills
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Reading Programme</p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="primary-wing"
                            class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"> <?= strip_tags($primary_wing_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $primary_wing_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <div>
                        <?= $primary_wing_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                        <!-- <p class="text-gray-600">
                            Kids are our future and they deserve to discover the world and the magic it holds.
                            Sometimes, traveling through the world—and even through time and space—is as simple as
                            opening a book. The power of reading can inspire and motivate us all. It can take us to
                            places we've only dreamed of.
                        </p>
                        <p class="mt-4 text-gray-600">
                            At our school, the Reading Programme supports learners from the very beginning—starting with
                            learning letter sounds—all the way to becoming fluent, confident readers. As students grow,
                            they are introduced to books that match their level of phonics understanding and gradually
                            increase in challenge.
                        </p>
                        <p class="mt-4 text-gray-600">Through this program, children get regular opportunities to:</p>
                        <li class="text-gray-600">I Practice reading fluently</li>
                        <li class="text-gray-600">I Improve comprehension and vocabulary</li>
                        <li class="text-gray-600">I Develop confidence in discussing what they read</li>
                        <li class="text-gray-600">I Explore a wide variety of genres and text types</li>
                        <p class="mt-4 text-gray-600">Reading not only builds literacy—it also opens the door to
                            imagination, empathy and creativity.</p> -->
                    </div>
                </div>
            </div>
        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>