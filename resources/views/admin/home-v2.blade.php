{{-- {{dd($blocks)}} --}}

@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group">
                <label for="name">Conten name US</label>
                <input type="text" name="name" class="form-control"
                    value="{{ isset($detail->name) ? $detail->name : '' }}" placeholder="Nhập seo title">
            </div>
            <div class="form-group">
                <label for="name">SEO title US</label>
                <input type="text" name="seo_title" value="{{ isset($detail->seo_title) ? $detail->seo_title : '' }}"
                    class="form-control" placeholder="Nhập seo title">
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
                <input type="text" name="name_vn" value="{{ isset($detail->name_vn) ? $detail->name_vn : '' }}"
                    class="form-control" placeholder="Nhập seo title">
            </div>
            <div class="form-group">
                <label for="name">SEO title VN</label>
                <input type="text" name="seo_title_vn"
                    value="{{ isset($detail->seo_title_vn) ? $detail->seo_title_vn : '' }}" class="form-control"
                    placeholder="Nhập seo title">
            </div>
            <div class="form-group">
                <label for="menu">SEO Description VN</label>
                <textarea name="description_vn" class="form-control">{{ isset($detail->description_vn) ? $detail->description_vn : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">Content VN</label>
                <textarea name="content_vn" id="content_vn" class="form-control">{{ isset($detail->content_vn) ? $detail->content_vn : '' }}</textarea>
            </div>

        </div >
        <div class="card-body">
            <h4></h4>Consulting field</h4>
            <div id="box">
                @foreach ($arrHomeBox as $box)
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" name="idBox[]" value="{{$box->id}}">
                        <label for="name">Field Name US</label>
                        <input type="text" name="nameBox_US[]" value="{{ isset($box->nameBox_US) ? $box->nameBox_US : '' }}"
                            class="form-control" placeholder="Nhập seo title">
                    </div>
                    <div class="form-group">
                        <label for="nameD">Field Content US</label>
                        <textarea name="descriptionBox_US[]" class="form-control">{{ isset($box->descriptionBox_US) ? $box->descriptionBox_US : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="menu">Field Name VN</label>
                        <textarea name="nameBox_VN[]" class="form-control">{{ isset($box->nameBox_VN) ? $box->nameBox_VN : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="menu">Field Content VN</label>
                        <textarea name="descriptionBox_VN[]" id="content_vn" class="form-control">{{ isset($box->descriptionBox_VN) ? $box->descriptionBox_VN : '' }}</textarea>
                    </div>
                    <div class="form-group">
                    <label for="banner_pc">Image</label>
                    <input type="file" name="image[]" value="{{ isset($box->image) ?  $box->image : '' }}" class="form-control" placeholder="Ảnh banner PC" onchange="previewImage(event, {{$box->id}})">
                    <img id="preview-image_{{$box->id}}" src="{{ isset($box->image) ? asset('storage/' . $box->image) : '' }}" style="display: block; max-width: 200px; max-height: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="menu">Target Url</label>
                        <input name="target_url[]" class="form-control" value="{{$box->target_url}}">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" name="activeBox[]" @if($box->active == 1) checked @endif class="custom-control-input" id="customSwitch3{{$box->id}}">
                            <label class="custom-control-label" for="customSwitch3{{$box->id}}">Show item</label>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="card-footer">
                <span onclick="addNewBox()" class="btn btn-primary">Add new box</span>
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
    <script>
        function addNewBox() {
            var box = document.getElementById('box');
            var html = document.createElement('div');
            var uniqueId = Date.now(); // Generate a unique ID using the current timestamp
            html.className = 'card-body';
            html.innerHTML = `
                <h4>Box</h4>
                <div class="form-group">
                    <input type="hidden" name="idBox[]" >
                    <label for="name">Field Name US</label>
                    <input type="text" name="nameBox_US[]" value="" class="form-control" placeholder="Nhập seo title">
                </div>
                <div class="form-group">
                    <label for="nameD">Field Content US</label>
                    <textarea name="descriptionBox_US[]" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="menu">Field Name VN</label>
                    <input name="nameBox_VN[]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="menu">Field Content VN</label>
                    <textarea name="descriptionBox_VN[]" id="content_vn_${uniqueId}" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="menu">Target Url</label>
                    <input name="target_url[]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="banner_pc">Image</label>
                    <input type="file" name="image[]" class="form-control" placeholder="Ảnh banner PC" onchange="previewImage(event, ${uniqueId})">
                    <img id="preview-image_${uniqueId}" src="#" alt="Preview Image" style="display: none; max-width: 200px; max-height: 200px;">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" name="activeBox[]" class="custom-control-input" id="customSwitch3${uniqueId}">
                        <label class="custom-control-label" for="customSwitch3${uniqueId}">Show item</label>
                    </div>
                </div>
            `;
        
            box.appendChild(html);
        }
            
        function previewImage(event, id) {
                var reader = new FileReader();
                reader.onload = function () {
                    var preview = document.getElementById(`preview-image_${id}`);
                    preview.src = reader.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(event.target.files[0]);
            }
    </script>
@endsection
