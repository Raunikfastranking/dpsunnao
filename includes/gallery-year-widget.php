<?php

declare(strict_types=1);

if (!function_exists('dps_gallery_year_toolbar_grid_markup')) {
    function dps_gallery_year_toolbar_grid_markup(
        string $idPrefix,
        ?string $searchPlaceholder = null,
        string $noResultsText = 'No matching items found.'
    ): void {
        $prefix = preg_replace('/[^a-zA-Z0-9_]/', '_', $idPrefix);
        $placeholder = $searchPlaceholder ?? 'Search';
        echo '<div class="flex items-center gap-2 sm:justify-between flex-wrap w-full">';
        $galleryToolbarPlaceholder = $placeholder;
        include __DIR__ . '/gallery-year-toolbar.php';
        echo '</div>';

        echo '<section id="section1" class="tab-panel mt-5" role="tabpanel">';
        echo '<div id="galleryGrids" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-4"></div>';

        $p = htmlspecialchars($prefix, ENT_QUOTES, 'UTF-8');
        echo '<div id="' . $p . 'Pagination" class="flex justify-center items-center gap-2 mt-8">';
        echo '<button type="button" id="' . $p . 'PrevBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">Previous</button>';
        echo '<div id="' . $p . 'PageNumbers" class="flex gap-1"></div>';
        echo '<button type="button" id="' . $p . 'NextBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">Next</button>';
        echo '</div>';
        echo '<p id="noResults" class="hidden text-center text-gray-500 mt-4 text-sm sm:text-base">' . htmlspecialchars($noResultsText, ENT_QUOTES, 'UTF-8') . '</p>';
        echo '</section>';
    }
}

if (!function_exists('dps_gallery_year_init_script')) {
    function dps_gallery_year_init_script(array $config): void
    {
        require_once __DIR__ . '/asset-url.php';
        $branch = defined('DPS_UNNAO_GALLERY_BRANCH_ID') ? (int) DPS_UNNAO_GALLERY_BRANCH_ID : 8;
        $defaults = [
            'branchId' => $branch,
            'apiBase' => dps_web_base() . '/proxy/gallery-proxy.php',
            'gridSelector' => '#galleryGrids',
            'yearSelectSelector' => '#galleryYearSelect',
            'searchSelector' => '#searchInput',
            'noResultsSelector' => '#noResults',
            'itemsPerPage' => 6,
            'loadingMessage' => 'Loading…',
            'searchEmptyMessage' => 'No matching items found.',
            'pdfLabel' => 'PDF Document',
            'mediaCountLabel' => 'Total Media',
            'galleryType' => 'gallery',
            'subType' => null,
        ];
        $init = array_merge($defaults, $config);
        $init['branchId'] = $branch;
        $init['apiBase'] = dps_web_base() . '/proxy/gallery-proxy.php';
        $json = json_encode($init, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        if ($json === false) {
            return;
        }
        ?>
<!-- gallery-grid-init branch8-proxy -->
<script src="<?= htmlspecialchars(dps_asset_url('js/gallery-year-grid.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    DPSGalleryYearGrid.init(<?= $json ?>);
});
</script>
<?php
    }
}
