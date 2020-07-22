
<?php 
session_start(); 
if(!isset($_SESSION['email']))
{
        header("location:index.php");
		}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Flying stone</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" type="text/css" href="static/css/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body class="websitebody">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand our-brand brand-logo" href="indexlogout.php">Company Name</a>
  
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mx-2"  style="font-size: 20px">
          <li class="nav-item active">
            <a class="nav-link" href="indexlogout.php">
              <i class="fa fa-home" aria-hidden="true"></i> Home<span class="sr-only">(current)</span></a
              >
            </li>
        <li class="nav-item">
        <a class="nav-link" href="services.php">
          <i class="fa fa-cogs" aria-hidden="true"></i> Services<span class="sr-only">(current)</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact.php">
            <i class="fa fa-phone" aria-hidden="true"></i> Contact Us<span class="sr-only">(current)</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_us.php">
            <i class="fa fa-info-circle" aria-hidden="true"></i> About Us<span class="sr-only">(current)</span></a>
          </li>
		<li class="nav-item">
          <a class="nav-link" href="profile.php">
            <i class="fa fa-user" aria-hidden="true"></i> Profile<span class="sr-only">(current)</span></a>
          </li>
		<li class="nav-item">
          <a class="nav-link" href="login/Logout.php">
            <i aria-hidden="true"></i> Logout<span class="sr-only">(current)</span></a>
          </li>
		
        </ul>
      </div>
      </nav>
      <!-- navbar -->
    <!-- imgslider -->

    <div class="img-slider">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="static/images/campus.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block slider-info">
              <h5 style="font-size: 3em;">Campus Hiring</h5>
              <p style="font-size: 2em;">
                Nulla vitae elit libero, a pharetra augue mollis interdum.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="static/images/percall.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;">Percall</h5>
              <p style="font-size: 2em;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="static/images/intern.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;">Internship</h5>
              <p style="font-size: 2em;">
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="static/images/freelancer.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;">Freelance</h5>
              <p style="font-size: 2em;">
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </div>
          </div>


          <div class="carousel-item">
            <img src="static/images/recruiter.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block slider-info">
              <h5 style="font-size: 3em;">Recruiter's MarketPlace</h5>
              <p style="font-size: 2em;">
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="static/images/hr.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block slider-info">
              <h5 style="font-size: 3em;">Human Resources</h5>
              <p style="font-size: 2em;">
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </div>
          </div>

        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- imgslider -->
    <div class="container text-center mt-2">
      <h1>Our Services</h1>
    </div>
    <!-- Services -->
    <div class="container">
      
      <div class="d-flex flex-row flex-wrap justify-content-around">
        
        <div class="service-box" onclick="window.location.href = 'services.html'">
          <div class="service-box-info">
            <h5>Campus Hiring</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quod
              nam culpa, cupiditate perferendis dolorum perspiciatis debitis
              exercitationem doloribus quae
            </p>
          </div>
          
          <img src="static/images/campus.jpg" alt="" />
          <h5 class="heading-mobile">Campus Hiring</h5>
        </div>
        
        <div class="service-box" onclick="window.location.href = 'services2.html'">
          <div class="service-box-info">
            <h5>Freelance</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quod
              nam culpa, cupiditate perferendis dolorum perspiciatis debitis
              exercitationem doloribus quae
            </p>
          </div>
          <img src="static/images/freelancer.jpg" alt="" />
          <h5 class="heading-mobile">Freelance</h5>
        </div>

        <div class="service-box" onclick="window.location.href = 'services3.html'">
          <div class="service-box-info">
            <h5>Internship</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quod
              nam culpa, cupiditate perferendis dolorum perspiciatis debitis
              exercitationem doloribus quae
            </p>
          </div>
          <img src="static/images/intern.jpg" alt="" />
          <h5 class="heading-mobile">Internship</h5>
        </div>
      </div>
      <div class="d-flex flex-row flex-wrap justify-content-around">
        <div class="service-box" onclick="window.location.href = 'services4.html'">
          <div class="service-box-info">
            <h5>Per Call</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quod
              nam culpa, cupiditate perferendis dolorum perspiciatis debitis
              exercitationem doloribus quae
            </p>
          </div>
          <img src="static/images/percall.jpg" alt="" />
          <h5 class="heading-mobile">Percall</h5>
        </div>

        <div class="service-box" onclick="window.location.href = 'services5.html'">
          <div class="service-box-info" >
            <h5>Recruiter's MarketPlace</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quod
              nam culpa, cupiditate perferendis dolorum perspiciatis debitis
              exercitationem doloribus quae
            </p>
          </div>
          <img src="static/images/recruiter.jpg" alt="" />
          <h5 class="heading-mobile">Recruiter's MarketPlace</h5>
        </div>

        <div class="service-box" onclick="window.location.href = 'services6.html'">
          <div class="service-box-info" >
            <h5>Human Resources</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quod
              nam culpa, cupiditate perferendis dolorum perspiciatis debitis
              exercitationem doloribus quae
            </p>
          </div>
          <img src="static/images/hr.jpg" alt="" />
          <h5 class="heading-mobile">Human Resources</h5>
        </div>
      </div>
    </div>
	  <!--chatbot-->
		 	 	 <div class="chat">
  <div style="position: absolute; bottom: 0;">
  <a href="www.google.com">
      <img src="chat.png" id="ab" style="position: fixed;width: 75px;height: 75px;border-radius: 52%;left: 90%;z-index: 0.9;" alt="">

        <iframe src="https://news.anyapp.me/wix/newsfeed/widget.php?cacheKiller=1592036182873&amp;compId=comp-kb3jz041&amp;currency=INR&amp;deviceType=desktop&amp;height=298&amp;instance=CJ2xxH6XV08v-_xxYNZ9dvkafdulYOr5MbMnckDQlOE.eyJpbnN0YW5jZUlkIjoiOGEwZWI0NDYtNDIxMC00MTdlLTk1MDUtZTJkMGYzYzIzYTExIiwiYXBwRGVmSWQiOiIxMmQ4MjhmNy1hMjk3LTBiYzAtYTE0Ny1lODk3NjgyMzgxN2QiLCJzaWduRGF0ZSI6IjIwMjAtMDYtMTNUMTE6NTI6MDYuNjA0WiIsImRlbW9Nb2RlIjpmYWxzZSwiYWlkIjoiMjMwMjI5MzktMTk2NS00ZTMyLWE2YmEtYzE4Mjc1ODQ2OTFjIiwic2l0ZU93bmVySWQiOiI1MmI4ODExMC05YTM2LTQ5NGMtOWEzNi0wYjc2OTQ3OTc0ZjEifQ&amp;locale=en&amp;pageId=c1dmp&amp;siteRevision=253&amp;tz=Asia/Kolkata&amp;viewMode=site&amp;viewerCompId=comp-kb3jz041&amp;width=234" frameborder="0" style="padding-left: 200%;width: 234px; height: 290px; overflow: hidden;scroll-behavior: smooth;position: relative;">
</iframe>
    </a>
  </div>
  <div class="chatbot" >
  <div style="position: absolute; bottom: 0;">
   <a href="www.google.com">
      <img src="chat.png" style="position: fixed;width: 50px;height: 50px;border-radius: 52%;left: 270px;z-index: 1;margin-top: 40%;" alt="" >

  
      <iframe src="https://news.anyapp.me/wix/newsfeed/widget.php?cacheKiller=1592036182873&amp;compId=comp-kb3jz041&amp;currency=INR&amp;deviceType=desktop&amp;height=298&amp;instance=CJ2xxH6XV08v-_xxYNZ9dvkafdulYOr5MbMnckDQlOE.eyJpbnN0YW5jZUlkIjoiOGEwZWI0NDYtNDIxMC00MTdlLTk1MDUtZTJkMGYzYzIzYTExIiwiYXBwRGVmSWQiOiIxMmQ4MjhmNy1hMjk3LTBiYzAtYTE0Ny1lODk3NjgyMzgxN2QiLCJzaWduRGF0ZSI6IjIwMjAtMDYtMTNUMTE6NTI6MDYuNjA0WiIsImRlbW9Nb2RlIjpmYWxzZSwiYWlkIjoiMjMwMjI5MzktMTk2NS00ZTMyLWE2YmEtYzE4Mjc1ODQ2OTFjIiwic2l0ZU93bmVySWQiOiI1MmI4ODExMC05YTM2LTQ5NGMtOWEzNi0wYjc2OTQ3OTc0ZjEifQ&amp;locale=en&amp;pageId=c1dmp&amp;siteRevision=253&amp;tz=Asia/Kolkata&amp;viewMode=site&amp;viewerCompId=comp-kb3jz041&amp;width=234" frameborder="0" style="padding-left: 200%;width: 234px; height: 290px; overflow: hidden;scroll-behavior: smooth;position: relative;">
</iframe>
    </a>
  </div>
</div>

	  
    <!-- Services -->

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark pt-4" style="color: white;">
      <!-- Footer Links -->
      <div class="container text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">
            <!-- Content -->
            <h5 class="text-uppercase">LOGO</h5>
            <div class="col">
              <p>Contact- 1111 1111</p>
              <p>Email- info@mil.com</p>
              <p>
                Addr- 9th Floor, The Estate #121, Dickenson Road, Mumbai 400042
              </p>
            </div>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3" />

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">Contact Us</h5>

            <ul class="list-unstyled">
              <li>
                <a href="mailto:info@mail.com?Subject=" style="color: white;"
                  ><i
                    class="fa fa-envelope"
                    aria-hidden="true"
                    style="margin-right: 8px;"
                  ></i
                  >FSPinfo@gmail.com</a
                >
              </li>
              <li>
                <a href="tel:#" style="color: white;"
                  ><i
                    class="fa fa-phone"
                    aria-hidden="true"
                    style="margin-right: 8px;"
                  ></i
                  >FSP_Office: +91 1111 1111</a
                >
              </li>
              <li>
                <a href="tel:#" style="color: white;"
                  ><i
                    class="fa fa-phone"
                    aria-hidden="true"
                    style="margin-right: 8px;"
                  ></i
                  >FSP_Office2: +91 1111 1111</a
                >
              </li>
              <li>
                <a href="#" style="color: white;"
                  ><i
                    class="fa fa-map-marker"
                    aria-hidden="true"
                    style="margin-right: 8px;"
                  ></i
                  ><span
                    >9th Floor, The Estate #121, Dickenson Road, Mumbai 400042
                  </span></a
                >
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3 text-center">
            <!-- Links -->
            <h5 class="text-uppercase">Follow Us</h5>

            <ul class="list-unstyled">
              <li>
                <a
                  class="btn btn-social-icon btn-twitter"
                  href="#"
                  style="color: white;"
                >
                  <span class="fa fa-twitter fa-2x"></span>
                </a>
              </li>
              <li>
                <a
                  class="btn btn-social-icon btn-facebook"
                  href="#"
                  style="color: white;"
                >
                  <span class="fa fa-facebook fa-2x"></span>
                </a>
              </li>
              <li>
                <a
                  class="btn btn-social-icon btn-linkedin"
                  href="#"
                  style="color: white;"
                >
                  <span class="fa fa-linkedin fa-2x"></span>
                </a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
        © 2020 Copyright:
        <a href="#"> WEBsite.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
