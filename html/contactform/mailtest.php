<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "post@jorgenjohansen.no";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
             echo "Mail not sendt"."<br/>";
       print_r(error_get_last())."<br/>";
       echo "to:".$to."<br/>";
       echo "Subject:".$subject."<br/>";
       echo "MessageMain:".$messageMain."<br/>";
       echo "Header:".$header."<br/>";
       echo "Message:".$message;
         }
      ?>
      
   </body>
</html>
