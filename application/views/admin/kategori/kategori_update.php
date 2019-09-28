<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Update Data kategori</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php foreach($barang as $b){ ?>
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/kategori/kategori/edit" enctype='multipart/form-data'>
			<div class="box-body">
			<input type="hidden" name="title" value="<?php echo $b->kategori ?>">
      <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">title</label>
                  <div class="col-sm-10">
                    <input type="text" name="kategori" class="form-control" id="inputPassword3" value="<?php echo $b->kategori ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">foto </label>
                  <div class="col-sm-10">
                    <input type="file" name="foto">
                    <input type="hidden" name="foto" class="form-control-file" id="inputPassword3" value="<?php echo $b->foto ?>">
                  </div>
                </div>
              <div class="box-footer">
                <a href="<?php echo base_url();?>admin/kategori/kategori" class="btn btn-danger btn-sm">Batal</a> &nbsp;&nbsp;
                <button type="submit" class="btn btn-info btn-sm">Update</button>
              </div>
              <!-- /.box-footer -->
            <?php } ?>
		</form>
	</div>
</div>