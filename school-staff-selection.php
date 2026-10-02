<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $schoolSSC_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $schoolSSC_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $schoolSSC_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                  <?= strip_tags($schoolSSC_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                  <?= strip_tags($schoolSSC_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosure
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Committees
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
                        <a href="school-staff-selection" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($schoolSSC_data['data']['sections'][0]['content_heading']) ?? "" ?> </a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="max-w-4xl mx-auto">
                <?= $schoolSSC_data['data']['sections'][1]['content'] ?? '' ?>
                <!-- <table class="min-w-full table-auto border border-gray-400">
                    <thead class="bg-blue-main text-white">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2 text-left w-12">S. NO</th>
                            <th class="border border-gray-400 px-4 py-2 text-left">Members</th>
                            <th class="border border-gray-400 px-4 py-2 text-left">Designation</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">1</td>
                            <td class="border border-gray-400 px-4 py-2">Ms Nishi Mehrotra</td>
                            <td class="border border-gray-400 px-4 py-2">Chairperson of DPSS Selection Committee</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">2</td>
                            <td class="border border-gray-400 px-4 py-2">Mr. Yusuf Amin</td>
                            <td class="border border-gray-400 px-4 py-2">Member of DPSS Managing Committee<br>Director
                                of DPSU</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">3</td>
                            <td class="border border-gray-400 px-4 py-2">Ms. Niti Khanna</td>
                            <td class="border border-gray-400 px-4 py-2">Principal</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">4</td>
                            <td class="border border-gray-400 px-4 py-2">Ms. Hena Mushtaq</td>
                            <td class="border border-gray-400 px-4 py-2">Headmistress</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">5</td>
                            <td class="border border-gray-400 px-4 py-2">
                                Ms Nusrat Bano<br>
                                Ms Faiza Abbasi<br>
                                Ms Tooba Khanum<br>
                                Ms Nisha Lalwani<br>
                                Ms Angela Jaiswal
                            </td>
                            <td class="border border-gray-400 px-4 py-2">Wing Coordinator<br>(As Per Wing)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">6</td>
                            <td class="border border-gray-400 px-4 py-2">Ms. Purnima Tiwari</td>
                            <td class="border border-gray-400 px-4 py-2">CBSE Coordinator</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">7</td>
                            <td class="border border-gray-400 px-4 py-2">Subject Expert</td>
                            <td class="border border-gray-400 px-4 py-2">HODs</td>
                        </tr>
                    </tbody>
                </table> -->
            </div>
        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>
