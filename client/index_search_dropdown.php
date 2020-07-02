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
echo "<div class = 'container'style='margin-top:10px'>";

//ADD FILTER BY Price
    // if(isset($_GET["submit_search"]))
    // {
    	if(!empty($_GET['search'])){
        $search = mysqli_real_escape_string($con, $_GET["search"]);
        $sql = "SELECT * FROM products WHERE Name LIKE '%$search%' OR  Description LIKE '%$search%' LIMIT 7";
        $result = mysqli_query($con, $sql);
        $check = mysqli_num_rows($result);
        ?>
        <div class = "" style=''>
       <?php if($check > 0)
        {
            echo "<p style='color:gray;font-size:8px;margin-top:10px;text-align:center'>".$check .  " Items Match Your Search:</p>" ."<br>";
            while($row = mysqli_fetch_assoc($result))
            {?>
                <div class = '' style='margin-top:-20px'>
                <a  href = "product_description.php?id=<?=$row['Id']?>" style='text-decoration:none; font-size:16px;color:#212EDA;line-height: normal;font-family:garamond'><span style='color:#212EDA'><?php echo ucwords($row['Name'])?></span></a><br>
                
                
                </div>
           <?php }
        }
        else
        {?>
            <p style = 'margin-left:1vw; margin-right:1vw;;color:red; font-size:9px;text-align:center'>Your Search Returned No Result.</p>
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
