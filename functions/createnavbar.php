<?php
    include_once("getfiles.php");

    function addToNavbar(): void {
        $articlesdirectory = "articles";
        foreach (getFiles($articlesdirectory) as $article) {
            $filename = basename($article, ".php"); 
            echo '<li class="nav-item">
                    <a class="nav-link" href="' . $articlesdirectory . '/' . $article . '">'
                    . getTitleFromFilename($filename) . 
                '</a>
                </li>';
        }
    }

    function getTitleFromFilename($filename): string {
        $cleanedFilename = preg_replace('/^\d{2}_/', '', $filename);
        return ucwords(str_replace("_", " ", $cleanedFilename)); 
    }

    function createNavbar(): void {
        echo '<nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img alt="logo" id="navbar-logo" src="assets/ui/bluelogo.png" width="60%" class="align-text-center">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>';
        addToNavbar();
        echo '      </ul>
                    </div>
                </div>
            </nav>';
    }
?>
