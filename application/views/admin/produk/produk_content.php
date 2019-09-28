<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Produk &nbsp;&nbsp;<a href="<?php echo base_url()."admin/produk/produk/tambah/"?>"
        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></h3>
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
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Tgl Input</th>
                    <th>Jumlah</th>
                    <th>Deskripsi</th>
                    <th>Foto </th>
                  </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
                foreach ($data->result() as $row) {
              ?>
                <tr>
                  <td><?php echo $row->nama_produk;?></td>
                  <td><?php echo $row->harga;?></td>
                  <td><?php echo $row->tanggal_input ?></td>
                  <td><?php echo $row->jumlah_produk ?></td>
                  <td><?php echo $row->deskripsi ?></td>
                  <td><img src="<?php echo base_url()."assets/dist/img/".$row->foto ?>" width='150px'/></td>
                  <td>
                  <a href="<?php echo base_url()."admin/produk/produk/update/".$row->id_produk; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."admin/produk/produk/hapus/".$row->id_produk; ?>" class="btn btn-danger btn-sm">Delete</a>
             </td>
          </tr>
          <?php
      $no++;
      }
      ?>
</table>
</div>