window.onload = function () {

    'use strict';

    var Cropper = window.Cropper;
    var container = document.querySelector('.img-container');
    var image = container.getElementsByTagName('img').item(0);
    var actions = document.getElementById('actions');
    var options = {
        dragMode: 'move',
        preview: '.img-preview',
        aspectRatio: 1.58947,
        autoCropArea: 0.35,
        restore: false,
        guides: false,
        center: false,
        highlight: false,
        cropBoxMovable: false,
        cropBoxResizable: false,
        toggleDragModeOnDblclick: false,
        crop: function (e) {
            var data = e.detail;
        }
    };
    var cropper = new Cropper(image, options);
    if (!document.createElement('canvas').getContext) {
        $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
    }
    if (typeof document.createElement('cropper').style.transition === 'undefined') {
        $('button[data-method="rotate"]').prop('disabled', true);
        $('button[data-method="scale"]').prop('disabled', true);
    }
    actions.querySelector('.docs-buttons').onclick = function (event) {
        var e = event || window.event;
        var target = e.target || e.srcElement;
        var result;
        var input;
        var data;
        if (!cropper) {
            return;
        }
        while (target !== this) {
            if (target.getAttribute('data-method')) {
                break;
            }
            target = target.parentNode;
        }
        if (target === this || target.disabled || target.className.indexOf('disabled') > -1) {
            return;
        }
        data = {
            method: target.getAttribute('data-method'),
            target: target.getAttribute('data-target'),
            option: target.getAttribute('data-option'),
            secondOption: target.getAttribute('data-second-option')
        };
        if (data.method) {
            if (typeof data.target !== 'undefined') {
                input = document.querySelector(data.target);
                if (!target.hasAttribute('data-option') && data.target && input) {
                    try {
                        data.option = JSON.parse(input.value);
                    } catch (e) {
                        console.log(e.message);
                    }
                }
            }
            result = cropper[data.method](data.option, data.secondOption);
            if (typeof result === 'object' && result !== cropper && input) {
                try {
                    input.value = JSON.stringify(result);
                } catch (e) {
                    console.log(e.message);
                }
            }
        }
    };
    var inputImage = document.getElementById('inputImage');
    var URL = window.URL || window.webkitURL;
    var blobURL;
    if (URL) {
        inputImage.onchange = function () {
            var files = this.files;
            var file;
            if (cropper && files && files.length) {
                file = files[0];

                if (/^image\/\w+/.test(file.type)) {
                    blobURL = URL.createObjectURL(file);
                    cropper.reset().replace(blobURL);
                    inputImage.value = null;
                    $(".uploader").hide();
                    $(".editor").show();
                } else {
                    window.alert('Please choose an image file.');
                }
            }
        };
    } else {
        inputImage.disabled = true;
        inputImage.parentNode.className += ' disabled';
    }

    function message(data, type) {
        data = typeof data !== 'undefined' ? data : "";
        type = typeof type !== 'undefined' ? type : "success";
        var alertHolder = $(".alert-holder");
        var close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        alertHolder.html('');
        alertHolder.html('<div class="alert alert-' + type + '">' + close + data + '</div>');
    }

    $("#image_submit").on('submit', (function (e) {
        e.preventDefault();

        var layout = $(".preview-layout");
        var data_layout = layout.offset();
        data_layout.right = data_layout.left + layout.width();
        data_layout.bottom = data_layout.top + layout.height();

        var image = $(".img-preview img:first-child");
        var data_image = image.offset();
        data_image.right = data_image.left + image.width();
        data_image.bottom = data_image.top + image.height();

        var image_cover = (data_image.left <= data_layout.left && data_image.top <= data_layout.top && data_image.right >= data_layout.right && data_image.bottom >= data_layout.bottom);

        if (image_cover) {
            $(".cover-message").hide();
        } else {
            $(".cover-message").show();
            return false;
        }

        var progress = $(".progress");
        if(progress.children(".progress-bar").hasClass("progress-bar-danger")){
            progress.children(".progress-bar").removeClass("progress-bar-danger").addClass("progress-bar-success");
        }
        var action = $(this).children('input[name=action]').val();
        var redirect = $(this).children('input[name=redirect]').val();
        var overlay = $(".preview-layout").data("overlay");
        var new_image = cropper['getCroppedCanvas'](null, null).toDataURL();
        // $("#serverImage").val(new_image);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            xhr: function () {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = parseInt(evt.loaded / evt.total * 100);
                        progress.children(".progress-bar").attr({"aria-valuenow" : percentComplete, "style" : "width: " + percentComplete + "%"}).children("span").html( percentComplete + "% Complete");
                    }
                }, false);
                return xhr;
            },
            url: action,
            method: "POST",
            data: {
                image_data: new_image,
                overlay: overlay
            },
            dataType: "json"
            // contentType: false,       // The content type used when sending data to the server.
            // cache: false,             // To unable request pages to be cached
            // processData:false,        // To send DOMDocument or non processed data file it is set to false
        }).done(function (data) {
            if (data.status) {
                progress.children(".progress-bar").attr({"aria-valuenow" : 100, "style" : "width: 100%"});
                window.location = redirect;
            } else {
                if(progress.children(".progress-bar").hasClass("progress-bar-success")){
                    progress.children(".progress-bar").removeClass("progress-bar-success").addClass("progress-bar-danger");
                }
                message(data.message, "warning");
            }
        }).fail(function () {
            if(progress.children(".progress-bar").hasClass("progress-bar-success")){
                progress.children(".progress-bar").removeClass("progress-bar-success").addClass("progress-bar-danger");
            }
            message("Your image size or dymantion is too large", "warning");
        }).always(function () {
            progress.children(".progress-bar").attr({"aria-valuenow" : 100, "style" : "width: 100%"});
        });
    }));
    $("#change_image").on("click", function () {
        $(".editor").hide();
        $(".uploader").show();
    });
};
