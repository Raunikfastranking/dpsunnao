<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $smart_classroom_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $smart_classroom_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $smart_classroom_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div   class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($smart_classroom_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($smart_classroom_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Academics
                        </p>
                    </div>
                </li>
                  <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Facalities
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="smart-classrooms" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"><?= strip_tags($smart_classroom_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="sm:flex gap-10  mt-16">
                <div class="sm:w-[50%] sm:block hidden">
                    <img src="<?= $smart_classroom_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="">
                </div>
                <div class="mx-3  sm:w-[50%]">
                    <?= $smart_classroom_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                        <!-- <p class="text-[16px] text-gray-600 leading-8">
                          Our Smart Classrooms feature state-of-the-art interactive panels that transform traditional lessons into dynamic, engaging experiences. These panels support multimedia content, real-time collaboration, and interactive learning, making education more effective, immersive, and student-centered. With seamless integration of digital tools, teachers can deliver complex concepts with clarity, while students stay actively involved and better connected to the subject matter.
                        </p> -->
                </div>
            </div>
        </div>

        <!-- <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div>
                <p class="text-[17px] text-gray-600 mt-1">
                    <span class="text-blue-main text-[20px] font-[600]">Smart Classrooms :</span> <br>
                    we believe that the future of education lies in embracing innovation. Our smart classrooms are a testament to our commitment to providing 21st century learning experiences that engages, inspires and empowers every student. This tool allows teachers to incorporate multimedia content and live resources to make lessons more dynamic and memorable.
                </p>
            </div>
        </div> -->


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
   
</body>

</html>