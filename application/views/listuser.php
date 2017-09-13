<section class="content-header">
  <h1>
    Data User
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data User</li>
  </ol>
</section>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">User Data Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php if($this->session->flashdata('pesan')){?>
                <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i>
                        </button>
                                <?php echo '<span class="error">'.$this->session->flashdata('pesan');?>
                </div>
              <?php }; ?>
                <a href="/datauser/create" class="btn btn-primary">Tambah Data</a>
                <table class="table" id="mytable">

                <thead>
                <tr>
                  <th>ID</th>
                  <th>nama</th>
                  <th>alamat</th>
                  <th>email</th>
                  <th>telepon</th>
                  <!--<th>tanggal daftar</th>-->
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
            	     <?php
            		$no=$tot+1;
            		foreach($data_user as $dp)
            		{
            	     ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $dp['name']; ?></td>
                    <td><?php echo $dp['address']; ?></td>
                    <td><?php echo $dp['email']; ?></td>
                    <td><?php echo $dp['telp']; ?></td>

            		<td>
            	        <div class="btn-group">
            	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            	          <ul class="dropdown-menu">
            	            <li><a href="/datauser/edit/<?php echo $dp['id']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
            	            <li><a href="/datauser/hapus/<?php echo $dp['id']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
            	          </ul>
            	        </div><!-- /btn-group -->
            		</td>
                  </tr>
            	 <?php
            	 		$no++;
            	 	}
            	 ?>
                </tbody>
                </table>
                <div class="pagination pagination-centered">
              		<ul>
              		<?php
              		echo $paginator;
              		?>
              		</ul>
              	</div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


            <!-- /.box -->
          </div>


</section>
