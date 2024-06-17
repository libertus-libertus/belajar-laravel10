@extends('components.app')
@section('title', 'Pricing Page')
@section('content')
  <!-- Jumbotron -->
  <div class="jumbotron" data-aos="fade-down" data-aos-duration="1000">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col-12">
          <h1>Pilih Paket Web Hosting Terbaik</h1>
          <p>Coba paket web hosting sekarang. Tidak puas? Ada jaminan 30 hari uang kembali.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Premium</h5>
              <p class="card-subtitle mb-2 text-body-secondary">Cocok untuk personal branding atau blog Anda</p>
            </div>
            <div class="card-body">
              <label><del>1.000.000</del></label> <span class="badge bg-success rounded-5">Diskon 77%</span> <br>
              <small style="font-size: 10px !important;">Rp.</small>
              <p class="d-inline display-1">24.999</p> <small style="font-size: 10px !important;">/ bln</small>
              <br>
              <span style="font-size: 14px !important;">+ Gratis 3 bulan</span>
            </div>
            <div class="card-body">
              <a href="#" class="card-link btn btn-success btn-sm"><i class="bi bi-cart-plus-fill"></i> Pilih
                Paket</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Business</h5>
              <p class="card-subtitle mb-2 text-body-secondary">Cocok untuk personal branding atau blog Anda</p>
            </div>
            <div class="card-body">
              <label><del>1.000.000</del></label> <span class="badge bg-warning rounded-5">Diskon 65%</span> <br>
              <small style="font-size: 10px !important;">Rp.</small>
              <p class="d-inline display-1">24.999</p> <small style="font-size: 10px !important;">/ bln</small>
              <br>
              <span style="font-size: 14px !important;">+ Gratis 3 bulan</span>
            </div>
            <div class="card-body">
              <a href="#" class="card-link btn btn-success btn-sm"><i class="bi bi-cart-plus-fill"></i> Pilih
                Paket</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Cloud Startup</h5>
              <p class="card-subtitle mb-2 text-body-secondary">Cocok untuk personal branding atau blog Anda</p>
            </div>
            <div class="card-body">
              <label><del>1.000.000</del></label> <span class="badge bg-danger rounded-5">Diskon 57%</span> <br>
              <small style="font-size: 10px !important;">Rp.</small>
              <p class="d-inline display-1">24.999</p> <small style="font-size: 10px !important;">/ bln</small>
              <br>
              <span style="font-size: 14px !important;">+ Gratis 3 bulan</span>
            </div>
            <div class="card-body">
              <a href="#" class="card-link btn btn-success btn-sm"><i class="bi bi-cart-plus-fill"></i> Pilih
                Paket</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Jumbotron -->

  <!-- FAQs -->
  <div class="faqs my-5 pb-5" data-aos="fade-down" data-aos-duration="1000">
    <div class="container">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Bagaimana cara mendapatkan premium cloud hsoting dari niagahoster?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin
              adds the appropriate classes that we use to style each element. These classes control the overall
              appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
              CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Berapa lama pengerjaan projectnya?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
              plugin adds the appropriate classes that we use to style each element. These classes control the overall
              appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
              CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Apa saja yang akan didapatkan?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
              adds the appropriate classes that we use to style each element. These classes control the overall
              appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
              CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End FAQs -->
@endsection
