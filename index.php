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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>

  <!-- Link to Wow.js (you can also download and host it locally) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>

<body>

  <header class="header-section">
    <video autoplay muted loop id="myVideo">
      <source src="assets/images/banner-video.webm" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    <div class="header">
      <!-- ================= Navbar =================== -->
      <nav class="navbar">
        <div class="container-fluid text-center">
          <a class="navbar-brand m-auto animate__fadeIn animate__animated" href="#"><img class="img-fluid"
              src="assets/images/logo/logo.png" alt="logo" width="300px" /></a>
        </div>
      </nav>
      <nav class="navbar">
        <div class="container-fluid text-center">
          <div class="container-fluid text-center py-2">
            <div class="m-auto">
              <a class="btn text-white m-2 josfin-font" href="#artits">The Artist</a>
              <a class="btn text-white m-2 josfin-font" href="#company">Company</a>
              <a class="btn text-white m-2 josfin-font" href="#Achieves">Archives</a>
              <a class="btn text-white m-2 josfin-font" href="#project">Project</a>
              <a class="btn text-white m-2 josfin-font" href="#">Blogs</a>
              <a class="btn text-white m-2 josfin-font" href="#contactus">Contact us</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- ================= Navbar end =================== -->

      <!-- ================= Banner =================== -->

      <div class="row container p-5 mt-5 ">
        <div class="col-6 text-center text-white">
          <h1 class="the-season-font">“I design your desire.”</h1>
          <p class="ps-5 ms-5">- Pinal Vadadoriya, Founder</p>
        </div>
      </div>
      <div class="row container p-5 mt-5 pb-0">
        <div class="col-6 text-white">
          <h5 class="ms-5">Contact Us</h5>
        </div>
      </div>
    </div>
  </header>
  <!-- ================= Banner end =================== -->

  <!-- ================= Artist =================== -->
  <section class="artist-section pt-5 theme-bg2" id="artits">
    <div class="container-fluid">
      <h2 class="text-white pb-2 px-2 m-auto fs-1 the-season-font animate__fadeInUp animate__animated text-center">
        Pinal
      </h2>
      <div class="row align-items-center text-white">
        <div class="col-12 col-lg-5 px-0">
          <img src="assets/images/2.jpg" class="img-fluid " alt="">
        </div>
        <div class="col-12 col-lg-7">
          <p class="fs-4 text-center me-5 px-lg-5">
            My designs reflect your uniqueness, ensuring each piece is
            exactly what you want.
          </p>
          <p class="fs-4 text-center me-5 px-lg-5">
            When your style combines with my
            creativity, I can make something
            special just for you.

          </p>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Artist end=================== -->
  <!-- <hr> -->
  <!-- ================= Company =================== -->
  <section class="company-section py-5" id="company">
    <div class="container-fluid">
      <div class="section-heading text-center">
        <h2 class=" text-white pb-2 px-2 m-auto fs-1 the-season-font w-100"
          style="box-shadow: rgba(0, 0, 0, 0.3735) 0px 50px 83px -28px inset;">
          Company
        </h2>
      </div>
    </div>
  </section>

  <div class="container-fluid">
    <div class="row">
      <div class="col-4 p-0">
        <img src="assets/images/4 A.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-4 p-0">
        <img src="assets/images/4 b.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-4 p-0">
        <img src="assets/images/4 c.JPG" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  <div class="container-fluid transform-text py-5">
    <div class="row justify-content-center py-4">
      <div class="col-6 text-center">
        <h3>“Transforming dreams into reality that reflects your
          style, your journey, your story.”</h3>
      </div>
    </div>
  </div>
  <!-- ================= company end =================== -->
  <!-- <hr> -->
  <!-- ================= Why Section =================== -->
  <section class="why-section text-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4 p-0">
          <img src="assets/images/5 a.JPG" class="img-fluid" alt="">
        </div>
        <div class="col-4 p-0">
          <img src="assets/images/5 b.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-4 p-0">
          <img src="assets/images/5 c.JPG" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <div class="why-text" style="box-shadow: rgba(0, 0, 0, 37.35) 0px -50px 83px -28px inset;">
      <h2 class="fs-1 text-center">Why bespoke jewelry?</h2>
      <p class="text-center">BESPOKE JEWELRY STANDS OUT FROM OTHER
        ORDINARY JEWELRY PIECES BECAUSE IT'S MADE <br>
        JUST FOR YOU, REFLECTING YOUR STYLE.</p>
    </div>

  </section>
  <div class="container-fluid theme-bg py-5">
    <div class="row justify-content-center py-4">
      <div class="col-12 col-lg-6">
        <p class="fs-5 text-center theme-text">
          UNLIKE ORDINARY JEWELRY, BESPOKE PIECES
          ARE PERSONALIZED, MAKING THEM SPECIAL
          AND UNIQUE TO YOU, WITH SENTIMENTAL
          VALUE THAT LASTS.
        </p>
      </div>
    </div>
  </div>
  <!-- ================= why Section end =================== -->
  <!-- <hr> -->
  <!-- ================= Why-us Section =================== -->
  <section class="why-us-section theme-bg2">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center ">
        <div class="col-7">
          <h2 class="fs-1 ms-5 text-white">Why us?</h2>
          <p class="fs-5 text-justify ms-5 text-secondary animate__fadeInUp animate__animated">
            WE PROVIDE OUR EXPERTISE IN THE MAKING OF <br>
            ONE OF A KIND MASTER PIECE
          </p>
        </div>
        <div class="col-5 px-0 shadow-img">
          <img src="assets/images/6.jpg" class="img-fluid " alt="">
        </div>

      </div>
    </div>
    </div>
  </section>

  <div class="container-fluid theme-bg py-5">
    <div class="row justify-content-center py-4">
      <div class="col-12 col-lg-6">
        <p class="fs-5 text-center theme-text">
          EXPERIENCE PERSONALIZED LUXURY WITH AWARD-WINNING
          JEWELRY DESIGNER CRAFTING EXTRAORDINARY PIECES
          SPECIFICALLY CRAFTED FOR YOU.
        </p>
        <p class="fs-5 text-center theme-text mt-5 text-white">
          GET EXACTLY WHAT YOU WANT
        </p>
        <p class="fs-5 text-center theme-text">
          I BELIEVE THAT WHEN YOU’RE PURCHASING A PIECE OF
          JEWELLERY, IT SHOULD BE EXACTLY WHAT YOU’RE LOOKING FOR.
        </p>
      </div>
    </div>
  </div>
  <!-- ================= Why-us Section end =================== -->
  <!-- <hr> -->
  <!-- ================= how its work Section =================== -->
  <section class="how-section" id="Achieves">
    <div class="container-fluid px-0">
      <img src="assets/images/7.JPG" class="img-fluid" alt="">
    </div>

    <div class="how-its-work">
      <div class="container-fluid">
        <div class="row theme-text2 justify-content-between align-items-center">
          <div class="col-6">
            <h2 class="fs-1">
              How do we work ?
            </h2>
            <p class="fs-5">
              YOUR WILDEST IDEAS TURN INTO SPECTACULAR
              CREATIONS IN FRONT OF YOUR EYES.
            </p>
          </div>
          <div class="col-2">
            <img src="assets/images/play-button.svg" class="img-fluid" width="60px" alt="">
          </div>
        </div>
      </div>
    </div>

  </section>

  <div class="container-fluid theme-bg py-5">
    <div class="row justify-content-center py-4">
      <div class="col-12 col-lg-6">
        <p class="fs-5 text-center theme-text">
          WHEN IDEAS TAKE SHAPE AND DECISIONS
          ARE MADE. WE CAREFULLY CHOOSE THE TYPE
          OF STONES, THE SETTING TECHNIQUE, THE
          RAW MATERIAL SAND THE COLOUR
          GRADIENTS THAT WILL BE USED TO CREATE
          YOUR EXCEPTIONAL PIECE.
        </p>
      </div>
    </div>
  </div>
  <div class="container-fluid theme-bg2 py-5">
    <div class="row justify-content-center py-4">
      <div class="col-12 col-lg-6">
        <p class="fs-5 text-center theme-text2">
          YOU WILL HAVE THE EXTRA ORDINARY MASTER PIECE
          ONLY BELONGS TO YOU.
        </p>
        <p class="fs-4 text-center text-white the-season-font">
          Contact us
        </p>
      </div>
    </div>
  </div>
  <!-- ================= how its work  Section end =================== -->


  <!-- ================= Projects Section =================== -->
  <section class="project-section py-5 theme-bg" id="company">
    <div class="container-fluid">
      <div class="section-heading text-center">
        <h3 class="text-white pb-2 px-2 m-auto fs-1 the-season-font">
          Projects
        </h3>
      </div>
      <div class="container content mt-5">
        <div class="row project-slider">
          <?php
          $project = mysqli_query($conn, "SELECT * FROM `project` ORDER BY `id` DESC");
          while ($row = mysqli_fetch_assoc($project)) {
            ?>
            <div class="col-4 px-3">
              <div class="project-card rounded py-3">
                <img src="assets/images/projects/<?php echo $row['img'] ?>" class="img-fluid" alt="" />
                <h6 class="fs-4 text-center mt-2"><?php echo $row['title'] ?></h6>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Project Section end =================== -->

  <!-- ================= Achivement  Section =================== -->
  <section class="acheivement-section" id="achivie">
    <h3 class="achive-heading pb-2 text-white px-2 m-auto fs-1 the-season-font all-heading">
      ARCHIVE
    </h3>
    <div class="container-fluid">
      <div class="row px-0">
        <img src="assets/images/9.JPG" class="px-0" alt="">
      </div>
    </div>
  </section>

  <div class="achive-bar container-fluid  theme-bg2">
    <div class="row px-0 py-3 text-white align-items-center">
      <div class="col">
        DOI WINNER-2023
      </div>
      <div class="col">
        PROFESSTIONAL JEWELRY DIGNE(IGI)
      </div>
      <div class="col">
        GSI DIAMOND ESSENTIALS
      </div>
      <div class="col">
        DCA DIAMOND CERTIFIED
      </div>
      <div class="col">
        DOI 2ND RUNNER UP-2022
      </div>
    </div>
  </div>
  <!-- ================= Achivement  Section end =================== -->

  <!-- ================= Blog Section =================== -->
  <section class="product-section py-5" id="product">
    <div class="container-fluid">
      <div class="section-heading text-center">
        <h3 class="pb-2 px-2 m-auto fs-1 the-season-font">Our Blogs</h3>
      </div>
      <div class="container content mt-5">
        <div class="row">
          <?php
          $blog = mysqli_query($conn, "SELECT * FROM `blogs` ORDER BY `id` DESC LIMIT 3");
          while ($row = mysqli_fetch_assoc($blog)) {
            ?>

            <div class="col-4 ">
              <div class="bg-main rounded blog-card">

                <a href="">
                  <img src="assets/images/post/<?php echo $row['cover'] ?>" class="img-fluid" alt="" />
                  <p class="p-3 text-secondary pb-0 mb-0">
                    <?php
                    $dateString = $row['timestamp'];
                    $formattedDate = date("d M, Y", strtotime($dateString));
                    echo $formattedDate; // Output: 21 Apr, 2024
                    ?>
                  </p>
                  <h5 class="p-3 py-0 mb-0 text-black"
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
  <section class="contact-us py-5" id="contactus">
    <div class="container py-3 rounded-3">
      <div class="section-heading text-center mb-5">
        <h3 class="border-bottom border-3 border-black pb-2 px-2 m-auto fs-1 the-season-font mb-3">
          Contact us
        </h3>
        <p>
          As you explore the World of Pinal & Co, our advisors would be
          pleased to assist you and provide tailored counsel.
        </p>
      </div>

      <div class="form">
        <form action="" method="post">
          <div class="row">
            <div class="col-12 mb-4">
              <label for="name" class="mb-2">FULL NAME*</label>
              <input type="text" name="name" class="form-control p-2 rounded-0" placeholder="Enter your name" />
            </div>
            <div class="col-6 mb-4">
              <label for="email" class="mb-2">EMAIL ID*</label>
              <input type="email" name="email" class="form-control p-2 rounded-0" placeholder="example@xyz.com" />
            </div>
            <div class="col-6 mb-4">
              <label for="phone" class="mb-2">MOBILE NUMBER*</label>
              <input type="tel" id="phone" name="phone" class="form-control rounded-0" />
            </div>
            <div class="col-12 ">
              <label for="subject" class="mb-2">SUBJECT*</label>
            </div>
            <div class="col-2 mb-4">
              <input type="radio" name="subject" checked value="Enquire" onclick="toggleDateTimePicker(this)" />
              <label for="subject" class="mb-2">Enquire</label>
            </div>

            <div class="col-6 mb-4">
              <input type="radio" name="subject" value="book an Appointment" onclick="toggleDateTimePicker(this)" />
              <label for="subject" class="mb-2">Book an Appointment</label>
            </div>
            <div class="col-12 mb-4">
              <label for="subject" class="mb-2">SELECT SERVICE</label>
              <select name="service" id="" class="form-control rounded-0">
                <option value="Virtual Appointment">Virtual Appointment</option>
                <option value="In-store Appointment">In-store Appointment</option>
              </select>
            </div>
            <div class="col-12 mb-4">
              <label for="subject" class="mb-2">PREFERRED CONTACT METHOD*</label>
              <select name="service" id="" class="form-control rounded-0" required>
                <option value="" selected disabled>Select a method</option>
                <option value="Email">Email</option>
                <option value="Call">Call</option>
                <option value="Whatsapp">Whatsapp</option>
              </select>
            </div>
            <div class="col-12 mb-4" id="dateTimePicker" style="display: none;">
              <label for="subject" class="mb-2">PREFERRED DATE AND TIME</label>
              <div class="row">
                <div class="col-6">
                  <input type="date" id="date" name="date" class="form-control rounded-0" />
                </div>
                <div class="col-6">
                  <input type="time" id="time" name="time" class="form-control rounded-0" />
                </div>
              </div>
            </div>
            <div class="col-12 mb-4">
              <label for="message" class="mb-2">MESSAGE*</label>
              <textarea name="message" class="form-control rounded-0" cols="30" rows="5"
                placeholder="Type your message here..."></textarea>
            </div>
            <div class="col-4 mb-3 m-auto">
              <input type="submit" class="btn submit-btn text-white w-100 rounded-0" value="SUBMIT" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- ================= Contact us Section end =================== -->

  <!-- ================= Footer Section =================== -->
  <footer class="footer-section theme-bg2 pt-5">
    <div class="container">
      <div class="row pb-5">
        <div class="col-3">
          <img src="assets/images/logo/logo.png" alt="" width="200px" />
        </div>
        <div class="col-3 footer-link">
          <h6 class="text-white">THE COMPANY</h6>
          <ul class="ps-0">
            <li><a class="text-secondary" href="">THE ARTIST</a></li>
            <li><a class="text-secondary" href="">COMPANY</a></li>
            <li><a class="text-secondary" href="">ARCHIVES</a></li>
            <li><a class="text-secondary" href="">PROJECTS</a></li>
          </ul>
        </div>
        <div class="col-3 footer-link">
          <h6 class="text-white">NAVIGATION</h6>
          <ul class="ps-0">
            <li><a class="text-secondary" href="">HOME</a></li>
            <li><a class="text-secondary" href="">BLOGS</a></li>
            <li><a class="text-secondary" href="">CONTACT US</a></li>
          </ul>
        </div>
        <div class="col-3 d-flex justify-content-end">
          <div class="follow">
            <h6 class="text-white">FOLLOW US</h6>
            <div class="d-flex">
              <a href="#" class="me-3">
                <i class="bi bi-facebook fs-3 text-white"></i></a>
              <a href="#" class="me-3">
                <i class="bi bi-instagram fs-3 text-white"></i></a>
              <a href="#" class="me-3">
                <i class="bi bi-twitter-x fs-3 text-white"></i></a>
              <a href="#" class="me-3">
                <i class="bi bi-envelope fs-3 text-white"></i></a>
              <a href="#" class="me-3">
                <i class="bi bi-whatsapp   fs-3 text-white"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-3">
          <!-- <p class="mb-0 text-white">STAY IN TOUCH</p> -->
          <h3 class="fs-1 the-season-font text-white">Contact us</h3>
        </div>
        <div class="col-3">
          <p class="fs-5 mb-0 the-season-font text-white">Location</p>
          <h6 class="text-white mb-0">Surat, Gujrat, India</h6>
        </div>
        <div class="col-3">
          <p class="fs-5 mb-0 the-season-font text-white">EMAIL ADDRESS</p>
          <h6 class="text-white mb-0">
            <a href="mailto:Pinal.design@gmail.com" class="nav-link">Pinal.design@gmail.com</a>
          </h6>
        </div>
        <div class="col-3">
          <p class="fs-5 mb-0 the-season-font text-white">PHONE NUMBER</p>
          <h6 class="text-white mb-0">
            <a href="tel:+91 9998679654" class="nav-link">+91 9998679654</a>
          </h6>
          <h6 class="text-white mb-0">
            <a href="tel:+1 (647) 615 9654" class="nav-link">+1 (647) 615 9654</a>
          </h6>
        </div>
      </div>
    </div>
    <hr class="border-white" />
    <div class="row mx-0 align-items-center">
      <div class="col-4"></div>
      <div class="col-4">
        <p class="text-center text-secondary">© PINAL & CO. ALL RIGHTS RESERVED.</p>
      </div>
      <div class="col-4">
        <p class="text-end text-secondary" style="font-size: 12px;">DESIGN BY <a href="https://webkye.in/"
            target="_blank" class="text-white" style="text-decoration: none;">WEBKYE</a></p>
      </div>
    </div>
  </footer>
  <!-- ================= Footer Section end =================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

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
        // Set current date and time
        var formattedDate = currentDate.toISOString().split('T')[0];
        var formattedTime = currentDate.toTimeString().split(' ')[0];
        dateInput.value = formattedDate;
        timeInput.value = formattedTime;

        dateTimePicker.style.display = 'block';
      } else {
        // Clear date and time inputs
        dateInput.value = '';
        timeInput.value = '';

        dateTimePicker.style.display = 'none';
      }
    }
  </script>
</body>

</html>