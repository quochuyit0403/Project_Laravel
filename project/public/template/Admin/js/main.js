$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) {
    if (confirm('Bạn có chắc chắn muốn xóa địa điểm này không?')) {
        $.ajax({
            type: "DELETE",
            datatype: "JSON",
            data: {id},
            url: url,
            success: function(result) {
                if (result.error == false) {
                    alert(result.message);
                    location.reload();
                }
                else {
                    alert("Vui lòng thử lại!");
                }
            }
        })
    }
}


// Upload file
$('#upload').change(function() {
    const form = new FormData();
    form.append('file', $(this)[0].files[0]);

    $.ajax({
        processData: false,
        contentType: false,
        type: "POST",
        datatype: "JSON",
        data: form,
        url: '/admin/upload/service',
        success: function(result) {
            if (result.error == false) {
                $('#image_show').html('<a href="' + result.url + '" target="_blank">' + 
                '<img src="' + result.url + '" width="100px"></a>');

                $('#thumb').val(result.url);
            }
            else {
                alert("ERROR!");
            }
        }
    });
})