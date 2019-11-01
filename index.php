<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Prime Tower - Southgate Simatupang - Southgate Residence</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicons.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css?1.0" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo-southgate-residence.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#altitude">The Altitude</a></li>
          <li><a href="#about">Prime Tower</a></li>
          <li><a href="#services">Spesifikasi</a></li>
          <li><a href="#portfolio">Unit Plan</a></li>
          <li><a href="#contact">Hubungi Kami</a></li>
          <li class="d-none d-sm-block"><a class="bg-success text-white rounded-pill" style="padding:4px 10px;margin:0 5px;font-weight:400;font-size:1rem;" href="whatsapp://send?text=Saya%20Tertarik%20Dengan%20The%20Prime%20Tower&phone=+6281311301275">0813 1130 1275</a></li>
          <!-- <li class="d-none d-sm-block"><a class="bg-success text-white rounded-pill" style="padding:4px 10px;margin:0 5px;font-weight:400;font-size:1rem;" href="whatsapp://send?text=Saya%20Tertarik%20Dengan%20The%20Prime%20Tower&phone=+6281210335218">0812 1033 5218</a></li> -->
        </ul>
      </nav><!-- .main-nav -->
      <div class="clearfix"></div>
    </div>
    <div class="d-block d-sm-none" style="background: white;border-top: 1px solid #eeeeee;padding: 15px 0;font-size: 1rem;">
      <div class="text-center">
        <a class="bg-success text-white rounded-pill" style="padding:4px 20px;font-weight:400;" href="whatsapp://send?text=Saya%20Tertarik%20Dengan%20The%20Prime%20Tower&phone=+6281311301275">0813 1130 1275</a> <!--a class="bg-success text-white rounded-pill" style="padding:4px 20px;font-weight:400;" href="whatsapp://send?text=Saya%20Tertarik%20Dengan%20The%20Prime%20Tower&phone=+6281210335218">0812 1033 5218</a> -->
      </div>
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/the_altitude_plan.jpg" class="d-block w-100" alt="The Altitude Southgate">
        </div>
        <div class="carousel-item">
          <img src="img/the_altitude_banner.jpg" class="d-block w-100" alt="The Altitude">
        </div>
        <div class="carousel-item">
          <img src="img/prime-tower.png" class="d-block w-100" alt="The Prime Tower">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="ion ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="ion ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <section id="altitude" class="custom-gallery">
      <div class="container">

        <header class="section-header">
          <h1>THE ALTITUDE</h1>
          <p>Apartemen yang terletak di jantung kota yang menawarkan kemudahan akses dan kesenangan yang disesuaikan untuk kaum muda, profesional dan wirausahawan yang mencari gaya hidup yang efisien dalam lingkungan yang terpadu.</p>
        </header>

        <div class="row portfolio-container">

          <?php for($a=1;$a<=27;$a++) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/altitude/altitude<?php echo $a; ?>.jpg" data-lightbox="altitude" class="link-preview" title="Altitude"><img src="img/altitude/thumbs/altitude<?php echo $a; ?>_tn.jpg" style="width:100%" alt=""></a>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h1>THE PRIME TOWER</h1>
          <p>Apartemen Eksklusif terdiri dari 29 Lantai dan Hanya 7 Unit setiap lantainya. The PRIME TOWER memiliki konsep where urban luxury meets green living yang memadukan konsep hijau dan di dukung dengan berbagai macam fasilitas.</p>
        </header>

        <div class="row about-container text-center">

          <div class="col-lg-4 icon-box wow fadeInUp">
            <a href="img/why/reason-1.png" data-lightbox="reason" title="Trusted Companies"><img src="img/why/reason-1-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Trusted Companies</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 icon-box wow fadeInUp">
            <a href="img/why/reason-2.png" data-lightbox="reason" title="Superblock Concept"><img src="img/why/reason-2-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Superblock Concept</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 icon-box wow fadeInUp">
            <a href="img/why/reason-3.png" data-lightbox="reason" title="Balance Life"><img src="img/why/reason-3-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Balance Life</a></h4>
            <p class="description"></p>
          </div>

          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/reason-4.png" data-lightbox="reason" title="Location & Surroundings"><img src="img/why/reason-4-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Location &amp; Surroundings</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/reason-5.png" data-lightbox="reason" title="Japanese High Quality Brands"><img src="img/why/reason-5-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Japanese High Quality Brands</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/reason-6.png" data-lightbox="reason" title="AEON Mall"><img src="img/why/reason-6-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">AEON Mall</a></h4>
            <p class="description"></p>
          </div>

          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/reason-7.png" data-lightbox="reason" title="Next Prime of Value"><img src="img/why/reason-7-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Next Prime of Value</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/reason-8.png" data-lightbox="reason" title="Support From Best Japanese Leasing Agents"><img src="img/why/reason-8-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Support From Best Japanese Leasing Agents</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/reason-9.png" data-lightbox="reason" title="High Rental Yield"><img src="img/why/reason-9-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">High Rental Yield</a></h4>
            <p class="description"></p>
          </div>

          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/fasilitas.png" data-lightbox="reason" title="Facilities"><img src="img/why/fasilitas-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Facilities</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/fasilitas-img.png" data-lightbox="reason" title="Detail Facilities"><img src="img/why/fasilitas-img-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Detail Facilities</a></h4>
            <p class="description"></p>
          </div>
          <div class="col-lg-4 icon-box wow fadeInUp" data-wow-duration="1.4s">
            <a href="img/why/progress.png" data-lightbox="reason" title="Progress"><img src="img/why/progress-thumb.png" class="img-fluid" /></a>
            <h4 class="title"><a href="">Progress</a></h4>
            <p class="description"></p>
          </div>


        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Spesifikasi</h3>
          <p>Setiap unit di dukung dengan brand berkualitas asal jepang dan brand lain yang berkualitas tinggi.</p>
        </header>

        <div class="row">

          <div class="col-12 wow bounceInUp">
            <div class="box text-center">
            <div class="table-responsive">
              <table class="table table-bordered ">
                <tr>
                  <th rowspan="3">FLOOR</th>
                  <td>Living, Dining, Kitchen, Bathrooms</td>
                  <td>High Quality Marble</td>
                </tr>
                <tr>
                  <td>Bedrooms</td>
                  <td>Laminated Parquet</td>
                </tr>
                <tr>
                  <td>Service Area & Maid Area</td>
                  <td>Homogeneous Tile</td>
                </tr>
                <tr>
                  <th rowspan="2">WALL</th>
                  <td>Living, Dining, Bedroom</td>
                  <td>Painted</td>
                </tr>
                <tr>
                  <td>Bathrooms</td>
                  <td>Marble + Painted</td>
                </tr>
                <tr>
                  <th rowspan="2">KITCHEN</th>
                  <td>Appliances</td>
                  <td>Kitchen Hood & Gas Stove</td>
                </tr>
                <tr>
                  <td>Counter Top Surface</td>
                  <td>Provided</td>
                </tr>
                <tr>
                  <th>SANITARY</th>
                  <td>Bathrooms, Kitchen, Service, and Maid Area</td>
                  <td>KOHLER</td>
                </tr>
                <tr>
                  <th>AIR CONDITIONING</th>
                  <td>Living, Dining, Bedroom (exc. Maid)</td>
                  <td>Multi Split Wall</td>
                </tr>
                <tr>
                  <th>WARDROBE</th>
                  <td>Master Bedroom</td>
                  <td>TOTO</td>
                </tr>
                <tr>
                  <th>WATER HEATER</th>
                  <td>All Bathrooms</td>
                  <td>Provided</td>
                </tr>
                <tr>
                  <th rowspan="2">CEILING HEIGHT</th>
                  <td>Living Room and Bedroom</td>
                  <td>3m</td>
                </tr>
                <tr>
                  <td>Bathroom, Pantry, and Service Area</td>
                  <td>2,6 m</td>
                </tr>
              </table>
            </div>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box text-center">
              <div class=""><img src="img/icon-toto.png" /></div>
              <h4 class="title"><a href="">TOTO</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box text-center">
              <div class=""><img src="img/icon-shower.png" /></div>
              <h4 class="title"><a href="">KOHLER</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box text-center">
              <div class=""><img src="img/icon-wireless.png" /></div>
              <h4 class="title"><a href="">KAMARQ</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box text-center">
              <div class=""><img src="img/icon-kitchen.png" /></div>
              <h4 class="title"><a href="">FRANKE</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box text-center">
              <div class=""><img src="img/icon-parquet.png" /></div>
              <h4 class="title"><a href="">HIGH QUALITY MARBLE/PARQUITE</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box text-center">
              <div class=""><img src="img/icon-ac.png" /></div>
              <h4 class="title"><a href="">JAPANESE BRAND</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box text-center">
              <div class=""><img src="img/icon-window.png" /></div>
              <h4 class="title"><a href="">LOW E GLASS BY ASAHIMAS</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box text-center">
              <div class=""><img src="img/icon-height.png" /></div>
              <h4 class="title"><a href="">HIGH CEILING</a></h4>
              <p class="description"></p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">UNIT PLAN</h3>
        </header>

        <!--div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div-->

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/unit/unit-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Unit E</a></h4>
                <p>1BR + Study</p>
                <div>
                  <a href="img/unit/unit-1.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <!--a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a-->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/unit/unit-2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Unit C</a></h4>
                <p>2BR</p>
                <div>
                  <a href="img/unit/unit-2.png" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/unit/unit-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Unit F</a></h4>
                <p>2BR</p>
                <div>
                  <a href="img/unit/unit-3.png" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/unit/unit-4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Unit G</a></h4>
                <p>2BR</p>
                <div>
                  <a href="img/unit/unit-4.png" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/unit/unit-5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Unit B</a></h4>
                <p>2BR + Maid</p>
                <div>
                  <a href="img/unit/unit-5.png" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/unit/unit-6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Unit A</a></h4>
                <p>3BR + Maid</p>
                <div>
                  <a href="img/unit/unit-6.png" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <!-- <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">GALERI</h3>
        </header>

        <!--div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div-->

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-1.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-1-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-2.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-2-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-3.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-3-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-4.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-4-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-5.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-5-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-6.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-6-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-7.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-7-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-8.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-8-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="img/galeri/galeri-9.png" data-lightbox="galeri" class="link-preview" title="Preview"><img src="img/galeri/galeri-9-thumb.png" style="width:100%" alt=""></a>
            </div>
          </div>


        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Member of Developers</h3>
          <p>A Synergy of Local Knowledge with Global Expertise, Bringing You World Class Experiences, By Sinarmas and Japanese Trusted Developer Keikyu, Itochu.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-md-4 col-12">
            <div class="client-logo">
              <img src="img/clients/keikyu-logo.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-md-4 col-12">
            <div class="client-logo">
              <img src="img/clients/itochu-logo.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-md-4 col-12">
            <div class="client-logo">
              <img src="img/clients/sml-logo.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Hubungi Kami</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.681132608154!2d106.83794331423128!3d-6.305558995436425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed23f28e8491%3A0xb88cb8c30b3a334!2sSOUTHGATE+RESIDENCE+-+ELEGANCE+TOWER!5e0!3m2!1sid!2sid!4v1557388310792!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe-->
              <img src="img/lokasi.png" class="img-fluid" />
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6 info">
                <i class="ion-ios-location-outline"></i>
                <p>Jl. Tanjung Barat Raya No. 163, Jakarta Selatan.</p>
              </div>
              <div class="col-md-6 info">
                <i class="ion-ios-email-outline"></i>
                <p style="margin-bottom:0;padding-bottom:0;">bambang.isdi@gmail.com</p>
                <div class="clearfix"></div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+62 0813 1130 1275</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Prime Tower</h3>
            <p>Apartemen Eksklusif terdiri dari 29 Lantai dan hanya 7 Unit setiap lantainya. The PRIME juga akan didukung oleh konsep where urban luxury meets green living yang memadukan konsep hijau dengan fasilitas premium.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Southgate</h4>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="#about">Southgate Residence</a></li>
              <li><a href="#services">Spesifikasi</a></li>
              <li><a href="#portfolio">Unit Plan</a></li>
              <li><a href="#clients">Developer</a></li>
              <li><a href="#contact">Hubungi Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>Jl. Tanjung Barat Raya No. 163, Jakarta Selatan.<br>
              <strong>Phone:</strong> +62 0813 1130 1275<br>
              <strong>Email:</strong> bambang.isdi@gmail.com<br>
            </p>

            <!--div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div-->

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Silahkan daftarkan email anda untuk medapatkan penawaran menarik dari kami.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <?php echo date('Y'); ?> &copy; Copyright <strong>Southgate Residence.</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://www.webincms.com/">WebinCMS</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
