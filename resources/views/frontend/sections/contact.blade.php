 <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ $contact_customer->title }}</h2>
        <p>{{ $contact_customer->description }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h3>{{ $contact_customer->adres_title }}</h3>
              <p>{{ $contact_customer->adres_description }}</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>{{ $contact_customer->phone_title }}</h3>
              <p>{{ $contact_customer->phone_description }}            </p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>{{  $contact_customer->hour_title }}</h3>
              <p> {{ $contact_customer->hour_description}}</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        <option value="">Select service*</option>
                        <option value="Service 1">Consulting</option>
                        <option value="Service 2">Development</option>
                        <option value="Service 3">Marketing</option>
                        <option value="Service 4">Support</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Submit Message</button>
                  </div>