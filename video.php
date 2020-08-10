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

	  $.post("fotos.php" , {content_left:content_left},  function(res,status){
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
<style type="text/css">
div.galerie{
	padding: 3px;
	background-color:#ebebeb;
	border:1px solid #CCC;
	float:left;
	margin:10px 10px 0  0;
	font-family:Arial, Helvetica, sans-serif;	
}
div.galerie:hover{
	border:1px solid #333;
}
div.galerie span{
	display:block;
	text-align:center;
	font-size:10px;
}
div.galerie a img{
		border:none;
}
div.file {
  	border:1px solid #ebebeb;
	padding:10px 5px;
	border:1px solid #CCC;
	margin:10px 0 0 0;
	background-color:#ebebeb;
}
div.file.even{
	background-color: #ebebeb;
}
div.file a {
	text-decoration:none;
}
div.file:hover {
	background-color:#CCC;
}

</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('file:even').addClass('even');
});
</script>
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
              </br><a class="jschauen" type="submit" href ="video.php"><label style="color:#000; cursor:pointer;">Videos</label></a></div>
          </div>
          <!-- End -->
          <div class="cs_article"><img src="images/tutorial.png" alt="" />
            <div class="text">
              <h2 style="color:#fff;">Photo Tutorials</h2>
              <p> Mehr Spass – mehr Leistung – mehr Erlebnis </br> mit unsere Photo Tutorials </p>
              </br><a class="jschauen" type="submit" href ="photo.php"><label style="color:#000; cursor:pointer;">Photos</label></a>
            </div>
          </div>
          <!-- End  -->
         <div class="cs_article"><img src="images/tutorial.png" alt="" />
            <div class="text">
              <h2 style="color:#fff;">E-Book Tutorials</h2>
              <p> Mehr Spass – mehr Leistung – mehr Erlebnis </br> mit unsere E-Book Tutorials </p>
              </br><a class="jschauen" href ="books.php"><label style="color:#000; cursor:pointer;">E-Books</label></a>
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
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
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
  <div id="content_left" class="panel-body">
 <h2>Video Tutorials</h2>
        
<?php

$ordner = "videos";
$alledateien = scandir($ordner);          				

foreach ($alledateien as $datei) {
	$dateiinfo = pathinfo($ordner."/".$datei); 
	$size = ceil(filesize($ordner."/".$datei)/1024);    
	if ($datei != "." && $datei != ".."  && $datei != "_notes") { 
			
			//Bildtypen sammeln
			$bildtypen= array("jpg", "jpeg", "gif", "png");
			//Dateien nach Typ prüfen, in dem Fall nach Endungen für Bilder filtern
			if(in_array($dateiinfo['extension'],$bildtypen))
  			{
	?>
            <div class="galerie">
                <a href="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>">
                <img src="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>" width="140" alt="Vorschau" /></a> 
                <span><?php echo $dateiinfo['filename']; ?> (<?php echo $size ; ?>kb)</span>
            </div>
    		<?php 
			// wenn keine Bildeindung dann normale Liste für Dateien ausgeben
			} else { ?>
			<div class="file">
			    <input style="display:none;" name="sortid" value='<?php echo $dateiinfo['basename']; ?>' />
			    <label class="lab"><?php echo ucfirst($dateiinfo['filename']); ?></label> 
			    <!--<a style="font-size:10px;" href="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>">Herunterladen</a>-->
			    <a style="font-size:10px; cursor:pointer;" onclick="javascript: getSelectedMoreVideosPerfekt('<?php echo $dateiinfo['basename']; ?>');" type="submit">Play</a>
			    
            </div>
            <?php } ?>
<?php
	};
 };
?> 
  <div class="cleaner" style="height:0px">&nbsp;</div>
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
