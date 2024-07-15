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
          <a class="wow animate__animated animate__fadeIn navbar-brand m-auto" data-wow-delay="0.25s"
            href="#"><img class="img-fluid" src="assets/images/logo/logo.png" alt="logo" width="300px" /></a>
        </div>
      </nav>
      <nav class="navbar">
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

  </header>
  <!-- ================= Banner end =================== -->

  <!-- ================= About Us =================== -->
  <section class="about-us-section " id="artits">
    <div class="container-fluid about-us">
      <img src="assets/images/about-bg.png" class="img-fluid wow animate__fadeIn animate__animated" data-wow-delay="0.25s"
        alt="">

      <div class="about-text wow animate__animated animate__fadeIn" data-wow-delay="0.25s">
        <p class="fs-3 text-center px-md-5">
          Pinal, a bespoke jewelry designer, intricately weaves stories of elegance and beauty into her unique
          creations. Each piece she crafts reflects the individuality and style of her clients, resonating deeply with
          their personalities and becoming cherished symbols of self-expression.
        </p>
      </div>
    </div>
  </section>

  <section class="about-pinal-section wow animate__animated animate__fadeIn">
    <div class="about-pinal">
      <img src="assets/images/about.png" class="img-fluid" alt="">

      <div class="about-pinal-text wow animate__fadeInLeft animate__animated" data-wow-delay="0.25s">
        <h1 class="w-50 px-md-5">
          Pinal
        </h1>
        <p class="fs-4 w-50 px-md-5">
          My designs reflect your uniqueness, ensuring each piece is exactly what you want.
        </p>
        <p class="fs-4 w-50 px-md-5">
          When your style combines with my creativity, I can make something special just for you.
        </p>
      </div>
    </div>
  </section>
  <!-- ================= About Us end=================== -->


  <!-- ================= Transform start ================== -->
  <section class="wow animate__animated animate__fadeIn transform" data-wow-delay="0.25s">
    <div class="container-fluid">
      <img src="assets/images/dreams.svg" alt="" class="img-fluid">
    </div>
  </section>
  <!-- ================= Transform end=================== -->


  <!-- ================= Pinal Start =================== -->
  <div class="achive-bar container-fluid bg-black">
    <div class="row px-0 py-3 text-white align-items-center" id="marquee-container">
      <marquee direction="left" behavior="scroll" scrollamount="5">
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          PINAL & CO. BESPOKE JEWELRY DESIGNER
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          PINAL & CO. BESPOKE JEWELRY DESIGNER
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          PINAL & CO. BESPOKE JEWELRY DESIGNER
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          PINAL & CO. BESPOKE JEWELRY DESIGNER
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          PINAL & CO. BESPOKE JEWELRY DESIGNER
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
      </marquee>
    </div>
  </div>
  <section class="pinal wow animate__animated animate__fadeIn"  data-wow-delay="0.25s">
    <img src="assets/images/pinal.png" class="img-fluid" alt="">
  </section>

  <!-- ================= Pinal end =================== -->


  <!-- ================= why start ================== -->
  <section class="why wow animate__animated animate__fadeIn" data-wow-delay="0.25s">
    <div class="container-fluid">
      <img src="assets/images/why.svg" alt="" class="img-fluid">
    </div>
  </section>
  <!-- ================= why end=================== -->

  <section class="what_you_want">
    <img src="assets/images/what_you_want_bg.png" class="img-fluid" alt="">
    <div class="row what_you_want_text">
      <div class="col-10 bg-white p-5 text-center">
        <div class="py-3 wow animate__animated animate__fadeInUp"  data-wow-delay="0.25s">

          <p class="fs-5">
            Experience personalized luxury with award-winning jewelry designer crafting extraordinary pieces
            specifically
            crafted for you
          </p>

          <p class="fw-bold fs-4">
            Get exactly what you want
          </p>

          <p class="fs-5">
            I believe that when you’re purchasing a piece of jewellery, it should be exactly what you’re looking for.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= company end =================== -->
  <!-- <hr> -->

  <!-- ================= Why-us Section =================== -->
  <section class="why-us-section">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center py-5">
        <div class="col-11 py-5 ">
          <div class="row justify-content-center">
            <div class="col-12 col-md-6 wow animate__animated animate__fadeInUp"  data-wow-delay="0.25s">
              <h2 class="fs-1 ms-5 why-text-heading text-center">Why Bespoke Jewelry?</h2>
              <p class="text-justify ms-5 animate__fadeInUp animate__animated text-center">
                Bespoke jewelry stands out from other ordinary jewelry pieces because it's made just for you, reflecting
                your style.
              </p>
            </div>
          </div>
        </div>
        <div class="col-11 py-5">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeInLeft"  data-wow-delay="0.25s">
              <img src="assets/images/1.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-12  wow animate__animated animate__fadeInRight"  data-wow-delay="0.25s">
              <img src="assets/images/1.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="col-11 py-5">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeInLeft"  data-wow-delay="0.25s">
              <img src="assets/images/2.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-12  wow animate__animated animate__fadeInRight"  data-wow-delay="0.25s">
              <img src="assets/images/2.svg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="col-11 py-5">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeInLeft"  data-wow-delay="0.25s">
              <img src="assets/images/3.svg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-12  wow animate__animated animate__fadeInRight"  data-wow-delay="0.25s">
              <img src="assets/images/3.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>

  <!-- ================= Why-us Section end =================== -->



  <!-- ================= How do we work Section start =================== -->

  <section class="theme-bg py-5 how_do_work">
    <div class="row align-items-center">
      <div class="col-12 col-md-5 wow animate__animated animate__fadeInLeft"  data-wow-delay="0.25s">
        <img src="assets/images/sitting_img.svg" class="img-fluid" alt="">
      </div>
      <div class="col-12 col-md-6 px-5 wow animate__animated animate__fadeInRight"  data-wow-delay="0.25s">
        <h2 class="text-white">How Do We Work?</h2><br>
        <p>
          Your Wildest Ideas Turn Into Spectacularcreations in Front of your eyes.
        </p><br>
        <p class="fs-4">
          When ideas take shape and decisions are made. We carefully choose the type of stones, the setting technique,
          the
          raw materials and the colour gradients that will be used to create your exceptional piece.
        </p>
      </div>
    </div>
  </section>
  <!-- ================= How do we work Section end =================== -->







  <!-- ================= how its work Section =================== -->
  <section class="how-section wow animate__animated animate__fadeIn"  data-wow-delay="0.25s">
    <div class="container-fluid px-0">
      <img src="assets/images/7.JPG" class="img-fluid" alt="">
    </div>

    <div class="how-its-work">
      <div class="container-fluid">
        <div class="row theme-text2 justify-content-center align-items-center">
          <div class="col-12 col-md-8 text-center">
            <p class="fs-1 text-center">
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
  <section class="project-section py-5" id="project">
    <div class="container-fluid px-0">
      <div class="section-heading text-center">
        <h2 class="m-auto fs-1 w-100 the-season-font py-3 wow animate__animated animate__fadeInUp">
          My Design Work
        </h2>
      </div>
      <div class="container-fluid content wow animate__animated animate__fadeIn"  data-wow-delay="0.25s">
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
  </section>
  <!-- ================= Project Section end =================== -->

  <!-- ================= Achivement  Section =================== -->
  <section class="acheivement-section" id="Achieves">
    <div class="achieve-bg">
      <div class="row px-0">
        <img src="assets/images/achivement_bg.png" class="px-0" alt="">
      </div>

      <div class="achive-main">
        <div class="row">
          <div class="col-9 bg-white">
            <div class="row justify-content-center align-items-center">
              <div class="col-5 px-0 wow animate__animated animate__fadeInLeft"  data-wow-delay="0.25s">
                <img src="assets/images/achivement.png" class="img-fluid" alt="">
              </div>
              <div class="col-7 wow animate__animated animate__fadeInRight"  data-wow-delay="0.25s">
                <div class="row">
                  <div class="col-12">
                    <h6 class="text-secondary">ACHIEVEMENT</h6>
                    <h1>Pinal & co.</h1>
                    <p>
                      You will have the extraordinary masterpiece
                      Only belongs to you.
                    </p>

                    <p>
                      One of the most notable achievements in the jewelry design industry is by Elsa Peretti, a
                      celebrated designer who transformed the industry with her modern and innovative designs. Her
                      iconic creations, such as the "Bone Cuff" and the "Open Heart" necklace
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="achive-bar container-fluid bg-black">
    <div class="row px-0 py-3 text-white align-items-center" id="marquee-container">
      <marquee direction="left" behavior="scroll" scrollamount="5">
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          DOI WINNER-2023
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          PROFESSTIONAL JEWELRY DIGNE(IGI)
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          GSI DIAMOND ESSENTIALS
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          DCA DIAMOND CERTIFIED
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
        <div class="col">
          DOI 2ND RUNNER UP-2022
        </div>
        <div class="col">
          <img src="assets/images/Burst-star-white.svg" alt="">
        </div>
      </marquee>
    </div>
  </div>
  <!-- ================= Achivement  Section end =================== -->

  <!-- ================= Blog Section =================== -->
  <section class="product-section py-5 pt-0" id="blogs">
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

            <div class="col-4 wow animate__animated animate__fadeInUp"  data-wow-delay="0.25s">
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
  <section class="contact-us py-5" id="contactus">
    <div class="container py-3 rounded-3">
      <div class="section-heading text-center mb-5">
        <h2 class="border-bottom border-3 border-black pb-2 px-2 the-season-font m-auto fs-1 mb-3">
          Contact us
        </h2>
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
  <footer class="footer-section pt-5"
    style="background: url(assets/images/footer_bg.png);background-position: center;background-size: cover;">
    <div class="container">
      <div class="row justify-content-evenly">
        <div class="col-md-4 col-12">
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
        <div class="col-md-4 col-12">
          <h4 class="text-white">The Company</h4>
          <ul class="ps-0">
            <li class="mb-1"> <a href="">Home</a></li>
            <li class="mb-1"> <a href="">The artist</a></li>
            <li class="mb-1"> <a href="">Company</a></li>
            <li class="mb-1"> <a href="">Archives</a></li>
            <li class="mb-1"> <a href="">Project</a></li>
            <li class="mb-1"> <a href="">Blogs</a></li>
            <li class="mb-1"> <a href="">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-12">
          <h4 class="text-white">Subscribe Pinal & Co.</h4>
          <p class="text-white">
            Subscribe and follow Pinal&co for exclusive access to inspiration, the latest news, and invitations to
            events nearest you.
          </p>
          <p>
            <a href="mailto:pinal.design@gmail.com"><u>Pinal.design@gmail.com</u> </a>
          </p>

          <a href=""><i class="bi bi-facebook fs-3 mx-1"></i></a>
          <a href=""><i class="bi bi-twitter-x fs-3 mx-1"></i></a>
          <a href=""><i class="bi bi-instagram fs-3 mx-1"></i></a>
        </div>

        <hr class="border-white mt-5" />
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