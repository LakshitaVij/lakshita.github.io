#!/usr/local/bin/php

<!DOCTYPE html>
<html>
<body>
    <head>
    <script src="display.js" defer> </script> 
</head>
<?php
if (isset ($_POST['disp_submit'])) {
    $radioval = $_POST["radbut"];
    if($radioval === "red" ){
        echo '<body style="background-color:red">';
    }
    if($radioval === "blue" ){
        echo '<body style="background-color:blue">';
       
    }
    // echo "<script src='display.js' defer> </script>";
    $viewthis = 0;
    date_default_timezone_set('America/Los_Angeles');
    $personName =  $_POST['person'];
    echo "<title> $personName 's Photos </title>";

    $db = new SQLite3('images.db');
    $stt = "SELECT imaged, view, dates, title FROM imagestore WHERE pname = '$personName';";
    $run = $db->query($stt);

    if ($run) {
        while ($row = $run->fetchArray()) { 
        $imgsrc = $row['imaged'];
        $titlee = $row['title'];
        // echo "\n IMAGE SOURCE: $imgsrc\n";
        $update = $db->query("UPDATE imagestore SET view=(view+1) WHERE imaged = '$imgsrc';");
        // echo "<img src = '$imgsrc' />";
        $dateshow = $row['dates'];
        echo "<a href='$imgsrc' data-toggle= tooltip title= '$dateshow' download = 'photo' > <img src = '$imgsrc' width='500' /> </a>";
            $viewtime = $row['view'];
            echo "<h3> $titlee has $viewtime view(s) </h3> <br>"; 
      
       
    }
    }
}


    ?>

   
    

    </body>
</html>