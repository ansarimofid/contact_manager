$('document').ready(function () {

//    Submitting Form Detail
    $('#contact_data_submit').submit(function (evt) {
        evt.preventDefault();

        var form_data = $(this).serialize();

        $.post("fetch.data.php?", form_data + "&form=true", function (data) {
            //            $('.modal-body').html(data);
            console.log(data);
        });
    });

//    Advance button
    $('#advance-button').click(function () {
        $('#advance').slideToggle(1000);
        $('.adv-inner-text-before').fadeToggle(0);
        $('.adv-inner-text-after').fadeToggle(0);
    });

//    Auto Suggestion Retrival
    $('#search_input').keyup(function () {
        var inp = $(this).serialize();
        $.post("fetch.data.php", inp + "&key=key", function (data) {
            var out = "";
            for (var i = 0; i < data.length; i++) {
                out += data[i].f_name + " " + data[i].l_name + "<br>";
            }
            $('#output-search').html(out);
        }, "json");
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

    var yu= $('form').formValidation();
});
