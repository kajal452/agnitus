<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url();?>admin_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url();?>admin_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url();?>admin_assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

        <style type="text/css">
            
            .error{
                color:red;
            }


        </style>
    </head>
    <body class="bg-black">
<div class="form-box" id="login-box">
            <div class="header">Admin Login</div>
            <form name="adminLogin" action="<?php echo base_url(); ?>admin/login" method="post">
                 <?php if($this->session->flashdata('notice')): ?>
                <label class="label label-danger">
               <?php echo $this->session->flashdata('notice'); ?>
                    </label>
                    <?php endif; ?>
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="Admin ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" required="true" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    <p>Create a Account <a href="<?php echo base_url();?>sign_up">Sign Up ... </a></p>
                    <p> <a href="<?php echo base_url();?>client">Client Login</a></p>
                    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
                </div>
            </form>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script type="text/javascript">
            
             var base_url = '<?php echo base_url(); ?>';
        </script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>admin_assets/js/bootstrap.min.js" type="text/javascript"></script>        
                
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/adminFunctions/form-validation.js"></script>
            <?php
                if($this->session->flashdata('notice') != '')
                {
                echo '<script>toastr.warning("'.$this->session->flashdata('notice').'","Notice");</script>';
                }

                if($this->session->flashdata('error') != ''){
                echo '<script>toastr.error("'.$this->session->flashdata('notice').'","Error");</script>';
                }

                if($this->session->flashdata('success') != ''){
                echo '<script>toastr.success("'.$this->session->flashdata('success').'","Success");</script>';
                }
            ?>
    </body>
</html>