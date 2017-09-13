<section class="content-header">
  <h1>
    Data Product
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Product</li>
  </ol>
</section>

<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Product Data Table</h3>
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
                <a href="/dataproduct/create" class="btn btn-primary">Tambah Data</a>
                <table class="table" id="mytable">

                <thead>
                <tr>
                  <th>ID</th>
                  <th>Jenis</th>
                  <th>Nama Product</th>
                  <th>Nama Supplier</th>
                  <th>Harga</th>
                  <!--<th>tanggal daftar</th>-->
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
            	     <?php
            		$no=$tot+1;
            		foreach($data_product as $dp)
            		{
            	     ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $dp['type_name']; ?></td>
                    <td><?php echo $dp['product_name']; ?></td>
                    <td><?php echo $dp['supplier_name']; ?></td>
                    <td align="right"><?php echo number_format($dp['price'],2,',','.'); ?></td>

            		<td>
            	        <div class="btn-group">
            	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            	          <ul class="dropdown-menu">
            	            <li><a href="/dataproduct/edit/<?php echo $dp['id_pd']; ?>"><i class="icon-pencil"></i> Edit Data</a></li>
            	            <li><a href="/dataproduct/hapus/<?php echo $dp['id_pd']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
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
