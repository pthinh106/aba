$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) {
    if (confirm("Xóa mà không thể khôi phục. Bạn có chắc?")){
        $.ajax(
            {
                type: 'DELETE',
                data_type: 'JSON',
                data: {id: id},
                url: url,
                success: function (result) {
                    if (result.error === false){
                        alert(result.message);
                        location.reload();
                    }else{
                        alert('Xóa lỗi vui lòng thử lại.')
                    }
                }
            }
        )
    }
}

function addNewAddon(id) {
    $.ajax(
        {
            type: 'POST',
            data_type: 'html',
            data: {id: id},
            url: '/admin/blocks/addon-block',
            success: function (result) {
                document.getElementById("data-content-addon").innerHTML = result;
                setTimeout(myStopFunction, 100);
            }
        }
    )

}
function myStopFunction() {
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
}
