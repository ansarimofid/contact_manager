$('document').ready(function () {
    $('#contact_data_submit').submit(function (evt) {
        evt.preventDefault();

        var form_data = $(this).serialize();

        $.post("fetch.data.php?", form_data+"&form=true", function (data) {
                $('#output>div').html(JSON.stringify(data[0]));
             //alert("Mofuu");
                    //var obj = $.parseJSON(data);
            //alert (obj[0].name);

            },"json");
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

    $('#advance_b').click(function(){
        $('#advance').slideToggle(1000);
    })
});
