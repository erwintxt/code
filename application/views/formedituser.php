<section class="content-header">
  <h1>
    Edit User
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
                <h3 class="box-title">Form User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="POST" action="/datauser/editpost">
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="Name" placeholder="" type="text"name="name" value="<?php echo $name; ?>" required autofocus>
                    <input type="hidden"name="id" value="<?php echo $id; ?>" required autofocus>
                    <?php echo form_error('name', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control" id="Address" placeholder="" type="text" name="address" value="<?php echo  $address; ?>" required autofocus>
                    <?php echo form_error('address', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="telp">Phone</label>
                    <input class="form-control" id="telp" placeholder="" type="telp" name="telp" value="<?php echo  $telp; ?>" required autofocus>
                    <?php echo form_error('telp', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" placeholder="" type="email" name="email" value="<?php echo  $email; ?>" readonly>
                    <?php echo form_error('email', '<span class="help-block">', '<span>'); ?>
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Change</button>
                  <a href="/datauser" class="btn btn-default">Kembali</a>
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
