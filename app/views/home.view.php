<?php $this->view("includes/header") ?>

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose <?=APP_NAME?>?</h3>
              <p>
              Our Eye Conjunctivitis Diagnosis System offers experts in the field a comprehensive and accessible platform to evaluate cognitive health. With a strong emphasis on accuracy, our user-friendly system enables experts to access a range of tools and resources specifically designed for cognitive assessments.
              </p>
              <!-- <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> -->
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <i><img src="<?=ROOT?>/assets/images/diagnosis.jpg" width="50"  class="img-fluid"></ing></i>
                    <h4>Take the test</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <i><img src="<?=ROOT?>/assets/images/diagnosis.jpg" width="50" class="img-fluid"></ing></i>
                    <h4>Get Diagnosed</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <i><img src="<?=ROOT?>/assets/images/test result.jpg" width="50" class="img-fluid"></ing></i>
                    <h4>See results</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>About This Project</h3>
            <p>Our Eye Conjunctivitis Online Diagnosis System offers experts in the field a comprehensive and accessible platform to evaluate cognitive health.With a strong emphasis on accuracy, our user-friendly system enables experts to access a range of tools and resources specifically designed for cognitive assessments. By leveraging our thoughtfully developed interface, experts can navigate through a series of targeted questions, tailored to assess various aspects of cognitive function. These results serve as invaluable indicators, providing experts with deeper insights into an individual’s cognitive abilities and aiding in their diagnostic process..</p>

            <h3>Technologies</h3>
            <p class="d-flex">
                <img src="<?=ROOT?>/assets/images/html and css.png" width="200" alt="image here" class="img-fluid">
                <img src="<?=ROOT?>/assets/images/bootstrap.png" width="200" alt="image here" class="img-fluid">
            </p>
            <p class="d-flex">
            <img src="<?=ROOT?>/assets/images/javascript.jpeg" width="200" alt="image here" class="img-fluid">
            </p>
            <p class="d-flex">
            <img src="<?=ROOT?>/assets/images/php.jpeg" width="200" alt="image here" class="img-fluid">
              <img src="<?=ROOT?>/assets/images/php-ml.jpg" width="200" alt="image here" class="img-fluid">
            </p>
          </div>
        </div>
      </div>


    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

<?php $this->view("includes/footer") ?>

