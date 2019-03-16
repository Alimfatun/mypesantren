<div class="container">

      <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">

        <?php if($this->session->flashdata('success')){  ?>
       <div class="alert alert-success">
           <a href="#" class="close" data-dismiss="alert">&times;</a>
           <strong>Success</strong>&nbsp;<?php echo $this->session->flashdata('success'); ?>
       </div>
      <?php  } ?>

    <?php if($this->session->flashdata('error')){  ?>
       <div class="alert alert-danger">
           <a href="#" class="close" data-dismiss="alert">&times;</a>
           <strong>Error</strong>&nbsp;<?php echo $this->session->flashdata('error'); ?>
       </div>
     <?php  } ?>

      <div class="panel panel-default">      
        <div class="panel-heading">        
          <h3 class="panel-title">Upload Photo <?php echo $name;?> :</h3>
        </div>
        <div class="panel-body">
        <?php echo form_open_multipart('root/do_upload');?>          
          <div class="form-group">            
            <input type="file" name="image" accept="image/*" required>
            <label style="font-size:12px; color:red;"><i>** Photo Maksimal 100KB, format JPG</i></label>
            <input type="hidden" name="nama" value="<?php echo $name;?>"/>
          </div>
          <input type="submit" value="upload" />
          </form>
        </div>              
      </div>


      </div>
      <div class="col-sm-3"></div>
      </div>  
  </div>
