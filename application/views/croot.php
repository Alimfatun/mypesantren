<div class="container">
  <h3>Data Santri</h3>
  <div class="table-responsive">
  <table id="table" class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>NOP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=1;
      foreach($list as $row) { ?>
   <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $row->nop; ?></td>
       <td><?php echo $row->nama; ?></td>
       <td><?php echo $row->alamat;?></td>
       <td><?php echo $row->date;?></td>
       <td><a href="<?php echo base_url();?>root/edata/<?php echo $row->nop;?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a></td>
    </tr>
   <?php } ?>
</tbody>
  </table>
  </div>
</div>
