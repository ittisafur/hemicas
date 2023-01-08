function load_datatable(ajax_url) {
    $('#table').DataTable( {
        dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        ajax : ajax_url,
        buttons: [
            { extend: 'print', className: 'btn dark btn-outline', exportOptions: { columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 9 ] } },
            { extend: 'copy', className: 'btn red btn-outline', exportOptions: { columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 9 ] } },
            { extend: 'pdf', className: 'btn green btn-outline', exportOptions: { columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 9 ] } },
            { extend: 'excel', className: 'btn yellow btn-outline', exportOptions: { columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 9 ] } },
            { extend: 'csv', className: 'btn purple btn-outline', exportOptions: { columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 9 ] } },
        ],
        lengthMenu: [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"]
        ],
        pageLength: 10,
        // responsive: {
        //     details: {
        //
        //     }
        // },
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 }
        ],
        language: {
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            },
            "emptyTable": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty": "No entries found",
            "infoFiltered": "(filtered1 from _MAX_ total entries)",
            "lengthMenu": "_MENU_ entries",
            "search": "Search:",
            "zeroRecords": "No matching records found"
        },
    });
}

$(document).ready(function () {
    // $(".date-picker").datetimepicker();
    var ajax_url = $("#datatable_url").val();
    load_datatable(ajax_url);

    function canvasMerge(canvas, image, layout){
        var canvas = document.getElementById(canvas);
        var context = canvas.getContext('2d');

        var mainImage = new Image();
        mainImage.src = image;
        mainImage.onload = function(){
            context.drawImage(mainImage,
                0, 0,
                800, 500
            );
            var overlayImage = new Image();
            overlayImage.src = layout;
            overlayImage.onload = function(){
                context.drawImage(overlayImage,
                    0, 0,
                    800, 500
                );
            }
        }
    }

    $('body').on('click', '.view-detail', function () {
        var jsdata = $(this).siblings('.jsdata');
        var form   = $("#change_status_form");
        var image  = jsdata.data('image');
        var name   = jsdata.data('name');
        $(".modal-footer").hide();
        $(".request-image").attr("src", image);
        $(".request-image").load(function() {
            $(".modal-footer").show();
        });
        form.children("input[name=request_id]").val(jsdata.data('id'));
        form.children("input[name=status]").val(jsdata.data('status'));
        form.children("a").removeClass().addClass("btn btn-sm " + jsdata.data('class')).children("span")
        .html(jsdata.data('status').replace("-", " "));

        canvasMerge("canvas1", image, jsdata.data('do1'));
        canvasMerge("canvas2", image, jsdata.data('do2'));

        document.getElementById('dl_button1').addEventListener('click', function() {
            this.href = document.getElementById('canvas1').toDataURL();
            this.download = name;
        }, false);
        document.getElementById('dl_button2').addEventListener('click', function() {
            this.href = document.getElementById('canvas2').toDataURL();
            this.download = name;
        }, false);
    });
    $(".change-status").on("click", function(){
        var status = $(this).data('name');
        var form = $("#change_status_form");
        form.children("input[name=status]").val(status);
        form.submit();
    });
    $("body").on('submit', "#change_status_form", function(e){
        e.preventDefault();
        var form = $(this);
        var formData = new FormData(this);
        swal({
            title: 'Are you sure?',
            text: "You want to change the card request status as " + form.children("input[name=status]").val() + "!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, change it!'
        }).then(function () {
            var request_id = form.children('input[name=request_id]').val();
            var js_input = $(".jsdata[data-id=" + request_id +"]");
            var row = js_input.parent().parent();
            var action = form.children('input[name=action]').val();
            $.ajax({
                url: action,
                type: "POST",
                data: formData,
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
            }).done(function(data){
                if(data.success) {
                    form.children("a").removeClass()
                    .addClass("btn btn-sm " + data.class)
                    .children("span").html(data.title);
                    js_input.data('class', data.class);
                    js_input.data('status', data.status);
                    row.find(".request-status")
                    .removeClass().addClass("label "+data.class)
                    .html(data.status);
                    swal(
                        'Changed!',
                        'Request is now ' + data.title,
                        'success'
                    );
                }else {
                    swal(
                        'Not changed!',
                        data.message,
                        'warning'
                    );
                }
            }).fail(function(){
                swal(
                    'Failed!',
                    'Status changed request failed.',
                    'error'
                );
            });
        }, function (dismiss) {
            if (dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your change request cancelled.',
                    'error'
                )
            }
        });
    });
});
