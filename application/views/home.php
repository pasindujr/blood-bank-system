<!doctype html>
<html lang='en'>
  <head>
    <title>Kegalle Blood Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel='stylesheet'href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <!--fontawesome-->
    <script src='https://kit.fontawesome.com/332a215f17.js' crossorigin='anonymous'></script>
    <!--Main CSS-->
	<link rel="stylesheet" href="<?php echo base_url('assets/styles.css')?>"/>
    <!--google Fonts-->
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap' rel='stylesheet'>
    <!--Animate.css--->
    <link
    rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css'/>
    
  </head>
  <body>
      <!---Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2"
      id="mainNav">
      <div class="container">
          <a class="navbar-brand text-white"href="#">Kegalle Blood Bank</a>
          <button class="navbar-toggler navbar-toggler-right"type="button"
          data-toggle="collapse"data-target="#myNavbar"aria-controls="myNavbar"aria-expanded="false"aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"id="myNavbar">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#stories">
                    Stories
                </a></li>
                <li class="nav-item"><a class="nav-link" href="<?php base_url('index.php/StaffLogin'); ?>">Log In</a></li>
            </ul>
        </div>
      </div>
        </nav>

      <!---End of Navbar-->
      <!--Hero Section-->
      <section id="hero" class="d-flex justify-content-center align-items-center">
          <div id="heroCarousel"class="container carousel carousel-fade"
          data-ride="carousel">
        <!--Slide-1-->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__backInDown">
                    Let's<span>Help</span>
                </h2>
                <p class="animate__animated animate__fadeInUp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure beatae alias quod, ducimus explicabo.
                    adipisicing elit. 
                </p>
                <a href="#"class="btn hero-btn animate__animated animate__backInUp">
                    Read More
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <!--Slide-1-->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__backInDown">
                    Lorem Ipsum-1
                </h2>
                <p class="animate__animated animate__fadeInUp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure beatae alias quod, ducimus explicabo.
                    adipisicing elit. 
                </p>
                <a href="#"class="btn hero-btn animate__animated animate__backInUp">
                    Read More
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <!--Slide-1-->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__backInDown">
                  Lorem Ipsum-2
                </h2>
                <p class="animate__animated animate__fadeInUp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure beatae alias quod, ducimus explicabo.
                    adipisicing elit. 
                </p>
                <a href="#"class="btn hero-btn animate__animated animate__backInUp">
                    Read More
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <a class="carousel-control-prev"href="#heroCarousel"role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon fas fa-chevron-left"aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    
    </a>
    <a class="carousel-control-next"href="#heroCarousel"role="button"
        data-slide="next">
        <span class="carousel-control-next-icon fas fa-chevron-right"aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    
    </a>
        
        </div>
      </section>

      <!--end of hero Section-->

      <!--About us-->
      <section class="mt-5">
          <div class="container">
              <div class="row justify-content-center mb-5">
                  <div class="col-md-8 text-center heading-section">
                      <span>About Us</span>
                      <h2 class="mb-3" id="about">Our Mission | Vision & Plans</h2>
                  </div>
              </div>
              <!------>
              <div class="row tabs mt-4">
                  <div class="col-md-4">
                      <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                          <li class="nav-item text-left">
                              <a class="nav-link active py-4"data-toggle="tab"
                              href="#about-1">About</a>
                          </li>
                          <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-2">Our Beginning</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-3">Our Mission</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-4">Our Vision</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-5">Our Mandate</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-6">Our Plans</a>
                        </li>
                      </ul>
                  </div>
                  <!----->
                  <div class="col-md-8">
                      <div class="tab-content">
                          <div class="tab-pane container p-0 active"id="about-1">
            <div class="img"style="background-image: url(images/about-1.jpg);"></div>
            <h3><a href="#">About Us</a></h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                          </div>
                          <!----->
             <div class="tab-pane container p-0"id="about-2">
                <div class="img"style="background-image: url(images/about-2.jpg);"></div>
             <h3><a href="#">Our Beginning</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-3">
                <div class="img"style="background-image: url(images/about-3.jpg);"></div>
             <h3><a href="#">Our Mission</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-4">
                <div class="img"style="background-image: url(images/about-4.jpg);"></div>
             <h3><a href="#">Our Vision</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-5">
                <div class="img"style="background-image: url(images/about-5.jpg);"></div>
             <h3><a href="#">Our Mandate</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-6">
                <div class="img"style="background-image: url(images/about-6.jpg);"></div>
             <h3><a href="#">Our Plans</a></h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, nam eum laborum accusantium corrupti inventore repellendus iste exercitationem eveniet voluptas dolor deleniti quis aliquid aut molestias! Corrupti quo aperiam magni!</p>
                    </div>
            <!----->
                      </div>
                  </div>
                 
                          
                      
                  </div>
              </div>
          </div>
      </section>
      <!--End About us-->
      <!---Stories Section-->
      <section class="mt-3">
          <div class="stories">
              <div class="container">
                  <div class="section-title text-center">
                      <h3 id="stories">Stories</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, totam hic id nesciunt quaerat veritatis.</p>
                  </div>
                  <!----->
                  <div class="row">
                      <div class="col-md-4">
                          <div class="story-box overlay shadow">
                              <div class="story-icon">
                                  <i class="fas fa-ambulance"></i>
                              </div>
                              <h2>Health</h2>
                              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae ipsam sit consequatur ducimus asperiores quod nobis ad cumque at harum.</p>
                          </div>
                      </div>
                      <!----->
                      <div class="col-md-4">
                        <div class="story-box overlay shadow">
                            <div class="story-icon">
                                <i class="fas fa-hand-holding-water"></i>
                            </div>
                            <h2>Clean Water</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae ipsam sit consequatur ducimus asperiores quod nobis ad cumque at harum.</p>
                        </div>
                    </div>
                    <!----->
                    <div class="col-md-4">
                        <div class="story-box overlay shadow">
                            <div class="story-icon">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <h2>Plants</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae ipsam sit consequatur ducimus asperiores quod nobis ad cumque at harum.</p>
                        </div>
                    </div>
                    <!----->
                  </div>
              </div>
          </div>
      </section>
 <!--- End of Stories Section-->

     
<footer class="footer mt-5">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-des">
                        <h3>Green World</h3>
                        <p class="pb-3">
                            <em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, molestias.</em>
                        </p>
                        <p>lorem Ipsum Street <br>
                        SP 12345, Brazil <br><br><strong>
                            Phone;
                        </strong>
                        +55 61 1234 5678 9<br>
                        <strong>
                            Email:
                        </strong>
                        test@info.com<br>
                    
                    </p>
                    <div class="social-links mt-3">
                        <a href=""><i class="fab fa-twitter">

                        </i></a>
                        <a href=""><i class="fab fa-facebook">
                            
                        </i></a>
                        <a href=""><i class="fab fa-instagram">
                            
                        </i></a>
                        <a href=""><i class="fab fa-linkedin">
                            
                        </i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>About Us</h4>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful links</h4>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Lorem Ipusm</a>

                            
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our News Letters</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <form>
                        <input type="email" name="email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>