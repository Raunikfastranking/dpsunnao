<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $CGCP_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $CGCP_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $CGCP_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($CGCP_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($CGCP_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="career-guidence-program" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($CGCP_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $CGCP_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>"
                        alt="Career Guidance and Counselling" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <?= $CGCP_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <span class="text-[18px] font-[700]">Empowering Students for a Brighter Future</span>
                    <br><br>
                    <p class="text-gray-700">
                        At Delhi Public School, Unnao, our goal is to provide comprehensive career guidance and
                        counselling that helps students discover their passion. We help them align their interests with
                        suitable career paths and make informed decisions about their future.
                    </p>

                    <h3 class="text-[16px] font-[600] mt-4">What We Offer</h3>

                    <h4 class="text-[15px] font-[600] mt-4">1. Career Exploration</h4>
                    <p class="mt-2 text-gray-700">
                        We help students explore different career options based on their strengths, interests, and
                        values.
                    </p>

                    <h4 class="text-[15px] font-[600] mt-4">2. Educational Pathways</h4>
                    <p class="mt-2 text-gray-700">
                        CChoosing the right courses and subjects is essential to achieving career goals. Our educators and counselor/s work closely with students to:
                    </p> -->
                </div>
            </div>
            <?= $CGCP_data['data']['sections'][2]['content'] ?? '' ?>
            <!-- <ul class="list-disc ml-6 mt-2 space-y-1 text-gray-700">
                <li>Select subjects that align with their career aspirations.</li>
                <li>Understand the academic requirements for different career paths.</li>
                <li>Provide guidance on advanced studies, scholarships, and college applications.</li>
            </ul>

            <h4 class="text-[15px] font-[600] mt-4">3. Skills Development</h4>
            <p class="mt-2 text-gray-700">
                In today's competitive world, academic knowledge is not enough. We offer workshops and training in
            </p>
            <ul class="list-disc ml-6 mt-2 space-y-1 text-gray-700">
                <li>Communication Skills: Helping students express themselves confidently</li>
                <li>Problem-Solving Skills: Developing critical thinking abilities.</li>
                <li>Time Management: Teaching students how to balance academic work with extracurricular activities.
                </li>
            </ul>

            <h4 class="text-[15px] font-[600] mt-4">4. Career Talks and Seminars organize interactive sessions with industry professionals and experts to</h4>
            
            <ul class="list-disc ml-6 mt-2 space-y-1 text-gray-700">
                <li>Introduce students to real-world career experiences.</li>
                <li>Provide insights into emerging fields and industries.</li>
                <li>Offer practical tips on how to succeed in various careers.</li>
            </ul>

            <h4 class="text-[15px] font-[600] mt-4">5. College and Career Planning</h4>
            <p class="mt-2 text-gray-700">
                Whether students are planning to attend college or enter the workforce after school, we offer tailored guidance on:
            </p>
            <ul class="list-disc ml-6 mt-2 space-y-1 text-gray-700">
                <li>College selection and applications.</li>
                <li>Letter of Recommendation (LoR).</li>
            </ul> -->
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>