<?php
require("header.php");
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
echo "<div class = 'container'style='margin-top:20px'>";

//ADD FILTER BY Price
echo '<h6 style = "margin-top:5vh; color:black; font-weight:bold; text-align:center">Search Results</h6>';
    if(isset($_GET["submit_search"]))
    {
    	if(!empty($_GET['search'])){
        $search = mysqli_real_escape_string($con , $_GET["search"]);
        $sql = "SELECT * FROM products WHERE Name LIKE '%$search%' OR  Description LIKE '%$search%'";
        $result = mysqli_query($con, $sql);
        $check = mysqli_num_rows($result);
        echo "<h6 style='margin-top:20px'>".$check .  " items match your search:</h6>" ."<br>";?>
        <div style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid; grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
       <?php if($check > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {?>
                <div class = 'col' style='margin-top:20px'>
                <?php echo "<a style='text-decoration:none' href = 'product_description.php?id=$row[Id]'><img style = 'width: 100px;  min-width:100px;max-height:100px;height:100px;min-height:100px; max-height:100px' class = 'img-responsive img-thumbnail' src ='".$row['Image']."'><br>";
                echo "<div style = 'text-align:center;color:navy; width: 100px;  min-width:100px; max-height:100px; height:70px; min-height:70px; max-height:70px overflow-x:hidden; font-size:13px'>".$row['Name']."</div></a><br>";
                ?>
                </div>
           <?php }
        }
        else
        {
            echo "Your Search Returned No Result.";
        }?>
        </div>
        <?php 
        
    	}
    	else{
    		echo "<div style='color:orange; font-weight:bold; text-align:center'> Please return and enter the name of your search item.</div>";
    	}
    	
    	    echo "</div>";
    	
    }
    ?> 
</body>
</html>
<?php
require('footer.php');
?>