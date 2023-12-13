$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) {
    if (confirm('Xóa mà không thể khôi phục? Bạn có chắc chắn không?')) {
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

$('#upload_1').change(function() {
    const form = new FormData();
    // đặt tên là file
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
                $('#image_show_1').html('<a href="' + result.url + '" target="_blank">' + 
                '<img src="' + result.url + '" width="100px"></a>');

                $('#thumb_1').val(result.url);
            }
            else {
                alert("ERROR!");
            }
        }
    });
})

$('#upload_2').change(function() {
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
                $('#image_show_2').html('<a href="' + result.url + '" target="_blank">' + 
                '<img src="' + result.url + '" width="100px"></a>');

                $('#thumb_2').val(result.url);
            }
            else {
                alert("ERROR!");
            }
        }
    });
})

$('#upload_3').change(function() {
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
                $('#image_show_3').html('<a href="' + result.url + '" target="_blank">' + 
                '<img src="' + result.url + '" width="100px"></a>');

                $('#thumb_3').val(result.url);
            }
            else {
                alert("ERROR!");
            }
        }
    });
})

$('#upload_4').change(function() {
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
                $('#image_show_4').html('<a href="' + result.url + '" target="_blank">' + 
                '<img src="' + result.url + '" width="100px"></a>');

                $('#thumb_4').val(result.url);
            }
            else {
                alert("ERROR!");
            }
        }
    });
})