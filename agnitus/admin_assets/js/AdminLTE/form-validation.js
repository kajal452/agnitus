
$(function() {
  $("#add_hospital").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true
      },
      contact: {
        required: true,
        number: true
      },
       logo: {
        required:true,
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      opening_time:{
        required:true,
      },
      closing_time:{
        required:true,
      },
      description:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email",
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only",
      },
       logo: {
        required:"Please select logo ",
      },
      address:{
        required:"Please enter address",
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only",
      },
      opening_time:{
        required:"Please select opening time",
      },
      closing_time:{
        required:"Please select closing time",
      },
      description:{
        required:"Please enter discription",
      }
  }
  });

  $("#edit_hospital").validate({
    rules: {
      name: {
        required:true,
      },
      owner_name: {
        required:true,
      },
      email: {
        required: true,
        email: true
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      lab_facility: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      owner_name: {
          required: "Please enter owner name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      lab_facility:{
        required:"Please select Lab Facility"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////Add LAB //////////////

  $("#add_lab").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true,
        remote: {
          url: "admin/check_email_exist_validation",
          type: "post"
        }
      },
      password: {
        required: true,
        minlength: 5
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      // 'tests[]':{
      //   required:true,
      // },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email",
        remote: "Email Already Exist!"
      },
      password:{
        required: "Please enter password",
        minlength: "Your password must be at least 5 characters long"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },

      description:{
        required:"Please enter discription",
      },
      //  'tests[]':{
      //   required:"Please select at least one test",
      // },
      information:{
        required:"Please enter Other Information"
      }
  }
  });




  ////////////////////add_stocl//////////////////////////
    $("#add_stock").validate({
    rules: {
      quantity: {
        required:true,
        number:true,
      },
      note:{
        required:true,

      }
    },
    messages: {
      quantity: {
        required:"Please enter Quantity",
        number:"Please enter valid quantity",
      },
      note:{
        required:"Please enter note",
      }
  }
  });


///////////////////edit stock///////////////

$("#edit_stock_data").validate({
    rules: {
      quantity: {
        required:true,
        number:true,
      },
      note:{
        required:true,
      }
    },
    messages: {
      quantity: {
        required:"Please enter Quantity",
        number:"Please enter valid quantity",
      },
      note:{
        required:"Please enter note",
      }
  }
  });

///////////Add LAB //////////////
///////////EDIT LAB //////////////
  $("#edit_lab_1").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////EDIT LAB //////////////
//////////// ADD DOCTOR /////////////


  $("#add_doctor_1").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true,
        remote: {
          url: "admin/check_email_exist_validation",
          type: "post"
        }
      },
      password: {
        required: true,
        minlength: 5
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email",
        remote: "Email Already Exist!"
      },
      password:{
        required: "Please enter password",
        minlength: "Your password must be at least 5 characters long"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////Add DOCTOR //////////////
///////////EDIT DOCTOR //////////////
  $("#edit_doctor_1").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////EDIT DOCTOR //////////////


////////////  ADD Pharmacy ////////////


  $("#add_pharmacy").validate({
    rules: {
      name: {
        required:true,
      },
      owner_name: {
        required:true,
      },
      email: {
        required: true,
        email: true,
        remote: {
          url: "admin/check_email_exist_validation",
          type: "post"
        }
      },
      password: {
        required: true,
        minlength: 5
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      owner_name: {
          required: "Please enter owner name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email",
        remote: "Email Already Exist!"
      },
      password:{
        required: "Please enter password",
        minlength: "Your password must be at least 5 characters long"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////Add Pharmacy //////////////
///////////EDIT Pharmacy //////////////
  $("#edit_pharmacy").validate({
    rules: {
      name: {
        required:true,
      },
      owner_name: {
        required:true,
      },
      email: {
        required: true,
        email: true
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      owner_name: {
          required: "Please enter owner name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////EDIT Pharmacy //////////////


///////////// ADD POLICE ////////////



  $("#add_police").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true,
        remote: {
          url: "admin/check_email_exist_validation",
          type: "post"
        }
      },
      password: {
        required: true,
        minlength: 5
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email",
        remote: "Email Already Exist!"
      },
      password:{
        required: "Please enter password",
        minlength: "Your password must be at least 5 characters long"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////Add POLICE //////////////
///////////EDIT POLICE //////////////
  $("#edit_police").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////EDIT POLICE //////////////





//////////// Add Fire BRIGADE /////////////


  $("#add_firebrigade").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true,
        remote: {
          url: "admin/check_email_exist_validation",
          type: "post"
        }
      },
      password: {
        required: true,
        minlength: 5
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email",
        remote: "Email Already Exist!"
      },
      password:{
        required: "Please enter password",
        minlength: "Your password must be at least 5 characters long"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////Add Fire Brigade //////////////
///////////EDIT Fire Brigade //////////////
  $("#edit_firebrigade").validate({
    rules: {
      name: {
        required:true,
      },
      email: {
        required: true,
        email: true
      },
      contact_person: {
        required: true
      },
      contact: {
        required: true,
        number: true
      },
      emergency_service: {
        required: true
      },
      address:{
        required:true,
      },
      pincode:{
        required:true,
        number:true
      },
      description:{
        required:true,
      },
      information:{
        required:true,
      }
    },
    messages: {
      name: {
          required: "Please enter name",
      },
      email:{
        required: "Please enter email",
        email : "Please enter valid email"
      },
      contact: {
        required: "Please enter contact number",
        number: "please enter digit only"
      },
      contact_person: {
        required: "Please enter contact person"
      },
      emergency_service:{
        required:"Please select emergency service"
      },
      address:{
        required:"Please enter address"
      },
      pincode:{
        required:"Please enter pincode",
        number:"Please enter digit only"
      },
      description:{
        required:"Please enter discription"
      },
      information:{
        required:"Please enter Other Information"
      }
  }
  });

///////////EDIT Fire BRIGADE //////////////

////////////// ADD SPECIALTY TYPE //////////

  $("#add_specialty_type").validate({
    rules: {
      type: {
        required:true
      },
      name: {
        required: true
      }
    },
    messages: {
      type: {
          required: "Please select specialty type"
      },
      name:{
        required: "Please enter name"
      }
  }
  });


////////////// ADD SPECIALTY TYPE //////////
////////////// EDIT SPECIALTY TYPE //////////

  $("#edit_specialty_type").validate({
    rules: {
      type: {
        required:true
      },
      name: {
        required: true
      }
    },
    messages: {
      type: {
          required: "Please select specialty type"
      },
      name:{
        required: "Please enter name"
      }
  }
  });


////////////// EDIT SPECIALTY TYPE //////////
////////////// ADD OPD TYPE //////////

  $("#add_opd_type").validate({
    rules: {
      type: {
        required:true
      },
      name: {
        required: true
      }
    },
    messages: {
      type: {
          required: "Please select opd type"
      },
      name:{
        required: "Please enter name"
      }
  }
  });


////////////// ADD OPD TYPE //////////
////////////// EDIT OPD TYPE //////////

  $("#edit_opd_type").validate({
    rules: {
      type: {
        required:true
      },
      name: {
        required: true
      }
    },
    messages: {
      type: {
          required: "Please select opd type"
      },
      name:{
        required: "Please enter name"
      }
  }
  });


////////////// EDIT OPD TYPE //////////
////////////// ADD DEPARTMENT TYPE //////////

  $("#add_department_type").validate({
    rules: {
      type: {
        required:true
      },
      name: {
        required: true
      }
    },
    messages: {
      type: {
          required: "Please select department type"
      },
      name:{
        required: "Please enter name"
      }
  }
  });


////////////// ADD DEPARTMENT TYPE //////////
////////////// EDIT DEPARTMENT TYPE //////////

  $("#edit_department_type").validate({
    rules: {
      type: {
        required:true
      },
      name: {
        required: true
      }
    },
    messages: {
      type: {
          required: "Please select department type"
      },
      name:{
        required: "Please enter name"
      }
  }
  });


////////////// EDIT DEPARTMENT TYPE //////////

////////////// ADD FACILITY TYPE //////////

  $("#add_facility_type").validate({
    rules: {
      type: {
        required:true
      },
      name: {
        required: true
      }
    },
    messages: {
      type: {
          required: "Please select facility type"
      },
      name:{
        required: "Please enter name"
      }
  }
  });

////////////// ADD FACILITY TYPE //////////

////////////// EDIT FACILITY TYPE //////////

  $("#edit_facility_type").validate({
    rules: {
      type: {
        required:true
      },
      name: {
        required: true
      }
    },
    messages: {
      type: {
          required: "Please select facility type"
      },
      name:{
        required: "Please enter name"
      }
  }
  });

////////////// EDIT FACILITY TYPE //////////

   $("#add_product").validate({
      rules: {
      product_name: {
        required:true,
      },
      product_image: {
        required:true,
      },
      product_code: {
        required: true,
        remote: 
        {
          url: base_url+"pharmacy_inventory/check_product_code_exist",
          type: "post"
        }
      },
      product_manufacturer: {
        required: true,
      },
      product_type: {
        required:true,
      },
      procuct_stock: {
        required:true,
        number:true,
      },
      product_drug_info:{
        required:true,
      },

      purchase_price: {
        required:true,
        number:true,
      },
      selling_price:{
        required:true,
        number:true,
      },

      // start changes 

     
      // product_storage:{
      //   required:true,
      // },
      product_detail:{
        required:true,
      },
      // product_directions_for_use:{
      //   required:true,
      // },
      // product_key_ingreients:{
      //   required:true,
      // },
      // product_indications:{
      //   required:true,
      // },
      product_description:{
        required:true,
      },
      product_highlights:{
        required:true,
      },





    },
    messages: {
      product_name: {
        required:"Please enter product name",
      },
       product_image: {
        required:"Please select product Image",
      },
      product_code: {
        required: "Please enter product code",
        remote: "Product code already exists"
      },
      product_manufacturer: {
        required: "Please enter product manufacturer",
      },
       product_type: {
        required:"Please select product type",
      },
      product_stock: {
        required:"Please enter product stock",
        number:"Plese enter only digit",
      },
      product_drug_info:{
        required:"Please enter product drug info",
      },
      purchase_price: {
        required:"Please enter purchase price",
        number:"Please enter only digit",
      },
      selling_price:{
        required:"Please enter selling price",
        number:"Please enter only digit",
      },



      // product_storage:{
      //   required:"Please enter about storage",
      // },
      product_detail:{
        required:"Please enter product detail",
      },
      // product_directions_for_use:{
      //   required:"Please enter directions of use",
      // },
      // product_key_ingreients:{
      //   required:"Please enter key ingreients",
      // },
      // product_indications:{
      //   required:"Please enter indications",
      // },
      product_description:{
        required:"Please enter description",
      },
      product_highlights:{
        required:"Please enter highlights",
      },
  },
});


 $("#edit_product").validate({
      rules: {
      product_name: {
        required:true,
      },
      product_code: {
        required: true,
        // remote: 

        // {
        //   url: base_url+"pharmacy_inventory/check_product_code_exist",
        //   type: "post"

        // }
        
      },
      product_manufacturer: {
        required: true,
       
      },
       product_type: {
        required:true,
      },
      procuct_stock: {
        required:true,
        number:true,
      },
      product_drug_info:{
        required:true,
      },

      purchase_price: {
        required:true,
        number:true,
      },
      selling_price:{
        required:true,
        number:true,
      },
        product_storage:{
        required:true,
      },
      product_detail:{
        required:true,
      },
      // product_directions_for_use:{
      //   required:true,
      // },
      // product_key_ingreients:{
      //   required:true,
      // },
      // product_indications:{
      //   required:true,
      // },
      product_description:{
        required:true,
      },
      product_highlights:{
        required:true,
      },

    },
    messages: {
      product_name: {
        required:"Please enter product name",
      },
      product_code: {
        required: "Please enter product code",
        // remote: "Product code already exists"
      },
      product_manufacturer: {
        required: "Please enter product manufacturer",
      },
       product_type: {
        required:"Please select product type",
      },
      product_stock: {
        required:"Please enter product stock",
        number:"Plese enter only digit",
      },
      product_drug_info:{
        required:"Please enter product drug info",
      },
      purchase_price: {
        required:"Please enter purchase price",
        number:"Please enter only digit",
      },
      selling_price:{
        required:"Please enter selling price",
        number:"Please enter only digit",
      },
      //  product_storage:{
      //   required:"Please enter about storage",
      // },
      product_detail:{
        required:"Please enter product detail",
      },
      // product_directions_for_use:{
      //   required:"Please enter directions of use",
      // },
      // product_key_ingreients:{
      //   required:"Please enter key ingreients",
      // },
      // product_indications:{
      //   required:"Please enter indications",
      // },
      product_description:{
        required:"Please enter description",
      },
      product_highlights:{
        required:"Please enter highlights",
      },
  },
});





  $("#add_test_form").validate({
      rules: {
     
      test_name: {
        required: true,
        
      },
    },
    messages: {
      test_name: {
        required:"Please enter test name",
       
      },
  },
});

  $("#add_lab_test_form").validate({
      rules: {
     
      test_name: {
        required: true,
      },
      test_price: {
        required: true,
        number: true,
      },
    },
    messages: {
      test_name: {
        required:"Please enter test name",
      },
      test_price: {
        required:"Please enter price ",
        number: "Please enter digit only",
      },
  },
});








 
});



