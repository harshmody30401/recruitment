<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Flying Stone</title>
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
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="websitebody">
    <!-- navbar -->
     <?php include 'header.php'?>
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
        
        <div class="service-box" onclick="window.location.href = 'services.php'">
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
        
        <div class="service-box" onclick="window.location.href = 'services2.php'">
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

        <div class="service-box" onclick="window.location.href = 'services3.php'">
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
        <div class="service-box" onclick="window.location.href = 'services4.php'">
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

        <div class="service-box" onclick="window.location.href = 'services5.php'">
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

        <div class="service-box" onclick="window.location.href = 'services6.php'">
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
    <!-- Services -->

    <!-- Footer -->
      <?php include 'footer.php'?>
    <!-- Footer -->
  </body>
</html>
