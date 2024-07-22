<?php
include ("admin/includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/favicon-16x16.png" />
  <link rel="manifest" href="assets/images/logo/site.webmanifest" />
  <link rel="mask-icon" href="assets/images/logo/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <title>Pinal & Co.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="assets/css/style.css" />

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>

<body>

  <div id="loading-container" class="loading-container">
    <div class="logo-container">
      <img src="assets/images/logo/logo.png" alt="Logo" class="logo">
      <div class="buffering"></div>
    </div>
  </div>

  <header class="header-section scroll">
    <video autoplay muted loop class="myVideo d-md-block d-none">
      <source src="assets/images/banner-video.webm" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <div class="container-fluid d-md-none video-container">
      <video autoplay muted loop>
        <source src="assets/images/mob-banner-video.webm" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>

    <div class="header">
      <!-- ================= Navbar =================== -->
      <nav class="navbar">
        <div class="container-fluid text-center">
          <a class="wow animate__animated animate__fadeIn navbar-brand m-auto" data-wow-delay="0.25s" href="#">
            <img class="img-fluid" src="assets/images/logo/logo.png" alt="logo" width="300px" /></a>
        </div>
      </nav>
      <nav class="navbar d-none d-md-block">
        <div class="container-fluid text-center">
          <div class="container-fluid text-center py-2">
            <div class="m-auto">
              <a class="btn text-white m-2 josfin-font" href="#artits">The Artist</a>
              <a class="btn text-white m-2 josfin-font" href="#company">Company</a>
              <a class="btn text-white m-2 josfin-font" href="#project">Project</a>
              <a class="btn text-white m-2 josfin-font" href="#Achieves">Archives</a>
              <a class="btn text-white m-2 josfin-font" href="#blogs">Blogs</a>
              <a class="btn text-white m-2 josfin-font" href="#contactus">Contact us</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- ================= Navbar end =================== -->
    </div>

    <div class="wow animate__animated animate__fadeIn banner-heading text-white " data-wow-delay=".25s">
      <h1 class="josfin-font">“I design your desire.”</h1>
      <p class="me-5 fs-5 text-end">- Pinal Vadadoriya, Founder</p>
    </div>

    <div class="col-6 text-white d-flex align-items-center contact-us-text">
      <h4 class="ms-5"><a class="text-white btn fs-4" href="#contactus">Contact Us</a></h4>
    </div>

    <div class="menu d-md-none" id="menu-icon">
      <i class="bi bi-list text-light"></i>
    </div>

    <div class="sidebar" id="sidebar">
      <div class="close-icon" id="close-icon">
        <i class="bi bi-x"></i>
      </div>
      <a href="#artits">The Artist</a>
      <a href="#company">Company</a>
      <a href="#project">Project</a>
      <a href="#Achieves">Archives</a>
      <a href="#blogs">Blogs</a>
      <a href="#contactus">Contact us</a>
    </div>

  </header>



  <!-- ================= Banner end =================== -->

  <!-- ================= About Us =================== -->

  <section class="about-section vh-100 scroll">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-10">
          <p class="mb-0 fs-3">
            Pinal, a bespoke jewelry designer, intricately weaves stories of elegance and beauty into her unique
            creations. Each piece she crafts reflects the individuality and style of her clients, resonating deeply with
            their personalities and becoming cherished symbols of self-expression.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= About Us end=================== -->


  <!-- ================= Pinal start ================== -->

  <section class="pinal-section vh-100 scroll py-5">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-6 col-12">
          <h1 class="text-white">Pinal</h1>
          <p class="theme-text2 fs-4">
            My designs reflect your uniqueness, ensuring each piece is exactly what you want.
          </p>
          <p class="theme-text2 fs-4">
            When your style combines with my creativity, I can make something special just for you.
          </p>
        </div>
        <div class="col-md-6 col-12 text-end">
          <img src="assets/images/pinal.png" class="img-fluid vh-md-100" alt="pinal">
        </div>
      </div>
    </div>
  </section>

  <!-- ================= Pinal end=================== -->


  <!-- ================= Transforming Start =================== -->

  <section class="dream-section vh-100 scroll">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-12 text-start">
          <img src="assets/images/transform.png" class="img-fluid vh-md-100" alt="pinal">
        </div>
        <div class="col-md-6 col-12 px-md-5">
          <p class="fs-4">
            “Transforming dreams into reality that reflects your style, your journey, your story.”
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Transforming end =================== -->


  <!-- ================= company start =================== -->
  <section class="company-section vh-100 scroll">

  </section>
  <!-- ================= company end =================== -->
  <!-- <hr> -->

  <!-- ================= Why-us Section =================== -->
  <section class="why-section vh-100 scroll">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-12">
          <h1 class="text-black">Why Us?</h1>
          <p class="theme-text fs-4">
            We provide our expertise in the making of
            One of a kind masterpiece
          </p>
        </div>
        <div class="col-ms-6 col-12 text-end">
          <img src="assets/images/why.png" class="img-fluid vh-md-100" alt="pinal">
        </div>
      </div>
    </div>
  </section>

  <!-- ================= Why-us Section end =================== -->


  <!-- ================= Why-bespoke Section end =================== -->
  <section class="why-bespoke vh-100 scroll">
    <div class="comtainer">
      <div class="row align-items-center justify-content-center">
        <div class="col-10 text-center">
          <h1>Why bespoke jewelry?</h1>
          <p class="fs-5">Bespoke jewelry stands out from other ordinary jewelry pieces because it's made just for you,
            reflecting
            your style.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Why-bespoke Section end =================== -->


  <!-- ================= Step 1 Section end =================== -->
  <section class="step-1 vh-100 scroll">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-12">
          <div class="row align-items-center justify-content-center">
            <div class="col-2">
              <h1 class="mb-0 fs-1">01</h1>
            </div>
            <div class="col-10">
              <hr class="hr">
            </div>
            <div class="col-12 mt-5">
              <h2>UNIQUE EPRESSTION</h2>
              <p class="theme-text fs-4">Unlike ordinary jewelry, bespoke pieces are personalized, making them special
                and
                unique to you, with
                sentimental value that lasts.</p>
            </div>
          </div>

        </div>
        <div class="col-md-6 col-12 text-end">
          <img src="assets/images/step-1.png" class="img-fluid vh-md-100" alt="pinal">
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Step 1 Section end =================== -->


  <!-- ================= Step 2 Section end =================== -->
  <section class="step-2 vh-100 scroll">
    <div class="container">
      <div class="row align-items-center flex-wrap-reverse">
        <div class="col-md-6 col-12 text-start">
          <img src="assets/images/step-2.png" class="img-fluid vh-md-100" alt="pinal">
        </div>
        <div class="col-md-6 col-12">
          <div class="row align-items-center justify-content-center">
            <div class="col-2">
              <h1 class="mb-0 fs-1">02</h1>
            </div>
            <div class="col-10">
              <hr class="hr">
            </div>
            <div class="col-12 mt-5">
              <h2>Lifetime Investment</h2>
              <p class="theme-text fs-4">Bespoke jewelry is not just a purchase. it's an investment in quality,
                craftsmanship, and timeless beauty that can be passed down as a cherished family heirloom.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Step 2 Section end =================== -->


  <!-- ================= Step 3 Section end =================== -->
  <section class="step-1 vh-100 scroll">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-12">
          <div class="row align-items-center justify-content-center">
            <div class="col-2">
              <h1 class="mb-0 fs-1">03</h1>
            </div>
            <div class="col-10">
              <hr class="hr">
            </div>
            <div class="col-12 mt-5">
              <h2>Bond of Trust</h2>
              <p class="theme-text fs-4">Working closely with a skilled jeweler to bring a vision to life CreatEs a bond
                of trust and collaboration, ensuring that the final piece exceeds expectations and reflects the client's
                unique vision and personality.</p>
            </div>
          </div>

        </div>
        <div class="col-md-6 col-12 text-end">
          <img src="assets/images/step-3.png" class="img-fluid vh-md-100" alt="pinal">
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Step 3 Section end =================== -->


  <!-- ================= How do we work Section start =================== -->

  <section class="pinal-section vh-100 scroll py-5">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-6 col-12 text-start">
          <img src="assets/images/how.png" class="img-fluid vh-md-100" alt="pinal">
        </div>
        <div class="col-md-6 col-12">
          <h1 class="text-white">How do we work ?</h1>
          <p class="fs-5 text-white theme-text2">
            Your wildest ideas turn into spectacularcreations in front of your eyes.
          </p>
          <p class="theme-text2 fs-4">
            when ideas take shape and decisions are made. We carefully choose the type of stones, the setting technique,
            the raw materials and the colour gradients that will be used to create your exceptional piece.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= How do we work Section end =================== -->



  <!-- ================= how its work Section =================== -->
  <section class="how-section wow animate__animated animate__fadeIn scroll vh-100" data-wow-delay="0.25s">
    <div class="container-fluid px-0 d-md-block d-none">
      <video autoplay muted loop>
        <source src="assets/images/video-2.webm" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>

    <div class="container-fluid d-md-none video-container">
      <video autoplay muted loop>
        <source src="assets/images/mob-video-2.webm" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>

    <div class="how-its-work">
      <div class="container-fluid">
        <div class="row theme-text2 justify-content-center align-items-center">
          <div class="col-12 col-md-8 text-center">
            <p class="fs-md-1 fs-3 text-center">
              You will have the extraordinary masterpiece
              Only belongs to you.
            </p>

            <a href="" class="btn bg-white px-5 py-2"> Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= how its work  Section end =================== -->


  <!-- ================= Projects Section =================== -->
  <section class="project-section scroll vh-100" id="project">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading text-center">
            <h2 class="m-auto fs-1 w-100 the-season-font py-3 wow animate__animated animate__fadeInUp">
              My Design Work
            </h2>
          </div>
          <div class="container-fluid content wow animate__animated animate__fadeIn" data-wow-delay="0.25s">
            <div class="row project-slider">
              <?php
              $project = mysqli_query($conn, "SELECT * FROM `project` ORDER BY `id` DESC");
              while ($row = mysqli_fetch_assoc($project)) {
                ?>
                <div class="col-4">
                  <div class="project-card rounded py-3">
                    <img src="assets/images/projects/<?php echo $row['img'] ?>" class="img-fluid" alt="" />
                    <h6 class="fs-4 text-center mt-2"><?php echo $row['title'] ?></h6>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Project Section end =================== -->

  <!-- ================= Achivement  Section =================== -->
  <section class="acheivement scroll vh-100 overflow-hidden" id="Achieves">
    <div class="row align-items-center justify-content-center">
      <div class="col-8 bg-white">
        <div class="row px-0 align-items-center wow animate__animated animate__fadeIn">
          <div class="col-md-5 col-12 ps-0">
            <img src="assets/images/how.png" class="img-fluid" alt="pinal">
          </div>
          <div class="col-md-7 col-12">
            <h5 class="theme-text2"> ACHIEVEMENT</h5>
            <h1>Pinal & co.</h1>
            <p class="theme-text2">
              You will have the extraordinary masterpiece
              Only belongs to you.
            </p>
            <p class="theme-text2"> One of the most notable achievements in the jewelry design industry is by Elsa
              Peretti, a celebrated designer who transformed the industry with her modern and innovative designs. Her
              iconic creations, such as the "Bone Cuff" and the "Open Heart" necklace</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="achive-bar container-fluid bg-black scroll">
    <div class="row px-0 py-3 text-white align-items-center" id="marquee-container">
      <marquee direction="left" behavior="scroll" scrollamount="5">
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" class="img-fluid" alt="">
        </div>
        <div class="col">
          DOI WINNER-2023
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" class="img-fluid" alt="">
        </div>
        <div class="col">
          PROFESSTIONAL JEWELRY DIGNE(IGI)
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" class="img-fluid" alt="">
        </div>
        <div class="col">
          GSI DIAMOND ESSENTIALS
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" class="img-fluid" alt="">
        </div>
        <div class="col">
          DCA DIAMOND CERTIFIED
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" class="img-fluid" alt="">
        </div>
        <div class="col">
          DOI 2ND RUNNER UP-2022
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" class="img-fluid" alt="">
        </div>
      </marquee>
    </div>
  </div>
  <!-- ================= Achivement  Section end =================== -->

  <!-- ================= Blog Section =================== -->
  <section class="product-section py-5 pt-0 scroll" id="blogs">
    <div class="container-fluid px-0">
      <div class="section-heading text-center">
        <h2 class="pb-3 pt-5 m-auto fs-1 the-season-font w-100">Our Blogs</h2>
      </div>
      <div class="container content mt-5">
        <div class="row">
          <?php
          $blog = mysqli_query($conn, "SELECT * FROM `blogs` ORDER BY `id` DESC LIMIT 3");
          while ($row = mysqli_fetch_assoc($blog)) {
            ?>

            <div class="col-lg-4 col-md-6 col-12 " data-wow-delay="0.25s">
              <div class="shadow rounded blog-card">

                <a href="">
                  <img src="assets/images/post/<?php echo $row['cover'] ?>" class="img-fluid" alt="" />
                  <p class="p-3 text-secondary pb-0 mb-0">
                    <?php
                    $dateString = $row['timestamp'];
                    $formattedDate = date("d M, Y", strtotime($dateString));
                    echo $formattedDate; // Output: 21 Apr, 2024
                    ?>
                  </p>
                  <h5 class="p-3 py-0 mb-0 text-white"
                    style="width: 100%; text-wrap: nowrap; overflow-x: hidden;text-overflow: ellipsis;">
                    <?php echo $row['title'] ?>
                  </h5>
                  <p class="p-3 pt-0 text-secondary"
                    style=" text-wrap:nowrap; overflow-x: hidden;text-overflow: ellipsis; width: 100%; ">
                    <?php echo $row['short_desc'] ?>
                  </p>
                </a>
              </div>
            </div>

          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Blog Section end =================== -->

  <!-- ================= Contact us Section =================== -->
  <section class="contact-us py-5 scroll" id="contactus">
    <div class="container rounded-3">
      <div class="section-heading text-center mb-5">
        <h2 class="border-bottom border-3 border-black pb-2 px-2 the-season-font m-auto fs-1 mb-3">
          Contact us
        </h2>
      </div>

      <div class="form">
        <form id="appointmentForm">
          <div class="row">
            <div class="col-md-6 col-12 mb-4">
              <!-- <label for="name" class="mb-2">FULL NAME*</label> -->
              <input type="text" name="name" class="form-control p-2 rounded-0" placeholder="FULL NAME*" required />
            </div>
            <div class="col-md-6 col-12 mb-4">
              <!-- <label for="email" class="mb-2">EMAIL ID*</label> -->
              <input type="email" name="email" class="form-control p-2 rounded-0" placeholder="EMAIL ID*" required />
            </div>
            <div class="col-md-6 col-12 mb-4">
              <!-- <label for="phone" class="mb-2">MOBILE NUMBER*</label> -->
              <input type="tel" id="phone" name="phone" class="form-control rounded-0" required />
            </div>
            <div class="col-d-6 col-12 mb-4">
              <!-- <label for="subject" class="mb-2">SELECT SERVICE</label> -->
              <select name="service" class="form-control rounded-0" required>
                <option value="" selected disabled>SELECT SERVICE</option>
                <option value="Virtual Appointment">Virtual Appointment</option>
                <option value="Private Appointment">Private Appointment</option>
              </select>
            </div>
            <!-- <div class="col-12">
              <label for="subject" class="mb-2">SUBJECT*</label>
            </div> -->
            <div class="col-md-6 col-12 mb-4">
              <!-- <label for="subject" class="mb-2"></label> -->
              <select name="contact_method" class="form-control rounded-0" required>
                <option value="" selected disabled>Select a method</option>
                <option value="" selected disabled>PREFERRED CONTACT METHOD*</option>
                <option value="Email">Email</option>
                <option value="Call">Call</option>
                <option value="Whatsapp">Whatsapp</option>
              </select>
            </div>
            <div class="col-md-2 col-5  mb-4">
              <input type="radio" name="subject" checked value="Enquire" onclick="toggleDateTimePicker(this)"
                required />
              <label for="subject" class="mb-2">Enquire</label>
            </div>
            <div class="col-md-4 col-7 mb-4">
              <input type="radio" name="subject" value="book an Appointment" onclick="toggleDateTimePicker(this)"
                required />
              <label for="subject" class="mb-2">Book an Appointment</label>
            </div>

            <div class="col-12 mb-4" id="dateTimePicker" style="display: none;">
              <label for="subject" class="mb-2">PREFERRED DATE AND TIME</label>
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <input type="date" id="date" name="date" class="form-control rounded-0" />
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <input type="time" id="time" name="time" class="form-control rounded-0" />
                </div>
              </div>
            </div>
            <div class="col-12 mb-4">
              <label for="message" class="mb-2">MESSAGE*</label>
              <textarea name="message" class="form-control rounded-0" cols="30" rows="5"
                placeholder="Type your message here..." required></textarea>
            </div>
            <div class="col-lg-4 mb-3 m-auto">
              <input type="submit" id="submitBtn" class="btn submit-btn text-white w-100 rounded-0" value="SUBMIT" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- ================= Contact us Section end =================== -->

  <!-- ================= Footer Section =================== -->
  <footer class="footer-section pt-5 scroll"
    style="background: url(assets/images/footer_bg.png);background-position: center;background-size: cover;">
    <div class="container">
      <div class="row justify-content-evenly">
        <div class="col-md-4 col-12 mb-5">
          <h2 class="text-white mb-0">PINAL & CO.</h2>

          <p class="text-white">BESPOKE JEWELRY DESIGNER</p>

          <p class="text-light">
            Empowering Movement, Enhancing Lives
          </p>

          <p class="text-light">
            <i class="bi bi-telephone"></i> +91 9998679654 &nbsp; +1 (647) 615 9654
          </p>
          <p class="text-light">
            <i class="bi bi-geo-alt"></i> Surat, Gujrat, India
          </p>
          <p class="text-light fs-5 mb-0">
            By Appointment:
          </p>
          <p class="text-light">
            Monday - Saturday, 11:00 AM - 5PM
          </p>


        </div>
        <div class="col-md-4 col-12 mb-5">
          <h4 class="text-white">The Company</h4>
          <ul class="ps-0">
            <li class="mb-1"> <a href="/">Home</a></li>
            <li class="mb-1"> <a href="#artists">The artist</a></li>
            <li class="mb-1"> <a href="#company">Company</a></li>
            <li class="mb-1"> <a href="#Achieves">Archives</a></li>
            <li class="mb-1"> <a href="#project">Project</a></li>
            <li class="mb-1"> <a href="#blogs">Blogs</a></li>
            <li class="mb-1"> <a href="#contactus">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-12 mb-5">
          <h4 class="text-white">Subscribe Pinal & Co.</h4>
          <p class="text-white">
            Subscribe and follow Pinal&co for exclusive access to inspiration, the latest news, and invitations to
            events nearest you.
          </p>
          <p>
            <a href="mailto:info@pinalandco.com"><u>info@pinalandco.com</u> </a>
          </p>

          <a href="https://api.whatsapp.com/send?phone=+918160842357&text=Hello" target="_blank"><i
              class="bi bi-whatsapp fs-3 mx-1"></i></a>
          <a href=""><i class="bi bi-facebook fs-3 mx-1"></i></a>
          <a href=""><i class="bi bi-twitter-x fs-3 mx-1"></i></a>
          <a href=""><i class="bi bi-instagram fs-3 mx-1"></i></a>
        </div>

        <hr class="border-white" />
        <div class="col-12 text-white text-center">
          <p>© <?php echo date('Y') ?> - All Right Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================= Footer Section end =================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

  <script>
    $(document).ready(function () {
      $('#menu-icon').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('body').toggleClass('no-scroll');
      });

      $('#close-icon').on('click', function () {
        $('#sidebar').removeClass('active');
        $('body').removeClass('no-scroll');
      });

      $('#close-icon, .sidebar a').on('click', function () {
        $('#sidebar').removeClass('active');
        $('body').removeClass('no-scroll');
      });

    });
  </script>



  <script>
    $(document).ready(function () {
      $(".my-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        prevArrow: false,
        nextArrow: false,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    });

    $(".project-slider").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      prevArrow: false,
      nextArrow: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
    $(".product-slider").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      prevArrow: false,
      nextArrow: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
    $(".value-slider").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      prevArrow: false,
      nextArrow: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
    $(".company-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      prevArrow: false,
      nextArrow: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
    $(".archive-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      prevArrow: false,
      nextArrow: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  </script>

  <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      initialCountry: "in", // Set initial country to India
    });

    // Set default country code in the input field
    const selectedCountryData = phoneInput.getSelectedCountryData();
    const dialCode = selectedCountryData.dialCode;
    phoneInputField.value = "+" + dialCode;

    // Listen for the "countrychange" event
    phoneInputField.addEventListener("countrychange", function () {
      const selectedCountryData = phoneInput.getSelectedCountryData();
      const dialCode = selectedCountryData.dialCode;

      // Get the current value of the input field
      let currentValue = phoneInputField.value;

      // Check if the current value already contains the dial code
      if (!currentValue.startsWith("+" + dialCode)) {
        // Prepend the dial code to the current value
        currentValue = "+" + dialCode + currentValue;
        // Set the updated value back to the input field
        phoneInputField.value = currentValue;
      }
    });


  </script>


  <script>
    function toggleDateTimePicker(radio) {
      var dateTimePicker = document.getElementById('dateTimePicker');
      var currentDate = new Date();
      var dateInput = document.getElementById('date');
      var timeInput = document.getElementById('time');

      if (radio.value === 'book an Appointment') {

        dateTimePicker.style.display = 'block';
      } else {
        // Clear date and time inputs
        dateInput.value = '';
        timeInput.value = '';

        dateTimePicker.style.display = 'none';
      }
    }
  </script>

  <script>
    $(document).ready(function () {
      $('#appointmentForm').on('submit', function (event) {
        event.preventDefault();

        $.ajax({
          url: 'submit_form.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function (response) {
            Swal.fire({
              title: 'Success!',
              text: 'Your appointment has been booked successfully.',
              icon: 'success',
              confirmButtonText: 'OK'
            }).then(function () {
              $('#appointmentForm')[0].reset();
            });
          },
          error: function () {
            Swal.fire({
              title: 'Error!',
              text: 'There was an error booking your appointment.',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          }
        });
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      window.addEventListener("load", function () {
        const loadingContainer = document.getElementById("loading-container");

        loadingContainer.style.display = "none";
      });
    });

  </script>


</body>

</html>