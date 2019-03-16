<div class="container">
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-9">
     <label><h3>Daftar Online</h3></label>
     <?php if($this->session->flashdata('error')){  ?>
     <div class="alert alert-danger">
         <a href="#" class="close" data-dismiss="alert">&times;</a>
         <strong>Invalid</strong>&nbsp;<?php echo $this->session->flashdata('error'); ?>
     </div>
     <?php  } ?>

     <form id="sk" method="post" action="<?php echo base_url();?>root/udata">
     <?php foreach ($list as $row) { ?>
       <div class="panel panel-default">
         <div class="panel-heading">
           <h3 class="panel-title">Identitas Santri :</h3>
         </div>

      <div class="panel-body">
        <div class="form-group">
          <input type="number" name="nop" class="form-control" id="nop" placeholder="Nomor Pendaftaran" value="<?php echo $row->nop;?>" readonly/>
        </div>
        <div class="form-group">
          <input type="text" name="nama" class="form-control" id="nama"  placeholder="nama lengkap" value="<?php echo $row->nama;?>" required/>
        </div>
        <div class="form-group">
            <select class="form-control" id="gender" name="gender">
              <?php $gender = $row->gender;
                 if ($gender == '1') { ?>
                  <option value="1" selected>Laki-laki</option>
                  <option value="2">Perempuan</option>

              <?php } else { ?>
                  <option value="2" selected>Perempuan</option>
                  <option value="1">Laki-laki</option>

              <?php } ?>
            </select>
          </div>
        <div class="form-group">
          <input type="text" name="tempat" value="<?php echo $row->tempat;?>" class="form-control" id="tempat"  placeholder="tempat lahir" required/>
        </div>
        <div class="form-group">
          <input type="date" name="tgl" class="form-control" value="<?php echo $row->lahir;?>" id="tgl"  placeholder="tanggal lahir" required/>
        </div>
          <div class="form-group">
          <?php $anak = explode(",",$row->anak); ?>
            <div class="row">
            <div class="col-sm-3">
              <input type="text" name="anak" class="form-control" id="anak"  value="<?php echo $anak[0];?>" placeholder="Anak ke" required/>
            </div>
            <div class="col-sm-6">
            <input type="text" name="anak1" class="form-control" id="anak1"  value="<?php echo $anak[1];?>" placeholder="Dari Jumlah Saudara" required/>
          </div>
          </div>
        </div>
          <div class="form-group">
            <textarea name="alamat" class="form-control" id="alamat"  placeholder="Alamat" required><?php echo $row->alamat;?></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="nom" value="<?php echo $row->nohp;?>" class="form-control" id="nom"  placeholder="nomor hp" required/>
          </div>
      </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Data Sekolah :</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input type="text" name="sekolah" value="<?php echo $row->sekolah;?>" class="form-control" id="sekolah"  placeholder="Asal Sekolah" required/>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Identitas Orang Tua/Wali :</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">

            <div class="form-group">
              <input type="text" name="namay" value="<?php echo $row->namay;?>" class="form-control" id="namay"  placeholder="Nama Ayah" required/>
            </div>
            <div class="form-group">
              <input type="text" name="namab" value="<?php echo $row->namab;?>" class="form-control" id="namab"  placeholder="Nama Ibu" required/>
            </div>
            <div class="form-group">
              <input type="text" name="joby" class="form-control" id="joby"  value="<?php echo $row->joby;?>" placeholder="Pekerjaan Ayah" required/>
            </div>
            <div class="form-group">
              <input type="text" name="jobb" class="form-control" id="jobb"  value="<?php echo $row->jobb;?>" placeholder="Pekerjaan Ibu" required/>
            </div>
            <div class="form-group">
              <textarea name="alamat1" class="form-control" id="alamat"  placeholder="Alamat Rumah" required><?php echo $row->alamat1;?></textarea>
            </div>
            <div class="form-group">
              <input type="text" name="nom1" value="<?php echo $row->nohp1;?>" class="form-control" id="nom1"  placeholder="nomor hp" required/>
            </div>


          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Progaram Akselarasi Sukses Ujian & Seleksi :</h3>
        </div>
        <div class="panel-body">
        <label>Biaya - Biaya: </label>
            <div class="form-group">
              <select class="form-control" id="pend" name="pen" required>
                <option value="">Jenjang Pendidikan :</option>
                <option value="sd">MI</option>
                <option value="smp">MTS</option>
                <option value="sma">MA</option>
              </select>
            </div>
            <!--sub jenjang-->
            <div id="sd" style="display:none">

                          <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Option</th>
                                  <th>Jenjang</th>
                                  <th>Biaya</th>
                                  <th>fasilitas</th>
                                  <th>Makan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="radio" name="optradio" value="MI"></td>
                                  <td>MI</td>
                                  <td>4.550.0000</td>
                                  <td>Buku</br>kitab</br>asrama</br>makan</td>
                                  <td>3 x sehari</td>
                                </tr>
                              </tbody>
                            </table>
              </div>

            </div>

            <div id="smp" style="display:none">

                          <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Option</th>
                                  <th>Jenjang</th>
                                  <th>Biaya</th>
                                  <th>fasilitas</th>
                                  <th>Makan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="radio" name="optradio" value="MTS"></td>
                                  <td>MTS</td>
                                  <td>5.550.0000</td>
                                  <td>Buku</br>kitab</br>asrama</br>makan</td>
                                  <td>3 x sehari</td>
                                </tr>
                              </tbody>
                            </table>
              </div>

            </div>

            <div id="sma" style="display:none">

                          <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Option</th>
                                  <th>Jenjang</th>
                                  <th>Biaya</th>
                                  <th>fasilitas</th>
                                  <th>Makan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="radio" name="optradio" value="MA"></td>
                                  <td>MA</td>
                                  <td>6.550.0000</td>
                                  <td>Buku</br>kitab</br>asrama</br>makan</td>
                                  <td>3 x sehari</td>
                                </tr>
                              </tbody>
                            </table>
              </div>

            </div>

        </div>
      </div>
    <hr/>

     <button type="submit" id="btn" class="btn btn-success">Update</button>

     <?php } ?>
   </form>

   </div>
   <div class="col-md-2"></div>
 </div>
   </br></br>
 </div>
