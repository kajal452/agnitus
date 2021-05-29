
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Edit Client
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
                <form id="edit_client" action="<?php echo base_url(); ?>admin_client/edit_client" method="post" enctype="multipart/form-data">
                    <div class="box box-danger ">
                        <div class="box-body" style="height: 850px;">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group  ">
                                        <label for="exampleInputEmail1">Client name</label>
                                        <input type="text" value="<?php echo $edit->client_name; ?>"  class="form-control"  placeholder="Enter Client name">
                                    </div>
                                      <div class="form-group  ">
                                        <label for="exampleInputEmail1">Client Email</label>
                                        <input type="text"   value="<?php echo $edit->client_email; ?>" class="form-control"  placeholder="Enter Client Email">
                                    </div>
                                      <div class="form-group  ">
                                        <label for="exampleInputEmail1">Client Phone</label>
                                        <input type="text"   value="<?php echo $edit->client_phone; ?>" class="form-control"  placeholder="Enter Client Phone">
                                    </div>
                                      <div class="form-group  ">
                                        <label for="exampleInputEmail1">Client Country</label>
                                        <input type="text"   value="<?php echo $edit->product_brand; ?>" class="form-control"  placeholder="Enter Brand Name">
                                    </div>
                                      <div class="form-group  ">
                                        <label for="exampleInputEmail1">Client Wallet Balance</label>
                                        <input type="text" name="client_wallet_balance" id="client_wallet_balance" value="<?php echo $edit->client_wallet_balance; ?>" class="form-control"  placeholder="Enter Wallet Balance">
                                    </div>
                                    
                                            
                                </div>
                                
                                
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group col-md-1 pull-right">
                                    <input value="UPDATE" type="submit" name="edit_client" id="edit_client" class="btn btn-success">

                                    <input type="hidden" value="<?php echo $edit->client_id; ?>" name="id">
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


