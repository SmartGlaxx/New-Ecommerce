<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <script src="https://kit.fontawesome.com/1d2fd3a785.js" crossorigin="anonymous"></script>
</head>
<body>
<div style='position:relative;width:auto; height:auto;'>
<div style='color:darkgray;font-size:10px'><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
  <?php


  // $rating=0.15;
  if($rating>=4.75 && $rating<=5){?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" ></i></div><br>
<?php
  }else if($rating>=4.25 && $rating<=4.74){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div><br>
<?php
 }else if($rating>=4.00 && $rating<=4.24){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><br>
<?php
 }else if($rating>=3.75 && $rating<=3.99){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><br>
<?php
 }else if($rating>=3.25 && $rating<=3.74){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div><br>
<?php
 }else if($rating>=3.00 && $rating<=3.24){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><br>
<?php
 }else if($rating>=2.75 && $rating<=2.99){
  ?>
   <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><br>
<?php
 }else if($rating>=2.25 && $rating<=2.74){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div><br>
<?php
 }else if($rating>=2.00 && $rating<=2.24){
  ?>
   <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i></div><br>
<?php
 }else if($rating>=1.75 && $rating<=1.99){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star"></i></div><br>
<?php
 }else if($rating>=1.25 && $rating<=1.74){
  ?>
   <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div><br>
<?php
 }else if($rating>=1.00 && $rating<=1.24){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i></div><br>
<?php
}else if($rating>=0.75 && $rating<=0.99){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star"></i></div><br>
<?php
}else if($rating>=0.25 && $rating<=0.74){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><i class="fas fa-star-half-alt"></i></div><br>
<?php
}else if($rating>=0.00 && $rating<=0.24){
  ?>
  <div style='position: absolute;top:0; left:0;color:orange; font-size:10px'><span style='margin-left:80px;position:relative;color:darkgrey'></span></div><br>
<?php
}
?>
</div>
</body>
</html>