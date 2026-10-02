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
                                <div id="AdmissionFormPopup"
                                    class="relative mt-5  bg-green-500 text-white px-4 py-2 rounded mb-5 hidden"
                                    style="z-index:999">
                                    Form submitted successfully!
                                </div>
                                <div class="mt-10">
                                   <form id="AdmissionForm" method="post">
                                          <div class="mt-4">
                                            <select name="session" required id="asession" class="w-full border border-gray-300 p-2 rounded-md text-gray-500">
                                                <option value="" disabled selected>Enquiry For Session</option>
                                                <?php
                                                $sessions = include "includes/session-api.php";
                                                foreach ($sessions as $item):
                                                    $sess = $item['session'] ?? '';
                                                    if (empty($sess)) continue;
                                                ?>
                                                    <option value="<?= htmlspecialchars($sess) ?>">
                                                        <?= htmlspecialchars($sess) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <!-- Class selection -->
                                        <div class="mt-4">
                                            <select id="agrade" required class="w-full border p-3 rounded-md">
                                                <option value="" disabled selected>Select Grade</option>
                                                <?php
                                                    if (!empty($grades)) {

                                                    $gradeOrder = [
                                                        'P.G', 'Nursery', 'Prep',
                                                        'I', 'II', 'III', 'IV', 'V',
                                                        'VI', 'VII', 'VIII', 'IX',
                                                        'X', 'XI', 'XII'
                                                    ];

                                                    // remove duplicates
                                                    $uniqueGrades = [];
                                                    foreach ($grades as $g) {
                                                        $grade = trim($g['grades']);
                                                        if ($grade && !in_array($grade, $uniqueGrades)) {
                                                            $uniqueGrades[] = $grade;
                                                        }
                                                    }

                                                    // safe sorting
                                                    usort($uniqueGrades, function ($a, $b) use ($gradeOrder) {
                                                        $posA = array_search($a, $gradeOrder);
                                                        $posB = array_search($b, $gradeOrder);
                                                        $posA = ($posA === false) ? 999 : $posA;
                                                        $posB = ($posB === false) ? 999 : $posB;
                                                        return $posA - $posB;
                                                    });

                                                    foreach ($uniqueGrades as $gr):
                                                ?>
                                                <option value="<?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>">
                                                    <?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>
                                                </option>
                                                <?php endforeach; } else { ?>
                                                    <option value="">No grades available</option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <!-- Student name -->
                                        <div class="mt-4">
                                            <input type="text" name="student-name" id="astudent_name" placeholder="Student Name"
                                                class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                                            <span id="astudent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                                        </div>

                                        <!-- Parent name -->
                                        <div class="mt-4">
                                            <input type="text" name="parent-name" id="aparent_name" placeholder="Parents Name"
                                                class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                                            <span id="aparent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                                        </div>

                                        <!-- Mobile number -->
                                        <div class="mt-4">
                                            <input type="text" name="mobile" id="amobile" placeholder="Mobile Number" maxlength="10"
                                                class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                                            <div id="amobile-error" class="text-red-500 text-sm mt-1 hidden">Please enter valid phone number</div>
                                        </div>

                                        <!-- Email -->
                                        <div class="mt-4">
                                            <input type="text" name="email" id="aemail" placeholder="Email"
                                                class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                                            <span id="aemail-error" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address.</span>
                                        </div>

                                        <!-- City -->
                                        <div class="mt-4 relative customSelect">
                                         <select id="acity" name="city" class="hidden">
                                            <option value="">Select City</option>
                                            <?php
                                            $cities = include 'includes/get-city.php';
                                            foreach ($cities as $city):
                                                $ct = $city['name'] ?? '';
                                                if (empty($ct)) continue;
                                            ?>
                                                <option value="<?= htmlspecialchars($ct) ?>">
                                                    <?= htmlspecialchars($ct) ?>
                                                </option>
                                            <?php endforeach; ?>
                                            <?php if (empty($cities)): ?>
                                                <option value="">No cities available</option>
                                            <?php endif; ?>
                                        </select>

                                            <!-- Fake dropdown display -->
                                            <div class="border border-gray-300 p-[11px] rounded-md bg-white cursor-pointer flex justify-between items-center">
                                                <span class="selected-text text-[#808080cc]">Select City</span>
                                                <span>▼</span>
                                            </div>

                                            <!-- Dropdown options -->
                                            <div class="absolute mt-1 border border-gray-300 rounded-md bg-white shadow-md hidden z-50 w-full">
                                                <input type="text" placeholder="Search..."
                                                    class="w-full p-2 border-b border-gray-300 outline-none">
                                                <ul class="max-h-48 overflow-y-auto"></ul>
                                            </div>
                                        </div>

                                        <!-- Pincode -->
                                        <div class="mt-4">
                                            <div>
                                                <input type="text" name="pincode" id="apincode" placeholder="Pincode"
                                                    class="w-full border border-gray-300 p-[11px] rounded-md" maxlength="6" oninput="this.value=this.value.replace(/\D/g,'')" required>
                                                <span id="apincode-error" class="text-red-500 text-sm hidden">Please enter a valid Pincode.</span>
                                            </div>
                                            <!-- Terms -->
                                            <div class="mt-4 flex items-center gap-2">
                                                <input type="checkbox" id="terms" required>
                                                <label for="terms">I agree to <a href="termsandconditions"
                                                        class="text-blue-500 underline">Terms and
                                                        Conditions</a>.</label>
                                            </div>
                                            <input type="hidden" name="source" id="source">
                                            <!-- Submit -->
                                            <div class="mt-4">
                                                <button type="submit" id="AsubmitBtn"
                                                    class="p-4 bg-blue-main w-full text-white font-semibold text-[18px] rounded hover:bg-red-500 transition">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
        (function() {
            function getParam(name) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            let source = getParam("utm_source") || document.referrer || "";
            console.log("Initial Source:", source);

            const src = source.toLowerCase();

            if (!source) {
                source = "Website";
            } else if (src.includes("google")) {
                source = "Google-Ads by Agency";
                console.log("Referrer is Google, setting source to 'Google-Ads by Agency'");
            } else if (src.includes("facebook") || src.includes("meta")) {
                source = "Facebook by Agency";
            } else if (src.includes("instagram") || src.includes("ig")) {
                source = "Instagram by Agency";
            } else {
                source = "Others";
                console.log("Unrecognized platform, setting source to 'Others'");
            }

            if (!sessionStorage.getItem("leadSource")) {
                sessionStorage.setItem("leadSource", source);
            }

            const finalSource = sessionStorage.getItem("leadSource");
            const sourceInput = document.getElementById("source");

            if (sourceInput) {
                sourceInput.value = finalSource;
            }

            console.log("Captured Source:", finalSource);
        })();

        // Validation regex patterns
        const nameRegex = /^[A-Za-z\s]+$/;
        const mobileRegex = /^[6-9]\d{9}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const pincodeRegex = /^[1-9][0-9]{5}$/;

        // Error elements
        const studentError = document.getElementById("astudent-error");
        const parentError = document.getElementById("aparent-error");
        const mobileError = document.getElementById("amobile-error");
        const emailError = document.getElementById("aemail-error");
        const pincodeError = document.getElementById("apincode-error");


        document.getElementById("astudent_name").addEventListener("input", function() {
            studentError.classList.toggle("hidden", !this.value || nameRegex.test(this.value));
        });

        document.getElementById("aparent_name").addEventListener("input", function() {
            parentError.classList.toggle("hidden", !this.value || nameRegex.test(this.value));
        });

        document.getElementById("amobile").addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
            mobileError.classList.toggle("hidden", !this.value || mobileRegex.test(this.value));
        });

        document.getElementById("aemail").addEventListener("input", function() {
            this.value = this.value.toLowerCase();
            emailError.classList.toggle("hidden", !this.value || emailRegex.test(this.value));
        });

        document.getElementById("apincode").addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 6);
            pincodeError.classList.toggle("hidden", !this.value || pincodeRegex.test(this.value));
        });

        // Submit Validation
        document.getElementById("AdmissionForm").addEventListener("submit", function(e) {
            e.preventDefault();
            const AsubmitBtn = document.getElementById("AsubmitBtn");
            AsubmitBtn.disabled = true;
            AsubmitBtn.textContent = "Submitting...";
            // Inputs
            const agrade = document.getElementById("agrade").value.trim();
            const astudent_name = document.getElementById("astudent_name").value.trim();
            const aparent_name = document.getElementById("aparent_name").value.trim();
            const amobile = document.getElementById("amobile").value.trim();
            const aemail = document.getElementById("aemail").value.trim();
            const acity = document.getElementById("acity").value.trim();
            const apincode = document.getElementById("apincode").value.trim();
            const source = sessionStorage.getItem("leadSource") || "Website";
            const asession = document.getElementById("asession").value.trim();

            let isValid = true;

            if (!nameRegex.test(astudent_name)) {
                studentError.textContent = "Only letters and spaces allowed.";
                studentError.classList.remove("hidden");
                isValid = false;
            }

            if (!nameRegex.test(aparent_name)) {
                parentError.textContent = "Only letters and spaces allowed.";
                parentError.classList.remove("hidden");
                isValid = false;
            }

            if (!mobileRegex.test(amobile)) {
                mobileError.classList.remove("hidden");
                isValid = false;
            }

            if (!emailRegex.test(aemail)) {
                emailError.classList.remove("hidden");
                isValid = false;
            }

            if (!pincodeRegex.test(apincode)) {
                pincodeError.classList.remove("hidden");
                isValid = false;
            }

            if (!isValid) {
                AsubmitBtn.disabled = false;
                AsubmitBtn.textContent = "Submit";
                return;
            }

            // API Payload
            const payload = {
                session: asession,
                grade: agrade,
                name: astudent_name,
                parent_name: aparent_name,
                phone: amobile,
                email: aemail,
                city: acity,
                pincode: apincode,
                source: source,
                source_type: "Website",
                enquiry_type: "Digital",
                message: "This Message From DPS Unnao Website",
                subject: "Admission Enquiry",
                branch_id: 8,
                school_id: 1,
                language_id: 1
            };

            fetch(`proxy/admission-proxy`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(payload)
                })
                .then(response => {
                    if (!response.ok) throw new Error("Error: " + response.statusText);
                    return response.json();
                })
                .then(data => {
                    document.getElementById("AdmissionFormPopup").classList.remove("hidden");
                    setTimeout(() => {
                        document.getElementById("AdmissionFormPopup").classList.add("hidden");
                    }, 3000);
                    document.getElementById("AdmissionForm").reset();
                })
                .catch(error => {
                    alert("There was an error submitting the form.");
                    console.error("Error:", error);
                })
                .finally(() => {
                    AsubmitBtn.disabled = false;
                    AsubmitBtn.textContent = "Submit";
                });
        });
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