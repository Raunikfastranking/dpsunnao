<?php
include "includes/apis.php";

// Sort magazine/newsletter items newest first — safe version
if (!empty($photo_gallery_data['data']) && is_array($photo_gallery_data['data'])) {
    usort($photo_gallery_data['data'], function ($a, $b) {
        $getTimestamp = function ($item) {
            foreach (['date', 'created_at'] as $key) {
                $value = $item[$key] ?? null;
                if (empty($value) || $value === '0000-00-00' || $value === '0000-00-00 00:00:00') {
                    continue;
                }
                $ts = strtotime($value);
                if ($ts !== false) {
                    return $ts;
                }
            }
            // Invalid/missing date → treat as very old (goes to end)
            return 0;
        };

        $tsA = $getTimestamp($a);
        $tsB = $getTimestamp($b);

        // Newest first
        return $tsB <=> $tsA;
    });
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($magazines_newsletter_data['data']['title'] ?? "Magazines and Newsletter") ?></title>
    <meta name="description" content="<?= htmlspecialchars($magazines_newsletter_data['data']['meta_description'] ?? "") ?>">
    <meta name="keywords" content="<?= htmlspecialchars($magazines_newsletter_data['data']['meta_keywords'] ?? "") ?>">
    <?php include "includes/head.php" ?>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative mb-[120px]">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= htmlspecialchars(strip_tags($magazines_newsletter_data['data']['sections'][0]['content_heading'] ?? 'Magazines and Newsletter')) ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= htmlspecialchars(strip_tags($magazines_newsletter_data['data']['sections'][0]['content_heading'] ?? 'Magazines and Newsletter')) ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse ol-overflow">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Gallery</p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="magazine" class="ms-1 sm:text-sm text-xs font-medium text-blue-main">
                            Magazines and Newsletter
                        </a>
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
                            $foundAny = false;
                            if (!empty($photo_gallery_data['data'])) {
                                foreach ($photo_gallery_data['data'] as $data) {
                                    if (
                                        isset($data['gallery_type']) &&
                                        strtolower($data['gallery_type']) === 'gallery' &&
                                        isset($data['gallery_sub_type']['sub_type_name']) &&
                                        $data['gallery_sub_type']['sub_type_name'] === 'magazine_newsletter_muse'
                                    ) {
                                        $foundAny = true;

                                        // Safe date handling for display
                                        $rawDate = null;
                                        foreach (['date', 'created_at'] as $key) {
                                            $value = $data[$key] ?? null;
                                            if (!empty($value) && $value !== '0000-00-00' && $value !== '0000-00-00 00:00:00') {
                                                $ts = strtotime($value);
                                                if ($ts !== false) {
                                                    $rawDate = $value;
                                                    break;
                                                }
                                            }
                                        }

                                        $day   = $rawDate ? date("d", strtotime($rawDate)) : '';
                                        $month = $rawDate ? date("M", strtotime($rawDate)) : '';
                                        $year  = $rawDate ? date("Y", strtotime($rawDate)) : '—';

                                        $image = $data['media'][0]['media_url'] ?? 'https://via.placeholder.com/400x300?text=No+Image';
                                        ?>
                                        <div class="gallery-item w-[100%] mx-auto bg-white border border-gray-200 rounded-lg shadow hover:shadow-[rgba(0,0,0,0.15)_0px_15px_25px,rgba(0,0,0,0.05)_0px_5px_10px] transition-shadow duration-300"
                                             data-title="<?= htmlspecialchars(strip_tags(trim($data['heading'] ?? ''))) ?>"
                                             data-category="<?= htmlspecialchars($data['gallery_type'] ?? 'Gallery') ?>"
                                             data-year="<?= htmlspecialchars($year) ?>">

                                            <a href="gallery-detail?id=<?= urlencode($data['id'] ?? '') ?>">
                                                <img class="rounded-t-lg w-full h-[200px] object-cover"
                                                     src="<?= htmlspecialchars($image) ?>"
                                                     alt="<?= htmlspecialchars($data['heading'] ?? 'Magazine/Newsletter') ?>">
                                            </a>

                                            <div class="sm:p-4 p-1 flex flex-col justify-between relative">
                                                <a href="gallery-detail?id=<?= urlencode($data['id'] ?? '') ?>">
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
                                                                <?= htmlspecialchars(strip_tags($data['heading'] ?? 'Untitled')) ?>
                                                            </div>
                                                            <hr>
                                                            <div class="flex gap-2 text-[9px] text-[#3B3B3B] m-2">
                                                                <div>Category: <strong><?= htmlspecialchars(ucfirst($data['gallery_type'] ?? 'Gallery')) ?></strong></div>
                                                                <div>Total Photo(s): <strong><?= count($data['media'] ?? []) ?></strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="gallery-detail?id=<?= urlencode($data['id'] ?? '') ?>">
                                                    <button class="group py-1 px-4 sm:px-6 rounded-[10px] w-full border border-gray text-blue-main hover:text-white hover:bg-[#003618] flex gap-2 items-center justify-center mt-5">
                                                        View More
                                                        <svg class="w-[14px] h-[10px] fill-[#223B71] group-hover:fill-white" width="8" height="9" viewBox="0 0 8 9" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.65008 0.911564C6.9831 0.911564 7.25307 1.18153 7.25307 1.51456L7.25307 6.63112C7.25307 6.96414 6.9831 7.23411 6.65008 7.23411C6.31705 7.23411 6.04708 6.96414 6.04708 6.63112L6.04708 2.97031L1.10714 7.91026C0.871652 8.14574 0.489858 8.14574 0.254375 7.91026C0.0188919 7.67477 0.018892 7.29298 0.254376 7.0575L5.19432 2.11755L1.53352 2.11755C1.20049 2.11755 0.930523 1.84758 0.930523 1.51456C0.930523 1.18153 1.20049 0.911564 1.53352 0.911564L6.65008 0.911564Z"></path>
                                                        </svg>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            }

                            if (!$foundAny) {
                                echo '<p class="col-span-full text-center text-gray-500 py-10">No magazines or newsletters available at this time.</p>';
                            }
                            ?>
                        </div>

                        <p id="noResults" class="hidden text-center text-gray-500 mt-4 text-sm sm:text-base">
                            No matching magazines or newsletters found.
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
            // Tabs activation
            const tabLinks = document.querySelectorAll('.tab-link');
            const tabPanels = document.querySelectorAll('.tab-panel');

            if (tabLinks.length > 0) {
                tabLinks.forEach(link => {
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        const targetId = link.getAttribute('href').substring(1);

                        tabPanels.forEach(p => {
                            p.classList.add('hidden');
                            p.setAttribute('aria-hidden', 'true');
                        });
                        document.getElementById(targetId)?.classList.remove('hidden');
                        document.getElementById(targetId)?.setAttribute('aria-hidden', 'false');

                        tabLinks.forEach(l => {
                            l.classList.remove('active');
                            l.setAttribute('aria-selected', 'false');
                        });
                        link.classList.add('active');
                        link.setAttribute('aria-selected', 'true');
                    });
                });

                // Activate first tab
                tabLinks[0].click();
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
        });
    </script>

</body>
</html>