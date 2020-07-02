<?php
require('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <div>
    <style>
    @media screen and (max-width: 500px){
    .dd{margin-top:30px;}
      }
</style>
  
    <?php
    if(isset($_SESSION['username']))
    {
    $username = $_SESSION['username'];
    $sql= "SELECT * FROM orders WHERE User_name = '$username' && Reviewd ='0';";
    $result = mysqli_query($con, $sql);
    $check =mysqli_num_rows($result);
      if($check == true){
        ?>
  <div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>ORDERS TO BE REVIWED</div>
        <?php while($row=mysqli_fetch_array($result))
        {?>
  <div class="container row">
  <button type="button" class="col btn btn-mute btn-sm" data-toggle="modal" data-target="#<?php echo $row['Code'];?>"><div class=" row"><img style='width:50px;height:50px; cursor:pointer' src = "<?php echo $row['Image']?>">
  <div class='col' style="font-size:12px"><?php echo $row['Name'];?></div>
  <div class='col' style="font-size:12px">Ordered on: <?php echo $row['Date'];?></div></div></button>
  <!-- Modal -->
  <div class="modal fade" id="<?php echo $row['Code'];?>" role="dialog" style='width:95%'>
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">Product Review</h6>
          <button type="button" class="close" data-dismiss="modal" style='float:right; color:red'>&times;</button>
        </div>
       <form method='post' action='rating_function.php?Code=<?php echo $row['Code'];?>&&id=<?php echo $row['Id'];?>'>
        <div class="modal-body">
        <div class='row'>
        <div class ='col-sm-12' style='font-size:10px;text-align:center'>SELECT A RATING FOR THIS PRODUCT</div>
        <div class ='col'>
          <img style='width:100px;height:100px' src = "<?php echo $row['Image']?>">
            </div>
            <div class ='col'>
            <p style="font-size:13px"><?php echo $row['Name'];?></p>
          <select name='rating' style="font-size:13px">
            <option ></option>
          <option value='five'>5 stars</option>
          <option value='four'>4 Stars</option>
          <option value='three'>3 Stars</option>
          <option value='two'>2 Stars</option>
          <option value='one'>1 Star</option>
        </select>
      </div>
      </div>
      <div class=''>
        <span class='' style='font-size:8px'>LEAVE A REVIEW</span>
      </div>
      <div class=''>
        <span class='' style='font-size:15px;margin:2%;'>User Name: <span style='color:#212EDA;'><?php echo ucwords($row['User_name']);?></span></span>
        <span class=''><input type='text' placeholder="Review Title" style='width:97%;color:#212EDA;font-size:15px;border:none; border-bottom: 1px solid gray'name='review_title'></span>
      </div>
      <textarea style='font-size:15px;color:#212EDA;margin:2%;width:96%' name='review_text'placeholder='Your review'></textarea>
        </div>
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" style='font-size:12px'>SUBMIT</button>
        </div>
      </form>
      </div>
      
    </div>
  </div>
  
</div>



        
        <?php
        }
      }else{
        ?>
        <div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>NO REVIEWS PENDING</div>
      <?php
    }
    }
    ?>
  
</div>
<script>

</script>

</body>
</html>
