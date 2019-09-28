<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data pengiriman</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/bank/bank/simpan" enctype='multipart/form-data'>
			<div class="box-body">
           <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No</label>
                  <div class="col-sm-10">
                    <input type="text" name="id_bank" class="form-control" id="inputPassword3">
                  </div>
                </div>  
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Rekening</label>
                  <div class="col-sm-10">
                    <input type="text" name="no_rek" class="form-control" id="inputPassword3">
                  </div>
                </div>  
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Bank</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_bank" class="form-control" id="inputPassword3">
                  </div>
                </div>  
              <div class="box-footer">
                <a href="<?php echo base_url();?>admin/bank/bank" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Tambah</button>
              </div>
              <!-- /.box-footer -->
          
        </form>
  </div>
</div>