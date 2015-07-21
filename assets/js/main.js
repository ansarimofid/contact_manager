$('document').ready(function () {
    $('#contact_data_submit').submit(function (evt) {
        evt.preventDefault();

        var form_data = $(this).serialize();

        $.post("fetch.data.php?", form_data + "&form=true", function (data) {
            $('#output>div').html(data);
        });
    });

    $('#advance_b').click(function () {
        $('#advance').slideToggle(1000);
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
});
