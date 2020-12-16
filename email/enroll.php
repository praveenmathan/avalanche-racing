<html>
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   <body>
        <?php
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $categorylist = $_POST['categorylist'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $nationality = $_POST['nationality'];
            $firsttimerlist = $_POST['firsttimerlist'];
            $havebeentoracingorkarting = $_POST['havebeentoracingorkarting'];
            $noofracesparticipated = $_POST['noofracesparticipated'];
            $Preferredbatch = $_POST['Preferredbatch'];
            $interestedlist = $_POST['interestedlist'];

            $to = "contact@avalancheracing.in";
            $subject = "Avalanche Motorsports - Enroll";
            $header = "From:leads@avalancheracing.in \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html;charset=ISO-8859-1\r\n";

            $body = '<html><body>';
            $body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $body .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($firstname) . "</td></tr>";
            $body .= "<tr><td><strong>Last Name:</strong> </td><td>" . strip_tags($lastname) . "</td></tr>";
            $body .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($phonenumber) . "</td></tr>";
            $body .= "<tr><td><strong>Category:</strong> </td><td>" . strip_tags($categorylist) . "</td></tr>";
            $body .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
            $body .= "<tr><td><strong>Address:</strong> </td><td>" . strip_tags($address) . "</td></tr>";
            $body .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($city) . "</td></tr>";
            $body .= "<tr><td><strong>State:</strong> </td><td>" . strip_tags($state) . "</td></tr>";
            $body .= "<tr><td><strong>Nationality:</strong> </td><td>" . strip_tags($nationality) . "</td></tr>";
            $body .= "<tr><td><strong>First timer:</strong> </td><td>" . strip_tags($firsttimerlist) . "</td></tr>";
            $body .= "<tr><td><strong>Have been to racing or karting:</strong> </td><td>" . strip_tags($havebeentoracingorkarting) . "</td></tr>";
            $body .= "<tr><td><strong>No of Races:</strong> </td><td>" . strip_tags($noofracesparticipated) . "</td></tr>";
            $body .= "<tr><td><strong>Preferred Batch</strong> </td><td>" . strip_tags($Preferredbatch) . "</td></tr>";
            $body .= "<tr><td><strong>Interested in Racing Championship</strong> </td><td>" . strip_tags($interestedlist) . "</td></tr>";
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

