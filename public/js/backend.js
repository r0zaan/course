$(document).ready(function ($) {

    var url;

    $(document).on('click', '.ajax-modal', function () {
        url = $(this).attr('data-url');
        $('.ajax-form-model').modal();
    });


    $('.ajax-form-model').on('shown.bs.modal', function () {
        $('.ajax-form-model .panel-body').load(url, function () {
            $('.select2').select2();
        });
    });

    $('.ajax-form-model').on('hidden.bs.modal', function () {
        $(".ajax-form-model .panel-body").html('');
        var prep_content = $('.prep').html();
        $(".ajax-form-model .panel-body").html(prep_content);

    });


    //ajax form submit
    (function () {

        $(document).on('submit', '.ajax-form-post', function () {

            $('.loaderImg').css('display', 'block');

            $('.error-message').each(function () {
                $(this).removeClass('make-visible');
                $(this).html('');
            });


            $('input').each(function () {
                $(this).removeClass('errors');
            });

            var url = $(this).attr('action');

            var form = $(this);
            var formData = false;
            if (window.FormData) {
                formData = new FormData(form[0]);
            }


            $.ajax({
                headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
                url: url,
                data: formData ? formData : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (response) {
                    console.log(response);
                    if (response.status == 'success') {

                        window.location.href = response.return_url;
                    }
                    if (response.status == 'fail') {
                        for (var key in response.errors) {
                            //console.log(response);
                            var error_message = response.errors[key];

                            var error_form_field = form.find("[name=" + key + "]");
                            error_form_field.addClass('errors');
                            error_form_field.parent().find('.error-message').addClass('make-visible').html(error_message);
                        }
                        $('.loaderImg').css('display', 'none');
                    }
                }
            });
            return false;

        });

    })();

    (function () {


        $(document).on('submit', 'form.delete-data-ajax', function (e) {

            var current_form = $(this);
            swal({
                    title: "Are you sure?",
                    text: "Are you sure you want to delete this!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55 ",
                    confirmButtonText: "Yes, Delete it!",
                    closeOnConfirm: false
                },
                function () {

                    var request_data = {};

                    request_data['_token'] = current_form.find('input[name=_token]').val();

                    $.ajax({
                        type: current_form.attr('method'),
                        url: current_form.attr('action'),
                        data: request_data,
                        success: function (data) {
                            console.log(data);
                            if (data.status == 'success') {
                                swal("Deleted!", "Deleted Successfully!", "success");
                                location.reload();
                            } else {
                                swal("Cancelled", "Cannot Deleted Because User has Created Data", "error");
                            }
                        }
                    });


                });

            return false;
        });

        $(document).on('submit', 'form.restore-data-ajax', function (e) {

            var current_form = $(this);
            swal({
                    title: "Are you sure?",
                    text: "Are you sure you want to restore this!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#3e9953 ",
                    confirmButtonText: "Yes, Restored it!",
                    closeOnConfirm: false
                },
                function () {

                    var request_data = {};

                    request_data['_token'] = current_form.find('input[name=_token]').val();

                    $.ajax({
                        type: current_form.attr('method'),
                        url: current_form.attr('action'),
                        data: request_data,
                        success: function (data) {
                            console.log(data);
                            if (data.status == 'success') {
                                location.reload();
                            }
                        }
                    });

                    swal("Restored!", "Restore Successfully!", "success");
                });

            return false;
        });
    })();

// for active class
    var url = window.location;

// for sidebar menu entirely but not cover treeview
    $('ul.sidebar-menu a').filter(function () {
        return this.href == url;
    }).parent().addClass('active');

// for treeview
    $('ul.treeview-menu a').filter(function () {
        return this.href == url;
    }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active').addClass('menu-open');


    $('#selectAll').click(function () {
        if ($(this).prop('checked') == true) {
            $('.select').each(function () {
                console.log($('#selectAll').prop('checked'));
                $(this).prop('checked', true);
            });
        } else {
            $('.select').each(function () {
                console.log($('#selectAll').prop('checked'));
                $(this).prop('checked', false);
            });
        }
    });
    $('#trashAll').click(function () {
        if ($(this).prop('checked') == true) {
            $('.selectTrash').each(function () {
                console.log($('#trashAll').prop('checked'));
                $(this).prop('checked', true);
            });
        } else {
            $('.selectTrash').each(function () {
                console.log($('#trashAll').prop('checked'));
                $(this).prop('checked', false);
            });
        }
    });
    //for dynamic Form
    $(document).on('click', '.delete', function (e) {
        swal({
                title: "Are you sure?",
                text: "Are you sure you want to Delete the selected one!",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55 ",
                confirmButtonText: "Yes, Delete it!",
                closeOnConfirm: false
            },
            function () {
                var id = [];
                var location = document.URL;
                $('.select').each(function (e) {
                    if (this.checked) {
                        id[e] = this.id;
                    }
                });
                if (id.length === 0) {
                    swal("Nothing Selected", 'Error in Deleted', "error");
                } else {
                    console.log(id);
                    var href = location + '/selectDelete';
                    var header = {'X-CSRF-TOKEN': $('input[name=_token]').val()};
                    $.ajax({
                        headers: header,
                        url: href,
                        type: 'POST',
                        dataType: "JSON",
                        data: {
                            "id": id,
                            "_method": 'POST'
                        },
                        success: function (data) {
                            if (data.status == 'success') {
                                console.log("it Work");
                                swal("Deleted", 'Successfully Deleted', "success");
                                window.location.href = location;
                            }
                            if (data.status == 'fail') {
                                console.log("It failed");
                                swal("Cant Delete", 'Could not be Deleted', "error");
                            }
                        }
                    });
                }
            });
    });

    $(document).on('click', '.deleteTrash', function (e) {
        swal({
                title: "Are you sure?",
                text: "Are you sure you want to Delete the selected one!",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55 ",
                confirmButtonText: "Yes, Delete it!",
                closeOnConfirm: false
            },
            function () {
                var id = [];
                var location = document.URL;
                $('.selectTrash').each(function (e) {
                    if (this.checked) {
                        id[e] = this.id;
                    }
                });
                if (id.length === 0) {
                    swal("Nothing Selected", 'Error in Deleted', "error");
                } else {
                    console.log(id);
                    var href = location + '/selectPermanentDelete';
                    var header = {'X-CSRF-TOKEN': $('input[name=_token]').val()};
                    $.ajax({
                        headers: header,
                        url: href,
                        type: 'POST',
                        dataType: "JSON",
                        data: {
                            "id": id,
                            "_method": 'POST'
                        },
                        success: function (data) {
                            if (data.status == 'success') {
                                console.log("it Work");
                                swal("Deleted", 'Successfully Deleted', "success");
                                window.location.href = location;
                            }
                            if (data.status == 'fail') {
                                swal("Cant Delete", 'Could not be Deleted', "error");
                            }
                        }
                    });
                }
            });
    });
    (function () {
        $(document).on('submit', '.ajax-form-import', function () {

            $('.error-message').each(function () {
                $(this).removeClass('make-visible');
                $(this).html('');
            });

            $('input').each(function () {
                $(this).removeClass('errors');
            });
            $('.loader-report img.loader').addClass('make-visible');
            var url = $(this).attr('action');

            var form = $(this);
            var formData = false;
            if (window.FormData) {
                formData = new FormData(form[0]);
            }

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
                url: url,
                data: formData ? formData : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (response) {
                    console.log(response);
                    if (response.status == 'success') {
                        $('.loader-report img.loader').removeClass('make-visible');
                        swal({
                            title: "Imported!",
                            text: "Successfully Imported",
                            type: "success"
                        }, function () {
                            var href = document.URL;
                            location.reload();
                        });
                    }
                    if (response.status == 'fail') {
                        $('.loader-report img.loader').removeClass('make-visible');
                        for (var key in response.errors) {
                            //console.log(response);
                            var error_message = response.errors[key];
                            var error_form_field = form.find("[name=" + key + "]");
                            error_form_field.addClass('errors');
                            error_form_field.parent().find('.error-message').addClass('make-visible').html(error_message);
                        }
                        swal("File Not uploaded", 'Error File Not Imported', "error");
                    }
                    if (response.status == 'error') {
                        $('.loader-report img.loader').removeClass('make-visible');
                        swal({
                            title: "Imported!",
                            text: "Exist Or Syntax Error\n" +
                                "Check In Excel!! ",
                            type: "success"
                        }, function () {
                            window.location.href = response.url;
                        });
                    }
                }
            });

            return false;

        });
    })();
});
