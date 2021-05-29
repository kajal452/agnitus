$(function() {
// covid vaccination slot
$("#appointment_date").datepicker({defaultDate: new Date(),
 minDate:+1,
  onSelect: function(dateText){
  var date_val = this.value;
  document.getElementById('appointment_date').value = date_val;
  var hospital_id = $('#hospital_id').val();
  var mainUrl    = base_url+"Plans/getTimeSlotByDate";
      $.ajax({
            method: 'GET',
            url: mainUrl,
            data: {
                date_val: date_val,
                hospital_id:hospital_id
            },
            dataType: 'json',
            success: function(data) { 
        if(data.success == 1){
    $('#time_slot_list').html(data.all_slot_info);
    }else{
    $('#time_slot_list').html("Sorry, no time slot is available.");   
    }

     }
    });


}
 });
//end

      $("form[name='verification_form']").validate({

          // Specify validation rules
          rules: {
           
            otp1: "required",
            otp2: "required",
            otp3: "required",
            otp4: "required",
            otp5: "required",
          },
          // Specify validation error messages
          messages: {

           
            otp1: "Please Enter full O.T.P.",
            otp2: "Please Enter full O.T.P.",
            otp3: "Please Enter full O.T.P.",
            otp4: "Please Enter full O.T.P.",
            otp5: "Please Enter full O.T.P."
          },
          // Make sure the form is submitted to the destination defined
          // in the "action" attribute of the form when valid
          submitHandler: function(form) {
            form.submit();
          }
      });



      $("#send_link").validate({
         rules: {
          email: {
             required: true,
             email: true,
             remote: {
                url: "user_signup/check_email_exist_forget",
                type: "post"
               }

            }
          },
        
         messages: {
          email: {
            required: "Please provide email address",
            email : "Please enter valid email address",
            remote : "Email id not Exist"
          }
          },
      });

       $("#covid_hospital_appointment").validate({
         rules: {
          appointment_date: {
             required: true,

            }
          },
        
         messages: {
          appointment_date: {
            required: "Please select date",
           
          }
          },
      });


      $("form[name='loginForm']").validate({

          // Specify validation rules
          rules: {
            loginMob:{
              required: true,
               number: true,
               remote: {
                url: "login/check_number_exist",
                type: "post"
               }
            },
            loginpass: {
              required: true,
              minlength: 5
            }
          },
          // Specify validation error messages
          messages: {

            loginMob: {
              required: "Please provide a mobile number",
              number: "Please provide a valid number",
              remote: "Mobile Number Not Exist!"
            },
            loginpass: {
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




      $("form[name='loginFormemail']").validate({

          // Specify validation rules
          rules: {
            loginEmail:{
              required: true,
               email: true,
               remote: {
                url: "login/check_email_exist",
                type: "post"
               }
            },
            loginEmailpass: {
              required: true,
              minlength: 5
            }
          },
          // Specify validation error messages
          messages: {

            loginEmail: {
              required: "Please provide a Email Id",
              number: "Please provide a valid Email id",
              remote: "Email Id  Not Exist!"
            },
            loginEmailpass: {
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









      $("form[name='loginFormCheckout']").validate({
         // Specify validation rules
          rules: {
            loginMob:{
              required: true,
              // Specify that email should be validated
              // by the built-in "email" rule
               number: true,
               remote: {
                url: "login/check_numbers_exist",
                type: "post"
               }
            },
            loginpass: {
              required: true,
              minlength: 5
            }
          },
          // Specify validation error messages
          messages: {

            loginMob: {
              required: "Please provide a mobile number",
              number: "Please provide a valid number",
              remote: "Mobile Number Not Exist!"
            },
            loginpass: {
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
      // Login Form

      $("form[name='registration']").validate({
          rules: {
            firstname: {
              required:true
            
            },
            mobile_number:{
              required: true,
               number: true,
               remote: {
                url: "user_signup/check_number_exist",
                type: "post"
               }
            },
             email: {
              required: true,
              email: true,
               remote: {
                url: "user_signup/check_email_exist",
                type: "post"
               }
            },
            
            password: {
              required: true,
              minlength: 5
            },
            getAddress: {
              required: true,
             
            }
          },
          messages: {
            firstname: {
              required:"Please enter your firstname"
            
            },
            mobile_number: {
              required: "Please provide a mobile number",
              number: "Please provide a valid number",
              remote: "Mobile Number already in use!"
            },
             email: {
              required: "Please provide a email Id",
              email: "Please provide a valid email",
               remote: "Email Id already in use"       
             },
            password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 5 characters long"
            },
            getAddress: {
              required: "Please provide address",
             
            }
          },
          submitHandler: function(form) {
           var lat = $('#lat').val();
            if(lat != ''){


            form.submit();

            }else{
                botbox.alert("Please valid address");
              return false;
            }


          }
      });
      $("form[name='add_user_address']").validate({
          rules: {
            address: {
              required:true,
            },
            address1:{
              required: true,
            },
            landmark: {
              required: true,
            },
            pincode: {
              required: true,
            },
            type: {
              required: true,
            },
            dname: {
              required: true,
            },
            dmobile: {
              required: true,
              number:true,
            }
          },
          messages: {
             address: {
              required:"Please enter flat no./ house no.",
            },
            address1:{
              required: "Please enter address",
            },
            landmark: {
              required: "Please enter landmark",
            },
            pincode: {
              required: "Please enter pincode",
            },
            type: {
              required: "Please select address type",
            },
            dname: {
              required: "Please enter name",
            },
            dmobile: {
              required: "Please enter mobile number",
              number:"Please enter digit only",
            }
          },
          submitHandler: function(form) {
            form.submit();
          }
      });
      $("form[name='add_test_form']").validate({
          rules: {
            test_name: {
              required:true,
              
            }
          },
          messages: 
          {
            test_name: 
            {
              required:"Please test name",
             
            }
          },
          submitHandler: function(form) {
            // form.submit();
          }
      });
      $("form[name='lab_appointment']").validate({
          rules: {
            date: {
              required:true,
            },
            'test_name[]':{
              required:true,
            },
            file:{
              required:true,
              extension: "JPG|JPEG|PNG|PDF",
            }
          },
          messages: 
          {
            date: {
              required:"Please select date",
            },
            'test_name[]':{
              required:"Please select test name",
            },
            file:{
              required:"Please select prescription",
              extension: "Please upload on formate JPG,JPEG,PNG, PDF only",
            }
          },
          submitHandler: function(form) 
          {
                  $('.drbookapnt2').hide();                 
                   $('.drbookapnt2ss').show();
                  var mainUrl = base_url+"Labs/lab_appointment";             
                  event.preventDefault();
                  $.ajax({
                           url: mainUrl,
                           type: 'POST',
                           data: new FormData(form),
                           mimeType: "multipart/form-data",
                           contentType: false,
                           cache: false,
                           processData: false,
                           dataType:'json',
                           success: function(response)
                           {
                                   $('.drbookapnt2ss').show();                 
                                 bootbox.alert(response.message);
                                  var redirect_url = base_url+"my_account/my_appointment/2";
                                  window.setTimeout(function() {
                                      window.location.href = redirect_url;
                                  }, 2000);
                              

                           }
                       });
          }
      });
      $("form[name='doctor_appointment']").validate({
          rules: {
            note: {
              required:true,
            },
            appointment_date:{
             required:true, 
            }
          },
          messages: {
             note: {
              required:"Please enter note",
            },
            appointment_date:{
             required:"Please select date", 
            }
          },
          submitHandler: function(form) 
          {
                    $('.drbookapnt2').hide();                 
                    $('.drbookapnt2ss').show();   
                    var mainUrl = base_url+"doctors/doctor_appointment";               
                    event.preventDefault();
                   $.ajax({
                           url: mainUrl,
                           type: 'POST',
                           data: new FormData(form),
                           mimeType: "multipart/form-data",
                           contentType: false,
                           cache: false,
                           processData: false,
                           dataType:'json',
                           success: function(response)
                           {
                              if(response.status == '1'){
                                  $('.drbookapnt2ss').show();  
                                  bootbox.alert("Appointment booked successfully");
                                  var redirect_url = base_url+"doctors/confirm_appointment/"+response.appointment_id;
                                  window.setTimeout(function() {
                                      window.location.href = redirect_url;
                                  }, 2000);
                              }
                            }
                       });
          }
      });
      $("form[name='hospital_appointment']").validate({
          rules: {
            speciality: {
              required:true,
            },
            note: {
              required:true,
            },
            appointment_date:{
             required:true, 
            },
            // doctors:{
            //  required:true, 
            // }
          },
          messages: {
            speciality: {
              required:"Please select speciality",
            },
             note: {
              required:"Please enter symptoms",
            },
            appointment_date:{
             required:"Please select date", 
            },
            // doctors:{
            //  required:"Please select doctor", 
            // }
          },
          submitHandler: function(form)
          {
                    $('.drbookapnt2').hide();                 
                    $('.drbookapnt2ss').show(); 
                  var role_user_id = $('#hospital_id').val();
                  var mainUrl = base_url+"hospital/hospital_appointment/"+role_user_id;             
                  event.preventDefault();
                  $.ajax({
                           url: mainUrl,
                           type: 'POST',
                           data: new FormData(form),
                           mimeType: "multipart/form-data",
                           contentType: false,
                           cache: false,
                           processData: false,
                           dataType:'json',
                           success: function(response)
                           {
                              if(response.status == '1')
                              {
                                if(response.fee == 0 || response.fee == ''){
                                   bootbox.alert("Appointment booked successfully");
                                  var redirect_url = base_url+"hospital/confirm_appointment/"+response.appointment_id;
                                  window.setTimeout(function() 
                                  {
                                    window.location.href = redirect_url;
                                  }, 2000);
                                }else{
                                  var redirect_url = base_url+"hospital/PaymentMethod/"+response.appointment_id +'/'+ response.role_user_id;
                                   window.location.href = redirect_url; 
                                }
                                 
                              }
                          }
                       });
            }
      });
      $("form[name='lab_appointment']").validate({
          rules: {
            date: {
              required:true,
            }
          },
          messages: {
             date: {
              required:"Please select date",
            }
          },
      });
      $("form[name='upload_prescription']").validate({
          rules: {
            prescription: {
              required:true,
              extension: "JPG|JPEG|PNG|PDF",
            }
          },
          messages: {
             prescription: {
              required:"Please upload prescription",
              extension: "Please select following formate JPG|JPEG|PNG|PDF",
            }
          },
          submitHandler: function(form) 
          {
                var mainUrl = base_url+"Pharmacy/upload_prescription";             
                    event.preventDefault();
                   $.ajax({
                           url: mainUrl,
                           type: 'POST',
                           data: new FormData(form),
                           mimeType: "multipart/form-data",
                           contentType: false,
                           cache: false,
                           processData: false,
                           dataType:'json',
                           success: function(response)
                           {
                            
                             $('#check_out_form').attr('style', 'display:block;');
                             $('#prescription_div').attr('style', 'display:none;');
                             $("#upload_prescription")[0].reset()
                             $("#prescription_image").val(response.name);
                            $('#prescription_div').empty();
                            var image_path = base_url+"upload/pharmacy/prescription_image/"+response.name+"";
                             if(response.name != ''){
                             $('#show_prescription_img').append('<img src="'+image_path+'" height="150" width="225" class="img-thumbnail" />');
                           }
                            $("#upload_prescription_button").text('');
                            $("#upload_prescription_button").text('Upload done');
                             $('#prescription_div').append('<button class="paymentbtn">Uploaded</button>');
                             
                             

                           }
                       });
              }
      });




      $("form[name='add_sub_user']").validate({
          rules: {
            name: {
              required:true,
            },
            phone: {
              required:true,
              number:true,
               remote: {
                url: base_url+"login/check_number_exist_phone",
                type: "post"
               }
            },
            email: {
              required:true,
              email: true,
              remote: {
                url: base_url+"login/check_email_exist_email",
                type: "post"
               }
            },
            dob: {
              required:true,
             
            }
          },
          messages: {
              name: {
              required:'Please enter user name',
            },
            phone: {
              required:'Please enter contact number',
              number:'Please enter valid number',
               remote: 'Mobile number already Exist',
            },
            email: {
              required:'Please enter email id',
              email: 'Please enter valid email',
              remote: 'Email Id already Exist',
            },
            dob: {
              required:'Please select date of birth',
             
            }
          },
         
      });


  
  ///change password
   $('#change_password_form').validate({

    rules:{

              currentpassword:
              {
                  required: true,
                 
              },
              newpassword:
              {
                  required: true,
                 
              },
              confirmpassword:
              {
                  required: true,
                 
              },
           },

    messages:{

              currentpassword:

              {

                required: "Please enter current password",

              },
              newpassword:

              {

                required: "Please enter new password",

              },
              confirmpassword:

              {

                required: "Please enter confirm password",

              },

             

            },

            submitHandler: function(form) 
            { 

        var currentpassword = document.getElementById('currentpassword').value;
        var user_id_val = document.getElementById('user_id_val').value;
        var newpassword = document.getElementById('newpassword').value;
        var confirmpassword = document.getElementById('confirmpassword').value;
         var sendData = {
          currentpassword :currentpassword,
          user_id_val:user_id_val,
          newpassword :newpassword,
          confirmpassword:confirmpassword
           };

            var mainurl = base_url+"Settings/changePassword";
                  event.preventDefault();

              $.ajax({

                    url: mainurl,
                    method: "POST",
                    data:sendData,
                    dataType: 'json',

                      success: function(response)
                      {
                      if(response.status == '1')
                               {
                              
                                $("#password_msg").html("<span style='color:green'>your password is updated</span>"); 
                               }else if(response.status == '0'){

                                  $("#password_msg").html("<span style='color:red'>password not updated</span>"); 
                               }else{
                                $("#password_msg").html("<span style='color:red'>new and re-enter password does not match</span>"); 

                               }
                      }

                  });
                }

  });
  
  ///forgot password otp send

  $('#forgot_password_otpform').validate({

    rules:{

              user_email_mob:
              {
                  required: true,
                 
              },
           },

    messages:{

              user_email_mob:

              {

                required: "Please enter Email/Mobile",

              },

             

            },

            submitHandler: function(form) 
            { 

              var mainUrl = base_url+"Login/forgotPasswordOtp";
              var user_email_mob = document.getElementById('user_email_mob').value;

              event.preventDefault();

              $.ajax({

                    url: mainUrl,
                    method: "POST",
                    data:{user_email_mob:user_email_mob},
                    dataType: 'json',

                      success: function(response)
                      {
                       if(response.status == '1'){
                          $("#otp_msg").html("<span style='color:green'>OTP is send</span>"); 
                        //   localStorage.setItem('customer_id',response.customer_id );
                            var redirect_url = base_url+"Login/otpVerifyPage";
                             window.location.href = redirect_url;
                       }else{
                          $("#otp_msg").html("<span style='color:red'>Your data is not exit into database</span>"); 
                       }
                      }

                  });
                }

  });
  
  //forgot password change
    $('#forgot_password_form').validate({

    rules:{

              newpassword:
              {
                  required: true,
                 
              },
              confirmpassword:
              {
                  required: true,
                 
              },
              
           },

    messages:{

              newpassword:

              {

                required: "Please enter new password",

              },
              confirmpassword:

              {

                required: "Please enter confirm password",

              },
             

            },

            submitHandler: function(form) 
            { 
        var newpassword = document.getElementById('newpassword').value;
        var confirmpassword = document.getElementById('confirmpassword').value;
         var sendData = {
          newpassword :newpassword,
          confirmpassword:confirmpassword
           };

            var mainurl = base_url+"Login/forgotPassword";
                  event.preventDefault();

              $.ajax({

                    url: mainurl,
                    method: "POST",
                    data:sendData,
                    dataType: 'json',

                      success: function(response)
                      {
                      if(response.status == '1')
                               {
                                  
                                $("#change_pass_msg").html("<span style='color:green'>your password is updated</span>"); 
                               }else if(response.status == '0'){

                                  $("#change_pass_msg").html("<span style='color:red'>password not updated</span>"); 
                               }else{
                                $("#change_pass_msg").html("<span style='color:red'>new and re-enter password does not match</span>"); 

                               }  
                      }

                  });
                }

  });
 
 
 $("form[name='pay_others_form']").validate({

          rules: {
            user_name:{
              required: true,
             
            },
            mobile_number: {
              required: true,
              rangelength: [10, 10],
              number: true,
              remote: {
                url: base_url+"Pay_Others/checkMobileNoExist",
                type: "post"
               }
            }
          },
          messages: {

            user_name: {
             required: "Please enter username",
            },
            mobile_number: {
             required: "Please enter mobile number",
             number: "Please enter digit only",
             rangelength:"Please enter valid mobile number",
             remote: "Your Mobile is not registered",
            }
          },
         
          submitHandler: function(form) {
            form.submit();
          }
      }); 
      
      //insert payment method
       $("form[name='payment_method_form']").validate({

          rules: {
            paymentoption:{
              required: true,
             
            },
            
          },
          messages: {

            paymentoption: {
             required: "Please Select Payment Method",
            },
            
          },
         
          submitHandler: function(form) {
            form.submit();
          }
      }); 
      
       // payment method
       $("form[name='payment_method']").validate({

          rules: {
            paymentoption:{
              required: true,
             
            },
            
          },
          messages: {

            paymentoption: {
             required: "Please Select Payment Method",
            },
            
          },
         
          submitHandler: function(form) {
            form.submit();
          }
      }); 

       // hospital registration
       $("#hospital_registration").validate({
         rules: {

           hospital_name:{
              required: true,
             
            },
             hospital_address:{
              required: true,
            },

            hospital_size:{
              required: true,
            },

            email: {
              required: true,
              email: true,
               remote: {
                url: "../user_signup/check_email_exist",
                type: "post"
               }
            },
          
            hospital_password:{
              required: true,
            },
            
            hospital_confirm_password: {
              equalTo: "#hospital_password"
            }

          },
        
         messages: {

          hospital_name: {
             required: "Please Enter hospital name",
            },
          hospital_address: {
             required: "Please Enter hospital address",
            },
          hospital_size: {
             required: "Please select hospital size",
            },
          email: {
              required: "Please provide a email Id",
              email: "Please provide a valid email",
               remote: "Email Id already in use"       
             },
          hospital_password: {
             required: "Please enter password",
            },
          hospital_confirm_password: {
             required: "Please enter password",
            },
           confirmpassword: {
              equalTo: "Please enter the same value again."
            }

          },
      });


});


