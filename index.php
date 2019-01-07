<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<title>Home | TDP</title>
<link rel="shortcut icon" href="<?php echo base_url()?>/_ui/responsive/common/images/favicon.ico" type="images">
<link rel="icon" href="favicon.png" />
<link rel="apple-touch-icon" href="favicon.png"/>
<!-- Bootstrap -->
<link href="<?php echo base_url()?>/_ui/responsive/common/css/bootstrap.4.0.0.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>/_ui/responsive/common/css/jquery.dataTables-1.10.16.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>/_ui/responsive/common/css/jquery.mCustomScrollbar.min.css" rel="stylesheet" />
<link href="<?php echo base_url()?>/_ui/responsive/common/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url()?>/_ui/responsive/common/css/owl.theme.css" rel="stylesheet">
<link href="<?php echo base_url()?>/_ui/responsive/common/css/owl.transitions.css" rel="stylesheet">
<link href="<?php echo base_url()?>/_ui/responsive/common/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
    	$("#complaintform").on('submit',function(e)
		{ 
            
            e.preventDefault(); 
            $("#submit").empty(); 
          	$('#submit').html('<img src="<?php echo base_url()?>/admin/AjaxLoader.gif" alt="" width="24" height=24">');
            	
                $.ajax({
				url: "<?php echo site_url('ajax-complaint');?>",
				type: "POST",      
				data: new FormData(this),
				contentType: false,      
				cache: false,            
				processData:false,       
				success: function(data) 
                    {
                       if(data==1)
                       {
                           $("#name").val(''); 
                           $("#email").val(''); 
                           $("#phone").val(''); 
                           $("#subject").val(''); 
                           $("#complaint").val(''); 
                           $("#submit").empty(); 
                           $('#submit').html('Submit');
                           $('#success').html('<b style="color:green;padding: 2%;">Complaint Booked .we will reach you soon..</b>');
                       }
                       else
                        {
                            $("#success").html(data); 
                        }	
                    }
                });
            
		});
});
</script>
</head>

<body>
  <?php include 'header.php';?>
  <div class="container-fluid">
    <div class="main-container">
      <div class="row">
        <div class="col-sm-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
             <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="_ui\responsive\common\images\silde-01.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="_ui\responsive\common\images\slide-02.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="_ui\responsive\common\images\slide-03.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="row m-0 p-3 tdp__history">
          <div class="col-lg-4 col-md-8 col-8">
            <img src="_ui\responsive\common\images\mla.jpg" class="img-fluid img-responsive">
          </div>
          <div class="col-lg-8  col-md-8 col-8">
          <h3>Information About TDP</h3>
            <p>The Telugu Desam party founded by Dr N T Rama Rao in 1983 aimed at safeguarding the political, economic, social and cultural foundations of telugu speaking people in the country.</p>
            <p>In Principle and also in Practice it is the mission of the TDP the party to protect the dignity and self respect of Telugus and also ensure provision food, shelter and clothing to the common man at affordable and sustainable prices and achieve empowerment of women, youth and all backward segments of society in AndhraPradesh.</p>
          <h3>Sri Nandamuri TarakaRama Rao</h3> 
            <p>N. T. Rama rao (NTR) was born on 28 May 1923 in Nimmakuru, a small village in Gudivada taluk of Krishna District, which was a part of the erstwhile Madras Presidency of British India. He was born to a farming couple, Nandamuri Lakshmaih and Venkata Ramamma</p>
          <h3>Nara Chandrababu Naidu</h3> 
            <p>Nara Chandrababu Naidu (born 20 April 1950) is an Indian politician and 1st Chief Minister of Andhra Pradesh since 2014 after state bifurcation. Previously he served as Chief Minister from 1995 to 2004. He is also the President of the Telugu Desam Party in Andhra Pradesh .</p>
          </div>
          <div class="col-lg-8  col-md-10 col-9 tdp__news">
            <h3>తాజా వార్తల కథనాలు</h3>
           
              <div class="owl-carousel owl-theme" id="owl-carousel">
            <?php 
            foreach($allarticals as $articals)	
            {
                  $originalDate = $articals->artical_date;
            $day = date("d", strtotime($originalDate));
            $mon = date("M", strtotime($originalDate));
            $year = date("Y", strtotime($originalDate));
            ?>
             <div class="item">
                <p class="d-inline-block tdp__news-date"><?=$day?></p>
                <div class="d-inline-block tdp__news-mon">
                  <p><?=$mon?></p>
                  <p><?=$year?></p>
                </div>
                <h3 class="d-inline-block ml-4"><?=$articals->artical_subject?></h3>
                <div class="tdp__news-info"><?=$articals->artical?>
                </div>
              </div>
            <?php  } ?>
            </div>

            </div>
         
         
              <div class="row col-lg-4 col-md-10 col-9  tdp__latest-news">
            <h3 class="d-block w-100">తాజా కార్యక్రమం</h3>
        	<?php $i=1;
            foreach($news as $newnews)	
            {
                  $originalDate = $newnews->news_date;
                  $newsid = $newnews->lnews_id;
            $day = date("d", strtotime($originalDate));
            $mon = date("M", strtotime($originalDate));
            $year = date("Y", strtotime($originalDate));
            
            		if($i==1)
                    {
                        ?>
                        
            <div class="col-sm-2 col-2 tdp__latest-news--date">
              <p><?=$day?></p>
              <p><?=$mon?></p>
              <p><?=$year?></p>
            </div>
            <div class="col-sm-10 col-10 pl-0">
              <div class="radio">
                <input type="radio" name="radio1" id="radio1" checked="checked"  data-target="#newsDetails<?=$newsid?>" data-toggle="modal">
                <label data-target="#newsDetails<?=$newsid?>" data-toggle="modal" style="cursor: pointer;"><?=$newnews->news_title;?></label>
              </div>
            </div>
                        <?php
                    }
                    else{
            ?> 
            <div class="col-sm-2 col-2 tdp__latest-news--date">
              <p><?=$day?></p>
              <p><?=$mon?></p>
              <p><?=$year?></p>
            </div>
            <div class="col-sm-10 col-10 pl-0">
              <div class="radio">
                <input type="radio" name="radio1" id="radio1"  data-target="#newsDetails<?=$newsid?>" data-toggle="modal">
                <label data-target="#newsDetails<?=$newsid?>" data-toggle="modal" style="cursor: pointer;"><?=$newnews->news_title;?></label>
              </div>
            </div>
                    <?php } ?>
            
          <div class="modal" id="newsDetails<?=$newsid?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center">తాజా కార్యక్రమం వివరాలు</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="news-title"><?=$newnews->news_title;?></p>
          <img src="<?php echo base_url()?>_ui/responsive/common/images/<?=$newnews->news_image ?>" class="img-resposive w-100" height="300px">
        </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
            <?php  $i++; } ?>            
          </div>
          <div class="col-sm-9 col-10 tdp__socialstream row">
              <h3 class="d-block w-100">సామాజిక ప్రసారం</h3>
              <div class="col-sm-6  tdp__socialstream--fb">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=400&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                width="450" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
              <div class="col-sm-6 tdp__socialstream--twitter">
                <a class="twitter-timeline" width="450" height="400" href="https://twitter.com/yhkrishna66?ref_src=twsrc%5Etfw">Tweets by yhkrishna66</a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
          </div>
          <div class="col-sm-3 col-10  tdp__complaint" >
            <div class="row">
                <div class="col-sm-12 text-center box mb-3" data-toggle="modal" data-target="#complaintBox">
                    <i class="fas fa-box"></i>
                    <p >Complaint Box</p>
                </div>
                <div class="col-sm-12 text-center box">
                    <i class="fas fa-poll"></i>
                    <p>Online Servey</p>
                </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container-fluid row">
        <div class="col-sm-12 text-center pt-3 footer-social">
            <div class="footer-social__media">
                <a href="javascript:void(0)" class="fa fa-facebook"></a>
                <a href="javascript:void(0)" class="fa fa-twitter"></a>
                <a href="javascript:void(0)" class="fa fa-google"></a>
                <a href="javascript:void(0)" class="fa fa-youtube"></a>
            </div>
            <address class="text-white">
                తెలుగుదేశం పార్టి కార్యాలయం, మండపేట నియోజకవర్గం,<br>
                డోర్.నెం.20-5-7, రధం సెంటర్,<br>
                మండపేట – 533308, తూర్పుగోదావరి జిల్లా,<br>
                ఆంధ్రప్రదేశ్
            </address>
            <P class="hosted">developed and hosted by <a href="www.techywing.com" >Techywing solutions</a></P>
        </div>
    </div>
  </footer>
  <div class="modal" id="complaintBox"tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ఫిర్యాదు రూపం</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="complaintform" method="post" >
              <div class="form-group">
                  <label  for="complaintName" class="">పేరు:</label>
                  <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                </div>
                <div class="form-group">
                  <label  for="complaintEmail" class="">ఇ-మెయిల్:</label>
                  <input type="Email" class="form-control" placeholder="Email" name="email" id="email">
                </div>
                <div class="form-group">
                  <label  for="complaintPhone" class="">ఫోను నంబరు:</label>
                  <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone">
                </div>
               
                <div class="form-group">
                  <label  for="complaintSubject" class="">ఫిర్యాదు విషయం:</label>
                  <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject">
                </div>
                <div class="form-group">
                  <label for="complaint" class="">ఫిర్యాదు:</label>
                 <textarea class="form-control" row="3" name="complaint" id="complaint" ></textarea>
                </div>
        
        </div>
        <div class="modal-footer">
          <button type="submit" id="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        <p id="success" style="margin-top: -9%;"></p>
          </form><br><br>
      </div>
    </div>
  </div>
  
        
         
         
         
       
  
  <script type="text/javascript">
    var ACC = {
      config: {}
    };
  </script>
  <script src="<?php echo base_url()?>/_ui/responsive/common/js/combined.min.js"></script>
  <script src="<?php echo base_url()?>/_ui/responsive/common/js/_autoload.js"></script>
  <script src="<?php echo base_url()?>/_ui/responsive/common/js/owl.carousel.js"></script>
  <script>
    $(document).ready(function () {
      $("#owl-carousel").owlCarousel({
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        items : 1, 
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
      });
    });
  </script>
</body>

</html>