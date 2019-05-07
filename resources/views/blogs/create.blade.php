@extends('home')

@section('title', 'Thêm mới blog')


@section('content')

    <div class="row">

        <div class="col-md-12">

            <h2>Thêm mới blog</h2>

        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label>Tên blog</label>

                    <input type="text" class="form-control" name="title" required>

                </div>

                <div class="form-group">

                    <label>Nội dung</label>

                    <textarea class="form-control" rows="3" name="content" required></textarea>

                </div>

                <div class="form-group">

                    <label for="exampleFormControlFile1">Ảnh</label>

                    <input type="file" name="image" class="form-control" required>

                </div>

                <div class="form-group">

                    <label for="exampleFormControlFile1">Ngày viết</label>

                    <input type="date" name="date" class="form-control" required>

                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

            </form>

        </div>

    </div>


@endsection