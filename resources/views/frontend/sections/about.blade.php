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
              <div class="col-lg-6 d-flex align-items-stretch">
                @if(!empty($about->image_1))
                  <img src="{{ asset($about->image_1) }}" class="img-fluid rounded-4 w-100 h-100" style="aspect-ratio: 1/1; object-fit: cover; min-height: 280px;" alt="">
                @endif
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12 mb-2">
                    @if(!empty($about->image_2))
                      <img src="{{ asset($about->image_2) }}" class="img-fluid rounded-4 w-100" style="aspect-ratio: 16/9; object-fit: cover; min-height: 130px; max-height: 180px;" alt="">
                    @endif
                  </div>
                   <div class="col-lg-12">
                    @if(!empty($about->image_3))
                      <img src="{{ asset($about->image_3) }}" class="img-fluid rounded-4 w-100" style="aspect-ratio: 16/9; object-fit: cover; min-height: 130px; max-height: 180px;" alt="">
                    @endif
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>