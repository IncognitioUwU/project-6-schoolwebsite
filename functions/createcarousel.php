<?php
    include_once("getfiles.php");
    function createCarousel($carouselname,$carouselimgdirectory):void{
        $images = getFiles($carouselimgdirectory);
        $carouselbuttons = array();
        $carouselinners = array();

        foreach ($images as $slide => $image) {
            $caption = str_replace(' ', '_', ucfirst(basename($image, ".jpg")));
            $active = ($slide == 0) ? 'active' : '';

            $carouselbuttons[] = addButton($slide, $active, $carouselname);

            $carouselinners[] = addInner($active, $carouselimgdirectory, $image, $caption);
        };
        echo '<div id="'.$carouselname.'" class="carousel slide"><div class="carousel-indicators">';
        echo implode("\n", $carouselbuttons);
        echo '</div><div class="carousel-inner">'; 
        echo implode("\n", $carouselinners);
        echo '</div>
            <button class="carousel-control-prev" type="button" data-bs-target="#'.$carouselname.'" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#'.$carouselname.'" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>';
    }
    function addButton($slide, $active, $carouselname):string{
        return '<button type="button" data-bs-target="#'.$carouselname.'" data-bs-slide-to="'.$slide.'" class="'.$active.'" aria-label="Slide '.$slide.'"></button>';
    }
    function addInner($active, $directory, $image, $caption): string{
        return '<div class="carousel-item '.$active.'"><img src="'.$directory.'/'.$image.'" class="d-block w-100" alt="'.$caption.'">
        <div class="carousel-caption d-none d-md-block"><h5>'.$caption.'</h5></div></div>';
    }
?>
