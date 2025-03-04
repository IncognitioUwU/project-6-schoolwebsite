<?php
function getFiles($directory): array{
    $files = scandir($directory);
    $formattedfiles = array_values(array_diff($files, ['.', '..']));
    sort($formattedfiles);
    return $formattedfiles;
}
?>