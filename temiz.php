<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>#OurRights</title>
<link href="./css/msic.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bosdiv"></div>
<div id="logo"><div class="temiz"><img src="./img/scorp.png" alt="SCORP Logo"></div></div>
<div class="bosdiv"></div>
<div class="ana">
<div class="ana2" id="esas">

<?php
$foto=@$_FILES['foto']['tmp_name'];
if ((($_FILES["foto"]["type"] == "image/gif") || ($_FILES["foto"]["type"] == "image/jpeg") || ($_FILES["foto"]["type"] == "image/jpg") || ($_FILES["foto"]["type"] == "image/pjpeg") || ($_FILES["foto"]["type"] == "image/x-png") || ($_FILES["foto"]["type"] == "image/png")) && ($_FILES["foto"]["size"] > 10000)) {
  switch ($_POST['stamp']) {
  case "1": $stamp2 = imagecreatefrompng('./stamps/1.png'); break;
  case "2": $stamp2 = imagecreatefrompng('./stamps/2.png'); break;
  case "3": $stamp2 = imagecreatefrompng('./stamps/3.png'); break;
  case "4": $stamp2 = imagecreatefrompng('./stamps/4.png'); break;
  case "5": $stamp2 = imagecreatefrompng('./stamps/5.png'); break;
  case "6": $stamp2 = imagecreatefrompng('./stamps/6.png'); break;
  case "7": $stamp2 = imagecreatefrompng('./stamps/7.png'); break;
  case "8": $stamp2 = imagecreatefrompng('./stamps/8.png'); break;
  case "9": $stamp2 = imagecreatefrompng('./stamps/9.png'); break;
  case "10": $stamp2 = imagecreatefrompng('./stamps/10.png'); break;
  case "11": $stamp2 = imagecreatefrompng('./stamps/11.png'); break;
  case "12": $stamp2 = imagecreatefrompng('./stamps/12.png'); break;
  case "13": $stamp2 = imagecreatefrompng('./stamps/13.png'); break;
  case "14": $stamp2 = imagecreatefrompng('./stamps/14.png'); break;
  case "15": $stamp2 = imagecreatefrompng('./stamps/15.png'); break;
  case "16": $stamp2 = imagecreatefrompng('./stamps/16.png'); break;
  case "17": $stamp2 = imagecreatefrompng('./stamps/17.png'); break;
  case "18": $stamp2 = imagecreatefrompng('./stamps/18.png'); break;
  case "19": $stamp2 = imagecreatefrompng('./stamps/19.png'); break;
  case "20": $stamp2 = imagecreatefrompng('./stamps/20.png'); break;
  case "21": $stamp2 = imagecreatefrompng('./stamps/21.png'); break;
  case "22": $stamp2 = imagecreatefrompng('./stamps/22.png'); break;
  case "23": $stamp2 = imagecreatefrompng('./stamps/23.png'); break;
  case "24": $stamp2 = imagecreatefrompng('./stamps/24.png'); break;
  case "25": $stamp2 = imagecreatefrompng('./stamps/25.png'); break;
  case "26": $stamp2 = imagecreatefrompng('./stamps/26.png'); break;
  case "27": $stamp2 = imagecreatefrompng('./stamps/27.png'); break;
  case "28": $stamp2 = imagecreatefrompng('./stamps/28.png'); break;
  case "29": $stamp2 = imagecreatefrompng('./stamps/29.png'); break;
  case "30": $stamp2 = imagecreatefrompng('./stamps/30.png'); break;
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
  	$kucultmeorani=800/$imagex;
  	$kucukx=800;
  	$kucuky=$kucultmeorani*$imagey;
  	}
  else {
  	$kucultmeorani=800/$imagey;
  	$kucukx=$kucultmeorani*$imagex;
  	$kucuky=800;

  }
  $marge_right = 0;
  $marge_bottom = 0;
  $white=imagecreatefromjpeg('stamp0.jpg');
  $norm = imagecreatetruecolor(800, 800);
  imagecopy($norm, $white, 0, 0, 0, 0, 800,800);
  $ortax = (800-$kucukx) / 2;
  $ortay = (800-$kucuky) / 2;
  imagecopyresampled($norm, $im, $ortax, $ortay, 0,0,$kucukx, $kucuky, $imagex, $imagey);
  imagecopy($norm, $stamp2, 0,0, 0, 0, 800, 800);
  $ip=$_SERVER['REMOTE_ADDR'];
  $nome=time().md5($ip).rand(1,999).'.jpg';
  imagejpeg($norm, 'uploads/'.$nome, 100);
  imagedestroy($norm);
  echo '<p>Your poster is ready to share! You can save the picture below or you can use this link to share your picture: <input type="text" readonly="readonly" value="http://hrd.turkmsic.net/uploads/'.$nome.'" onClick="this.select();"> <br /><a href="index.php">Create a new poster</a> </p><p>';
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
