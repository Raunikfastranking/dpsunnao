<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $ASS_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $ASS_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $ASS_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div   class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($ASS_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($ASS_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="assessment-system-and-schedule" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($ASS_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <!-- <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="https://dummyimage.com/400x285/e6e6ed/000000&text=Not+Provided" alt="Assessments" class="w-full rounded-md shadow-md">
                </div>
                <div class="md:w-[60%]">
                    <span class="text-[18px] font-[700]">Formative Assessments</span>
                    <br><br>
                    Conducted continuously throughout the term and includes:
                    <ul class="list-disc ml-6 mt-2 space-y-1 text-gray-700">
                        <li>Classwork and homework submissions.</li>
                        <li>Projects, presentations, and group activities.</li>
                        <li>Hands-on tasks such as experiments and fieldwork.</li>
                        <li>Oral quizzes, debates, and role-playing.</li>
                    </ul>

                    <br>
                    <span class="text-[18px] font-[700]">Summative Assessments</span>
                    <br><br>
                    Conducted at the end of each term:
                    <ul class="list-disc ml-6 mt-2 space-y-1 text-gray-700">
                        <li>Comprehensive coverage of the syllabus for that term.</li>
                        <li>Includes a mix of question types:</li>
                        <ul class="list-disc ml-6 mt-1 space-y-1 text-gray-600">
                            <li><b>Objective:</b> MCQs, Fill-in-the-Blanks, etc.</li>
                            <li><b>Subjective:</b> Short and Long-Answer Questions</li>
                        </ul>
                    </ul>
                </div>
            </div> -->

            <!-- <div class="w-full bg-green-50 px-4 py-8 border border-gray-400 rounded-md"> -->

                <?= $ASS_data['data']['sections'][1]['content'] ?? '' ?>
            <!-- </div> -->



        </div>


        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>