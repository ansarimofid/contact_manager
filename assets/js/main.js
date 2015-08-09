$('document').ready(function () {
    $('#contact_data_submit').submit(function (evt) {
        evt.preventDefault();

        var form_data = $(this).serialize();

        $.post("fetch.data.php?", form_data + "&form=true", function (data) {
            $('.modal-body').html(data);
        });
    });

    $('#advance-button').click(function () {
        $('#advance').slideToggle(1000);
        $('.adv-inner-text-before').fadeToggle();
        $('.adv-inner-text-after').fadeToggle();
    });

    $('#search_input').keyup(function () {
        var inp = $(this).serialize();
        $.post("fetch.data.php", inp + "&key=key", function (data) {
            var out = "";
            for (i = 0; i < data.length; i++) {
                out += data[i].f_name + " " + data[i].l_name + "<br>";
            }
            $('#output-search').html(out);
        }, "json");
    });

       /* $('.nav-main').sticky();
        $('.nav-main').on('sticky-start', function () {

            $('.nav-add-extra').append("<ul class='nav navbar-nav navbar-custom' id='sticky-rm'><li><a href=''><i class='fa fa-sign-in fa-2x'></i></a></li><li><a href=''><i class='fa fa-user-plus fa-2x'></i></a></li></ul>");
        });

        $('.nav-main').on('sticky-end', function () {

            $('#sticky-rm').remove();
        });*/

    $('.options').click(function (e) {
        e.preventDefault();
        $('.sidebar-container').fadeToggle(1000);
        $('.options> a > i').toggleClass('fa-arrow-right');
    });
    $('[data-toggle="popover"]').popover({
    
    });
    $('[data-toggle="tooltip"]').tooltip({
    placement:'right'
    });
});
