<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $other_information_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $other_information_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $other_information_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($other_information_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($other_information_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ol-overflow">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 text-xs sm:text-sm font-medium text-blue-main">General Information</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="oher-information.php" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($other_information_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <!-- <div class="overflow-x-auto"> -->
                <?= $other_information_data['data']['sections'][1]['content'] ?? '' ?>
                <!-- <table class="w-full border border-gray-300 border-collapse text-sm">
                    <thead>
                        <tr class="bg-blue-main text-white">
                            <th class="border border-gray-400 px-4 py-2 text-left">SL/NO.</th>
                            <th class="border border-gray-400 px-4 py-2 text-left">INFORMATION</th>
                            <th class="border border-gray-400 px-4 py-2 text-left">DETAILS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2 text-center">1</td>
                            <td class="border border-gray-400 px-4 py-2">NAME OF THE SCHOOL</td>
                            <td class="border border-gray-400 px-4 py-2">DELHI PUBLIC SCHOOL, AKRAMPUR, UNNAO</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 px-4 py-2 text-center">2</td>
                            <td class="border border-gray-400 px-4 py-2">AFFILIATION NO (IF APPLICABLE)</td>
                            <td class="border border-gray-400 px-4 py-2">2133989</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2 text-center">3</td>
                            <td class="border border-gray-400 px-4 py-2">SCHOOL CODE (IF APPLICABLE)</td>
                            <td class="border border-gray-400 px-4 py-2">71989</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 px-4 py-2 text-center">4</td>
                            <td class="border border-gray-400 px-4 py-2">COMPLETE ADDRESS WITH PIN CODE</td>
                            <td class="border border-gray-400 px-4 py-2">AKRAMPUR, UNNAO, U.P.- 209801</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2 text-center">5</td>
                            <td class="border border-gray-400 px-4 py-2">PRINCIPAL NAME & QUALIFICATION</td>
                            <td class="border border-gray-400 px-4 py-2">Mrs. NITI KHANA (M.Sc., B.Ed.)</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 px-4 py-2 text-center">6</td>
                            <td class="border border-gray-400 px-4 py-2">SCHOOL EMAIL ID</td>
                            <td class="border border-gray-400 px-4 py-2">
                                <a href="mailto:contact@dpsunnao.com"
                                    class="text-blue-600 hover:underline">contact@dpsunnao.com</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2 text-center">7</td>
                            <td class="border border-gray-400 px-4 py-2">CONTACT DETAILS (MOBILE)</td>
                            <td class="border border-gray-400 px-4 py-2">9839734777, 9839513636</td>
                        </tr>
                    </tbody>
                </table> -->
            <!-- </div> -->

        </div>
    </div>
    </div>
    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>