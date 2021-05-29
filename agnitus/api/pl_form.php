<?php $params = $_SERVER['QUERY_STRING']
$crm_user_bank_name = isset($_GET['bankname']) ? $_GET['bankname']:''
$crm_user_lead_id_data = isset($_GET['leadid']) ? $_GET['leadid']:0
$crm_user_lead_id =  base64_decode(str_pad(strtr($crm_user_lead_id_data, '-_', '+/'), strlen($crm_user_lead_id_data) % 4, '=', STR_PAD_RIGHT))
$crm_user_mobile_data = isset($_GET['mobile']) ? $_GET['mobile']:''
$crm_user_mobile =  base64_decode(str_pad(strtr($crm_user_mobile_data, '-_', '+/'), strlen($crm_user_mobile_data) % 4, '=', STR_PAD_RIGHT))
$crm_user_flag = isset($_GET['flag']) ? $_GET['flag']:0
$crm_bajaj_url_data = "bankname=bajaj_finserv&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_tata_capital_url_data = "bankname=tata_capital&leadid=" .$crm_user_lead_id_data. "&mobile="    .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_hdfc_url_data = "bankname=hdfc&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_icici_data = "bankname=icici&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_idfc_first_data = "bankname=idfc_first&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_fullerton_india_data = "bankname=fullerton_india&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_axis_data = "bankname=axis&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_hdb_financial_data = "bankname=hdb_financial&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_indusind_data = "bankname=indusind&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_kotak_data = "bankname=kotak&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_rbl_data = "bankname=rbl&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_yes_data = "bankname=yes&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_allahabad_data = "bankname=allahabad&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_andhra_data = "bankname=andhra&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_bank_of_baroda_data = "bankname=bank_of_baroda&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_bank_of_maharashtra_data = "bankname=bank_of_maharashtra&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_canara_data = "bankname=canara&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_citi_data = "bankname=citi&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_corporation_data = "bankname=corporation&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_federal_data = "bankname=federal&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_idbi_data = "bankname=idbi&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_iifl_data = "bankname=iifl&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_indian_data = "bankname=indian&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_indian_overseas_data = "bankname=indian_overseas&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_pnb_data = "bankname=pnb&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_sbi_data = "bankname=sbi&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_standard_chartered_data = "bankname=standard_chartered&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_syndicate_data = "bankname=syndicate&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
$crm_union_bank_of_india_data = "bankname=union_bank_of_india&leadid=" .$crm_user_lead_id_data. "&mobile=" .$crm_user_mobile_data. "&flag=" .$crm_user_flag
	if(!empty($userdata)){		        $f_name = $userdata->pl_customer_f_name
        $l_name = $userdata->pl_customer_l_name
		$mobile = $userdata->pl_customer_mobile_no
		$email  = $userdata->pl_customer_email
		$pincode = $userdata->pl_customer_pincode
		$pancard_no = $userdata->pl_customer_pancard_no
		$city = $userdata->pl_customer_cityname
		$state = $userdata->pl_customer_state
		$gender = $userdata->pl_customer_gender
		$loan_amount = $userdata->pl_customer_loan_amount
        $employee_type = $userdata->pl_customer_employee_type
		$monthly_income = $userdata->pl_customer_monthly_income
		$company_name  = $userdata->pl_customer_company_name
		$bank_name = $userdata->pl_customer_bank_name
		$dob = $userdata->pl_customer_date_of_birth
		$address1 = $userdata->pl_customer_current_address1
		$address2 = $userdata->pl_customer_current_address2
		$aadhaar  = $userdata->pl_customer_aadhaar_no
		$work_experience = $userdata->pl_customer_work_experience
		$qualification = $userdata->pl_customer_qualification
		$marital_status = $userdata->pl_customer_marital_status
		$residence_type = $userdata->pl_customer_residence_type
	}else{	    $f_name = ''
		$l_name = ''
		$mobile = ''
		$email  = ''
		$pincode = '';		
		$pancard_no = '';	
		$city = '';	
		$state = '';
        $gender = '';
		$loan_amount = ''; 
	    $employee_type = '';  
		$company_name = '';  
		$bank_name  = ''; 
	    $dob       = '';  
	    $address1  = ''; 
		$address2  = ''; 
	    $aadhaar   = '';  
        $work_experience = '';
        $qualification = '';
        $marital_status = '';
        $residence_type = '';
        $monthly_income = '';
        	}?>
<div style="display: none;margin: 120px 0px;" id="loader">
    <center>
        <div> <img src="<?php echo base_url();
        ?>assets/images/opc-ajax-loader.gif"> </div>
    </center>
</div>
<div id="loader_hide_div">
    <?php  if ($params == 'bankname=hdfc' || $params == $crm_hdfc_url_data) { ?>
    <section class="personal-loan-hdfc">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="home_loan_banner_hdfc_l"> <img class="pl-hdfc-logo" src="<?php echo base_url();
        ?>assets/images/Hdfc-Logo.png" alt="" class="home_loan_f_logo" draggable="true" data-bukket-ext-bukket-draggable="true"> </div>
                    <h1>GET THE BEST <span>PERSONAL LOAN </span>OFFER</h1>
                    <div class="home-loan-amount personal-intrest">
                        <p>HDFC Bank Personal loan interest rate start from <span class="price hdfc-pl">10.75 <span class="brk-to">to</span> 21.30% </span> </p>
                    </div>
                    <p class="small-heading">Apply online for instant approval*!</p>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
    <?php }   ?>
    <?php if($params == 'bankname=bajaj_finserv' || $params == $crm_bajaj_url_data){?>
    <div class="bajaj-personal-loan">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="home_loan_banner_hdfc_l"> <img class="pl-hdfc-logo bajaj-fin" src="<?php echo base_url();
        ?>assets/images/bajaj-finserv-logo.png" alt="" class="bajaj-finserv-logo.png" draggable="true" data-bukket-ext-bukket-draggable="true"> </div>
                    <h1 class="bajaj-content-heading">No Dreams are too Big.</h1>
                    <div class="home-loan-amount personal-intrest">
                        <p>Realise them with Citi Personal Loans, now from <br><span class="price bajaj-pl">12.99% </span>onwards</p>
                    </div>
                    <p class="small-heading">Apply online for instant approval*!</p>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if($params == 'bankname=icici' || $params == $crm_icici_data){ ?>
    <section class="icici-personal-loan">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="home_loan_banner_hdfc_l"> <img class="pl-hdfc-logo icici_banner_logo" src="<?php echo base_url();
        ?>assets/images/icici-pl-logo.png" alt="" class="bajaj-finserv-logo.png" draggable="true" data-bukket-ext-bukket-draggable="true"> </div>
                    <h1 class="bajaj-content-heading cntent-icici">Personal loan with a Personal touch</h1>
                    <div class="home-loan-amount personal-intrest">
                        <p>ICICI BANK PERSONAL LOAN INTEREST RATE START FROM<br><span class="icici-intrest-rate">11.25 <span class="brk-to">To</span> 20% </span>onwards</p>
                    </div>
                    <p class="small-heading">Apply online for instant approval*!</p>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php if($params == 'bankname=tata_capital' || $params == $crm_tata_capital_url_data){?>
    <section class="tata-capital-personal-loan">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="tata-capital-logo"> <img class="" src="<?php echo base_url();
        ?>assets/images/tata-capital-logo.png" alt="" class="bajaj-finserv-logo.png"> </div>
                    <h1 class="bajaj-content-heading">Get an Instant Personal Loan Approval</h1>
                    <div class="home-loan-amount personal-intrest">
                        <p>TATA CAPITAL PERSONAL LOAN INTEREST RATE START FROM<br><span class="icici-intrest-rate tata-capital">10.50% </span>onwards</p>
                    </div>
                    <p class="small-heading">Apply online for instant approval*!</p>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php if($params == 'bankname=idfc_first' || $params == $crm_idfc_first_data){?>
    <section class="capital-first">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="home_loan_banner_hdfc_l"> <img class="pl-hdfc-logo bajaj-fin" src="<?php echo base_url();
        ?>assets/images/capotal-first-logo.jpg" alt="" class="bajaj-finserv-logo.png" draggable="true" data-bukket-ext-bukket-draggable="true"> </div>
                    <h1 class="capital-first-content-heading">Personal Loans for Every Important Occasion</h1>
                    <div class="home-loan-amount personal-intrest">
                        <p>IDFC FIRST BANK PERSONAL LOAN INTEREST RATE START FROM <br><span class="price bajaj-pl capital-heading">11.25% </span>onwards</p>
                    </div>
                    <p class="small-heading">Apply online for instant approval*!</p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    <?php } ?>
    <div class="bg-white">
        <div id="stepper1" class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
                <div class="container">
                    <div class="row">
                        <div class="step col-md-2" data-target="#test-l-1"> <button type="button" class="bs-stepper-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1"> <span><img src="<?php echo base_url();
        ?>assets/images/form-icon/loanrequirement.svg" alt="file" class="img-fluid mx-auto d-block"></span> <span class="bs-stepper-label">Personal Details</span> </button> </div>
                        <div class="bs-stepper-line"></div>
                        <div class="bs-stepper-line"></div>
                        <div class="step col-md-2" data-target="#test-l-3"> <button type="button" class="bs-stepper-trigger" role="tab" id="stepper1trigger3" aria-controls="test-l-3"> <span><img src="<?php echo base_url();
        ?>assets/images/form-icon/bank_account.svg" alt="bank_account"></span> <span class="bs-stepper-label">Complete Application</span> </button> </div>
                    </div>
                </div>
            </div><!--  start bajaj finserve form -->
            <?php if($params == 'bankname=bajaj_finserv' || $params == $crm_bajaj_url_data) {?>
            <div class="bs-stepper-content">
                <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
                    <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
                        <div class="form-group">
                            <div id="first_pl_form">
                                <div class="container">
                                    <div class="form-details-wrapper">
                                        <div class="form-detail">
                                            <div class="heading mb-3">
                                                <h3>Apply For Personal Loans</h3>
                                            </div>
                                            <div class="selction-part">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>Your desired loan amount </h3>
                                                            <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount;
         ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                            <div id="loan_amount_error" style="color: red;
         "></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>Your Employment Type ?</h3>
                                                            <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                            <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                                    <option value="">Select Employment Type</option>
                                                                    <option value="1" <?php if($employee_type=='1' ){echo "selected" ; } ?>>Salaried</option>
                                                                    <option value="2" <?php if($employee_type=='2' ){echo "selected" ; } ?>>Business Owner</option>
                                                                    <option value="3" <?php if($employee_type=='3' ){echo "selected" ; } ?>>Professional (e.g. Doctor/CA)</option>
                                                                </select> </div>
                                                            <div id="employee_type_error" style="color: red;
        ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>YOUR NET MONTHLY INCOME?</h3>
                                                            <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                            <div id="monthly_income_error" style="color: red;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>Your Company Name</h3>
                                                            <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div id="company_name_error" style="color: red;"></div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>Your salary account is with?</h3>
                                                            <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                            <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                                    <option value="">Select your bank</option>
                                                                    <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                                    <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                                        <?php echo $banks->bank_name; ?>
                                                                    </option>
                                                                    <?php 	}																	}?>
                                                                </select>
                                                                <div id="bank_name_error" style="color: red;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>Total EMI you pay currently </h3>
                                                            <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                            <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                        </div>
                                                        <div id="emi_pay_error" style="color: red;"></div>
                                                    </div>
                                                    <div class="selction-part">
                                                        <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                                        <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                                        <div id="terms_conditions_error" style="color: red;"></div>
                                                    </div> <br>
                                                    <div class="btn-wrapper"> <button type="submit">Continue</button> <!-- <a class="btn" id="btn_continue" onclick="next()">Continue</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </form>
                <div id="second_pl_form" style="display: none;">
                    <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
                        <div class="form-group">
                            <div class="container">
                                <div class="form-details-wrapper">
                                    <div class="form-detail">
                                        <div class="heading mb-3">
                                            <h3> Find The Persnal Loan Best Suited For You</h3>
                                        </div>
                                        <div class="selction-part">
                                            <div class="checkbox"> </div>
                                        </div>
                                        <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
                        <div class="container">
                            <div class="form-details-wrapper">
                                <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                                    <div class="form-detail">
                                        <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                                        <div class="heading mb-2 text-left">
                                            <h3>Personal Details</h3>
                                        </div>
                                        <hr>
                                        <div class="selction-part">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>First Name</h3>
                                                        <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                                        <div id="f_name_error"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Middle Name </h3>
                                                        <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                                        <div id="m_name_error"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Last Name</h3>
                                                        <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                                        <div id="l_name_error"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="selction-part">
                                            <div class="col-xs-12"> </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>GENDER</h3>
                                                        <div class="ficon"> <i class="fa fa-male"></i> </div>
                                                        <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                                <option value="">Select Gender</option>
                                                                <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                                <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                            </select> </div>
                                                    </div>
                                                    <div id="gender_error"></div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Your PAN card number ?</h3>
                                                        <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                                        <div id="pancard_no_error"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Your Mobile number ?</h3>
                                                        <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                            <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                                    </div>
                                                    <div id="mobile_no_error"></div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>DATE OF BIRTH</h3>
                                                        <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                                        <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                                    </div>
                                                    <div id="date_of_birth_error"></div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Your Email?</h3>
                                                        <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                                    </div>
                                                    <div id="email_error"></div>
                                                </div> <!-- 	// -->
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Your Aadhaar Card Number</h3>
                                                        <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="selction-part">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>Total Work Experience(In Years)</h3>
                                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>Qualification </h3>
                                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                            <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                                    <option value="">Select Qualification</option>
                                                                    <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                                    <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                                </select> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="inputsection">
                                                            <h3>Marital Status</h3>
                                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                            <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                                    <option value="">Select Marital Status</option>
                                                                    <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                                    <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                                    <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                                    <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                                </select> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="selction-part">
                                            <div class="heading mt-3 text-left">
                                                <h3>Your Current Address Details</h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Address Line1 </h3>
                                                        <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                        <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                                        <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                                    </div>
                                                    <div id="current_address_error"></div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Address Line2</h3>
                                                        <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                                    </div>
                                                    <div id="current_address_line_error"></div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Residence Pincode</h3>
                                                        <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                                        <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Which state do you live currently? </h3>
                                                        <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                        <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                                <option value="">Select State of current residence</option>
                                                                <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                                <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                                    <?php echo $states_name->state_name; ?>
                                                                </option>
                                                                <?php 	}																					}?>
                                                            </select> </div>
                                                    </div>
                                                    <div id="state_error"></div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3> Which city do you live currently? </h3>
                                                        <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                        <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                                <option value="">Select city of current residence</option>
                                                                <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                                <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                                <?php }} ?>
                                                            </select> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="inputsection">
                                                        <h3>Current Residence Ownership? </h3>
                                                        <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                        <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                                <option value="">Select current residence Ownership</option>
                                                                <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                                <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                            </select> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group submit">
                                            <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if($params == 'bankname=bajaj_finserv' || $params == $crm_bajaj_url_data) {?>
    <section class="intrest-rate-pl">
        <div class="container">
            <h2>Rate and Fee Bajaj Finserv Personal Loan</h2>
            <table>
                <tbody>
                    <tr>
                        <td class="left-sec-pl">Loan Amount:</td>
                        <td class="text-right right-sc-pl">50,000 to 25,00,000</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Loan tenure:</td>
                        <td class="text-right right-sc-pl">12 months to 60 months </td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Interest Rate:</td>
                        <td class="text-right right-sc-pl">Bajaj Finserv Personal loan interest rate start from 12.99 onwards</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Loan Processing Fee/Charge:</td>
                        <td class="text-right right-sc-pl">Up to 4.13 % of the loan amount (Inclusive of Taxes)</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Foreclosure/Prepayment Charges:</td>
                        <td class="text-right right-sc-pl"> 4% of Principal Outstanding + applicable taxes </td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Part-Prepayment Charges:</td>
                        <td class="text-right right-sc-pl">2% + applicable taxes on part-payment amount paid* After 1 month of loan Disbursal</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Penal Interest:</td>
                        <td class="text-right right-sc-pl">2% of EMI amount per month + applicable taxes or Rs. 200 per month (Inclusive of taxes), whichever is higher</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Stamp duty & other statutory charges:</td>
                        <td class="text-right right-sc-pl">As per applicable laws of the state</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Cheque bounce charges:</td>
                        <td class="text-right right-sc-pl">Rs. 600 - 1200 Per bounce (Inclusive of applicable taxes)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="loans-intrest-rates hdfc-pl-features">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="benefits-Sec" style="display: block;">
                        <div class="container">
                            <div class="heading">
                                <h3 class="why-choose-hdfc">Bajaj Finserve Personal Loan Features </h3>
                            </div>
                            <div class="col-md-12">
                                <ul class="loan-benifit">
                                    <li>Paperless loan approval</li>
                                    <li>OD facility with free prepayment</li>
                                    <li>Interest charged on a daily basis, as per amount utilized at the end of the day </li>
                                    <li>Low processing fee</li>
                                    <li>Process is easy quick and hassle free </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="intrest-rate-pl">
        <div class="container">
            <h2>Rate and Fee Bajaj Finserv Flexi (Over Draft) Personal Loan</h2>
            <table>
                <tbody>
                    <tr>
                        <td class="left-sec-pl">Loan Amount:</td>
                        <td class="text-right right-sc-pl">50,000 to 25,00,000</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Loan tenure:</td>
                        <td class="text-right right-sc-pl">12 months to 60 months </td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Interest Rate:</td>
                        <td class="text-right right-sc-pl">Bajaj Finserv Personal loan interest rate start from 12.99 onwards</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Loan Processing Fee/Charge:</td>
                        <td class="text-right right-sc-pl">Up to 4.13 % of the loan amount (Inclusive of Taxes)</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Foreclosure/Prepayment Charges:</td>
                        <td class="text-right right-sc-pl"> 4% of Principal Outstanding + applicable taxes </td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Part-Prepayment Charges:</td>
                        <td class="text-right right-sc-pl">2% of EMI amount per month + applicable taxes or Rs. 200 per month (Inclusive of taxes), whichever is higher</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Stamp duty & other statutory charges:</td>
                        <td class="text-right right-sc-pl">As per applicable laws of the state</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Cheque bounce charges:</td>
                        <td class="text-right right-sc-pl">Rs. 600 - 1200 Per bounce (Inclusive of applicable taxes)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="loans-intrest-rates hdfc-pl-features">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="benefits-Sec" style="display: block;">
                        <div class="container">
                            <div class="heading">
                                <h3 class="why-choose-hdfc">Bajaj Finserve Personal Loan Features </h3>
                            </div>
                            <div class="col-md-12">
                                <ul class="loan-benifit">
                                    <li>Paperless Approval</li>
                                    <li>Personal Loan for all Salaried across corporate and Government Institution employees</li>
                                    <li>Loan is offered on the basis of Monthly Salary and present company</li>
                                    <li>Exclusive offer for Balance Transfer from other Bank/NBFC.</li>
                                    <li>Process is easy, quick and hassle free </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="intrest-rate-pl rerquid-loan">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="requid-persnl-loan">Documents Required for BAJAJ FINSERV Personal Loan</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td class="left-sec-pl">Identity Proof/KYC</td>
                                <td class="text-right right-sc-pl">Pan Card/Aadhar card/Voter card/Driving license/Passport</td>
                            </tr>
                            <tr>
                                <td class="left-sec-pl">Address Poof</td>
                                <td class="text-right right-sc-pl">Aadhar card/Voter card/Driving license/Passport</td>
                            </tr>
                            <tr>
                                <td class="left-sec-pl">Bank Statement/Passbook</td>
                                <td class="text-right right-sc-pl">Latest 3 months/Latest 6 months</td>
                            </tr>
                            <tr>
                                <td class="left-sec-pl">Salary Slip</td>
                                <td class="text-right right-sc-pl">Latest 3 months Salary Slip</td>
                            </tr>
                            <tr>
                                <td class="left-sec-pl">Other Documents</td>
                                <td class="text-right right-sc-pl">Form 16 Passport size Photograph</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-7">
                    <h2 class="requid-persnl-loan">Eligibility Criteria for BAJAJ Finserv Personal Loan</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td class="left-sec-pl">Profession/Employee</td>
                                <td class="text-right right-sc-pl">Any person working in a &nbsp;private limited companies, or public sector undertakings -including central, state, and local bodies</td>
                            </tr>
                            <tr>
                                <td class="left-sec-pl">Eligible Age</td>
                                <td class="text-right right-sc-pl">23 to 57 Years</td>
                            </tr>
                            <tr>
                                <td class="left-sec-pl">Work Experience Required</td>
                                <td class="text-right right-sc-pl">Should have at least 2 years experience, of which 1 year with current employer</td>
                            </tr>
                            <tr>
                                <td class="left-sec-pl">Minimum Monthly Salary/Income for Eligibility</td>
                                <td class="text-right right-sc-pl">Rs. 25,000 (Rs.35K in Delhi, Mumbai, Bengaluru, Chennai, Hyderabad, , Cochin Pune, Kolkata, Ahmedabad)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <section class="benefits-Sec">
        <div class="container">
            <div class="heading">
                <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="loan-benifit">
                        <li>Hassle free one-stop shop for all kinds of loans</li>
                        <li>Committed to offer the most appropriate solution at the best price</li>
                        <li>Customized solutions for customer specific requirements</li>
                        <li>Quotations for multiple lenders/banks</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="loan-benifit">
                        <li>Free credit report check</li>
                        <li>Dedicated relationship management</li>
                        <li>Door-step services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- end start bajaj finserve form -->
    <!--  start tata capital finserve form -->
    <?php if($params == 'bankname=tata_capital' || $params == $crm_tata_capital_url_data){?>
    <div class="bs-stepper-content">
        <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
            <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
                <div class="form-group">
                    <div id="first_pl_form">
                        <div class="container">
                            <div class="form-details-wrapper">
                                <div class="form-detail">
                                    <div class="heading mb-3">
                                        <h3>Apply For Personal Loans</h3>
                                    </div>
                                    <div class="selction-part">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>Your desired loan amount </h3>
                                                    <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                    <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                    <div id="loan_amount_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>Your Employment Type ?</h3>
                                                    <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                    <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                            <option value="">Select Employment Type</option>
                                                            <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                            <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                            <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                        </select> </div>
                                                    <div id="employee_type_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>YOUR NET MONTHLY INCOME?</h3>
                                                    <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                    <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                    <div id="monthly_income_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>Your Company Name</h3>
                                                    <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                    <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                                </div>
                                                <div id="company_name_error" style="color: red;"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>Your salary account is with?</h3>
                                                    <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                    <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                            <option value="">Select your bank</option>
                                                            <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                            <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                                <?php echo $banks->bank_name; ?>
                                                            </option>
                                                            <?php 	}																	}?>
                                                        </select>
                                                        <div id="bank_name_error" style="color: red;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>Total EMI you pay currently </h3>
                                                    <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                    <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                </div>
                                                <div id="emi_pay_error" style="color: red;"></div>
                                            </div>
                                            <div class="selction-part">
                                                <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                                <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                                <div id="terms_conditions_error" style="color: red;"></div>
                                            </div> <br>
                                            <div class="btn-wrapper"> <button type="submit">Continue</button> <!-- <a class="btn" id="btn_continue" onclick="next()">Continue</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
        <div id="second_pl_form" style="display: none;">
            <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
                <div class="form-group">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3> Find The Persnal Loan Best Suited For You</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="checkbox"> </div>
                                </div>
                                <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
                <div class="container">
                    <div class="form-details-wrapper">
                        <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                            <div class="form-detail">
                                <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                                <div class="heading mb-2 text-left">
                                    <h3>Personal Details</h3>
                                </div>
                                <hr>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>First Name</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                                <div id="f_name_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Middle Name </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                                <div id="m_name_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Last Name</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                                <div id="l_name_error"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="col-xs-12"> </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>GENDER</h3>
                                                <div class="ficon"> <i class="fa fa-male"></i> </div>
                                                <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                        <option value="">Select Gender</option>
                                                        <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                        <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                    </select> </div>
                                            </div>
                                            <div id="gender_error"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your PAN card number ?</h3>
                                                <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                                <div id="pancard_no_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Mobile number ?</h3>
                                                <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                    <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                            </div>
                                            <div id="mobile_no_error"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>DATE OF BIRTH</h3>
                                                <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                                <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                            </div>
                                            <div id="date_of_birth_error"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Email?</h3>
                                                <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="email_error"></div>
                                        </div> <!-- 	// -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Aadhaar Card Number</h3>
                                                <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="selction-part">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>Total Work Experience(In Years)</h3>
                                                    <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                    <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>Qualification </h3>
                                                    <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                    <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                            <option value="">Select Qualification</option>
                                                            <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                            <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="inputsection">
                                                    <h3>Marital Status</h3>
                                                    <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                    <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                            <option value="">Select Marital Status</option>
                                                            <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                            <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                            <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                            <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="heading mt-3 text-left">
                                        <h3>Your Current Address Details</h3>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Address Line1 </h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                                <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                            </div>
                                            <div id="current_address_error"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Address Line2</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="current_address_line_error"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Residence Pincode</h3>
                                                <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Which state do you live currently? </h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                        <option value="">Select State of current residence</option>
                                                        <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                        <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                            <?php echo $states_name->state_name; ?>
                                                        </option>
                                                        <?php 	}																					}?>
                                                    </select> </div>
                                            </div>
                                            <div id="state_error"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3> Which city do you live currently? </h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                        <option value="">Select city of current residence</option>
                                                        <?php																				if(isset($cities)){																			foreach ($cities as $city_name) {?>
                                                        <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?>																																							</option> -->
                                                        <?php }} ?>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Current Residence Ownership? </h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                        <option value="">Select current residence Ownership</option>
                                                        <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                        <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group submit">
                                    <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end start tata capital form -->
<?php } ?>
<!--  start hdfc bank form -->
<?php if($params == 'bankname=hdfc' || $params == $crm_hdfc_url_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="intrest-rate-pl">
    <div class="container">
        <h2>Rate and Fee HDFC Bank Personal Loan</h2>
        <table>
            <tr>
                <td class="left-sec-pl">Loan Amount:</td>
                <td class="text-right right-sc-pl">50,000 to 40,00,000</td>
            </tr>
            <tr>
                <td class="left-sec-pl">Loan tenure:</td>
                <td class="text-right right-sc-pl">12 months to 60 months </td>
            </tr>
            <tr>
                <td class="left-sec-pl">Interest Rate:</td>
                <td class="text-right right-sc-pl">HDFC Bank Personal loan interest rate start from 10.75 to 21.30</td>
            </tr>
            <tr>
                <td class="left-sec-pl">Loan Processing Fee/Charge:</td>
                <td class="text-right right-sc-pl">The processing fee up to 2.5 % of the loan amount subject to minimum of Rs. 2,999/- & Maximum of Rs. 25000/- for Salaried Customers</td>
            </tr>
            <tr>
                <td class="left-sec-pl">Foreclosure/Prepayment Charges:</td>
                <td class="text-right right-sc-pl"> 4% of Principal Outstanding if you close in 13 to 24 Months<br> 3% of Principal Outstanding if you close in 25-36 Months<br> 2% of Principal Outstanding if you close in >36 Months </td>
            </tr>
            <tr>
                <td class="left-sec-pl">Overdue EMI Interest:</td>
                <td class="text-right right-sc-pl">2% per month on EMI / Principal overdue</td>
            </tr>
            <tr>
                <td class="left-sec-pl">Stamp duty & other statutory charges:</td>
                <td class="text-right right-sc-pl">As per applicable laws of the state</td>
            </tr>
            <tr>
                <td class="left-sec-pl">Cheque bounce charges:</td>
                <td class="text-right right-sc-pl">Rs. 550/- per cheque bounce</td>
            </tr>
        </table>
    </div>
</section>
<section class="intrest-rate-pl rerquid-loan">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Documents Required for HDFC Personal Loan</h2>
                <table>
                    <tr>
                        <td class="left-sec-pl">Identity Proof/KYC</td>
                        <td class="text-right right-sc-pl">Pan Card/Aadhar card/Voter card/Driving license/Passport</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Address Poof</td>
                        <td class="text-right right-sc-pl">Aadhar card/Voter card/Driving license/Passport </td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Bank Statement/Passbook</td>
                        <td class="text-right right-sc-pl">Latest 3 months/Latest 6 months</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Salary Slip</td>
                        <td class="text-right right-sc-pl">Latest 3 months Salary Slip</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Other Documents</td>
                        <td class="text-right right-sc-pl">Form 16 Passport size Photograph</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-7">
                <h2>Eligibility Criteria for HDFC Bank Personal Loan</h2>
                <table>
                    <tr>
                        <td class="left-sec-pl">Profession/Employee</td>
                        <td class="text-right right-sc-pl">Any person working in a  private limited companies, or public sector undertakings -including central, state, and local bodies</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Eligible Age</td>
                        <td class="text-right right-sc-pl">21 to 60 Years</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Work Experience Required</td>
                        <td class="text-right right-sc-pl">Should have at least 2 years experience, of which 1 year with current employer</td>
                    </tr>
                    <tr>
                        <td class="left-sec-pl">Minimum Monthly Salary/Income for Eligibility</td>
                        <td class="text-right right-sc-pl">Rs. 15,000 (Rs.20K in Delhi, Mumbai, Bengaluru, Chennai, Hyderabad, , Cochin Pune, Kolkata, Ahmedabad)</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="loans-intrest-rates hdfc-pl-features">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="benefits-Sec" style="display: block;">
                    <div class="container">
                        <div class="heading">
                            <h3 class="why-choose-hdfc">HDFC Bank Personal Loan Features </h3>
                        </div>
                        <div class="col-md-12">
                            <ul class="loan-benifit">
                                <li>Personal Loan for all Salaried across corporate and Government Institution employees</li>
                                <li>Loan is offered on the basis of Monthly Salary and present company</li>
                                <li>No requirement of Collateral/Security</li>
                                <li>Exclusive offer for Balance Transfer from other Bank/NBFC.</li>
                                <li>Process is easy, quick and hassle free </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end hdfc bank form -->
<?php } ?>
<!--  start icici bank form -->
<?php if($params == 'bankname=icici' || $params == $crm_icici_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end icici bank form -->
<?php } ?>
<!--  start idfc_first bank form -->
<?php if($params == 'bankname=idfc_first' || $params == $crm_idfc_first_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="idfc_personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="idfc_first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amount" id="loan_amount" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_type" id="employee_type" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_income" id="monthly_income" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_name" id="company_name" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_name" id="bank_name">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pay" id="emi_pay" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_condition" id="terms_condition" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="idfc_second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="idfc_personal_loan_form_2"> <input type="hidden" name="loan_amounts" id="loan_amounts"> <input type="hidden" name="employee_types" id="employee_types"> <input type="hidden" name="monthly_incomes" id="monthly_incomes"> <input type="hidden" name="company_names" id="company_names"> <input type="hidden" name="bank_names" id="bank_names"> <input type="hidden" name="emi_pays" id="emi_pays"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Father First Name</h3>
                                                <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="father_f_name" id="father_f_name" placeholder="Enter Father First Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div> <!-- /// -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>FATHER LAST NAME </h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="father_l_name" id="father_l_name" placeholder="Enter Father Last Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>SPOUSE FIRST NAME</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="spouse_f_name" id="spouse_f_name" placeholder="Enter Spouse First Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>SPOUSE LAST NAME</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="spouse_l_name" id="spouse_l_name" placeholder="Enter Spouse Last Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div> <!-- //// -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>EMPLOYMENT DESIGNATION</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="employment_designation" id="employment_designation" placeholder="Enter Employment Designation" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div> <!-- fghvghg -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Years At Current Company</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="years_current_company" id="years_current_company" placeholder="Enter Years At Current Company " maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Months At CurentCompany</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="months_curent_company" id="months_curent_company" placeholder="Enter Months At CurentCompany" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Duration At Previous Job Years</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="duration_previous_job_years" id="duration_previous_job_years" placeholder="Enter Duration At Previous Job Years" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Duration At Previous Job Months</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="duration_previous_job_months" id="duration_previous_job_months" placeholder="Enter Months At CurentCompany" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>REQUESRED TENURE(in months)</h3>
                                                <div class="ficon"> <i class="fa fa-home"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="requestedtenure" id="requestedtenure" placeholder="Enter requested tenure" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div> <!-- nbhgb -->
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Type </h3>
                                            <div class="inputbox">
                                                <p><b>RESIDENCE ADDRESS</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="residence_address_line1" id="residence_address_line1" placeholder="Enter residence address line1" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="residence_address_line2" id="residence_address_line2" placeholder="Enter residence address line2" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <div class="inputbox">
                                                <p><b>PERMANENT ADDRESS</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="perment_address_line1" id="perment_address_line1" placeholder="Enter perment address line1" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="perment_address_line2" id="perment_address_line2" placeholder="Enter perment address line2" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <div class="inputbox">
                                                <p><b>OFFICE ADDRESS</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="office_address_line1" id="office_address_line1" placeholder="Enter  office address line1" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="office_address_line2" id="office_address_line2" placeholder="Enter office address line2" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div> <!-- 	//// -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>LANDMARK</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="landmark" id="landmark" placeholder="Enter LandMark" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Enter Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned">Owned</option>
                                                    <option value="Rent">Rent</option>
                                                    <option value="Corporate Provided">Corporate Provided</option>
                                                    <option value="Mortgaged">Mortgaged</option>
                                                </select> </div>
                                        </div>
                                    </div> <!-- 	/// -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																			if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>EMPLOYMENT TYPE OF ORGANISATION</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="organisation_type" id="organisation_type" data-fv-field="loantype">
                                                    <option value="">Select Employment type of Organisation </option>
                                                    <option value="Partnership">Partnership</option>
                                                    <option value="LLP">LLP </option>
                                                    <option value="Pvt. Ltd.">Pvt. Ltd.</option>
                                                    <option value="One Person Company">One Person Company</option>
                                                    <option value="Limited Company">Limited Company</option>
                                                    <option value="Proprietorship">Proprietorship</option>
                                                    <option value="Not Registered">Not Registered</option>
                                                </select> </div>
                                        </div>
                                    </div> <!-- <div class="heading mt-3 text-left"> -->
                                    <!-- <h3>Reference Details</h3>																</div> -->
                                    <!-- (we require 2 reference details) -->
                                    <hr>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>RelationToCustomer</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="RelationToCustomer" id="RelationToCustomer" placeholder="Enter Relation To Customer" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Title</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomertitle" id="referenceRelationToCustomertitle" placeholder="Enter reference Relation To Customer Title" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>FirstName</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomerfname" id="referenceRelationToCustomerfname" placeholder="Enter FirstName" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>MiddleName</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomermname" id="referenceRelationToCustomermname" placeholder="Enter MiddleName" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>LastName</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomerlname" id="referenceRelationToCustomerlname" placeholder="Enter LastName" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>MobilePhoneNumber</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomermobile" id="referenceRelationToCustomermobile" placeholder="Enter Mobile Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>RelationToCustomer</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="relationToCustomer2" id="relationToCustomer2" placeholder="Enter Relation To Customer" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Title</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomertitle2" id="referenceRelationToCustomertitle2" placeholder="Enter Title" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>FirstName</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomerfname2" id="referenceRelationToCustomerfname2" placeholder="Enter FirstName" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>MiddleName</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomermname2" id="referenceRelationToCustomermname2" placeholder="Enter MiddleName" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>LastName</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomerlname2" id="referenceRelationToCustomerlname2" placeholder="Enter LastName" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>MobilePhoneNumber</h3>
                                            <div class="ficon"> <i class="fa fa-industry"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="" name="referenceRelationToCustomermobile2" id="referenceRelationToCustomermobile2" placeholder="Enter Mobile Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-group submit">
                    <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end idfc_first bank form -->
<?php } ?>
<!--  start fullerton_india bank form -->
<?php if($params == 'bankname=fullerton_india' || $params == $crm_fullerton_india_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end fullerton_india bank form -->
<?php } ?>
<!--  start axis bank form -->
<?php if($params == 'bankname=axis' || $params == $crm_axis_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end axis bank form -->
<?php } ?>
<!--  start hdb_financial bank form -->
<?php if($params == 'bankname=hdb_financial' || $params == $crm_hdb_financial_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end hdb_financial bank form -->
<?php } ?>
<!--  start indusind bank form -->
<?php if($params == 'bankname=indusind' || $params == $crm_indusind_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end indusind bank form -->
<?php } ?>
<!--  start kotak bank form -->
<?php if($params == 'bankname=kotak' || $params == $crm_kotak_data){ ?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end kotak bank form -->
<?php } ?>
<!--  start rbl bank form -->
<?php if($params == 'bankname=rbl' || $params == $crm_rbl_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end rbl bank form -->
<?php } ?>
<!--  start yes bank form -->
<?php if($params == 'bankname=yes' || $params == $crm_yes_data){ ?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end yes bank form -->
<?php } ?>
<!--  start allahabad bank form -->
<?php if($params == 'bankname=allahabad' || $params == $crm_allahabad_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end allahabad bank form -->
<?php } ?>
<!--  start andhra bank form -->
<?php if($params == 'bankname=andhra' || $params == $crm_andhra_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end andhra bank form -->
<?php } ?>
<!--  start bank_of_baroda bank form -->
<?php if($params == 'bankname=bank_of_baroda' || $params == $crm_bank_of_baroda_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end bank_of_baroda bank form -->
<?php } ?>
<!--  start bank_of_maharashtra bank form -->
<?php if($params == 'bankname=bank_of_maharashtra' || $params == $crm_bank_of_maharashtra_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end bank_of_maharashtra bank form -->
<?php } ?>
<!--  start canara bank form -->
<?php if($params == 'bankname=canara' || $params == $crm_canara_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end canara bank form -->
<?php } ?>
<!--  start citi bank form -->
<?php if($params == 'bankname=citi' || $params == $crm_citi_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end citi bank form -->
<?php } ?>
<!--  start corporation bank form -->
<?php if($params == 'bankname=corporation' || $params == $crm_corporation_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end corporation bank form -->
<?php } ?>
<!--  start federal bank form -->
<?php if($params == 'bankname=federal' || $params == $crm_federal_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end federal bank form -->
<?php } ?>
<!--  start idbi bank form -->
<?php if($params == 'bankname=idbi' || $params == $crm_idbi_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end idbi bank form -->
<?php } ?>
<!--  start iifl bank form -->
<?php if($params == 'bankname=iifl' || $params == $crm_iifl_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end iifl bank form -->
<?php } ?>
<!--  start indian bank form -->
<?php if($params == 'bankname=indian' || $params == $crm_indian_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end indian bank form -->
<?php } ?>
<!--  start pnb bank form -->
<?php if($params == 'bankname=pnb' || $params == $crm_pnb_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end pnb bank form -->
<?php } ?>
<!--  start standard_chartered bank form -->
<?php if($params == 'bankname=standard_chartered' || $params == $crm_standard_chartered_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end standard_chartered bank form -->
<?php } ?>
<!--  start syndicate bank form -->
<?php if($params == 'bankname=syndicate' || $params == $crm_syndicate_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end syndicate bank form -->
<?php } ?>
<!--  start union_bank_of_india bank form -->
<?php if($params == 'bankname=union_bank_of_india' || $params == $crm_union_bank_of_india_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end union_bank_of_india bank form -->
<?php } ?>
<!--  start sbi bank form -->
<?php if($params == 'bankname=sbi' || $params == $crm_sbi_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end sbi bank form -->
<?php } ?>
<!--  start indian_overseas bank form -->
<?php if($params == 'bankname=indian_overseas' || $params == $crm_indian_overseas_data){?>
<div class="bs-stepper-content">
    <form class="tab-content detail-form-submit" method="post" id="personal_loan_form">
        <div id="test-l-1" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger1">
            <div class="form-group">
                <div id="first_pl_form">
                    <div class="container">
                        <div class="form-details-wrapper">
                            <div class="form-detail">
                                <div class="heading mb-3">
                                    <h3>Apply For Personal Loans</h3>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your desired loan amount </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $loan_amount; ?>" name="loan_amounts" id="loan_amounts" placeholder="Enter Loan Amount" maxlength="50" autocomplete="off"> </div>
                                                <div id="loan_amount_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Employment Type ?</h3>
                                                <div class="ficon"> <i class="fa fa-tasks"></i> </div>
                                                <div class="inputbox"> <select class="input" name="employee_types" id="employee_types" data-fv-field="loantype">
                                                        <option value="">Select Employment Type</option>
                                                        <option value="1" <?php if($employee_type=='1' ){echo "selected" ;} ?>>Salaried</option>
                                                        <option value="2" <?php if($employee_type=='2' ){echo "selected" ;} ?>>Business Owner</option>
                                                        <option value="3" <?php if($employee_type=='3' ){echo "selected" ;} ?>>Professional (e.g. Doctor/CA)</option>
                                                    </select> </div>
                                                <div id="employee_type_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>YOUR NET MONTHLY INCOME?</h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $monthly_income;?>" name="monthly_incomes" id="monthly_incomes" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                                <div id="monthly_income_error" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your Company Name</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/office-block.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $company_name;?>" name="company_names" id="company_names" placeholder="Company Name" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="company_name_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Your salary account is with?</h3>
                                                <div class="ficon"> <img src="<?php echo base_url();?>assets/images/icon/bank.svg" alt="office-block"> </div>
                                                <div class="inputbox"> <select class="input" name="bank_names" id="bank_names">
                                                        <option value="">Select your bank</option>
                                                        <?php if(isset($bank))																	{																	foreach ($bank as $banks) {																	?>
                                                        <option value="<?php echo $banks->bank_id; ?> " <?php if($bank_name==$banks->bank_id){echo "selected";} ?>>
                                                            <?php echo $banks->bank_name; ?>
                                                        </option>
                                                        <?php 	}																	}?>
                                                    </select>
                                                    <div id="bank_name_error" style="color: red;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total EMI you pay currently </h3>
                                                <div class="ficon"> <i class="fa fa-inr"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="" name="emi_pays" id="emi_pays" placeholder="XXXXX" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                            <div id="emi_pay_error" style="color: red;"></div>
                                        </div>
                                        <div class="selction-part">
                                            <p class="termsloantxt">We don't sell your details to annoying people. Read our <a href="<?php echo base_url(); ?>privacy-policy"><strong>Privacy Policy</strong></a>.*</p>
                                            <div class="checkbox"> <input type="checkbox" name="terms_conditionss" id="terms_conditionss" value="1" autocomplete="off"><span class="check-pera">I have read and agree to the terms of use and hereby appoint rokrabazaar as my authorised representative to receive my credit information from Civil/ Experian/ (bureau).</span> </div>
                                            <div id="terms_conditions_error" style="color: red;"></div>
                                        </div> <br>
                                        <div class="btn-wrapper"> <button type="submit">Continue</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <div id="second_pl_form" style="display: none;">
        <div id="test-l-2" role="tabpanel" class="tab-pane" aria-labelledby="stepper1trigger2" style="display: none;">
            <div class="form-group">
                <div class="container">
                    <div class="form-details-wrapper">
                        <div class="form-detail">
                            <div class="heading mb-3">
                                <h3> Find The Persnal Loan Best Suited For You</h3>
                            </div>
                            <div class="selction-part">
                                <div class="checkbox"> </div>
                            </div>
                            <div class="btn-wrapper"> <a class="btn prev-btn" onclick="stepper1.previous()">Previous</a> <a class="btn" onclick="stepper1.next()">Next</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="test-l-3" role="tabpanel" class="tab-pane text-center" aria-labelledby="stepper1trigger3">
            <div class="container">
                <div class="form-details-wrapper">
                    <form method="post" id="personal_loan_form_2"> <input type="hidden" name="loan_amount" id="loan_amount"> <input type="hidden" name="employee_type" id="employee_type"> <input type="hidden" name="monthly_income" id="monthly_income"> <input type="hidden" name="company_name" id="company_name"> <input type="hidden" name="bank_name" id="bank_name"> <input type="hidden" name="emi_pay" id="emi_pay"> <input type="hidden" name="terms_conditions" id="terms_conditions"> <input type="hidden" name="crm_user_bank_name" id="crm_user_bank_name" value="<?php echo $crm_user_bank_name;?>"> <input type="hidden" name="crm_user_lead_id" id="crm_user_lead_id" value="<?php echo $crm_user_lead_id;?>"> <input type="hidden" name="crm_user_mobile" id="crm_user_mobile" value="<?php echo $crm_user_mobile;?>"> <input type="hidden" name="crm_user_flag" id="crm_user_flag" value="<?php echo $crm_user_flag;?>">
                        <div class="form-detail">
                            <p class="thanks-info mb-2 text-left">Thank you for the details, Please complete below form to get an instant decision on your application</p>
                            <div class="heading mb-2 text-left">
                                <h3>Personal Details</h3>
                            </div>
                            <hr>
                            <div class="selction-part">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>First Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $f_name; ?>" name="f_name" id="f_name" placeholder="Enter Your First Name" value="" maxlength="50" autocomplete="off"> </div>
                                            <div id="f_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Middle Name </h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="" name="m_name" id="m_name" placeholder="Enter Your Middle Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="m_name_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Last Name</h3>
                                            <div class="ficon"> <i class="fa fa-user"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $l_name; ?>" name="l_name" id="l_name" placeholder="Enter Your Last Name" maxlength="50" autocomplete="off"> </div>
                                            <div id="l_name_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="col-xs-12"> </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>GENDER</h3>
                                            <div class="ficon"> <i class="fa fa-male"></i> </div>
                                            <div class="inputbox"> <select class="input" name="gender" id="gender" data-fv-field="loantype">
                                                    <option value="">Select Gender</option>
                                                    <option value="1" <?php if($gender=='1' ){echo 'selected' ;} ?>>Male</option>
                                                    <option value="2" <?php if($gender=='2' ){echo 'selected' ;} ?>>Female</option>
                                                </select> </div>
                                        </div>
                                        <div id="gender_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your PAN card number ?</h3>
                                            <div class="ficon"> <i class="fa fa-id-card"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pancard_no; ?>" name="pancard_no" id="pancard_no" placeholder="Enter Your PAN card number" maxlength="50" autocomplete="off"> </div>
                                            <div id="pancard_no_error"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Mobile number ?</h3>
                                            <div class="ficon"> <i class="fa fa-phone"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $this->session->userdata('mobile')?><?php if($this->session->userdata('mobile')==''){echo $crm_user_mobile;}?>" name="mobile_no" id="mobile_no" placeholder="Enter Your Mobile number" <?php if($this->session->userdata('mobile') != '' ){echo "readonly";} ?>
                                                <?php if($crm_user_mobile !=''){ echo "readonly";}?> autocomplete="off"> </div>
                                        </div>
                                        <div id="mobile_no_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>DATE OF BIRTH</h3>
                                            <div class="ficon"> <i class="fa fa-calendar"></i> </div>
                                            <div class="inputbox"> <input type="text" placeholder="Please select date of birth" value="<?php echo $dob;?>" class="datepicker" id="date_of_birth" name="date_of_birth"> </div>
                                        </div>
                                        <div id="date_of_birth_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Email?</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $email; ?>" name="email" id="email" placeholder="Enter Your Email" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="email_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Your Aadhaar Card Number</h3>
                                            <div class="ficon"> <i class="fa fa-envelope"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input emailinputeror" value="<?php echo $aadhaar;?>" name="Aadhaar" id="Aadhaar" placeholder="Enter Your Aadhaar Number" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="selction-part">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Total Work Experience(In Years)</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <input type="text" class="input" value="<?php echo $work_experience;?>" name="work_experience" id="work_experience" placeholder="Enter Your Work Experience" maxlength="50" autocomplete="off"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Qualification </h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="qualification" id="qualification" data-fv-field="loantype">
                                                        <option value="">Select Qualification</option>
                                                        <option value="Graduate" <?php if($qualification=='Graduate' ){echo "selected" ;} ?>>Graduate</option>
                                                        <option value="Undergraduate" <?php if($qualification=='Undergraduate' ){echo "selected" ;} ?>>Undergraduate</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="inputsection">
                                                <h3>Marital Status</h3>
                                                <div class="ficon"> <i class="fa fa-user"></i> </div>
                                                <div class="inputbox"> <select class="input" name="marital_status" id="marital_status" data-fv-field="loantype">
                                                        <option value="">Select Marital Status</option>
                                                        <option value="Single" <?php if($marital_status=='Single' ){echo "selected" ;} ?>>Single</option>
                                                        <option value="Married" <?php if($marital_status=='Married' ){echo "selected" ;} ?>>Married</option>
                                                        <option value="Divorced" <?php if($marital_status=='Divorced' ){echo "selected" ;} ?>>divorced</option>
                                                        <option value="Widowed" <?php if($marital_status=='Widowed' ){echo "selected" ;} ?>>Widowed</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="selction-part">
                                <div class="heading mt-3 text-left">
                                    <h3>Your Current Address Details</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line1 </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" autocomplete="false" class="input" value="<?php echo $address1;?>" name="current_address" id="current_address" placeholder="Address" maxlength="50"> </div>
                                            <h4 class="flat-location">(FLAT numbers,building,locality)</h4>
                                        </div>
                                        <div id="current_address_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Address Line2</h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $address2;?>" name="current_address_line" id="current_address_line" placeholder="Address" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                        <div id="current_address_line_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Residence Pincode</h3>
                                            <div class="ficon"> <i class="fa fa-map-marker"></i> </div>
                                            <div class="inputbox"> <input type="text" class="input" value="<?php echo $pincode; ?>" name="pincode" id="pincode" placeholder="Pincode" maxlength="50" autocomplete="off"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Which state do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state " name="state" id="state" data-fv-field="loantype">
                                                    <option value="">Select State of current residence</option>
                                                    <?php																					if(isset($states)){																					foreach ($states as $states_name) {?>
                                                    <option value="<?php echo $states_name->state_id; ?>" <?php if($states_name->state_id == $state){echo "selected";} ?>>
                                                        <?php echo $states_name->state_name; ?>
                                                    </option>
                                                    <?php 	}																					}?>
                                                </select> </div>
                                        </div>
                                        <div id="state_error"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3> Which city do you live currently? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="city" id="city" data-fv-field="loantype">
                                                    <option value="">Select city of current residence</option>
                                                    <?php																							if(isset($cities)){																					foreach ($cities as $city_name) {?>
                                                    <!-- <option value="<?php echo $city_name->city_id; ?>" <?php if($city_name->city_id == $city){echo "selected";} ?>><?php echo $city_name->city_name; ?></option> -->
                                                    <?php }} ?>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="inputsection">
                                            <h3>Current Residence Ownership? </h3>
                                            <div class="ficon"> <i class="fa fa-home"></i> </div>
                                            <div class="inputbox"> <select class="input choose-state" name="residence_ownership" id="residence_ownership" data-fv-field="loantype">
                                                    <option value="">Select current residence Ownership</option>
                                                    <option value="Owned" <?php if($residence_type=='Owned' ){echo "selected" ;} ?>>Owned</option>
                                                    <option value="Rent" <?php if($residence_type=='Rent' ){echo "selected" ;} ?>>Rent</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <div class="btn-wrapper"> <button type="submit">Apply Now</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="benefits-Sec">
    <div class="container">
        <div class="heading">
            <h3>Benefits Of Availing Personal Loan From Rokdabazaar</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Hassle free one-stop shop for all kinds of loans</li>
                    <li>Committed to offer the most appropriate solution at the best price</li>
                    <li>Customized solutions for customer specific requirements</li>
                    <li>Quotations for multiple lenders/banks</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loan-benifit">
                    <li>Free credit report check</li>
                    <li>Dedicated relationship management</li>
                    <li>Door-step services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end indian_overseas bank form -->
<?php } ?>
<?php if($params == 'bankname=icici' || $params == $crm_icici_data){?>
<section class="intrest-rate-pl">
    <div class="container">
        <h2>Rate and Fee ICICI Bank Personal Loan</h2>
        <table>
            <tbody>
                <tr>
                    <td class="left-sec-pl">Loan Amount:</td>
                    <td class="text-right right-sc-pl">1,00,000 to 25,00,000</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Loan tenure:</td>
                    <td class="text-right right-sc-pl">12 months to 60 months </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Interest Rate:</td>
                    <td class="text-right right-sc-pl">ICICI Bank Personal loan interest rate start from 11.25 to 20% onwards</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Loan Processing Fee/Charge:</td>
                    <td class="text-right right-sc-pl">Up to 2.25 % of the loan amount</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Cancellation Charges:</td>
                    <td class="text-right right-sc-pl"> Rs.3,000 + GST </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Foreclosure/Prepayment Charges:</td>
                    <td class="text-right right-sc-pl"> 5% of Principal Outstanding + applicable taxes after 12 months.</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Part-Payment Charges:</td>
                    <td class="text-right right-sc-pl">Part payment is not allowed</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Penal Interest/Interest on late payment:</td>
                    <td class="text-right right-sc-pl">24 % per annum of unpaid EMI amount + GST </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Stamp duty & other statutory charges</td>
                    <td class="text-right right-sc-pl">As per applicable laws of the state</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Cheque Return Charges</td>
                    <td class="text-right right-sc-pl">Rs.200+GST</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">EMI bounce charges</td>
                    <td class="text-right right-sc-pl">Rs. 400 Per bounce + GST</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Cheque Swap charges (per swap)</td>
                    <td class="text-right right-sc-pl">Rs.500 +GST</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Repayment Mode Swap Charge </td>
                    <td class="text-right right-sc-pl">Rs.500 +GST</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="loans-intrest-rates hdfc-pl-features">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="benefits-Sec" style="display: block;">
                    <div class="container">
                        <div class="heading">
                            <h3 class="why-choose-hdfc">ICICI Bank Personal Loan Features </h3>
                        </div>
                        <div class="col-md-12">
                            <ul class="loan-benifit">
                                <li>Paperless Approval</li>
                                <li>Low Processing Fee</li>
                                <li>Personal Loan for all Salaried across corporate and Government Institution employees</li>
                                <li>Loan is offered on the basis of Monthly Salary and present company</li>
                                <li>No requirement of Collateral/Security </li>
                                <li>Exclusive offer for Balance Transfer from other Bank/NBFC.</li>
                                <li>Process is easy, quick and hassle free </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="intrest-rate-pl rerquid-loan">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="requid-persnl-loan">Documents Required for ICICI BANK Personal Loan</h2>
                <table>
                    <tbody>
                        <tr>
                            <td class="left-sec-pl">Identity Proof/KYC</td>
                            <td class="text-right right-sc-pl">Pan Card/Aadhar card/Voter card/Driving license/Passport (any one)</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Address Poof</td>
                            <td class="text-right right-sc-pl">Aadhar card/Voter card/Driving license/Passport (any one)</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Bank Statement/Passbook</td>
                            <td class="text-right right-sc-pl">Latest 3 months/Latest 6 months</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Salary Slip</td>
                            <td class="text-right right-sc-pl">Latest 3 months Salary Slip</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Other Documents</td>
                            <td class="text-right right-sc-pl">Form 16<br>Passport size Photograph - 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-7">
                <h2 class="requid-persnl-loan">Eligibility Criteria for ICICI Bank Personal Loan</h2>
                <table>
                    <tbody>
                        <tr>
                            <td class="left-sec-pl">Profession/Employee</td>
                            <td class="text-right right-sc-pl">Any person working in a  private limited companies, or public sector undertakings -including central, state, and local bodies</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Eligible Age</td>
                            <td class="text-right right-sc-pl">23 to 58 Years</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Work Experience Required</td>
                            <td class="text-right right-sc-pl">Should have at least 2 years experience, of which 1 year with current employer</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Minimum Monthly Salary/Income for Eligibility</td>
                            <td class="text-right right-sc-pl">Rs. 17,500 (Rs.25,000 for applicants residing in Delhi & Mumbai ; Rs.20,000 for applicants residing in Bangalore, Chennai, Hyderabad, Kolkata & Pune)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if($params == 'bankname=tata_capital' || $params == $crm_tata_capital_url_data){?>
<section class="intrest-rate-pl">
    <div class="container">
        <h2>Rate and Fee Tata Capital Personal Loan</h2>
        <table>
            <tbody>
                <tr>
                    <td class="left-sec-pl">Loan Amount:</td>
                    <td class="text-right right-sc-pl">75,000 to 25,00,000</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Loan tenure:</td>
                    <td class="text-right right-sc-pl">12 months to 72 months </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Interest Rate:</td>
                    <td class="text-right right-sc-pl">Tata Capital Personal loan interest rate start from 10.50 onwards</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Loan Processing Fee/Charge:</td>
                    <td class="text-right right-sc-pl">Up to 2.5 % of the loan amount (Inclusive of Taxes)</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Foreclosure/Prepayment Charges:</td>
                    <td class="text-right right-sc-pl"> 4.5% of Principal Outstanding + applicable taxes<br> No foreclosure in first 6 months of Disbursal. </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Foreclosure/Prepayment Charges:</td>
                    <td class="text-right right-sc-pl"> 5% of Principal Outstanding + applicable taxes after 12 months.</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Part-Payment Charges:</td>
                    <td class="text-right right-sc-pl">2.5 % + applicable taxes on part-payment amount paid* After 6 month of loan Disbursal up to 25% of principal Outstanding</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Penal Interest:</td>
                    <td class="text-right right-sc-pl">3% on overdue amount per month + applicable taxes </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Stamp duty & other statutory charges</td>
                    <td class="text-right right-sc-pl">As per applicable laws of the state</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Cheque bounce charges</td>
                    <td class="text-right right-sc-pl">Rs. 600 Per bounce/ECS Dishonor + GST</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Cancellation Charges</td>
                    <td class="text-right right-sc-pl">2% of loan amount or ₹ 5750, whichever is higher + GST</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="loans-intrest-rates hdfc-pl-features">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="benefits-Sec" style="display: block;">
                    <div class="container">
                        <div class="heading">
                            <h3 class="why-choose-hdfc">Tata Capital Personal Loan Features </h3>
                        </div>
                        <div class="col-md-12">
                            <ul class="loan-benifit">
                                <li>Paperless Approval</li>
                                <li>Personal Loan for all Salaried across corporate and Government Institution employees</li>
                                <li>Loan is offered on the basis of Monthly Salary and present company</li>
                                <li>No requirement of Collateral/Security</li>
                                <li>Exclusive offer for Balance Transfer from other Bank/NBFC.</li>
                                <li>Process is easy, quick and hassle free</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="intrest-rate-pl">
    <div class="container">
        <h2>Rate and Fee Tata Capital Flexi (CCOD) Personal Loan</h2>
        <table>
            <tbody>
                <tr>
                    <td class="left-sec-pl">Loan Amount:</td>
                    <td class="text-right right-sc-pl">75,000 to 25,00,000</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Loan tenure:</td>
                    <td class="text-right right-sc-pl">12 months to 60 months </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Interest Rate:</td>
                    <td class="text-right right-sc-pl">Tata Capital Personal loan interest rate start from 12.99 onwards</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Loan Processing Fee/Charge:</td>
                    <td class="text-right right-sc-pl">Up to 4.13 % of the loan amount (Inclusive of Taxes)</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Foreclosure/Prepayment Charges:</td>
                    <td class="text-right right-sc-pl"> 4.5% of Principal Outstanding + applicable taxes No foreclosure in first 6 months of Disbursal. </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Part-Prepayment Charges:</td>
                    <td class="text-right right-sc-pl">2.5% + applicable taxes on part-payment amount paid* After 6 month of loan Disbursal</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Penal Interest:</td>
                    <td class="text-right right-sc-pl">3% of EMI amount per month + applicable taxes or Rs. 200 per month (Inclusive of taxes), whichever is higher</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Stamp duty & other statutory charges:</td>
                    <td class="text-right right-sc-pl">As per applicable laws of the state</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Cheque bounce charges:</td>
                    <td class="text-right right-sc-pl">Rs. 600 Per bounce/ECS Dishonor + GST</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">CCOD Annual Maintenance Charges:</td>
                    <td class="text-right right-sc-pl">0.25% on Dropline Amount + GST or ₹ 1000, whichever is higher per year will be deducted from the limit and shall be payable at the end of the 13th month.</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Mandate Rejection Service Charge:</td>
                    <td class="text-right right-sc-pl">₹ 450 + GST (As per Tata Capital T&C)</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="loans-intrest-rates hdfc-pl-features">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="benefits-Sec" style="display: block;">
                    <div class="container">
                        <div class="heading">
                            <h3 class="why-choose-hdfc">Tata Capital Personal Loan Features </h3>
                        </div>
                        <div class="col-md-12">
                            <ul class="loan-benifit">
                                <li>Paperless loan approval</li>
                                <li>CCOD facility</li>
                                <li>Interest charged on a daily basis, as per amount utilized at the end of the day </li>
                                <li>Low processing fee</li>
                                <li>Process is easy quick and hassle free</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="intrest-rate-pl rerquid-loan">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="requid-persnl-loan">Documents Required for Tata Capital Personal Loan</h2>
                <table>
                    <tbody>
                        <tr>
                            <td class="left-sec-pl">Identity Proof/KYC</td>
                            <td class="text-right right-sc-pl">Pan Card/Aadhar card/Voter card/Driving license/Passport</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Address Poof</td>
                            <td class="text-right right-sc-pl">Aadhar card/Voter card/Driving license/Passport</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Bank Statement/Passbook</td>
                            <td class="text-right right-sc-pl">Latest 3 months/Latest 6 months</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Salary Slip</td>
                            <td class="text-right right-sc-pl">Latest 3 months Salary Slip</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Employment Certificate</td>
                            <td class="text-right right-sc-pl">A certificate stating one year of continuous employment</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Other Documents</td>
                            <td class="text-right right-sc-pl">Form 16<br>Passport size Photograph</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-7">
                <h2 class="requid-persnl-loan">Eligibility Criteria for Tata Capital Personal Loan</h2>
                <table>
                    <tbody>
                        <tr>
                            <td class="left-sec-pl">Profession/Employee</td>
                            <td class="text-right right-sc-pl">Any person working in a  private limited companies, or public sector undertakings -including central, state, and local bodies</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Eligible Age</td>
                            <td class="text-right right-sc-pl">22 to 58 Years</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Work Experience Required</td>
                            <td class="text-right right-sc-pl">Should have at least 1 years experience, of which 6 months with current employer</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Minimum Monthly Salary/Income for Eligibility</td>
                            <td class="text-right right-sc-pl">Rs. 15,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if($params == 'bankname=idfc_first' || $params == $crm_idfc_first_data){?>
<section class="intrest-rate-pl">
    <div class="container">
        <h2>Rate and Fee IDFC FIRST Bank Personal Loan</h2>
        <table>
            <tbody>
                <tr>
                    <td class="left-sec-pl">Loan Amount:</td>
                    <td class="text-right right-sc-pl">1,00,000 to 25,00,000</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Loan tenure:</td>
                    <td class="text-right right-sc-pl">12 months to 60 months </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Interest Rate:</td>
                    <td class="text-right right-sc-pl">IDFC FIRST Bank Personal loan interest rate start from 11.25 % onwards</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Loan Processing Fee/Charge:</td>
                    <td class="text-right right-sc-pl">Up to 3.5 % of the loan amount</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Cancellation Charges:</td>
                    <td class="text-right right-sc-pl">Rs.10000 within 30 days of disbursement or 1st EMI presentation whichever is earlier </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Foreclosure/Prepayment Charges:</td>
                    <td class="text-right right-sc-pl"> 5% of Principal Outstanding + applicable taxes.</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Part-Payment Charges:</td>
                    <td class="text-right right-sc-pl">Part Payment is not allowed</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Penal Interest</td>
                    <td class="text-right right-sc-pl">2% of unpaid EMI amount per month + GST or Rs. 300 per month whichever is higher </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Stamp duty & other statutory charges</td>
                    <td class="text-right right-sc-pl">As per applicable laws of the state</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">EMI bounce charges</td>
                    <td class="text-right right-sc-pl">Rs. 400 Per bounce </td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Cheque Swap charges (per swap)</td>
                    <td class="text-right right-sc-pl">500</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Duplicate No Objection Certificate Issuance Charges</td>
                    <td class="text-right right-sc-pl">500T</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Physical Repayment Schedule</td>
                    <td class="text-right right-sc-pl">500</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Physical Statement of Account</td>
                    <td class="text-right right-sc-pl">500</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">Document retrieval charges (per retrieval)</td>
                    <td class="text-right right-sc-pl">500</td>
                </tr>
                <tr>
                    <td class="left-sec-pl">EMI Pickup/ Collection Charges</td>
                    <td class="text-right right-sc-pl">350</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="loans-intrest-rates hdfc-pl-features">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="benefits-Sec" style="display: block;">
                    <div class="container">
                        <div class="heading">
                            <h3 class="why-choose-hdfc">IDFC FIRST Bank Personal Loan Features </h3>
                        </div>
                        <div class="col-md-12">
                            <ul class="loan-benifit">
                                <li>Paperless Approval</li>
                                <li>Low Processing Fee</li>
                                <li>Personal Loan for all Salaried across corporate and Government Institution employees</li>
                                <li>Loan is offered on the basis of Monthly Salary and present company</li>
                                <li>No requirement of Collateral/Security</li>
                                <li>Exclusive offer for Balance Transfer from other Bank/NBFC.</li>
                                <li>Process is easy, quick and hassle free</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="intrest-rate-pl rerquid-loan">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="requid-persnl-loan">Documents Required for IDFC FIRST BANK Personal Loan</h2>
                <table>
                    <tbody>
                        <tr>
                            <td class="left-sec-pl">Identity Proof/KYC</td>
                            <td class="text-right right-sc-pl">Pan Card/Aadhar card/Voter card/Driving license/Passport</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Address Poof</td>
                            <td class="text-right right-sc-pl">Aadhar card/Voter card/Driving license/Passport</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Bank Statement/Passbook</td>
                            <td class="text-right right-sc-pl">Latest 3 months/Latest 6 months</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Salary Slip</td>
                            <td class="text-right right-sc-pl">Latest 3 months Salary Slip</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Other Documents</td>
                            <td class="text-right right-sc-pl">Form 16<br>Passport size Photograph</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-7">
                <h2 class="requid-persnl-loan">Eligibility Criteria for IDFC FIRST Bank Personal Loan</h2>
                <table>
                    <tbody>
                        <tr>
                            <td class="left-sec-pl">Profession/Employee</td>
                            <td class="text-right right-sc-pl">Any person working in a  private limited companies, or public sector undertakings -including central, state, and local bodies</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Eligible Age</td>
                            <td class="text-right right-sc-pl">23 to 58 Years</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Work Experience Required</td>
                            <td class="text-right right-sc-pl">Should have at least 2 years experience, of which 1 year with current employer</td>
                        </tr>
                        <tr>
                            <td class="left-sec-pl">Minimum Monthly Salary/Income for Eligibility</td>
                            <td class="text-right right-sc-pl">Rs. 25,000 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<script type="text/javascript">
$('#state').change(function() { var state = $("#state").val();
    $.ajax({ url: base_url + 'credit_score/getcities', type: 'post', dataType: 'json', data: { 'state_id': state }, success: function(response) { $("#city").html('');
            $("#city").append(response.data); } }); });
</script>