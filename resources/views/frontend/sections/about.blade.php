<section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            
            <h3>{{ $about->title }}</h3>
            <p class="fst-italic">
             {{ $about->description }}
            </p>
            
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="{{ asset($about->image_1) }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>