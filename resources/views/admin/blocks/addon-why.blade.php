@for($i = 0; $i< 3; $i++)
    <div class="form-group">
        <label for="name">Link icon {{$i+1}}</label>
        <input type="text" name="dataWhy[{{$i}}]['image']" class="form-control" placeholder="Nhập link icon">
        <label for="name">Nội dung {{$i+1}}</label>
        <textarea id="dataWhy{{$i}}" name="dataWhy[{{$i}}]['content']" placeholder="Nhập nội dung" class="form-control"></textarea>
    </div>
    <hr size="5px" color="red">
@endfor