$('document').ready(function () {

    //    Submitting Form Detail
    $('#contact_data_submit').submit(function (evt) {
        evt.preventDefault();

        var form_data = $(this).serialize();

        $.post("fetch.data.php?", form_data + "&form=true", function (data) {
            /*
                        $('.modal-body').html(data);
            */
            $(this).find('.modal-title').html(data);
        });
    });

    //    Advance button
    $('#advance-button').click(function () {
        $('#advance').slideToggle(1000);
        $('.adv-inner-text-before').fadeToggle(0);
        $('.adv-inner-text-after').fadeToggle(0);
    });

    //    Auto Suggestion Retrival
    $search_input = $('#search_input');

    $search_input.keyup(function () {
        var inp = $(this).serialize();

        $.post("fetch.data.php", inp + "&key=key", function (data) {
            var out = "";
            for (var i = 0; i < data.length; i++) {
                out += '<li><a href="#">'+data[i].fname + " " + data[i].lname+'</a></li>';

            }
            $('.search-result>ul').html(out);
        }, "json");
    });

    $search_input.focusin(function () {
        $('.search-result').slideToggle(500);

    });
    $search_input.focusout(function () {
        $('.search-result').slideToggle(500);

    });

    //    Sidebar View Toggle
    $('.options').click(function (e) {
        e.preventDefault();
        $('.sidebar-container').fadeToggle(1000);
        $('.options> a > i').toggleClass('fa-arrow-right');
    });

    //Sidebar Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        placement: 'right'
    });

    //    Reset Form and Error tag
    $('.modal').on('hidden.bs.modal', function () {
        var $this = $(this);
        $this.find('form')[0].reset();
        yu.rfReset();
    });

    var yu = $('form').formValidation();

});
