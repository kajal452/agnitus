	$('.mobbtn').click(function() {
		$('.mobleftslide').animate({left: '0', opacity: '1'});
		$('.bodyoverlay').show().animate({opacity: '0.7'});
		return false;
	});
	// Close Menu Trigger Function
	$('.closenav, .bodyoverlay').click(function() {
		$('.mobleftslide').animate({left: '-95%', opacity: '0'});
		$('.bodyoverlay').hide();
		return false;
	});
	
	// Open Filter
	$(".showmobfilter").click(function(){
		$(".mobfilter").show();
	});
	// Close Filter
	$(".filterclose").click(function(){
		$(".mobfilter").hide();
	});
	// Forget password clickable
	$(".logintab li a").click(function(){
		$(".logforgtpass").removeClass("active");
	});
	// signup clikable
	$(".logintab li a").click(function(){
		$(".drsignup").removeClass("active");
		$(".usersignup").removeClass("active");
	});
	$(".drsignup").click(function(){
		$(".usersignup").removeClass("active");
	})
	$(".usersignup").click(function(){
		$(".drsignup").removeClass("active");
	})
	//product category show 
	$(".productlinkhide").click(function(){
		$(".products_menu").slideToggle();
	});
	// Hide Login Menubar click on body section
	$(".welcome_name").click(function(e){
		e.stopPropagation();
		$(".myaccountlist").slideToggle();
	})
	$(document).click(function(){
		$(".myaccountlist").slideUp();
	});
	// Footer TAB on mobile 
	$( window ).on("load resize", function() {
	   if ($(window).width() >= 769) {  
       		$(".ftrtitle").attr("href", "2tic");
       }    

	})
	// Doctor Book Appointment
	$('.bookappointment').on('click', function() {
		
		$parent_box = $(this).closest('.docoters_img_box_btns');
		$parent_box.siblings().find('.hideshowbooking').hide();
		$parent_box.find('.hideshowbooking').slideToggle();
	});
	// Pharmacy Sub Menu
	$("ul.lefcategnav li").on('click', function(){
		//$(this).find("a i").attr('class', 'icon icon-angle-down');
		$("a i", this).toggleClass("icon icon-angle-down icon icon-angle-right");
	  	$(this).find('ul.leftproduct_submenu').slideToggle();
	})
	// on click show increase decrease value
	/*$(".proddetail_cartbtn, .addproduct_btn").click(function(){
		$(".prodquant").val("1");
		$("#showcartbtn").show();
		$("#hidecartbtn").hide();
		$(this).parent().find(".prodquant").val("1");
		$(this).parent().find("#showcartbtn").show();
		$(this).parent().find("#hidecartbtn").hide();
	});*/
	// Increase Product Value
	$(".increment").click(function(e){
		e.preventDefault();
		var $this = $(this);
		var $input = $this.closest('div').find('.prodquant');
		var value = parseInt($input.val());
		if (value < 100) {
  		value = value + 1;
		} else {
			value =100;
		}
		$input.val(value);
	});

	// Decrease Product Valuse
	$(".decrement").click(function(e){
		e.preventDefault();
		var $this = $(this);
		var $input = $this.closest('div').find('.prodquant');
		var value = parseInt($input.val());

		if (value > 1) {
			value = value - 1;
		} else {
			value = 1;

			$("#showcartbtn").hide();
			$("#hidecartbtn").show();

		}

    	$input.val(value);
	});
	// SMS Notification Setting | Notification hide all on check
	$("#disableallchk").click(function(){
		if($(this).is(":checked")) {
			$(".myacnotifiprgh1").removeClass("myacnotifiprghopct");
			$(".myacnotifichk").removeAttr('disabled');
		}
		else 
		{
			$(".myacnotifiprgh1").addClass("myacnotifiprghopct");
			$(".myacnotifichk").attr('disabled','disabled');
		}
	});
	// WhatsApp Notification Setting
	$("#unsubscribechoose").click(function(){
		if($(this).is(":checked")) {
			$(".unsublist").show();
		}
		else {
			$(".unsublist").hide();
		}
	})
	// Show Other reason Textarea
	$(".myacwhatunsbtn").click(function(){
		if($("#othersreason").is(":checked")) {
			$("#reasontextarea").show();
		}
		else {
			$("#reasontextarea").hide();	
		}
	})
	// WhatsApp Notification show and hide Unsubscribe list
	$("#whatsappnotifi").click(function(){
		if($(this).is(":checked")) {
			$("#unsubscribechoose").prop("checked",false);
			$(".unsublist").hide();
		}
	});
	// Uncheck whatsapp recevie notification click on unsubscribe entirely
	$("#unsubscribechoose").click(function(){
		if($(this).is(":checked")){
			$("#whatsappnotifi").prop("checked",false);
		}
	});
	// Show Password 
	$(".mypassicon").click(function(){
		$(".mypassicon > i").toggleClass("icon icon-eye-slash");
		if($("#currentpassword").attr("type")==("password")) {
			$("#currentpassword").attr("type","text");
		}
		else {
			$("#currentpassword").attr("type","password");	
		}
	});
	// Show New Password
	$(".mynewpassicon").click(function(){
		$(".mynewpassicon > i").toggleClass("icon icon-eye-slash");
		if($("#newpassword").attr("type")==("password")) {
			$("#newpassword").attr("type","text");
		}
		else {
			$("#newpassword").attr("type","password");	
		}
	});
	// Show Confirm Password
	$(".myconfrmpassicon").click(function(){
		$(".myconfrmpassicon > i").toggleClass("icon icon-eye-slash");
		if($("#confirmpassword").attr("type")==("password")) {
			$("#confirmpassword").attr("type","text");
		}
		else 
		{
			$("#confirmpassword").attr("type","password");	
		}
	});
	// Show Tab Navigation in mobile
	$(".moblisticon").click(function(){
		$(".mobmyactab").toggle(500);
	})
	// Submit form on button
	$( "#savechanges" ).click(function() {
  		$( "#prfiletarget" ).submit();
  		$( "#carttarget" ).submit();
	})
	// Accordion
	$('.accordlist').on('click', function() {
		$accord_box = $(this).closest('.accordbox');
		$accord_box.siblings().find('.accordesc').hide();
		$accord_box.find('.accordesc').slideToggle();
	});
	// Checkout Credit Card Option show
	$("#creditcard").click(function(){
		$("#cc").show();
		$("#cartnetbanking").hide();
		$("#cartcod").hide();
	})
	$("#netbanking").click(function(){
		$("#cartnetbanking").show();
		$("#cc").hide();
		$("#cartcod").hide();
	})
	$("#cod").click(function(){
		$("#cartcod").show();
		$("#cartnetbanking").hide();
		$("#cc").hide();
	})
	// My appointment button 
	$(".myappoint").css({"border-bottom":"2px solid #8279fe"});
	$(".myappoint").click(function(){
		$(this).css({"border-bottom":"2px solid #8279fe"});
		$(".labappoint").css({"border-bottom":"2px solid transparent"});
	})
	$(".labappoint").click(function(){
		$(this).css({"border-bottom":"2px solid #8279fe"});
		$(".myappoint").css({"border-bottom":"2px solid transparent"});
	})
	// Show autocomplete
	$(".homelocdet").keyup(function(e){
		e.stopPropagation();
		
		var keyword = $('.homelocdet').val();
			$.ajax({
		        url: base_url+"main/search",
		        method:"POST",
		        data:{keyword:keyword},
		        cache: false,
		        success:function(response)
		        {
		        	// console.log(response);
		        	$('#appned_search_data').empty();
		        	$('#appned_search_data').html(response);
		        	$(".autocompletebox").slideDown();
		          
		        }
		      })

	})
	$(document).click(function(){
		$(".autocompletebox").hide();	
		return false();
	})

	$(".autocomlist li").click(function () {
	    var number = $(this).data('number');
	    $(".homelocdet").val(number);
	   /* $(".homelocdet").val(function() {
	        return this.value + number;
	    });*/
	});
	
	/*$(".homelocdet").focusout(function(e){
		$(".autocompletebox").slideUp();
	})*/

	
	// My Appointment Current Pagination color
	/*$(function(){
		$(".current").css('color','#fff !important');
	})*/
	/*window.onload = function() {
	  document.getElementById('current').className = 'addpagcolr';
	};*/
	// Cart Price Value
	function showvalue(id) {
		var cartprice0 =  '#cartprice_'+id;
	   	var cartquantity0 = '#cartquantity_'+id;  
	   	var cartprice = $(cartprice0).val(); 
	   	var cartquantity = $(cartquantity0).val();  
	   	var total = cartprice * cartquantity;
		var showsubtotal0 = '#showsubtotal_'+id;
	   	var cartpricevalue0 = '#cartpricevalue_'+id;
	   	var cartsubtotal0 = '#cartsubtotal_'+id;
	   	var rowid_div = '#cartrowid_'+id;
	   	var rowid_dive = '#rowid_id_'+id; 
	   	var rowid_div_val = $(rowid_dive).val();
	   	var formData =  { 'rowid': rowid_div_val, 'price': cartprice ,'amount':total,'qty': cartquantity} 
		var  mainUrl = base_url+'Pharmacy_shopping/update_cart_infoes/'+id;
		$.ajax({
										url: mainUrl,
										method: "POST",
										data:formData,
										dataType: 'json',
										success: function(response)
										{



											if(response.status == '1')
											{
												var rowval_value  = $(rowid_div).val();
											   $(showsubtotal0).html(total); 
											   $(cartpricevalue0).html(cartprice);
											   $(cartsubtotal0).attr('value',total);
											   var sum = 0;
											    $(".cartsubtotal").each(function(){
											        sum = parseInt(sum) + parseInt($(this).val());
											    });
											    $("#amtpayable").html(sum);
											}
											else
											{
												bootbox.alert(response.message);
											}
										}
		});
	}

	function remove_product(id)
	{
		var row_id =  '#rowoutline_'+id;
		var row_ids = '#rowid_id_'+id
		var row_value = $(row_ids).val();
		
					bootbox.confirm("Are you sure you would like to remove this item from  your shopping cart?", function(result) {
					if(result == true) 
  					{
  							var  mainUrl = base_url+'Pharmacy_shopping/remove_product/';
				 			$.ajax({
										url: mainUrl,
										method: "POST",
										data:{ row_value: row_value },
										dataType: 'json',
										success: function(response)
										{
											var redirect_url = base_url+'shopping_cart';
											window.location.replace(redirect_url);
									  	}
									});
  	  				}}); 
	}

