<!DOCTYPE html>
<div>
    <?php
        require("functions/constructbones.php");
        include("functions/createcarousel.php");
        include("functions/createannouncementbox.php");
        if (function_exists('constructBones')) { //construct bones generates the head and the navbar
            constructBones();
        } else {
            echo "<p>Enjoy not having any bones loser</p>";
        }
        if (function_exists('createCarousel')) {
            createCarousel("homepagecarousel", "assets/images/carousel");
        }
        if (function_exists("createAnnouncementBox")){
            createAnnouncementBox();
        } else {
            echo '<div class="announcementbox"><h2>Daily Announcements</h2><hr><p>No Announcements for Today</p></div>';//create static verson of the announcement box in case it can't be found
        }
    ?>
    <div id='textsection'>
        <h1>Te Awamutu College</h1><hr>
            <h2>The Journey To Success</h2>
                <p>
                    Te Awamutu College is a State co-educational secondary school, located in the thriving rural town of Te Awamutu.
                    Surrounded by extensive grounds, the College has developed over sixty five years into a beautiful complex of classrooms, 
                    marae and specialist facilities. Situated at the western end of the main street of the town, it allows easy access to the community.</p>
                <p>
                    The College catchment area extends to rural areas up to 50 kilometres from the town and a large percentage of the students travel to school by bus. 
                    As the only secondary school in the town, Te Awamutu College aims to provide a range of learning experiences to meet the needs of all students.</p>
                <p>
                    We are proud of Te Awamutu College and the students who choose to make this their school. 
                    Our school motto, Kia Kaha (Ever be strong), provides a clear message to students in the classroom, on the playing field and in life after leaving school.</p>
        </div>
    </body>  
</html>