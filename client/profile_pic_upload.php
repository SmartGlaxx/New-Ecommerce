<?php
require("connect.php");
require("header.php");
?>
<style>
    .upload {
        color:black;
        background-image: linear-gradient( white, lightgreen);
        padding: 10px;
    }
    .upload:hover{
        color:white;
         background-image: linear-gradient( white, green);
    }

    .delete {
        color:black;
         background-image: linear-gradient( white, pink);
        padding: 10px;
    }
    .delete:hover{
        color:white;
         background-image: linear-gradient( white, red);
    }
</style>
<!DOCTYPE html>
<html>
    <head>
    <title>Smart E-commerce</title>
    </head>
    <body>
    <div class ="container " style='padding-top:2vh; margin-top:5vh;margin-bottom:10vh;text-align:center;min-width:250px;height:30vh;border:3px ridge blue'>
    <form style = "color:black"action = "profile_pic_upload_function.php" method ="POST" enctype="multipart/form-data">
    <i class = "fa fa-user fa-2x"style='color:#0022D1'></i><label class = "mr-sm-2"style='font-size:20px; color:#0022D1'>Upload Profile Picture</label><br>
    <input type = "file" name ="profile_pic"  style=''>
    <button type = "submit" name = "submit_pic" class = "upload">UPLOAD</button><br>
    <span style='text-align:center'>
    <span style='text-align:center;margin-top:40px; font-size:15px; font-family:tahoma; font-weight:bold; color:red'>Delete Your Current Profile Picture?</span><br>
    <button type = "submit" name = "delete_pic" class = "delete"style='text-align:center'>DELETE</button>
    </span>
    </form>
    </div>
    </body>
</html>
<?php
require('footer.php');
?>
