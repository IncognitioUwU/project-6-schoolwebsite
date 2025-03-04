<?php
function createHead(): void {
    $pagetitle = ucwords(basename($_SERVER['PHP_SELF'], ".php"));
    if ($pagetitle == "Index"){
        $pagetitle = "Home";
    }
    echo '<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>'.$pagetitle.'</title>
        <meta name="description" content="Te Awamutu is a secondary school in New Zealand">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <script src="assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/styles.css" type="text/css">        
    </head>';
}

?>