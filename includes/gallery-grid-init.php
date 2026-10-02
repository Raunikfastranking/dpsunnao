<?php
/**
 * Gallery grid — Unnao branch 8, JWT via proxy/gallery-proxy.
 * Set $galleryGridConfig in the page before including this file.
 */
require_once __DIR__ . '/asset-url.php';

$galleryGridConfig = isset($galleryGridConfig) && is_array($galleryGridConfig) ? $galleryGridConfig : [];

$galleryGridInit = array_merge([
    'branchId' => 8,
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
], $galleryGridConfig);

$galleryGridInit['branchId'] = 8;

$galleryGridJson = json_encode(
    $galleryGridInit,
    JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT
);
if ($galleryGridJson === false) {
    return;
}
?>
<!-- gallery-grid-init branch8-proxy -->
<script src="<?= htmlspecialchars(dps_asset_url('js/gallery-year-grid.js'), ENT_QUOTES, 'UTF-8') ?>"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof DPSGalleryYearGrid !== 'undefined') {
        DPSGalleryYearGrid.init(<?= $galleryGridJson ?>);
    }
});
</script>
