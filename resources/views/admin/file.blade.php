@extends('admin.main')
@section('content')
    <style>
        .img-upload{
            width: 100%;
        }
        .file-content {
            padding: 20px;
            border: 2px solid #ccc;
        }
        .content-up {
            padding-top: 20px;
        }
    </style>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class=" col-12">
                <label for="name">Tên</label>
                <input type="text" name="name" class="form-control" placeholder="Tên file file">
            </div>
            <div class="col-md-4 col-12">
                <label for="banner_pc">Upload file</label>
                <input type="file" name="file" class="form-control" placeholder="Chọn file">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
        @csrf
    </form>
    <div class="row">
        @if($setting_data)
            @foreach($setting_data as $key=>$val)
                <div class="col-md-4 col-12 ">
                    <div class="file-content">
                        <img class="img-upload" src="/{{$val->link}}">
                        <div class="content-up">
                            <a target="_blank" href="/{{$val->link}}" class="btn btn-success btn-sm">Link</a>
                            <button class="btn btn-danger btn-sm">Xóa</button>
                        </div>
                    </div>

                </div>
            @endforeach
        @endif
    </div>

@endsection