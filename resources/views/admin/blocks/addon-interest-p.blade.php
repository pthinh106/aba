@for($i = 0; $i< 15; $i++)
    <div class="form-group">
        <label for="name">Link hình đại diện {{$i+1}}</label>
        <input type="text" name="dataInterestP[{{$i}}]['image']" class="form-control" placeholder="Nhập link hình đại diện">
        <label for="name">Tên {{$i+1}}</label>
        <input type="text" name="dataInterestP[{{$i}}]['name']" class="form-control" placeholder="Nhập tên">
        <label for="name">Link điều hướng {{$i+1}}</label>
        <input type="text" name="dataInterestP[{{$i}}]['link']" class="form-control" placeholder="Nhập link điều hướng">
    </div>
    <hr size="5px" color="red">
@endfor