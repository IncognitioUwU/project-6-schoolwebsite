<?php
include ("createhead.php");
include ("createnavbar.php");

define("ARTICLE_DIRECTORY", "articles");

function constructBones(): void{
        if (function_exists('createHead')) {
            createHead();
        } else {
            echo "<p>Error: Head function not found.</p>";
        }
        echo"<body>";
        if (function_exists('createNavbar')) {
            createNavbar();
        } else {
            echo "<p>Error: Navbar function not found.</p>";
        }
}







