<html>
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   <body>
        <?php
            $name = $_POST['name'];
            $phonenumber = $_POST['phonenumber'];
            $message = $_POST['message'];

            $to = "contact@avalancheracing.in";
            $subject = "Avalanche Motorsports - Enquiry Form";
            $header = "From:leads@avalancheracing.in \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html;charset=ISO-8859-1\r\n";

            $body = '<html><body>';
            $body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
            $body .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($phonenumber) . "</td></tr>";
            $body .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($message) . "</td></tr>";
            $body .= "</table>";
            $body .= "</body></html>";

            //send email
            $retval = mail ($to,$subject,$body,$header);
         
            if( $retval == true ) {
                echo "Message sent successfully...";
            } else {
                echo "Message could not be sent...try later";
            }
        ?>
    </body>
</html>

