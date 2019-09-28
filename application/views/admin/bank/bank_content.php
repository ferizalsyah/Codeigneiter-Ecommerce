<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Kategori &nbsp;&nbsp;<a href="<?php echo base_url()."admin/bank/bank/tambah/"?>"
        class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Bank</a></h3>
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
                    <th>No Rekening</th>
                    <th>Bank</th>
                  </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
                foreach ($data->result() as $row) {
                ?>
                <tr>
                  <td><?php echo $row->id_bank?></td>
                  <td><?php echo $row->no_rek?></td>
                  <td><?php echo $row->nama_bank?></td>
                  <td>
                  <a href="<?php echo base_url()."admin/bank/bank/update/".$row->id_bank; ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?php echo base_url()."admin/bank/Bank/hapus/".$row->id_bank; ?>" class="btn btn-danger btn-sm">Delete</a>
                  
                </tr>
              </td>
          <?php
          $no++;
          }
          ?>
</table>
</div>