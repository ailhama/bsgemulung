@extends('layouts.app')

@section('content')

<div class="col-md-8 col-xl-6 text-center mx-auto mt-5">
    <div class="pagetitle">
        <h3>Our Location</h3>
    </div>
</div>

<div class="container">
    <div class="card mb-5" style="height: 400px; width: 1090px; margin: 0 auto;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.860988565207!2d110.20098536023431!3d-7.480598642500152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f64777c918b%3A0xd4c97c30d77a4fab!2sGemulung%2C%20Banyuwangi%2C%20Kec.%20Bandongan%2C%20Kabupaten%20Magelang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1705392701994!5m2!1sid!2sid" width="100%" height="100%" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<section id="section" class="section">
    <div class="container">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <div class="pagetitle" data-aos="fade-up">
                <h3 class="">Our Great Team</h3>
            </div>
        </div>

        <div class="row" data-aos="fade-left">

            <div class="col-lg-4 col-md-6 text-center mx-auto">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic">
                        <img src="{{ asset('assets/img/dafi.jpg') }}" class="img-fluid" alt="" style="height: 300px; width: 70%; object-fit: cover; border-radius: 5px;">
                    </div>
                    <div class="pagetitle">
                        <h1>Dafi Kurniawan <br> Yusuf</h1>
                        <span>UI/UX Designer</span>
                        <div class="social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 text-center mx-auto">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic">
                        <img src="{{ asset('assets/img/andika.jpg') }}" class="img-fluid" alt="" style="height: 300px; width: 70%; object-fit: cover; border-radius: 5px;">
                    </div>
                    <div class="pagetitle">
                        <h1>Andika Setya Kurniwan</h1>
                        <span>Database Admin</span>
                        <div class="social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 text-center mx-auto">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic">
                        <img src="{{ asset('assets/img/ilham.jpg') }}" class="img-fluid" alt="" style="height: 300px; width: 70%; object-fit: cover; border-radius: 5px;">
                    </div>
                    <div class="pagetitle">
                        <h1>Audi Ilham <br> Atmaja</h1>
                        <span>Software Engineer</span>
                        <div class="social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="col-md-8 mt-5 col-xl-6 text-center mx-auto">
    </div>
</section>

@endsection
