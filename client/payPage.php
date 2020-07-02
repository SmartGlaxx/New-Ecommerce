<?php
require('header.php');
require('connect.php');
$total = $_POST['total'];
$prices = $_POST['prices'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$date = date('d/m/Y');

  function ins(){
      $username = $_SESSION['username'];
      $names = $_GET['names'];
      $prices = $_POST['prices'];
      $codes = $_GET['codes'];
      $sizes = $_GET['sizes'];
      $colors = $_GET['colors'];
      $images = $_GET['images'];
      $quantities = $_GET['quantities'];

      $Name = array();
      $Name = explode(',',$names);
      $Code = array();
      $Code = explode(',',$codes);
      $Price = array();
      $Price = explode(',',$prices);
      $Image = array();
      $Image = explode(',',$images);
      $check = $_GET['check'];
          
        $sql = 'INSERT INTO orders(User_name,Name,Code, Price, Image,Date) VALUES ';
          
       $query_parts = array();
       for($x=0; $x<$check; $x++){
         $query_parts[] = "('" . $username  . "', '" . $Name[$x] . "', '" . $Code[$x] . "', '" . $Price[$x] . "', '" . $Image[$x] . "', '" . $date . "')";
         }
        $sql .= implode(',', $query_parts);
          mysqli_query($con, $sql);
      }    

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body >
<div class='container mt-4' style="height:75vh">

  <form >
    <script src="https://js.paystack.co/v1/inline.js"></script>
    
    <div style='text-align:center;'><button type="button" style='width:200px; margin-left:auto;margin-right:auto' class = 'btn btn-success btn-block' onclick="payWithPaystack()"> Pay <?php echo '₦'.Number_format( $total) ?></button></div>
  </form>
    <div style='margin-top:20px; color:red; font-size:20px; font-family: verdana; text-align:center'>!IMPORTANT!</div>
    <div style='color:navy; font-size:15px; font-family: verdana; text-align:center'><u>PLEASE CLICK 'OK' TO COMIRM YOUR PAYMENT AFTER THE TRANSACTION</u></div>
  <script type="text/javascript">
    var username = "<?php echo $_SESSION['username']; ?>";
    var names ="<?php echo $_GET['names']?>";
    var prices ="<?php echo $_POST['prices']?>";
    var codes ="<?php echo $_GET['codes']?>";
    var sizes ="<?php echo $_GET['sizes']?>";
    var colors ="<?php echo $_GET['colors']?>";
    var images ="<?php echo $_GET['images']?>";
    var quantities ="<?php echo $_GET['quantities']?>";
    var check ="<?php echo $_GET['check']?>";

    // alert(names);
    function insertData(){
      $.ajax({
              method:"POST",
              url: "insert_data.php",
              data: {username:username, names:names, prices:prices, codes:codes, sizes:sizes, colors:colors, images:images, quantities:quantities, check:check},
              async: false,
              success: function(data){
                alert(data);
                if(data === "Success"){
                  alert("GOOD BYE");

                } 
              }
            });
    }


  </script>

  <script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_9a49700b392140d6d00d0568aaeeef0951d25475',
      email: '<?php echo $email ?>',
      amount: <?php echo $total?>*100,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },

      callback: function(response){
          alert('Success. Transaction ref is ' + response.reference +". Click 'OK' to COMFIRM transaction.");
          insertData();
          window.location.href='empty_my_cart.php';
          
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>

</div>
</body>

</html>

<?php
require('footer.php');
?>