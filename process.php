<?php
include "includes/apis.php";
// print_r($process_____data['data'][0]['items'][1]);

// ✅ FIX: API items reverse order me de raha hai — title se "Step N" nikaal ke sort karo
$rawItems = $process_____data['data'][0]['items'] ?? [];

$processItems = $rawItems;
usort($processItems, function ($a, $b) {
    preg_match('/Step\s+(\d+)/i', $a['title'] ?? '', $aMatch);
    preg_match('/Step\s+(\d+)/i', $b['title'] ?? '', $bMatch);
    $aNum = (int)($aMatch[1] ?? 999);
    $bNum = (int)($bMatch[1] ?? 999);
    return $aNum - $bNum;
});

$totalSteps = count($processItems);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $process_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $process_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $process_data['data']['meta_keywords'] ?? "" ?>">
    <?php include "includes/head.php" ?>
</head>
<style>
    /* ============================
   STEP 4 – MOBILE SCROLL FIX
   ============================ */

/* Prevent horizontal page scroll globally */
html, body {
  max-width: 100%;
  overflow-x: hidden;
}

/* Step 4 container: allow vertical scroll */
[data-tab-content="step-4"] {
  max-width: 100%;
  overflow-x: hidden;
  overflow-y: visible;
}

/* Make ONLY the table scroll horizontally */
[data-tab-content="step-4"] table {
  display: block;
  max-width: 100%;
  width: max-content;
  min-width: 100%;
  overflow-x: auto;
  overflow-y: hidden;
  -webkit-overflow-scrolling: touch;
  overscroll-behavior-x: contain;
}

/* Prevent cells from expanding page width */
[data-tab-content="step-4"] th,
[data-tab-content="step-4"] td {
  white-space: nowrap;
}
    /* Force horizontal tabs to start from left + show partial next tab + kill bounce */
@media (max-width: 767px) {
  .mt-10.flex.justify-center.p-8.bg-\[\#003618\].overflow-x-auto {
    justify-content: flex-start !important;
    padding-left: 16px !important;
    padding-right: 80px !important;
    overflow-x: auto !important;
    -webkit-overflow-scrolling: touch !important;
    overscroll-behavior-x: none !important;
    scrollbar-width: thin;
  }

  #tab-buttons {
    justify-content: flex-start !important;
    gap: 12px !important;
  }

  .tab-btn {
    padding: 8px 16px !important;
    font-size: 14px !important;
    white-space: nowrap;
    flex: 0 0 auto !important;
  }

  .mt-10.flex.justify-center.p-8.overflow-x-auto {
    position: relative;
  }

  .mt-10.flex.justify-center.p-8.overflow-x-auto::-webkit-scrollbar {
    height: 6px;
    display: block !important;
  }
  .mt-10.flex.justify-center.p-8.overflow-x-auto::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.5);
    border-radius: 3px;
  }
}
</style>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Process
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Process
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Admission
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Admission Overview
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
                        <a href="process" class="ms-1 text-sm font-medium text-blue-main">Process</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 space-y-10 text-gray-600">
            <div>
                 <?= $process_____data['data'][0]['description'] ?? "" ?>
            </div>
            <div class="mt-10 flex justify-center  p-8 bg-[#003618] bg-no-repeat md:h-[140px] overflow-x-auto">
                <ul class="flex gap-8 items-center justify-center" id="tab-buttons">
                    <?php for ($i = 1; $i <= $totalSteps; $i++): ?>
                        <li class="tab-btn <?= $i === 1 ? 'active' : '' ?> text-[#fff] border-[1px] border-[#fff] p-[8px] px-6 cursor-pointer whitespace-nowrap rounded-[5px]"
                            data-tab="step-<?= $i ?>">Step <?= $i ?></li>
                    <?php endfor; ?>
                </ul>
            </div>

            <?php for ($i = 0; $i < $totalSteps; $i++): ?>
                <!-- Step <?= $i + 1 ?> -->
                <div class="tab-content <?= $i === 0 ? '' : 'hidden' ?>" data-tab-content="step-<?= $i + 1 ?>">
                     <?= $processItems[$i]['title'] ?? "" ?>
                     <?= $processItems[$i]['content'] ?? "" ?>

                    <?php if ($i === 1): // Step 2 ke saath form ?>
                        <div class="sm:mt-20 mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
                            <div class="relative">
                                <h2 class="text-center sm:text-[32px] text-[28px] font-[700] text-blue-main leading-9">
                                    Enquiry Form | Session 2027–2028
                                </h2>
                                <div class="mt-10">
                                    <?php
                                    $ee_form_container_id = 'ee-form-21-process';
                                    include "includes/ee-enquiry-widget.php";
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <script>
        const tabButtons = document.querySelectorAll(".tab-btn");
        const tabContents = document.querySelectorAll(".tab-content");

        tabButtons.forEach(button => {
            button.addEventListener("click", () => {
                tabButtons.forEach(btn => btn.classList.remove("active"));
                tabContents.forEach(content => content.classList.add("hidden"));

                button.classList.add("active");
                const tab = button.getAttribute("data-tab");
                document.querySelector(`[data-tab-content="${tab}"]`).classList.remove("hidden");
            });
        });
    </script>
    <script>
        // ExtraaEdge widget replaces AdmissionForm on this page
        (function() {
            function getParam(name) {
                return new URLSearchParams(window.location.search).get(name);
            }
            let source = getParam("utm_source") || document.referrer || "";
            const src = source.toLowerCase();
            if (!source) source = "Website";
            else if (src.includes("google")) source = "Google-Ads by Agency";
            else if (src.includes("facebook") || src.includes("meta")) source = "Facebook by Agency";
            else if (src.includes("instagram") || src.includes("ig")) source = "Instagram by Agency";
            else source = "Others";
            if (!sessionStorage.getItem("leadSource")) {
                sessionStorage.setItem("leadSource", source);
            }
        })();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find all custom selects
            document.querySelectorAll(".customSelects").forEach(wrapper => {
                const realSelect = wrapper.querySelector("select");
                const display = wrapper.querySelector(".selected-texts");
                const dropdown = wrapper.querySelector("div.absolute");
                const searchInput = dropdown.querySelector("input");
                const optionsList = dropdown.querySelector("ul");

                function loadOptions(filter = "") {
                    optionsList.innerHTML = "";
                    Array.from(realSelect.options).forEach(opt => {
                        if (opt.value && opt.text.toLowerCase().includes(filter.toLowerCase())) {
                            let li = document.createElement("li");
                            li.textContent = opt.text;
                            li.className = "p-2 hover:bg-gray-100 cursor-pointer";
                            li.dataset.value = opt.value;
                            optionsList.appendChild(li);
                        }
                    });
                }

                display.parentElement.addEventListener("click", () => {
                    dropdown.classList.toggle("hidden");
                    searchInput.value = "";
                    loadOptions();
                    searchInput.focus();
                });

                searchInput.addEventListener("input", () => {
                    loadOptions(searchInput.value);
                });

                optionsList.addEventListener("click", (e) => {
                    if (e.target.tagName === "LI") {
                        const value = e.target.dataset.value;
                        const text = e.target.textContent;
                        realSelect.value = value;
                        display.textContent = text;
                        dropdown.classList.add("hidden");
                    }
                });

                document.addEventListener("click", (e) => {
                    if (!wrapper.contains(e.target)) {
                        dropdown.classList.add("hidden");
                    }
                });
            });
        });
    </script>

    <?php include "includes/footer.php" ?>
    </div>


    <?php include "includes/foot.php" ?>
</body>

</html>