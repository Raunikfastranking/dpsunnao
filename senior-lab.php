<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $senior_lab_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $senior_lab_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $senior_lab_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($senior_lab_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($senior_lab_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ol-overflow">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-[10px] sm:text-[16px]  font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px]  font-medium text-blue-main">Academics
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
                        <a href="senior-lab"
                            class="ms-1 text-[10px] sm:text-[16px]  font-medium text-blue-main"><?= strip_tags($senior_lab_data['data']['sections'][0]['content_heading']) ?? "" ?>s</a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3  mb-10">
            <div class="sm:flex gap-10  mt-10">
                <div class="sm:w-[40%] sm:block hidden">
                    <img src="<?= $senior_lab_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="">
                </div>
                <div class="mx-3 pb-0 sm:pt-0 pt-[100px] sm:w-[60%]">
                    <div>
                        <?= $senior_lab_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                        <!-- <p class="mb-2 text-gray-600 text[16px]"><strong>Composite Lab:</strong> The NEP 2020 emphasizes integrating
                            skill education into the
                            mainstream curriculum. Our Composite Skill Labs fulfils this mandate by offering hands-on
                            learning opportunities beyond traditional classroom teaching.</p>

                        <p class="text-[16px] text-gray-500 mt-2 leading-8">
                            <span class="text-blue-main font-[600]"> Science Lab </span>
                        <p class="mb-2 text-gray-600 text[16px]"><strong>● Physics Lab :</strong>
                            Our physics lab is spacious, well-equipped and fosters hands-on learning, improving
                            students' understanding and approach to the subject effectively.</p>
                        <p class="mb-2 text-gray-600 text[16px]"><strong>● Chemistry Lab :</strong>
                            Our CBSE-standard Chemistry lab is well-equipped, promoting experimental learning and
                            providing students with hands-on experience, fostering a deeper understanding of
                            chemical concepts.</p>
                        </p>
                        <p class="mb-2 text-gray-600 text[16px]"><strong>● Biology Lab :</strong>
                            Our biology lab is well-equipped, adhering to CBSE standards, and provides hands-on
                            experiences that foster a deeper understanding of biological concepts, promoting
                            students' academic growth</p>
                        <p class="mb-2 text-gray-600 text[16px]"><strong>● Bio-Technology Lab :</strong>
                            Our modern hi-tech biotechnology laboratory is at par with world class schools. It caters to
                            the needs
                            of C.B.S.E. experiments. We encourage our students to learn from experiments</p>
                        <p class="mb-2 text-gray-600 text[16px]"><strong>● Computer Lab :</strong>
                            The school is embellished with an updated computer lab with the latest infrastructure and
                            computers
                            which can accommodate the classes with ease</p> -->
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <?= $senior_lab_data['data']['sections'][2]['content'] ?? '' ?>
                <!-- <p class="mb-2 text-gray-600 text[16px]"><strong>● Language Lab :</strong>
                    Video clippings are shown to students on a regular basis to apprise them of the principles of
                    language
                    to better their command of it.</p>

                <p class="mb-2 text-gray-600 text[16px]"><strong>● Math Lab :</strong>
                    To make math’s more interesting and easy, math’s lab is frequented by students so that graphically
                    and
                    digitally difficult theorems etc., become easy to understand.</p> -->
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>