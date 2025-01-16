<?php

include "./include/header.php";
include "./include/nav.php";

?>

<main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
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
                                <img src="assets/img/img_h_6.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/img_h_7.jpg" alt="Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <span class="section-subtitle" data-aos="fade-up">Welcome</span>
                    <h1 class="mb-4" data-aos="fade-up">
                        Crafting homes, tailored for your personal taste
                    </h1>
                    <p data-aos="fade-up">
                        Welcome to a place where your vision becomes reality. At Kavya Interior, we specialize in
                        crafting homes that are uniquely tailored to your personal taste. Whether you're looking for a
                        cozy retreat or a modern masterpiece, we work closely with you to design spaces that reflect
                        your style, needs, and aspirations. Your dream home is within reach, and we're here to make it
                        happen with meticulous attention to detail and a passion for excellence. Let's build something
                        extraordinary together.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section light-background">

        <div class="container">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mt-5">
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


    <!-- Tabs Section -->
    <section id="tabs" class="tabs section light-background">

        <div class="container">
            <div class="row gap-x-lg-4 justify-content-between">
                <div class="col-lg-4 js-custom-dots">
                    <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left"
                        data-aos-delay="0">
                        <div class="service-icon color-1 mb-4">
                            <i class="bi bi-alarm"></i>
                        </div>
                        <!-- /.icon -->
                        <div class="service-contents">
                            <h3>Modern and clean design</h3>
                            <p>
                                Far far away, behind the word mountains, far from the countries .
                            </p>
                        </div>
                        <!-- /.service-contents-->
                    </a>
                    <!-- /.service -->

                    <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="100">
                        <div class="service-icon color-2 mb-4">
                            <i class="bi bi-bag-check"></i>
                        </div>
                        <!-- /.icon -->
                        <div class="service-contents">
                            <h3>Sell Products</h3>
                            <p>
                                Far far away, behind the word mountains, far from the countries .
                            </p>
                        </div>
                        <!-- /.service-contents-->
                    </a>
                    <!-- /.service -->

                    <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="200">
                        <div class="service-icon color-3 mb-4">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <!-- /.icon -->
                        <div class="service-contents">
                            <h3>Success Every Day</h3>
                            <p>
                                Far far away, behind the word mountains, far from the countries .
                            </p>
                        </div>
                        <!-- /.service-contents-->
                    </a>
                    <!-- /.service -->

                    <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="300">
                        <div class="service-icon color-4 mb-4">
                            <i class="bi bi-easel"></i>
                        </div>
                        <!-- /.icon -->
                        <div class="service-contents">
                            <h3>Bring Ideas to Life</h3>
                            <p>
                                Far far away, behind the word mountains, far from the countries .
                            </p>
                        </div>
                        <!-- /.service-contents-->
                    </a>
                    <!-- /.service -->
                </div>

                <div class="col-lg-8">
                    <div class="swiper init-swiper-tabs">
                        <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoHeight": true,
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
                                <img src="assets/img/img_h_1.jpg" alt="Image" class="img-fluid">
                                <div class="p-4">
                                    <h3 class="text-black h5 mb-3">Modern and clean design</h3>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <p>
                                                Far far away, behind the word mountains, far from the
                                                countries Vokalia and Consonantia, there live the blind
                                                texts. Separated they live in Bookmarksgrove right at the
                                                coast of the Semantics, a large language ocean.
                                            </p>
                                            <p>
                                                A small river named Duden flows by their place and
                                                supplies it with the necessary regelialia. It is a
                                                paradisematic country, in which roasted parts of sentences
                                                fly into your mouth.
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="list-unstyled list-check">
                                                <li>Far far away, behind the word</li>
                                                <li>Far from the countries Vokalia</li>
                                                <li>Separated they live in Bookmarksgrove</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/img_h_2.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/img_h_3.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/img_h_4.jpg" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Tabs Section -->

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