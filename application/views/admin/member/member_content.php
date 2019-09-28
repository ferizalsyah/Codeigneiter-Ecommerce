<div class="box box-primary">
  <div class="box-header">
        <h3 class="box-title">Data Member &nbsp;&nbsp;<a href="<?php echo base_url()."admin/member/member/tambah/"?>"></i></a></h3>
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
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
               <?php 
               $no = 1;
                foreach ($data->result() as $row) {
              ?>
                <tr>

                  <td><?php echo $row->username;?></td>
                  <td><?php echo $row->email ?></td>
                  <td>
                  <a href="<?php echo base_url()."admin/member/member/update/".$row->id_user; ?>" class="btn btn-success btn-sm">lihat</a>
                  <a href="<?php echo base_url()."admin/member/member/hapus/".$row->id_user; ?>" class="btn btn-danger btn-sm">Delete</a>
             </td>
          </tr>
          <?php
      $no++;
      }
      ?>
</table>
</div>