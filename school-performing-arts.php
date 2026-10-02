<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Unnao | School of Performing Arts</title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div   class="bg-center flex items-center text-center h-[300px]  brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    School of Performing Arts
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                  School of Performing Arts
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Beyond Academics
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="school-performing-arts.php" class="ms-1 text-sm font-medium text-blue-main">School of Performing Arts</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="sm:flex gap-10  mt-16">
                <div class="sm:w-[50%] sm:block hidden">
                    <img src="https://dummyimage.com/400x285/e6e6ed/000000&text=Not+Provided" alt="">
                </div>
                <div class="mx-3 pb-0 sm:pt-0 pt-[100px] sm:w-[50%]">
                    <div>
                        <p class="text-[16px] text-gray-500 leading-8 mt-3">
                 Performing Arts greatly help in Physical, Mental and Academic growth. Music, Art and Dance develop abstract reasoning necessary for academic success basically in Mathematics and Science as they improve the ability of higher-level thinking.
                        </p>
                        <p class="text-[16px] text-gray-500 leading-8 mt-3">
                            Delhi Public School provides training in a variety of disciplines in music and dance. DPS, Unnao is gifted with dedicated and worthy teachers in the faculty of Dance and Music Departments, to ignite and sustain the creative spark in their students. The universal language of music and dance forms help students from across communities to bond and provide the perfect provision for the mind, body and soul.
                        </p>
                        
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <p class="text-[16px] text-gray-500 leading-8 mt-3">
                            Our school imparts different Dance forms like - Indian Classical- Kathak, Indian folk, Western dance and fusion for the students to choose from. Students get the opportunity and exposure to take part in different activities and competitions viz. Inter and Intra School Dance Competitions, District State and National Level dance competitions.
                        </p>
                        <p class="text-[16px] text-gray-500 leading-8 mt-3">
                            Such special activities enable the students to showcase their dance talent during Annual function, Special Assemblies, Cultural programmes, Summer camps and Fun Saturdays.
                        </p>
                        <p class="text-[16px] text-gray-500 leading-8 mt-3">
                            Music Department of our school is equipped with well tuned musical instruments like - <strong>drums, tabla, dholak, guitar, sitar, harmonium and synthesizers</strong>. Under vocal category there are various styles like- <strong>Western, Hindustani classical and light fusion</strong> for the students to choose from. Music as well as dance benefits everybody in general, and every student, in particular.
                        </p>
                        <p class="text-[16px] text-gray-500 leading-8 mt-3">
                            The Performing Arts often aim to express one’s emotions and feelings. Being an integral part of education, DPS, Unnao, undertakes the responsibility to engage the mind, the body and emotions of students to allow them explore and express great themes and ideas through their performances.
                        </p>
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <script>
        $('.moreless-button').click(function() {
            const moreText = $(this).siblings('.moretext');

            $('.moretext').not(moreText).slideUp();
            $('.moreless-button').not(this).text('Read more');

            // Toggle the current one
            moreText.slideToggle();

            if ($(this).text() == "Read more") {
                $(this).text("Read less");
            } else {
                $(this).text("Read more");
            }
        });

        var aboutCarousel = new Glide('.about-carousel', {
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
        aboutCarousel.mount();

        var aboutCarousel2 = new Glide('.about-carousel2', {
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
                1680: {
                    perView: 4
                },
                1024: {
                    perView: 3
                },
                820: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });
        aboutCarousel2.mount();




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
                1680: {
                    perView: 4
                },
                1024: {
                    perView: 3
                },
                820: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });

        glide03.mount();

        var latestNews2 = new Glide('.latestNews2', {
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
                1680: {
                    perView: 4
                },
                1024: {
                    perView: 3
                },
                820: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });
        latestNews2.mount();
    </script>
</body>

</html>