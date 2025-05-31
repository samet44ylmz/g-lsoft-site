<section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                <div class="icon-circle me-2">
                  <i class="bi bi-bell"></i>
                </div>
                <span class="badge-text me-3">Innovative Solutions</span>
              </div>
            </div>

            <h1 class="hero-title mb-4">{{ $hero->title }}</h1>

            <p class="hero-description mb-4">{{$hero->description}}</p>

            <div class="cta-wrapper">
              <a href="#" class="btn btn-primary">{{$hero->btn_text}}</a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image">
              <img src="{{ asset($hero->image) }}" alt="Business Growth" class="img-fluid" loading="lazy">
            </div>
          </div>
        </div>

        <div class="row feature-boxes">
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-gear"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">{{$hero->sub_title_1}}</h3>
                <p class="feature-text">{{$hero->description_1}}</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-window"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">{{$hero->sub_title_2}}</h3>
                <p class="feature-text">{{$hero->description_2}}</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-headset"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">{{$hero->sub_title_3}}</h3>
                <p class="feature-text">{{$hero->description_3}}</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>