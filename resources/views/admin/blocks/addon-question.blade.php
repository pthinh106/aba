@for($i = 0; $i< 10; $i++)
    <div class="form-group">
        <label for="name">Câu hỏi {{$i+1}}</label>
        <input type="text" name="dataAddon[{{$i}}]['question']" class="form-control" placeholder="Nhập câu hỏi">
        <label for="name">Câu trả lời {{$i+1}}</label>
        <textarea name="dataAddon[{{$i}}]['answer']" class="form-control" placeholder="Nhập câu trả lời"></textarea>
    </div>
    <hr size="5px" color="red">
@endfor