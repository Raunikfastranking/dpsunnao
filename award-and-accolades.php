<?php
include "includes/apis.php";
require_once __DIR__ . '/includes/gallery-year-widget.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Award and Accolades | DPS Unnao</title>
    <meta name="description" content="">
    <?php include "includes/head.php" ?>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] mx-0 sm:mx-2">
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <h1 class="text-[32px] sm:hidden block font-[700] text-blue-main uppercase text-center mb-5 sm:mb-8 hr-line relative leading-9">
                    Award and Accolades
                </h1>
                <div class="md:w-[100%]">
                    <h1 class="sm:text-[32px] sm:block hidden font-[700] text-blue-main uppercase text-center sm:mb-1 hr-line relative leading-9">
                        Award and Accolades
                    </h1>
                </div>

                <div class="mt-10 relative">
                    <div class="tabs sm:mt-10">
                        <?php
                        dps_gallery_year_toolbar_grid_markup(
                            'awardsAccoladesHub',
                            'Search',
                            'No matching awards found.'
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <?php
    dps_gallery_year_init_script([
        'galleryType' => 'achievements',
        'subType' => null,
        'prevBtnId' => 'awardsAccoladesHubPrevBtn',
        'nextBtnId' => 'awardsAccoladesHubNextBtn',
        'pageNumbersId' => 'awardsAccoladesHubPageNumbers',
        'paginationId' => 'awardsAccoladesHubPagination',
        'emptyMessage' => 'No awards for this year.',
        'searchEmptyMessage' => 'No matching awards found.',
        'pdfLabel' => 'Document',
        'mediaCountLabel' => 'Total Items',
    ]);
    ?>

</body>
</html>
