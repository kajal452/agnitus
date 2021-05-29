

                <?php echo $current_page =  $this->uri->segment(2);?>

                <ul class="sidebar-menu">
                   
            <?php
            if($this->session->userdata('client_logged_in') == true)
            {
            ?>
                       



                        <li <?php if($current_page == 'product_list'){ ?>class="active"<?php } ?>>
                            <a href="<?php echo base_url(); ?>client/product_list">
                                <i class="fa fa-hospital-o"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li <?php if($current_page == 'purchase_list'){ ?>class="active"<?php } ?>>
                            <a href="<?php echo base_url(); ?>client/purchase_list">
                                <i class="fa fa-user"></i>
                                <span>Purchase List</span>
                            </a>
                        </li>

                            <?php  $current_pagess =  $this->uri->segment(1); ?>
                        
                         <?php  $current_pagess1 =  $this->uri->segment(1); ?>

            <?php 
            }
            ?>
</ul>