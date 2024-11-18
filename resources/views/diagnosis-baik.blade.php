@extends('layout.main')
@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/blood-happy.svg') }}" alt="Blood Cartoon Happy" class="img-fluid" style="max-width: 400px; height: auto;">
            </div>
            <div class="col-md-6">
                <h1 class="display-4 text-success">Anda Tidak Terindikasi Diabetes!</h1>
                <p class="lead">Selamat! Berdasarkan informasi yang Anda berikan, Anda tidak termasuk penderita diabetes.</p>
                <div class="mt-4">
                    <a href="/" class="btn btn-primary">Kembali ke Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
