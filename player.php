<?php

$ordner = $_POST['sortid'];

$vR = '<h2>Video Tutorials</h2>

<div>
<video width="520" height="310" controls>
<source src="videos/'.$ordner.'" type="video/mp4">
<source src="videos/'.$ordner.'" type="video/ogg">
</video> 

<!--<object id="MediaPlayer1" CLASSID="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95" codebase="http://EDITTED/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701"
standby="Loading Microsoft Windows® Media Player components..." type="application/x-oleobject" width="390" height="310">
<param name="fileName" value="videos/'.$ordner.'">
<param name="animationatStart" value="true">
<param name="transparentatStart" value="true">
<param name="autoStart" value="true">
<param name="showControls" value="true">
<param name="Volume" value="-450">
<embed type="application/x-mplayer2" pluginspage="http://EDITTED/Windows/MediaPlayer/" src="videos/'.$ordner.'" name="MediaPlayer1" width=390 height=310 autostart=1 showcontrols=1 volume=-450></embed>
</object>-->			

</div>';
		
echo json_encode($vR);

?>