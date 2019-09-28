<div class="box box-primary">
	<div class="box-header">
        <h3 class="box-title">Lihat Data Member</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>/admin/member/member/update" enctype='multipart/form-data'>
			<div class="box box-primary">
			<div class="box-header">
        <h3 class="box-title"> Member</h3>
      </div>  
      
        <?php foreach($barang as $b){ ?>
          <div class="box-body">
        <input type="hidden" name="id_user" value="<?php echo $b->id_user ?>">
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nama lengkap</label>
              <div class="col-sm-10">
                <input type="text" readonly name="username" class="form-control" id="inputPassword3" value="<?php echo $b->username ?>" >
              </div>
            </div>
            <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email </label>
                  <div class="col-sm-10">
                    <input type="harga" readonly name="email"  class="form-control" id="inputPassword3" value="<?php echo $b->email ?>">
                  </div>
                </div>

            <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Gender </label>
                  <div class="col-sm-10">
                    <input type="harga" readonly name="gender"  class="form-control" id="inputPassword3" value="<?php echo $b->gender ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Level User </label>
                  <div class="col-sm-10">
                    <input type="harga" readonly name="level_user"  class="form-control" id="inputPassword3" value="<?php echo $b->level_user ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Join </label>
                  <div class="col-sm-10">
                    <input type="harga" readonly name="tgl_join"  class="form-control" id="inputPassword3" value="<?php echo $b->tgl_join ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Hp </label>
                  <div class="col-sm-10">
                    <input type="harga" readonly name="no_hp"  class="form-control" id="inputPassword3" value="<?php echo $b->no_hp ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Lokasi</label>
                  <div class="col-sm-10">
                    <input type="harga" readonly name="lokasi"  class="form-control" id="inputPassword3" value="<?php echo $b->lokasi ?>">
                  </div>
                </div>

       <!--  <table class="table table-bordered">
          <thead>
        <td>No</td>
        <td>Nama Produk</td>
        <td>Tgl Bayar</td>
        <td>No Resi</td>
        <td>Harga</td>
        <td>Id Pembelian</td>
        </thead>
            <?php
            $no=1;  
            $query = "SELECT * FROM tbl_pembelian INNER JOIN tbl_user ON tbl_pembelian.id_user_pembeli= tbl_user.id_user";
            

              ?>          
              <tr>
                <td><?=$no++?></td>
                <!-- <td><?php echo $row->nama_produk;?></td> -->

              </tr>
             

        </table>
              <div class="box-footer">
              
              </div>
              <!-- /.box-footer -->
            <?php } ?>
          
        </div>
		</form>
	</div>
</div>