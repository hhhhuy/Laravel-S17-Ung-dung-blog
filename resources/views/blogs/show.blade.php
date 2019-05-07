@extends('home')
@section('content')
    <div class="text-center">
        <h3 class="text-dark mt-5">Thông Tin Bài viết</h3>
        <div class="col-sm-4 offset-4" style="max-width: 100%; margin-left: 0">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Tên: {{$blogs->title}}</h5>
                    <h6 class="card-text ">Nội dung: {{$blogs->content}}</h6>
                    <p class="card-text">Ảnh:<br> <img src="{{ asset('storage/' . $blogs->image) }}" alt="" style="width: 300px">
                    </p>
                    <p class="card-text">Ngày viết: {{$blogs->date}}</p>
                </div>
            </div>
        </div>
        <a href="{{route('blogs.index')}}" class="btn btn-success mt-3">Quay Lại</a>
    </div>
@endsection