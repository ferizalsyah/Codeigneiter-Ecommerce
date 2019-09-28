<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data pengiriman</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/pengiriman/pengiriman/simpan" enctype='multipart/form-data'>
			<div class="box-body">
        <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No</label>
                  <div class="col-sm-10">
                    <input type="text" name="id_alamat" class="form-control" id="inputPassword3">
                  </div>
                </div>  
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">kota</label>
                  <div class="col-sm-10">
                    <input type="text" name="kota" class="form-control" id="inputPassword3">
                  </div>
                </div>  
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ongkir</label>
                  <div class="col-sm-10">
                    <input type="text" name="ongkir" class="form-control" id="inputPassword3">
                  </div>
                </div>  
              <div class="box-footer">
                <a href="<?php echo base_url();?>admin/pengiriman/pengiriman" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Tambah</button>
              </div>
              <!-- /.box-footer -->
          
        </form>
  </div>
</div>