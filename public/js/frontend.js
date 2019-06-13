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