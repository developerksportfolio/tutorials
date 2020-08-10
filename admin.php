<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Developer KS | © Tutorials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<script>
     //More Videos
	    function getSelectedMoreVideosPerfekt(sortid){
		  var el = document.getElementById("content_left");
		      content_left = el.value;
	      for (var i=0;i<document.getElementsByName('sortid').length;i++){
               document.getElementsByName('sortid')[i].value;
          }  
		  
		  $.post("player.php" , {content_left:content_left, sortid:sortid},  function(res,status){
		  if(status != 'success')  { 
		  }else{
		        el = document.getElementById("content_left");
		        if(el){
		            el.innerHTML = res;
		        }
		    }
		 },"json"); // 
		  return true;
		} 
		function getSelectedMoreVideosSpielend(sortid){
		  var el = document.getElementById("content_left");
		      content_left = el.value;
	      for (var i=0;i<document.getElementsByName('sortid').length;i++){
               document.getElementsByName('sortid')[i].value;
          }  
		  
		  $.post("spielendplayer.php" , {content_left:content_left, sortid:sortid},  function(res,status){
		  if(status != 'success')  { 
		  }else{
		        el = document.getElementById("content_left");
		        if(el){
		            el.innerHTML = res;
		        }
		    }
		 },"json"); // 
		  return true;
		} 
	function getSelectedPerfekt(){
		  var el = document.getElementById("content_left");
		      content_left = el.value;

		  $.post("videos.php" , {content_left:content_left},  function(res,status){
		  if(status != 'success')  { 
		  }else{
		        el = document.getElementById("content_left");
		        if(el){
		            el.innerHTML = res;
		        }
		    }
		 });
		  return true;
		} 
	function getSelectedSpielendVideos(){
	  var el = document.getElementById("content_left");
		  content_left = el.value;

	  $.post("spielendskatenvideos.php" , {content_left:content_left},  function(res,status){
	  if(status != 'success')  { 
	  }else{
			el = document.getElementById("content_left");
			if(el){
				el.innerHTML = res;
			}
		}
	 });
	  return true;
	} 
	function getSelectedSpielendFotos(){
	  var el = document.getElementById("content_left");
		  content_left = el.value;

	  $.post("photo.php" , {content_left:content_left},  function(res,status){
	  if(status != 'success')  { 
	  }else{
			el = document.getElementById("content_left");
			if(el){
				el.innerHTML = res;
			}
		}
	 });
	  return true;
	}
  	function getSelectedPerfektSuchen(){
		  var el = document.getElementById("content_left");
		      content_left = el.value;
      var el = document.getElementById("suchen");
		      suchen = el.value;
          

		  $.post("suchen.php" , {content_left:content_left, suchen:suchen},  function(res,status){
		  if(status != 'success')  { 
		  }else{
		        el = document.getElementById("content_left");
		        if(el){
		            el.innerHTML = res;
		        }
		    }
		 });
		  return true;
		}  
</script>
<style>
div.file {
  	border:1px solid #ebebeb;
	padding:10px 5px;
	border:1px solid #CCC;
	margin:10px 0 0 0;
	background-color:#ebebeb;
}
</style>
</head>
<body>
<div id="container">
  <div id="title">
    <div id="title"><a href="index.php" style="color:#fff;">Tutorials</a></div>
  </div>
  <!-- end of title -->
  <div id="menu">
    <center><ul>
      <li><span><h2>Video Tutorials | Photo Tutorials | E-Book Tutorials</h2></span></li>
    </ul></center>
  </div>
  <!-- end of menu -->
  <div id="banner">
    <div id="one" class="contentslider">
      <div class="cs_wrapper">
        <div class="cs_slider">
          <div class="cs_article"><img src="images/tutorial.png" alt="" />
            <div class="text">
              <h2 style="color:#fff;">Video Tutorials</h2>
              <p> Mehr Spass – mehr Leistung – mehr Erlebnis </br> mit unsere Video Tutorials </p>
              </br><a class="jschauen" href ="video.php"><label style="color:#000; cursor:pointer;">Videos</label></a>
              <!--type="submit" onclick='javascript:getSelectedPerfekt();'-->
              </div>
          </div>
          <!-- End -->
          <div class="cs_article"><img src="images/tutorial.png" alt="" />
            <div class="text">
              <h2 style="color:#fff;">Photo Tutorials</h2>
              <p> Mehr Spass – mehr Leistung – mehr Erlebnis </br> mit unsere Photo Tutorials </p>
              </br><a class="jschauen" href ="photo.php"><label style="color:#000; cursor:pointer;">Photos</label></a>
              <!--type="submit" onclick='javascript:getSelectedSpielendFotos();'-->
            </div>
          </div>
          <!-- End  -->
         </div>
        <!-- End cs_slider -->
      </div>
      <!-- End cs_wrapper -->
    </div>
    <!-- End contentslider -->
    <!-- Site JavaScript -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
    <script type="text/javascript">
			$(function() {
				$('#one').ContentSlider({
					width : '938px',
					height : '300px',
					speed : 800,
					easing : 'easeInOutBack'
				});
			});
		</script>
  </div>
  <!-- end ob banner -->
  <div id="content">
    <div style="height: 210px !important;" id="content_left" class="panel-body">
      <h2>Video/Photo Upload</h2>
      <p><b>Hinweiss:</b></br> Hier können Sie Ihre Video/Photo Tutorials hochladen!</p>
      <div class="file">
	    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Video/Photo suchen:</label>
        <input type="file" name="file" id="file" /> 
        <input style="margin-left:-15px;" type="submit" name="submit" value="Upload" />
        </form>
      </div>
        <br>
        <p><b>Achtung:</b></br> Ihre Video/Photo Tutorials werden von uns überprüft und freigeschaltet!</p>
        <div class="cleaner" style="height:20px">&nbsp;</div>
    </div>
    <!-- end of content left -->
    <div id="content_right">
      <div class="cleaner">&nbsp;</div>
        <p style="font-size:12px;"><input type="text" name="suchen" id="suchen" placeholder="Suchen"><a class="jschauen" type="submit" onclick='javascript:getSelectedPerfektSuchen();' style=" margin-top:10px;">Suchen</a></p>
      <br>
      <div>
       <center><p><h2>Do you Enjoy this Tutorial!</h2>

      If you find this Tutorial Cool, feel free to donate any amount you wish. It will help pay for my hosting!
      </p>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="MCUEXX5ESDSKE">
      <input type="image" src="https://www.paypalobjects.com/en_US/AT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
      </form>
      <p><h2>Thank You!</h2>
      </p></center>
      </div>
    </div>
    <!-- end of content right -->
    <div id="bottom_bg"></div>
  </div>
  <!-- end of content -->
  <!--<div id="bottom_panel">
  </div>-->
  <!-- end of bottom panel -->
  <div id="footer"> 
  <p>&copy; Copyright <?php echo date('Y'); ?> <a href ="http://www.abedinhyseni.work" target="_blank"> Developer KS | © Portfolio.</a>&nbsp;Powered by: Developer KS | © Portfolio</p>
  </div>
  <!-- end of footer -->
</div>
<!-- end of container -->
</body>
</html>
