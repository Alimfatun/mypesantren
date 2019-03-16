<div class="container">
  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">
  <label><h2>Pendaftaran My Pesantren Oline</h2></label>
  <p>Kartu Pendaftaran Sesuai dengan data berikut ini:</p></br>
  <table class="table">
    <?php foreach ($psb as $row) { ?>
   <tbody>
     <tr>
       <td class="psb">NOP</td>
       <td class="psb"><?php echo $row->nop;?></td>
     </tr>
     <tr>
       <td class="psb">Nama lengkap</td>
       <td class="psb"><?php echo $row->nama;?></td>
     </tr>
     <tr>
       <td class="psb">Alamat</td>
       <td class="psb"><?php echo $row->alamat;?></td>
     </tr>
     <tr>
       <td class="psb">Nomor Hp</td>
       <td class="psb"><?php echo $row->nohp;?></td>
     </tr>
     <tr>
       <td class="psb">Program</td>
       <td class="psb"><?php echo $row->program;?></td>
     </tr>
      <tr>
       <td class="psb">Sekolah</td>
       <td class="psb"><?php echo $row->sekolah;?></td>
     </tr>
   </tbody>
   <?php } ?>
 </table>
 CATATAN :</br>
 Dengan menandatangani FORMULIR ini siswa menyatakan bahwa :</br>
 1. Semua data yang di isikan dalam FORMULIR ini adalah BENAR.</br>
 2. Bersedia memahami dan mematuhi ketentuan / tata tertib</br>
 3. UANG yang sudah dibayarkan tidak dapat di tarik kembali</br>
 <hr/>
 <table>
   <tr>
     <td id="pn" class="col-sm-3">HORMAT SAYA</br>SISWA</br></br></br>( ...................................... )</td>
     <td id="pn" class="col-sm-4">MENGETAHUI</br>ORANG TUA/WALI</br></br></br>( ...................................... )</td>
     <td id="pn" class="col-sm-3">&nbsp;</br>PETUGAS</br></br></br>( ................................... )</td>
   </tr>
  </table>
  <button onclick="myFunction()">Print</button>

<script>
function myFunction() {
    window.print();
}
</script>

</div>
<div class="col-md-2"></div>
</div>
</div>
