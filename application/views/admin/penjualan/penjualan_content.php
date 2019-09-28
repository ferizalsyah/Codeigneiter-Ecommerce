 <div class="box box-primary">
  <div class="box-header">
         <h3 class="box-title">Data Pembayaran &nbsp;&nbsp;<a href="<?php echo base_url()."admin/penjualan/penjualan/tambah/"?>"></a></h3>
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
                    <th>Tgl beli </th>
                    <th>Jumlah </th>
                    <th>Harga </th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
               $query ="SELECT * FROM tbl_pebayaran
                   INNER JOIN tbl_produk ON tbl_pebayaran.d_pembayaran = tbl_produk.nama_produk";
                foreach ($data->result() as $row) {
              ?>
                <tr>
                  <td><?php echo $row->nama_produk; ?></td>
                  <td><?php echo $row->tanggal_pembelian; ?></td>
                  <td><?php echo $row->jumlah;?></td>
                  <td><?php echo $row->harga;?></td>
                  <!-- <td><?php echo $row->bukti_bayar;?></td> -->
                  <!-- <td><?php echo $row->sudah_dibayar;?></td> -->
                  <!-- <td><img src="<?php echo base_url()."assets/dist/img/".$row->foto ?>" width='150px'/></td> -->
                  <td>
            <a href="<?php echo base_url()."admin/penjualan/penjualan/update/".$row->id_pembelian; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."admin/penjualan/penjualan/hapus/".$row->id_pembelian; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php
      $no++;
      }
      ?>
</table>
</div>