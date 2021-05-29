
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Add Product
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
                <form id="add_product" action="<?php echo base_url(); ?>admin_product/add_product" method="post" enctype="multipart/form-data">
                    <div class="box box-danger ">
                        <div class="box-body" style="height: 850px;">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group  ">
                                        <label for="exampleInputEmail1">Product name</label>
                                        <input type="text" name="product_name" id="product_name" class="form-control"  placeholder="Enter Product name">
                                    </div>
                                      <div class="form-group  ">
                                        <label for="exampleInputEmail1">Product Price</label>
                                        <input type="text" name="product_price" id="product_price" class="form-control"  placeholder="Enter Product Price (Per Qty.)">
                                    </div>
                                      <div class="form-group  ">
                                        <label for="exampleInputEmail1">Product In Stock</label>
                                        <input type="text" name="product_in_stock" id="product_in_stock" class="form-control"  placeholder="Enter Product Stock">
                                    </div>
                                      <div class="form-group  ">
                                        <label for="exampleInputEmail1">Product Brand</label>
                                        <input type="text" name="product_brand" id="product_brand" class="form-control"  placeholder="Enter Brand Name">
                                    </div>
                                    
                                            
                                </div>
                                
                                
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group col-md-1 pull-right">
                                    <input type="submit" name="add_product" id="add_product" class="btn btn-success">
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
                            </div><!-- /.box-body -->
                        </div>
                    </form>
                    
                    </div>
                    
                    </div>
                    </section>
                    </aside>
                    </div>


