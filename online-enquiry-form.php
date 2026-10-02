<?php 
include "includes/apis.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $online_enquiry_form['data']['title'] ?? "DPS Bareilly" ?></title>
</head>
<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="sm:mt-20 mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
            <div class="relative">
                <h2 class="text-center sm:text-[32px] text-[28px] font-[700] text-blue-main leading-9">
                    Enquiry Form | Session 2026–2027
                </h2>
                
                <div id="AdmissionFormPopup" class="relative mt-5 bg-green-500 text-white px-4 py-2 rounded mb-5 hidden" style="z-index:999">
                    Form submitted successfully!
                </div>

                <div class="my-10">
                    <form id="AdmissionForm" method="post">
                        <div class="mt-4">
                            <select name="session" required id="asession" class="w-full border border-gray-300 p-2 rounded-md text-gray-500">
                                <option value="" disabled selected>Enquiry For Session</option>
                                <?php
                                $sessions = include "includes/session-api.php";
                                $uniqueSessions = array_unique(array_column($sessions, 'session'));
                                sort($uniqueSessions);
                                foreach ($uniqueSessions as $sess):
                                    if (empty(trim($sess))) continue;
                                ?>
                                    <option value="<?= htmlspecialchars($sess) ?>"><?= htmlspecialchars($sess) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- GRADE DROPDOWN with custom sorting for DPS Unnao -->
                        <div class="mt-4">
                            <select name="class-selection" id="agrade" required class="w-full border border-gray-300 p-[11px] rounded-md text-[#808080cc]">
                                <option value="" disabled selected>Select Grade</option>
                                <?php
                                $grades = include 'includes/grade-api.php';
                                if (!empty($grades)):
                                    // Get unique grade names
                                    $uniqueGrades = array_unique(array_column($grades, 'grades'));
                                    
                                    // Desired order for DPS Unnao
                                    $gradeOrder = [
                                        'P.G', 'Nursery', 'Prep',
                                        'I', 'II', 'III', 'IV', 'V',
                                        'VI', 'VII', 'VIII', 'IX',
                                        'X', 'XI'
                                    ];
                                    
                                    // Sort unique grades according to $gradeOrder
                                    usort($uniqueGrades, function ($a, $b) use ($gradeOrder) {
                                        $posA = array_search($a, $gradeOrder);
                                        $posB = array_search($b, $gradeOrder);
                                        // Grades not in the list go to the end
                                        $posA = ($posA === false) ? 999 : $posA;
                                        $posB = ($posB === false) ? 999 : $posB;
                                        return $posA - $posB;
                                    });
                                    
                                    foreach ($uniqueGrades as $gr):
                                        if (empty(trim($gr))) continue;
                                ?>
                                    <option value="<?= htmlspecialchars($gr) ?>"><?= htmlspecialchars($gr) ?></option>
                                <?php endforeach; endif; ?>
                            </select>
                        </div>

                        <div class="mt-4">
                            <input type="text" name="student-name" id="astudent_name" placeholder="Student Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                            <span id="astudent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>

                        <div class="mt-4">
                            <input type="text" name="parent-name" id="aparent_name" placeholder="Parents Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aparent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>

                        <div class="mt-4">
                            <input type="text" name="mobile" id="amobile" placeholder="Mobile Number" maxlength="10" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <div id="amobile-error" class="text-red-500 text-sm mt-1 hidden">Please enter valid phone number</div>
                        </div>

                        <div class="mt-4">
                            <input type="text" name="email" id="aemail" placeholder="Email" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aemail-error" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address.</span>
                        </div>

                        <div class="mt-4 relative customSelect">
                            <select id="acity" name="city" class="hidden" required>
                                <option value="">Select City</option>
                                <?php
                                $cities = include 'includes/get-city.php';
                                if (!empty($cities)):
                                    $uniqueCities = array_unique(array_column($cities, 'name'));
                                    sort($uniqueCities);
                                    foreach ($uniqueCities as $ct):
                                ?>
                                    <option value="<?= htmlspecialchars($ct) ?>"><?= htmlspecialchars($ct) ?></option>
                                <?php endforeach; endif; ?>
                            </select>

                            <div class="border border-gray-300 p-[11px] rounded-md bg-white cursor-pointer flex justify-between items-center" id="cityDisplay">
                                <span class="selected-text text-[#808080cc]">Select City</span>
                                <span>▼</span>
                            </div>

                            <div class="absolute mt-1 border border-gray-300 rounded-md bg-white shadow-md hidden z-50 w-full" id="cityDropdown">
                                <input type="text" placeholder="Search..." class="w-full p-2 border-b border-gray-300 outline-none" id="citySearch">
                                <ul class="max-h-48 overflow-y-auto" id="cityList"></ul>
                            </div>
                        </div>

                        <div class="mt-4">
                            <input type="text" name="pincode" id="apincode" placeholder="Pincode" class="w-full border border-gray-300 p-[11px] rounded-md" maxlength="6" required>
                            <span id="apincode-error" class="text-red-500 text-sm hidden">Please enter a valid Pincode.</span>
                        </div>

                        <div class="mt-4 flex items-center gap-2">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">I agree to <a href="termsandconditions" class="text-blue-500 underline">Terms and Conditions</a></label>
                        </div>

                        <input type="hidden" name="source" id="source">
                        <div class="my-4">
                            <button type="submit" id="AsubmitBtn" class="p-4 bg-blue-main w-full text-white font-semibold text-[18px] rounded hover:bg-red-500 transition">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>

    <script>
        // --- 1. UTMS & Source Handling ---
        (function() {
            function getParam(name) {
                return new URLSearchParams(window.location.search).get(name);
            }
            let source = getParam("utm_source") || document.referrer || "Website";
            const src = source.toLowerCase();
            if (src.includes("google")) source = "Google-Ads by Agency";
            else if (src.includes("facebook") || src.includes("meta")) source = "Facebook by Agency";
            else if (src.includes("instagram") || src.includes("ig")) source = "Instagram by Agency";
            
            if (!sessionStorage.getItem("leadSource")) sessionStorage.setItem("leadSource", source);
            document.getElementById("source").value = sessionStorage.getItem("leadSource");
        })();

        // --- 2. Custom City Dropdown Logic ---
        const cityDisplay = document.getElementById('cityDisplay');
        const cityDropdown = document.getElementById('cityDropdown');
        const citySearch = document.getElementById('citySearch');
        const cityList = document.getElementById('cityList');
        const hiddenCitySelect = document.getElementById('acity');
        const selectedText = cityDisplay.querySelector('.selected-text');

        // Populate the fake list from the unique PHP options
        Array.from(hiddenCitySelect.options).forEach(option => {
            if (option.value === "") return;
            const li = document.createElement('li');
            li.className = "p-2 hover:bg-gray-100 cursor-pointer text-sm";
            li.textContent = option.text;
            li.onclick = () => {
                hiddenCitySelect.value = option.value;
                selectedText.textContent = option.text;
                selectedText.classList.remove('text-[#808080cc]');
                cityDropdown.classList.add('hidden');
            };
            cityList.appendChild(li);
        });

        cityDisplay.onclick = () => cityDropdown.classList.toggle('hidden');
        citySearch.oninput = (e) => {
            const filter = e.target.value.toLowerCase();
            cityList.querySelectorAll('li').forEach(li => {
                li.style.display = li.textContent.toLowerCase().includes(filter) ? "" : "none";
            });
        };

        // Close dropdown when clicking outside
        window.onclick = (e) => {
            if (!cityDisplay.contains(e.target) && !cityDropdown.contains(e.target)) {
                cityDropdown.classList.add('hidden');
            }
        };

        // --- 3. Form Validation & Submission ---
        const nameRegex = /^[A-Za-z\s]+$/;
        const mobileRegex = /^[6-9]\d{9}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const pincodeRegex = /^[1-9][0-9]{5}$/;

        document.getElementById("AdmissionForm").addEventListener("submit", function(e) {
            e.preventDefault();
            
            const btn = document.getElementById("AsubmitBtn");
            const studentName = document.getElementById("astudent_name").value.trim();
            const parentName = document.getElementById("aparent_name").value.trim();
            const mobile = document.getElementById("amobile").value.trim();
            const email = document.getElementById("aemail").value.trim();
            const pincode = document.getElementById("apincode").value.trim();
            const city = hiddenCitySelect.value;

            // Simple validation check
            if(!nameRegex.test(studentName) || !mobileRegex.test(mobile) || city === "") {
                alert("Please check all fields (Name, Mobile, and City are required).");
                return;
            }

            btn.disabled = true;
            btn.textContent = "Submitting...";

            const payload = {
                session: document.getElementById("asession").value,
                grade: document.getElementById("agrade").value,
                name: studentName,
                parent_name: parentName,
                phone: mobile,
                email: email,
                city: city,
                pincode: pincode,
                source: document.getElementById("source").value,
                source_type: "Website",
                enquiry_type: "Digital",
                message: "This Message From DPS Website",
                subject: "Admission Enquiry",
                branch_id: 8,
                school_id: 1,
                language_id: 1
            };

            fetch(`proxy/admission-proxy`, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(payload)
            })
            .then(res => res.json())
            .then(data => {
                document.getElementById("AdmissionFormPopup").classList.remove("hidden");
                document.getElementById("AdmissionForm").reset();
                selectedText.textContent = "Select City";
                setTimeout(() => document.getElementById("AdmissionFormPopup").classList.add("hidden"), 10000);
            })
            .catch(err => alert("Submission failed. Check your internet or proxy."))
            .finally(() => {
                btn.disabled = false;
                btn.textContent = "Submit";
            });
        });
    </script>
</body>
</html>