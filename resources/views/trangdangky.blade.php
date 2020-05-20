@extends('layouts.master')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Kho Từ Của Tôi</h2>
                            <p>Trang Chủ<span>/</span>Chức Năng<span>/</span>Kho Từ Của Tôi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- Login part start -->
    <br>
    <br>
    <br>
    <div class="" style="width: 300px; margin: 0 auto;color: #0c2e60 ">
        <form action="single-blog/login" method="post">
            @csrf
            <div for="">Tài khoản</div>
            <input class="form-control" type="text" name="username">
            <div for="">Mật khẩu</div>
            <input class="form-control" type="text" name="password">
            <div for="">Họ tên</div>
            <input class="form-control" type="text" name="fullname">
            <br>
            <div>
                <button class="btn btn-warning" type="submit" style="background-image: -webkit-linear-gradient(0deg, #ee390f 0%, #f9b700 100%); color:white">Đăng ký</button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <!-- Login part end -->
@endsection