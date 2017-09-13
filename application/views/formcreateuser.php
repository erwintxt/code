<section class="content-header">
  <h1>
    Create User
    <small>Form</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">User</li>
  </ol>
</section>


<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Crate User</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="POST" action="/datauser/createpost">
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="Name" placeholder="" type="text"name="name" value="" required autofocus>
                    <?php echo form_error('name', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control" id="Address" placeholder="" type="text" name="address" value="" required autofocus>
                    <?php echo form_error('address', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="telp">Phone</label>
                    <input class="form-control" id="telp" placeholder="" type="telp" name="telp" value="" required autofocus>
                    <?php echo form_error('telp', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" placeholder="" type="email" name="email" value="" required>
                    <?php echo form_error('email', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="password">password</label>
                    <input class="form-control" id="password" placeholder="" type="password" name="password" value="" required>
                    <?php echo form_error('password', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="email">Re Password</label>
                    <input class="form-control" id="password-confirmation" placeholder="" type="password" name="password-confirmation" value="" required>
                    <?php echo form_error('password-confirmation', '<span class="help-block">', '<span>'); ?>
                  </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/datauser" class="btn btn-default">Kembali</a>
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
