<?php
/*
Notes:

TODO: Manitouage
- enter data
- add admin access to invoices
- patient page
- images


TODO: Art Gallery
- lots

TODO: footer
- js for form

TODO: Posts
- post tags

TODO: Restaurant
*/
?>


<!doctype html>
<html lang="en">
<head>
    <?php include_once "./php/head.php"; ?>
    <!-- Document title -->
    <title>SKDS Home</title>
</head>
<body style="overflow-x: hidden;">

    <?php include_once "./php/header.php"; ?>

    <!-- Call To Action Start -->
    <section class="cta" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content text-center" data-aos="fade-right" data-aos-delay="200">
                    <h2>ACCOMPLISHED SOFTWARE DEVELOPER</h2>
                    <p>Over fifteen years of software development experience.</p>
                </div>
                <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="docs/SANDRA KÜPFER.pdf" download="SANDRA KÜPFER.pdf" class="btn btn-primary">Download Resume</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->

    <div class="title text-center mt-5 mb-4"  data-aos="fade-up" data-aos-delay="100" id="projects">
        <h2 class="title-blue ">Projects</h2>
    </div>

    <!-- Featured Start -->
    <section class="featured">
        <div class="container">
            <div class="title">
                <h6 class="title-primary">Website Redesign Group Project</h6>
                <h2 class="title-blue">Manitouadge General Hospital</h2>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                    <p>This project is the result of the work from several second semester classes of the Humber Web Development program. The goal is to showcase our ability to envision, plan, and implement a large-scale project with real-world application.</p>
                    <a href="http://skds.us-east-2.elasticbeanstalk.com/" class="btn btn-primary">Website</a>
                    <a href="https://github.com/ntrpi/ManitouadgeHospitalProject" class="btn btn-primary">Github</a>
                    <a href="https://drive.google.com/drive/folders/1Q3Dks1G-jq4-UOpELw_8PRKidU6pBUc3?usp=sharing" class="btn btn-primary">Docs</a>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
                    <div class="featured-img">
                        <img class="featured-big" src="img/manitouadge/home3.png" alt="Featured 1">
                        <img class="featured-small" src="img/manitouadge/home1.png" alt="Featured 2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured End -->

    <!-- Trust Start -->
    <section class="trust">
        <div class="container">
            <div class="row">
                <div class="col-md-5" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                    <div class="title">
                        <h6 class="title-primary">ASP.NET Passion Project</h6>
                        <h2>Art Gallery</h2>
                    </div>
                    <p>For this project we were encouraged to create an app about something we have a personal interest in. I started painting in spring of 2020 and I have found that I love it. I created this app as a way to showcase my work, and eventually sell it. Both the app and painting are a work in progress.</p>
                    <h5>Design & Development</h5>
                    <ul class="list-unstyled">
                        <li><a href="http://art-gallery-env.eba-pfm5mwmt.us-east-2.elasticbeanstalk.com/">Website</a></li>
                        <li><a href="https://docs.google.com/document/d/1VeD4BA_O6KAwlSA7q8AKKi96fWe1Rgdt_OUIhPCXpaM/edit?usp=sharing">Docs</a></li>
                        <li><a href="https://github.com/ntrpi/ArtGallery">Github</a></li>
                    </ul>
                </div>
                <div class="col-md-5 gallery">
                    <div class="row no-gutters">
                        <div class="w-50 h-100 gal-img-x" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="400">
                            <img class="img-fluid" src="img/artGallery/canvas1_2.jpg" alt="Website screenshot.">
                        </div>
                        <div class="w-50 h-50 gal-img-x" data-aos="fade-up"
                            data-aos-delay="400" data-aos-duration="600">
                            <!-- <img class="img-fluid" src="img/artGallery/home2.png" alt="Website screenshot.">
                            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="600"> -->
                                <img class="img-fluid" src="img/artGallery/canvas3.png" alt="Website screenshot.">
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trust End -->



    <?php include_once "./php/featuredPosts.php"; ?>

    <?php include_once "./php/footer.php"; ?>

    <?php include_once "./php/bodyScripts.php"; ?>
</body>
</html>


