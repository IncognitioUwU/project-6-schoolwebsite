<?php
include ("createhead.php");
include ("createnavbar.php");

define("ARTICLE_DIRECTORY", "articles");

function constructBones(): void{
        if (function_exists('createHead')) {
            createHead();
        } else {
            echo "<p>Error: Bad news, no HTML head function not found.</p>";
        }
        echo"<body>";
        if (function_exists('createNavbar')) {
            createNavbar();
        } else {
            echo '<div class="announcementbox"><h2>Daily Announcements</h2>
            
            ';//create static verson of the announcement box in case it can't be found
        }
}







