<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $animation_master_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $animation_master_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $animation_master_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div   class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($animation_master_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($animation_master_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Future Ready Skills
                        </p>
                    </div>
                </li>
                   <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">21st Century Skills
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="animation" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($animation_master_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $animation_master_data['data']['sections'][1]['columns'][0]['image_path'] ?? '' ?>" alt="Animation Master Class" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <?= $animation_master_data['data']['sections'][1]['columns'][1]['content'] ?? '' ?>
                    <!-- <h3 class="text-[18px] font-[700] text-gray-700">Vision</h3>
                    
                    <p class="text-gray-600 mt-3">
                        Superhouse Foundation in its endeavour to provide holistic Education proudly announces the launch of Animation Master Class. The Animation School, besides developing the right values and attitude in the students will also develop their sensorial skills and aesthetic sensitivity necessary for creative field. The school boasts of an in-house dedicated team for content development which has created an age-appropriate curriculum keeping in mind the profile of students. Besides this we have a team of experts for training the faculty in the curriculum implementation & latest development in the field of Animation.
                    </p>
                   <h3 class="text-[18px] font-[700] text-gray-700 mt-5">About Animation</h3>
            <p class="mt-2 text-gray-600">
                Animation is a new dimension of Art, which uses technology to develop ideas for creation of moving visuals. Today Digital Animation & VFX are used in Advertising, Web Designing, Television, Films, Medicine, Training & Education, e-learning, Legal & Insurance, 3D Visualization, Architecture etc. 
            </p> -->

                </div>
         

</div>
<div class="mt-5">
    <?= $animation_master_data['data']['sections'][2]['content'] ?? '' ?>
    <!-- <p class="mt-2 text-gray-600">Another exciting area of application is the designing of games for the PC, internet, mobiles & gaming consoles (PlayStation/Xbox). The program at Animation Masterclass is packed with interesting assignments, live projects & competitions which makes learning fun & exciting. Students will work on the latest software & state of the art machines.</p>
          

            <h3 class="text-[18px] font-[700] text-gray-700 mt-5">Why Animation for Children</h3>
            <p class="mt-2 text-gray-600">
                This course provides an exciting opportunity for students to develop their aesthetic, imaginative & expressive abilities through combination of Art and Animation.
            </p>

            <h3 class="text-[18px] font-[700] text-gray-700 mt-5">Developing Creative skills in the students</h3>
            <p class="mt-2 text-gray-600">
                In today’s era of Globalization and Web, creative thinking and problem solving are important attributes for success. Animation training provides the necessary direction, facilities and experience to develop creativity and thereby help each individual to discover his/her own identity and potential. A child develops an understanding of multi-disciplinary nature of design and relationship of design with environment, culture, human senses and emotions. 
            </p>
           
            <h3 class="text-[18px] font-[700] text-gray-700 mt-5">Special Highlights</h3>
            <ul class="list-disc sm:ml-6 mt-2 space-y-1 text-gray-600">
                <li>Concept Development & Visualizations</li>
                <li>Graphics Design & Image Editing</li>
                <li>3D Architecture & Design</li>
                <li>Visual Effects</li>
                <li>Visual & Sound Editing</li>
            </ul>

            <h2 class="text-[20px] font-[700] text-gray-700 mt-5">Our Programs</h2>

            <h3 class="text-[18px] font-[700] text-gray-700 mt-5">Primary Level Programs (Class – 3rd & 4th)</h3>
            <ul class="list-disc sm:ml-6 mt-2 space-y-1 text-gray-600">
                <li>An introduction to the world of graphics where kids learn with fun and develop their creative skill.</li>
                <li>Teaching children how they can create more effective thoughts in digital space.</li>
                <li>Exploring their talents and getting familiar with advanced yet creative technology at a young age.</li>
                <li>Understanding the basic concepts of digital drawing, editing and photo manipulations.</li>
            </ul>

            <h2 class="text-[20px] font-[700] text-gray-700 mt-5">Middle Level Programs (Class – 5th & 6th)</h2>
            <ul class="list-disc sm:ml-6 mt-2 space-y-1 text-gray-600">
                <li>Developing advanced skills on graphics and image editing software.</li>
                <li>Creating banners, posters, logos and graphics-related projects.</li>
                <li>Learning image editing, colour & image correction, layouts, script-based designing.</li>
                <li>Creating interesting effects with images and photos.</li>
            </ul>

            <h2 class="text-[20px] font-[700] text-gray-700 mt-5">Advance Level Programs (Class – 7th & 8th)</h2>
            <ul class="list-disc sm:ml-6 mt-2 space-y-1 text-gray-600">
                <li>Developing and understanding 3D concepts.</li>
                <li>Creating innovative casting for events & movies.</li>
                <li>Creating special visual effects for films.</li>
                <li>Sound and video editing for films and events.</li>
            </ul> -->


             
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>