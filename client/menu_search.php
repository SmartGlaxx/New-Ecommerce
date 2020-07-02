<?php
require("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smart E-commerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>
<body>

<?php
echo "<div class = 'container'style=''>";

//ADD FILTER BY Price
// echo '<p style = "margin-top:5vh; color:black; font-weight:bold;font-size:9px; text-align:center">SEARCH RESULTS</p>';
    // if(isset($_GET["submit_search"]))
    // {
    	if(!empty($_GET['search'])){
        $search = mysqli_real_escape_string($con, $_GET["search"]);
        $sql = "SELECT * FROM products WHERE Name LIKE '%$search%' OR  Description LIKE '%$search%'";
        $result = mysqli_query($con, $sql);
        $check = mysqli_num_rows($result);
        ?>
        <!-- <div class = "" style = 'display:grid; grid-template-columns:repeat(auto-fill, minmax(70px, 1fr))'> -->
       <?php if($check > 0)
        {?>
            <p style='margin-top:5px;color:white;text-align:center;font-size:8px'><?php echo $check; ?> Items Match Your Search:</p><br>
            <div class = "" style = 'display:grid; grid-template-columns:repeat(auto-fill, minmax(50px, 1fr)); grid-gap:5px'>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {?>
                <div class = '' style='margin-top:-30px'>
                <a  href = "product_description.php?id=<?=$row['Id']?>"><img style = 'width:70px' class = 'img-responsive img-thumbnail' src ='<?php echo $row['Image']?>'></a><br>
                <div style = 'color:white; height:150px;width: 70px; overflow-x:hidden; font-size:13px;'><?php echo $row['Name']?></div><br>
                        
                
                </div>
           <?php }
        }
        else
        {?>
            <p style = 'color:white;text-align:center;font-size:8px'>Your Search Returned No Result.</p>
        <?php
        }?>
        </div>
        <?php 
        echo "</div>";
    	}
    // 	else{
    // 		echo "Your Search Returned No Result.";
    // 	}
    // }
    ?> 
</body>
</html>
