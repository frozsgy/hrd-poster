<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>The world is changed by your example</title>
<link href="./css/msic.css" rel="stylesheet" type="text/css" />
<!-- 
International Human Rights Day Poster Maker
Coded and designed by Mustafa Ozan ALPAY
TurkMSIC NTSDD, December 2013
If you have any questions and suggestions please feel free to contact me by frozsgy [at] gmail [dot] com

Special thanks to Mustafa Temizyurek and Monika Szamosova
-->
</head>
</head>

<body>
<div class="bosdiv"></div>
<div id="logo"><div class="temiz"><img src="./img/scorp.png" alt="SCORP Logo"></div></div>
<div class="bosdiv"></div>
<div class="ana">
<div class="ana2" id="esas">
  
  
<?php
//Get the uploaded picture 
$foto=@$_FILES['foto']['tmp_name'];
//Die if the picture is not jpeg, gif or png, or too large
if ((($_FILES["foto"]["type"] == "image/gif") || ($_FILES["foto"]["type"] == "image/jpeg") || ($_FILES["foto"]["type"] == "image/jpg") || ($_FILES["foto"]["type"] == "image/pjpeg") || ($_FILES["foto"]["type"] == "image/x-png") || ($_FILES["foto"]["type"] == "image/png")) && ($_FILES["foto"]["size"] > 10000)) { 
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('stamp.png');
$stamp2 = imagecreatefrompng('stamp2.png');
$im = imagecreatefromjpeg($foto);
$imagex=imagesx($im);
$imagey=imagesy($im);
//Resize the picture
if($imagex > $imagey) {
	//if the image is horizontal
	$kucultmeorani=880/$imagey;
	$kucukx=$kucultmeorani*$imagex;
	$kucuky=880;
}
else {
	//if the image is vertical
	$kucultmeorani=850/$imagex;
	$kucukx=850;
	$kucuky=$kucultmeorani*$imagey;	
}
//Convert it to black and white
imagefilter($im, IMG_FILTER_GRAYSCALE);
//imagefilter($im, IMG_FILTER_CONTRAST, -100);

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 0;
$marge_bottom = 0;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
    
	//create an empty image file
	$dst = imagecreatetruecolor($kucukx, $kucuky);
	//copy our black & white picture to the empty image file and resize it
    imagecopyresampled($dst, $im, 0, 0, 0, 0, $kucukx, $kucuky, $imagex, $imagey);
//check if we have the scorp logo checked on the upload page
$scorplogovarmi=@$_POST['scorplogo'];
if($scorplogovarmi == '1') {
//we have it, so let's paste it

imagecopy($dst, $stamp, 0, 0, 0, 0, imagesx($stamp), imagesy($stamp));

}
//finally add the image that has the text we want
imagecopy($dst, $stamp2, $kucukx - imagesx($stamp2) - $marge_right, $kucuky - imagesy($stamp2) - $marge_bottom, 0, 0, imagesx($stamp2), imagesy($stamp2));

// Output and free memory
//header('Content-type: image/jpeg');

//create a random & unique name so we can save our image succesfully
//get the ip address of the uploader
$ip=$_SERVER['REMOTE_ADDR'];
//create a name with the timestamp, md5 of the ip and a random number
$nome=time().md5($ip).rand(1,999).'.jpg';
//create a jpeg file of the image and save it
imagejpeg($dst, 'uploads/'.$nome);
//remove the image from the cache so we won't have memory problems
imagedestroy($dst);
//voila! give the image to the user
echo '<p>Your poster is ready to share! You can save the picture below or you can use this link to share your picture: <input type="text" readonly="readonly" value="http://hrd.turkmsic.net/uploads/'.$nome.'" onClick="this.select();"> <br /><a href="index.php">Create a new poster</a> </p><p>';
echo '<img src="uploads/'.$nome.'" width="910"></p>';
}
else {
	//the image has problems
	printf('<p>Please provide a valid picture. </p><p><a href="index.php">Back</a></p>');
}
?>

</div>
</div>
<div class="bosdiv"></div>
<div id="copyright"><br /><a href="http://turkmsic.net" target="_blank">TurkMSIC &copy; <?php echo date("Y"); ?></a></div>
</body>
</html>
