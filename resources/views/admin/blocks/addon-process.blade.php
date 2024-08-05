@for($i = 0; $i< 10; $i++)
    <div class="form-group">
        <label for="name">Tên qui trình {{$i+1}}</label>
        <input type="text" name="dataProcess[{{$i}}]['name']" class="form-control" placeholder="Nhập tên qui trình">
        <label for="name">Nội dung qui trình {{$i+1}}</label>
        <textarea name="dataProcess[{{$i}}]['content']" class="form-control" placeholder="Nhập nội dung qui trình"></textarea>
    </div>
    <hr size="5px" color="red">
@endfor