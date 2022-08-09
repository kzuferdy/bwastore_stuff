
@extends('layouts.success')

@section('title')
  Store Success Page
@endsection

@section('content')
<div class="page-content page-success">
      <div class="section-success" data-aos="zomm-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/images/success.svg" alt="" class="mb-4">
              <h2>Welcome to Store</h2>
              <p>
                Kamu sudah berhasil terdaftar <br>
                bersama kami, Let's grow up now
              </p>
              <div>
                <a href="/dashboard.html" class="btn btn-success w-50 mt-4">Welcome to Store</a>
              </div>
              <div>
                <a href="/index.html" class="btn btn-signup w-50 mt-2">Go to Shopping</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection