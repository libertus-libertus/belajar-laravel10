@extends('components.app')
@section('title', 'eFarmer_ | Platform penyedia jasa pembuatan website')
@section('content')
<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="3000">
        <div class="row">
            <div class="col-12">
                <h1>Kami Menerima Jasa Pembuatan Website</h1>
                <p>Jenis Layanan Pembuatan Website dari Penyedia Jasa Pembuatan Website</p>

                <a type="submit" href="https://wa.me/6281346111649?text=Halo sobat e-FarmerTim_ apakah saya boleh melakukan konsultasi?`" class="btn btn-dark" target="_blank">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>
<!-- End Jumbotron -->

<!-- Getstarted -->
<div class="get-started my-5" data-aos="fade-down" data-aos-duration="1000">
    <div class="container">
        <h4>Pendahuluan</h4>
        <p>Di era digital yang terus berkembang pesat, memiliki website yang profesional dan menjadi langkah penting untuk kesuksesan bisnis. Artikel ini akan membahas secara mendalam mengenai jasa pembuatan website e-commerce, company profile, dan portal berita. Serta pentingnya memiliki website hingga bagaimana memilih penyedia jasa yang tepat untuk memenuhi kebutuhan bisnis Anda. Temukan cara terbaik untuk membuat website yang bisa mengangkat bisnis Anda ke tingkat selanjutnya.</p>

        <button type="submit" class="btn btn-dark">Get Started</button>
    </div>
</div>
<!-- End Getstarted -->

<!-- Tentang Kami -->
<div class="tentang-kami my-5">
    <div class="container">
        <div class="row">
            <div class="col-6"  data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
                <img src="{{ asset('assets/img/img11.png') }}" class="w-100" alt="Tentang Kami">
            </div>
            <div class="col-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="header-tentang-kami">
                    <h4>Tentang Kami</h4>
                </div>
                <div class="descripsi-tentang-kami">
                    <p>Kami adalah platform yang menyediakan jasa pembuatan website yang responsive dan menarik untuk bisnis Anda. Silahkan hubungi kami dengan klik tombol dibawah ini.</p>
                    <button type="submit" class="btn btn-dark">Contact Kami</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Tentang Kami -->

<!-- Services -->
<div class="services my-5">
    <div class="container">
        <div class="row mb-2">
            <div class="col">
                <h4>Our Services</h4>
            </div>
        </div>
        <div class="row mb-3" data-aos="fade-right" data-aos-duration="1000">
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <!-- icons -->
                        <div class="icons-services">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="deskripsi-services">
                            <p>Body text for whatever you’d like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <!-- icons -->
                        <div class="icons-services">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="deskripsi-services">
                            <p>Body text for whatever you’d like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-left" data-aos-duration="1000">
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <!-- icons -->
                        <div class="icons-services">
                            <i class="bi bi-lock"></i>
                        </div>
                        <div class="deskripsi-services">
                            <p>Body text for whatever you’d like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <!-- icons -->
                        <div class="icons-services">
                            <i class="bi bi-calendar"></i>
                        </div>
                        <div class="deskripsi-services">
                            <p>Body text for whatever you’d like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->

<!-- Portofolio -->
<div class="portfolio my-5">
    <div class="container">
        <div class="row text-center mb-4">
            <h4>Our Portfolio</h4>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-4 mb-4" data-aos="zoom-in" data-aos-duration="1000">
                <div class="portfolio-img">
                    <img src="{{ asset('assets/img/img1.png') }}" class="w-100 rounded">
                </div>
            </div>
            <div class="col-4 mb-4" data-aos="zoom-in" data-aos-duration="1100">
                <div class="portfolio-img">
                    <img src="{{ asset('assets/img/img2.png') }}" class="w-100 rounded">
                </div>
            </div>
            <div class="col-4 mb-4" data-aos="zoom-in" data-aos-duration="1200">
                <div class="portfolio-img">
                    <img src="{{ asset('assets/img/img3.png') }}" class="w-100 rounded">
                </div>
            </div>
            <div class="col-4 mb-4" data-aos="zoom-in" data-aos-duration="1300">
                <div class="portfolio-img">
                    <img src="{{ asset('assets/img/img4.png') }}" class="w-100 rounded">
                </div>
            </div>
            <div class="col-4 mb-4" data-aos="zoom-in" data-aos-duration="1400">
                <div class="portfolio-img">
                    <img src="{{ asset('assets/img/img5.png') }}" class="w-100 rounded">
                </div>
            </div>
            <div class="col-4 mb-4" data-aos="zoom-in" data-aos-duration="1500">
                <div class="portfolio-img">
                    <img src="{{ asset('assets/img/img6.png') }}" class="w-100 rounded">
                </div>
            </div>
            <div class="col-4 mb-4" data-aos="zoom-in" data-aos-duration="1600">
                <div class="portfolio-img">
                    <img src="{{ asset('assets/img/img7.png') }}" class="w-100 rounded">
                </div>
            </div>
            <div class="col-4 mb-4" data-aos="zoom-in" data-aos-duration="1700">
                <div class="portfolio-img">
                    <img src="{{ asset('assets/img/img8.png') }}" class="w-100 rounded">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Portofolio -->

<!-- Newsletter -->
<div class="newsletter bg-light" data-aos="fade-up" data-aos-duration="1000">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h4>News Letter</h4>
                <p>Plus a subheading for your site’s footer</p>

                <button type="submit" class="btn btn-dark">Newsletter</button>
            </div>
        </div>
    </div>
</div>
<!-- End Jumbotron -->
@endsection
