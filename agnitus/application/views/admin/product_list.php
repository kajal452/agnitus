

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Product Table
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>



                    </ol>


                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                          
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Product List</h3>                                    
                                </div><!-- /.box-header -->

                                <div class="col-md-12">
                                    <?php if($this->session->flashdata('success')): ?>
                                        <label class="label label-success">
                                            <?php echo $this->session->flashdata('success'); ?>
                                        </label>
                                    <?php endif; ?>
                                </div>
                                <div class="box-header">
                                    <h3 class="box-title"><a href="<?php echo base_url(); ?>admin_product"><button class="btn btn-info">Add Product</button></a></h3>                                    
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Name</th>
                                                <th>Price(Per Piece)</th>
                                                <th>Stock</th>
                                                <th style="width: 300px;">Brand</th>
                                                <th style="width: 150px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <?php
                                            $i = 1;
                                             if(isset($productList)){   
                                                foreach($productList as $products) { 
                                                   
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                
                                                <td><?php echo $products->product_name; ?></td>
                                                <td><?php echo $products->product_price; ?></td>
                                                <td><?php echo $products->product_in_stock; ?></td>
                                                
                                                <td><?php echo $products->product_brand; ?></td>
                                                <td>
                                                    <?php
                                                        if($products->product_active == '1'){
                                                    ?>
                                                      <a href="<?php echo base_url(); ?>admin_product/product_edit?id=<?php echo $products->product_id; ?>" onclick="" class="btn btn-success btn-xs">Edit</a> 
                                                        <a href="<?php echo base_url(); ?>admin_product/inactive_row?id=<?php echo $products->product_id; ?>"class="btn btn-success btn-xs">Delete</a>
                                                    <?php
                                                        }else{?>

                                                        <a href="<?php echo base_url(); ?>admin_product/active_row?id=<?php echo $products->product_id; ?>"  class="btn btn-danger btn-xs">Active</a>

                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php
                                                $i++ ;}
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Name</th>
                                                <th>Price(Per Piece)</th>
                                                <th>Stock</th>
                                                <th style="width: 300px;">Brand</th>
                                                <th style="width: 150px;">Action</th>
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





     
    <script type="text/javascript">
            $(function() {
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
   