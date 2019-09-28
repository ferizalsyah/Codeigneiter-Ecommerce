 <div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Transaksi &nbsp;&nbsp;<a href="<?php echo base_url()."admin/pembelian/pembelian/tambah/"?>"></a></h3>
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
                    <th>No Resi</th>
                    <th>Nama Produk</th>
                    <th>Tanggal Bayar</th>
                    <th>Harga</th>
                    <th>Id Pembelian</th>
                    <th>Aksi</th>
                 
                  </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
               // $query = "select * FORM "
                foreach ($data->result() as $row) {
              ?>
                <tr>
                  <td><?php echo $row->id_pembelian; ?></td>
                  <td><?php echo $row->kode_resi; ?></td>
                  <td><?php echo $row->nama_produk;?></td>
                  <td><?php echo $row->tanggal_pembelian; ?></td>
                  <td><?php echo $row->harga;?></td>
                  <td><?php echo $row->id_pembelian;?></td>
                  <!-- <td><?php echo $row->sudah_bayar;?></td> -->
                  <!-- <td><img src="<?php echo base_url()."assets/dist/img/".$row->bukti_bayar ?>" width='150px'/></td> -->
                  <td>
            <a href="<?php echo base_url()."admin/pembelian/pembelian/update/".$row->id_pembelian; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."admin/pembelian/pembelian/hapus/".$row->id_pembelian; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
</table>
</div>