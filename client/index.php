<?php
require('connect.php');
require('header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Smart E-commerce</title>
  <link rel = 'stylesheet' href = 'styles/fontawesome.min.css'>
  <script src = 'scripts/fontawesome.min.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../package/css/swiper.min.css">
</head>
<body'>
  <div class="row" style='z-index:10; margin-left:auto;margin-right:auto; width:98%; height: auto'>
    <div class = 'cate'style='width:20%'>
  <div class='py-2 dropdown-header' style = ' background:white;width:100%; font-size:12px; text-align:center;border-bottom:1px solid gray'>CATEGORIES</div>

  <div class='dropdown ' style = 'text-decoration:none;text-align:left;color:black;width:100%; font-size:11px;z-index:10;background:white;margin-top:20px'>
  <button class=" cate_items"style='background:white; font-size: 20px'>MEN'S <i class="fas fa-male fa-2x"></i></button>
  <div class="dropdown-content"style=''>
    <div style='text-align:center; font-family: century_gothic; font-size:17px'>MEN'S</div>
    <a href="categories.php?id=mens_clothing">CLOTHING</a>
    <a href="categories.php?id=mens_shoes">SHOES</a>
    <a href="categories.php?id=mens_watches">WATCHES</a>
    <a href="categories.php?id=mens_accessories">ACCESSORIES</a>
    <a href="categories.php?id=mens_jewelry">JEWELRY</a>
    <a href="categories.php?id=mens_traditional">TRADITIONAL</a>
    <a href="categories.php?id=mens_underwears">UNDERWARES</a>
    <a href="categories.php?id=mens_sleepwears">SLEEPWARES</a>
    <a href="categories.php?id=mens_sportswears">SPORTSWARES</a>
  </div>
</div>
    
<div class='dropdown' style = 'text-decoration:none;text-align:left;color:black;width:100%; font-size:11px;z-index:9;background:white'>
  <button class=" cate_items"style='background:white;margin-top:20px; font-size: 20px'>WOMEN'S <i class="fas fa-female fa-2x"></i></button>
  <div class="dropdown-content"style=''>
    <div style='text-align:center; font-family: century_gothic; font-size:17px'>WOMEN'S</div>
    <a href="categories.php?id=women_clothing">CLOTHING</a>
    <a href="categories.php?id=womens_shoes">SHOES</a>
    <a href="categories.php?id=womens_watches">WATCHES</a>
    <a href="categories.php?id=womens_accessories">HAND BAGS & WALLETS</a>
    <a href="categories.php?id=womens_jewelry">JEWELRY</a>
    <a href="categories.php?id=womens_traditional">TRADITIONAL</a>
    <a href="categories.php?id=womens_underwears">UNDERWARES</a>
    <a href="categories.php?id=womens_sleepwears">SLEEPWARES</a>
    <a href="categories.php?id=mens_sportswears">SPORTSWARES</a>
    
  </div>
</div>
           
<div class='dropdown' style = 'text-decoration:none;text-align:left;color:black;width:100%; font-size:11px;z-index:8;background:white'>
  <button class=" cate_items"style='background:white;margin-top:20px;font-size: 20px'>BOY'S <i class="fas fa-male fa-1x"></i></button>
   <div class="dropdown-content"style=''>
    <div style='text-align:center; font-family: century_gothic; font-size:17px'>BOY'S</div>
    <a href="categories.php?id=boys_clothing">CLOTHING</a>
    <a href="categories.php?id=boys_shoes">SHOES</a>
    <a href="categories.php?id=boys_schooling">SCHOOL ACCESSORIES</a>
  </div>
</div>

<div class='dropdown' style = 'text-decoration:none;text-align:left;color:black;width:100%; font-size:11px;z-index:7;background:white'>
  <button class=" cate_items"style='background:white;margin-top:20px; font-size: 20px'>GIRL'S <i class="fas fa-female fa-1x"></i></button>
   <div class="dropdown-content"style=''>
    <div style='text-align:center; font-family: century_gothic; font-size:17px'>GIRL'S</div>
    <a href="categories.php?id=girls_clothing">CLOTHING</a>
    <a href="categories.php?id=girls_shoes">SHOES</a>
    <a href="categories.php?id=girls_schooling">SCHOOL ACCESSORIES</a>
  </div>
</div>


      </div>
 <div class="swiper-container " style=''>
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><a href = 'categories.php?id=mens_shoes'><img class='swiper-img' src = 'images/swiper/a-1.jpg' ></a></div>
        <div class="swiper-slide"><a href = 'categories.php?id=mens_watches'><img class='swiper-img' src = 'images/swiper/ai-1.jpg' ></a></div>
        <!--<div class="swiper-slide"><a href = 'categories.php?id=boys_clothing'><img class='swiper-img'src = 'images/swiper/b-1.jpg'></a></div>-->
        <!--<div class="swiper-slide"><a href = 'categories.php?id=mens_clothing'><img class='swiper-img'src = 'images/swiper/c-1.jpg'></a></div>-->
        <div class="swiper-slide"><a href = 'categories.php?id=girls_clothing'><img class='swiper-img'src = 'images/swiper/g-1.jpg'></a></div>
        <div class="swiper-slide"><a href = 'categories.php?id=mens_clothing'><img class='swiper-img'src = 'images/swiper/h-1.jpg'></a></div>
        <!--<div class="swiper-slide"><a href = 'categories.php?id=women_clothing'><img class='swiper-img'src = 'images/swiper/ht-1.jpg'></a></div>-->
        <div class="swiper-slide"><a href = 'categories.php?id=womens_jewelry'><img class='swiper-img'src = 'images/swiper/k-1.jpg'></a></div>
        <!--<div class="swiper-slide"><a href = 'categories.php?id=boys_clothing'><img class='swiper-img'src = 'images/swiper/p-1.jpg'></a></div>-->
        ...
    </div>
    <!-- If we need navigation buttons -->
    <!--<div class="swiper-button-prev" style =' border-radius:5px;background-color:#3B24B3'></div>-->
    <!--<div class="swiper-button-next" style =' border-radius:5px;background-color:#3B24B3;'></div>-->
</div>

</div>

<hr style = 'margin-top:5vh'/>
<div style='height:30px; color:orange; font-size:25px; font-family:corbel;margin-left:auto; margin-right: auto; width:96vw'>FEATURED PRODUCTS</div>

   <div class = 'products' style='margin-left:auto; margin-right: auto; width:96vw;margin-top:40px;margin-bottom:50px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
    <?php
     $sql = "SELECT * FROM products LIMIT 10;";
     $result = mysqli_query($con, $sql);
     $check = mysqli_num_rows($result);
     if($check == true){
     while($row = mysqli_fetch_assoc($result)){
      $id = $row['Id']
      ?>
       <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
          <div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
            <img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
          </div>
        <div style="color:darkgary; text-align:center; font-size:12px; height:3rem"><?php echo ucwords($row['Name']);?></div>
        <div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
      <?php
      
     }
   }else{
    echo '';
    }
     ?>
   
</div>

<hr style = 'margin-top:2vh; margin-left:auto; margin-right: auto; width:96vw'/>;
<div style='height:30px; color:orange; font-size:25px; font-family:corbel;margin-left:auto; margin-right: auto; width:96vw;'>MEN'S OUTFITS</div>

   <div class = 'products' style='margin-left:auto; margin-right: auto; width:96vw;margin-top:40px;margin-bottom: 50px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
    <?php
     $sql = "SELECT * FROM products WHERE Category = 'mens_shirts' OR Category ='mens_trousers' OR Category ='mens_sleepwear' OR  Category ='mens_sportwear' OR Category ='mens_traditional' OR Category ='mens_underwear' OR   Category ='mens_shoes' OR   Category ='mens_watches' OR   Category ='mens_accessories' OR   Category ='mens_jewelry' LIMIT 10;";
     $result = mysqli_query($con, $sql);
     $check = mysqli_num_rows($result);
     if($check == true){
     while($row = mysqli_fetch_assoc($result)){
      $id = $row['Id']
      ?>
       <a data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
          <div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
            <img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
          </div>
        <div style="color:darkgary; text-align:center; font-size:12px; height:3rem"><?php echo ucwords($row['Name']);?></div>
        <div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
      <?php
      
     }
   }else{
    echo '';
    }
     ?>
   
</div>

<hr style = 'margin-top:2vh; margin-left:auto; margin-right: auto; width:96vw'/>
<div style='height:30px; color:orange; font-size:25px; font-family:corbel;margin-left:auto; margin-right: auto; width:96vw'>WOMEN'S OUTFITS</div>

   <div class = 'products' style='margin-left:auto; margin-right: auto; width:96vw;margin-top:40px;margin-bottom: 50px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
    <?php
     $sql = "SELECT * FROM products WHERE Category = 'womens_tops' OR Category ='womens_skirts' OR Category ='womens_gowns' OR  Category ='womens_sportwear' OR Category ='womens_traditional' OR Category ='womens_underwear' OR   Category ='womens_sleepwear' OR   Category ='womens_shoes' OR   Category ='womens_watches' OR   Category ='womens_accessories' OR   Category ='womens_jewelry'   LIMIT 10;";
     $result = mysqli_query($con, $sql);
     $check = mysqli_num_rows($result);
     if($check == true){
     while($row = mysqli_fetch_assoc($result)){
      $id = $row['Id']
      ?>
       <a data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
          <div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
            <img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
          </div>
        <div style="color:darkgary; text-align:center; font-size:12px; height:3rem"><?php echo ucwords($row['Name']);?></div>
        <div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
      <?php
      
     }
   }else{
    echo '';
    }
     ?>
   
</div>

<hr style = 'margin-top:2vh; margin-left:auto; margin-right: auto; width:96vw'/>
<div style='height:30px; color:orange; font-size:25px; font-family:corbel;margin-left:auto; margin-right: auto; width:96vw'>BOY'S OUTFITS</div>

   <div class = 'products' style='margin-left:auto; margin-right: auto; width:96vw;margin-top:40px;margin-bottom: 50px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
    <?php
     $sql = "SELECT * FROM products WHERE Category = 'boys_clothing' OR Category = 'boys_schooling' OR Category = 'boys_shoes' LIMIT 10;";
     $result = mysqli_query($con, $sql);
     $check = mysqli_num_rows($result);
     if($check == true){
     while($row = mysqli_fetch_assoc($result)){
      $id = $row['Id']
      ?>
       <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
          <div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
            <img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
          </div>
        <div style="color:darkgary; text-align:center; font-size:12px; height:3rem"><?php echo ucwords($row['Name']);?></div>
        <div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
      <?php
      
     }
   }else{
    echo '';
    }
     ?>
   
</div>


<hr style = 'margin-top:2vh; margin-left:auto; margin-right: auto; width:96vw'/>
<div style='height:30px; color:orange; font-size:25px; font-family:corbel;margin-left:auto; margin-right: auto; width:96vw'>GIRL'S OUTFITS</div>

   <div class = 'products' style='margin-left:auto; margin-right: auto; width:96vw;margin-top:40px;margin-bottom: 50px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
    <?php
     $sql = "SELECT * FROM products WHERE Category = 'girls_clothing' OR Category = 'girls_schooling' OR Category = 'girls_shoes' LIMIT 10;";
     $result = mysqli_query($con, $sql);
     $check = mysqli_num_rows($result);
     if($check == true){
     while($row = mysqli_fetch_assoc($result)){
      $id = $row['Id']
      ?>
       <a data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
          <div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
            <img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
          </div>
        <div style="color:darkgary; text-align:center; font-size:12px; height:3rem"><?php echo ucwords($row['Name']);?></div>
        <div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
      <?php
      
     }
   }else{
    echo '';
    }
     ?>
   
</div>


  <script src="../package/js/swiper.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'fade',
      // grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.4,
      },
      speed: 4000,
       autoplay: {
      delay: 2000,
    },
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }, 
    });
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <?php
require('footer.php');
?>
</body>
</html>
