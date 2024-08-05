@extends('admin.main')
@section('content')
    <form action="/admin/config-data" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên công ty</label>
                <input type="text" name="company" value="{{$setting_data->company}}" class="form-control" placeholder="Nhập tên công ty">
            </div>
            <div class="form-group">
                <label for="name">Link favicon</label>
                <input type="text" name="favicon" value="{{$setting_data->favicon}}" class="form-control" placeholder="Nhập link favicon">
            </div>
            <div class="form-group">
                <label for="name">Link canonical</label>
                <input type="text" name="canonical" value="{{$setting_data->canonical}}" class="form-control" placeholder="Nhập link canonical">
            </div>
            <div class="form-group">
                <label for="name">Link facebook</label>
                <input type="text" name="link_facebook" value="{{$setting_data->link_facebook}}" class="form-control" placeholder="Nhập link facebook">
            </div>
            <div class="form-group">
                <label for="name">Link youtube</label>
                <input type="text" name="link_youtube" value="{{$setting_data->link_youtube}}" class="form-control" placeholder="Nhập link youtube">
            </div>
            <div class="form-group">
                <label for="name">Link zalo</label>
                <input type="text" name="link_zalo" value="{{$setting_data->link_zalo}}" class="form-control" placeholder="Nhập link zalo">
            </div>

            <div class="form-group">
                <label for="menu">Mô tả</label>
                <textarea name="description" class="form-control">{{$setting_data->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">author</label>
                <textarea name="author" class="form-control">{{$setting_data->author}}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">copyright</label>
                <textarea name="copyright" class="form-control">{{$setting_data->copyright}}</textarea>
            </div>
            <div class="form-group">
                <label for="name">og_url</label>
                <input type="text" name="og_url" value="{{$setting_data->og_url}}" class="form-control" placeholder="Nhập og_url">
            </div>
            <div class="form-group">
                <label for="name">og_title</label>
                <input type="text" name="og_title" value="{{$setting_data->og_title}}" class="form-control" placeholder="Nhập og_url">
            </div>

            <div class="form-group">
                <label for="menu">og_description</label>
                <textarea name="og_description" class="form-control">{{$setting_data->og_description}}</textarea>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
        @csrf
    </form>
@endsection