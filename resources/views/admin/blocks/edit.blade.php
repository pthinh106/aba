@extends('admin.main')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên Nội dung</label>
                <input type="text" name="name" class="form-control" value="{{$block->title}}" placeholder="Nhập tên nội dung">
            </div>
            <div class="form-group">
                <label for="name">Link</label>
                <input type="text" name="link_redirect" value="{{$block->link_redirect}}" class="form-control" placeholder="Nhập link khi click vào">
            </div>
            <div class="form-group">
                <label for="parent_id">Danh mục</label>
                <select class="form-control" name="parent_id">
                    <option value="0" {{0==$block->id_menu ? 'selected' : ''}}>Chọn danh mục</option>
                    @foreach($menu as $val)
                        <option value="{{$val['id']}}" {{$val['id']==$block->id_menu ? 'selected' : ''}}>{{$val['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="parent_id">Thể loại</label>
                <select onchange="" class="form-control" name="addon_block">
                    <option value="0" {{0==$block->addon_block ? 'selected' : ''}}>Chọn thể loại</option>
                    @foreach($addon_blocks as $val)
                        <option value="{{$val['id']}}" {{$val['id']==$block->addon_block ? 'selected' : ''}} >{{$val['title']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="menu">Mô tả</label>
                <textarea name="content" class="form-control">{{$block->content}}</textarea>
            </div>

            <div class="form-group">
                <label for="menu">Vị trí</label>
                <input type="number" name="stt" class="form-control" value="{{$block['stt']}}">
            </div>
            <div class="form-group">
                <label for="menu">Ảnh đại diện</label>
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" {{$block['active']==1 ? 'checked' : ''}}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" {{$block['active']==0 ? 'checked' : ''}}>
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
                    @if($block->addon_block==1 && isset($data_addon) && $data_addon)
                        @for($i = 0; $i< 10; $i++)
                            <div class="form-group">
                                @foreach($data_addon[$i] as $key => $val)
                                    @if($key=="'question'")
                                        <label for="name">Câu hỏi {{$i+1}}</label>
                                        <input type="text" name="dataAddon[{{$i}}]['question']" class="form-control" value="{{$val}}" placeholder="Nhập câu hỏi">
                                    @endif
                                    @if($key=="'answer'")
                                        <label for="name">Câu trả lời {{$i+1}}</label>
                                        <textarea name="dataAddon[{{$i}}]['answer']" class="form-control" placeholder="Nhập câu trả lời">{!! $val !!}</textarea>
                                    @endif
                                @endforeach
                            </div>
                            <hr size="5px" color="red">
                        @endfor
                    @endif

                    @if($block->addon_block==3 && isset($data_addon) && $data_addon)
                        @for($i = 0; $i< 3; $i++)
                            <div class="form-group">
                                @foreach($data_addon[$i] as $key => $val)
                                    @if($key=="'image'")
                                    <label for="name">Link hình đại diện {{$i+1}}</label>
                                    <input type="text" name="dataSettlement[{{$i}}]['image']" value="{{$val}}" class="form-control" placeholder="Nhập link hình đại diện">
                                    @endif
                                    @if($key=="'answer'")
                                        <label for="name">Tên {{$i+1}}</label>
                                        <input type="text" name="dataSettlement[{{$i}}]['answer']" value="{{$val}}" class="form-control" placeholder="Nhập tên">
                                    @endif
                                    @if($key=="'answer'")
                                        <label for="name">Link điều hướng {{$i+1}}</label>
                                        <input type="text" name="dataSettlement[{{$i}}]['link']" class="form-control" value="{{$val}}" placeholder="Nhập link điều hướng">
                                    @endif
                                @endforeach
                            </div>
                            <hr size="5px" color="red">
                        @endfor
                    @endif


                    @if($block->addon_block==4 && isset($data_addon) && $data_addon)
                        @for($i = 0; $i< 3; $i++)
                            <div class="form-group">
                                @foreach($data_addon[$i] as $key => $val)
                                    @if($key=="'image'")
                                        <label for="name">Link icon {{$i+1}}</label>
                                        <input type="text" name="dataWhy[{{$i}}]['image']" class="form-control" value="{{$val}}" placeholder="Nhập link icon">
                                    @endif
                                    @if($key=="'content'")
                                        <label for="name">Nội dung {{$i+1}}</label>
                                        <textarea name="dataWhy[{{$i}}]['content']" id="dataWhy{{$i}}" placeholder="Nhập nội dung" class="form-control">{!! $val !!}</textarea>
                                    @endif
                                @endforeach
                            </div>
                            <hr size="5px" color="red">
                        @endfor
                    @endif

                    @if($block->addon_block==5 && isset($data_addon[0]) && $data_addon[0])
                        <div class="form-group">
                            @foreach($data_addon[0] as $key => $val)
                                @if($key=="'image'")
                                <label for="name">Link hình</label>
                                <input type="text" name="dataInterest[0]['image']" class="form-control" value="{{$val}}" placeholder="Nhập link hình">
                                @endif
                                @if($key=="'content'")
                                <label for="name">Nội dung</label>
                                <textarea name="dataInterest[0]['content']" id="content-interest" placeholder="Nhập nội dung" class="form-control">{!! $val !!}</textarea>
                                @endif
                            @endforeach
                        </div>
                    @endif

                    @if($block->addon_block==6 && isset($data_addon) && $data_addon)
                        @for($i = 0; $i< 10; $i++)
                            <div class="form-group">
                                @foreach($data_addon[$i] as $key => $val)

                                    @if($key=="'name'")
                                        <label for="name">Tên video {{$i+1}}</label>
                                        <input type="text" name="dataVideo[{{$i}}]['name']" class="form-control" value="{{$val}}" placeholder="Nhập tên video">
                                    @endif
                                    @if($key=="'id'")
                                        <label for="name">ID video {{$i+1}}</label>
                                        <input type="text" name="dataVideo[{{$i}}]['id']" class="form-control" value="{{$val}}" placeholder="Nhập ID video">
                                    @endif
                                @endforeach
                            </div>
                            <hr size="5px" color="red">
                        @endfor
                    @endif
                    @if($block->addon_block==2 && isset($data_addon) && $data_addon)
                            @for($i = 0; $i< 10; $i++)
                                <div class="form-group">
                                    @foreach($data_addon[$i] as $key => $val)
                                        @if($key=="'name'")
                                            <label for="name">Tên qui trình {{$i+1}}</label>
                                            <input type="text" name="dataProcess[{{$i}}]['name']" class="form-control" value="{{$val}}" placeholder="Nhập tên qui trình">
                                        @endif
                                        @if($key=="'content'")
                                                <label for="name">Nội dung qui trình {{$i+1}}</label>
                                                <textarea name="dataProcess[{{$i}}]['content']" class="form-control" placeholder="Nhập nội dung qui trình">{!! $val !!}</textarea>
                                        @endif
                                    @endforeach
                                </div>
                                <hr size="5px" color="red">
                            @endfor
                    @endif
                    @if($block->addon_block==13 && isset($data_addon[0]) && $data_addon[0])
                        <div class="form-group">
                            @foreach($data_addon[0] as $key => $val)
                                @if($key=="'capital'")
                                    <label for="name">Thủ đô</label>
                                    <input type="text" name="dataIntroduce[0]['capital']" class="form-control" value="{{$val}}" placeholder="Nhập tên thủ đô">
                                @endif
                                @if($key=="'acreage'")
                                    <label for="name">Diện tích</label>
                                    <input type="text" name="dataIntroduce[0]['acreage']" class="form-control" value="{{$val}}" placeholder="Nhập diện tích">
                                @endif
                                @if($key=="'gdp'")
                                    <label for="name">GDP</label>
                                    <input type="text" name="dataIntroduce[0]['gdp']" class="form-control" value="{{$val}}" placeholder="Nhập GDP">
                                @endif
                                @if($key=="'language'")
                                    <label for="name">Ngôn ngữ</label>
                                    <input type="text" name="dataIntroduce[0]['language']" class="form-control" value="{{$val}}" placeholder="Nhập ngôn ngữ">
                                @endif
                                @if($key=="'population'")
                                    <label for="name">Dân số</label>
                                    <input type="text" name="dataIntroduce[0]['population']" class="form-control" value="{{$val}}" placeholder="Nhập dân số">
                                @endif
                            @endforeach
                        </div>
                    @endif
                    @if($block->addon_block==14 && isset($data_addon) && $data_addon)
                            @for($i = 0; $i< 15; $i++)
                                <div class="form-group">
                                    @foreach($data_addon[$i] as $key => $val)
                                        @if($key=="'image'")
                                        <label for="name">Link hình đại diện {{$i+1}}</label>
                                        <input type="text" name="dataInterestP[{{$i}}]['image']" class="form-control" value="{{$val}}" placeholder="Nhập link hình đại diện">
                                        @endif
                                        @if($key=="'name'")
                                            <label for="name">Tên {{$i+1}}</label>
                                            <input type="text" name="dataInterestP[{{$i}}]['name']" class="form-control" value="{{$val}}" placeholder="Nhập tên">
                                        @endif
                                        @if($key=="'link'")
                                            <label for="name">Link điều hướng {{$i+1}}</label>
                                            <input type="text" name="dataInterestP[{{$i}}]['link']" class="form-control" value="{{$val}}" placeholder="Nhập link điều hướng">
                                        @endif
                                    @endforeach
                                </div>
                                <hr size="5px" color="red">
                            @endfor
                    @endif
                    @if($block->addon_block==15 && isset($data_addon[0]) && $data_addon[0])
                        <div class="form-group">
                            @foreach($data_addon[0] as $key => $val)
                                @if($key=="'left'")
                                    <label for="name">Ưu điểm</label>
                                    <textarea name="dataAdvantages[0]['left']" id="content-advantages-left" placeholder="Nhập nội dung" class="form-control">{!! $val !!}</textarea>
                                @endif
                                @if($key=="'right'")
                                    <label for="name">Nhược điểm</label>
                                    <textarea name="dataAdvantages[0]['right']" id="content-advantages-right" placeholder="Nhập nội dung" class="form-control">{!! $val !!}</textarea>
                                @endif
                            @endforeach
                        </div>
                    @endif
                    @if($block->addon_block==16 && isset($data_addon[0]) && $data_addon[0])
                        <div class="form-group">
                            @foreach($data_addon[0] as $key => $val)
                                @if($key=="'left'")
                                    <label for="name">Nội dung bên trái</label>
                                    <textarea name="dataCondition[0]['left']" id="content-condition-left" placeholder="Nhập nội dung" class="form-control">{!! $val !!}</textarea>
                                @endif
                                @if($key=="'right'")
                                    <label for="name">Nội dung bên phải</label>
                                    <textarea name="dataCondition[0]['right']" id="content-condition-right" placeholder="Nhập nội dung" class="form-control">{!! $val !!}</textarea>
                                @endif
                            @endforeach
                        </div>
                    @endif
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
    <script>
        if (document.getElementById('content-interest')){
            CKEDITOR.replace('content-interest');
        }
        if (document.getElementById('content-advantages-left')){
            CKEDITOR.replace('content-advantages-left');
        }
        if (document.getElementById('content-advantages-right')){
            CKEDITOR.replace('content-advantages-right');
        }
        if (document.getElementById('content-condition-right')){
            CKEDITOR.replace('content-condition-right');
        }
        if (document.getElementById('content-condition-left')){
            CKEDITOR.replace('content-condition-left');
        }
        if (document.getElementById('dataWhy0')){
            CKEDITOR.replace('dataWhy0');
        }
        if (document.getElementById('dataWhy1')){
            CKEDITOR.replace('dataWhy1');
        }
        if (document.getElementById('dataWhy2')){
            CKEDITOR.replace('dataWhy2');
        }

    </script>

@endsection