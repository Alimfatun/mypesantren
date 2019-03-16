<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
  <h3 style="font-size:30px; font-weight:bold;"> Log In</h3>
  <?php if($this->session->flashdata('error')){  ?>
       <div class="alert alert-danger">
           <a href="#" class="close" data-dismiss="alert">&times;</a>
           <strong>Invalid</strong>&nbsp;<?php echo $this->session->flashdata('error'); ?>
       </div>
  <?php  } ?>
  <form id="login" class="form-signin" method="post" name="myForm" action="<?php echo base_url();?>root/verifikasi_login">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" class="form-control" id="nama" placeholder="Enter name" name="nama" required/>
    </div>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required/>
    </div>
  </br>
    <div class="form-group">
        <button type="submit" class="btn btn-block btn-default btn-md"> Log In </button>
    </div>
  </form>
</div>
<div class="col-sm-4"></div>
</div>
</div>
