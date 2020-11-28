<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>

<?php
$name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];

$to = "mailme24praveen@gmail.com";
$subject = "RIA Emails";
$body = "Name: ".$name."\nEmail: ".$phonenumber."\nMessage: ".$message;
$header = "From:leads@github.io/ \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

//send email
$retval = mail ($to,$subject,$body,$header);
         
if( $retval == true ) {
   echo "Message sent successfully...";
}else {
   echo "Message could not be sent...";
}
?>


</body>
</html>

