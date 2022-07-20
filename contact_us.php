<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Vazara | The Online Store |</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon" />
    <link href="assets/img/favicon.ico" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header
      id="header"
      class="header fixed-top"
      style="background-color: white"
    >
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="./" class="logo d-flex align-items-center">
          <img height="30" width="160" src="assets/img/head.png" alt="" />
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="./">Home</a></li>
            <li><a class="nav-link scrollto" href="About.">About</a></li>
            <li>
              <a class="nav-link scrollto " href="Categories."
                >Categories</a
              >
            </li>
            <li>
              <a class="nav-link scrollto active" href="Contact">Contact Us</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="Careers">Careers</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="Patners"
                >Patner With Us</a
              >
            </li>
            <li>
              <a
                class="getstarted scrollto"
                href="https://play.google.com/store/apps/details?id=in.vazara.android&hl=en_IN&gl=US"
                target="_blank"
                >Download App</a
              >
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="./">Home</a></li>
            <li>Contact Us</li>
          </ol>
          <h2>Contact</h2>
        </div>
      </section>
      <!-- End Breadcrumbs -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <p>Contact Us</p>
          </header>
          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>W-DELHI North <br />NDelhi , 110084</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+91 7258 889 992<br />+91 7258 889 992</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@vazara.in<br /></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday<br />9:00AM - 05:00PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
<<<<<<< HEAD
              <div class="alert alert-warning" role=alert id=FormErr style=display:none></div>
                <div class="alert alert-success alert-dismissible" role=alert id=successReg style=display:none></div>
                
           <form action=./cantact_us.php class='php-email-form' method=post role=form id=reg-form autocomplete='off'>
                  <div class=mb-3><input type=text class="form-control form-control-lg" id=reg-name placeholder=Name
                      aria-label=Email aria-describedby=email-addon name=name /></div>
                  <div class=mb-3><input type=email class="form-control form-control-lg" id=reg-email placeholder=Email
                      aria-label=Email aria-describedby=email-addon name=email /></div>
                  <div class=mb-3><input type=text class="form-control form-control-lg" id=reg-phone placeholder=Subject
                      aria-label=Password aria-describedby=password-addon name=phone /></div>
                      <div class=mb-3><textarea type=text class="form-control form-control-lg" id=reg-body placeholder="Your Message"
                      aria-label=Password aria-describedby=password-addon name=body rows='6' /></textarea></div>
                  <div class=text-center><button class="btn btn-primary btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"
                      id="reg-submit-btn" onclick="register();return false">
                      Register
                    </button></div>
                </form>
=======
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
                id="myForm"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      id="name"
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      id="emaii"
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                  <div class="col-md-12">
                    <input
                      id="subject"
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Subject"
                      required
                    />
                  </div>
                  <div class="col-md-12">
                    <textarea
                      id="body"
                      class="form-control"
                      name="body"
                      rows="6"
                      placeholder="Message"
                      required
                    ></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Your message has been sent. Thank you!
                    </div>
                    <button type="submit">Submit</button>
                  </div>
                </div>
              </form>
>>>>>>> 7ae0ca251f5f5f40c09c2690fd7e52f9f681a827
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php 
    include_once "footer.php";?>
    <!-- End Footer -->
<<<<<<< HEAD
<script>
    function register()
{
        var name = $("#reg-name").val();
      var mail = $("#reg-email").val();
      var mobile = $("#reg-phone").val();
      var body = $("#reg-body").val();
        var phoneno = /^\d{10}$/;
      var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
        //console.log(name);
        $("#reg-form").show();
          //$("#FormErr").hide();
          $("#FormErr").show();
        $("#reg-submit-btn,#reg-form").attr('disabled', true);
        $("#reg-submit-btn").html('<i class="las la-spinner la-spin"></i>sending...');
        //$("#reg-submit-btn").attr('class', 'btn btn-success btn-pill  btn-elevate kt-spinner kt-spinner--left kt-spinner--sm kt-spinner--light');
        //console.log(TOS);
        //console.log(mail);
          if(!regName.test(name) && name.length < 5){
                  $("#FormErr").html("<i class='las la-times-circle'></i> Please enter more content");
                  $("#reg-submit-btn").html('Register');
                  $("#reg-submit-btn").attr('disabled', false);
                  return false;
          }
          else{
             // alert(1);
              $.post("./connector/Contact.php", {name: name,
          email: mail,
          phone: mobile,
          body: body,},function (dt,s) 
              {
                  //console.log(dt);
                  var d =dt;
                  console.log(d);
                  if(d['success']==true)
                  {
                      $("#successReg").show();
                      $("#successReg").html("<i class='las la-check'></i> &nbsp; Message Sent Successfully");
                      $("#FormErr,#reg-form,#reg-submit-btn").hide();
                      //location.replace('index.php');
                  }else
                  {
                        $("#FormErr").show();
                        $("#FormErr").html("<i class='las la-times-circle'></i> "+d['message']+"");
                        $("#reg-submit-btn").html('Register');
                        $("#reg-submit-btn").attr('disabled', false);
                  }
              });
                $("#FormErr").hide();
                $("#reg-submit-btn").attr('disabled', false); 
                return true;
            } 
      }
    </script>
=======

>>>>>>> 7ae0ca251f5f5f40c09c2690fd7e52f9f681a827
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
<<<<<<< HEAD

=======
>>>>>>> 7ae0ca251f5f5f40c09c2690fd7e52f9f681a827
  </body>
</html>
