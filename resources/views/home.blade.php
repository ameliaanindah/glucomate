@extends('layout.main')
@section('content')
<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
 <div class="modal-dialog modal-fullscreen">
     <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
         <div class="modal-header border-0">
             <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body d-flex align-items-center justify-content-center">
             <div class="input-group" style="max-width: 600px;">
                 <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                 <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- Full Screen Search End -->


<!-- Carousel Start -->
<div class="container-fluid p-0">
 <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
     <div class="carousel-inner">
         <div class="carousel-item active">
             <img class="w-100" src="img/carousel-1.jpg" alt="Image">
             <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                 <div class="p-3" style="max-width: 900px;">
                     <h5 class="text-white text-uppercase mb-3 animated slideInDown">Diabetes Friendly</h5>
                     <h1 class="display-1 text-white mb-md-3 animated zoomIn">Your Healthy is Our Priority</h1>
                 </div>
             </div>
         </div>
         <div class="carousel-item">
             <img class="w-100" src="img/carousel-2.jpg" alt="Image">
             <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                 <div class="p-3" style="max-width: 900px;">
                     <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Healthy</h5>
                     <h1 class="display-1 text-white mb-md-3 animated zoomIn">Take The Best Quality Diabetes Treatment</h1>
                 </div>
             </div>
         </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
         data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
     </button>
 </div>
</div>
<!-- Carousel End -->


<!-- Banner Start -->
<div class="container-fluid banner mb-5">
 <div class="container">
     <div class="row gx-0">
         <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
             <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                 <h3 class="text-white mb-3">Opening Hours</h3>
                 <div class="d-flex justify-content-between text-white mb-3">
                     <h6 class="text-white mb-0">Mon - Fri</h6>
                     <p class="mb-0"> 8:00am - 9:00pm</p>
                 </div>
                 <div class="d-flex justify-content-between text-white mb-3">
                     <h6 class="text-white mb-0">Saturday</h6>
                     <p class="mb-0"> 8:00am - 7:00pm</p>
                 </div>
                 <div class="d-flex justify-content-between text-white mb-3">
                     <h6 class="text-white mb-0">Sunday</h6>
                     <p class="mb-0"> 8:00am - 5:00pm</p>
                 </div>
                 <a class="btn btn-light" href="service">Appointment</a>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- Banner Start -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                    <h1 class="display-5 mb-0">Don't let diabetes control your life!</h1>
                </div>
                <h4 class="text-body fst-italic mb-4">Find the solutions and support you need on our diabetes healthcare service website</h4>
                <p class="mb-4">Tidak perlu biarkan diabetes mengendalikan hidupmu. Kunjungi website layanan kesehatan diabetes kami untuk solusi dan dukungan yang kamu butuhkan. Temukan panduan, tips, dan komunitas yang siap membantu menjalani hidup yang lebih sehat dengan diabetes. Bersama, kita bisa menghadapi diabetes dan meraih kualitas hidup yang lebih baik</p>

                <h1 class="display-5 mb-0">VISI</h1>
                <p class="mb-4">Menjadi sumber informasi terpercaya dan penyedia layanan terkemuka dalam perawatan dan manajemen diabetes untuk membantu individu mencapai gaya hidup yang lebih sehat dan bahagia.</p>

                <h1 class="display-5 mb-0">MISI</h1>
                <ul class="mission-list">
                    <li><i class="fa fa-check-circle text-primary me-3"></i>Memberikan informasi terpercaya, dukungan, dan alat praktis untuk membantu individu dengan diabetes mengelola kondisi mereka dengan lebih baik</li>
                    <li><i class="fa fa-check-circle text-primary me-3"></i>Bekerja sama dengan organisasi kesehatan, profesional medis, dan ahli diabetes untuk memberikan informasi dan layanan yang berkualitas.</li>
                    <li><i class="fa fa-check-circle text-primary me-3"></i>Mempromosikan kesadaran dan pemahaman tentang diabetes</li>
                    <li><i class="fa fa-check-circle text-primary me-3"></i>Memfasilitasi kolaborasi dengan profesional kesehatan guna meningkatkan kualitas hidup mereka.</li>
                </ul>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about1.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- About Start -->
{{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                    <h1 class="display-5 mb-0">Don't let diabetes control your life!</h1>
                </div>
                <h4 class="text-body fst-italic mb-4">Find the solutions and support you need on our diabetes healthcare service website</h4>
                <p class="mb-4">Tidak perlu biarkan diabetes mengendalikan hidupmu. Kunjungi website layanan kesehatan diabetes kami untuk solusi dan dukungan yang kamu butuhkan. Temukan panduan, tips, dan komunitas yang siap membantu menjalani hidup yang lebih sehat dengan diabetes. Bersama, kita bisa menghadapi diabetes dan meraih kualitas hidup yang lebih baik</p>

                <h1 class="display-5 mb-0">VISI</h1>
                <p class="mb-4">Menjadi sumber informasi terpercaya dan penyedia layanan terkemuka dalam perawatan dan manajemen diabetes untuk membantu individu mencapai gaya hidup yang lebih sehat dan bahagia.</p>

                <h1 class="display-5 mb-0">MISI</h1>
                <div class="row g-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Memberikan informasi terpercaya, dukungan, dan alat praktis untuk membantu individu dengan diabetes mengelola kondisi mereka dengan lebih baik</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Bekerja sama dengan organisasi kesehatan, profesional medis, dan ahli diabetes untuk memberikan informasi dan layanan yang berkualitas.</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Mempromosikan kesadaran dan pemahaman tentang diabetes</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Memfasilitasi kolaborasi dengan profesional kesehatan guna meningkatkan kualitas hidup mereka.</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about1.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- About End -->



<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-10">
                <div class="section-title mb-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                    <h1 class="display-5 mb-0">We Offer High-Quality Health Services for Diabetes</h1>
                </div>

                <!-- Service Items -->
                <div class="row g-4">
                    <!-- Service 1: Diabetes Diagnosis -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="img/service1.png" alt="Diabetes Diagnosis">
                            </div>
                            <div class="service-text">
                                <h4>Diagnosis Diabetes</h4>
                                <a href="/diagnosis" class="btn btn-primary mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: Doctor Consultation -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="img/service2.png" alt="Doctor Consultation">
                            </div>
                            <div class="service-text">
                                <h4>Konsultasi Dokter</h4>
                                <a href="/service" class="btn btn-primary mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: Wound Care -->
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="img/service3.png" alt="Wound Care">
                            </div>
                            <div class="service-text">
                                <h4>Perawatan Luka Diabetes</h4>
                                <a href="/service" class="btn btn-primary mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Service Items -->

            </div>
        </div>
    </div>
</div>
<!-- Service End -->



 <!-- Artikel Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="row g-5">
             <div class="col-lg-5">
                 <div class="section-title mb-4">
                     <h5 class="position-relative d-inline-block text-primary text-uppercase">Artikel</h5>
                     <h1 class="display-5 mb-0">Tingkatkan Pemahaman Anda tentang Diabetes dengan Membaca Artikel Kami</h1>
                 </div>
                 <p class="mb-4">Pilih salah satu artikel dengan klik "Baca Selengkapnya" Coba sekarang juga! Dapatkan fakta menarik lainnya</p>

             </div>
             <div class="col-lg-7">
                 <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                     <div class="price-item pb-4">
                         <div class="position-relative">
                             <img class="img-fluid rounded-top" src="img/pricing-1.jpg" alt="">
                             <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                             </div>
                         </div>
                         <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                             <h4>Pahami Diabetes: Pengertian, Tipe, dan Gejalanya</h4>
                             <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                         </div>
                     </div>
                     <div class="price-item pb-4">
                         <div class="position-relative">
                             <img class="img-fluid rounded-top" src="img/pricing-2.jpg" alt="">
                             <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                             </div>
                         </div>
                         <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                             <h4>Mengenal Komplikasi Diabetes: Pencegahan dan Pengobatan</h4>
                             <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                         </div>
                     </div>
                     <div class="price-item pb-4">
                         <div class="position-relative">
                             <img class="img-fluid rounded-top" src="img/pricing-3.jpg" alt="">
                             <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                             </div>
                         </div>
                         <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                             <h4>Pengelolaan Diabetes: Tips Menjaga Gula Darah Tetap Stabil</h4>
                             <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Artikel End -->



 <!-- Team End -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="section-title text-center">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctors</h5>
            <h1 class="display-6 mb-5">Meet Our Certified & Experienced Doctors</h1>
        </div>

        <!-- Grid of Doctors -->
        <div class="row">
            <!-- Doctor 1 -->
            <div class="col-md-3 mb-4">
                <div class="team-item-custom text-center position-relative">
                    <img src="img/team-1.jpg" class="team-img-custom" alt="Doctor 1">
                    <a href="#appointment" class="btn-appointment">Buat Janji</a>
                    <div class="team-text-custom">
                        <h4>Prof. Dr. dr. Ketut Suastika, Sp.PD-KEMD, FINASIM</h4>
                        <p class="text-primary mb-0">Ahli endokrinologi dalam mengelola diabetes.</p>
                    </div>
                </div>
            </div>


            <!-- Repeat similar structure for other doctors -->
            <!-- Doctor 2 -->
            <div class="col-md-3 mb-4">
                <div class="team-item-custom text-center position-relative">
                    <img src="img/team-5.jpg" class="team-img-custom" alt="Doctor 2">
                    <a href="#appointment" class="btn-appointment">Buat Janji</a>
                    <div class="team-text-custom">
                        <h4>Prof. Dr. dr. Soewondo, Sp.PD-KEMD, Econs.Med</h4>
                        <p class="text-primary mb-0">Pakar di bidang diabetes dan ekonomi kesehatan.</p>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-md-3 mb-4">
                <div class="team-item-custom text-center position-relative">
                    <img src="img/team-3.jpg" class="team-img-custom" alt="Doctor 3">
                    <a href="#appointment" class="btn-appointment">Buat Janji</a>
                    <div class="team-text-custom">
                        <h4>Prof. dr. Imam Subekti, Sp.PD-KEMD</h4>
                        <p class="text-primary mb-0">Ahli endokrinologi dalam mengelola diabetes.</p>
                    </div>
                </div>
            </div>

            <!-- Doctor 4 -->
            <div class="col-md-3 mb-4">
                <div class="team-item-custom text-center position-relative">
                    <img src="img/team-2.jpg" class="team-img-custom" alt="Doctor 4">
                    <a href="#appointment" class="btn-appointment">Buat Janji</a>
                    <div class="team-text-custom">
                        <h4>Dr. dr. Wuryaningsih, Sp.PD-KEMD</h4>
                        <p class="text-primary mb-0">Dokter spesialis diabetes dan gangguan hormonal.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- Team End --}}

 <!-- Offer Start -->
 <div class="container-fluid bg-offer my-2 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->

{{-- Nurse Start --}}
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title text-center">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Nurses</h5>
            <h1 class="display-6 mb-5">Meet Our Certified & Experienced Nurses</h1>
        </div>

        <!-- Grid of Nurses -->
        <div class="row">
          <!-- Nurse 1 -->
<div class="col-md-3 mb-4">
    <div class="team-item-custom text-center">
        <img src="img/nurse-1.jpg" class="team-img-custom" alt="Nurse 1">
        <a href="#appointment" class="btn-appointment">Pesan Layanan</a>

        <!-- Garis Merah -->
        <hr class="blue-line">

        <div class="team-text-custom">
            <h4>Dian Novianti, S.Kep.</h4>
        </div>
    </div>
</div>

            <!-- Nurse 2 -->
            <div class="col-md-3 mb-4">
                <div class="team-item-custom text-center">
                    <img src="img/nurse-5.jpg" class="team-img-custom" alt="Nurse 2">
                    <a href="#appointment" class="btn-appointment">Pesan Layanan</a>

                    <hr class="blue-line">
                    <div class="team-text-custom">
                        <h4>Cynthia Angelica, S.Kep</h4>
                    </div>
                </div>
            </div>

            <!-- Nurse 3 -->
            <div class="col-md-3 mb-4">
                <div class="team-item-custom text-center">
                    <img src="img/nurse-3.jpg" class="team-img-custom" alt="Nurse 3">
                    <a href="#appointment" class="btn-appointment">Pesan Layanan</a>

                    <hr class="blue-line">
                    <div class="team-text-custom">
                        <h4>Micko Santoso, S.Kep</h4>

                    </div>
                </div>
            </div>

            <!-- Nurse 4 -->
            <div class="col-md-3 mb-4">
                <div class="team-item-custom text-center">
                    <img src="img/nurse-4.jpg" class="team-img-custom" alt="Nurse 4">
                    <a href="#appointment" class="btn-appointment">Pesan Layanan</a>

                    <hr class="blue-line">
                    <div class="team-text-custom">
                        <h4>Ghyta Maheswari, S.Kep</h4>

                    </div>
                </div>
            </div>

                     </div>
        </div>
    </div>
</div>
 <!-- Nurse End -->



     <!-- Testimonial Start -->
     <div class="container-fluid bg-primary bg-testimonial py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
         <div class="container py-5">
             <div class="row justify-content-center">
                 <div class="col-lg-7">
                     <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                         <div class="testimonial-item text-center text-white">
                             <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                             <p class="fs-5">Saya telah menggunakan layanan kesehatan diabetes ini selama beberapa bulan sekarang dan saya sangat terkesan.</p>
                             <hr class="mx-auto w-25">
                             <h4 class="text-white mb-0">Mirna Salihin</h4>
                         </div>
                         <div class="testimonial-item text-center text-white">
                             <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                             <p class="fs-5">Website ini adalah sumber informasi yang sangat baik tentang diabetes. Saya baru saja didiagnosis dengan diabetes tipe 2, dan website ini telah membantu saya memahami kondisi saya dengan lebih baik.</p>
                             <hr class="mx-auto w-25">
                             <h4 class="text-white mb-0">Jessica Mirna</h4>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Testimonial End -->


     <!-- Contact Start -->
     <div class="container-fluid py-5">
         <div class="container">
             <div class="row g-5">
                 <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                     <div class="bg-light rounded h-100 p-5">
                         <div class="section-title">
                             <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                             <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                         </div>
                         <div class="d-flex align-items-center mb-2">
                             <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                             <div class="text-start">
                                 <h5 class="mb-0">Our Office</h5>
                                 <span>Jl. Dharmahusada Permai, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115, Indonesia</span>
                             </div>
                         </div>
                         <div class="d-flex align-items-center mb-2">
                             <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                             <div class="text-start">
                                 <h5 class="mb-0">Email Us</h5>
                                 <span>glucosync@gmail.com</span>
                             </div>
                         </div>
                         <div class="d-flex align-items-center">
                             <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                             <div class="text-start">
                                 <h5 class="mb-0">Call Us</h5>
                                 <span>+62 (021) 789816</span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                     <form>
                         <div class="row g-3">
                             <div class="col-12">
                                 <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                             </div>
                             <div class="col-12">
                                 <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                             </div>
                             <div class="col-12">
                                 <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                             </div>
                             <div class="col-12">
                                 <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Message"></textarea>
                             </div>
                             <div class="col-12">
                                 <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                             </div>
                         </div>
                     </form>
                 </div>
                 <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                     <iframe class="position-relative rounded w-100 h-100"
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                         frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                         tabindex="0"></iframe>
                 </div>
             </div>
         </div>
     </div>
     <!-- Contact End -->

@endsection
