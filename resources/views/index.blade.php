@extends('layouts.master')

@section('title')
TiNKA - Education. Everywhere.
@endsection

@section('content')
@include('header')
<br><br><br>
          <center>
          <!-- Gallery -->
          <div class="fill-screen">
              <div class="row">
                  <div class="column">
                    <img src="assets/img/tinka2.jpeg" class='make-it-fit'>
                  </div>
                  <div class="column">
                    <img src="assets/img/tinka1.jpeg" class='make-it-fit'>
                  </div>
                  <div class="column">
                    <img src="assets/img/tinka3.jpeg" class='make-it-fit'>
                  </div>
              </div>
            </div>
            <!-- Gallery -->
          </center>

<div id="slider" class="hero">

  <section class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">{{ __("Join Us") }}</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">Open Day Raya TiNKA</h2>
            
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
<!--                 <a href="https://forms.gle/3NH2XQAhEU4mSoeb7" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
 -->                  <span>{{ __("Register Now") }}</span>
                  <i class="bi bi-arrow-right"></i> -->
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('uploads/slider/rayaceleb.jpeg') }}" class="img-fluid" alt="raya celebration">
          </div>

      </div>
    </div>
  </section>

  <section class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Tinka Campus</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">
              Bermula Dari RM39 / Sebulan
            </h2>
            
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="https://campus.tinka.world" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>{{ __("Register Now") }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('uploads/slider/darjah1-form5.png') }}" class="img-fluid" alt="public speaking">
          </div>

      </div>
    </div>
  </section>

  <section class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Tinka Home Tuition</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">
              RM60 / Sejam Untuk One-To-One Session Dan RM55 / Sejam Untuk 2 Pelajar
            </h2>
            
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="/register" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>{{ __("Register Now") }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('uploads/slider/home-tuition.png') }}" class="img-fluid" alt="public speaking">
          </div>

      </div>
    </div>
  </section>

  <section class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">We Are Hiring!</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">
              Drop your resume at info@tinka.world
            </h2>

          </div>

          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('uploads/slider/hiring.png') }}" class="img-fluid" alt="public speaking">
          </div>

      </div>
    </div>
  </section>


@foreach($slider as $slide)
    <section class="d-flex align-items-center" id="slide-{{ $slide['id'] }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">{{ $slide['name'] }}</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">{{ $slide['caption'] }}</h2>
            
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="{{ $slide['url'] }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>{{ __("Learn More") }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('uploads/slider/'.$slide['image']) }}" class="img-fluid" alt="{{ $slide['name'] }}">
          </div>
        </div>
      </div>
    </section>
  @endforeach

</div>
<br>         
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>{{ __("Available Class") }}</h2>
          <p>{{ __("Class That We Offer") }}</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="physicalbox" data-aos="fade-up" data-aos-delay="200">
              <h3>{{ __("Physical Tuition Class") }}</h3>
              <img src="assets/img/offeredclass/physical.png" class="img-fluid" alt="">
              <p>{{ __("Our new and revamped tuition centre is located at Bukit Jelutong. Available for UPSR, PT3, SPM & IGCSE students.") }}<br><br></p>
              <a href="/register" class="btn btn-primary scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>{{ __("Register Now") }}</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="onlinebox" data-aos="fade-up" data-aos-delay="400">
              <h3>{{ __("Online Class") }}</h3>
              <img src="assets/img/offeredclass/online.png" class="img-fluid" alt="">
              <p>{{ __("Online lessons are taught via our own TiNKA App. Learn from the comfort of your own home or pretty much everywhere.") }}
              </p>
              <a href="https://campus.tinka.world" class="btn btn-danger scrollto d-inline-flex align-items-center justify-content-center align-self-center" target="_blank">
                <span>{{ __("Register Now") }}</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="homebox" data-aos="fade-up" data-aos-delay="600">
              <h3>{{ __("Home Tuition") }}</h3>
              <img src="assets/img/offeredclass/home tuition.png" class="img-fluid" alt="">
              <p>{{ __("Home tuition programme is catered for one-to-one learning. Have our Tink-Educator drop by your place for personalised.") }}
              </p>
              <a href="/register" class="btn btn-warning scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>{{ __("Register Now") }}</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>

      </div>

    </section>

  <main id="main">
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <!-- <img src="assets/img/apps.png" class="img-fluid" alt=""> -->
            <img src="assets/img/onlinelearning.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
            
              <h2>{{ __("Tinka Campus") }}</h2>
              <p>
                {{ __("Now your child is able to learn practically anywhere. Our app are engaging, immersive, interactive and most importantly fun!") }}
              </p>
              <div class="text-center text-lg-start">
                <a href="https://campus.tinka.world" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>{{ __("Register Now") }}</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>

             </div>
          </div>

         

        </div>
      </div>

    </section>

   
        <section id="joincourse" class="joincourse">

          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>{{ __("Join Us") }}</h2>
              <p>{{ __("Register Now") }}</p>
            </header>
    
            <div class="row gy-4" data-aos="fade-left">
     
              <div class="col-lg-6 col-md-6 d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="300">
                <div class="studentbox">
                  <h3 style="color: #1B1464;">{{ __("Students") }}</h3>
                  <img src="assets/img/offeredclass/studentscropped.png" class="img-fluid" alt="">
                  <p>{{ __("Enroll your child at Tinka Educentre now.") }}</p>   
                  <a href="/register" class="btn-buy">{{ __("Register Now") }}</a>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="teacherbox">
                  <h3 style="color: #1B1464;">{{ __("Tinka Tutor") }}</h3>
                  <img src="assets/img/offeredclass/tinka tutor cropped.png" class="img-fluid" alt="">
                  <p>{{ __("Earn a part-time income by signing up as Tinka Tutor.") }}</p>
                  <a href="/register/teacher" class="btn-buy">{{ __("Register Now") }}</a>
                </div>
              </div>
             </div>
    
        </section>
    

    <section>
      <div class="container mt-5 mb-5 d-flex justify-content-center">
        <ul class="social-list">
            <li>
                <div class="maincard">
                    <div class="thecard">
                      <a href="https://www.facebook.com/tinkamalaysia" target="_blank">
                        <div class="theback text-center py-4 sfacebook">
                            <div class="social-icon"> <i class="fa fa-facebook fa-2x"></i> </div>
                        </div>
                        <div class="thefront text-center py-4 sfacebook">
                            <div class="social-icon"> <i class="fa fa-facebook fa-2x"></i> </div>
                        </div>
                      </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="maincard">
                    <div class="thecard">
                      <a href="https://www.instagram.com/tinkamalaysia" target="_blank">
                        <div class="theback text-center py-4 sinstagram">
                            <div class="social-icon"> <i class="fa fa-instagram fa-2x"></i> </div>
                        </div>
                        <div class="thefront text-center py-4 sinstagram">
                            <div class="social-icon"> <i class="fa fa-instagram fa-2x"></i> </div>
                        </div>
                      </a>
                    </div>
                </div>
            </li>
            
           <li>
              <div class="maincard">
                <div class="thecard">
                  <a href="https://tinka.wasap.my" target="_blank">
                    <div class="theback text-center py-4 swhatsapp">
                        <div class="social-icon"> <i class="fa fa-whatsapp fa-2x"></i> </div>
                    </div>
                    <div class="thefront text-center py-4 swhatsapp">
                        <div class="social-text"> <i class="fa fa-whatsapp fa-2x"></i></div>
                    </div>
                  </a>
                </div>
              </div>
           </li>

      </ul>
    </div>

    </section>

    <section class="image-grid">

      <!-- Gallery -->

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <p>{{ __("Gallery") }}</p>
          </header>

              <div class="container-xxl">
                <div class="row gy-4">
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="{{ asset('uploads/slider/trial-one-week.png') }}" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="{{ asset('uploads/slider/darjah1-form5.png') }}" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="{{ asset('uploads/slider/home-tuition.png') }}" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="{{ asset('assets/img/gallery/gallery1.jpeg') }}" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="{{ asset('assets/img/gallery/gallery5.jpeg') }}" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="{{ asset('assets/img/gallery/gallery10.jpeg') }}" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <header class="section-header">
                    <p>{{ __("Feedback") }}</p>
                  </header>
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="assets/img/feedback1.png" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="assets/img/feedback2.png" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                      <a class="d-block" href="">
                        <img width="1920" height="1280" src="assets/img/feedback3.png" class="img-fluid">
                      </a>
                    </figure>
                  </div>
                </div>
              </div>

        </div>

        <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body">
                <div class="container-fluid p-0">
                  <!-- JS content here -->
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>

          <div class="fab-container" style="position:fixed; display: none;" id="fab1">
            <ul class="options">
                <li>
                    <span class="btn-label">Register</span>
                    <div class="iconbutton">
                    <i><a href="https://api.whatsapp.com/send?phone=601110870015&text=SayaNakDaftar"  target="_blank" class="fa-brands fa-whatsapp"></a></i>
                    </div>    
                </li>
                <li>
                    <span class="btn-label">QOF Digital</span>
                    <div class="iconbutton">
                    <i><a href="https://api.whatsapp.com/send?phone=601110870015&text=QOFDigital"  target="_blank" class="fa-brands fa-whatsapp"></a></i>
                    </div>    
                </li>
                <li>
                    <span class="btn-label">Kelas Fizikal</span>
                    <div class="iconbutton">
                    <i><a href="https://api.whatsapp.com/send?phone=601110870015&text=KelasFizikal"  target="_blank" class="fa-brands fa-whatsapp"></a></i>
                    </div>
                </li>
                <li>
                    <span class="btn-label">Online Class</span>
                    <div class="iconbutton">
                    <i><a href="https://api.whatsapp.com/send?phone=601110870015&text=OnlineClass"  target="_blank" class="fa-brands fa-whatsapp"></a></i>
                    </div>    
                </li>
                <li>
                    <span class="btn-label">FAQ</span>
                    <div class="iconbutton">
                    <i><a href="https://api.whatsapp.com/send?phone=601110870015&text=SayaNakTanya"  target="_blank" class="fa-brands fa-whatsapp"></a></i>
                    </div>
                </li>
              </ul>
            </div>
            <div class="fab-container" style="position:fixed; " id="fab2">
            <ul class="options">
              
                <li>
                    <!-- <i class="fab fa-facebook" onclick="showDiv()"></i> -->
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <lord-icon 
                        style="width:80px; height:80px; border-radius: 100%; background: #ffffff; box-shadow: 10px 10px 5px #aaaaaa;"
                        src="https://cdn.lordicon.com/zpxybbhl.json"
                        trigger="loop"
                        onclick="showDiv()">
                    </lord-icon>
                </li>
              </ul>
            </div>
  </main>

@include('footer')
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<style>
  #slider{
    padding-top: 100px;
  }
</style>
@endpush

@push('js')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#slider').slick({
      'autoplay' : true,
      'accessibility' : false,
      'autoplaySpeed' : 5000,
      'arrows' : false
    });
  });
</script>

<script type="text/javascript">

      function showDiv() {
        if(document.getElementById('fab1').style.display == "none"){
            document.getElementById('fab1').style.display = "block";
        }
        else{
           document.getElementById('fab1').style.display = "none";
        }

}
    
</script>

<!-- Gallery Lightbox JS -->
<script>

  const imageGrid = document.querySelector(".image-grid");
  const links = imageGrid.querySelectorAll("a");
  const imgs = imageGrid.querySelectorAll("img");
  const lightboxModal = document.getElementById("lightbox-modal");
  const bsModal = new bootstrap.Modal(lightboxModal);
  const modalBody = document.querySelector(".modal-body .container-fluid");

  for (const link of links) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const currentImg = link.querySelector("img");
      const lightboxCarousel = document.getElementById("lightboxCarousel");
      if (lightboxCarousel) {
        const parentCol = link.parentElement.parentElement;
        const index = [...parentCol.parentElement.children].indexOf(parentCol);
        const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
        bsCarousel.to(index);
      } else {
        createCarousel(currentImg);
      }
      bsModal.show();
    });
  }

  function createCarousel(img) {
    const markup = `
      <div id="lightboxCarousel" class="carousel" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner">
          ${createSlides(img)}
        </div> 
        <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      `;

    modalBody.innerHTML = markup;
  }

  function createSlides(img) {
    let markup = "";
    const currentImgSrc = img.getAttribute("src");

    for (const img of imgs) {
      const imgSrc = img.getAttribute("src");
      const imgAlt = img.getAttribute("alt");
      const imgCaption = img.getAttribute("data-caption");

      markup += `
      <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
        <img src=${imgSrc} alt=${imgAlt}>
      </div>
      `;
    }

    return markup;
  }

</script>

@endpush
