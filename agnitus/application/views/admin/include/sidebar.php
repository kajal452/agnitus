

                <?php echo $current_page =  $this->uri->segment(2);?>

                <ul class="sidebar-menu">
                   
            <?php
            if($this->session->userdata('admin_logged_in') == true)
            {
            ?>
                       



                        <li <?php if($current_page == 'product_list'){ ?>class="active"<?php } ?>>
                            <a href="<?php echo base_url(); ?>admin/product_list">
                                <i class="fa fa-hospital-o"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li <?php if($current_page == 'client_list'){ ?>class="active"<?php } ?>>
                            <a href="<?php echo base_url(); ?>admin/client_list">
                                <i class="fa fa-user"></i>
                                <span>Client</span>
                            </a>
                        </li>

                            <?php  $current_pagess =  $this->uri->segment(1); ?>
                        
                         <?php  $current_pagess1 =  $this->uri->segment(1); ?>

            <?php 
            }
            ?>
</ul>