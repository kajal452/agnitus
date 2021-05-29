<?php $admin_id = $this->session->userdata('admin_id'); ?>
            <!-- Right side column. Contains the navbar and content of the page -->

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                     <input type="hidden" name="admin_role" id="admin_role" value="<?php echo $this->session->userdata('admin_role'); ?>">
                      <input type="hidden" name="flag_data" id="flag_data" value="<?php echo $flag_data; ?>">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                     <div class="row">

            <?php if($this->session->userdata('admin_role') == '1'){?>
                      
                    <?php } elseif($this->session->userdata('admin_role') == '2'){
                     $user_id = $this->session->userdata('admin_user_id');
                     $whr_data['admin_user_id']    = $user_id;
                     $whr_data['admin_user_role'] = 2;
                     $result_data  = getAlldataById('tbl_admin_user',$whr_data);
                     if(!empty($result_data)){
                     $admin_details_shift = array_shift($result_data);
                     $admin_user_plan_id = $admin_details_shift->admin_user_plan_id;
                     $admin_covid_vaccination_flag = $admin_details_shift->admin_covid_vaccination_flag;
                     }else{
                     $admin_user_plan_id = ''; 
                     $admin_covid_vaccination_flag = '';  
                     } 
                    ?>
                    <input type="hidden" name="user_plan_id" id="user_plan_id" value="<?php echo $admin_user_plan_id; ?>">
                    <input type="hidden" name="admin_covid_vaccination_flag" id="admin_covid_vaccination_flag" value="<?php echo $admin_covid_vaccination_flag; ?>">
                       
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                         <?php echo count_hospital_consultation($admin_user_id); ?>
                                    </h3>
                                    <p>
                                        Total Consultation
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                  <?php
                             if($admin_user_plan_id == ''){
                             ?>
                                 <a class="small-box-footer" onclick="addSubscriptionPlanAlert(<?php echo $user_id; ?>)">
                            More info <i class="fa fa-arrow-circle-right"></i>
                            </a> 
                                 <?php }else{ ?>
                                  <a href="<?php echo base_url(); ?>hospitals/consultation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                 <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php echo count_affilation_hospital($admin_user_id); ?>
                                    </h3>
                                    <p>
                                       Affiliation  with doctor
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <?php
                             if($admin_user_plan_id == ''){
                             ?>
                              <a class="small-box-footer" onclick="addSubscriptionPlanAlert(<?php echo $user_id; ?>)">
                            More info <i class="fa fa-arrow-circle-right"></i>
                            </a> 
                                 <?php }else{ ?>
                                   <a href="<?php echo base_url(); ?>hospitals/my_profile/request_affilliation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                  <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo count_affilation_request($admin_user_id ); ?>
                                    </h3>
                                    <p>
                                        Affiliation Request
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                 <?php
                             if($admin_user_plan_id == ''){
                             ?>
                               <a class="small-box-footer" onclick="addSubscriptionPlanAlert(<?php echo $user_id; ?>)">
                            More info <i class="fa fa-arrow-circle-right"></i>
                            </a> 
                                 <?php }else{ ?>
                                  <a href="<?php echo base_url(); ?>hospitals/my_profile/manage_requested_affilliation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                 <?php } ?>
                            </div>
                        </div>
                         <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                              <div class="inner">
                             <h3>
                             <?php
                             $total_user = count($user_data);
                             if(!empty($admin_details)){
                             $admin_details_shift = array_shift($admin_details);
                             $admin_user_size = $admin_details_shift->admin_user_plan_id;
                            
                             if($admin_user_size == 1){
                              $admin_user_size_val = 50;
                             }elseif($admin_user_size == 2){
                              $admin_user_size_val = 100;
                             }elseif($admin_user_size == 3){
                              $admin_user_size_val = 300;
                             }elseif($admin_user_size == 4){
                              $admin_user_size_val = 600;
                             }elseif($admin_user_size == 5){
                              $admin_user_size_val = 1000; 
                             }elseif($admin_user_size == 6){
                              $admin_user_size_val = 10000;  
                             }else{
                               $admin_user_size_val = 0;   
                             }
                             }else{
                             $admin_user_size_val = 0;
                             }
                             if($admin_user_size_val == 0){
                              $remaining_user =  0; 
                             }else{
                              $remaining_user = $admin_user_size_val-$total_user;
                             }
                             
                             if($remaining_user){
                             $remaining_user_value = $remaining_user;  
                             }else{
                             $remaining_user_value = 0;   
                             }
                             echo $remaining_user_value;
                             ?>
                             </h3>
                            <p>
                                Remaining Users
                            </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                
                            </div>
                        </div>
                      
                        
            <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Today Appointment Collection</h5>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped" id="appointment_table_id">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name (Contact)</th>
                                    <th>Amount Paid</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Status</th>
                                </tr>    
                            </thead>
                          <tbody>
                                <?php
                                   $admin_user_id = $this->session->userdata('admin_user_id');
                                   // $whr['pay_to_user_id']    = $admin_user_id;
                                  
                                   $plan_purshase_details    = 3;
                                   $result_data   = getAllappointmentBydate('purchase_plan_table',$plan_purshase_details);
            
                                   if(!empty($result_data)){
                                    $i = 1;
                                   foreach ($result_data as $key => $result_data_value) {
                                   $plan_purshase_amount = $result_data_value->plan_purshase_amount;
                                   $plan_purchase_user_id = $result_data_value->plan_purchase_user_id;
                                   $appointment_id = $result_data_value->appointment_id;
                                   $whr_appointment_id['appointment_id'] = $appointment_id ;
                                   $get_appointment_data = getAlldataById('tbl_appointment',$whr_appointment_id);
            
                                    if(!empty($get_appointment_data)){
                                    $get_appointment_data_shift = array_shift($get_appointment_data);
                                    $appointment_date = $get_appointment_data_shift->appointment_date;
                                   
                                    if($get_appointment_data_shift->appointment_status == 0){
                                     $appointment_status = 'Pending';
                                     }else{
                                     $appointment_status = 'Expired';                           
                                      } 
                                   
                                     if($get_appointment_data_shift->appointment_status == 1){ 
                                       $appointment_status = 'Approved';                             
                                     } 
                                    if($get_appointment_data_shift->appointment_status == 2){ 
                                      $appointment_status = 'Rejected';                            
                                    } 
            
            
                                   }else{
                                    $appointment_date = '';
                                    $appointment_status = '';
                                    
                                   }
            
                                   $whrplan_user_id['admin_user_id'] = $plan_purchase_user_id;
                                   $getuser_data = getAlldataById('tbl_admin_user',$whrplan_user_id);
             
                                   if(!empty($getuser_data)){
                                    $getuser_data_shift = array_shift($getuser_data);
                                    $admin_user_name = $getuser_data_shift->admin_user_name; 
                                    $admin_user_contact = $getuser_data_shift->admin_user_contact;
                                   }else{
                                    $admin_user_name = '';
                                    $admin_user_contact = '';
                                   }
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $admin_user_name.' ('.$admin_user_contact.')'; ?> </td>
                                    <td>
                                        <span class="display_currency total_fee" data-currency_symbol="true" data-orig-value="<?php echo $plan_purshase_amount; ?>"><?php echo $plan_purshase_amount; ?></span>
                                    </td>
                                    <td><?php echo $appointment_date; ?></td>
                                    <td><?php echo $appointment_status; ?></td>
                                </tr>
                                <?php
                                   $i++;
                                   }
                                   }else{
                                   
                                   }
                                ?>
                                <?php  if(!empty($result_data)){?>
                                <tr>
                                    <td colspan="2"><strong>Total Amount:</strong></td>
                                    <td colspan="3" id="total_amount"></td>
                                </tr>
                            <?php }else{ ?>
                            <tr>
                            <td colspan="5">
                           No data available in table
                            </td>
                           </tr>
                           <?php  } ?>
                            </tbody>
                        </table>
                         <?php
                        if($admin_user_plan_id == ''){
                        ?>
                        <a class="small-box-footer" onclick="addSubscriptionPlanAlert(<?php echo $user_id; ?>)">More info <i class="fa fa-arrow-circle-right"></i>
                        </a> 
                        <?php }else{?>
                      <a href="<?php echo base_url(); ?>hospitals/my_profile/payUserDetails" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i>
                       </a>
                        <?php } ?>

                   
            <?php }elseif($this->session->userdata('admin_role') == '4'){ 

                       $admin_user_id = $this->session->userdata('admin_user_id');
                       $whr['admin_user_id']    = $admin_user_id;
                       $whr['admin_user_role'] = 4;
                       $result   = getAlldataById('tbl_admin_user',$whr);
                       if(!empty($result)){
                        $result_shift = array_shift($result);
                        $result_shift = $result_shift->admin_user_created_by;
                       }else{
                        $result_shift = '';
                       }

                       ?>
                   <?php 
                       if($result_shift == '' || $result_shift == 1){?>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php echo  $appointment = count_doctor_appointment($admin_user_id); ?>
                                    </h3>
                                    <p>
                                        Total Appointment 
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/appointment" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                         <?php echo count_doctor_consultation($admin_user_id); ?>
                                    </h3>
                                    <p>
                                        Total Consultation
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/consultation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php echo count_affilation_doctor($admin_user_id); ?>
                                    </h3>
                                    <p>
                                       Affiliation with hospital
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/my_profile/request_affilliation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo count_affilation_doctor_request($admin_user_id ); ?>
                                    </h3>
                                    <p>
                                        Affiliation Request
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/my_profile/manage_requested_affilliation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <?php }else{ ?>
                     <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php echo  $appointment = count_hostpital_appointment($result_shift); ?>
                                    </h3>
                                    <p>
                                        Total Appointment 
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/appointment" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                         <?php echo count_hospital_consultation($result_shift); ?>
                                    </h3>
                                    <p>
                                        Total Consultation
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/consultation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    
                        <?php } ?>
            <?php }elseif($this->session->userdata('admin_role') == '7'){ ?>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php echo  $appointment = count_lab_appointment($admin_user_id); ?>
                                    </h3>
                                    <p>
                                        Total Appointment 
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>admin_lab/appointment_list" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                         <?php echo count_lab_appointment_complete($admin_user_id); ?>
                                    </h3>
                                    <p>
                                        Total Complete appointment
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>admin_lab/complete_appointment_list" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php echo count_lab_appointment_reject($admin_user_id); ?>
                                    </h3>
                                    <p>
                                       Reject Appointment
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>admin_lab/appointment_list" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo test_list_lab_count($admin_user_id ); ?>
                                    </h3>
                                    <p>
                                        Numbers of test facility
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>admin_lab/add_tests_lab" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
           
                        <?php }elseif($this->session->userdata('admin_role') == '3'){ ?>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo get_product_count($admin_user_id ); ?>
                                    </h3>
                                    <p>
                                        Total product
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>product_list" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php echo  $appointment = pending_order($admin_user_id,'0'); ?>
                                    </h3>
                                    <p>
                                        Pending Orders 
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>admin_pharmacy/my_order" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                         <?php echo pending_order($admin_user_id,'1'); ?>
                                    </h3>
                                    <p>
                                        Total processing orders
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>admin_pharmacy/my_order" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                         <?php echo pending_order($admin_user_id,'2'); ?>
                                    </h3>
                                    <p>
                                      Total complete order
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>admin_pharmacy/my_order" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        
            <?php }elseif($this->session->userdata('admin_role') == '5'){ ?>
                  <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Police
                                    </h3>
                                    <p>
                                        Total Policeman
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        
                        </div><!-- ./col -->
                        
                    
                  
           <?php }elseif($this->session->userdata('admin_role') == '9'){ ?>
                  <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Ambulance
                                    </h3>
                                    <p>
                                        Total Ambulance
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        
                        </div><!-- ./col -->
                        
                    
                  
           <?php }elseif($this->session->userdata('admin_role') == '6'){ ?>
                  <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Fire Brigade
                                    </h3>
                                    <p>
                                        Total Fire Brigade
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Fire Brigade
                                    </h3>
                                    <p>
                                        Total Fire Brigade
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Fire Brigade
                                    </h3>
                                    <p>
                                        Total Fire Brigade
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
             <?php }elseif($this->session->userdata('admin_role') == '10'){ ?>
               <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                       <?php 
                        $admin_user_id = $this->session->userdata('admin_user_id');
                       $whr['admin_user_id']    = $admin_user_id;
                       $whr['admin_user_role'] = 10;
                       $result   = getAlldataById('tbl_admin_user',$whr);

                       if(!empty($result)){
                        $result_shift = array_shift($result);
                        $result_shift = $result_shift->admin_user_created_by;
                       }else{
                        $result_shift = '';
                       }
                        echo  $appointment = count_hostpital_appointment($result_shift); 
                                ?>
                                    </h3>
                                    <p>
                                        Total Appointment 
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/appointment" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                       
                      
                      
            <?php }elseif($this->session->userdata('admin_role') == '11'){ ?>
              <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                <?php 
                        $admin_user_id = $this->session->userdata('admin_user_id');
                       $whr['admin_user_id']    = $admin_user_id;
                       $whr['admin_user_role'] = 11;
                       $result   = getAlldataById('tbl_admin_user',$whr);

                       if(!empty($result)){
                        $result_shift = array_shift($result);
                        $result_shift = $result_shift->admin_user_created_by;
                       }else{
                        $result_shift = '';
                       }
                        echo  $appointment = count_hostpital_appointment($result_shift); 
                                ?>
                                    </h3>

                                    <p>
                                        Total Appointment 
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/appointment" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                       <?php echo count_hospital_consultation($result_shift); ?>
                                    </h3>
                                    <p>
                                        Total Consultation
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/consultation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php echo count_affilation_hospital($result_shift); ?>
                                    </h3>
                                    <p>
                                       Affiliation with hospital
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="<?php echo base_url(); ?>doctor/my_profile/request_affilliation" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        
                    <?php }?>
 
                    </div><!-- ./col -->

                    </div><!-- /.row -->

                  

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->
                        </section><!-- right col -->
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

 $(document).ready(function() {

  var flag_data = $('#flag_data').val();
  var user_plan_id = $('#user_plan_id').val();
  var admin_covid_vaccination_flag = $('#admin_covid_vaccination_flag').val();
  if(flag_data == 0 && user_plan_id && admin_covid_vaccination_flag == ''){
  var message = '<p class="alert_msg">Are you doing COVID-19 vaccination</p> <div class="alert_div_class"><a class="alertok" href="'+base_url+'covid-19-form"><strong>Ok</strong></a><a class="alertcancel" href="'+base_url+'vaccination-cancel"><strong>Cancel</strong></a></div>';
  bootbox.alert({
    message: message,
    buttons: {
      ok: {
        label: 'Cancel',
        className: "btn-default covid_cancel"
      }
    }
  })

}



   var total_amount = sum_table_col($('#appointment_table_id'), 'total_fee');
   $('#total_amount').text(total_amount);
   function sum_table_col(table, class_name) {
    var sum = 0;
    table
        .find('tbody')
        .find('tr')
        .each(function() {
            if (
                parseFloat(
                    $(this)
                        .find('.' + class_name)
                        .data('orig-value')
                )
            ) {
                sum += parseFloat(
                    $(this)
                        .find('.' + class_name)
                        .data('orig-value')
                );
            }
        });

    return sum;
}
});
</script>