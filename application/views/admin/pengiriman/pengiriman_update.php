<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Tambah Data pengiriman</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($barang as $b){ ?>
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/pengiriman/pengiriman/edit" enctype='multipart/form-data'>
      <div class="box-body">
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">kota</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $b->id_alamat ?>">
                    <input type="text" name="kota" class="form-control" id="inputPassword3" value="<?php echo $b->kota ?>">
                  </div>
                </div>  
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ongkir</label>
                  <div class="col-sm-10">
                    <input type="text" name="ongkir" class="form-control" id="inputPassword3" value="<?php echo $b->ongkir?>">
                  </div>
                </div>  
              <div class="box-footer">
                <a href="<?php echo base_url();?>admin/pengiriman/pengiriman" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Update</button>
              </div>
              <!-- /.box-footer -->
           <?php } ?>
        </form>
  </div>
</div>