<nav style="background-color:green" class="navbar navbar-default">
 <div class="container">
   <div class="navbar-header">
     <a class="navbar-brand" href="<?php echo base_url();?>home"><img style="margin-top:-10px" height="50px" width="auto" src="<?php echo base_url();?>asset/img/logo.png"/></a>
   </div>
   <ul class="nav navbar-nav">
     <li><a href="#"><marquee><i><b><h4>Santri Cerdas dan Berakhlaq Mulia</h4></b></i></marquee></a></li>
   </ul>
 </div>
</nav>

  <!-- Fixed navbar -->
   <nav class="navbar navbar-inverse">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a style="color:white" class="navbar-brand" href="<?php echo base_url();?>root/dashboard">Home</a>
         <a style="color:white" class="navbar-brand" href="<?php echo base_url();?>root/guru">Guru</a>
         <a style="color:white" class="navbar-brand" href="<?php echo base_url();?>root/manual">Manual</a>
       </div>
       <div id="navbar" class="collapse navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
           <li class="active">

             <?php
               $type=".png";
               $base = base_url()."upload";
              if (file_exists('upload/'.$name.$type)) {
                echo "<img src='$base/$name.png' height='50px' width='auto'/>";
              } else {
                echo "<img src='$base/akun.gif' height='50px' width='auto'/>";
              }
             ?>

           </li>
           <li class="active"><a href="<?php echo base_url();?>root/profile"><?php echo $name;?></a></li>
           <li class="active"><a href="<?php echo base_url();?>root/logout"><span class="glyphicon glyphicon-log-out"></span></a></li>
         </ul>
       </div><!--/.nav-collapse -->
     </div>
   </nav>
