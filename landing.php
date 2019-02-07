<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Teach me how to be a peacemaker</title>
<link href="./css/msic.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='http://code.jquery.com/jquery-1.6.4.js'></script>
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
<!-- 
World Peace Day Facebook Cover Photo Creator
Coded and designed by Mustafa Ozan ALPAY
TurkMSIC NTSDD, September 2014
If you have any questions and suggestions please feel free to contact me by frozsgy [at] gmail [dot] com

Special thanks to Mustafa Temizyurek and Monika Szamosova
-->
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
(function($) {
    $.fn.croppable = function(settings) {
        settings = settings || {
            default: 'middle',
            id: $(this).data("id"),
            success: null
        };
        
        var position = {
            x: settings.default == 'middle' ? ($(this).width() / 2) - 426 : 0 ,
            y: settings.default == 'middle' ? ($(this).height() / 2) - 158 : 0
        };
        
        $(this).wrap("<div class='croppable-container' style='position: relative;' />");
        
        var cropper = $("<div style='position: absolute; top: " + position.y + "px; left: " + position.x + "px; height: " + 315 + "px; width: " + 851 + "px;' class='cropper' />");
        $(this).before(cropper);
        
        var save = $("<input type='button' class='gonder' style='width:100px !important;' value='Crop Selection' />");
        save.click(function () {
           //alert(cropper.position().top);
		   var resim = document.getElementById('fotograf');
		   no = resim.getAttribute('data-id');
		   window.location='temiz.php?id=' + no + '&y=' + cropper.position().top;
		   
        });
        
        $(this).parent().width($(this).width());
        $(this).parent().height($(this).height());
        cropper.draggable({containment: "parent"});
        
        $(this).parent().before(save);
    };
})(jQuery);

$(".croppable").croppable();

});//]]>  

</script>
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
$im = imagecreatefromjpeg($foto);
$imagex=imagesx($im);
$imagey=imagesy($im);
$x2=851;
$y2=(851/$imagex)*$imagey;

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
    
	//create an empty image file
	$dst = imagecreatetruecolor($x2, $y2);
	//copy our black & white picture to the empty image file and resize it
    imagecopyresampled($dst, $im, 0, 0, 0, 0, $x2, $y2, $imagex, $imagey);



//get the ip address of the uploader
$ip=$_SERVER['REMOTE_ADDR'];
//create a name with the timestamp, md5 of the ip and a random number
$nome=time().md5($ip).rand(1,999).'.jpg';
//create a jpeg file of the image and save it
imagejpeg($dst, 'uploads/src/'.$nome);
//remove the image from the cache so we won't have memory problems
imagedestroy($dst);
//voila! give the image to the user
echo '<p>Now, please choose the area that you want to use on your cover photo.';
echo '<img class="croppable" data-id="'.$nome.'" id="fotograf" src="uploads/src/'.$nome.'"></p>';
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
