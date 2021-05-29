
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Purchase Product
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form id="add_purchase" action="<?php echo base_url(); ?>client/add_purchase" method="post" enctype="multipart/form-data">
                    <div class="box box-danger ">
                        <div class="box-body" style="height: 850px;">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group  ">
                                        <label for="exampleInputEmail1">Product name</label>
                                        <select name="product_id" id="product_id" class="form-control doctors">
                                                  <option value="">Select Product</option>

                                            <?php if(isset($products) && !empty($products)){
                                                    foreach ($products as $products_data) {?>

                                                    <option value="<?php echo $products_data->product_id; ?>" 

                                                         >
                                                        <?php echo $products_data->product_name; ?>
                                                            
                                                        </option>

                                             <?php }} ?>
                                         </select>
                                    </div>
                                    <div class="form-group  ">
                                        <label for="exampleInputEmail1">Product Qty.</label>
                                        <input type="text" name="purchase_product_quantity" id="purchase_product_quantity" class="form-control"  placeholder="Enter Product Qty.">
                                    </div>  
                                </div>
                                
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-md-1 pull-right">
                                    <input type="submit" name="add_purchase" id="add_purchase" class="btn btn-success">
                                </div>
                            </div>
                            <div class="col-md-12">
                                
                                <div class="form-group d-block mx-auto">
                                    <?php if($this->session->flashdata('error')): ?>
                                        <label class="label label-danger">
                                            <p class="text-danger"><?php echo $this->session->flashdata('error'); ?></p>
                                        </label>
                                    <?php endif; ?>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                    
                    </div>
                    
                    </div>
                    </section>
                    </aside>
                    </div>


