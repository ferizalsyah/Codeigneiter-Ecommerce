<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data pengiriman</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($barang as $b){ ?>
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/bank/bank/edit" enctype='multipart/form-data'>
      <div class="box-body">
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Rekening</label>
                  <div class="col-sm-10">
                  <input type="hidden" name="id" value="<?php echo $b->id_bank ?>">
                    <input type="text" name="no_rek" class="form-control" id="inputPassword3" value="<?php echo $b->no_rek ?>">
                  </div>
                </div>  
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Bank</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $b->id_bank ?>">
                    <input type="text" name="nama_bank" class="form-control" id="inputPassword3" value="<?php echo $b->nama_bank?>">
                  </div>
                </div>  
              <div class="box-footer">
                <a href="<?php echo base_url();?>admin/bank/bank" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Tambah</button>
              </div>
              <!-- /.box-footer -->
           <?php } ?>
        </form>
  </div>
</div>