<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $faculty_list_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $faculty_list_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $faculty_list_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($faculty_list_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($faculty_list_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">About Us
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Faculty
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
                        <a href="faculty-list" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($faculty_list_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">

            <div class="overflow-x-auto mt-6">
                <?= $faculty_list_data['data']['sections'][1]['content'] ?? '' ?>
                <!-- <table class="min-w-full border border-gray-300 rounded-lg shadow-md">
                    <thead class="bg-blue-main">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300 text-left text-white font-semibold">S.No.</th>
                            <th class="px-4 py-2 border border-gray-300 text-left text-white font-semibold">Information
                            </th>
                            <th class="px-4 py-2 border border-gray-300 text-left text-white font-semibold">Details</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">1</td>
                            <td class="px-4 py-2 border border-gray-300">Principal</td>
                            <td class="px-4 py-2 border border-gray-300">Ms. Niti Khanna</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">2</td>
                            <td class="px-4 py-2 border border-gray-300">Head Mistress</td>
                            <td class="px-4 py-2 border border-gray-300">Ms. Hena Mushtaq</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">3</td>
                            <td class="px-4 py-2 border border-gray-300">Total No. of Teachers</td>
                            <td class="px-4 py-2 border border-gray-300">
                                <div class="space-y-1">
                                    <p>91</p>
                                    <p>PGT: 14</p>
                                    <p>TGT: 19</p>
                                    <p>PRT: 34</p>
                                    <p>PPRT: 16</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">4</td>
                            <td class="px-4 py-2 border border-gray-300">Co-ordinators</td>
                            <td class="px-4 py-2 border border-gray-300">6</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">5</td>
                            <td class="px-4 py-2 border border-gray-300">Teachers Section Ratio</td>
                            <td class="px-4 py-2 border border-gray-300">20:01</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">6</td>
                            <td class="px-4 py-2 border border-gray-300">Details of Special Educator</td>
                            <td class="px-4 py-2 border border-gray-300">Mohd. Haris</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">7</td>
                            <td class="px-4 py-2 border border-gray-300">Details of Counsellor and Wellness Teacher</td>
                            <td class="px-4 py-2 border border-gray-300">Ms. Kritima Jaitly</td>
                        </tr>
                    </tbody>
                </table> -->
            </div>


            <!-- <div class="mt-8">
                <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">ACADEMIC STAFF 2025-2026</h2>
                <div class="overflow-x-auto max-h-[600px] overflow-y-scroll border rounded-lg shadow-md">
                    <table class="min-w-full border border-gray-300 text-sm">
                        <thead class="bg-blue-main sticky top-0 ">
                            <tr>
                                <th class="px-3 py-2 border border-gray-300 text-left font-semibold text-white">S.
                                    No.</th>
                                <th class="px-3 py-2 border border-gray-300 text-left font-semibold text-white">
                                    Teacher's Name</th>
                                <th class="px-3 py-2 border border-gray-300 text-left font-semibold text-white">
                                    Designation</th>
                                <th class="px-3 py-2 border border-gray-300 text-left font-semibold text-white">
                                    Education Qualification</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">1</td>
                                <td class="px-3 py-2 border border-gray-300">Niti Khanna</td>
                                <td class="px-3 py-2 border border-gray-300">Principal</td>
                                <td class="px-3 py-2 border border-gray-300">M.H .Sc.(Ext. Ed.), B.Ed., NTT</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">2</td>
                                <td class="px-3 py-2 border border-gray-300">Hena Mushtaq</td>
                                <td class="px-3 py-2 border border-gray-300">Head Mistress</td>
                                <td class="px-3 py-2 border border-gray-300">M.A. English Literature, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">3</td>
                                <td class="px-3 py-2 border border-gray-300">Nusrat Bano</td>
                                <td class="px-3 py-2 border border-gray-300">Co-ordinator</td>
                                <td class="px-3 py-2 border border-gray-300">M.A. (English Literature), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">4</td>
                                <td class="px-3 py-2 border border-gray-300">Faiza Abbasi</td>
                                <td class="px-3 py-2 border border-gray-300">Co-ordinator</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc., B.Ed., M.Sc. (Pursuing)</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">5</td>
                                <td class="px-3 py-2 border border-gray-300">Tooba Khanum</td>
                                <td class="px-3 py-2 border border-gray-300">Co-ordinator</td>
                                <td class="px-3 py-2 border border-gray-300">M.Com., B.Ed, CCC</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">6</td>
                                <td class="px-3 py-2 border border-gray-300">Nisha Lalwani</td>
                                <td class="px-3 py-2 border border-gray-300">Co-ordinator</td>
                                <td class="px-3 py-2 border border-gray-300">B.A., PGDBA, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">7</td>
                                <td class="px-3 py-2 border border-gray-300">Sana Shabbir</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Com, B.Ed., Pursuing M.Com</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">8</td>
                                <td class="px-3 py-2 border border-gray-300">Angela Jaiswal</td>
                                <td class="px-3 py-2 border border-gray-300">Co-ordinator</td>
                                <td class="px-3 py-2 border border-gray-300">B.Com, M.A. English, ECE, CCO, O Level,
                                    B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">9</td>
                                <td class="px-3 py-2 border border-gray-300">Monika Verma</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Drawing and Painting), B.Ed., IGD,
                                    Sangeet Prabhakar</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">10</td>
                                <td class="px-3 py-2 border border-gray-300">Fareha Zaheer</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.- Organic Chemistry, B.Ed., Pursuing
                                    Ph.D.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">10</td>
                                <td class="px-3 py-2 border border-gray-300">Fareha Zaheer</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.- Organic Chemistry, B.Ed., Pursuing
                                    Ph.D.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">11</td>
                                <td class="px-3 py-2 border border-gray-300">Roma Mishra</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.- Dance Master in Classical dance
                                    (Kathak) "PRAVEEN"</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">12</td>
                                <td class="px-3 py-2 border border-gray-300">Shubham Tripathi</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.-History, B.Ed., C.TER, Pursuing M.Sc.
                                    Geography</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">13</td>
                                <td class="px-3 py-2 border border-gray-300">Ankit Dwivedi</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc. - Maths, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">14</td>
                                <td class="px-3 py-2 border border-gray-300">Rohan Kariya</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Com., B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">15</td>
                                <td class="px-3 py-2 border border-gray-300">Brajendra Singh</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc. - Physics, B.Tech, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">16</td>
                                <td class="px-3 py-2 border border-gray-300">Naziya Rasheed</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc. - Microbiology, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">17</td>
                                <td class="px-3 py-2 border border-gray-300">Ankur Triwedi</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Hindi), B.Ed., UPTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">18</td>
                                <td class="px-3 py-2 border border-gray-300">Sandeep Yadav</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.P.Ed., Ph.D.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">19</td>
                                <td class="px-3 py-2 border border-gray-300">Arvind Kumar Sharma</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A. Economics, PGDCA., B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">20</td>
                                <td class="px-3 py-2 border border-gray-300">Arun Kumar Patel</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A., B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">21</td>
                                <td class="px-3 py-2 border border-gray-300">Shalini Shukla</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Music), NET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">22</td>
                                <td class="px-3 py-2 border border-gray-300">Purnima Tiwari</td>
                                <td class="px-3 py-2 border border-gray-300">PGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A. Economics, MCA, PGDCA, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">23</td>
                                <td class="px-3 py-2 border border-gray-300">Avantika Mishra</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Com, Diploma in French, Pursuing B.Ed.
                                </td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">24</td>
                                <td class="px-3 py-2 border border-gray-300">Manisha Dixit</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc., B.Ed., CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">25</td>
                                <td class="px-3 py-2 border border-gray-300">Yusrah Waqar</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc., B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">26</td>
                                <td class="px-3 py-2 border border-gray-300">Mamta Narayan</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A (Hindi), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">27</td>
                                <td class="px-3 py-2 border border-gray-300">Meera Dixit</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc., B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">28</td>
                                <td class="px-3 py-2 border border-gray-300">Namrata Gupta</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Psychology & Geography), B.Ed.,
                                    Counselling Course</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">29</td>
                                <td class="px-3 py-2 border border-gray-300">Navin Kumar</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc. (Physics Hons.), B.Ed., M.B.A
                                    (Marketing)</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">30</td>
                                <td class="px-3 py-2 border border-gray-300">Arpit Tiwari</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">B.C.A, M.A., B.Ed., BTC & UPTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">31</td>
                                <td class="px-3 py-2 border border-gray-300">Mariya Zulfiqar</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A Economics, B.Ed., CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">32</td>
                                <td class="px-3 py-2 border border-gray-300">Rahul Gupta</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">BCA, MCA, B.Ed., CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">33</td>
                                <td class="px-3 py-2 border border-gray-300">Sonia Kakkar</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A. Education, B.Ed., Fashion Designer
                                </td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">34</td>
                                <td class="px-3 py-2 border border-gray-300">Vikram Singh</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc, B.Ed., CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">35</td>
                                <td class="px-3 py-2 border border-gray-300">Anupama Singh</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A. (English), BTC, Pursuing B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">36</td>
                                <td class="px-3 py-2 border border-gray-300">Jyoti Srivastava</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A (Psychology), B.Ed., U.P TET, CTET, PG
                                    Diploma in Counseling</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">37</td>
                                <td class="px-3 py-2 border border-gray-300">Manish Tripathi</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Com, L.L.B, Sangeet Prabhakar</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">38</td>
                                <td class="px-3 py-2 border border-gray-300">Pranjay Srivastava</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc., DGWA</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">39</td>
                                <td class="px-3 py-2 border border-gray-300">Nikhil Nishad</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">40</td>
                                <td class="px-3 py-2 border border-gray-300">Ayush Nishad</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">B.A, Kings United Dance Academy course</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">41</td>
                                <td class="px-3 py-2 border border-gray-300">Purnima Bajpai</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Hindi), B.A. Hons.(Sanskrit), B.Lib.,
                                    B.Ed., N.T.T</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">42</td>
                                <td class="px-3 py-2 border border-gray-300">Swati Mishra</td>
                                <td class="px-3 py-2 border border-gray-300">TGT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(History), (Master of Library &
                                    Information Science)</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">43</td>
                                <td class="px-3 py-2 border border-gray-300">Sana Zehra</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Com., M.Ed, CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">44</td>
                                <td class="px-3 py-2 border border-gray-300">Meenakshi Mishra</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A. (Economics), B.Ed., CTET, NTT</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">45</td>
                                <td class="px-3 py-2 border border-gray-300">Tanya Mishra</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc. Biotechnology, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">46</td>
                                <td class="px-3 py-2 border border-gray-300">Ayushi Mishra</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc. Chemistry, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">47</td>
                                <td class="px-3 py-2 border border-gray-300">Arshi Parveen</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A, B.Ed., CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">48</td>
                                <td class="px-3 py-2 border border-gray-300">Fakhra Khan</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc., B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">49</td>
                                <td class="px-3 py-2 border border-gray-300">Pratibha Ojha</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc.(Hons), BTC, M.Sc.(Pursuing)</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">50</td>
                                <td class="px-3 py-2 border border-gray-300">Nagma Khan</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A. (Urdu), B.Ed., UPTET, CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">51</td>
                                <td class="px-3 py-2 border border-gray-300">Rashmi Sharma</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Economics), B.Ed., CTET, UPTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">52</td>
                                <td class="px-3 py-2 border border-gray-300">Bushra Khan</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(English), B.Ed., CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">53</td>
                                <td class="px-3 py-2 border border-gray-300">Khushboo Gupta</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.(Botany), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">54</td>
                                <td class="px-3 py-2 border border-gray-300">Nazish Parveen</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Education), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">55</td>
                                <td class="px-3 py-2 border border-gray-300">Shivani Singh</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.(Mathematics), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">56</td>
                                <td class="px-3 py-2 border border-gray-300">Neetu Kumari</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.(Zoology), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">57</td>
                                <td class="px-3 py-2 border border-gray-300">Meenu Sharma</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Political Science), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">58</td>
                                <td class="px-3 py-2 border border-gray-300">Nishat Fatima</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(English), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">59</td>
                                <td class="px-3 py-2 border border-gray-300">Nida Tabassum</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">B.A.(English), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">60</td>
                                <td class="px-3 py-2 border border-gray-300">Priyanka Gupta</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Economics), B.Ed., CTET</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">61</td>
                                <td class="px-3 py-2 border border-gray-300">Anita Yadav</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Hindi), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">62</td>
                                <td class="px-3 py-2 border border-gray-300">Ritu Sinha</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.(Chemistry), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">63</td>
                                <td class="px-3 py-2 border border-gray-300">Simran Arora</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(English), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">64</td>
                                <td class="px-3 py-2 border border-gray-300">Shabnam Parveen</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Education), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">65</td>
                                <td class="px-3 py-2 border border-gray-300">Tanuja Mishra</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(History), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">66</td>
                                <td class="px-3 py-2 border border-gray-300">Kanika Sharma</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc.(Maths), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">67</td>
                                <td class="px-3 py-2 border border-gray-300">Razia Sultan</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Political Science), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">68</td>
                                <td class="px-3 py-2 border border-gray-300">Geeta Rani</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Hindi), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">69</td>
                                <td class="px-3 py-2 border border-gray-300">Shweta Verma</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.(Physics), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">70</td>
                                <td class="px-3 py-2 border border-gray-300">Ayesha Khan</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(English), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">71</td>
                                <td class="px-3 py-2 border border-gray-300">Pooja Sharma</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">B.A., B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">72</td>
                                <td class="px-3 py-2 border border-gray-300">Rashmi Gupta</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Com, B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">73</td>
                                <td class="px-3 py-2 border border-gray-300">Shalini Singh</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Geography), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">74</td>
                                <td class="px-3 py-2 border border-gray-300">Nidhi Agarwal</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">B.Sc.(Biology), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">75</td>
                                <td class="px-3 py-2 border border-gray-300">Anjum Ara</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Urdu), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">76</td>
                                <td class="px-3 py-2 border border-gray-300">Kirti Verma</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Economics), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">77</td>
                                <td class="px-3 py-2 border border-gray-300">Rekha Yadav</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(History), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">78</td>
                                <td class="px-3 py-2 border border-gray-300">Sangeeta Rai</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Hindi), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">79</td>
                                <td class="px-3 py-2 border border-gray-300">Farah Naaz</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(English), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">80</td>
                                <td class="px-3 py-2 border border-gray-300">Deepa Rawat</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.(Maths), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">81</td>
                                <td class="px-3 py-2 border border-gray-300">Ritu Chauhan</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(English), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">82</td>
                                <td class="px-3 py-2 border border-gray-300">Shabana Parveen</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Political Science), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">83</td>
                                <td class="px-3 py-2 border border-gray-300">Anita Kumari</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Hindi), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">84</td>
                                <td class="px-3 py-2 border border-gray-300">Sunita Sharma</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Sociology), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">85</td>
                                <td class="px-3 py-2 border border-gray-300">Farzana Khan</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(English), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">86</td>
                                <td class="px-3 py-2 border border-gray-300">Seema Mishra</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Economics), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">87</td>
                                <td class="px-3 py-2 border border-gray-300">Heena Khan</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.(Physics), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">88</td>
                                <td class="px-3 py-2 border border-gray-300">Shweta Pandey</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(History), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">89</td>
                                <td class="px-3 py-2 border border-gray-300">Kiran Bala</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.Sc.(Zoology), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">90</td>
                                <td class="px-3 py-2 border border-gray-300">Anjali Gupta</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(Geography), B.Ed.</td>
                            </tr>
                            <tr>
                                <td class="px-3 py-2 border border-gray-300">91</td>
                                <td class="px-3 py-2 border border-gray-300">Meena Kumari</td>
                                <td class="px-3 py-2 border border-gray-300">PRT</td>
                                <td class="px-3 py-2 border border-gray-300">M.A.(English), B.Ed.</td>
                            </tr>




                        </tbody>
                    </table>
                </div>

            </div> -->
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>