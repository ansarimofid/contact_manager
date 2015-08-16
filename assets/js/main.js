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

    //    Auto    Suggestion Retrival
    $search_input = $('#search_input');
    $search_input.keyup(function () {
        var inp = $(this).serialize();

        $.post("fetch.data.php", inp + "&key=key", function (data) {
            var out = "";
            for (var i = 0; i < data.length; i++) {
                out += '<li><a href="#">' + data[i].fname + " " + data[i].lname + '</a></li>';

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

//    View All Contacts

        $.post("fetch.data.php","list=list", function (data) {
            var out ='<div class="list-group-item row list-group-title"><div class="col-sm-1">#</div><div class="col-sm-2">First Name</div><div class="col-sm-2">Last Name</div><div class="col-sm-2">Email</div><div class="col-sm-2">Mobile</div><div class="col-sm-2">Organization</div><div class="col-sm-1"></div></div>';
            for (var i = 0; i < data.length; i++) {
                /*out += '<div class="test"><div><a href="#">'+data[i].fname + " " + data[i].lname+'</a></div></div>';*/

               out += '<a class="list-group-item row"><div class="col-sm-1">'+(i+1)+'</div><div class="col-sm-2">'+data[i].fname +'</div><div class="col-sm-2">'+data[i].lname +'</div><div class="col-sm-2">'+data[i].email +'</div><div class="col-sm-2">'+data[i].mob +'</div><div class="col-sm-2">'+data[i].org +'</div><div class="col-sm-1 tool-icon"></div></a>';

            }
            $('.contact-list').html(out);
        }, "json");

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
