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
    <br>
    <br>
    <div class="" style="width: 500px; margin: 0 auto ">
        <form action="createWord" method="post">
            @csrf
            <!--  //khi submit voi phuong thuc khac phuong thuc get thi can @csrf -->
            <div for="">Từ/Cụm từ</div>
            <input class="form-control" type="text" name="word">
            <div for="">Phiên âm</div>
            <input class="form-control" type="text" name="phienam">
            <div for="">Loại từ</div>
            <input class="form-control" type="text" name="loaitu">
            <div for="">Dịch nghĩa</div>
            <input class="form-control" type="text" name="nghia">
            <div for="">Ví dụ</div>
            <input class="form-control" type="text" name="vidu" >
            <br>
            <div>
            <button class="btn btn-warning" style="background-image: -webkit-linear-gradient(0deg, #ee390f 0%, #f9b700 100%); color:white;" type="submit">Thêm từ</button>
            </div>
        </form>
    </div>
    <br>
    <br>
@endsection
 