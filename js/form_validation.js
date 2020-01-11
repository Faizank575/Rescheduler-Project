'use strict';
var error_email_selector='#email-error';
var error_username_selector='#username-error';
var error_password_selector='#password-error';
var error_repeatpassword_selector='#repeat-password-error';
// Perform functions when form is submitted
$('#submitButton').on('submit', function(e) {
    // Check if the form was previously submitted
    if ($(this).hasClass('form-submitted')) {
      e.preventDefault(); // Prevent form from being submitted again
    } else {
      $(this).addClass('form-submitted'); // Add a class to identify form as being submitted already
      $('#username').attr('readonly', true); // Lock username field
      $('#email').attr('readonly', true); // Lock email field
      $('#submitButton').attr('disabled', true); // Lock submit button
    }
  });
  
  // Custom object to track if inputs are valid or not
  var formValid = {
    username: false, // Username field
    email: false, // Email field,
    password:false,
    repeatPassword:false
  };
  checkValidation();
  
  // Function to check if fields have passed validation
  function checkValidation() {
    // Check if username and email inputs are valid
    if (formValid.username && formValid.email && formValid.password && formValid.repeatPassword) {
      $('#submitButton').removeAttr('disabled'); // Allow submitting of form
    } else {
      $('#submitButton').attr('disabled', true); // Block form from being submitted
    }
  }
  
  $('#username').blur(function(){

    var username = $(this).val();
    $.ajax({
    url:'./includes/checkusername.php',
    method:"POST",
    data:{user_name:username},
    success:function(data)
    {
      if(data != '0')
      {
        msg(error_username_selector,'Username Already Taken');
        formValid.username=false;
        checkValidation();
      }
      else
      {
        formValid.username=true;
        checkValidation();
      }
    }
    })
  
  });

  $('#email').blur(function(){
    var email = $(this).val();
    $.ajax({
      url:'./includes/checkemail.php',
      method:"POST",
      data:{user_email:email},
      success:function(data)
      {
      if(data != '0')
      {
        msg(error_email_selector,'There exists an account with this email account');
        formValid.email=false;
        checkValidation();
      }
      else
      {
        formValid.email=true;
        checkValidation();
      }
    }
  })
  
  });

  $('#password-repeat').blur(function(){
    var password=$("#password").val();
    var repeatPassword=$(this).val();
    if(repeatPassword==password){
      hide(error_repeatpassword_selector);
      formValid.repeatPassword=true;
      checkValidation();
    }
      else
      {
        formValid.repeatPassword=false;
        msg(error_repeatpassword_selector,'Repeat Password must match');
        checkValidation();
      }
  
  });
  
  // Validation for Username input field
  $('#username').on('input', function() {
    var username = $(this).val(); 
    // Check if username has at least one charactar
    if (username.length < 1) {
      msg(error_username_selector,'This field is required.');
      formValid.username = false; 
      checkValidation(); 
    } else {
      hide(error_username_selector);
      formValid.username = true;
      checkValidation();
      var testExp = new RegExp(/^[a-zA-Z0-9]+$/); // Create regular expression to check against username input
      if (!testExp.test(username)) {
        msg(error_username_selector,'Must not have any special characters');
        formValid.username = false;
        checkValidation(); 
      } else {
        hide(error_username_selector);
        formValid.username = true; 
        checkValidation(); 
        if (username.length < 8 || username.length > 20) {
          msg(error_username_selector,'Must be at least 8 characters but no more than 20');
          formValid.username = false;
          checkValidation();
        } else {
          hide(error_username_selector);
          formValid.username = true; 
          checkValidation(); 
        }
      }
    }
  });

  $('#password').on('input', function() {
    var password = $(this).val(); 
    // Check if password has at least one charactar
    if (password.length < 1) {
      msg(error_password_selector,'This field is required.');
      formValid.password = false; 
      checkValidation(); 
    } else {
      hide(error_password_selector);
      formValid.password = true; 
        if (password.length < 8 || password.length > 20) {
          msg(error_password_selector,'Must be at least 8 characters but no more than 20');
          formValid.password = false;
          checkValidation();
        } else {
          hide(error_password_selector);
          formValid.password = true; 
          checkValidation(); 
        }
      }
  });
  
  // Validation for E-mail Input
  $('#email').on('input', function() {

    var email = $(this).val(); // Assign input value to a variable
  
    // Check if e-mail value is at least 1 character
    if (email.length < 1) {
      msg(error_password_selector,'This field is required.'); // Assign error message to DOM.
      formValid.email = false; // Set input as invalid
      checkValidation(); 
    } else {
      hide(error_email_selector);
      formValid.email = true; 
      checkValidation(); 
      var testExp = new RegExp(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/); // Regular Expression to test against e-mail value
      // Check if e-mail value passes regular expression test
      if (!testExp.test(email)) {
        msg(error_email_selector,'Must be a valid e-mail'); 
        formValid.email = false; // Set input as invalid
        checkValidation(); 
    } else {
        hide(error_email_selector);
        formValid.email = true; // Set input as invalid
        checkValidation(); 
        // Check if e-mail value meets length requirements
        if (email.length < 8 || email.length > 30) {
            msg(error_email_selector,'Must be at least 8 characters but no more than 30');
            formValid.email = false; // Set input as invalid
            checkValidation(); 
  
        } else {
            hide(error_email_selector);
            formValid.email = true; 
            checkValidation(); 
        }
    }
    }
});


  // Function to set a custom message
  function msg(selector,body) {
    $(selector).text(body).show(); // Set message inside paragraph element and show it in DOM
  };

  // Function to hide paragraph tag
  function hide(selector) {
    $(selector).hide(); // Hide username validation messages
  };
