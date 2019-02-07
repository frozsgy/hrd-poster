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
<h2>Welcome to the website of The IFMSA World Human Rights Day 2016 Profile Picture Page!</h2>
<p>World Human Rights Day (WHRD) is annually celebrated on December 10th, which commemorates the adoption of the United Nation’s Universal Declaration of Human Rights in 1948. This step was the breaking point in human rights recognition. Human rights were created to fulfill our basic rights and freedoms as human beings. They include our right to live, our right to education, health, freedom of religion, freedom of speech and thoughts, and equal rights for everyone all around the world.</p>
<p>WHRD is an opportunity for medical students to connect together to promote, protect and advocate for equal rights for everyone. WHRD campaign already has its tradition in SCORP, having organized WHRD campaigns annually since 2013. This year, we aim to further increase the impact of the campaign with more influential activities. WHRD event also intends to attract medical students to show active support and participation in SCORP activities.</p>
<p>With gratitude to The Turkish Medical Students' International Committee, we hereby present the WHRD Profile Picture page. Use this website to adjust your Facebook Profile Picture, in support of human rights. Choose one of the human rights, create your new profile picture and show your stand! By sharing this poster and the link to this website with your friends, you will help us in raising awareness on human rights. Let the world know that you support human rights.</p>
<p>#HumanRightsDay2016 - because we have to stand up together to protect #OurRights</p>
<p>For more information: <a href=https://www.facebook.com/groups/36162662121//>IFMSA SCORP Facebook Group</a> and <a href=https://issuu.com/ifmsa/docs/scorp_whrd_2016_manual_draft>The WHRD 2016 Manual.</a></p>
<p>
<?php
$fi = new FilesystemIterator("uploads/", FilesystemIterator::SKIP_DOTS);
$total_fi = iterator_count($fi);
$thisyear_fi = $total_fi - 3546 ;
echo $total_fi." posters created so far! ".$thisyear_fi." of them were created for this year's campaign!";
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
    <option value="1">#1 Right to Equality</option>
    <option value="2">#2 Freedom from Discrimination</option>
    <option value="3">#3 Right to Life, Liberty, Personal Security</option>
    <option value="4">#4 Freedom from Slavery</option>
    <option value="5">#5 Freedom from Torture and Degrading Treatment</option>
    <option value="6">#6 Right to Recognition as a Person before the Law</option>
    <option value="7">#7 Right to Equality before the Law</option>
    <option value="8">#8 Right to Remedy by Competent Tribunal</option>
    <option value="9">#9 Freedom from Arbitrary Arrest and Exile</option>
    <option value="10">#10 Right to Fair Public Hearing</option>
    <option value="11">#11 Right to be Considered Innocent until Proven Guilty</option>
    <option value="12">#12 Freedom from Interference with Privacy, Family, Home and Correspondence</option>
    <option value="13">#13 Right to Free Movement in and out of the Country</option>
    <option value="14">#14 Right to Asylum in other Countries from Persecution</option>
    <option value="15">#15 Right to a Nationality and the Freedom to Change It</option>
    <option value="16">#16 Right to Marriage and Family</option>
    <option value="17">#17 Right to Own Property</option>
    <option value="18">#18 Freedom of Belief and Religion</option>
    <option value="19">#19 Freedom of Opinion and Information</option>
    <option value="20">#20 Right of Peaceful Assembly and Association</option>
    <option value="21">#21 Right to Participate in Government and in Free Elections</option>
    <option value="22">#22 Right to Social Security</option>
    <option value="23">#23 Right to Desirable Work and to Join Trade Unions</option>
    <option value="24">#24 Right to Rest and Leisure</option>
    <option value="25">#25 Right to Adequate Living Standard</option>
    <option value="26">#26 Right to Education</option>
    <option value="27">#27 Right to Participate in the Cultural Life of Community</option>
    <option value="28">#28 Right to a Social Order that Articulates this Document</option>
    <option value="29">#29 Community Duties Essential to Free and Full Development</option>
    <option value="30">#30 Freedom from State or Personal Interference in the above Rights</option>
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
