<div class="header">
        <a href="#default" class="logo header-a"><?php echo $language["webname"]?></a>
        <div class="header-left">
            <a class="active header-a" href="#"><?php echo $language["Home"]?></a>
            <a class="header-a" href="#contact"><?php echo $language["Contact"]?></a>
            <a class="header-a" href="#about"><?php echo $language["About"]?></a>
           <?php
           
           if($_SESSION["darkmode"] == "true"){
                echo '<a href="darkmode.php?darkmode=false"><i class="fa fa-moon-o" aria-hidden="true"></i>';
            } else {
                echo '<a href="darkmode.php?darkmode=true"><i class="fa fa-moon-o" aria-hidden="true"></i>';
            }
            ?>
            </div>
        <div class="header-right">
        <a class="active login header-a" href="#"><?php echo $language["Login"]?></a>
        <a class="active signup header-a" href="#"><?php echo $language["Signup"]?></a>    
    </div>
    </div>