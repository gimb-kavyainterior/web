<?php

include "./include/header.php";
include "./include/nav.php";


?>
<main class="main">

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section">

        <div class="container">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
                        <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                            <div class="img">
                                <img src="assets/img/img_v_3.jpg" alt="circle image" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
                        <div class="px-3">
                            <span class="content-subtitle">Our Mission</span>
                            <h2 class="content-title text-start">
                            Designing Spaces, Defining Experiences
                            </h2>
                            <p class="lead">
                                At Kavya Interior, we are dedicated to transforming spaces into beautiful,
                                functional works of art. Our mission is to create interiors that reflect the unique
                                style and needs of each client while enhancing their lifestyle through thoughtful
                                design. We believe that every space has the potential to inspire, and we strive to
                                bring that potential to life with passion, creativity, and attention to detail.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About 2 Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

        <div class="container">
            <div class="row gy-4 justify-content-center">

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up">
                        <div class="services-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <div>
                            <h3>Technology</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="services-icon">
                            <i class="bi bi-command"></i>
                        </div>
                        <div>
                            <h3>Web Design</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="services-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <div>
                            <h3>Branding</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container">

            <div class="row gy-4 justify-content-center">

                <div class="col-lg-5">
                    <div class="images-overlap">
                        <img src="assets/img/img_v_1.jpg" alt="student" class="img-fluid img-1" data-aos="fade-up">
                    </div>
                </div>

                <div class="col-lg-4 ps-lg-5">
                    <span class="content-subtitle">Why Us</span>
                    <h2 class="content-title">Where Your Vision Meets Exceptional Design and Craftsmanship.</h2>
                    <p class="mb-5">
                        At Kavya Interior, we combine years of expertise with a passion for creating personalized,
                        functional, and visually stunning spaces. Our team is dedicated to understanding your unique
                        vision and translating it into a design that not only reflects your style but enhances your
                        lifestyle. With a focus on high-quality materials, attention to detail, and sustainable
                        practices, we ensure that every project is completed to the highest standards, on time and
                        within budget. Choose us for an experience that prioritizes creativity, craftsmanship, and
                        exceptional customer service from start to finish.
                    </p>
                    <div class="row mb-5 count-numbers">

                       <!-- Start Stats Item -->
                       <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="50"
                                data-purecounter-duration="1" class="purecounter number"></span>
                            <span class="d-block">Clients</span>
                        </div>
                        <!-- End Stats Item -->

                        <!-- Start Stats Item -->
                        <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                            <span data-purecounter-separator="true" data-purecounter-start="0"
                                data-purecounter-end="100" data-purecounter-duration="1"
                                class="purecounter number"></span>
                            <span class="d-block">Sites</span>
                        </div>
                        <!-- End Stats Item -->

                        <!-- Start Stats Item -->
                        <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                            <span data-purecounter-separator="true" data-purecounter-start="0"
                                data-purecounter-end="100" data-purecounter-duration="1"
                                class="purecounter number"></span>
                            <span class="d-block">Projects</span>
                        </div>
                        <!-- End Stats Item -->

                    </div>
                </div>

            </div>

        </div>
    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <div class="site-section slider-team-wrap">
            <div class="container">

                <div class="slider-nav d-flex justify-content-end mb-3">
                    <a href="#" class="js-prev js-custom-prev"><i class="bi bi-arrow-left-short"></i></a>
                    <a href="#" class="js-next js-custom-next"><i class="bi bi-arrow-right-short"></i></a>
                </div>

                <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
                    <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "1",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".js-custom-next",
                            "prevEl": ".js-custom-prev"
                        },
                        "breakpoints": {
                            "640": {
                                "slidesPerView": 2,
                                "spaceBetween": 30
                            },
                            "768": {
                                "slidesPerView": 3,
                                "spaceBetween": 30
                            },
                            "1200": {
                                "slidesPerView": 3,
                                "spaceBetween": 30
                            }
                        }
                    }
                    </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team">
                                <div class="pic">
                                    <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid">
                                </div>
                                <h3 clas="">
                                    <a href="#"><span class="">Jeremy</span> Walker</a>
                                </h3>
                                <span class="d-block position">CEO, Founder, Atty.</span>
                                <p>
                                    Separated they live in. Separated they live in Bookmarksgrove
                                    right at the coast of the Semantics, a large language ocean.
                                </p>
                                <p class="mb-0">
                                    <a href="#" class="more dark">Learn More <span
                                            class="bi bi-arrow-right-short"></span></a>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team">
                                <div class="pic">
                                    <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid">
                                </div>
                                <h3 clas="">
                                    <a href="#"><span class="">Lawson</span> Arnold</a>
                                </h3>
                                <span class="d-block position">CEO, Founder, Atty.</span>
                                <p>
                                    Separated they live in. Separated they live in Bookmarksgrove
                                    right at the coast of the Semantics, a large language ocean.
                                </p>
                                <p class="mb-0">
                                    <a href="#" class="more dark">Learn More <span
                                            class="bi bi-arrow-right-short"></span></a>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team">
                                <div class="pic">
                                    <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid">
                                </div>
                                <h3 clas="">
                                    <a href="#"><span class="">Patrik</span> White</a>
                                </h3>
                                <span class="d-block position">CEO, Founder, Atty.</span>
                                <p>
                                    Separated they live in. Separated they live in Bookmarksgrove
                                    right at the coast of the Semantics, a large language ocean.
                                </p>
                                <p class="mb-0">
                                    <a href="#" class="more dark">Learn More <span
                                            class="bi bi-arrow-right-short"></span></a>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team">
                                <div class="pic">
                                    <img src="assets/img/team/team-4.jpg" alt="Image" class="img-fluid">
                                </div>
                                <h3 clas="">
                                    <a href="#"><span class="">Kathryn</span> Ryan</a>
                                </h3>
                                <span class="d-block position">CEO, Founder, Atty.</span>
                                <p>
                                    Separated they live in. Separated they live in Bookmarksgrove
                                    right at the coast of the Semantics, a large language ocean.
                                </p>
                                <p class="mb-0">
                                    <a href="#" class="more dark">Learn More <span
                                            class="bi bi-arrow-right-short"></span></a>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="swiper-slide"></div> -->
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Happy Customers</p>
            <h2>Testimonials</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 40
                                },
                                "1200": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 1
                                }
                            }
                        }
                        </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial mx-auto">
                                    <figure class="img-wrap">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image"
                                            class="img-fluid">
                                    </figure>
                                    <h3 class="name">Adam Aderson</h3>
                                    <blockquote>
                                        <p>
                                            “There live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large
                                            language ocean.”
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial mx-auto">
                                    <figure class="img-wrap">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image"
                                            class="img-fluid">
                                    </figure>
                                    <h3 class="name">Lukas Devlin</h3>
                                    <blockquote>
                                        <p>
                                            “There live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large
                                            language ocean.”
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial mx-auto">
                                    <figure class="img-wrap">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image"
                                            class="img-fluid">
                                    </figure>
                                    <h3 class="name">Kayla Bryant</h3>
                                    <blockquote>
                                        <p>
                                            “There live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large
                                            language ocean.”
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Testimonials Section -->

</main>

<?php

include "./include/footer.php"

?>