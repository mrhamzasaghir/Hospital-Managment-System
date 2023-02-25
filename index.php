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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

<!-- Slider STart -->
<div id="slider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="overlay"></div>
      <img src="images/slide 1.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-uppercase fw-bold">Sunrise Hospital</h2>
        <p>World-Class expertise and a legacy of healthcare excellence.
To be the Best Hospital in Pakistan you must go Beyond Healthcare. Welcome to Doc Pulse Pakistan..</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="overlay"></div>
      <img src="images/slide 2.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-uppercase fw-bold">Beyond Healthcare</h2>
        <p>State-of-the-art technology, latest innovative techniques, personalised patient experiences. A multi-speciality hospital combining comfort, convenience & sophistication for every patient</p>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Slider end -->

<!-- Card -->
<section class="cards">  
<div class="container">
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="card text-center">
        <div class="icon-box">
          <img src="images/icon1.svg">
        </div>
        <h2>
          Experienced Staff
        </h2>
        <p>We have the qualified and experienced staff that will take care of you in safe hands </p>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="card text-center">
        <div class="icon-box">
          <img src="images/icon3.svg">
        </div>
        <h2>
          Eassy Appointment
        </h2>
        <p>We are available 24/7 for you. You can easly get an appointment from our qualified staff </p>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="card text-center">
        <div class="icon-box">
          <img src="images/icon2.svg">
        </div>
        <h2>
          Latest Technology
        </h2>
        <p>State-of-the-art technology, latest innovative techniques, personalised patient experiences</p>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Cards end -->

<!-- About Section-->
<section class="about text-center">
  <div class="container">
    <h4>About </h4>
    <h2>
    Sunrise hospital
    </h2>
    <p>At Sunrise Medical Hospital, we are passionate about our mission to deliver healthcare services to patients that go above and beyond anything they’ve experienced before.
    <br><br>  
    Our team of medical professionals bring a wealth of experience and knowledge to the community, showcasing a wide range of expertise across specialties. Designed with Pakistan in mind, the pristine facility is a combination of comfort, convenience and sophistication at every stage, for every patient.
    <br><br>
    From medical innovation to outpatient care, our legacy of excellence shows and we are committed to bringing a new standard of patient-first healthcare excellence to the region.</p>
  </div>
</section>

<!-- Services -->
<section class="services">
  <div class="container">
        <h4 class="text-center">Services</h4>
        <h2 class="text-center">Our Clinics</h2>
<div class="clinic">
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="text-center">
        <img src="images/clinics/family medicine.jpg">
        <a href="services.php"><h2>Family medicine</h2></a>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="text-center">
        <img src="images/clinics/ENT.jpg">
        <a href="services.php"><h2>ENT Specialist</h2></a>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="text-center">
        <img src="images/clinics/Cardiology.jpg">
        <a href="services.php"><h2>Cardiology</h2></a>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="text-center">
        <img src="images/clinics/eyes.jpg">
        <a href="services.php"><h2>Eyes Unit</h2></a>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="text-center">
        <img src="images/clinics/neu.jpg">
        <a href="services.php"><h2>Neurology</h2></a>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
      <div class="text-center">
        <img src="images/clinics/general.jpg">
        <a href="services.php"><h2>General Surgery</h2></a>
      </div>
    </div>
  </div>
  <div class="clinic-btn d-flex justify-content-center">
    <a href="services.php"><button>View All Services</button></a>
  </div>
</div>
</div>
</section>
<!-- Services Section END -->

<!-- Doctors -->
<section class="doctor">
  <div class="specialist">
  <h4 class="text-center">Doctors</h4>
        <h2 class="text-center">Our Specialist</h2>
        <div class="container">
          <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3 right-sec">
        <h2>
        Let Sunrise Medical Hospital <br>take care of your health
        </h2>
        <p>Sunrise Medical Hospital is a global healthcare investment group and believes access to healthcare is a fundamental right for everyone. The Group invests in emerging markets to bring private, quality driven healthcare to meet the needs of local people. The Sunrise Group is leading the way in transforming the traditional healthcare model through its integrated cross-continents platform, its impact driven model and quality driven hospitals.</p>
        <div class="doctorsec-btn d-flex justify-content-center">
        <a href="hms/user-login.php"><button>Read More</button></a>
      </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3">
      <div class="text-center">
        <img src="images/doctors/Zafar.jpg">
        <h2 class="doctorh2">Dr. Zafar Iqbal</h2>
        <h3 class="doctorh3">ENT Specialist</h3>
        <a href=".php"><button class="docbtn">Get An Appointment</button></a>
      </div>
    </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3">
      <div class="text-center">
        <img src="images/doctors/zenab.jpg">
        <h2 class="doctorh2">Dr. Zeinab Fatima</h2>
        <h3 class="doctorh3">Family Medicine</h3>
        <a href=".php"><button class="docbtn">Get An Appointment</button></a>
      </div>
    </div>
          </div>
        </div>
  </div>
</section>

<!-- Doctors Section End -->

<!-- Why Choose SMH -->
<section class="choose">
  <div class="container">
    <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
  <img src="images/choose.png">
</div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3 choosesec2">
      <h2>
        Why Choose Sunrise Medical Hospital?
      </h2>
      <ul>
        <li>Services Under One Roof</li>
        <li>Critical Care & Emergency Service</li>
        <li>Latest Medical Technology</li>
        <li>Qualified Medical Professionals</li>
      </ul>
      <a href="about.php"><button class="discover">
        Discover More
      </button></a>
</div>

    </div>
  </div>
</section>
<!-- Why Choose ENd -->

<!-- Total Section -->
<section class="total">
  <div class="container">
    <div class="row">
      <div class="text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
        <h2>100000+</h2>
        <h3>Patient Served</h3>
</div>
      <div class="text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
        <h2>200+</h2>
        <h3>Qualified Doctors</h3>
</div>
      <div class="text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
        <h2>500+</h2>
        <h3>Qualified Staff</h3>
</div>
    </div>
  </div>
</section>

<!--  FAQS -->
<section class="faq">
  <div class="container">
    <h3 class="text-center">Our</h3>
    <h2 class="text-center fw-bold location">Location & FAQS</h2>
    <div class="accordin">
    <div class="accordion" id="faqs">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
      Where is SMH Hospital in Pakistan located?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqs">
      <div class="accordion-body">
      Sunrise Medical Hospital Pakistan is conveniently located in La Salle Rd, Peer Khurshid 
      Colony Multan, Pakistan
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      What are the opening times of SMH Hospital?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqs">
      <div class="accordion-body">
      Our Clinics are open Monday-Sunday 8am – 8pm and our Emergency Department is 24 hours
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Does SHM  Hospital have a 24-Hour Emergency Department?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" 
    data-bs-parent="#faqs">
      <div class="accordion-body">
      Yes, Sunrise Medical Hospital has a fully equipped 24-Hour Emergency Department that has been 
      serving the local community and the wider Dubai areas for several years.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      What type of Doctors and Services does SMH have?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqs">
      <div class="accordion-body">
      Sunrise Medical Hospital is a multispecialty hospital catering for all major and several 
      niche services. Our services include but are not limited to: Allergy & Immunology Cardiac 
      Surgery Cardiology Dental Dermatology Endocrinology ENT Family Medicine Gastroenterology & 
      Hepatology General Surgery Head & Neck Surgery Hematology-Oncology Imaging & Radiology 
      Internal Medicine Nephrology Neurology Neurosurgery Obstetrics & Gynecology Ophthalmology 
      Orthopedic Surgery Pain Management Pediatrics Plastic Surgery Pulmonology Pychiatry & 
      Pyschology Rheumatology Urology Vascular Medicine. We also have a 24-Hour Emergency 
      Department.
      </div>
    </div>
  </div>
</div>
</section>
<section class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.9042690586284!2d71.46696901448665!3d30.211279617628183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b33f3daf6e737%3A0x92a5d98d1de24498!2sLa%20Salle%20Rd%2C%20Peer%20Khurshid%20Colony%20Chah%20Usman%20Wala%2C%20Multan%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1674755653816!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>



<!-- Total Section End -->



<!-- Footer Section -->
<footer class="text-lg-start text-muted footer">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
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
  <section class="fs2">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-hospital me-3"></i>Sunrise Medical Hospital
          </h6>
          <p class="details">
          At Sunrise Medical Hospital, we are passionate about our mission to deliver healthcare 
          services to patients that go above and beyond anything they’ve experienced before.
          </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 justify-content-start">
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
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
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
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p class="address"><i class="fas fa-home me-3"></i>La Salle Rd, Peer Khurshid Colony 
          Multan,Pakistan</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            <a href="mailto:info@smh.com">
            info@smh.com </a>
          </p>
          <p><i class="fas fa-phone me-3"></i> <a href="tel:+923049603842">+92 3049603842</p></a>
          <p><i class="fas fa-phone me-3"></i><a href="tel:+923187738842"> +92 3187738842</p></a>
        </div>
      </div>
    </div>
  </section>

  <div class="text-center p-4 fs3">
    © 2023 Copyright:
    <a class="text-reset fw-bold" >SMH.COM</a>
  </div>
</footer>
<!-- Footer Section end -->

<!-- SCript CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<!-- Script Custom JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/proper.js"></script>
<script src="js/proper.min.js.js"></script>
<script src="js/script.js"></script>
<script src="js/main.js"></script>

</body>
</html>