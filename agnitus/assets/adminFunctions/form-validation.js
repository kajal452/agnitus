$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  

  $("form[name='adminLogin']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
     
      userid: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true,
        remote: {
          url: "admin/check_email_exist",
          type: "post"
         }
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      userid: {
        required: "Please provide a Email",
        email: "Please provide a valid Email",
        remote: "Email Not Exist....!!!!!"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });



});


