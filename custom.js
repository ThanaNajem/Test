$(document).ready(function () {


    var handlerSel = $(".handler");


    $('#btn-signup').on('click', function () {
        $('#signupalert').empty();
        //   var emailVal =$.trim($('#email').val()) ;
        // var firsrtNameVal =$.trim($('#firsrtName').val()) ;
        // var lastNameVal =$.trim($('#lastName').val()) ;
        // var passVal =$.trim($('#pass').val()) ;
        var err_pass = '';
        var err_fname = '';
        var err_lname = '';
        var err_email = '';


        for (i = 0; i < $("#signupbox .handler").length; i++) {


            elmtID = $("#signupbox .handler")
                .eq(i)
                .find("input");
            var isInputEmail = $("#signupbox .handler")
                .eq(i)
                .find("input").is("#email");

            var isInputfname = $("#signupbox .handler")
                .eq(i)
                .find("input").is("#firsrtname");

            var isInputlname = $("#signupbox .handler")
                .eq(i)
                .find("input").is("#lastname");

            var isInputPass = $("#signupbox .handler")
                .eq(i)
                .find("input").is("#pass");

            var emailVal = $.trim($("#signupbox .handler")
                .eq(i)
                .find("#email")
                .val());

            var firsrtNameVal = $.trim($("#signupbox .handler")
                .eq(i)
                .find("#firsrtname")
                .val());

            var lastNameVal = $.trim($("#signupbox .handler")
                .eq(i)
                .find("#lastname")
                .val());

            var passVal = $.trim($("#signupbox .handler")
                .eq(i)
                .find("#pass")
                .val());
            /**/

            if (
                (isInputPass && !check(passVal)) ||
                (isInputEmail && !isThisEmail(emailVal)) ||
                (isInputfname && !validateInput(firsrtNameVal)) ||
                (isInputfname && !checkName(firsrtNameVal, "#firsrtname")) ||
                (isInputlname && !validateInput(lastNameVal)) ||
                (isInputlname && !checkName(lastNameVal, "#lastname"))
            ) {


                if (isInputPass && !check(passVal)) {
                    err_pass = 'password should be minimum of 8 characters length with at least 1 special char and 2 digits and one capital letter';
                    addTollTipErr(err_pass, i);


                }
                if (isInputEmail && !isThisEmail(emailVal)) {
                    err_email = 'email is incorrect format';
                    addTollTipErr(err_email, i);
                }
                if (isInputfname && (!validateInput(firsrtNameVal)) && (!checkName(firsrtNameVal, "#firsrtname"))) {
                    err_fname = 'first name shoud contain at least one character and required';
                    addTollTipErr(err_fname, i);
                } else if (isInputfname && !validateInput(firsrtNameVal)) {
                    err_fname = 'required';
                    addTollTipErr(err_fname, i);
                } else if (isInputfname && !checkName(firsrtNameVal, "#firsrtname")) {
                    err_fname = 'first name shoud contain at least one character';
                    addTollTipErr(err_fname, i)
                }

                if (isInputlname && (!validateInput(lastNameVal)) && (!checkName(lastNameVal, "#lastname"))) {
                    err_lname = 'last name shoud contain at least one character and required';
                    addTollTipErr(err_lname, i)
                } else if (isInputlname && !validateInput(lastNameVal)) {
                    err_lname = 'required';
                    addTollTipErr(err_lname, i)
                } else if (isInputlname && !checkName(lastNameVal, "#lastname")) {
                    err_lname = 'last name shoud contain at least one character';
                    addTollTipErr(err_lname, i)
                }


            } else {

            }
        }


    });


    $('#btn-login').on('click', function () {
        // $('#login-alert').empty();
        // var loginUsername =$.trim($('#login-username').val()) ;
        // var loginPassword =$.trim($('#login-password').val()) ;
        for (i = 0; i < $("#loginbox .handler").length; i++) {
            if (!$.trim($("#loginbox .handler")
                    .eq(i)
                    .find("input")
                    .val())) {
                $("#loginbox .handler")
                    .eq(i)
                    .find(".t-tip")
                    .addClass("show");
            } else {
                $("#loginbox .handler")
                    .eq(i)
                    .find(".t-tip")
                    .removeClass("show");
            }
        }
    });

    function check(password = "") {
        var re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]{2,})(?=.*[!@#\$%\^&\*])(?=.{8,})");

        return re.test(password);
    }

    function validateInput(input = "") {

        return input.length != 0;

    }

    function isThisEmail(emailInput = "") {

        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        return testEmail.test(emailInput);


    }

    function addTollTipErr(err, i) {
        $("#signupbox .handler")
            .eq(i)
            .find(".t-tip")
            .text(err);
        $("#signupbox .handler")
            .eq(i)
            .find(".t-tip")
            .addClass("show");
    }

    function checkName(name = "", sel) {
        return /\w+\s+\w+/.test($(sel).val());
    }

    function checkIfElementNotExist(elmtID) {
        return document.getElementById(elmtID) == undefined;
    }
});