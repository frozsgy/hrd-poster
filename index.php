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
<h2>Welcome to the website of The IFMSA Sexual and Reproductive Health and Rights Awareness Day 2019 Profile Picture Page!</h2>
<p>On February 12th we celebrate the International Day for Sexual and Reproductive Health and Rights (SRHR) Awareness. We are raising awareness towards the importance of SRHR and helping everyone understand why it is vital for everyone and how it can positively affect our lives. </p>
<p>We invite you to change your profile frame to any of the options presented below. Each frame goes with an example of why we all should care about SRHR, raising our voices all together to make them be heard.</p>
<p>Choose the cause you care about as your frame here(LINK to this page) and use this caption! Also, invite everyone to join us in this campaign. SRHR matters to everyone!</p>
<p> hashtag and motto here --> #HumanRightsDay2016 - because we have to stand up together to protect #OurRights</p>
<p>For more information: <a href="https://www.facebook.com/groups/23117698977/" target="_blank">IFMSA SCORA Facebook Group</a>.</p>
<p>
<?php
$fi = new FilesystemIterator("uploads/", FilesystemIterator::SKIP_DOTS);
$total_fi = iterator_count($fi);
#$thisyear_fi = $total_fi - 3546 ;
echo $total_fi." posters created so far! "; #.$thisyear_fi." of them were created for this year's campaign!";
?>
</p>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=350274688399056";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><div class="fb-like" data-href="http://hrd.turkmsic.net" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
<a href="https://twitter.com/share" class="twitter-share-button" data-text="&quot;The world is changed by your example.&quot; Human Rights Day - " data-via="turkmsic" data-related="ifmsa" data-hashtags="HumanRightsDay">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div class="g-plusone" data-size="medium"></div><script>(function() {var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);})();</script>
<script src="//platform.linkedin.com/in.js" type="text/javascript"></script><script type="IN/Share" data-counter="right"></script>
<hr />
<form action="temiz.php" method="post" enctype="multipart/form-data" name="form1" target="_self">
  <p>Create your poster:
  <input type="file" name="foto" id="foto" accept="image/*"><p>
  <p>
    <select name="stamp" id="stamp">
    <option value="1">#1 Safe Abortion</option>
    <option value="2">#2 STI Testing</option>
    <option value="3">#3 Sexual Identity</option>
    <option value="4">#4 Pleasurable Sex Life</option>
    <option value="5">#5 Sex Education</option>
    <option value="6">#6 No HIV Stigma</option>
    <option value="7">#7 Maternal Care</option>
    <option value="8">#8 No Female Genital Mutilation</option>
    <option value="9">#9 Contraception</option>
    <option value="10">#10 Cervical Cancer</option>
    <option value="11">#11 Breast Cancer</option>
    <option value="12">#12 Prostate Cancer</option>
    </select>
</p><p>
  <input type="submit" name="button" id="button" value="Upload">
</p>
  <p>Supported formats: jpeg, png, gif</p>
  <p>Works best on square formatted images. Otherwise, it will be resized and alligned to the middle.<p>
</form>
<center><img src="./img/ornek.jpg" alt="Example" width="700"></center>
</div>
</div>
<div class="bosdiv"></div>
<div id="copyright"><br /><a href="http://turkmsic.net" target="_blank">TurkMSIC &copy; <?php echo date("Y"); ?></a></div>
</body>
</html>
