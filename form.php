<!DOCTYPE html>
<html lang="en">

<head>
    
    
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Local Auto Insurance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    
    
  <!-- CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/form.css">
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Sanchez&display=swap');
    *{
      font-family: 'Sanchez', serif !important;
    }


          @media screen and (max-width:1024px) {

              .form1{
                  margin-top: 50px;
              }
          }

          @media screen and (max-width:425px) {

.form1{
  margin-top: 100px;
}
}

      </style>


<body>

<?php
  include "navBar.php";
?>

    <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <!--carousel Ends Here -->
         <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5"  style="height: 800px !important;">
                <div class="card-heading">
                    <h2 class="title text-white fw-bolder">Get The Best Rates!</h2>
                </div>
                <!-- <div class="card-body" > -->
                    <form action="form2.php" method="POST">
                        <div class="form-row m-b-55 d-flex justify-content-center align-items-center flex-row">
                            <div class="value">
                            <div class="fontSize text-bolder text-center mt-3" style="font-size: large;" >You Can Get The Quote in 2 Easy Steps:</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                  <div class="container d-flex justify-content-center align-items-center flex-row">
                                      <h5 class="fw-bolder zipRight " style="margin-left: 28px; font-size: large;">Zip code:</h5>
                                    <input class="input--style-5 borderInput  text-center " required name="zip_code" placeholder="zip code"  maxlength="5" pattern="[0-9]{5}" required  type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="value mt-4">
                                <div class="input-group">
                                  <div class="container d-flex justify-content-center align-items-center flex-row">
                                      <h5 class="fw-bolder marginRightt" style="font-size: large;">Vehicle Maker:</h5>
                                    <input class="input--style-5 borderInput text-center" name="v_maker"  placeholder="Vehicle Make" required type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="value mt-4">
                                <div class="input-group">
                                  <div class="container d-flex justify-content-center align-items-center flex-row">
                                      <h5 class="fw-bolder marginRightt" style="font-size: large;">Vehicle Model:</h5>
                                    <input class="input--style-5 borderInput text-center" name="v_model" placeholder="Vehicle Make" required type="text">
                                    </div>
                                </div>
                            </div>
                              <div class="value mt-4">
                                <div class="input-group">
                                  <div class="container d-flex justify-content-center align-items-center flex-row">
                                      <h5 class="fw-bolder marginRightt"  style="font-size: large;">Vehicle Type:</h5>
                                    <input class="input--style-5 borderInput text-center" name="v_type" placeholder="Vehicle Make" required type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container d-flex justify-content-center align-items-center flex-row" style="margin-top: 90px;">
                            <button class="btn btn--radius-2 btn-warning borderInput  text-white"  type="submit"  name="zipsubmit"> Next</button>
                          </div> 
                        <div class="form-row  ">
                          <div class="col-md-1"></div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="container  ">
                                        <p class="text-center pt-3 fontValue">We may use your information, as well as info collected from other sources like as your driving records, claims, and credit histories, to provide you with an accurate quote and other important information via our website, email, phone, or text messages. By proceeding further, you acknowledge and agree our privacy policy  and agree to the use of this information. <a href="#">terms and conditions</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
        </div>
    </div>

    
<!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="footer-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="footer-info">
                <h3>Local Auto Insurance</h3>
                <p>
                  We help you make smart insurance decisions. Our research, auto insurance experts, guides, and tools give you the information you need to make the right insurance choices<br>
                  <strong>Phone:</strong> +1 5589 55488 55<br />
                  <strong>Email:</strong> info@example.com<br />
                </p>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="bi bi-chevron-right"></i> <a href="index.html">Home</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i> <a href="WhoWeAre.html">Who We Are</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i> <a href="contactUs.html">Contact Us</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i>
                  <a href="guide.html">Guide</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i>
                  <a href="form.php">Get A Quote</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>FAQ'S</h4>
              <ul>
                <li>
                  <i class="bi bi-chevron-right"></i> <a href="#">How to make..</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i>
                  <a href="index.html">How fast can i..</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i>
                  <a href="index.html">what factors influence..</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i> <a href="index.html">How do i compare..</a>
                </li>
                <li>
                  <i class="bi bi-chevron-right"></i>
                  <a href="index.html">the general coverages..</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Disclaimer</h4>
              <p>
              BestLocalAutoInsurance.com is an independent auto insurance broker that enables consumers to obtain quotes from reputable companies rapidly and effortlessly. BestLocalAutoInsurance.com does not sell insurance to consumers directly, nor do we represent any specific providers. Keep in mind that the lowest quoted rates may not be available from all of the companies listed. Your rates may vary based on your coverage limits, deductibles, driving history, vehicle type, location, and other factors.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-legal text-center">
        <div
          class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center"
        >
          <div
            class="d-flex flex-column align-items-center align-items-lg-start"
          >
            <div class="copyright">
              &copy; Copyright <strong><span>Local auto Insurance</span></strong
              >. All Rights Reserved
            </div>
           
          </div>

          <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
 
         <script>
        $(function() {
    $("input[name='zip_code']").on('input', function(e) {
      $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });
  });
    </script>
    
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <!--Main JS File-->
    <script src="assets/js/form.js"></script>
  </section>
</body>
</html>