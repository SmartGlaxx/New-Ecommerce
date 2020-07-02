   <?php 
      require('connect.php');
      // echo "Hello";
      session_start();
      $username = $_POST['username'];
      $names = $_POST['names'];
      $prices = $_POST['prices'];
      $codes = $_POST['codes'];
      $sizes = $_POST['sizes'];
      $colors = $_POST['colors'];
      $images = $_POST['images'];
      $quantities = $_POST['quantities'];
      $date = date('Y/m/d');

      $Name = array();
      $Name = explode(',',$names);
      $Code = array();
      $Code = explode(',',$codes);
      $Price = array();
      $Price = explode(',',$prices);
      $Image = array();
      $Image = explode(',',$images);
      $check = $_POST['check'];
          
        $sql = 'INSERT INTO orders(User_name,Name,Code, Price, Image,Date) VALUES ';
          
       $query_parts = array();
       for($x=0; $x<$check; $x++){
         $query_parts[] = "('" . $username  . "', '" . $Name[$x] . "', '" . $Code[$x] . "', '" . $Price[$x] . "', '" . $Image[$x] . "', '" . $date . "')";
         }
        $sql .= implode(',', $query_parts);
          if(mysqli_query($con, $sql)){
            echo "Purchase Succesful. ";
            
            
            $from = 'admin@client.smartegbuchulem.com';
            $to = 'smartegbuchulem@gmail.com';
             
            $subject = 'Purchase Successful';
            $email = $_SESSION['email'];
            $name = $names;
            $sentMessage = 'Purchase Successful.<br> Your purchase from Smart online shop has been acknowledged. You will recieve your shipment within one week. If you have any enquires, please call 08103948156.<br><br>
                Thanks, <br><br>
                Admin Smart E-Commerce.
            ';
            
            
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
             
            // Create email headers
            $headers .= 'From: '.$from."\r\n".
             'Reply-To: '.$from."\r\n" .
             'X-Mailer: PHP/' . phpversion();
             
             
            // Compose a simple HTML email message
            $message = '<html><body>';
            $message .= '<h3 style="color:#444;">'.$subject.'</h3>';
            $message .= '<p style="color:black;font-size:13px;"> '.$sentMessage.'</p>';
            $message .= '<p style="color:#080;font-size:13px;"><div> '.$name.'</div>';
            $message .= '<div style="color:#080;font-size:13px;">Email: '.$email.'<div></p>';
            $message .= '</body></html>';
             
            // Sending email
            if(mail($to, $subject, $message, $headers)){
               echo 'Plaese Check your email for purchase details.';
             } else{
                 echo 'Unable to send email. Please try again.';
             }

            
            
          } else {
            echo "Failed";
          }
          
          ?>


        