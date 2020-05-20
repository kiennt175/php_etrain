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
    @if(!Session::get('username')) 
    <br>
    <br>
    <br>
    <div class="" style="width: 300px; margin: 0 auto; color: #0c2e60">
        <form action="login" method="post">
            @csrf
            <div for="">Tài khoản</div>
            <input class="form-control" type="text" name="username">
            <div for="">Mật khẩu</div>
            <input class="form-control" type="password" name="password">
            <br>
            <div>
                <button class="btn btn-warning" type="submit" style="background-image: -webkit-linear-gradient(0deg, #ee390f 0%, #f9b700 100%); color:white">Đăng nhập</button>
            </div>
            <div style="margin-top:10px">
                <button class="btn btn-warning" style="background-image: -webkit-linear-gradient(0deg, #ee390f 0%, #f9b700 100%)"><a href='trangdangky' style="color:white">Đăng ký</a></button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    @endif
    <br>

    <div style="margin-left: 70px; margin-right:70px">
        @if (Session::get('username'))
            <div style="color: #0c2e60; margin-left:20px">
            <br>
            <h3>Hello {{Session::get('username')}}. Good to see you!</h3>
            <a href="logout" style="color:#ff663b">Đăng xuất</a>
            <br>
            <br>
            </div>

            <nav class="navbar navbar-light bg-light">
                <button type="button" class="btn btn-primary"><a href="addWord" style="color:white">Thêm từ</a></button>
                <form class="form-inline" action="searchWord" method="get" style="margin-right:0">
                    <input class="form-control mr-sm-2" placeholder="Nhập từ" aria-label="Search" type="text" name="word">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </nav>

            <table class="table tbl-1">
                <thead class="thead-dark">
                    <tr>
                        <!-- <th scope="col">ID</th> -->
                        <th scope="col" >Từ</th>
                        <th scope="col" >Phiên âm</th>
                        <th scope="col" >Loại từ</th>
                        <th scope="col" >Nghĩa</th>
                        <th scope="col" >Ví dụ</th>
                        <th scope="col" width="16%" >Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($search)
                        @foreach($search as $r =>$word)
                            <tr>
                                <!-- <td>{{ $word->id }}</td> -->
                                <td>{{ $word->word }}</td>
                                <td>{{ $word->phienam }}</td>
                                <td>{{ $word->loaitu }}</td>
                                <td>{{ $word->nghia }}</td>
                                <td>{{ $word->vidu }}</td>
                                <td>
                                    <button class="btn btn-success" type="button"><a href="editWord/{{$word->id}}" style="color:white">Sửa</a></button>
                                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModal{{$r}}" >Xoá</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$r}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:100px">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">XÁC NHẬN XOÁ</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có thực sự muốn xoá bản ghi này?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Huỷ</button>
                                                <button type="button" class="btn btn-danger"><a href="deleteWord/{{$word->id}}" style="color:white">Xoá</a></button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    @endif
                </tbody>
            </table> 
            


            
        @endif
    </div>
    <br>
    <!-- Login part end -->
@endsection