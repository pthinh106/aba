@for($i = 0; $i< 10; $i++)
    <div class="form-group">
        <label for="name">Tên video {{$i+1}}</label>
        <input type="text" name="dataVideo[{{$i}}]['name']" class="form-control" placeholder="Nhập tên video">
        <label for="name">ID video {{$i+1}}</label>
        <input type="text" name="dataVideo[{{$i}}]['id']" class="form-control" placeholder="Nhập ID video">
    </div>
    <hr size="5px" color="red">
@endfor