//== Class Definition
var SnippetLogin = function() {

    var login = $('#m_login');

    var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="m-alert m-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
            <span></span>\
        </div>');

        form.find('.alert').remove();
        alert.prependTo(form);
        //alert.animateClass('fadeIn animated');
        mUtil.animateClass(alert[0], 'fadeIn animated');
        alert.find('span').html(msg);
    }

    //== Private Functions

    var displaySignInForm = function() {
        login.removeClass('m-login--forget-password');

        login.addClass('m-login--signin');
        mUtil.animateClass(login.find('.m-login__signin')[0], 'flipInX animated');
        //login.find('.m-login__signin').animateClass('flipInX animated');
    }

    var displayForgetPasswordForm = function() {
        login.removeClass('m-login--signin');

        login.addClass('m-login--forget-password');
        //login.find('.m-login__forget-password').animateClass('flipInX animated');
        mUtil.animateClass(login.find('.m-login__forget-password')[0], 'flipInX animated');

    }

    var handleFormSwitch = function() {
        $('#m_login_forget_password').click(function(e) {
            e.preventDefault();
            displayForgetPasswordForm();
        });

        $('#m_login_forget_password_cancel').click(function(e) {
            e.preventDefault();
            displaySignInForm();
        });
    }

    var handleSignInFormSubmit = function() {
        $('#m_login_signin_submit').click(function(e) {
            $(this).addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
            $(this).closest('form').submit();
        });

    }

    var handleForgetPasswordFormSubmit = function() {
        $('#m_login_forget_password_submit').click(function(e) {
            e.preventDefault();

            var btn = $(this);
            var form = $(this).closest('form');

            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

            axios
                .post('/password/email', {
                    email: $('#m_email').val()
                })
                .then(function(response) {
                    form.clearForm(); // clear form

                    // display signup form
                    displaySignInForm();
                    var signInForm = login.find('.m-login__signin form');
                    signInForm.clearForm();

                    showErrorMsg(signInForm, 'success', 'Cool! Password recovery instructions have been sent to your email.');
                    btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                })
                .catch(function(response) {
                    console.log(response);
                    form.clearForm();
                    showErrorMsg(form, 'danger', 'Something went wrong!');
                    btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                });
        });
    }

    //== Public Functions
    return {
        // public functions
        init: function() {
            handleFormSwitch();
            handleSignInFormSubmit();
            handleForgetPasswordFormSubmit();
        }
    };
}();

//== Class Initialization
jQuery(document).ready(function() {
    SnippetLogin.init();
});
