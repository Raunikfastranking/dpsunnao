<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $school_infra_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $school_infra_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $school_infra_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($school_infra_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($school_infra_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 text-xs sm:text-sm font-medium text-blue-main">Mandatory Public Disclosure</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="school-infrastructure" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($school_infra_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>
                    <div class="md:w-[100%]">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                            <?= $school_infra_data['data']['sections'][1]['content'] ?? '' ?>
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-white uppercase bg-[#005224]">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">
                                            S.No.
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Information
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Details
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1.</th>
                                        <td class="px-6 py-2">Total Campus Area of the School (in square meters)</td>
                                        <td class="px-6 py-2">11088.34</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">2.</th>
                                        <td class="px-6 py-2">No. and Size of Classrooms (in square meters)</td>
                                        <td class="px-6 py-2">30 | 600 ft²</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3.</th>
                                        <td class="px-6 py-2">No. and Size of Laboratories including Computer Labs (in
                                            square meters)</td>
                                        <td class="px-6 py-2">6 | 1200 ft²</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4.</th>
                                        <td class="px-6 py-2">Internet Facility (Yes/No)</td>
                                        <td class="px-6 py-2">Yes</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5.</th>
                                        <td class="px-6 py-2">No. of Girls' Toilets</td>
                                        <td class="px-6 py-2">20</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">6.</th>
                                        <td class="px-6 py-2">No. of Boys' Toilets</td>
                                        <td class="px-6 py-2">20</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">7.</th>
                                        <td class="px-6 py-2">Link of YouTube Video of the School Inspection (covering
                                            infrastructure)</td>
                                        <td class="px-6 py-2"><a href="https://youtu.be/qZPRoQ-hC6o?si=7CuVBdONuBkMo-_m"
                                                class=" text-blue-600">
                                                https://youtu.be/qZPRoQ-hC6o?si=7CuVBdONuBkMo-_m</a></td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>