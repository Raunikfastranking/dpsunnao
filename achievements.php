<?php
include "includes/apis.php";
require_once __DIR__ . '/includes/gallery-year-widget.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($achievement_data['title'] ?? $achievement_data['data']['title'] ?? 'DPS Unnao | Achievements') ?></title>
    <meta name="description" content="<?= htmlspecialchars($achievement_data['meta_description'] ?? $achievement_data['data']['meta_description'] ?? '') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($achievement_data['meta_keywords'] ?? $achievement_data['data']['meta_keywords'] ?? '') ?>">
    <?php include "includes/head.php" ?>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] mx-0 sm:mx-2">
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <h1
                    class="text-[32px] sm:hidden block font-[700] text-blue-main uppercase text-center mb-5 sm:mb-8 hr-line relative leading-9">
                    Achievements
                </h1>
                <div class="md:w-[100%]">
                    <h1
                        class="sm:text-[32px] sm:block hidden font-[700] text-blue-main uppercase text-center sm:mb-1 hr-line relative leading-9">
                        Achievements
                    </h1>
                </div>

                <div class="mt-10 relative">
                    <div class="tabs sm:mt-10">
                        <?php
                        dps_gallery_year_toolbar_grid_markup(
                            'achievementsHub',
                            'Search',
                            'No matching achievements found.'
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
        'prevBtnId' => 'achievementsHubPrevBtn',
        'nextBtnId' => 'achievementsHubNextBtn',
        'pageNumbersId' => 'achievementsHubPageNumbers',
        'paginationId' => 'achievementsHubPagination',
        'emptyMessage' => 'No achievements for this year.',
        'searchEmptyMessage' => 'No matching achievements found.',
        'pdfLabel' => 'Achievement Document',
        'mediaCountLabel' => 'Total Items',
    ]);
    ?>

</body>
</html>
