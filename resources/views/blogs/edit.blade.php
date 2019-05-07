@extends('home')

@section('title', 'Cập nhật Bài viết')


@section('content')

    <div class="row">

        <div class="col-md-12">

            <h2>Cập nhật Bài viết</h2>

        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label>Tên Bài viết</label>

                    <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>

                </div>

                <div class="form-group">

                    <label>Nội dung</label>

                    <textarea class="form-control" rows="3" name="content" required>{{ $blog->content }}</textarea>

                </div>

                <div class="form-group">

                    <label>Ảnh</label>

                    <input type="file" name="image" class="form-control-file">

                </div>

                <div class="form-group">

                    <label>Ngày viết</label>

                    <input type="date" name="date" class="form-control" value="{{ $blog->date }}" required>

                </div>

                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>

                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

            </form>

        </div>

    </div>


@endsection