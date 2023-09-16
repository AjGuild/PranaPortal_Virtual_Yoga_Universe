<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="aos.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.js"></script>
    <script src="script.js" defer></script>
    <title>E-YOGA</title>

    <style>
        body.dark-mode {
            background-color: black;
            color: white;
        }
    </style>

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">


    <!--                                nav bar starts                                 -->
    <div class="navbar navbar-expand-lg fixed-top">


        <button onclick="toggleClick()" id="btnToggle" style="position: absolute; left: 10px; border: none; background-color: transparent; color: white; font-size: 20px;">Light/Dark</button>

        <div class="container">
            <a href="index.html" class="navbar-brand">E-YOGA</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="#gallery" class="nav-link smoothScroll">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li>

                    <li class="nav-item">
                        <a href="#team" class="nav-link smoothScroll">Our Team</a>
                    </li>

                    <li class="nav-item">
                        <a href="#event" class="nav-link smoothScroll">Events</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!--                                            navbar ends                        -->


    <!--                                             section 1                               -->

    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home" style="background-color: black !important;">
        <div class="bg-overlay">
            <video autoplay muted loop id="myVideo">
                <source src="new3.mp4" type="video/mp4">
            </video>
        </div>

        <div class="container">
            <div class="row">F
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h4 data-aos="fade-up" data-aos-delay="300"
                            style="font-family: 'Lora', serif; font-weight: 600; letter-spacing: 2px;">For your Inner
                            Peace</h4>

                        <h1 data-aos="fade-up" data-aos-delay="500" class="text-black"
                            style="font-family: 'Baloo 2', cursive;">
                            Be Alive. Be Strong. Be Fit. Be Relaxed. Be Happy. Just be.
                        </h1>
                        <a href="https://www.cuchd.in/" target="_blank">
                            <img data-aos="fade-up" data-aos-delay="600" src="cu-logo.webp" alt="Apple_Store" 
                            class="mt-3 down apple">
                        </a>
                            <a href="https://www.cuchd.in/" target="_blank">
                                <img data-aos="fade-up" data-aos-delay="700" src="cu-logo.webp" alt="Play_store"
                            class="mt-3 down play-store">
                            </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--                                            section 1 ends                         -->


    <!--                                            section-2 starts                         -->

    <section id="section1" class="ftco-section bg-light" id="feature" style="background-color: black !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="offer-deal text-center">
                        <div class="img" style="background-image: url(gallery-1.jpg)"></div>
                        <div class="text mt-4">
                            <h3 class="mb-4" style="color: white;">Power Yoga</h3>
                            <p class="mb-5" style="text-align: justify;">
                                Power yoga is a vigorous and dynamic yoga style that combines strength, flexibility, and mindfulness. Participants engage in fast-paced sequences of postures, synchronized with deep breaths, to enhance physical fitness and mental clarity. This practice builds endurance, tones muscles, and promotes holistic well-being, making it an intense yet rewarding workout.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.cuchd.in/" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="100" style="border: 5px blue;">
                                    Learn more</a>
                                </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="offer-deal text-center">
                        <div class="img" style="background-image: url(gallery-2.jpg)"></div>
                        <div class="text mt-4">
                            <h3 class="mb-4" style="color: white;">Meditation Class</h3>
                            <p class="mb-5" style="text-align: justify;">
                                Meditation classes provide a serene environment for individuals to cultivate mindfulness and inner peace. Guided by experienced instructors, participants learn various meditation techniques, including focused breathing and mindfulness meditation. These classes promote relaxation, reduce stress, and enhance mental clarity. They offer a sanctuary for self-reflection.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.cuchd.in/" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="100" style="border: 5px blue;">
                                    Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                    <div class="offer-deal text-center">
                        <div class="img" style="background-image: url(gallery-3.jpg)"></div>
                        <div class="text mt-4">
                            <h3 class="mb-4" style="color: white;">Aerobics Class</h3>
                            <p class="mb-5" style="text-align: justify;">
                                Aerobics classes are energetic fitness sessions that combine rhythmic movements and cardiovascular exercises. Led by instructors, routines set to music, promoting endurance, flexibility, and calorie burning. These classes enhance cardiovascular health, coordination, and overall fitness, making them an enjoyable and effective way to stay active and fit.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.cuchd.in/" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="100" style="border: 5px blue;">
                                    Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="600">
                    <div class="offer-deal text-center">
                        <div class="img" style="background-image: url(gallery-4.jpg)"></div>
                        <div class="text mt-4">
                            <h3 class="mb-4" style="color: white; text-align: justify !important;">Spiritual Yoga</h3>
                            <p class="mb-5" style="text-align: justify;">
                                Spiritual yoga is a transformative practice that delves into the spiritual dimension of life. It goes beyond physical postures, emphasizing inner peace, mindfulness, and self-discovery. Through meditation, breathing exercises, it fosters a deep connection with one's inner self and the universe, promoting spiritual growth, and enlightenment.
                            </p>
                            <p>
                                <a target="_blank" href="https://www.cuchd.in/" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="100" style="border: 5px blue;">
                                    Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--                                    section-2 sends                                     -->


    <section class="home-about spad" id="about" >
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home_about_pic">
                        <div class="home_about_pic_item large-item set-bg" data-setbg="about-1.jpg" data-aos="fade-up"
                            data-aos-delay="300"></div>
                        <div class="home_about_pic_item">
                            <div class="home_about_pic_item_inner set-bg" data-setbg="about-2.jpg" data-aos="fade-up"
                                data-aos-delay="400"></div>
                            <div class="home_about_pic_item_inner set-bg" data-setbg="about-3.jpg" data-aos="fade-up"
                                data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_about_text" data-aos="fade-up" data-aos-delay="300">
                        <div class="section-title">
                            <h2>Welcome to <br>E-yoga</h2>
                        </div>
                        <span>"What is yoga and how does it work?"</span>
                        <p>Yoga is an ancient and complex practice, rooted in Indian philosophy. It began as a spiritual practice but has become popular as a way of promoting physical and mental well-being.

                            Although classical yoga also includes other elements, 
                            yoga as practiced in the United States typically emphasizes physical postures (asanas), 
                            breathing techniques (pranayama), and meditation (dyana).</p>
                        <p class="para-2">
                            There are many different yoga styles, ranging from gentle practices to physically
                             demanding ones. Differences in the types of yoga used in research studies may affect study results. This makes it challenging to evaluate research on the health effects of yoga.
                            Yoga and two practices of Chinese origin—tai chi and qigong—are sometimes called “meditative movement” practices.
                             All three practices include both meditative elements and physical ones.
                            <a href="https://www.cuchd.in/" class="btn custom-btn bg-color mt-3" data-aos="fade-up"
                                data-aos-delay="400">More About Us &rarrhk;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--                                        section 4 starts                                             -->

    <section class="ftco-section ftco-no-pt ftco-no-pb" id="gallery" >
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-2">
                <div class="col-md-6 text-center heading-section">
                    <span class="subheading">Gallery</span>
                    <h2 class="mb-4">Our Gallery</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt magnam commodi exercitationem
                        dolorem nesciunt. Enim?
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-1.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-1.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-2.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-2.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-3.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-3.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-4.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-4.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-5.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-5.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-6.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-6.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-7.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-7.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-8.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-8.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--                                     section 4 ends                                             -->

    <!--                                    section 5 starts                                            -->

    <section class="class section style-cards" id="class">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <h6 data-aos="fade-up">Get a Perfect Body</h6>
                    <h1 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h1>
                </div>

                <div class="card-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="desc-3">
                        <h3 class="mb-2">Yoga Training</h3>
                        <p>
                            The word “Yoga” essentially means, “that which brings you to reality”. Literally, it means
                            “union.” Union means it
                            brings you to the ultimate reality, where individual manifestations of life are surface
                            bubbles in the process of
                            creation.
                        </p>
                    </div>
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="yoga6.mp4"></video>
                </div>
                <div class="card-2" data-aos="fade-up" data-aos-delay="200">
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="yoga8.mp4"></video>

                    <div class="desc-2">
                        <h3 class="mb-2">Cardio Training</h3>
                        <p>
                            Cardio Yoga is a type of yoga class that combines Yoga moves with cardiovascular exercises.
                            The workout takes classic
                            yoga moves and makes them a bit faster, with a more rapid flow between sequences.
                            The non-stop movement gets your heart beating and your muscles burning.
                        </p>
                    </div>
                </div>
                <div class="card-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="desc-3">
                        <h3 class="mb-2">Meditation Training</h3>
                        <p>
                            "Meditation, which is the practice of focused concentration, bringing yourself back to the
                            moment over and over again,
                            actually addresses stress, whether positive or negative." Meditation can also reduce the
                            areas of anxiety, chronic pain,
                            depression, heart disease and high blood pressure.
                        </p>
                    </div>
                    <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                    <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="yoga9.mp4"></video>
                </div>
            </div>
        </div>
    </section>

    <!-- section 5 ends -->


    <!-- section 6 starts -->
    <section class="classtime-section class-time-table spad" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Classtime Table</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timetable-controls">
                        <ul>
                            <li class="active" data-tsfilter="all">all class</li>
                            <li data-tsfilter="Yoga">Yoga</li>
                            <li data-tsfilter="Aerobics">Aerobics</li>
                            <li data-tsfilter="Wushu">Wushu</li>
                            <li data-tsfilter="Karate">Karate</li>
                            <li data-tsfilter="Medetation">Medetation</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="classtime-table">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="workout-time">10:00</td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>10:00 - 14:00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>10:00 - 15:00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>10:00 - 13:00</span>
                                <h6>Aerobics</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>10:00 - 13:30</span>
                                <h6>Aerobics</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">14:00</td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>14:00 - 17:00</span>
                                <h6>Aerobics</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>14:00 - 17:00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Karate">
                                <span>14:00 - 15:30</span>
                                <h6>Karate</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">16:00</td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>16:00 - 18:00</span>
                                <h6>Aerobics</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Medetation">
                                <span>16:00 - 19:00</span>
                                <h6>Medetation</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Medetation">
                                <span>16:00 - 19:00</span>
                                <h6>Medetation</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Wushu">
                                <span>16:00 - 17:00</span>
                                <h6>Wushu</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Wushu">
                                <span>16:00 - 20:00</span>
                                <h6>Wushu</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">18:00</td>
                            <td class="hover-bg ts-item" data-tsmeta="Karate">
                                <span>18:00 - 20:00</span>
                                <h6>Karate</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Wushu">
                                <span>18:00 - 20:00</span>
                                <h6>Wushu</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>18.00 - 22.00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Wushu">
                                <span>18:00 - 22:00</span>
                                <h6>Wushu</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">20:00</td>
                            <td class="hover-bg ts-item" data-tsmeta="Aerobics">
                                <span>21:00 - 23:00</span>
                                <h6>Aerobics</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Karate">
                                <span>20:00 - 22:00</span>
                                <h6>Karate</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="Karate">
                                <span>20:30 - 23:00</span>
                                <h6>Karate</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>22:00 - 23:00</span>
                                <h6>Yoga</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                <span>21:00 - 23:00</span>
                                <h6>Yoga</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <!-- section 6 ends -->


    <!-- section 7 starts -->

    <section class="our-team-area section-padding-80-50" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-aos="fade-up" data-aos-delay="200">

                        <h2>Our Team</h2>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"data-aos-delay="200" style="background-color: black;">
                        <div class="member-thumb">
                            <img src="Ajay.jpg" alt="">
                        </div>
                        <h5>Ajay kumar</h5>
                        <span>Backend developer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200" style="background-color: black;">
                        <div class="member-thumb">
                            <img src="Harman.jpg" alt="">
                        </div>
                        <h5>Harmanjeet singh</h5>
                        <span>Frontend developer</span>
                        <div class="member-social-info">
                            <a href="https://www.pexels.com/search/videos/yoga/"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200" style="background-color: black;" >
                        <div class="member-thumb">
                            <img src="Rinku.jpg" alt="">
                        </div>
                        <h5>Rinku kumar</h5>
                        <span>Frontend developer</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up"
                        data-aos-delay="200" style="background-color: black;">
                        <div class="member-thumb">
                            <img src="Amandeep kaur 2.jpg" alt="">
                        </div>
                        <h5> Amandeep kaur</h5>
                        <span>Figma artist</span>
                        <div class="member-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- section 7 ends -->

    <!-- section 8 starts -->
    <section class="event-section spad bg-light" id="event" style="background-color: black !important;">
        <div class="container">
            <div class="section-title text-center">
                <h2>Upcoming Events</h2>
                <p>Have a balance of perfect body and calm soul.</p>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="event-video">
                        <img src="event-1.jpg" alt="" class="event-img">
                        <a href="yoga1.mp4" class="video-popup"><img src="play.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="event-2.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Yoga Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Rinku kumar</li>
                                <li><i class="material-icons">event_available</i>28 June, 2024</li>
                                <li><i class="material-icons">map</i>909 De Villa Resto</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="event-3.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Aerobics Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Harmanjeet singh</li>
                                <li><i class="material-icons">event_available</i>15 January, 2024</li>
                                <li><i class="material-icons">map</i>TGB HALL Vesu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="ei-img">
                            <img src="event-4.jpg" alt="" class="event-img">
                        </div>
                        <div class="ei-text">
                            <h4><a href="#">Karate Competetion</a></h4>
                            <ul>
                                <li><i class="material-icons">person</i>Ajay kumar</li>
                                <li><i class="material-icons">event_available</i>21 June, 2021</li>
                                <li><i class="material-icons">map</i>Orange Hall</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 8 ends -->

    <!-- section 9  starts-->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 style="font-family: 'Lora', serif; letter-spacing: 2px;" class="mb-4 pb-2" data-aos="fade-up"
                        data-aos-delay="200">
                        Feel Free to ask anything
                    </h2>

                    <form action="#" method="post" class="contact-form webform" data-aos-delay="400" data-aos="fade-up"
                        role="form">


                        <input id="txtName" type="text" name="cf-name" class="form-control" placeholder="Name">
                        <input id="txtEmail" type="email" name="cf-email" class="form-control" placeholder="Emails">
                        <textarea id="txtFeedback" name="cf-messgae" rows="5" class="form-control" placeholder="Message"></textarea>
                        <button onclick="sendMessage()" type="submit" class="form-control" id="submit-button" name="submit">Send
                            Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 style="font-family: 'Lora', serif; letter-spacing: 2px;" class="mb-4" data-aos="fade-up"
                        data-aos-delay="600">
                        Where you can <span>find us</span>
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="800">
                        <i class="fa fa-map-marker mr-1"></i> CHANDIGARH UNIVERSITY, NH-05, Ludhiana - Chandigarh State Hwy, Punjab 140413
                    </p>
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2247.637423916432!2d76.57938064920704!3d30.77073834926687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ffb77bc1cf9dd%3A0xae6fa3721b26a8f0!2sBlock%20A1%20%2C%20Chandigarh%20University!5e0!3m2!1sen!2sin!4v1693046955968!5m2!1sen!2sin" 
                            width="1920" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                             referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 9  ends-->

    <!-- section 10 starts -->

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer_about">
                        <span>E-YOGA</span>
                        <ul>
                            <li>
                                <i class="fa fa-clock-o"></i> Mon - Fri : 08:30am - 09:00pm
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i> Sat - Sun : 08:30am - 01:30pm
                            </li>
                        </ul>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Your Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h5>Inspiration</h5>
                        <ul>
                            <li><a href="#">Yoga</a></li>
                            <li><a href="#">Spiritual</a></li>
                            <li><a href="#">Karate</a></li>
                            <li><a href="#">Aerobics</a></li>
                            <li><a href="#">Medetation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Introduce</a></li>
                            <li><a href="#">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h5>Contact Us</h5>
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i>9041-4979-21</li>
                            <li><i class="fa fa-envelope"></i>21BCA1106cuchd.in</li>
                            <li><i class="fa fa-location-arrow"></i>CHANDIGARH UNIVERSITY, NH-05, Ludhiana - Chandigarh State Hwy, Punjab 140413</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer_copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer_copyright_text">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer_copyright_social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 10 ends -->


    <!-- section 11 starts  -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="membershipFormLabel">
                        Membership Form
                    </h2>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="membership-form webform" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="John Doe" />

                        <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com" />

                        <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />

                        <textarea class="form-control" rows="3" name="cf-message"
                            placeholder="Additional Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">
                            Submit Button
                        </button>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="signup-agree" />
                            <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the
                                <a href="#">Terms &amp;Conditions</a>
                            </label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- section 11 ends  -->
o
   
</body>

</html>
  </body> -->
</html>
