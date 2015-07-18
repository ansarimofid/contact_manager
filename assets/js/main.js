$('document').ready(function () {
    $('#contact_data_submit').submit(function (evt) {
        evt.preventDefault();

        var form_data = $(this).serialize();

        $.post("fetch.data.php?", form_data+"&q=form", function (data) {
                $('#output>div').html(data);
            });
            /*$('#output>div').text("Success");

            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.status==200){
                    $('#output>div').html(xmlhttp.responseText);
                }
            }

            xmlhttp.open("POST","fetch.data.php",true);
            xmlhttp.send();*/
    });
});
