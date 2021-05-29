            <?php 
                 $user_id = $this->session->userdata('admin_user_id');            
            ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
            <section class="content-header">
                    <h1>
                        Request Affilliation Table
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
            </section>
                <section class="content">
                 <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Doctor List</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="col-md-12">
                                    <?php if($this->session->flashdata('hospital_success')): ?>
                                        <label class="label label-danger">
                                            <?php echo $this->session->flashdata('hospital_success'); ?>
                                        </label>
                                    <?php endif; ?>
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Doctor Name</th>
                                                <th>Doctor Email</th>
                                                <th>Doctor contact</th>
                                                <th style="width: 300px;">Address</th>
                                                <th style="width: 150px;">Request Affilliation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <?php 
                                                $i = 1;
                                            if(isset($hospitalList))
                                            {   
                                                foreach($hospitalList as $hospitals) 
                                                {?>

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $hospitals->admin_user_name; ?></td>
                                                <td><?php echo $hospitals->admin_user_email; ?></td>
                                                <td><?php echo $hospitals->admin_user_contact; ?></td>
                                                <td><?php echo $hospitals->admin_user_address; ?></td>
                                                <td >   <?php 
                                                             $status = get_request_status_for_hospital($user_id, $hospitals->admin_user_id);
                                                            
                                                         if($status == 'pending'){?>
                                                            <button class="btn btn-info"> Pending </button>
                                                        <?php } elseif($status == 'accepted'){?>
                                                            <button class="btn btn-info" > Accepted </button>
                                                        <?php }elseif($status == 'no_request'){?>
                                                            <button class="btn btn-success" onclick="sendrequest(<?php echo $hospitals->admin_user_id; ?>,1)"> Send Request </button>
                                                        <?php }elseif($status == 'pending_your_side'){ ?>
                                                            <a href="<?php echo base_url()?>hospitals/my_profile/manage_requested_affilliation"> Pending from your side </a>
                                                        <?php }elseif($status == 'Connected'){ ?>
                                                            <button class="btn btn-success">Connected</button>
                                                        <?php }else{?>
                                                            <button class="btn btn-danger" > Cancelled </button>
                                                        <?php } ?>
                                                </td>
                                            </tr>
                                            <?php $i++;  }}?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Doctor Name</th>
                                                <th>Doctor Email</th>
                                                <th style="width: 150px;">Doctor contact</th>
                                                <th style="width: 300px;">Address</th>
                                                <th style="width: 150px;">Request Affilliation</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

    <script>
        function sendrequest(id,id1) 
        {
            var doctor_id = id; 
            var type = id1;
            bootbox.confirm("Do you want to send an associated request to the doctor?", function(result){ 
                if(result == true)
                {    
                    // alert(id1);
                    var  mainUrl = base_url+'admin_hospital/request_affilliation';
                    var formData =  { 'doctor_id': doctor_id, 'type': type} 

                        $.ajax({
                                url: mainUrl,
                                method: "POST",
                                data: formData,
                                dataType: 'json',
                                success: function(response)
                                {
                                    if(response.status)
                                    {

                                         // bootbox.alert(response.message);
                                         location.reload();

                                    }                            
                                }
                            });
                }

            });  

        }
    </script>



     
    <script type="text/javascript">
            $(function() 
            {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
    </script>


        <!-- jQuery 2.0.2 -->
   