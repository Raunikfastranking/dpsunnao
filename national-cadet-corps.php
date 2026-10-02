<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $NCC_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $NCC_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $NCC_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($NCC_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($NCC_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="national-cadet-corps" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($NCC_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $NCC_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="NCC at DPS Unnao" class="w-full">
                </div>
                <div class="md:w-[60%]">
                    <?= $NCC_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <p class="mt-2 text-gray-600">The National Cadet Corps (NCC) was established in 1948 based on the
                        recommendations of the H. N. Kunzru Committee (1946). It is a voluntary organisation open to
                        school and college students. The cadets receive basic military training. In fact, NCC is the
                        only organisation of its kind in India that imparts training in leadership, discipline, national
                        integration, adventure, military knowledge, physical fitness, and community development.</p>

                        <h3 class="mt-2 text-gray-600 text-[20px] font-[700]">NCC in DPS Unnao</h3>
                        <p class="mt-2 text-gray-600">The NCC unit at Delhi Public School, Unnao, was established to shape young individuals into
                        responsible, disciplined, and patriotic citizens. It offers an organised setting for students to
                        cultivate leadership abilities and qualities similar to those of officers.</p>

                        <p class="mt-2 text-gray-600">At present, both boys and girls from classes VIII to XI can take part in the NCC program. Along
                        with military training, the program features various activities like social service,
                        environmental education, and youth empowerment projects.</p>

                        <p class="mt-2 text-gray-600">The focus is on complete growth. It equips students for upcoming chances in the military, public
                        service, and various leadership positions. Engaging in NCC cultivates a deep sense of
                        responsibility, collaboration, and dedication to serving the nation.</p>

                        <p class="mt-2 text-gray-600">Delhi Public School, Unnao, takes pride in fostering a new generation of bold, confident, and
                        service-oriented young individuals through the NCC program.</p> -->
                </div>
            </div>

             </div>


                <?php include "includes/footer.php" ?>
        </div>
        <?php include "includes/foot.php" ?>

</body>

</html>