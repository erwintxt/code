<section class="content-header">
  <h1>
    Edit Product
    <small>Form</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Profile</li>
  </ol>
</section>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Form Product</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="POST" action="/dataproduct/editpost">
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Jenis</label>
                    <select name="id_type" class="form-control">
                      <?php
                      foreach($data_type as $dp)
                      {?>
                        <option value="<?php echo $dp['id'];?>" <?php if($id_type==$dp['id']){ echo 'selected';};?> ><?php echo $dp['type_name'];?></option>
                      <?php } ?>
                    </select>
                    <?php echo form_error('id_type', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input class="form-control" id="product_name" placeholder="" type="text"name="product_name" value="<?php echo $product_name; ?>" required autofocus>
                    <input type="hidden"name="id" value="<?php echo $id; ?>" required autofocus>
                    <?php echo form_error('product_name', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="address">Supplier Name</label>
                    <input class="form-control" id="supplier_name" placeholder="" type="text" name="supplier_name" value="<?php echo  $supplier_name; ?>" required autofocus>
                    <?php echo form_error('supplier_name', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="telp">Price</label>
                    <input class="form-control" id="price" placeholder="" type="text" name="price" value="<?php echo  number_format($price,2,',','.'); ?>" required autofocus>
                    <?php echo form_error('price', '<span class="help-block">', '<span>'); ?>
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Change</button>
                  <a href="/dataproduct" class="btn btn-default">Kembali</a>
                  <!--<?php echo validation_errors('<span class="error">', '</span>'); ?>-->
                </div>
                <?php if($this->session->flashdata('pesan')){?>
                <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i>
                        </button>
                                <?php echo '<span class="error">'.$this->session->flashdata('pesan');?>
                </div>
              <?php }; ?>
              </form>
            </div>


          </div>


</section>
