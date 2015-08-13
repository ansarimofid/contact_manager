$('document').ready(function () {
    $('#contact_data_submit').submit(function (evt) {
        evt.preventDefault();

        var form_data = $(this).serialize();

        $.post("fetch.data.php?", form_data + "&form=true", function (data) {
            //            $('.modal-body').html(data);
            console.log(data);
        });
    });

    $('#advance-button').click(function () {
        $('#advance').slideToggle(1000);
        $('.adv-inner-text-before').fadeToggle(0);
        $('.adv-inner-text-after').fadeToggle(0);
    });

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
    //Sidebar Tooltio
    $('[data-toggle="tooltip"]').tooltip({
        placement: 'right'
    });
    //    Reset Form and Error tag
    $('.modal').on('hidden.bs.modal', function () {
        var $this = $(this);
        $this.find('form')[0].reset();
        $this.find('input').each(function () {
            check_required_error($(this));
        });
    });


    //    Adding Error Field to Every Input
    var $form = $('form');
    $form.find('input').each(function () {
        var $this = $(this);
        $this.after('<span class="form-error"></span');
        check_required_error($this);
    });


    //    Checking for Required Input field error
    function check_required_error($this) {
        if ($this.attr('class').search('required') != -1 && $this.val() == '') {
            $this.removeClass('input-valid');
            $this.siblings('.form-error').html("* Required Field");
        } else if ($this.attr('class').search('required') != -1 && $this.attr('class').search('validate') == -1) {
            $this.addClass('input-valid');
            $this.siblings('.form-error').html("");

        }
    }

    //    Validation Function
    function validate($this) {
        var input = $this;
        var input_name = $this.attr('name');
        var input_val = $this.val();

        //        Function to Verify Regex

        function check_error(regex_exp, len, regex_error) {
            if (input_val.length > 0 && input.attr('class').search('validate') != -1) {
                if (regex_exp.test(input_val)) {
                    input.siblings('.form-error').html("");
                    input.addClass('input-valid');
                } else {
                    if (input_val.length < len) {
                        input.siblings('.form-error').html("* Atleast " + len + " Character");
                        input.removeClass('valid');

                    } else
                        input.siblings('.form-error').html(regex_error);
                    input.removeClass('input-valid');
                }
            } else if (input.attr('class').search('validate') != -1) {
                input.siblings('.form-error').html("");
                input.addClass('input-valid');

            }
        }


        switch (input_name) {
        case 'fname':
            check_error(/^([a-zA-Z]{3,15})+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/, 3, "* Only Alphabets");
            break;
        case 'lname':
            check_error(/^([a-zA-Z]{3,15})+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/, 3, "* Only Alphabets");
            break;
        case 'title':
            check_error(/^([a-zA-Z.-]{3,15})*$/, 3, "Only Alphabets and '.-' allowed");
            break;
        case 'email':
            check_error(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/, 0, "* Invalid Email");
            break;
        case 'tel':
            check_error(/^[2-9]\d{2}-\d{3}-\d{4}$/, 5, "* Invalid Telephone No.");
            break;
        case 'mob':
            check_error(/^([0-9]{10})$/, 0, "* Invalid Mobile No.");
            break;
        case 'website':
            check_error(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/, 0, "* Invalid Website Name");
            break;
        case 'photo':
            check_error(/^()$/, 0, "* Invalid Image Format");
            break;
        case 'nname':
            check_error(/^()$/, 0, "* Only Alphabets");
            break;
        case 'bday':
            check_error(/^()$/, 0, "* Invalid Birthday");
            break;

        case 'org':
            check_error(/^()$/, 0, "* Only Alphabets");
            break;

        case 'note':
            check_error(/^()$/, 0, "* ERROR MESSAGE");
            break;

        case 'pobox':
            check_error(/^()$/, 4, "* ERROR MESSAGE");
            break;
        case 'ext':
            check_error(/^()$/, 4, "* ERROR MESSAGE");
            break;
        case 'street':
            check_error(/^()$/, 4, "* ERROR MESSAGE");
            break;
        case 'zipcode':
            check_error(/^()$/, 4, "* ERROR MESSAGE");
            break;
        case 'city':
            check_error(/^()$/, 4, "* ERROR MESSAGE");
            break;
        case 'state':
            check_error(/^()$/, 4, "* ERROR MESSAGE");
            break;
        case 'country':
            check_error(/^()$/, 4, "* ERROR MESSAGE");
            break;
        case 'username':
            check_error(/[^A-Za-z0-9_@\.]|@{2,}|\.{5,}/, 3, "* invalid Username");
            break;


        }
    }


    //    Form Validation
    $form.find('input').keyup(function () {
        var $this = $(this);
        validate($this);
        check_required_error($this);
        validate_submit($form);
    });

    //    Disable Submit Button
    function validate_submit($this) {
            var p = $this.find('input.validate.input-valid').length;
            var q = $this.find('input.validate').length;
            if (p == q) {
                $this.find('button.disabled').removeClass('disabled');
            }
        }

    validate_submit($form);

    var name=new validation($form);
    name.formValidation();
});
