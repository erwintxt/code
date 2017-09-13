<section class="content-header">
  <h1>
    Change Password
    <small>Form</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Password</li>
  </ol>
</section>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Enter New Password</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="POST" action="/change/post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="oldpassword">Old Password</label>
                    <input class="form-control" id="oldpassword" placeholder="" type="password" name="oldpassword" required>
                    <?php echo form_error('oldpassword', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" placeholder="" type="password" class="form-control" name="password" required>
                    <?php echo form_error('password', '<span class="help-block">', '<span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="password-confirmation">Re Password</label>
                    <input class="form-control" id="password-confirmation" placeholder="" type="password" class="form-control" name="password-confirmation" required>
                    <?php echo form_error('password-confirmation', '<span class="help-block">', '<span>'); ?>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Change</button>
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
