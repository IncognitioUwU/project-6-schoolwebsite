<!DOCTYPE html>
<html>
    <?php
        require("functions/constructbones.php");
        include("functions/createcarousel.php");
        if (function_exists('constructBones')) { //construct bones generates the head and the navbar
            constructBones();
        } else {
            echo "<p>Enjoy not having any bones loser</p>";
        }
        if (function_exists('createCarousel')) {
            createCarousel("homepagecarousel", "assets/images/carousel");
        } else {
            echo "<p>The carousel couldn't make it today</p>";
        }
    ?>
    <p>text</p>
    </body>
    
</html>