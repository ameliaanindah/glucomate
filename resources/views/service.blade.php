@extends('layout.main')
@section('content')
   <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
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


@endsection
