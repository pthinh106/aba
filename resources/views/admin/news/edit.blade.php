@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên bài viết</label>
                <input type="text" name="name" value="{{ $new->name }}" class="form-control" placeholder="Nhập tên bài viết">
            </div>
            <div class="form-group">
                <label for="menu">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{$new->slug}}">
            </div>
            <div class="form-group">
                <label for="parent_id">Danh mục cha</label>
                    <select class="form-control" name="parent_id">
                    <option value="0">Chọn danh mục</option>
                    @foreach($menu as $val)
                        <option value="{{$val['id']}}">{{$val['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="menu">Mô tả</label>
                <textarea name="description" class="form-control">{{ $new->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">Mô tả chi tiết</label>
                <textarea name="content" id="content" class="form-control">{{ $new->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">Ảnh đại diện</label>
                <input type="file" name="file" class="form-control">
                <img src="/{{$new->thumb}}" style="width: 150px; height: auto">
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>
            <div class="form-group">
                <label>Hiển thị trang chủ</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="show_menu" name="show_menu" checked>
                    <label for="show_menu" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_show_menu" name="show_menu" >
                    <label for="no_show_menu" class="custom-control-label">Không</label>
                </div>
            </div>
            <div class="form-group">
                <label for="name">SEO title</label>
                <input type="text" name="seo_title" value="{{ $new->seo_title }}" class="form-control" placeholder="Nhập tên">
            </div>
            <div class="form-group">
                <label for="menu">SEO Description</label>
                <textarea name="seo_description" class="form-control">{{ $new->seo_description }}</textarea>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">cập nhật</button>
        </div>
        @csrf
    </form>
@endsection
@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>

@endsection