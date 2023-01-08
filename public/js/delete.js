$('.delete').on('click', function () {
    var value = $(this).data('id');
    var url = $(this).data('url');

    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, change it!'
    }).then(function () {

        $.ajax({
            method: "GET",
            url: url

        }).done(function () {

            swal("Deleted!", "File has been deleted.", "success");
            $(".swal2-confirm").on("click", function () {
                $("#del-" + value).remove();
            });
            $(".swal2-container").on("click", function () {
                $("#del-" + value).remove();
            });
        }).fail(function () {
            swal('Error', 'Error!!.', 'error')
        });

    }, function (dismiss) {
        if (dismiss === 'cancel') {
            swal('Cancelled', 'Your change request cancelled.','error')

        }
    });
});
