@extends('courses.layouts.main')

@section('content')
    <h1 class="text-center">{{ $header }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-flex justify-content-center mt-5" style="margin-bottom: -16px;">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="my-5 col-sm-6 text-white">
            <h1 class="mb-5">Jalan Lurus Jadi <span class="text-warning">Web Developer</span></h1>
            <h5 class="mb-5">Kelas online belajar Web Developer from A to Z. Cocok buat yang pengen punya karir bagus, skill dibutuhin industri, gaji tinggi dan bisa bikin web atau aplikasi buat ngembangin bisnis online sendiri.</h5>
            <h5 class="mb-5">Aman buat pemula walaupun belum ngerti coding dan nggak punya background IT. Diajarin dari 0 banget!</h5>
            @auth
                <div class="d-flex">
                    @if (auth()->user()->username == 'admin')
                        <a href="/dashboard" class="btn btn-warning me-2">Dashboard</a>
                    @endif
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger fw-semibold">
                            Logout ({{ auth()->user()->name }})
                        </button>
                    </form>
                </div>
            @else
                <a href="/login" class="btn btn-warning me-1">Login</a>
                <a href="/register" class="btn btn-danger">Register</a>
            @endauth
        </div>

        <div class="my-5 col-sm-6 text-center">
            <img src="/img/Logo-UTI.png" alt="" width="400" class="img-fluid">
        </div>
    </div>
@endsection