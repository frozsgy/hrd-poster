<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>#SRHRmatters</title>
<link href="./css/msic.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bosdiv"></div>
<div id="logo"><div class="temiz"><img src="./img/scora.png" alt="SCORA Logo"></div></div>
<div class="bosdiv"></div>
<div class="ana">
<div class="ana2" id="esas">

<?php
$foto=@$_FILES['foto']['tmp_name'];
if ((($_FILES["foto"]["type"] == "image/gif") || ($_FILES["foto"]["type"] == "image/jpeg") || ($_FILES["foto"]["type"] == "image/jpg") || ($_FILES["foto"]["type"] == "image/pjpeg") || ($_FILES["foto"]["type"] == "image/x-png") || ($_FILES["foto"]["type"] == "image/png")) && ($_FILES["foto"]["size"] > 10000)) {
  switch ($_POST['stamp']) {
    case "1": $stamp2 = imagecreatefrompng('stamps/01.png'); break;
    case "2": $stamp2 = imagecreatefrompng('stamps/02.png'); break;
    case "3": $stamp2 = imagecreatefrompng('stamps/03.png'); break;
    case "4": $stamp2 = imagecreatefrompng('stamps/04.png'); break;
    case "5": $stamp2 = imagecreatefrompng('stamps/05.png'); break;
    case "6": $stamp2 = imagecreatefrompng('stamps/06.png'); break;
    case "7": $stamp2 = imagecreatefrompng('stamps/07.png'); break;
    case "8": $stamp2 = imagecreatefrompng('stamps/08.png'); break;
    case "9": $stamp2 = imagecreatefrompng('stamps/09.png'); break;
    case "10": $stamp2 = imagecreatefrompng('stamps/10.png'); break;
    case "11": $stamp2 = imagecreatefrompng('stamps/11.png'); break;
    case "12": $stamp2 = imagecreatefrompng('stamps/12.png'); break;
  }

  switch ($_FILES['foto']['type']) {
  	case 'image/gif': $im = imagecreatefromgif($foto); break;
  	case 'image/png': $im = imagecreatefrompng($foto); break;
  	case 'image/x-png': $im = imagecreatefrompng($foto); break;
  	default: $im = imagecreatefromjpeg($foto); break;
  }
  $imagex=imagesx($im);
  $imagey=imagesy($im);
  if($imagex > $imagey) {
  	$kucultmeorani=1024/$imagex;
  	$kucukx=1024;
  	$kucuky=$kucultmeorani*$imagey;
  	}
  else {
  	$kucultmeorani=1024/$imagey;
  	$kucukx=$kucultmeorani*$imagex;
  	$kucuky=1024;

  }
  $marge_right = 0;
  $marge_bottom = 0;
  $white=imagecreatefrompng('stamps/logos.png');
  $norm = imagecreatetruecolor(1024, 1024);
  $ortax = (1024-$kucukx) / 2;
  $ortay = (1024-$kucuky) / 2;
  imagecopyresampled($norm, $im, $ortax, $ortay, 0,0,$kucukx, $kucuky, $imagex, $imagey);
  imagecopy($norm, $white, 0, 0, 0, 0, 1024,1024);
  imagecopy($norm, $stamp2, 0,0, 0, 0, 1024, 1024);
  $ip=$_SERVER['REMOTE_ADDR'];
  $nome=time().md5($ip).rand(1,999).'.jpg';
  imagejpeg($norm, 'uploads/'.$nome, 100);
  imagedestroy($norm);
  echo '<p>Your poster is ready to share! You can save the picture below or you can use this link to share your picture: <input type="text" readonly="readonly" value="http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['REQUEST_URI'], 0, -9).'uploads/'.$nome.'" onClick="this.select();"> <br /><a href="index.php">Create a new poster</a> </p><p>';
  echo '<center><img src="uploads/'.$nome.'" width="700"></center></p>';
}
else {
	printf('<p>Please provide a valid picture. </p><p><a href="index.php">Back</a></p>');
}
?>

</div>
</div>
<div class="bosdiv"></div>
<div id="copyright"><br /><a href="http://turkmsic.net" target="_blank">TurkMSIC &copy; <?php echo date("Y"); ?></a></div>
</body>
</html>
