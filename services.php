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
    <!-- Hero -->
    <section class="otherpage-hero">
        <h2 class="text-center">Our Services</h2>
    </section>

    <!-- Service 1 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-info">
                    <h2>
                        Family Medicine
                    </h2>
                    <p>
                        In our family medicine clinic, we look at the patient in an holistic way. We
                        consider his/her physical ailments in accordance with any psychological or
                        emotional issues that might affect them.

                        We use both modern/western and alternative medicine to help our patients feel
                        better. We are
                        involved with the whole family-grandparents, parents and children and involve
                        what we know about
                        their history in their care.

                        Occupational Health describes illnesses that are mostly work related from acute
                        work injuries to
                        chronic work-related issues.
                    </p>
                    <div class="service-btn">
                        <a href="hms/user-login.php">Get An Appointment</a>
                        <a href="Dr. Zeinab Fatima.php">Specilized Doctor</a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-img">
                    <img src="images/clinics/family medicine.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- Service 2 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-info">
                    <h2>
                        ENT (Ear, Nose Throat)
                    </h2>
                    <p>
                        The Department of Otolaryngology – Head and Neck Surgery at SHM offers care to
                        patients suffering from diseases of the ear, nose and throat. Our team of
                        highly qualified professionals will do their best to make sure our patients
                        receive the best and most efficient treatment.

                        Whether you suffer from hearing loss, balance problems, breathing difficulty,
                        or swallowing difficulty we will help you regain your health and return
                        to a normal lifestyle.
                    <div class="service-btn">
                        <a href="hms/user-login.php">Get An Appointment</a>
                        <a href="Dr. Zafar Iqbal.php">Specilized Doctor</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-img">
                    <img src="images/clinics/ENT.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 3 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-info">
                    <h2>
                        Cardiology
                    </h2>
                    <p>
                        The Heart Center offers a cardiac laboratory that performs a multitude of non-
                        invasive and minimally invasive diagnostic tests, using state-of-the-art
                        equipment and technology for both adult and pediatric patients.

                        Everything you need from a Pakistan Cardiologist is at SMH. These include
                        stress test, transthoracic, and trans-esophageal echocardiography. This is in
                        addition to the
                        interventional Cardiac Catheterization lab. Our US, UK & German Board Doctors
                        are ranked as some of
                        the best cardiologists in Pakistan.
                    </p>
                    <div class="service-btn">
                        <a href="hms/user-login.php">Get An Appointment</a>
                        <a href="Dr. Yasir Prvaiz.php">Specilized Doctor</a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 align-items-end service-img">
                    <img src="images/clinics/Cardiology.jpg">
                </div>
            </div>
        </div>
    </section>


    <!-- Service 4 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-info">
                    <h2>
                        Eyes Unit
                    </h2>
                    <p>
                        The ophthalmology Unit at SMH comprises of leading-edge clinicians who
                        provide routine and complex ophthalmic care to a wide variety of patients. Our
                        team is comprised of top-notch doctors trained at world class
                        institutions. They offer personalized medical and surgical treatments that best
                        fit our patients’ professional and recreational needs. From our outpatient
                        clinic visit to our operating theater procedures we constantly thrive to ensure
                        the optimum patient experience.
                    </p>
                    <div class="service-btn">
                        <a href="hms/user-login.php">Get An Appointment</a>
                        <a href="Dr. Hassan Abdul.php">Specilized Doctor</a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 align-items-end service-img">
                    <img src="images/clinics/eyes.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 5 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-info">
                    <h2>
                        Neurology
                    </h2>
                    <p>
                        Our Neuroscience Center incorporates both neurology and neurosurgery. Our
                        principles are Excellence, Care, and Support provided to our valuable patients.
                        SMH advanced diagnostic treatments and consultative services in every aspect of
                        neurological medicine
                        We care for patients with the spectrum of neurologic disorders, from routine
                        outpatient conditions to life-threatening disorders which require an intensive
                        care unit and around the clock monitoring. You must come to our service if you
                        are experiencing one of these symptoms
                    </p>
                    <div class="service-btn">
                        <a href="hms/user-login.php">Get An Appointment</a>
                        <a href="Dr. Amar Ali.php">Specilized Doctor</a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 align-items-end service-img">
                    <img src="images/clinics/neu.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 6 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-info">
                    <h2>
                        General Surgery
                    </h2>
                    <p>
                        Our highly trained surgeons perform a wide variety of surgical procedures
                        primarily on the thyroid, breast, esophagus, stomach, small intestines, gall
                        bladder, liver, pancreas, colon, rectum, appendix, and skin. They utilize the
                        most up-to-date surgical techniques —including advanced minimally invasive such
                        as da Vinci system—so patients experience less pain, smaller scars and quicker
                        recovery. Our surgeons work closely with other specialties using a multi-
                        disciplinary team approach to diagnose and provide timely surgical intervention
                        for complex and malignant conditions.
                    </p>
                    <div class="service-btn">
                        <a href="hms/user-login.php">Get An Appointment</a>
                        <a href="Dr. Waleed Faraz.php">Specilized Doctor</a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 align-items-end service-img">
                    <img src="images/clinics/general.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 7 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-info">
                    <h2>
                        Back Pain Clinic
                    </h2>
                    <p>
                        We use the latest MRI imaging technology and for persistent and long-term back
                        pain, we also provide the latest in advanced non-surgical pain management
                        procedures such as percutaneous radio frequency treatments. If conservative and
                        minimally invasive alternatives cannot cure the underlying pain, we have board
                        certified and experienced spine surgeons
                        .If you have been suffering from lower back pain for a
                        sustained period of time, then you should see our specialist team to determine
                        a proper treatment plan.
                    </p>
                    <div class="service-btn">
                        <a href="hms/user-login.php">Get An Appointment</a>
                        <a href="Dr. Khalid Iqbal.php">Specilized Doctor</a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 align-items-end service-img">
                    <img src="images/clinics/back pain.webp">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 8 -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 service-info">
                    <h2>
                        Thyroid Clinic
                    </h2>
                    <p>
                        The Thyroid Clinic in SMH is operated by a multidisciplinary team of Endocrinologists, ENT
                        Specialists, Medical Oncologists Radiologist, Pathologists and General Surgeons specialists in
                        minimally invasive thyroid & robotic thyroid surgery. This unique approach is designed to ensure
                        you receive the care and attention from the best thyroid doctors in Dubai to optimize your
                        treatment plan and recovery.

                        Our goal is to enhance the experience of patients and families via our patient centered model of
                        care practice, maintaining, and improving our service of excellence.
                    </p>
                    <div class="service-btn">
                        <a href="hms/user-login.php">Get An Appointment</a>
                        <a href="Dr. Amina Aslam.php">Specilized Doctor</a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 align-items-end service-img">
                    <img width="100%" src="images/clinics/thriod.jpg">
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
                        <p class="address"><i class="fas fa-home me-3"></i>Lahore, Punjab, Pakistan</p>
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
    <!-- Footer -->

</body>

</html>