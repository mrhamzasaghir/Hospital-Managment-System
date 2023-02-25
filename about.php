<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunrise Hospital</title>

    <!-- Fav Icon -->
    <link rel="icon" type="images/png" href="images/favicon2.png">
    <!-- BootStrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive.css?v=<?php echo time(); ?>">


</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- Top Header -->
    <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom Top-header">
        <div class="me-5 d-lg-block t-location">
            <i class="fa fa-location-arrow"><span>La Salle Rd, Peer Khurshid Colony Multan,Pakistan</span></i>
        </div>
        <div class="icons">
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </section>


    <!-- Main Header -->
    <div class="mainheader">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/logo2.png" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctor.php">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item appointment">
                            <a class="nav-link" href="hms/user-login.php">Get An Appointment</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                My Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="hms/admin" target="_blank">Admin</a></li>
                                <li><a class="dropdown-item" href="hms/doctor" target="_blank">Doctor</a></li>
                                <li><a class="dropdown-item" href="hms/user-login.php" target="_blank">Patient</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Main Header end -->
    <!-- Hero Section -->
    <section class="otherpage-hero">
        <h2 class="text-center">About Us</h2>
    </section>

    <!-- Overview -->
    <section class="overview">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 overview-info">
                    <h2>
                        Overview
                    </h2>
                    <p>
                        At Sunrise Medical Hospital, we are passionate about our mission to deliver healthcare services
                        to patients that go above and beyond anything they’ve experienced before.

                        Our team of medical professionals bring a wealth of experience and knowledge to the community,
                        showcasing a wide range of expertise across specialties. Designed with Pakistan in mind, the
                        pristine facility is a combination of comfort, convenience and sophistication at every stage,
                        for every patient.

                        From medical innovation to outpatient care, our legacy of excellence shows and we are committed
                        to bringing a new standard of patient-first healthcare excellence to the region.
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 overview-img">
                    <img src="images/about.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 who">
                    <h2>
                        Who we are?
                    </h2>
                    <p>
                        SMH in Pakistan is a fully equipped, state-of-the-art medical center, designed to offer patients
                        one of the most innovative treatments and technologies available in the region, in a safe,
                        compassionate environment.
                    </p>
                    <h2>
                        About Sunrise Medical Hospital
                    </h2>
                    <p>Founded in 2008, Sunrise Medical is committed to extending and advancing the mission of
                        patient-first medical excellence both regionally and internationally.

                        With a targeted course of expansion, CMI plans to pursue medical innovation and be a leading
                        healthcare facilitator in Pakistan.


                        We believe this not only upgrades the medical standard, but also makes the hospitalization
                        process easier and more rewarding for our patients and their families.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission  -->
    <section class="mission">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 mission-info">
                    <h2>
                        OUR MISSION
                    </h2>
                    <ul>
                        <li>Excellent service to our patients, customers, and physicians is our most important
                            consideration.</li>
                        <li>We will strive to build trust by providing our services with integrity.</li>
                        <li>Our employees are our most valuable assets. We will build an exceptional culture which will
                            attract and retain exceptional employees.</li>
                    </ul>
                    <h2>
                        OUR VISION
                    </h2>
                    <ul>
                        <li>The best evidence-based clinical practice delivered in a coordinated and integrated way.
                        </li>
                        <li>A person-centered experience, supported by systems and processes, that focuses on patients,
                            families, and all members of our organization.</li>
                        <li>A genuine sense of caring and concern seeing our service provisions as relationships and not
                            transactions with patients, families, and one another.</li>
                    </ul>
                    <h2>
                        OUR CORE VALUES
                    </h2>
                    <ul>
                        <li>Integrity: We operate in a transparent, evidence-based and ethical environment.</li>
                        <li>Caring: We care, beyond healthcare.</li>
                        <li>Mutual respect: We treat others the way we want to be treated.</li>
                        <li>Accountability: We accept responsibility and commit to continuous learning.</li>
                        <li>Trust: We can count on each other.</li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 mision-img">
                    <img src="images/mission.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="promise">
        <div class="container">
            <h2 class="text-center p-h">
                Our Promise
            </h2>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card text-center caring">
                        <div class="icon-box">
                            <img src="images/caring.svg">
                        </div>
                        <h2>
                            Caring
                        </h2>
                        <p>Caring is part of our mission hence we provide an outstanding healthcare experience to our
                            patient which goes beyond clinical treatment. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card text-center facilities">
                        <div class="icon-box">
                            <img src="images/hospital.svg">
                        </div>
                        <h2>
                            World Class Clinical Expertise
                        </h2>
                        <p>We belong to a credible healthcare network committed to provide the local community with our
                            international expertise bringing top tier medical professionals, highly advanced technology
                            and best practices to deliver an exceptional healthcare culture revolving around patient –
                            centered Care in Pakistan. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card text-center processor">
                        <div class="icon-box">
                            <img src="images/working.svg">
                        </div>
                        <h2>
                            Our Processor
                        </h2>
                        <p>We operate in a transparent, evidence-based and ethical environment where we value our
                            patients, business partners and people.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-lg-start text-muted footer">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>


            <!-- Right -->
            <div class="icons">
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="fs2">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-hospital me-3"></i>Sunrise Medical Hospital
                        </h6>
                        <p class="details">
                            At Sunrise Medical Hospital, we are passionate about our mission to deliver healthcare
                            services to patients that go above and beyond anything they’ve experienced before.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 justify-content-start">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            My Account
                        </h6>
                        <p>
                            <a href="hms/admin.php" class="text-reset">Admin</a>
                        </p>
                        <p>
                            <a href="hms/doctor.php" class="text-reset">Doctor</a>
                        </p>
                        <p>
                            <a href="hms/user-login.php" class="text-reset">Patient</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="about.php" class="text-reset">About</a>
                        </p>
                        <p>
                            <a href="doctor.php" class="text-reset">Doctors </a>
                        </p>
                        <p>
                            <a href="contact.php" class="text-reset">Contact</a>
                        </p>
                        <p>
                            <a href="services.php" class="text-reset">Services</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p class="address"><i class="fas fa-home me-3"></i>La Salle Rd, Peer Khurshid Colony
                            Multan,Pakistan</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:info@smh.com">
                                info@smh.com
                            </a>
                        </p>
                        <p><i class="fas fa-phone me-3"></i> <a href="tel:+923049603842">+92 3049603842</p></a>
                        <p><i class="fas fa-phone me-3"></i><a href="tel:+923187738842"> +92 3187738842</p></a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 fs3">
            © 2023 Copyright:
            <a class="text-reset fw-bold">SMH.COM</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer end -->

    <!-- SCript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <!-- Script Custom JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/proper.js"></script>
    <script src="js/proper.min.js.js"></script>
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>

</body>

</html>