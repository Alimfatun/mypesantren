<div class="container">
  <h3>Data Guru</h3>
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myAnggota">Input Data</button><hr/>
        <?php if($this->session->flashdata('error')){  ?>
           <div class="alert alert-danger">
               <a href="#" class="close" data-dismiss="alert">&times;</a>
               <strong>Invalid</strong>&nbsp;<?php echo $this->session->flashdata('error'); ?>
           </div>
      <?php  } ?>
  <div class="table-responsive">
  <table id="table" class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Mapel</th>
       <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=1;
      foreach($list as $row) { ?>
   <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $row->nama_guru; ?></td>
       <td><?php echo $row->alamat_guru;?></td>
       <td><?php echo $row->mapel_guru; ?></td>
       <td><?php echo aktif($row->status_guru); ?></td>
   </tr>
   <?php } ?>
</tbody>
  </table>
  </div>
</div>

<div id="myAnggota" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Data Guru</h4>
        </div>
        <div class="modal-body">
          <form id="anggota" method="post" action="<?php echo base_url();?>root/insert_data">
          <div class="form-group">
            <label for="nama_anggota">Nama :</label>
            <input type="text" name="nama" class="form-control" id="nama" required/>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat :</label>
            <textarea class="form-control" name="alamat" id="alamat" required></textarea>
          </div>
          <div class="form-group">
            <label for="Jabatan">Mapel :</label>
            <input type="text" class="form-control" id="mapel" name="mapel" required/>
          </div>
          <div class="form-group">
            <label for="Gender">Status:</label>
              <select class="form-control" id="status" name="status" required>
                <option value="11">Aktif</option>
                <option value="12">Cuti</option>
              </select>
            </div>
          <button type="submit" id="btn" class="btn btn-default">Submit</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
