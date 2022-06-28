#!/usr/local/bin/php
<!DOCTYPE html>
<html>
<body>
<?php


if (isset ($_POST['img_submit'])) {
        $imgtitle =  $_POST['imagetitle'];
        date_default_timezone_set('America/Los_Angeles');
        $getdate = date('d/m/y'). date('H:i:s--T'). date_default_timezone_get();
        $pname = $_POST['name'];
        $image_store = $_POST['fileup'];
        $namef = $_FILES['fileup']['name'];
        $temp = $_FILES['fileup']['tmp_name'];
        $extension = pathinfo($temp, PATHINFO_EXTENSION); 
        $type = $_FILES['fileup']['type'];
        $size= $_FILES['fileup']['size'];
        $viewthis = 0;
        echo "<title> Thank you $pname </title>";
        // echo "$namef<br> $temp<br> $type<br> $size<br>";

        $saveLocation = "./$imgtitle-$namef";
        // echo "File location: $saveLocation";
        // echo "\n";

        if ($type !== "image/png" ){
                $saveLocation = substr_replace($saveLocation, 'png', strrpos($saveLocation, '.') + 1);
                // echo "Location Saved: $saveLocation\n";
                imagepng(imagecreatefromstring(file_get_contents($_FILES['fileup']['tmp_name'])), $saveLocation);
        }

        move_uploaded_file($_FILES['fileup']['tmp_name'], "$saveLocation");  



        $db = new SQLite3('images.db');
        $statement = "CREATE TABLE IF NOT EXISTS imagestore(pname TEXT, title TEXT, imaged TEXT, view INTEGER, dates TEXT);";
        $run = $db -> query($statement);

        $statement = "SELECT * FROM imagestore WHERE title = '$imgtitle';";
        $run = $db -> query($statement);
        

        $nrows = 0;
        $run->reset();
        while ($run->fetchArray()) {
                $nrows++;

        }
               
        $run->reset();

        // echo "\nNumber of rows: $nrows\n";
        if ($nrows === 0){
                echo "Your image has been uploaded!";
                $statement = "INSERT INTO imagestore (pname, title, imaged, view, dates) VALUES ('$pname', '$imgtitle' , '$saveLocation', '$viewthis', '$getdate');";
                $run = $db -> query($statement);
                echo "<img src = '$saveLocation' /> ";

        }

      else{

                while ($row = $run->fetchArray()) { 
                        $person = $row['pname'];
                        $this_title = $row['title'];
                        echo "\n  <h4> A photo named $this_title by $person already exists </h4>\n";

                }

        }


      
        


        }

   
?>

</body>
</html>