<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Kategori &nbsp;&nbsp;<a href="<?php echo base_url()."admin/pengiriman/pengiriman/tambah/"?>"
        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah </a></h3>
    </div>
 <!-- Main content -->
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Ongkos Kirim</th>
                    <th>Alamat Kirim</th>
                  </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
                foreach ($data->result() as $row) {
                ?>
                <tr>
                  <td><?php echo $row->id_alamat?></td>
                  <td><?php echo $row->ongkir?></td>
                  <td><?php echo $row->kota?></td>
                  <td>
                  <a href="<?php echo base_url()."admin/pengiriman/pengiriman/update/".$row->id_alamat; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."admin/pengiriman/pengiriman/hapus/".$row->id_alamat; ?>" class="btn btn-danger btn-sm">Delete</a>
                  
                </tr>
              </td>
          <?php
          $no++;
          }
          ?>
</table>
</div>