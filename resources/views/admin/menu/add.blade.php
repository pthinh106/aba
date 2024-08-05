{{--{{dd($blocks)}}--}}

@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
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
                <label for="name">SEO title</label>
                <input type="text" name="seo_title" class="form-control" placeholder="Nhập seo title">
            </div>
            <div class="form-group">
                <label for="menu">SEO Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="menu">Mô tả chi tiết</label>
                <textarea name="content" id="content" class="form-control"></textarea>
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
                <label>Hiển thị Menu</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="show_menu" name="show_menu" checked>
                    <label for="show_menu" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_show_menu" name="show_menu" >
                    <label for="no_show_menu" class="custom-control-label">Không</label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 col-12">
                    <label for="images">Ảnh đại diện</label>
                    <input type="file" name="images" class="form-control" placeholder="Ảnh đại diện">
                </div>
                <div class="col-md-4 col-12">
                    <label for="banner_pc">Banner PC</label>
                    <input type="file" name="banner_pc" class="form-control" placeholder="Ảnh banner PC">
                </div>
                <div class="col-md-4 col-12">
                    <label for="banner_mb">Banner Mobile</label>
                    <input type="file" name="banner_mb" class="form-control" placeholder="Ảnh banner Mobile">
                </div>
            </div>
            <div class="form-group ">
                <label for="ordering">Vị trí</label>
                <input type="text" name="ordering" class="form-control" value="0" placeholder="Vị trí xuất hiện menu">
            </div>
            <div class="form-group ">
                <label for="order_block">Hiện trang chủ( không hiện thì để số 0)</label>
                <input type="number" name="order_block" class="form-control" value="0" placeholder="Vị trí xuất hiện trong trang chủ">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
    </form>
@endsection
@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>

@endsection