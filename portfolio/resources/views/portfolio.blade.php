@extends('header')
@section('body')

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>crafting a dynamic portfolio that showcases my passion for design, development, and innovation—each project a testament to my skills and dedication in creating impactful digital experiences.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
             <img src="assets/img/portfolio/movie.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
              <a href="https://moviebooking-2209e01.azfamtech.com/"> <h4>click</h4></a>
                <p>go in advanced and go in the last link</p>
             
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
             <img src="assets/img/portfolio/fitness.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
              <a href="https://eprojects.azfamtech.com/fitnessclub/"> <h4>click</h4></a>             
              </div>
            </div>
          </div>

        

      

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  @endsection()