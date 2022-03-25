$(document).on('click', '.question_status', function () {
    var id = $(this).attr('data-id');
    $.get(BASE_URL+'/admin/question_status/' +id, function (fb) {
        alert('Status Successfully Changed');
    })
});