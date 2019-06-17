<?php  require('dbm.php');

 $mainHeaderData =  getmainHeaderImage();
 $getabouteventData = getaboutevent();


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sunil Rao</title>



  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>
  <link
    href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
    rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- <audio src="./sarfarosh.mp3" autoplay="autoplay"></audio> -->
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#page-top">Sunil Rao</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#specialities">Specialities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#music">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#press">Press</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#performances">Performances</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#tours">Tours</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <header class="masthead text-center text-white d-flex"
    style="background-image: url(./upload/<?= $mainHeaderData->imagename.".".$mainHeaderData->ext ?>)">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <br><br><br>
            <strong>Sunil Rao</strong>
          </h1>
          <hr>
        </div>
        <div class="col-lg-8 mx-auto">

          <p><strong
              style="border:3px; border-style:solid; border-color:#FFFFFF; padding: 10px; font-size: 20px; font-weight: bolder !important;">Ghazal
              & Sufi Singer</strong></p>
          <!-- <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a> -->
        </div>
      </div>
    </div>
  </header>
  <div class="container-fluid p-2 text-right">
    <form action="process.php" enctype="multipart/form-data" method="post">
      <label for="">Upload MainHeader Image Here</label><br>
      <input type="file" name="imageFileName" id="" required>
      <input type="submit" name="mainHeader" value="Upload">
    </form>
  </div>


  <section class="bg-primary" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white"><strong>About the Events By the Singer</strong></h2>
          <hr class="light my-4">
          <p class="text-faded mb-4"><strong><?= $getabouteventData->description ?> </strong></p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="booking.html">Book for Event</a>
        </div>
      </div>
    </div>
  </section>

  <div class="conatiner p-4 text-right">
    <form action="./process.php" method="POST">
      <label for="">Added About Events</label><br>
      <textarea name="description" id="" cols="100" rows="5" required><?= $getabouteventData->description ?></textarea>
      <br>
      <input type="submit" value="Add" name="aboutevent">

    </form>
  </div>
  <hr>

  <section id="specialities">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><strong>Specialities</strong></h2>
          <hr class="my-4">
        </div>
      </div>
    </div>

    <!--  </section> -->

    <section class="p-0" id="specialities">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/specialities/fullsize/1.jpg">
              <img class="img-fluid" src="img/specialities/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    specialities
                  </div>
                  <!-- <div class="project-name">
                    Project Name
                  </div> -->
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/specialities/fullsize/2.jpg">
              <img class="img-fluid" src="img/specialities/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    specialities
                  </div>
                  <!-- <div class="project-name">
                    Project Name
                  </div> -->
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/specialities/fullsize/3.jpg">
              <img class="img-fluid" src="img/specialities/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    specialities
                  </div>
                  <!--  <div class="project-name">
                    Project Name
                  </div> -->
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/specialities/fullsize/4.jpg">
              <img class="img-fluid" src="img/specialities/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    specialities
                  </div>
                  <!-- <div class="project-name">
                    Project Name
                  </div> -->
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/specialities/fullsize/5.jpg">
              <img class="img-fluid" src="img/specialities/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    specialities
                  </div>
                  <!-- <div class="project-name">
                    Project Name
                  </div> -->
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/specialities/fullsize/6.jpg">
              <img class="img-fluid" src="img/specialities/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    specialities
                  </div>
                  <!-- <div class="project-name">
                    Project Name
                  </div> -->
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <section id="music">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><strong>Music Library</strong></h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/fB6xF8UsWU0" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/U4CfR_7wUpc" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/mNafVO5BU7E" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/Qx2y76EMkfc" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/_tvXBA9xKS8" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/EwB33DR6za8" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/gSbzRTA-vog" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/47fWngpb8rM" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/cfo6cCk70pE" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/8nP6vB8rmyY" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/URAXfl4svxg" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <iframe width="250" height="200" src="https://www.youtube.com/embed/h5Rtc9gchfU" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery images -->
    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Press Images -->
    <section id="press">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><strong>Press</strong></h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <section class="p-0" id="portfolio">
        <div class="container-fluid p-0">
          <div class="row no-gutters popup-gallery">
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/1.jpg">
                <img class="img-fluid" src="img/press/thumbnails/1.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/2.jpg">
                <img class="img-fluid" src="img/press/thumbnails/2.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/3.jpg">
                <img class="img-fluid" src="img/press/thumbnails/3.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/4.jpg">
                <img class="img-fluid" src="img/press/thumbnails/4.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/5.jpg">
                <img class="img-fluid" src="img/press/thumbnails/5.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/6.jpg">
                <img class="img-fluid" src="img/press/thumbnails/6.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/7.jpg">
                <img class="img-fluid" src="img/press/thumbnails/7.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div> -->
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/8.jpg">
                <img class="img-fluid" src="img/press/thumbnails/8.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div> -->
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-sm-6">
              <a class="portfolio-box" href="img/press/fullsize/9.jpg">
                <img class="img-fluid" src="img/press/thumbnails/9.jpg" alt="">
                <div class="portfolio-box-caption">
                  <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                      Press Note
                    </div>
                    <!-- <div class="project-name">
                    Project Name
                  </div> -->
                  </div>
                </div>
              </a>
            </div>


          </div>
        </div>
      </section>


      <section id="performances">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading"><strong>Performances</strong></h2>
              <hr class="my-4">
            </div>
          </div>
        </div>
        <div class="container" align="center">
          <div class="my-auto" align="left">

            <ul class="fa-ul mb-0">
              <li>
                <i class=" fa fa-bookmark text-danger"></i>&nbsp; &nbsp;Performed in ICICI Bank Corporate meeting
                presence of distinguished personalities
              </li>
              <li>
                <i class=" fa fa-bookmark text-danger"></i>&nbsp; &nbsp;Perfromed in Banglore festival
              </li>
              <li>
                <i class=" fa fa-bookmark text-danger"></i>&nbsp; &nbsp;Over the years singing regularly in the cultural
                festivals organized by state and central governments
              </li>
              <li>
                <i class=" fa fa-bookmark text-danger"></i>&nbsp; &nbsp;Perfomed in Bidar maha utsav
              </li>
              <li>
                <i class="fa fa-bookmark text-danger"></i>&nbsp; &nbsp;Performed in Nashik Festival
              </li>
              <li>
                <i class="fa fa-bookmark text-danger"></i>&nbsp; &nbsp;Performed in Dubai a Tribute to late Ustad Nusrat
                Fateh Ali Khan
              </li>
              <li>
                <i class="fa fa-bookmark text-danger"></i>&nbsp; &nbsp;Performed in Tanzania (East Africa)
              </li>
              <li>
                <i class="fa fa-bookmark text-danger"></i>&nbsp; &nbsp;Gave Performence with Great Ghazals maestros like
                Jagjit Singh, Talat Aziz, Chandan Das, Suresh Wadhkar, Raj kumar Razvi
              </li>
            </ul>
          </div>

        </div>
      </section>


      <section id="tours">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading"><strong>Tours</strong></h2>
              <hr class="my-4">
            </div>
          </div>
        </div>


        <section class="p-0" id="portfolio">
          <div class="container-fluid p-0">
            <div class="row no-gutters popup-gallery">
              <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tours/fullsize/1.jpg">
                  <img class="img-fluid" src="img/tours/thumbnails/1.jpg" alt="">
                  <div class="portfolio-box-caption">
                    <div class="portfolio-box-caption-content">
                      <div class="project-category text-faded">
                        Press Note
                      </div>
                      <!-- <div class="project-name">
                    Project Name
                  </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tours/fullsize/2.jpg">
                  <img class="img-fluid" src="img/tours/thumbnails/2.jpg" alt="">
                  <div class="portfolio-box-caption">
                    <div class="portfolio-box-caption-content">
                      <div class="project-category text-faded">
                        Press Note
                      </div>
                      <!-- <div class="project-name">
                    Project Name
                  </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tours/fullsize/3.jpg">
                  <img class="img-fluid" src="img/tours/thumbnails/3.jpg" alt="">
                  <div class="portfolio-box-caption">
                    <div class="portfolio-box-caption-content">
                      <div class="project-category text-faded">
                        Press Note
                      </div>
                      <!-- <div class="project-name">
                    Project Name
                  </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tours/fullsize/4.jpg">
                  <img class="img-fluid" src="img/tours/thumbnails/4.jpg" alt="">
                  <div class="portfolio-box-caption">
                    <div class="portfolio-box-caption-content">
                      <div class="project-category text-faded">
                        Press Note
                      </div>
                      <!-- <div class="project-name">
                    Project Name
                  </div> -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tours/fullsize/5.jpg">
                  <img class="img-fluid" src="img/tours/thumbnails/5.jpg" alt="">
                  <div class="portfolio-box-caption">
                    <div class="portfolio-box-caption-content">
                      <div class="project-category text-faded">
                        Press Note
                      </div>
                      <!-- <div class="project-name">
                    Project Name
                  </div -->
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tours/fullsize/6.jpg">
                  <img class="img-fluid" src="img/tours/thumbnails/6.jpg" alt="">
                  <div class="portfolio-box-caption">
                    <div class="portfolio-box-caption-content">
                      <div class="project-category text-faded">
                        Press Note
                      </div>
                      <!-- <div class="project-name">
                    Project Name
                  </div> -->
                    </div>
                  </div>
                </a>
              </div>
        </section>

        <section id="awards">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading"><strong>Awarded and Honoured By - </strong></h2>
                <hr class="my-4">
              </div>
            </div>
          </div>
          <div class="my-auto" align="center">
            <div class="container" align="left">
              <ul class="fa-ul mb-0">
                <li>
                  <i class=" fa fa-trophy text-danger"></i>&nbsp; &nbsp;Banglore Festival
                </li>
                <li>
                  <i class=" fa fa-trophy text-danger"></i>&nbsp; &nbsp;Bidar Maha Utsav
                </li>
                <li>
                  <i class=" fa fa-trophy text-danger"></i>&nbsp; &nbsp;Nashik Festival
                </li>
                <li>
                  <i class=" fa fa-trophy text-danger"></i>&nbsp; &nbsp;ICICI Bank
                </li>
                <li>
                  <i class=" fa fa-trophy text-danger"></i>&nbsp; &nbsp;NTPC Medical Conference ( Ramagundam)
                </li>
                <li>
                  <i class=" fa fa-trophy text-danger"></i>&nbsp; &nbsp;Dubai Festival
                </li>
              </ul>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
            </div>
          </div>
          </div>
          </div>
        </section>

        <section class="bg-dark text-white">
          <div class="container text-center">
            <h2 class="mb-4"><strong>Show your Love, Book an Event with us.</strong></h2>
            <a class="btn btn-light btn-xl sr-button" href="booking.html"><strong>Book Now!</strong></a>
          </div>
        </section>

        <section id="contact">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading"><strong>Let's Get In Touch!</strong></h2>
                <hr class="my-4">
                <p class="mb-5"><strong>Ready to start your next event with us? That's great! Give us a call or send us
                    an email and we will get back to you as soon as possible!</strong></p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 ml-auto text-center">
                <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                <p><strong>+91 93470 97481</strong> <br><strong> +91 93479 98663 </strong></p>
              </div>
              <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                <p>
                  <a href="sunilrao5628@gmail.com"><strong>sunilrao5628@gmail.com</strong></a> <br>
                  <a href="shiv_sunilrao@yahoo.co.in"><strong>shiv_sunilrao@yahoo.co.in</strong></a>
                </p>

              </div>

              <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-map-marker-alt fa-3x mb-3 sr-contact-2"></i>

                <p>
                  <strong># 5-5-980, Gosha Mahal,</strong> <br>
                  <strong>Hindi Nagar, Hyderabad,</strong> <br>
                  <strong>500 012 (T.S.)</strong>
                </p>



              </div>

            </div>

          </div>
          <br>
          <div class="col-lg-12 text-center">
            <a
              href="https://www.facebook.com/sunil.rao.9237?fref=search&__tn__=%2Cd%2CP-R&eid=ARBeSRzsaMU5vxeupd4kP2HtAy11wTNub2uTXogqFbbuG5Gw6KWORR98q5D_TYZuOp4YdnBRUyxlqfKX">
              <i class="fab fa-facebook fa-2x"> </i></a> &nbsp; &nbsp; &nbsp;
            <a href="https://www.youtube.com/channel/UCibqWS_eIjqZPI691v891Rg"> <i class="fab fa-youtube fa-2x">
              </i></a>
          </div>

          <br><br>
          <div class="col-lg-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </section>



        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/creative.min.js"></script>

</body>

</html>