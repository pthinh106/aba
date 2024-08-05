@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên block</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nhập tên danh mục">
            </div>
            <div class="form-group">
                <label for="name">Link</label>
                <input type="text" name="link_redirect" value="{{ old('link_redirect') }}"  class="form-control" placeholder="Nhập link khi click vào">
            </div>
            <div class="form-group">
                <label for="parent_id">Danh mục</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Chọn danh mục</option>
                    @foreach($menu as $val)
                        <option value="{{$val['id']}}" {{ old('parent_id')==$val['id'] ? 'selected' : '' }}>{{$val['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="parent_id">Thể loại</label>
                <select class="form-control" name="addon_block">
                    <option value="0">Chọn thể loại</option>
                    @foreach($addon_blocks as $val)
                        <option value="{{$val['id']}}"{{ old('addon_block')==$val['id'] ? 'selected' : '' }}>{{$val['title']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="menu">Mô tả</label>
                <textarea name="content" class="form-control">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="menu">VỊ trí</label>
                <input type="number" name="stt" class="form-control" value="1">
            </div>
            <div class="form-group">
                <label for="menu">Ảnh đại diện</label>
                <input type="file" name="file" class="form-control">
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
            <hr  width="100%" size="10px" align="center" color="red" />
            <div class="form-group">
                <label for="menu">Tạo nội dung</label>
                <div class="content-show-addon">
                    <button type="button" class="btn btn-info" onclick="addNewAddon(1)">Câu hỏi</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(2)">Chương trình định cư</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(3)">Vì sao</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(4)">Quyền lợi</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(5)">Video</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(6)">Chia sẽ của khách hàng</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(7)">Qui trình</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(13)">Giới thiệu đất nước</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(14)">Quyền lợi (Menu cấp 2,3)</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(15)">Ưu điểm, nhược điểm</button>
                    <button type="button" class="btn btn-info" onclick="addNewAddon(16)">Điều kiện</button>
                </div>
                <div id="data-content-addon">

                </div>

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
    {{--<script>--}}
        {{--CKEDITOR.replace('content');--}}
    {{--</script>--}}

@endsection