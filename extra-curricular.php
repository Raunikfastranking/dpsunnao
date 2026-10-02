<?php
include "includes/apis.php";
require_once __DIR__ . '/includes/gallery-year-widget.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($ECA_data['data']['title'] ?? 'Extra Curricular') ?></title>
    <meta name="description" content="<?= htmlspecialchars($ECA_data['data']['meta_description'] ?? '') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($ECA_data['data']['meta_keywords'] ?? '') ?>">
    <?php include "includes/head.php" ?>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative mb-[120px] bg-white">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div class="w-full">
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Extra Curricular
                </h1>
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Extra Curricular
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ol-overflow">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">Home</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 text-xs sm:text-sm font-medium text-blue-main">Achievements</p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Extra Curricular</span>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="mt-10 relative">
                <div class="tabs sm:mt-10">
                    <?php
                    dps_gallery_year_toolbar_grid_markup(
                        'extraCurricularGrid',
                        'Search',
                        'No matching items found.'
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <?php
    dps_gallery_year_init_script([
        'galleryType' => 'achievements',
        'subType' => 'extra_curricular',
        'prevBtnId' => 'extraCurricularGridPrevBtn',
        'nextBtnId' => 'extraCurricularGridNextBtn',
        'pageNumbersId' => 'extraCurricularGridPageNumbers',
        'paginationId' => 'extraCurricularGridPagination',
        'emptyMessage' => 'No items for this year.',
        'searchEmptyMessage' => 'No matching items found.',
        'pdfLabel' => 'Document',
        'mediaCountLabel' => 'Total Items',
        'categoryText' => "Achievements"
    ]);
    ?>

</body>
</html>
