<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $management_committee_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $management_committee_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $management_committee_data['data']['meta_keywords'] ?? "" ?>">
</head>
<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($management_committee_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($management_committee_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 text-xs sm:text-sm font-medium text-blue-main">About Us</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="management-committee" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($management_committee_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="overflow-x-auto">
                <?= $management_committee_data['data']['sections'][1]['content'] ?? '' ?>
                <!-- <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
                    <thead>
                        <tr class="bg-blue-main text-left text-sm font-semibold text-white">
                            <th class="py-3 px-4 border-b">Sr No.</th>
                            <th class="py-3 px-4 border-b">Designation</th>
                            <th class="py-3 px-4 border-b">Member</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-800">
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">1</td>
                            <td class="py-2 px-4 border-b">Chairman</td>
                            <td class="py-2 px-4 border-b">Mr. BK Chaturvedi</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">2</td>
                            <td class="py-2 px-4 border-b">Vice Chairman</td>
                            <td class="py-2 px-4 border-b">Mr. Promod Rawal</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">3</td>
                            <td class="py-2 px-4 border-b">Pro Vice Chairman</td>
                            <td class="py-2 px-4 border-b">Mr. Mukhtarul Amin</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">4</td>
                            <td class="py-2 px-4 border-b">Member</td>
                            <td class="py-2 px-4 border-b">Mr. Rakesh Kacker</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">5</td>
                            <td class="py-2 px-4 border-b">Member</td>
                            <td class="py-2 px-4 border-b">Mr. Pavnesh Kumar</td>
                        </tr>
                         <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">6</td>
                            <td class="py-2 px-4 border-b">Member</td>
                            <td class="py-2 px-4 border-b">Ms. Nishi Mehrotra</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">7</td>
                            <td class="py-2 px-4 border-b">Member</td>
                            <td class="py-2 px-4 border-b">Mr. Yusuf Amin</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">8</td>
                            <td class="py-2 px-4 border-b">Member</td>
                            <td class="py-2 px-4 border-b">Mr. Javed Hashmi</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">9</td>
                            <td class="py-2 px-4 border-b">Member</td>
                            <td class="py-2 px-4 border-b">Mr. Sanjay Kapoor</td>
                        </tr>
                         <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">10</td>
                            <td class="py-2 px-4 border-b">Principal, DPS Unnao</td>
                            <td class="py-2 px-4 border-b">Ms. Niti Khanna</td>
                        </tr>
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>