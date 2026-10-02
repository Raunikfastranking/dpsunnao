<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $our_motto_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $our_motto_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $our_motto_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($our_motto_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($our_motto_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="our-motto" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($our_motto_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px]  sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <?= $our_motto_data['data']['sections'][1]['content'] ?? '' ?>
            <!-- <div>
                <p class="text-[16px] text-gray-500 mt-4">
                    Children will be happy and secure, and their achievements will be celebrated and valued by all. </p>
            </div>
            <div class=" mt-4">
                <h2 class="text-[16px] font-[700] text-gray-500 leading-8 relative"><span
                        class="text-[22px] font-[700] text-blue-main hr-line uppercase">CREATIVITY</span></h2>
                <p class="text-[16px] text-gray-600">
                    A strong focus ensures that school is fun! The school will be a bright, attractive and stimulating
                    place to harness creativity.
                </p>
            </div>
            <div class=" mt-4">
                <h2 class="text-[16px] font-[700] text-gray-500 leading-8 relative"><span
                        class="text-[22px] font-[700] text-blue-main hr-line uppercase">CHALLENGE</span></h2>
                <p class="text-[16px] text-gray-600">
                    We aim to challenge learners through high expectations of learning and behavior to promote
                    excellence.
                </p>
            </div>
            <div class="mt-4">
                <h2 class="text-[16px] font-[700] text-gray-500 leading-8 relative"><span
                        class="text-[22px] font-[700] text-blue-main hr-line uppercase">COMMUNITY</span></h2>
                <p class="text-[16px] text-gray-600">
                    We value parents as our partners in education and will involve them, and the wider community in
                    school life.</p>
            </div>
            <div class="mt-4">
                <h2 class="text-[16px] font-[700] text-gray-500 leading-8 relative"><span
                        class="text-[22px] font-[700] text-blue-main hr-line uppercase">CONSISTENCY</span></h2>
                <p class="text-[16px] text-gray-600">
                    The school will grow and change but we will remain true to our aims and mission.</p>
            </div>
            <div class="mt-4">
                <h2 class="text-[16px] font-[700] text-gray-500 leading-8 relative"><span
                        class="text-[22px] font-[700] text-blue-main hr-line uppercase">CONTRIBUTION</span></h2>
                <p class="text-[16px] text-gray-600">
                    All members of the school community will be valued and recognized for their outstanding works. </p>
            </div> -->
          

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>