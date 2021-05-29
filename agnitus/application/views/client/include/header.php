
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AGNITUS | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>admin_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>admin_assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>admin_assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>admin_assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url(); ?>admin_assets/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/bootstrap-multiselect.css" />

         <link rel="stylesheet" href="<?php echo base_url(); ?>admin_assets/css/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
        <link href="<?php echo base_url(); ?>admin_assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />

        <style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

        <link href="<?php echo base_url(); ?>admin_assets/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
        <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';
        </script>

        <!-- bootstrap wysihtml5 - text editor -->

<?php
    $url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $last = explode("/", $url);
    $getLast = end($last); 
?>
        <?php if($getLast == 'dashboard'){  ?>
        <link href="<?php echo base_url(); ?>admin_assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <?php } ?>
        
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>admin_assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <style type="text/css"> .error{ color: red;} </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script>
                var base_url =  "<?php echo  base_url();?>";
        </script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>admin_assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        
        <script src="<?php echo base_url(); ?>admin_assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>admin_assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url();?>client/product_list" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AGNITUS
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=" user-menu">
                            <a href="#" class="btn btn-default btn-flat">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $this->session->userdata('client_name'); ?> <i class="caret"></i></span>
                            </a>
                             
                                        <a href="<?php echo base_url(); ?>client/client_logout" class="btn btn-default btn-flat">Sign out</a>
                                   
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>admin_assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $this->session->userdata('client_name'); ?></p>
                            <p>Balance - <?php echo $this->session->userdata('client_wallet_balance'); ?></p> Rs\-
                            </br>    
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <!--<form action="#" method="get" class="sidebar-form">-->
                    <!--    <div class="input-group">-->
                    <!--        <input type="text" name="q" class="form-control" placeholder="Search..."/>-->
                    <!--        <span class="input-group-btn">-->
                    <!--            <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>-->
                    <!--        </span>-->
                    <!--    </div>-->
                    <!--</form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php
                        include_once("sidebar.php");
                    ?>
                </section>
                <!-- /.sidebar -->
            </aside>
           <!--start notification section -->
                    <input type="hidden" value="<?php echo $this->session->userdata('admin_user_id'); ?>" id="admin_user_id_val">
                     <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
                     <!-- add Bootstrap Notify - Optional -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css" >
                     <script src="https://shareurcodes.com/js/bootstrap-notify.min.js" ></script>
                    <!-- add Material Design Lite Custom - Optional -->
                    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                    <!-- add Pusher -->
                   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-deep_purple.min.css" />
                  
            <script>
                    // Enable pusher logging - don't include this in production
                    Pusher.logToConsole = true;
                    var pusher = new Pusher('28c801703b91864659be', {
                      cluster: 'ap2'
                    });

                    var channel = pusher.subscribe('my-channel');
                    channel.bind('my-event', function(data) {
                    var admin_id = document.getElementById("admin_user_id_val").value;
                    var police_station_id = data.police_station_id;
                    if(police_station_id == admin_id){
                    $.notify({
	               // options
            	  icon: 'glyphicon glyphicon-warning-sign',
	              title: 'Trouble notify',
	              message: 'Someone is in trouble',
	              url: base_url+'Police/trouble_user/'+data.police_latitude+'/'+data.police_longitude+'/'+data.trouble_user_id,
	              target: '_blank'
                  },{
                // settings
	             element: 'body',
	             position: null,
	             type: "danger",
	             allow_dismiss: true,
	            newest_on_top: false,
	            showProgressbar: false,
            	placement: {
		       from: "bottom",
		       align: "right"
	           },
              offset: 20,
	          spacing: 10,
	          z_index: 1031,
	          delay: 8000,
	          timer: 8000,
	          url_target: '_blank',
	          mouse_over: null,
	         animate: {
		     enter: 'animated fadeInDown',
		     exit: 'animated fadeOutUp'
	         },
        	onShow: null,
        	onShown: null,
        	onClose: null,
        	onClosed: null,
        	icon_type: 'class',

             });
            }
            });
            </script>
             <script>
                    // Enable pusher logging - don't include this in production
                    Pusher.logToConsole = true;
                    var pusher = new Pusher('28c801703b91864659be', {
                      cluster: 'ap2'
                    });

                    var channel = pusher.subscribe('my-channel');
                    channel.bind('my-event', function(data) {
                    var admin_id = document.getElementById("admin_user_id_val").value;
                    var firebrigade_id = data.firebrigade_id;
                    if(firebrigade_id == admin_id){
                    $.notify({
	               // options
            	  icon: 'glyphicon glyphicon-warning-sign',
	              title: 'Trouble notify',
	              message: 'Someone is in trouble',
	              url: base_url+'Police/firebrigade_trouble_user/'+data.firebrigade_latitude+'/'+data.firebrigade_longitude+'/'+data.firebrigade_trouble_user_id,
	              target: '_blank'
                  },{
                // settings
	             element: 'body',
	             position: null,
	             type: "danger",
	             allow_dismiss: true,
	            newest_on_top: false,
	            showProgressbar: false,
            	placement: {
		       from: "bottom",
		       align: "right"
	           },
              offset: 20,
	          spacing: 10,
	          z_index: 1031,
	          delay: 8000,
	          timer: 8000,
	          url_target: '_blank',
	          mouse_over: null,
	         animate: {
		     enter: 'animated fadeInDown',
		     exit: 'animated fadeOutUp'
	         },
        	onShow: null,
        	onShown: null,
        	onClose: null,
        	onClosed: null,
        	icon_type: 'class',

             });
            }
            });
            </script>
             <script>
                    // Enable pusher logging - don't include this in production
                    Pusher.logToConsole = true;
                    var pusher = new Pusher('28c801703b91864659be', {
                      cluster: 'ap2'
                    });

                    var channel = pusher.subscribe('my-channel');
                    channel.bind('my-event', function(data) {
                    var admin_id = document.getElementById("admin_user_id_val").value;
                    // alert(admin_id);
                    var ambulance_id = data.ambulance_id;
                    if(ambulance_id == admin_id){
                    $.notify({
	               // options
            	  icon: 'glyphicon glyphicon-warning-sign',
	              title: 'Trouble notify',
	              message: 'Someone is in trouble',
	              url: base_url+'Admin_ambulance/trouble_user/'+data.ambulance_latitude+'/'+data.ambulance_longitude+'/'+data.ambulance_trouble_user_id,
	              target: '_blank'
                  },{
                // settings
	             element: 'body',
	             position: null,
	             type: "danger",
	             allow_dismiss: true,
	            newest_on_top: false,
	            showProgressbar: false,
            	placement: {
		       from: "bottom",
		       align: "right"
	           },
              offset: 20,
	          spacing: 10,
	          z_index: 1031,
	          delay: 8000,
	          timer: 8000,
	          url_target: '_blank',
	          mouse_over: null,
	         animate: {
		     enter: 'animated fadeInDown',
		     exit: 'animated fadeOutUp'
	         },
        	onShow: null,
        	onShown: null,
        	onClose: null,
        	onClosed: null,
        	icon_type: 'class',

             });
            }
            });
            </script>
        <!-- end notification section -->