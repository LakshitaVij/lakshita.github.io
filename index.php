#!/usr/local/bin/php


<!DOCTYPE html>
<html>
<body>
    <head>
      
</head>


<!-- The form for uploading images -->
<div id = "image_upload">
<form action="upload.php" method='POST' enctype="multipart/form-data">
<input type='file' name='fileup' value="Choose File" id="fileup"> <br><br>
IMAGE TITLE: <input type = "text" name ="imagetitle" id="imagetitle"> 
YOUR NAME: <input type = "text" name ="name" id="name">  
<input type='submit' name='img_submit'>
</form>
</div>

<!-- The form for viewing images -->
<div id = "image_view">
<form action="display.php" method='POST' enctype='multipart/form-data'>
PERSON <input type = "text" name ="person" id="person"> <br>
<label for ="red">Red </label> <input type ="radio" id="red" name ="radbut" checked="checked" value="red">
<label for ="blue">Blue </label><input type ="radio" id="blue" name ="radbut" value="blue">
<input type='submit' name='disp_submit'>
</form>
</div>

</body>
</html>



