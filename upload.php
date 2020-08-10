<?php

$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

//if ((($_FILES["file"]["type"] == "video/mp4") || ($_FILES["file"]["type"] == "audio/mp3") || ($_FILES["file"]["type"] == "audio/wma") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")) && ($_FILES["file"]["size"] < 10000) && in_array($extension, $allowedExts))
 //{
  if (($_FILES["file"]["size"] < 10) && ($_FILES["file"]["type"] == "video/mp4"))
    {
    //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    echo "<script>alert('Error')</script>";
    echo '<script>window.location.href="index.php"</script>';
    }
  else
    {
    //echo "Video/Photo: " . $_FILES["file"]["name"] . "<br />";
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      echo "<script>alert('Error')</script>";
      echo '<script>window.location.href="index.php"</script>';
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      echo "<script>alert('OK')</script>";
      echo '<script>window.location.href="index.php"</script>';
      }
    }
 //}
/*else
  {
  //echo "Invalid file";
  echo "<script>alert('Error')</script>";
  echo '<script>window.location.href="index.php"</script>';
}*/
  
?>