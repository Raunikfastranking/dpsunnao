<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>

    <title>AllenHouse Bareilly| Academics</title>
</head>

<body>
    <style>
        .job-opening-bg {
            position: relative;
        }

        .job-opening-bg::before {
            content: "";
            height: 100%;
            position: absolute;
            opacity: .6;
            width: 100%;
            background: #112759;
        }
    </style>
    <?php include "includes/header.php" ?>



    <div class="main relative  mb-[40px] sm:mb-[120px] ">
        <div   class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Pedagogy
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Pedagogy
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="pedagogy.php" class="ms-1 text-sm font-medium text-blue-main">Pedagogy</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">

             <div class="mt-5">
<h3 class="font-[700]  text-[18px]">Our Curriculum in Pre-Primary</h3>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                      Pedagogy comprises the activities that result in measurable changes in the learners. Here such practices are followed that are child-centric leading to their autonomy in learning. The contextual knowledge is connected with the life skill conceptual part and learning is carried out to bring about desired behavioural outcomes.
                    </p>

                     <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                     Pedagogy followed in the institution helps in the passive acquisition of facts and focuses on constructive, experiential, cooperative and collaborative learning. It also develops critical thinking in the learners and involves the integration of art and music with other subjects. It helps in the holistic development of the learner.
                    </p>
    </div>


        </div>
    </div>
    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>
    <script>
        var glide01 = new Glide('.glide-01', {
            type: 'carousel',
            focusAt: 'center',
            perView: 3,
            autoplay: 3500,
            animationDuration: 700,
            gap: 2,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1024: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });
        glide01.mount();

        var glide02 = new Glide('.glide-02', {
            type: 'carousel',
            focusAt: 'center',
            perView: 3.5,
            autoplay: 3500,
            animationDuration: 700,
            gap: 24,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1024: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });
        glide02.mount();

        var glide03 = new Glide('.glide-03', {
            type: 'carousel',
            focusAt: 1,
            perView: 4,
            autoplay: 3500,
            animationDuration: 700,
            gap: 24,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1024: {
                    perView: 4
                },
                640: {
                    perView: 1
                }
            },
        });
        glide03.mount();

        var glide04 = new Glide('.glide-04', {
            type: 'carousel',
            focusAt: 1,
            perView: 4,
            autoplay: 3500,
            animationDuration: 700,
            gap: 24,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1024: {
                    perView: 4
                },
                640: {
                    perView: 1
                }
            },
        });
        glide04.mount();
    </script>
</body>

</html>