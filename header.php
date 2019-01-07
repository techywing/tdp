
  
  
  
 <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url()?>/_ui\responsive\common\images\tdp-logo.png" alt="logo" class="logo">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-capitalize">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('');?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('aboutus');?>">About us</a>
          </li>
            <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('gallery');?>">gallery</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('videos');?>">videos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('contactus');?>">contact us</a>
              </li>
        </ul>
      </div>
	  <div class="text-right d-md-none d-lg-block">
        <img src="<?php echo base_url()?>_ui/responsive/common/images/kumar.jpg" alt="kumar" class="img-responsive rounded-circle">
        <img src="<?php echo base_url()?>_ui/responsive/common/images/lokesh.jpg" alt="mla" class="img-responsive rounded-circle">
      </div>
    </nav>
  </header>
  
  
  
  
  
  
  

 <!--script type="text/javascript" src="<?php echo base_url().$css_files;?>js/date_time.js"></script>
<div class="w3-container" style="padding:6px"><div class="w3-col m3 w3-padding">

 <a href="<?php echo site_url();?>"> 
 <img class="w3-image" src="<?php echo base_url().$css_files;?>images/konnipatis222.jpg"></a> 
 </div>  
 <div class="w3-col m9"> 
 <div class="w3-right-align" style="margin-right:153px;">
  <span id="date_time"></span>
  <script type="text/javascript">window.onload = date_time('date_time');</script>
 </div>

 <div class="w3-bar w3-padding w3-margin w3-large w3-text-grey"> 

 <a href="<?php echo site_url('aboutus');?>" class="w3-bar-item w3-button w3-hide-small">About Us</a> 
 <a href="<?php echo site_url('findachapter');?>" class="w3-bar-item w3-button w3-hide-small">Find A Chapter</a>
 <a href="<?php echo site_url('enquiry');?>" class="w3-bar-item w3-button w3-hide-small">Franchise Enquiry</a> 
 <a href="<?php echo site_url('contact');?>" class="w3-bar-item w3-button w3-hide-small">Contact Us</a>  
 <a href="#" class="w3-bar-item w3-button w3-hide-small">Blog</a>
 <?php
if(isset($_SESSION['user_id']))
{
	?>
	<a href="<?php echo site_url('dashboard');?>" class="w3-bar-item w3-button w3-hide-small">Dashboard</a>
	
	<?php
}
else
{
	?>
	<a href="<?php echo site_url('login');?>" class="w3-bar-item w3-button w3-hide-small">Register/Login</a>
	
	
		<?php
}
 ?> 

  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
  </div>
  
  <div id="demo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium"> 
  <a href="<?php echo site_url('aboutus');?>" class="w3-bar-item w3-mobile w3-button">About KONNIPATIS</a> 
  <a href="<?php echo site_url('findachapter');?>" class="w3-bar-item w3-mobile w3-button">Find A Chapter</a>
  <a href="<?php echo site_url('enquiry');?>" class="w3-bar-item w3-mobile w3-button">Franchise Enquiry</a>
  <a href="<?php echo site_url('contact');?>" class="w3-bar-item w3-mobile w3-button">Contact Us</a>  
<a href="#" class="w3-bar-item w3-mobile w3-button">Blog</a> 
<?php
if(isset($_SESSION['user_id']))
{
	?>
	<a href="<?php echo site_url('dashboard');?>" class="w3-bar-item w3-mobile w3-button">Dashboard</a>
	<?php
}
else
{ ?>
	<a href="<?php echo site_url('login');?>" class="w3-bar-item w3-mobile w3-button">Register/Login</a>
<?php
}
?>
 </div>
 </div>
 </div--> 