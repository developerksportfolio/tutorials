<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Developer KS | © Tutorials</title>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('file:even').addClass('even');
});
</script>
</head>

<body>
<h2>Video Tutorials</h2>
<?php

$suchen= $_POST['suchen'];

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
		       <?php 
          if (strstr($dateiinfo['filename'],$suchen))
           { ?>
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
<?php } ?>

</body>
</html>
