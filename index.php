<?php
session_start();

if (!$_SESSION["language"]) {
    require("languages/tr.php");
}else {
require("languages/".$_SESSION["language"].".php");
}

?>
<html>
<?php include("theme/headtags.php");?>

<body>
    <?php include("theme/header.php");?>

    <div class="person">
        <div class="card">
            <img src="images/darklogo.png" alt="John" style="width:99%">
            <h1><?php echo $language["profilecardname"]?></h1>
            <p class="title"><?php echo $language["job"]?></p>
            <p><?php echo $language["profilecarddescription"]?></p>
            <a href="https://instagram.com/dev.mdeniz"><i class="fa fa-instagram socialmediaperson"></i></a>
            <a href="https://github.com/devmdeniz"><i class="fa fa-github socialmediaperson"></i></a>
            <a href="https://www.linkedin.com/in/deniz-kumcu-081b00187/"><i class="fa fa-linkedin socialmediaperson"></i></a>
            <a href="#"><i class="fa fa-youtube socialmediaperson"></i></a>
            <br>
            <p><button class="buttonperson"><?php echo $language["contactme"]?></button></p>
        </div>
    </div>
     <div class= "main">
     <h1 class = "myskills"><?php echo $language["myskills"]?></h1>
     <p class= "myskillsp"><?php echo $language["myskillsp"]?></p>
</div>
<div class="planguages">
<div class="mainlanguage card"> 
    <h3><?php echo $language["mainprogramminglanguage"]?></h3>
<img src="images/php.svg" alt="Main Language"/>
</div>
<div class="planguagesiknow">
<h3><?php echo $language["languagesandtechsiknow"]?></h3>
<img src="images/Javascript.svg">
<img src="images/nodejs.png">
<img src="images/mysql.png">
<img src="images/mongodb.png">
<img src="images/git.png">
</div>
</div>

<div class="exproject">
    <h3 class="exprojecth3"><?php echo $language["exampleprojects"]?></h3>
<br>
    <div class="exprojectleft">
<a href="#" target="_blank">
<img src="images/git.png">
<p><?php echo $language["projectonedescription"]?></p>
</a>
</div>
<div class="exprojectmiddle">
<a href="#" target="_blank">
<img src="images/git.png">
<p><?php echo $language["projecttwodescription"]?></p>
</a>
</div>
<div class="exprojectright">
<a href="#" target="_blank">
<img src="images/git.png">
<p><?php echo $language["projectthreedescription"]?></p>
</a>
</div>
</div>

<div class="languages">
<div class="tr">
<h3><?php echo $language["mainlanguage"]?></h3>
<img src="images/trflag.svg"/>
<br>
<p>10/9</p>
</div>
<br>
<br>
<div class="en">
<img src="images/enflag.png"/>
<p>10/7</p>
<br>
</div>
<div class="az">
<img src="images/azflag.svg"/>
<p>10/7</p>
<br>
</div>
<div class="es">
<img src="images/esflag.png"/>
<p>10/4</p>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
<details>
    <summary>Language Options</summary>
    <ul>
        <li><a href="language.php?language=tr">Turkish</a></li>
        <li><a href="language.php?language=en">English</a></li>
        <li><?php echo $_SESSION["language"];?></li>
</ul>
</footer>
</body>

</html>