<?php
$s=substr (md5($_POST["link"]),3,5);
$myfile = fopen($s.".html", "w") or die("Unable to open file!");
$txt = '<meta http-equiv="refresh" content="1;URL='.$_POST["link"].'">';
fwrite($myfile, $txt);?>
<h2>Ваша короткая ссылка:</h2><br>
<a href="<?=$s?>.html" rel="nofollow">http://redirect/<?=$s?>.html</a>

