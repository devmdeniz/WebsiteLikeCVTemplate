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
            <h1>DevMDeniz</h1>
            <p class="title">Ceo Of F-Tech Studios </p>
            <p>If you believe yourself, you can do everything, Just START NOW!</p>
            <a href="https://instagram.com/dev.mdeniz"><i class="fa fa-instagram socialmediaperson"></i></a>
            <a href="https://github.com/devmdeniz"><i class="fa fa-github socialmediaperson"></i></a>
            <a href="https://www.linkedin.com/in/deniz-kumcu-081b00187/"><i class="fa fa-linkedin socialmediaperson"></i></a>
            <a href="#"><i class="fa fa-youtube socialmediaperson"></i></a>
            <br>
            <p><button class="buttonperson">Contact Me!</button></p>
        </div>
    </div>
     <div class= "main">
     <h1 class = "myskills">My Skills</h1>
     <p class= "myskillsp">
        I started software with NodeJS. I coded the Discord bot for 1 year.
        Then I wondered about the working systems of websites and started HTML,
        CSS and Javascript. Then I moved away from Web Development and started
        trying different things. At these times, I learned Java, Kotlin, Python,
        C# programming languages and decided to switch to FullStack Web Development.
     </p>
</div>
<div class="planguages">
<div class="mainlanguage card"> 
    <h3>Main Language</h3>
<img src="images/php.svg" alt="Main Language"/>
</div>
<div class="planguagesiknow">
<h3>Languages and Technologies I Know</h3>
<img src="images/javascript.svg">
<img src="images/nodejs.png">
<img src="images/mysql.png">
<img src="images/mongodb.png">
<img src="images/git.png">
</div>
</div>

<div class="exproject">
    <h3 class="exprojecth3">Example Projects</h3>
<br>
    <div class="exprojectleft">
<a href="#" target="_blank">
<img src="images/git.png">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus accusantium ad non voluptatem quaerat incidunt, quod delectus tempore ducimus facere aut aliquam assumenda rem. Architecto explicabo voluptatibus repellat officia dolor autem doloribus nulla nihil ipsum reprehenderit in nobis dicta molestiae aliquam eveniet quam consequuntur, fugiat quas nostrum? Blanditiis, debitis deleniti?</p>
</a>
</div>
<div class="exprojectmiddle">
<a href="#" target="_blank">
<img src="images/git.png">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus accusantium ad non voluptatem quaerat incidunt, quod delectus tempore ducimus facere aut aliquam assumenda rem. Architecto explicabo voluptatibus repellat officia dolor autem doloribus nulla nihil ipsum reprehenderit in nobis dicta molestiae aliquam eveniet quam consequuntur, fugiat quas nostrum? Blanditiis, debitis deleniti?</p>
</a>
</div>
<div class="exprojectright">
<a href="#" target="_blank">
<img src="images/git.png">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus accusantium ad non voluptatem quaerat incidunt, quod delectus tempore ducimus facere aut aliquam assumenda rem. Architecto explicabo voluptatibus repellat officia dolor autem doloribus nulla nihil ipsum reprehenderit in nobis dicta molestiae aliquam eveniet quam consequuntur, fugiat quas nostrum? Blanditiis, debitis deleniti?</p>
</a>
</div>
</div>

<div class="languages">
<div class="tr">
<h3>Main Language</h3>
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