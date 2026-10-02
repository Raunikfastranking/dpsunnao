<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $SEWA_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $SEWA_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $SEWA_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($SEWA_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($SEWA_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Future Raedy Skills
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Community Service Programme
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
                        <a href="sewa" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"> <?= strip_tags($SEWA_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $SEWA_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="SEWA Activities"
                        class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <?= $SEWA_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <p class="text-gray-600">
                        At our school, SEWA (Social Empowerment through Work Education and Action) represents more than
                        just a program—it's a lifestyle. Based on the fundamental principles of empathy, responsibility,
                        and collaboration, SEWA offers students practical experiences that link their classroom
                        education with actual social issues
                    </p>
                    <p class="mt-4 text-gray-600">
                        Each SEWA activity is intended to promote leadership, teamwork, and problem-solving abilities
                        while nurturing a feeling of pride in serving the community. It corresponds with the CBSE's
                        comprehensive educational philosophy and enables students to engage actively in improving
                        society.</p>
                    <p class="mt-4 text-gray-600">
                        Through SEWA, students participate in various activities, such as cleanliness initiatives,
                        environmental projects, visits to senior care facilities, assistance for children with
                        disabilities, and awareness campaigns addressing topics like health, hygiene, and gender
                        equality. These activities assist students in becoming socially aware and empathetic
                        individuals, prepared to create a positive influence.</p> -->
                </div>
            </div>
        </div>


        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>