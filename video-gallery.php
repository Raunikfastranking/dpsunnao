<?php
include "includes/apis.php";

// Collect + sort videos newest first — safe version
$all_videos = [];
$processed_ids = [];

if (!empty($video_gallery_data['data']['sections'])) {
    foreach ($video_gallery_data['data']['sections'] as $section) {
        if (!isset($section['section_type']) || $section['section_type'] !== 'video') {
            continue;
        }
        if (!isset($section['resolved_content'])) {
            continue;
        }

        $rc = $section['resolved_content'];
        $item_id = $rc['id'] ?? null;

        // Skip duplicates
        if ($item_id && in_array($item_id, $processed_ids)) {
            continue;
        }
        if ($item_id) {
            $processed_ids[] = $item_id;
        }

        // Safe date extraction
        $rawDate = null;
        foreach (['date', 'created_at'] as $key) {
            $value = $rc[$key] ?? null;
            if (!empty($value) && $value !== '0000-00-00' && $value !== '0000-00-00 00:00:00') {
                $ts = strtotime($value);
                if ($ts !== false) {
                    $rawDate = $value;
                    break;
                }
            }
        }

        $timestamp = $rawDate ? strtotime($rawDate) : 0;
        $title = $rc['title'] ?? 'Untitled Video';
        $media_items = $rc['media'] ?? [];

        if (!is_array($media_items)) continue;

        foreach ($media_items as $media) {
            $url = $media['media_url'] ?? $media['page_link'] ?? '';
            if (empty($url)) continue;

            if (preg_match(
                '/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/|youtube\.com\/shorts\/)([^&\?\/]+)/i',
                $url,
                $matches
            )) {
                $videoId = $matches[1];
                $embedUrl = 'https://www.youtube.com/embed/' . $videoId;

                $all_videos[] = [
                    'timestamp' => $timestamp,
                    'embedUrl'  => $embedUrl,
                    'title'     => $title,
                    'rawDate'   => $rawDate,
                    'item_id'   => $item_id
                ];
            }
        }
    }

    // Sort newest first
    usort($all_videos, function ($a, $b) {
        return $b['timestamp'] <=> $a['timestamp'];
    });
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($video_gallery_data['data']['title'] ?? "Video Gallery") ?></title>
    <meta name="description" content="<?= htmlspecialchars($video_gallery_data['data']['meta_description'] ?? "") ?>">
    <meta name="keywords" content="<?= htmlspecialchars($video_gallery_data['data']['meta_keywords'] ?? "") ?>">
    <?php include "includes/head.php" ?>

    <!-- Hide default CMS-rendered videos to prevent duplicates -->
    <style>
        .video-section,
        section[data-section-type="video"],
        .section-video,
        .cms-video-block,
        .page-builder-video,
        iframe[src*="youtube.com"]:not(.rounded-t-lg) {
            display: none !important;
        }
    </style>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative mb-[120px]">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Video Gallery
                </h1>
            </div>
            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Video Gallery
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">Home</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <p class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Gallery</p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="video-gallery" class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Video Gallery</a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="mt-10 relative">
                <div class="tabs sm:mt-10">
                    <div class="flex items-center gap-2 sm:justify-between">
                        <ul class="flex gap-2 sm:gap-4 border-b bg-gray-50" style="border-radius:12px;">
                            <li class="flex-1">
                                <a href="#section1"
                                   class="tab-link block text-center py-2.5 px-2 sm:text-[16px] text-[10px] sm:py-3 sm:px-5 font-semibold text-gray-700 transition-colors hover:bg-slate-700 hover:text-white active">
                                    Title
                                </a>
                            </li>
                            <li class="flex-1">
                                <a href="#section2"
                                   class="tab-link block text-center py-2.5 sm:py-3 px-2 sm:px-5 sm:text-[16px] text-[10px] font-semibold text-gray-700 transition-colors hover:bg-slate-700 hover:text-white">
                                    Category
                                </a>
                            </li>
                            <li class="flex-1">
                                <a href="#section3"
                                   class="tab-link block text-center py-2.5 sm:py-3 px-2 sm:px-5 sm:text-[16px] text-[10px] font-semibold text-gray-700 transition-colors hover:bg-slate-700 hover:text-white">
                                    Year
                                </a>
                            </li>
                        </ul>

                        <input type="text" id="searchInput"
                               class="bg-gray-100 w-[50%] border-b text-gray-900 sm:text-[16px] text-[10px] outline-none focus:ring-0 block px-5 py-2"
                               style="border-radius:9px;" placeholder="Search by title..." />
                    </div>

                    <section id="section1" class="tab-panel mt-5" role="tabpanel">
                        <div id="galleryGrids"
                             class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-4">

                            <?php
                            if (!empty($all_videos)) {
                                foreach ($all_videos as $video) {
                                    $day   = $video['rawDate'] ? date("d", strtotime($video['rawDate'])) : '';
                                    $month = $video['rawDate'] ? date("M", strtotime($video['rawDate'])) : '';
                                    $year  = $video['rawDate'] ? date("Y", strtotime($video['rawDate'])) : '—';
                                    ?>
                                    <div class="video-card w-full mx-auto bg-white border border-gray-200 rounded-lg shadow hover:shadow-[rgba(0,0,0,0.15)_0px_15px_25px,rgba(0,0,0,0.05)_0px_5px_10px] transition-shadow duration-300"
                                         data-title="<?= htmlspecialchars(strip_tags(trim($video['title'] ?? ''))) ?>"
                                         data-year="<?= htmlspecialchars($year) ?>">

                                        <iframe class="w-full rounded-t-lg" height="240"
                                                src="<?= htmlspecialchars($video['embedUrl']) ?>"
                                                title="<?= htmlspecialchars($video['title']) ?>"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen loading="lazy">
                                        </iframe>

                                        <div class="relative flex flex-col justify-between p-1 sm:p-4">
                                            <div class="flex gap-4">
                                                <div class="w-[30%]">
                                                    <div class="bg-blue-main text-white text-center rounded-t-lg p-1 font-[700] text-[18px]">
                                                        <?= htmlspecialchars($year) ?>
                                                    </div>
                                                    <div class="text-center font-[700] text-[24px] text-[#D9A414] rounded-b-lg border border-gray-300">
                                                        <?= htmlspecialchars($day) ?><br>
                                                        <span class="text-[#223B71] text-[14px]"><?= htmlspecialchars($month) ?></span>
                                                    </div>
                                                </div>
                                                <div class="w-[70%]">
                                                    <div class="text-blue-main text-[1rem] font-[700] m-2 line-clamp-2">
                                                        <?= htmlspecialchars($video['title']) ?>
                                                    </div>
                                                    <hr>
                                                    <div class="flex gap-2 text-[9px] text-[#3B3B3B] m-2">
                                                        <div>Category: <strong>Video</strong></div>
                                                        <div>Total Video(s): <strong><?= count($all_videos) ?></strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                ?>
                                <p class="col-span-full text-center text-gray-500 py-10 text-lg">
                                    No videos available at this time.
                                </p>
                                <?php
                            }
                            ?>
                        </div>

                        <!-- Pagination Controls -->
                        <div id="photoPagination" class="flex justify-center items-center gap-2 mt-8">
                            <button id="photoPrevBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">
                                Previous
                            </button>
                            <div id="photoPageNumbers" class="flex gap-1">
                                <!-- Page numbers will be populated here -->
                            </div>
                            <button id="photoNextBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">
                                Next
                            </button>
                        </div>

                        <p id="noResults" class="hidden text-center text-gray-500 mt-4 text-sm sm:text-base">
                            No matching videos found.
                        </p>
                    </section>

                    <section id="section2" class="tab-panel hidden mt-5" role="tabpanel" aria-hidden="true"></section>
                    <section id="section3" class="tab-panel hidden mt-5" role="tabpanel" aria-hidden="true"></section>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Activate first tab by default
            const tabLinks = document.querySelectorAll('.tab-link');
            if (tabLinks.length > 0) {
                tabLinks[0].classList.add('active');
                document.querySelector('.tab-panel').classList.remove('hidden');
            }

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const galleryItems = document.querySelectorAll('#galleryGrids .gallery-item');
            const noResults = document.getElementById('noResults');

            if (searchInput) {
                searchInput.addEventListener('input', () => {
                    const term = searchInput.value.toLowerCase().trim();
                    let visible = 0;

                    galleryItems.forEach(item => {
                        const title = item.getAttribute('data-title')?.toLowerCase() || '';
                        if (title.includes(term)) {
                            item.style.display = '';
                            visible++;
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    noResults?.classList.toggle('hidden', visible > 0);
                });
            }

            // Pagination
            const itemsPerPage = 6;
            let currentPage = 1;
            const galleryItemsArray = Array.from(document.querySelectorAll('#galleryGrids .video-card'));
            const totalItems = galleryItemsArray.length;
            const totalPages = Math.ceil(totalItems / itemsPerPage);

            function showPage(page) {
                const startIndex = (page - 1) * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;

                galleryItemsArray.forEach((item, index) => {
                    if (index >= startIndex && index < endIndex) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });

                updatePaginationControls(page);
            }

            function updatePaginationControls(page) {
                const prevBtn = document.getElementById('photoPrevBtn');
                const nextBtn = document.getElementById('photoNextBtn');
                const pageNumbers = document.getElementById('photoPageNumbers');

                prevBtn.disabled = page === 1;
                nextBtn.disabled = page === totalPages || totalPages === 0;

                pageNumbers.innerHTML = '';
                pageNumbers.style.display = 'flex';
                pageNumbers.style.gap = '4px';

                if (totalPages > 1) {
                    for (let i = 1; i <= totalPages; i++) {
                        const pageBtn = document.createElement('button');
                        pageBtn.className = `px-3 py-2 ${i === page ? 'bg-blue-main text-white' : 'bg-gray-200 text-gray-700'} rounded hover:bg-gray-300`;
                        pageBtn.textContent = i;
                        pageBtn.style.minWidth = '40px';
                        pageBtn.onclick = () => {
                            currentPage = i;
                            showPage(currentPage);
                        };
                        pageNumbers.appendChild(pageBtn);
                    }
                }

                const paginationContainer = document.getElementById('photoPagination');
                if (totalPages > 1) {
                    paginationContainer.style.display = 'flex';
                    paginationContainer.style.justifyContent = 'center';
                    paginationContainer.style.alignItems = 'center';
                    paginationContainer.style.gap = '8px';
                } else {
                    paginationContainer.style.display = 'none';
                }
            }

            if (totalItems > 0) {
                showPage(1);
            } else {
                document.getElementById('photoPagination').style.display = 'none';
            }

            document.getElementById('photoPrevBtn').addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            document.getElementById('photoNextBtn').addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });
        });
    </script>

</body>
</html>