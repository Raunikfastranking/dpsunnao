<?php 
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $admission_overview_data['data']['title'] ?? '' ?></title>
    <meta name="description" content="<?= $admission_overview_data['data']['meta_description'] ?? '' ?>">
    <meta name="keywords" content="<?= $admission_overview_data['data']['meta_keywords'] ?? '' ?>">


    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://dpsunnao.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Admission",
      "item": "https://dpsunnao.com/admission-overview"
    }
  ]
}
</script>

</head>
<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div   class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($admission_overview_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($admission_overview_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="admission-overview" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($admission_overview_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
<div
    class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
    <?= $admission_overview_data['data']['sections'][1]['content'] ?? '' ?>
    <!-- <div class="gap-9 mt-6 mb-5">
       
        <div class="">
            <div>
                <p class="text-[17px] text-gray-600">
                    Founded in 2019, DPS, Unnao today stands as a prominent educational institution affiliated with the Central Board of Secondary Education (CBSE).
                </p>
            </div>
            <h2 class="text-[16px] font-[700] text-gray-600 leading-8 relative mb-3 mt-3">
                <span class="text-[20px] font-[600] text-blue-main hr-line">Key Features of DPS Unnao</span>
            </h2>

            <ul class="list-disc pl-5 text-gray-600 space-y-2">
                <li><span class="text-gray-600 font-[600]">Classes:</span> We provide world-class education from Playgroup to Grade 11.</li>
                <li><span class="text-gray-600 font-[600]">Infrastructure:</span> Our school is a hub of top-notch facilities. The science and computer labs foster students' interest in exploration. Our well-equipped classrooms create an inviting and comfortable setting. A library, sports facilities, and a playground add to our enriching environment.</li>
                <li><span class="text-gray-600 font-[600]">Faculty:</span> Our highly qualified and experienced teachers extend personalised attention to every student.</li>
                <li><span class="text-gray-600 font-[600]">Teaching Methodology:</span> We go beyond textbook theory to make learning interactive. We adopt smart technologies and experiential learning to promote better retention of concepts.</li>
                
            </ul>
        </div>
    </div>
    <ul class="list-disc pl-5 text-gray-600 space-y-2">
        <li><span class="text-gray-600 font-[600]">Focus on Holistic Development:</span> We focus on both academic excellence and co-curricular activities. We believe a strong command over academics and honed skills in fields like sports, arts, music, dramatics, and oratory create well-rounded individuals, ready to tackle tomorrow's challenges.</li>
     <li><span class="text-gray-600 font-[600]">Extra-curricular Activities:</span> An all-round development requires students to participate in activities, pursue their passion, and hone their skills. We encourage participation in various activities like sports, debates, quizzes, cultural performances, and social outreach programs.</li>
</ul> -->
</div>



        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
   
</body>

</html>