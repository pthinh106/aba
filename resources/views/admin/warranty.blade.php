{{--{{dd($blocks)}}--}}

@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group">
                <label for="name">Conten name US</label>
                <input type="text" name="name" class="form-control" value="{{ isset($detail->name) ? $detail->name : '' }}" placeholder="Nhập seo title">
            </div>
            <div class="form-group">
                <label for="name">SEO title US</label>
                <input type="text" name="seo_title" value="{{ isset($detail->seo_title) ? $detail->seo_title : '' }}" class="form-control" placeholder="Nhập seo title">
            </div>
            <div class="form-group">
                <label for="menu">SEO Description US</label>
                <textarea name="description" class="form-control">{{ isset($detail->description) ? $detail->description : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">Content US</label>
                <textarea name="content" id="content" class="form-control">{{ isset($detail->content) ? $detail->content : '' }}</textarea>
            </div>

        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Conten name VN</label>
                <input type="text" name="name_vn" value="{{ isset($detail->name_vn) ? $detail->name_vn : '' }}" class="form-control" placeholder="Nhập seo title">
            </div>
            <div class="form-group">
                <label for="name">SEO title VN</label>
                <input type="text" name="seo_title_vn" value="{{ isset($detail->seo_title_vn) ? $detail->seo_title_vn : '' }}" class="form-control" placeholder="Nhập seo title">
            </div>
            <div class="form-group">
                <label for="menu">SEO Description VN</label>
                <textarea name="description_vn" class="form-control">{{ isset($detail->description_vn) ? $detail->description_vn : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">Content VN</label>
                <textarea name="content_vn" id="content_vn" class="form-control">{{ isset($detail->content_vn) ? $detail->content_vn : '' }}</textarea>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        @csrf
    </form>
@endsection
@section('footer')
    <script>
        CKEDITOR.replace('content');
        CKEDITOR.replace('content_vn');
    </script>

@endsection