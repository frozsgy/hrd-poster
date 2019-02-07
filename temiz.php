<!DOCTYPE HTML>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Teach me how to be a peacemaker</title>
<link href="./css/msic.css" rel="stylesheet" type="text/css" />
<!-- 
World Peace Day Facebook Cover Photo Creator
Coded and designed by Mustafa Ozan ALPAY
TurkMSIC NTSDD, September 2014
If you have any questions and suggestions please feel free to contact me by frozsgy [at] gmail [dot] com

Special thanks to Mustafa Temizyurek and Monika Szamosova
-->
</head>

<body>
<div class="bosdiv"></div>
<div id="logo"><div class="temiz"><img src="./img/scorp.png" alt="SCORP Logo"></div></div>
<div class="bosdiv"></div>
<div class="ana">
<div class="ana2" id="esas">
  
  
<?php
//Get the uploaded picture 
$id=@$_GET['id'];
$y=@$_GET['y'];
//Die if the picture is not jpeg, gif or png, or too large
if (is_numeric($y) && $id) { 
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('stamp3.png');
$foto='uploads/src/'.$id;
$im = imagecreatefromjpeg($foto);
$imagex=imagesx($im);
$imagey=imagesy($im);
// Set the margins for the stamp and get the height/width of the stamp image
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
    
	//create an empty image file
	$dst = imagecreatetruecolor(851, 315);
	//copy our black & white picture to the empty image file and resize it
   imagecopyresampled($dst, $im, 0, 0, 0, $y, 851, 351, 851, 351);

imagecopy($dst, $stamp, 0, 0, 0, 0, imagesx($stamp), imagesy($stamp));



//finally add the image that has the text we want
//imagecopy($dst, $stamp2, $kucukx - imagesx($stamp2) - $marge_right, $kucuky - imagesy($stamp2) - $marge_bottom, 0, 0, imagesx($stamp2), imagesy($stamp2));

// Output and free memory
//header('Content-type: image/jpeg');

//create a random & unique name so we can save our image succesfully
//get the ip address of the uploader
$ip=$_SERVER['REMOTE_ADDR'];
//create a name with the timestamp, md5 of the ip and a random number
$nome=$id;
//create a jpeg file of the image and save it
imagejpeg($dst, 'uploads/'.$nome);
//remove the image from the cache so we won't have memory problems
imagedestroy($dst);
//voila! give the image to the user
echo '<p>Your cover photo is ready to share! You can save the picture below or you can use this link to share your picture: <input type="text" readonly="readonly" value="http://wpd.turkmsic.net/uploads/'.$nome.'" onClick="this.select();"> <br /><a href="index.php">Create a new cover photo</a> </p><p>';
echo '<img src="uploads/'.$nome.'"></p>';
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
