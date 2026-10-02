<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $pre_primary_wing_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $pre_primary_wing_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $pre_primary_wing_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($pre_primary_wing_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($pre_primary_wing_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-[10px] sm:text-[16px]  font-medium text-blue-main">Future Ready Skills
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
                        <p class="ms-1 text-[10px] sm:text-[16px]  font-medium text-blue-main">Reading Programme</p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="pre-primary-wing"
                            class="ms-1 text-[10px] sm:text-[16px]  font-medium text-blue-main"> <?= strip_tags($pre_primary_wing_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $pre_primary_wing_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>"
                        alt="Pre-Primary Library & SSD Lounge" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <span class="text-[18px] font-[700]">Pre-Primary Library: A World of Wonder</span>
                    <?= $pre_primary_wing_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <p class="text-gray-700">
                        Welcome to our vibrant Pre-Primary Library, designed to spark curiosity and imagination in our
                        youngest learners. Our carefully curated collection features renowned authors like Roald Dahl,
                        David Walliams, Adam Rubin and Ruskin Bond.
                    </p>

                    <h3 class="text-[16px] font-[600] mt-2">What Makes Our Library Special:</h3>
                    <ul class="list-disc ml-6 mt-2 space-y-1 text-gray-700">
                        <li>Age-Appropriate Books – Engaging picture books with simple text and captivating
                            illustrations.</li>
                        <li>Read-Aloud Sessions – Story time with teachers to develop listening and language skills
                        </li>
                        <li>Interactive Corners – Cosy reading nooks and storytelling puppets bring stories to life.
                        </li>
                        <li>Theme-Based Reading – Books aligned with classroom themes reinforce learning in a fun way.
                        </li>
                    </ul>

                    <h3 class="text-[16px] font-[600] mt-2">Our Goal</h3>
                    <p class="mt-2 text-gray-700 mt-2">
                        We aim to nurture a love for reading and learning. As every book is a doorway to new adventures,
                        in our Pre-Primary Library, children don't just read books – they live them!
                    </p> -->
                </div>
            </div>
            <!-- <span class="text-[18px] font-[700]">OUR USPs</span> -->
            <?= $pre_primary_wing_data['data']['sections'][2]['content'] ?? '' ?>
            <!-- <p class="text-gray-700 mt-2">
                We believe that helping children build soft skills is just extremely important. These skills help
                students form strong relationships, communicate effectively, manage emotions, solve problems and
                navigate social situations with confidence. Developing these abilities supports both academic success
                and personal growth.
            </p>

            <p class="text-gray-700 mt-2">
                We’re excited to introduce a new initiative called the SSD Lounge—a dedicated space designed to support
                soft skill development, encourage meaningful discussions and provide a safe, welcoming environment for
                students to express themselves. Through guided activities, conversations and collaborative projects, the
                SSD Lounge aims to help learners grow into confident, empathetic and socially aware individuals—ready to
                thrive in the classroom and beyond.
            </p>
            <br> -->
        </div>


        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>