<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $SMC_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $SMC_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $SMC_data['data']['meta_keywords'] ?? '' ?>">
    <style>
        /* Layout fixes only */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        
        .main {
            flex: 1 0 auto;
            position: relative;
            width: 100%;
        }
        
        footer {
            flex-shrink: 0;
            width: 100%;
            margin-top: auto;
        }
        
        /* Fix table display */
        table {
            width: 100%;
            border-collapse: collapse;
            display: table !important;
        }
        
        table tr {
            display: table-row !important;
        }
        
        table td, 
        table th {
            display: table-cell !important;
            border: 1px solid #ddd;
            padding: 12px;
            vertical-align: top;
        }
        
        /* Make tables responsive */
        .max-w-5xl {
            width: 100%;
            overflow-x: auto;
        }
        
        /* Responsive table on mobile */
        @media (max-width: 768px) {
            .max-w-5xl {
                overflow-x: auto;
            }
            
            table {
                min-width: 500px;
            }
        }
        
        /* Fix any overflow issues */
        .main > div:not(.bg-center) {
            position: relative;
            z-index: 1;
        }
        
        /* Clear floats */
        .main::after {
            content: "";
            clear: both;
            display: table;
        }
        
        /* Fix breadcrumb overflow */
        .ol-overflow {
            flex-wrap: wrap;
        }
    </style>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($SMC_data['data']['sections'][0]['content_heading']) ?? "" ?> 
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($SMC_data['data']['sections'][0]['content_heading']) ?? "" ?> 
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
                        <a href="school-management-committee "
                            class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($SMC_data['data']['sections'][0]['content_heading']) ?? "" ?> </a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="max-w-5xl mx-auto">
                <?= $SMC_data['data']['sections'][1]['content'] ?? '' ?>
                <!-- <table class="min-w-full table-auto border border-gray-400">
                    <thead class="bg-blue-main text-white">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2 text-left w-12">S. NO</th>
                            <th class="border border-gray-400 px-4 py-2 text-left">Name</th>
                            <th class="border border-gray-400 px-4 py-2 text-left">Designation</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">1</td>
                            <td class="border border-gray-400 px-4 py-2">Mr. Mukhtarul Amin</td>
                            <td class="border border-gray-400 px-4 py-2">President</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">2</td>
                            <td class="border border-gray-400 px-4 py-2">Ms. Niti Khanna</td>
                            <td class="border border-gray-400 px-4 py-2">Principal (Secretary)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">3</td>
                            <td class="border border-gray-400 px-4 py-2">Mr. Syed Javed Ali Hashmi</td>
                            <td class="border border-gray-400 px-4 py-2">Member</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">4</td>
                            <td class="border border-gray-400 px-4 py-2">Ms. Afreen Yusuf</td>
                            <td class="border border-gray-400 px-4 py-2">Member</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">5</td>
                            <td class="border border-gray-400 px-4 py-2">Dr Richa Prakash</td>
                            <td class="border border-gray-400 px-4 py-2">Member (Principal Other School)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">6</td>
                            <td class="border border-gray-400 px-4 py-2">Dr Shabana Arora</td>
                            <td class="border border-gray-400 px-4 py-2">Member (Principal Other School)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">7</td>
                            <td class="border border-gray-400 px-4 py-2">Ms Jyoti Maheshwari</td>
                            <td class="border border-gray-400 px-4 py-2">Member (Parents)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">8</td>
                            <td class="border border-gray-400 px-4 py-2">Mr. Shan Shiv</td>
                            <td class="border border-gray-400 px-4 py-2">Member (Parents)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">9</td>
                            <td class="border border-gray-400 px-4 py-2">Ms Chitra Gupta</td>
                            <td class="border border-gray-400 px-4 py-2">Member (Teacher)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">10</td>
                            <td class="border border-gray-400 px-4 py-2">Mr. Navin Kumar</td>
                            <td class="border border-gray-400 px-4 py-2">Member (Teacher)</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">11</td>
                            <td class="border border-gray-400 px-4 py-2">BSA (Unnao)</td>
                            <td class="border border-gray-400 px-4 py-2">Member</td>
                        </tr>
                    </tbody>
                60 -->
            </div>
        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>