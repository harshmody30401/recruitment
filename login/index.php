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
              <h5 style="font-size: 3em;color: black;">Campus Hiring</h5>
              <p style="font-size: 2em;color: black;">
                "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="static/images/percall.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Percall</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="static/images/intern.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Internship</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="static/images/freelancer.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption  d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Freelance</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>


          <div class="carousel-item">
            <img src="static/images/recruiter.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Recruiter's MarketPlace</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
              </p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="static/images/hr.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block slider-info">
              <h5 style="font-size: 3em;color: black;">Human Resources</h5>
              <p style="font-size: 2em;color: black;">
              "Work Hard. Dream Big. We are there to help you."
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
            Campus Hiring refers to the program which lead students pursuing the course, to get a job, within the institute.It is usually a mass recruitment process.
            </p>
          </div>
          
          <img src="static/images/campus.jpg" alt="" />
          <h5 class="heading-mobile">Campus Hiring</h5>
        </div>
        
        <div class="service-box" onclick="window.location.href = 'services2.php'">
          <div class="service-box-info">
            <h5>Freelance</h5>
            <p>
            Freelancing is a creative and widespread field adopted by millions of people who prefer to work from home. The opportunities have greatly increased from past few years and it just goes on.
            </p>
          </div>
          <img src="static/images/freelancer.jpg" alt="" />
          <h5 class="heading-mobile">Freelance</h5>
        </div>

        <div class="service-box" onclick="window.location.href = 'services3.php'">
          <div class="service-box-info">
            <h5>Internship</h5>
            <p>
            Internships are a great way to apply the knowledge from the classroom to real-world experience.Having an internship gives you experience in the career field you want to pursue.
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
            Recruitment marketplace It is a new career path for recruiters.Marketplace for recruitment makes it very easy for the candidates to apply at the right place.
            </p>
          </div>
          <img src="static/images/recruiter.jpg" alt="" />
          <h5 class="heading-mobile">Recruiter's MarketPlace</h5>
        </div>

        <div class="service-box" onclick="window.location.href = 'services6.php'">
          <div class="service-box-info" >
            <h5>Human Resources</h5>
            <p>
            Human resources is the set of the people who make up the workforce of an organization, business sector, industry, or economy. 
            </p>
          </div>
          <img src="static/images/hr.jpg" alt="" />
          <h5 class="heading-mobile">Human Resources</h5>
        </div>
      </div>
    </div>
    <!-- Services -->
    
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
    <!-- Footer -->
      <?php include 'footer.php'?>
    <!-- Footer -->
  </body>
</html>
