<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $PTAC_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $PTAC_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $PTAC_data['data']['meta_keywords'] ?? '' ?>">
    <style>
        /* Layout fixes only - no HTML structure changes */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        
        .main {
            flex: 1 0 auto;
            width: 100%;
        }
        
        footer {
            flex-shrink: 0;
            width: 100%;
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
        
        /* Ensure content container doesn't cause overflow */
        .max-w-4xl {
            width: 100%;
            overflow-x: auto;
        }
        
        /* Make tables responsive on mobile */
        @media (max-width: 768px) {
            .max-w-4xl {
                overflow-x: auto;
            }
            
            table {
                min-width: 600px;
            }
        }
        
        /* Fix for the breadcrumb and main content spacing */
        .main > div:not(.bg-center) {
            position: relative;
            z-index: 1;
        }
        
        /* Ensure proper clearing */
        .main::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>

<body>

    <?php include "includes/header.php" ?>

    <main class="main">
        <div class="bg-center flex items-center justify-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($PTAC_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($PTAC_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ol-overflow flex-wrap">
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
                        <a href="pta-committee" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($PTAC_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="max-w-4xl mx-auto">
                <?= $PTAC_data['data']['sections'][1]['content'] ?? '' ?>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>
    
</body>
</html>