<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $CB_program_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $CB_program_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $CB_program_data['data']['meta_keywords'] ?? '' ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($CB_program_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($CB_program_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
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
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 text-xs sm:text-sm font-medium text-blue-main">Mandatory Public Disclosure</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="capacity-dev-prog" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($CB_program_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="max-w-full mx-auto my-10">
    <!-- <h1 class="text-2xl md:text-3xl font-bold mb-4 text-center text-blue-main">STAFF WEBINARS/SEMINARS/WORKSHOPS</h1>
    <p class="text-center text-sm md:text-base text-gray-600 mb-6">(April 2024 - March 2025)</p> -->
    <div class="overflow-x-auto  bg-white">
      <?= $CB_program_data['data']['sections'][1]['content'] ?? '' ?>
      <!-- <table class="min-w-full border border-gray-300 text-sm md:text-base">
        <thead class="bg-blue-main text-white">
          <tr>
            <th class="border px-3 py-2 text-left">Date</th>
            <th class="border px-3 py-2 text-left">Topic of Training/Workshop/Seminar</th>
            <th class="border px-3 py-2 text-left">Organizer</th>
            <th class="border px-3 py-2 text-left">Resource Person</th>
            <th class="border px-3 py-2 text-left">Attended By</th>
          </tr>
        </thead>
        <tbody >

          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">(April 2024 - March 2025)</td>
            <td class="border px-3 py-2"></td>
            <td class="border px-3 py-2"></td>
            <td class="border px-3 py-2"></td>
            <td class="border px-3 py-2"></td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">Date</td>
            <td class="border px-3 py-2">Topic of Training/Workshop/Seminar</td>
            <td class="border px-3 py-2">Organizer</td>
            <td class="border px-3 py-2">Resource Person</td>
            <td class="border px-3 py-2">Attended By</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">06.04.2024</td>
            <td class="border px-3 py-2">Superhouse- Grade - <br>1 &amp; 2 (Hybrid Model) Spadework Augmentation Planner
              2024-25</td>
            <td class="border px-3 py-2">Nature Nurture<br>(Offline)<br>at HO Kakadeo, Kanpur</td>
            <td class="border px-3 py-2">Ms. Shahana Hossain</td>
            <td class="border px-3 py-2">Ms. Asha Vikas Bajpai<br>Ms. Shubhangi Shukla</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">09.04.2024</td>
            <td class="border px-3 py-2">Workshop on - The teaching pedagogies of the book and also the learning outcome
              of Safety Troop.</td>
            <td class="border px-3 py-2">SEF<br>(Online)</td>
            <td class="border px-3 py-2">Ms. Yusrah Khan</td>
            <td class="border px-3 py-2">Ms. Amreen Fatima<br>Ms. Sartika Nishad</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">09.04.2024</td>
            <td class="border px-3 py-2">Learning through Art <br>Integration – Foundational Stage</td>
            <td class="border px-3 py-2">CBSE Session (Online)</td>
            <td class="border px-3 py-2">Ms. Shivani</td>
            <td class="border px-3 py-2">Ms. Asha Vikas Bajpai</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">15.04.2024</td>
            <td class="border px-3 py-2">Reading Aloud and Oral Skills</td>
            <td class="border px-3 py-2">DPSS-HRDC<br>(Online)</td>
            <td class="border px-3 py-2">Dr. Nina Hood</td>
            <td class="border px-3 py-2">Ms. Arshi Parveen</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">15.04.2024 <br>&amp;<br>16.04.2024</td>
            <td class="border px-3 py-2">Online Training Programme for Teachers</td>
            <td class="border px-3 py-2">CBSE Session (Online)</td>
            <td class="border px-3 py-2">Dr. Sehgal</td>
            <td class="border px-3 py-2">Class III Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">18.04.2024</td>
            <td class="border px-3 py-2">Learning with Oral Narratives</td>
            <td class="border px-3 py-2">DPSS-HRDC<br>(Online)</td>
            <td class="border px-3 py-2">Ms. Padmini Rangarajan</td>
            <td class="border px-3 py-2">Ms. Khushboo Kapoor</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">19.04.2024</td>
            <td class="border px-3 py-2">Creafted Expressions (Craft with Clay and Paper)</td>
            <td class="border px-3 py-2">DPSS-HRDC<br>(Online)</td>
            <td class="border px-3 py-2">Ms. Sujata Goel</td>
            <td class="border px-3 py-2">Ms. Monika Verma</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">24.04.2024<br>&amp;<br>25.04.2024</td>
            <td class="border px-3 py-2">Drama as a Communication Tool (Part 1) &amp;<br>Drama as a Communication Tool
              (Part 2)</td>
            <td class="border px-3 py-2">DPSS-HRDC<br>(Online)</td>
            <td class="border px-3 py-2">Dr. Zulfia Shaikh</td>
            <td class="border px-3 py-2">Ms. Pratibha Awasthi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">24.04.2024</td>
            <td class="border px-3 py-2">Training Session for Hindi Teachers</td>
            <td class="border px-3 py-2">CBSE Session (Online)</td>
            <td class="border px-3 py-2">Mr. Sameer Verma</td>
            <td class="border px-3 py-2">Hindi Faculty Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 1, 2024</td>
            <td class="border px-3 py-2">Assessment at the Primary Level</td>
            <td class="border px-3 py-2">DPSS-HRDC</td>
            <td class="border px-3 py-2">Professor Yukti Sharma Department of Education (CIE)</td>
            <td class="border px-3 py-2">Ms. Tooba Khanum</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 2 and 3, 2024</td>
            <td class="border px-3 py-2">Alternative Strategies of Assessment (Classes VI-XII)</td>
            <td class="border px-3 py-2">DPSS-HRDC</td>
            <td class="border px-3 py-2">Prof Arbind Kumar Jha</td>
            <td class="border px-3 py-2">Ms. Yusrah Waqar</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">05.05.2024</td>
            <td class="border px-3 py-2">Multidimensional Perspectives to Assessments </td>
            <td class="border px-3 py-2">IGNOU</td>
            <td class="border px-3 py-2">Prof. Pranati Panda</td>
            <td class="border px-3 py-2">Mr.Arpit Tiwari</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 6, 2024 </td>
            <td class="border px-3 py-2">Formative Assessment – Process of Transformation</td>
            <td class="border px-3 py-2">DPSS-HRDC (Online)</td>
            <td class="border px-3 py-2">Professor Pranati Panda</td>
            <td class="border px-3 py-2">Mr. Arpit Srivastava</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 7, 2024</td>
            <td class="border px-3 py-2">Competency Based Assessment</td>
            <td class="border px-3 py-2">DPSS-HRDC (Online)</td>
            <td class="border px-3 py-2">Dr. Vijayan K</td>
            <td class="border px-3 py-2">Ms. Nusrat Bano</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">08.05.2024</td>
            <td class="border px-3 py-2"> Improve Outcomes for Children Facing Challenges within NEP</td>
            <td class="border px-3 py-2">IGNOU</td>
            <td class="border px-3 py-2">Ms. Sutapa Bose</td>
            <td class="border px-3 py-2">Namrata Gupta and Ms Faiza Abbasi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 8, 2024</td>
            <td class="border px-3 py-2">Operationalizing Formative Assessment</td>
            <td class="border px-3 py-2">DPSS-HRDC (Online)</td>
            <td class="border px-3 py-2">Mr.Sutapa Bose of IGNOU</td>
            <td class="border px-3 py-2">Ms. Faiza Abassi and Ms.Namrata Gupta</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 15, 2024</td>
            <td class="border px-3 py-2">DTCs Meeting</td>
            <td class="border px-3 py-2">RO Prayagraj</td>
            <td class="border px-3 py-2">Dr. Akhilesh Singh </td>
            <td class="border px-3 py-2">Ms. Niti Khanna</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 17, 2024</td>
            <td class="border px-3 py-2">SAFAL Training cum Orientation</td>
            <td class="border px-3 py-2">CBSE RO - Prayagraj</td>
            <td class="border px-3 py-2">Ms. Shweta Singh, Mr. Mohd. Mirza</td>
            <td class="border px-3 py-2">Mr. Rahul Gupta</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 18, 2024</td>
            <td class="border px-3 py-2">Strategies to Improve Outcomes for Children Facing Challenges within NEP
              Framework</td>
            <td class="border px-3 py-2">CBSC</td>
            <td class="border px-3 py-2">Ms. Seema Sinha</td>
            <td class="border px-3 py-2">Niti Khanna, Anupama Singh, Pragati Tiwari,Rahul Gupta</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 19, 2024</td>
            <td class="border px-3 py-2">Unnao Sahodaya Schools</td>
            <td class="border px-3 py-2">USS </td>
            <td class="border px-3 py-2"></td>
            <td class="border px-3 py-2">Ms. Niti Khanna</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 19, 2024</td>
            <td class="border px-3 py-2">Coding Session Part -2</td>
            <td class="border px-3 py-2">Nature Nurture</td>
            <td class="border px-3 py-2">Mr. Surya &amp; Ms. Anubha</td>
            <td class="border px-3 py-2">Ms. Nisha Lalwani and Grade I &amp; II Faculty</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 20, 2024</td>
            <td class="border px-3 py-2">Grades I &amp; II (Hybrid)</td>
            <td class="border px-3 py-2">Nature Nurture</td>
            <td class="border px-3 py-2">Ms.Anubha / Mr.Surya     </td>
            <td class="border px-3 py-2">Class - I and II (All Teachers)</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 21, 2024</td>
            <td class="border px-3 py-2">Kindergarten</td>
            <td class="border px-3 py-2">Nature Nurture</td>
            <td class="border px-3 py-2">Ms.Anubha / Mr.Surya     </td>
            <td class="border px-3 py-2">Pre-Primary (All Teachers)</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 22 and 23, 2024</td>
            <td class="border px-3 py-2">Kindergarten</td>
            <td class="border px-3 py-2">Nature Nurture</td>
            <td class="border px-3 py-2">Ms.Anubha / Mr.Surya     </td>
            <td class="border px-3 py-2">Pre-Primary (All Teachers)</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 24, 2024</td>
            <td class="border px-3 py-2">Coding Sandpit</td>
            <td class="border px-3 py-2">Cambridge Edu Marketing</td>
            <td class="border px-3 py-2">SEF HO- Mr. Kunal</td>
            <td class="border px-3 py-2">Ms. Pragati Tiwari, Ms. Anushka Bajpai, Ms. Purnima Tiwari, Mr. Rahul Gupta
            </td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">25.05.2024</td>
            <td class="border px-3 py-2">Safety Troops Workshop</td>
            <td class="border px-3 py-2">Workshop on French @ Allen Group</td>
            <td class="border px-3 py-2">Mr. Sushant Mishra</td>
            <td class="border px-3 py-2">Ms.Amreen Fatima</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 27, 2024</td>
            <td class="border px-3 py-2">French Workshop</td>
            <td class="border px-3 py-2">Workshop on French @ Allen Group</td>
            <td class="border px-3 py-2">Mr. Sushant Mishra</td>
            <td class="border px-3 py-2">Avantika Mishra</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 27, 2024</td>
            <td class="border px-3 py-2">Phonics Training</td>
            <td class="border px-3 py-2">SLF</td>
            <td class="border px-3 py-2">Ms.Chitra Panjwani from Lucknow</td>
            <td class="border px-3 py-2">Coordinators &amp; all PP and I-II Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 28, 2024</td>
            <td class="border px-3 py-2">Hindi Workshop </td>
            <td class="border px-3 py-2">Workshop on French @ Allen Group</td>
            <td class="border px-3 py-2">Dr. Punita Pachauri</td>
            <td class="border px-3 py-2">Mamta Narayan and Ankur Trivedi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 28, 2024</td>
            <td class="border px-3 py-2">Workshop of Biology</td>
            <td class="border px-3 py-2">Organised by Super House group</td>
            <td class="border px-3 py-2">Ms.Pallavi and Mr.Shubham</td>
            <td class="border px-3 py-2">Ms. Faiza Abassi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 28, 2024</td>
            <td class="border px-3 py-2">Beyond the Textbook Innovative Teaching Techniques in Physics</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Mr.Toshi Gupta</td>
            <td class="border px-3 py-2">Navin Kumar</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 28, 2024</td>
            <td class="border px-3 py-2">Enrichment Program in Biology</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms.Pallavi and Mr.Shubham</td>
            <td class="border px-3 py-2">Faiza Abassi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 28, 2024</td>
            <td class="border px-3 py-2">Breaking Boundaries in History Education</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms.Shikha Chaturvedi</td>
            <td class="border px-3 py-2">Namrata Gupta</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 29, 2024</td>
            <td class="border px-3 py-2">English Workshop</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms.Seema Sinha</td>
            <td class="border px-3 py-2">English Faculty</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 29, 2024</td>
            <td class="border px-3 py-2">Social Science Workshop</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms.Seema Sinha</td>
            <td class="border px-3 py-2">Social Science Faculty</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 29, 2024</td>
            <td class="border px-3 py-2">NCF training </td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms. Seema Sinha</td>
            <td class="border px-3 py-2">Ms.Neha Lalwani</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 29, 2024</td>
            <td class="border px-3 py-2">Breaking boundaries in History Education </td>
            <td class="border px-3 py-2">APS School, Rooma</td>
            <td class="border px-3 py-2">Ms.Shikha Chaturvedi</td>
            <td class="border px-3 py-2">Namrata Gupta</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">May 30, 2024</td>
            <td class="border px-3 py-2">Counselling Approaches: Art as a Tool for Education</td>
            <td class="border px-3 py-2">Counselling Approches</td>
            <td class="border px-3 py-2">Ms.Aditi from Fortis</td>
            <td class="border px-3 py-2">Faiza Abbasi, Khushboo Kapoor, Nusrat Bano</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">June 07, 2024</td>
            <td class="border px-3 py-2">Cyber Threats</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Ms. Anni Kumar, HOD Computer Science, Mr.Vikas Bharti Public School, Delhi</td>
            <td class="border px-3 py-2">Faiza Abbasi, Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">June 08, 2024</td>
            <td class="border px-3 py-2">Cyber Threats</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Ms. Anni Kumar, HOD Computer Science, Mr.Vikas Bharti Public School, Delhi</td>
            <td class="border px-3 py-2">Nisha Lalwani, Rahul Gupta, Pragati Tiwari, Nisha Lalwani, Namita Seth</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">June 17, 2024</td>
            <td class="border px-3 py-2">DIKSHA ‘s HomePage and its Navigation</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Prof. Indu Kumar, Head, DICT,<br>Dr.Prachi Sharma, Senior New Delhi</td>
            <td class="border px-3 py-2">All English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">June 18, 2024</td>
            <td class="border px-3 py-2">Demystifying ‘Focus Areas’ of DIKSHA</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Prof. Indu Kumar, DICT<br>CIET, NCERT, New Delhi<br>Dr.Prachi Sharma,
              DIKSHA,<br>CIET, NCERT, New Delhi</td>
            <td class="border px-3 py-2">All English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">Jun 19, 2024</td>
            <td class="border px-3 py-2">Unlocking Educational Synergy: DIKSHA &amp; Google Classroom</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Prof. Indu Kumar, Head, DICT,<br>CIET, NCERT, New Delhi<br>Ms. Sonia Mehra
              Agarwal,<br>Haryana<br>Mr. Hemant Bhalla, GTM <br>Haryana</td>
            <td class="border px-3 py-2">All English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">June 20, 2024</td>
            <td class="border px-3 py-2">Leveraging CollabGEO tool in teaching Geometry on DIKSHA</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Mr. Guntuku Prasad<br>Scientist <br>(NIC), New Delhi<br>Ms Richa
              Tiwari,<br>Scientist (IT) (NIC), New Delhi<br>Ms. Ana Gupta,<br>Academic Consultant - DIKSHA,<br>CIET,
              NCERT, New Delhi</td>
            <td class="border px-3 py-2">All English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">June 21, 2024</td>
            <td class="border px-3 py-2">Using OS ticketing tool to raise concerns on DIKSHA</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Mr.Sanjay Varyani, General Manager,<br>Digital India Corporation(DIC),
              Delhi<br>Mr. Pathikrit Ghosh,<br>Consultant, New Delhi</td>
            <td class="border px-3 py-2">All English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">24 जून, 2024</td>
            <td class="border px-3 py-2">दीक्षाकाहोमपेजऔरनेविगेशन</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">प्रो. इंदुकुमार, प्रमुख,डीआईसीटी, सीआईईटी,डॉ. प्राची शर्मा, वरिष्ठशैक्षणिक
              सलाहकार - दीक्षा, सीआईईटी, एनसीईआरटी, नईदिल्ली</td>
            <td class="border px-3 py-2">हिंदीशिक्षक</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">25 जून 2024</td>
            <td class="border px-3 py-2">दीक्षाके &#x27;फोकसएरिया (केन्द्रीयविषयों) कीव्याख्या</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">प्रोफेसरइन्दुकुमारप्रमुख,
              डीआरसीटीसीआईईटी, एनसीआरटीनईदिल्लीडॉ. प्राचीशर्मा, वरिष्ठशैक्षणिकसलाहकार दीक्षा, सीआईईटी, एनसीईआरटी, नईदिल्ली
            </td>
            <td class="border px-3 py-2">हिंदीशिक्षक</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">26 जून 2024</td>
            <td class="border px-3 py-2">शैक्षणिकतालमेलकोउद्घाटितकरना, दीक्षाऔरगूगलक्लासरूम</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">
              प्रो. इंदुकुमार, प्रमुख, डीआईसीटी, सीआईईटी, एनसीईआरटी, नईदिल्लीश्रीहेमंतभल्ला,रीजेनलमैनेजरवर्कस्पेसऔरक्रोमओएस, गूगलफॉरएजुकेशन, गुडगांव, हरियाणाश्रीअजीतकुमार,मुख्यप्रबंधक-लर्निंगएडडेवलपमेंट (L
              &amp; D), लर्निंगलिंक्सफाउंडेशन, दिल्ली</td>
            <td class="border px-3 py-2">हिंदीशिक्षक</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">27 जून 2024</td>
            <td class="border px-3 py-2">दीक्षापरज्यामितिपढ़ानेमेंकोलेबजियोटूलकालाभउठाना</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">श्री गुटुकुप्रसाद, दिल्ली सुश्री ऋचा तिवारी, वैज्ञानिक ही/संयुक्त
              निदेशक (आईटी), शिक्षापरियोजनाप्रभाग, राष्ट्रीयसूचनाविज्ञानकेंद्र (एनआईसी), नईदिल्लीसुश्रीएनागुप्ता, अकादमिकसलाहकार- दीक्षा, सीआईईटी, एनसीईआरटी,  नईदिल्ली
            </td>
            <td class="border px-3 py-2">हिंदीशिक्षक</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">June 28, 2024</td>
            <td class="border px-3 py-2">National Education Policy - 2020</td>
            <td class="border px-3 py-2">CBSE (In school)</td>
            <td class="border px-3 py-2">Ms. Huma Waseem,  CBSE Resource Person</td>
            <td class="border px-3 py-2">All Staff Members</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">July 5, 2024</td>
            <td class="border px-3 py-2">Strategies for Teachers to Start the Year Strong</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Education Specialist Ms.Smita Tripathi</td>
            <td class="border px-3 py-2">Mr. Vikram Singh Chauhan &amp; Ms.Meera Dixit</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">July 9, 2024</td>
            <td class="border px-3 py-2">Identification &amp; Management of Academic<br>Challenges in Your Classroom
            </td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Education Specialist Ms.Smita Tripathi</td>
            <td class="border px-3 py-2">Mr. Vikram Singh Chauhan &amp; Ms.Meera Dixit</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">July 16 -18, 2024</td>
            <td class="border px-3 py-2">Assessment Series (Foundational Year)</td>
            <td class="border px-3 py-2">NCFSE</td>
            <td class="border px-3 py-2">Ms. Shivani Verma, Ms. Pooja Agarwal &amp; Ms. Anubha Chatterjee</td>
            <td class="border px-3 py-2">Pre-primary Coordinator &amp;  Educators</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">July 19 -20, 2024</td>
            <td class="border px-3 py-2">School Health and Wellness</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Mr. Avani Kamal, Ms. Ritu Bajpai (RO Prayagraj)</td>
            <td class="border px-3 py-2">Registered Educators</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">July 25, 2024</td>
            <td class="border px-3 py-2">Identification &amp; Management of Academic Challenges in Your Classroom</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Identification &amp; Management of Academic Challenges in Your Classroom</td>
            <td class="border px-3 py-2">Mr. Vikram Singh Chauhan &amp; Ms.Meera Dixit</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">01.08.2024</td>
            <td class="border px-3 py-2">Exploring Effective NEP Framework Strategies for Children with Academic and
              Behavioural Difficulties</td>
            <td class="border px-3 py-2">Eblity</td>
            <td class="border px-3 py-2">Ms.Smita Tripathi</td>
            <td class="border px-3 py-2">Mr.Vikram Singh Chauhan</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">16.08.2024</td>
            <td class="border px-3 py-2">Identification &amp; Management of Academic<br>Challenges in Your Classroom
            </td>
            <td class="border px-3 py-2">Eblity</td>
            <td class="border px-3 py-2">Education Specialist Ms.Smita Tripathi</td>
            <td class="border px-3 py-2">Mr. Vikram Singh Chauhan &amp; Ms.Meera Dixit</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">17.08.2024</td>
            <td class="border px-3 py-2">Migrating to Student Centric New Age Pedagogies</td>
            <td class="border px-3 py-2">IBM Education</td>
            <td class="border px-3 py-2">Ms.Biswajeet Senapati</td>
            <td class="border px-3 py-2">Ms.Faiza Abbasi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">24.08.2024</td>
            <td class="border px-3 py-2">Behavioural Challenges in your Classroom - Identification &amp; Management
            </td>
            <td class="border px-3 py-2">IBM Education</td>
            <td class="border px-3 py-2">Ms.Shivani Washwa</td>
            <td class="border px-3 py-2">Ms. Tooba Khanum</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">24.08.2024</td>
            <td class="border px-3 py-2">Making Board Pattern Competency Question For Class 9-12 (Science)</td>
            <td class="border px-3 py-2">Educart</td>
            <td class="border px-3 py-2">Mr.Devasheesh Yadav</td>
            <td class="border px-3 py-2">Mr.Vikram Singh Chauhan</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">25.08.2024</td>
            <td class="border px-3 py-2">Making Board Pattern Competency Question For Class 9-12 (Maths)</td>
            <td class="border px-3 py-2">Educart</td>
            <td class="border px-3 py-2">Mr.Anup Kumar Rajput</td>
            <td class="border px-3 py-2">Mr.Vikram Singh Chauhan</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">28.08.2024</td>
            <td class="border px-3 py-2">Coding and Python</td>
            <td class="border px-3 py-2">IIT HYDERABAD <br></td>
            <td class="border px-3 py-2">Mr. Vasudevan Natarajan</td>
            <td class="border px-3 py-2">Ms. Purnima Tiwari, Mr. Rahul Gupta</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">29..08.2024</td>
            <td class="border px-3 py-2">Teacher Support Programme - Online Pre A1 Starters, A1 Movers and A2 Flyers
            </td>
            <td class="border px-3 py-2">Cambridge University</td>
            <td class="border px-3 py-2">Ms.Ruchi Tomar</td>
            <td class="border px-3 py-2">Cambridge Teachers &amp; English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">29..08.2024</td>
            <td class="border px-3 py-2">District Trainers Meet (DTC &amp; DDTC)</td>
            <td class="border px-3 py-2">RO Prayagraj</td>
            <td class="border px-3 py-2">Mr. Akhilesh Singh</td>
            <td class="border px-3 py-2">Ms. Niti Khanna </td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">30.08.2024</td>
            <td class="border px-3 py-2">Teacher Support Programme - Online A2 Key for Schools and B1 Preliminary for
              Schools</td>
            <td class="border px-3 py-2">Cambridge University</td>
            <td class="border px-3 py-2">Ms.Uma Raman</td>
            <td class="border px-3 py-2">Cambridge Teachers &amp; English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">30.08.2024</td>
            <td class="border px-3 py-2">CRITICAL THINKING</td>
            <td class="border px-3 py-2">Taar</td>
            <td class="border px-3 py-2">Ms.Shefali</td>
            <td class="border px-3 py-2">Ms. Angela Jaiswal</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">31.08.2024</td>
            <td class="border px-3 py-2">Workshop Counselling for Counsellor</td>
            <td class="border px-3 py-2">HRDC</td>
            <td class="border px-3 py-2">Ms.Tarbia Zehra</td>
            <td class="border px-3 py-2">Ms.Jyoti Srivastava, Ms.Kritima Jaitly</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">31.08.2024</td>
            <td class="border px-3 py-2">Teacher Support Programme - Online B2 First for Schools and C1 Advanced</td>
            <td class="border px-3 py-2">Cambridge University</td>
            <td class="border px-3 py-2">Ms. Ruchi Tomar</td>
            <td class="border px-3 py-2">Cambridge Teachers &amp; English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">31.08.2024</td>
            <td class="border px-3 py-2">Physics Pe Charcha</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Mr. C.S. Verma</td>
            <td class="border px-3 py-2">Mr. Navin Kumar</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">02.09.2024 To 06.09.2024</td>
            <td class="border px-3 py-2">Cyber Parenting</td>
            <td class="border px-3 py-2">CIET-NCERT</td>
            <td class="border px-3 py-2">Mr. M.Jagadish Babu,Mr.Prashant Srivastava, Prof. Shreya Doshi, Ms. Bhumika
              Narang, Mr. Daveet Singh Lobana</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">06.09.2024</td>
            <td class="border px-3 py-2">Online Teachers Support Programme - Storyfun Second Edition </td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms. Alankrita Mahendra</td>
            <td class="border px-3 py-2">Primary School Teachers, English HOD&#x27;s, Academic Coordinators</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">06.09.2024</td>
            <td class="border px-3 py-2">Puppets are a Teacher&#x27;s Best Friends</td>
            <td class="border px-3 py-2">SAAR Education</td>
            <td class="border px-3 py-2">Ms. Sangya Ojha</td>
            <td class="border px-3 py-2">Ms.Angela Jaiswal</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">10.09.2024 To 14.09.2024</td>
            <td class="border px-3 py-2">In-Person Residential Programme in Pedagogical Approaches</td>
            <td class="border px-3 py-2">HRDC DPSS</td>
            <td class="border px-3 py-2">Many Professionals</td>
            <td class="border px-3 py-2">Ms.Nusrat Bano</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">13.09.2024</td>
            <td class="border px-3 py-2">Teacher Support Programme</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms. Ruchi Tomar</td>
            <td class="border px-3 py-2">Cambridge &amp; English Faculty</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">20.09.2024</td>
            <td class="border px-3 py-2">Teacher Support Programme</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms. Ruchi Tomar</td>
            <td class="border px-3 py-2">Cambridge &amp; English Faculty</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">20.09.2024</td>
            <td class="border px-3 py-2">Classroom Management</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Ms. Pooja Sehgal</td>
            <td class="border px-3 py-2">All Teachers </td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">20.09.2024</td>
            <td class="border px-3 py-2">कार्यशाला प्रबंधन</td>
            <td class="border px-3 py-2"></td>
            <td class="border px-3 py-2">पूजा सहगल (प्रधानाचार्या- कान्यकुब्ज पब्लिक स्कूल, कानपुर )<br></td>
            <td class="border px-3 py-2">अंकुर त्रिवेदी <br></td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">27.09.2024</td>
            <td class="border px-3 py-2">Teacher Support Programme..</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Dr.Rosalia</td>
            <td class="border px-3 py-2">Cambridge Teachers &amp; English Teachers</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">28.09.2024</td>
            <td class="border px-3 py-2">Building Scientific Competencies</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms. Pragya Nopany</td>
            <td class="border px-3 py-2">Ms. Meera Dixit Mr. Vikram Singh Chauhan</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">28.09.2024</td>
            <td class="border px-3 py-2">Enseigner la grammaire autrement</td>
            <td class="border px-3 py-2">SEF</td>
            <td class="border px-3 py-2">Ms. Neha Bansal</td>
            <td class="border px-3 py-2">Ms. Avantika Mishra</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">01.10.2024</td>
            <td class="border px-3 py-2">CS GEMS Program</td>
            <td class="border px-3 py-2">IIT Hyderabad</td>
            <td class="border px-3 py-2">Mr. Vasudevan Natarajan</td>
            <td class="border px-3 py-2">Mr. Rahul Gupta Ms. Pragati Tiwari</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">03.10.2024</td>
            <td class="border px-3 py-2">Cell Cycle and Cell Division</td>
            <td class="border px-3 py-2">HRDC</td>
            <td class="border px-3 py-2">Ms. Rohini Muthuswami</td>
            <td class="border px-3 py-2">Ms. Faiza Abbasi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">03.10.2024</td>
            <td class="border px-3 py-2">1.Transcription and Translation 2.Mechanism of DNA Replication </td>
            <td class="border px-3 py-2">HRDC</td>
            <td class="border px-3 py-2">Dr. Gayathri Pananghat</td>
            <td class="border px-3 py-2">Ms. Meera Dixit</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">15.10.2024</td>
            <td class="border px-3 py-2">1.Fundamentals of Immunology<br>2.Transgenic animals/ GMO</td>
            <td class="border px-3 py-2">HRDC</td>
            <td class="border px-3 py-2">Dr. Rama Akondy</td>
            <td class="border px-3 py-2">Ms. Meera Dixit</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">16.10.2024</td>
            <td class="border px-3 py-2">1.DNA Fingerprinting<br>2.Recombinant DNA technology-<br>tools and techniques
            </td>
            <td class="border px-3 py-2">HRDC</td>
            <td class="border px-3 py-2">Dr. Poonam Sharma</td>
            <td class="border px-3 py-2">Ms. Meera Dixit</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">17.10.2024</td>
            <td class="border px-3 py-2">Invigilators Training</td>
            <td class="border px-3 py-2"></td>
            <td class="border px-3 py-2">Mr.Gaja Sendil</td>
            <td class="border px-3 py-2">Cambridge Incharges &amp; PG – VIII Teachers </td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">18.10.2024</td>
            <td class="border px-3 py-2">1.Terminology<br>2.Human Embryonic Development<br>3.Stem cell technology<br>
            </td>
            <td class="border px-3 py-2">HRDC</td>
            <td class="border px-3 py-2">Dr. Shweta Saran</td>
            <td class="border px-3 py-2">Ms. Faiza Abbasi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">2024-11-08 00:00:00</td>
            <td class="border px-3 py-2">Sanskrit Workshop</td>
            <td class="border px-3 py-2">COE Allahabad at Kanya Kubja Public School, Kanpur</td>
            <td class="border px-3 py-2">Pandit Sudhakar Bhat</td>
            <td class="border px-3 py-2">Ms. Sonia Kakkar</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">Nov-19 to Nov-21</td>
            <td class="border px-3 py-2">Learning Can Be Fun (Maths &amp; Science)</td>
            <td class="border px-3 py-2">HRDC DPSS</td>
            <td class="border px-3 py-2">Multiple</td>
            <td class="border px-3 py-2">Tooba Khanum</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">2024-11-20 00:00:00</td>
            <td class="border px-3 py-2">NAS, CBSE</td>
            <td class="border px-3 py-2">CBSE at Ambika Prasad Memorial School</td>
            <td class="border px-3 py-2">CBSE Personnels</td>
            <td class="border px-3 py-2">Pranjay Srivastava Rahul Gupta Vikram S. Chauhan Ankur Trivedi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">Nov-19 to Nov-21</td>
            <td class="border px-3 py-2">PRAYOG Webinar</td>
            <td class="border px-3 py-2">CBSE-Team Prayog New Delhi</td>
            <td class="border px-3 py-2">Mr.Akhlish and Mr.Abhijit (RO Prayagraj)</td>
            <td class="border px-3 py-2">Niti Khanna</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">2024-11-23 00:00:00</td>
            <td class="border px-3 py-2">Leadership &amp; Mental Well Being</td>
            <td class="border px-3 py-2">COLLINS</td>
            <td class="border px-3 py-2">Ms.Abha Arora </td>
            <td class="border px-3 py-2">Niti Khanna</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">2024-11-23 00:00:00</td>
            <td class="border px-3 py-2">Exclusive Masterclass: HPC InsightExclusive Masterclass:HPC Insights</td>
            <td class="border px-3 py-2">Director, Academics, CBSE)/ EBILITY</td>
            <td class="border px-3 py-2">Ms.Praggya M. Singh </td>
            <td class="border px-3 py-2">Hena Mushtaq &amp; Poornima Tiwari</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">2024-11-26 00:00:00</td>
            <td class="border px-3 py-2">Kanpur Leaders Roundtable</td>
            <td class="border px-3 py-2">ScooNews/ Chintels, Kalyanpur</td>
            <td class="border px-3 py-2">Mr. Ravi Satlani</td>
            <td class="border px-3 py-2">Niti Khanna</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">2024-11-27 00:00:00</td>
            <td class="border px-3 py-2">Social, Mental, Emotional Challenges in Classroom</td>
            <td class="border px-3 py-2">EBILITY</td>
            <td class="border px-3 py-2">Dr. Shubhra Gupta &amp; Avirupa Thakurta</td>
            <td class="border px-3 py-2">Hena Mushtaq &amp; Poornima Tiwari</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">2024-11-30 00:00:00</td>
            <td class="border px-3 py-2">National Curriculum Framework (NCF) </td>
            <td class="border px-3 py-2">ENTAB at APS Panki</td>
            <td class="border px-3 py-2">Ms.Tanushree Deb</td>
            <td class="border px-3 py-2">Niti Khanna</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">03.12.2024</td>
            <td class="border px-3 py-2">Cornerstones of Inclusive Education for the Foundational Stage</td>
            <td class="border px-3 py-2">EBILITY</td>
            <td class="border px-3 py-2">Dr. Monimalika <br></td>
            <td class="border px-3 py-2">Hena Mushtaq Poornima Tiwari Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">07.12.2024</td>
            <td class="border px-3 py-2">Exploring Effective NEP Framework Strategies for Children with Academic
              Behavioural Difficulties</td>
            <td class="border px-3 py-2">EBILITY</td>
            <td class="border px-3 py-2">Ms. Smita Tripathi</td>
            <td class="border px-3 py-2">Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">10.12.2024</td>
            <td class="border px-3 py-2">Learning through Art Intergration- Preparatory Stage</td>
            <td class="border px-3 py-2">CBSE-Delhi West</td>
            <td class="border px-3 py-2">Ms. Sheela Varghese</td>
            <td class="border px-3 py-2">Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">10.12.2024</td>
            <td class="border px-3 py-2">Easy Techniques for Teachers to Address Challenging Behaviour in Classrooms
            </td>
            <td class="border px-3 py-2">EBILITY</td>
            <td class="border px-3 py-2">Ms. Pooja Agarwal</td>
            <td class="border px-3 py-2">Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">11.12.2024</td>
            <td class="border px-3 py-2">Counsellors’ Training for Admissions</td>
            <td class="border px-3 py-2">Kakadev (HO)</td>
            <td class="border px-3 py-2">Sanjay Sir &amp; Shilpi Ma’am (SEF)</td>
            <td class="border px-3 py-2">Kritima Jaitly Abeera Ali</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">13.12.2024</td>
            <td class="border px-3 py-2">Classroom Screening to Identify &amp; Support Stuents with Social, Emotional
              and Behavioural Challenges </td>
            <td class="border px-3 py-2">EBILITY</td>
            <td class="border px-3 py-2">Ms. Gomathy Hariharan</td>
            <td class="border px-3 py-2">Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">19.11.2024</td>
            <td class="border px-3 py-2">Learning through Art Intergration- Middle Stage</td>
            <td class="border px-3 py-2">CBSE-Prayagraj</td>
            <td class="border px-3 py-2">Neeraj Kumar Singh</td>
            <td class="border px-3 py-2">Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">20.12.2024</td>
            <td class="border px-3 py-2">Financial Literacy at Ramkali Buddhilal Sahu Shikshan Sansthan, Purva, Unnao
            </td>
            <td class="border px-3 py-2">RO Prayagraj</td>
            <td class="border px-3 py-2">Anupam Singh (RO Prayagraj)</td>
            <td class="border px-3 py-2">Sana Shabbir Naghma Khan</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">23.12.2024</td>
            <td class="border px-3 py-2">Cyber Safety and Security</td>
            <td class="border px-3 py-2">CBSE-Chandigarh</td>
            <td class="border px-3 py-2">Mr.Arun John Masih</td>
            <td class="border px-3 py-2">Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">26.12.2024 to 28.12.2024</td>
            <td class="border px-3 py-2">Admission Counselling Readiness</td>
            <td class="border px-3 py-2">Nature Nurture</td>
            <td class="border px-3 py-2">Ms. Banno</td>
            <td class="border px-3 py-2">Hena Mushtaq Nisha Lalwani Angela Jaiswal Kritima Jaitly</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">28.12.2024</td>
            <td class="border px-3 py-2">Best Practices for Social Media Posting</td>
            <td class="border px-3 py-2">Kakadev (HO)</td>
            <td class="border px-3 py-2">Mr. Sanjay Kapoor</td>
            <td class="border px-3 py-2">Pranjay Srivastava</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">03.01.2025</td>
            <td class="border px-3 py-2">Learning through Art Integration- Foundational Stage</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Ms.Poornima Menon</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">10.01.2025</td>
            <td class="border px-3 py-2">Strategies to Enhance Foundational Reading Skills Across All Subjects </td>
            <td class="border px-3 py-2">Ebility</td>
            <td class="border px-3 py-2">Ms.Smita Tripathi</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">11.01.2025</td>
            <td class="border px-3 py-2">Inquiry Driven Teaching Methods</td>
            <td class="border px-3 py-2">Saamarthya Teachers Training Academy of Research </td>
            <td class="border px-3 py-2">Ms.Pragati Agnihotri</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">04.01.2025</td>
            <td class="border px-3 py-2">Understanding FLN Competencies and Learing Outcomes Specified in NEP</td>
            <td class="border px-3 py-2">Eblity</td>
            <td class="border px-3 py-2">Ms.Smita Tripathi</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">16.01.2025</td>
            <td class="border px-3 py-2">Learning through Art Integration- Foundational Stage</td>
            <td class="border px-3 py-2">CBSE</td>
            <td class="border px-3 py-2">Dr. JASJIT KAUR SOOD</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">17.01.2025</td>
            <td class="border px-3 py-2">Implementing Interventions in Your Classrooms to Achieve HPC Outcomes</td>
            <td class="border px-3 py-2">Eblity</td>
            <td class="border px-3 py-2">Ms.Smita Tripathi</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">17.01.2025 </td>
            <td class="border px-3 py-2">Music webinar</td>
            <td class="border px-3 py-2">Allenhouse Khalasi line, Kanpur</td>
            <td class="border px-3 py-2">Mr. Ashutosh Mr. Shreyash</td>
            <td class="border px-3 py-2">Mr. Manish Tripathi<br>Ms. Shalini Shukla Mr. Ayush Nishad Ms.Tanya Awasthi
            </td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap"> 18.01.2025</td>
            <td class="border px-3 py-2">Dance Webinar</td>
            <td class="border px-3 py-2">Allenhouse Khalasi line, Kanpur</td>
            <td class="border px-3 py-2">Mr. Villson Ms. Disha </td>
            <td class="border px-3 py-2">Mr. Manish Tripathi<br> Mr. Ayush Nishad Ms.Tanya Awasthi</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">22.01.2025</td>
            <td class="border px-3 py-2">Year-End Strategies to Support Students with Challenges</td>
            <td class="border px-3 py-2">Eblity</td>
            <td class="border px-3 py-2">Mr.Gomathy Hariharan </td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">27.01.2025</td>
            <td class="border px-3 py-2">Financial Literacy </td>
            <td class="border px-3 py-2">APS Panki, Kanpur</td>
            <td class="border px-3 py-2">Ms. Pritika Srivan Ms. Fatima Dholakwala</td>
            <td class="border px-3 py-2">Ms. Tooba Khanum Ms. Fakhra Khan</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">28.01.2025</td>
            <td class="border px-3 py-2">Financial Literacy</td>
            <td class="border px-3 py-2">APS Panki, Kanpur</td>
            <td class="border px-3 py-2">Ms. Fatima<br>Ms. Pritika </td>
            <td class="border px-3 py-2">Ms. Manisha Dixit <br>Mr. Arpit Tiwari </td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">31.01.2025</td>
            <td class="border px-3 py-2">Top Priorities in School</td>
            <td class="border px-3 py-2">IPN Forum</td>
            <td class="border px-3 py-2">Dr. Chandrashekhar </td>
            <td class="border px-3 py-2">Ms. Niti Khanna</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">01.02.2025 and 02.02.2025</td>
            <td class="border px-3 py-2">Experience Leaders Meet </td>
            <td class="border px-3 py-2">NatureNurture</td>
            <td class="border px-3 py-2">Ms.Shivani, Ms.Manisha, Ms.Ashima, Mr.Devranjan, Ms.Jharna, Ms.Baano, Mr.Surya
            </td>
            <td class="border px-3 py-2">Ms.Nisha Lalwani Ms.Angela Jaiswal</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">10.02.2025 and 11.02.2025</td>
            <td class="border px-3 py-2">Master Virtual training programme </td>
            <td class="border px-3 py-2">CDAC</td>
            <td class="border px-3 py-2">Ms.Rekha Saraswat, Ms.Kanti Singh, Mr.Saurabh Tripathi</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">28.02.2025</td>
            <td class="border px-3 py-2">Behavioural Challenges in your classroom Identification &amp; Management</td>
            <td class="border px-3 py-2">Eblity</td>
            <td class="border px-3 py-2">Ms.Shagun Guha</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">06.03.2025</td>
            <td class="border px-3 py-2">Science Orientation and Training </td>
            <td class="border px-3 py-2">Macmillan</td>
            <td class="border px-3 py-2">Ms. Shefali Bharti</td>
            <td class="border px-3 py-2">Ms. Tanya Mishra <br>Ms. Ayushi Mishra <br>Ms. Pratibha Ojha<br>Ms. Tooba
              Khanum</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">07.03.2025</td>
            <td class="border px-3 py-2">Classroom Screening to Identify &amp; Support Students with Academic Challenges
            </td>
            <td class="border px-3 py-2">Ebility</td>
            <td class="border px-3 py-2">Ms.Smita Tripathi</td>
            <td class="border px-3 py-2">Mr.Vikram Singh</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">06.03.2025</td>
            <td class="border px-3 py-2">English Orientation &amp; Training</td>
            <td class="border px-3 py-2">NCF &amp; NEF</td>
            <td class="border px-3 py-2">Ms.Mridula Mr.Mansoor Nazeer </td>
            <td class="border px-3 py-2">Ms.Nisha Lalwani Ms.Khushboo Nigam Ms.Arshi Khan Ms.Anupama Singh Ms.Jennifer
              Siddiqui Ms.Meenakshi Mishra </td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">10.03.2025</td>
            <td class="border px-3 py-2">SEL Training </td>
            <td class="border px-3 py-2">Harsh Roy</td>
            <td class="border px-3 py-2">Ms.Sonali Sharma<br>Mr.Abhinav mishra</td>
            <td class="border px-3 py-2">Ms.Amreen Fatima Ms.Sana Shabbir</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">11.03.2025</td>
            <td class="border px-3 py-2">Board Protocol LO&#x27;s</td>
            <td class="border px-3 py-2">APS Panki</td>
            <td class="border px-3 py-2">Ms. Vidhi Raj Mohd. Muzzamil </td>
            <td class="border px-3 py-2">Ms.Nisha Lalwani Ms.Tooba Khanum Ms.Nusrat Bano Ms.Poornima Tiwari Ms.Sandhya
              Dubey</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">12.03.2025</td>
            <td class="border px-3 py-2">Social Studies Workshop</td>
            <td class="border px-3 py-2">Ratna Sagar</td>
            <td class="border px-3 py-2">Mr.Tarique Siddiqui</td>
            <td class="border px-3 py-2">Ms.Pratibha Ojha Ms.Tooba Khanum Ms.Nusrat Bano Ms.Nagma Khan Ms.Ayushi Mishra
              Ms.Tanya Mishra </td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">12.03.2025</td>
            <td class="border px-3 py-2">Weekly and Monthly Report formats</td>
            <td class="border px-3 py-2">HO</td>
            <td class="border px-3 py-2">Ms.Falak Nabi</td>
            <td class="border px-3 py-2">Mr.Abhay Kumar Trivedi Ms.Abeera Ali Ms.Khushi Nigam</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">17.03.2025</td>
            <td class="border px-3 py-2">Board Protocol</td>
            <td class="border px-3 py-2">APS Khalasi Line, Kanpur</td>
            <td class="border px-3 py-2">Ms.Archana Todi Ms.Priti Patel</td>
            <td class="border px-3 py-2">Ms.Hena Mushtaq Ms.Faiza Abbasi Ms.Nusrat Bano</td>
          </tr>


          <tr class="align-top">
            <td class="border px-3 py-2 whitespace-pre-wrap">29.03.2025 &amp; 30.03.2025</td>
            <td class="border px-3 py-2">Annual Training Calendar (CBPs)</td>
            <td class="border px-3 py-2">RO Prayagraj</td>
            <td class="border px-3 py-2">Mr. Abhishek Singh </td>
            <td class="border px-3 py-2">Ms. Niti Khanna</td>
          </tr>

        </tbody>
      </table> -->
    </div>
  </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>