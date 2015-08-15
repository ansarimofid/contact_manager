$.fn.formValidation = function () {

    $form = this;

    //    Adding Error Field to Every Input
    function Add_field() {
        $form.find('input').each(function () {
            var $this = $(this);
            $this.after('<span class="form-error"></span');
            check_required_error($this);
            validate_submit($form);
        });
    }

    //    Checking for Required Input field error
    function check_required_error($this) {
        if ($this.attr('class').search('required') != -1 && $this.val() == '' && $this.attr('class').search('validate') != -1) {
            $this.removeClass('input-valid');
            $this.siblings('.form-error').html("* Required Field");
        } else if ($this.attr('class').search('required') != -1 && $this.attr('class').search('validate') == -1) {
            $this.addClass('input-valid');
            $this.siblings('.form-error').html("");

        }
    }

    //    Validation Rule for Regex and Function to perform Regex Operation
    function regex_validate($this) {
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


        //        Regex rule for each field
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

    //    Disable Submit Button Until Validation
    function validate_submit($this) {
        var p = $this.find('input.validate.input-valid').length;
        var q = $this.find('input.validate').length;
        if (p == q) {
            $this.find('[type="submit"].validate').removeAttr("disabled", "disabled");
        } else {
            $this.find('[type="submit"].validate').attr("disabled", "disabled");

        }
    }

    //   Funcion to Run FormValidation
    this.validate = function () {
        $form.find('input').keyup(function () {
            var $this = $(this);
            regex_validate($this);
            check_required_error($this);
            validate_submit($form);
        });
    }

    //    Required Field Reset
    this.rfReset = function () {
        $form.find('input').each(function () {
            check_required_error($(this));
            /*$form.find('span.form-error').each(function () {
                //            $(this).remove();*/
        });
    }

    Add_field();
    this.validate();

    //Extra functions
    return {
        rfReset: function () {
            $form.rfReset();
            return $form;
        }
    }
}
