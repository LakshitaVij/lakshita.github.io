#!/usr/local/bin/php
<?php
ob_start();
$outputName = $_GET['file'];
echo $outputName;
// $file = "photo" . $outputName;

// $outputName = $_GET['file'];
// echo $outputName;
// $file = $outputName;


// echo $file;
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=photo.png");
readfile ($outputName);
exit();





//  ob_start();
//     $outputName = $_GET['file']. ".png";
//     $file = "./$imgtitle-$namef/" . $outputName;
//     $db = new SQLite3('images.db');
//     $stt = "SELECT imaged FROM imagestore WHERE pname = '$personName';";
//     $run = $db->query($stt);
//     $filename = $_GET['pname'];
//     $filepath = "";

   
//     if ($run) {
//         while ($row = $run->fetchArray()) { 
//             $filepath = $row['imaged'];
//             echo "\nFilepath: $filepath\n";
//             if (file_exists($filepath)) {
//                     header("Content-Type: application/octet-stream");
//                   header('Content-Disposition: attachment; filename="' . $outputName . '"');
//                 // header("Cache-Control: public");
//                 // header("Content-Description: File Transfer");
//                 // header('Content-Disposition: attachment; filename=$filename');
//                 // header("Content-Type: application/octet-stream");
//                 // header("Content-Transfer-Encoding: binary");

//                 readfile ($filepath);
//                 exit;
                
//             }

//         }
//     }










// ob_start();
// $outputName = $_GET['file']. ".png";
// $file = "./$imgtitle-$namef/" . $outputName;
// header("Content-Type: application/octet-stream");
// header('Content-Disposition: attachment; filename="' . $outputName . '"');
// readfile ($file);
// exit();

?>
