@extends('frontend.layouts.layout')

@section('content')

 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('frontend/assets/img/logo.webp') }}" alt=""> -->
        <h1 class="sitename">Invent</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Anasayfa</a></li>
          <li><a href="#about">Hakkımızda</a></li>
          <li><a href="#services">Hizmetlerimiz</a></li>
         
          <li><a href="#contact">İletişim</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

     

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    @include('frontend.sections.hero')
  <!-- /Hero Section -->

    <!-- About Section -->
    @include('frontend.sections.about')
   <!-- /About Section -->

    <!-- How We Work Section -->
    @include('frontend.sections.how_we_work')
    <!-- /How We Work Section -->

    <!-- Services Section -->
    @include('frontend.sections.services')
    <!-- /Services Section -->

    <!-- Services Alt Section -->
   
   <!-- /Services Alt Section -->

    <!-- Call To Action 2 Section -->
   
   <!-- /Call To Action 2 Section -->

    <!-- Portfolio Section -->
    {{-- <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Work</li>
              <li data-filter=".filter-web">Web Design</li>
              <li data-filter=".filter-graphics">Graphics</li>
              <li data-filter=".filter-motion">Motion</li>
              <li data-filter=".filter-brand">Branding</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-1.webp') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>Modern Dashboard Interface</h3>
                  <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-10.webp') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('frontend/assets/img/portfolio/portfolio-10.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Creative Brand Identity</h3>
                  <p>Vestibulum id ligula porta felis euismod semper at vulputate.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-7.webp') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('frontend/assets/img/portfolio/portfolio-7.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-motion"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Motion</span>
                  <h3>Product Animation Reel</h3>
                  <p>Donec ullamcorper nulla non metus auctor fringilla dapibus.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-brand">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-4.webp') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('frontend/assets/img/portfolio/portfolio-4.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-brand"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Branding</span>
                  <h3>Luxury Brand Package</h3>
                  <p>Aenean lacinia bibendum nulla sed consectetur elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-2.webp') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('frontend/assets/img/portfolio/portfolio-2.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>E-commerce Platform</h3>
                  <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="{{ asset('frontend/assets/img/portfolio/portfolio-11.webp') }}" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="{{ asset('frontend/assets/img/portfolio/portfolio-11.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Digital Art Collection</h3>
                  <p>Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section --> --}}

    <!-- Pricing Section -->
    {{-- <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center">

          <!-- Basic Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-card">
              <h3>Basic Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">9.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Duis aute irure dolor
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Excepteur sint occaecat
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Nemo enim ipsam voluptatem
                </li>
              </ul>

              <a href="#" class="btn btn-primary">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Standard Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-card popular">
              <div class="popular-badge">Most Popular</div>
              <h3>Standard Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">19.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Lorem ipsum dolor sit amet
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Consectetur adipiscing elit
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Sed do eiusmod tempor
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Ut labore et dolore magna
                </li>
              </ul>

              <a href="#" class="btn btn-light">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Premium Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-card">
              <h3>Premium Plan</h3>
              <div class="price">
                <span class="currency">$</span>
                <span class="amount">39.9</span>
                <span class="period">/ month</span>
              </div>
              <p class="description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Temporibus autem quibusdam
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Saepe eveniet ut et voluptates
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Nam libero tempore soluta
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Cumque nihil impedit quo
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Maxime placeat facere possimus
                </li>
              </ul>

              <a href="#" class="btn btn-primary">
                Buy Now
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Pricing Section --> --}}

    <!-- Faq Section -->
    {{-- <section id="faq" class="faq section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="faq-contact-card">
              <div class="card-icon">
                <i class="bi bi-question-circle"></i>
              </div>
              <div class="card-content">
                <h3>Still Have Questions?</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum.</p>
                <div class="contact-options">
                  <a href="#" class="contact-option">
                    <i class="bi bi-envelope"></i>
                    <span>Email Support</span>
                  </a>
                  <a href="#" class="contact-option">
                    <i class="bi bi-chat-dots"></i>
                    <span>Live Chat</span>
                  </a>
                  <a href="#" class="contact-option">
                    <i class="bi bi-telephone"></i>
                    <span>Call Us</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-accordion">
              <div class="faq-item faq-active">
                <div class="faq-header">
                  <h3>Vivamus suscipit tortor eget felis porttitor volutpat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="faq-header">
                  <h3>Curabitur aliquet quam id dui posuere blandit?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Sed porttitor lectus nibh ullamcorper sit amet?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum.
                  </p>
                </div>
              </div><!-- End FAQ Item-->

              <div class="faq-item">
                <div class="faq-header">
                  <h3>Nulla quis lorem ut libero malesuada feugiat?</h3>
                  <i class="bi bi-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-content">
                  <p>
                    Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.
                  </p>
                </div>
              </div><!-- End FAQ Item-->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Faq Section --> --}}

    <!-- Team Section -->
    {{-- <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-card">
              <div class="team-image">
                <img src="{{ asset('frontend/assets/img/person/person-m-1.webp') }}" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Daniel Mitchell</h4>
                <span class="position">Creative Director</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-card">
              <div class="team-image">
                <img src="{{ asset('frontend/assets/img/person/person-f-6.webp') }}" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Aliquam tincidunt mauris eu risus. Vestibulum auctor dapibus neque. Nunc dignissim risus id metus.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Rebecca Taylor</h4>
                <span class="position">Lead Developer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-card">
              <div class="team-image">
                <img src="{{ asset('frontend/assets/img/person/person-m-6.webp') }}" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Cras ornare tristique elit. Integer in dui quis est placerat ornare. Phasellus a lacus a risus.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Marcus Johnson</h4>
                <span class="position">UI/UX Designer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-card">
              <div class="team-image">
                <img src="{{ asset('frontend/assets/img/person/person-f-3.webp') }}" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Jessica Parker</h4>
                <span class="position">Marketing Strategist</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section --> --}}

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('frontend/assets/img/person/person-m-8.webp') }}" alt="Profile Image">
                    <div>
                      <h3>Robert Johnson</h3>
                      <h4>Marketing Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et maecenas aliquam.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('frontend/assets/img/person/person-f-3.webp') }}" alt="Profile Image">
                    <div>
                      <h3>Lisa Williams</h3>
                      <h4>Product Manager</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('frontend/assets/img/person/person-f-10.webp') }}" alt="Profile Image">
                    <div>
                      <h3>Emma Parker</h3>
                      <h4>UX Designer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('frontend/assets/img/person/person-m-5.webp') }}" alt="Profile Image">
                    <div>
                      <h3>David Miller</h3>
                      <h4>Senior Developer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('frontend/assets/img/person/person-m-2.webp') }}" alt="Profile Image">
                    <div>
                      <h3>Michael Davis</h3>
                      <h4>CEO &amp; Founder</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="{{ asset('frontend/assets/img/person/person-f-7.webp') }}" alt="Profile Image">
                    <div>
                      <h3>Sarah Thompson</h3>
                      <h4>Art Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}

    <!-- Contact Section -->
    @include('frontend.sections.contact')
    {{-- contact section --}}
   

        

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>

@endsection

