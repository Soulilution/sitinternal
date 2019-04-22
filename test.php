<?php
$con = mysql_connect("localhost","montags1_user","k941mdVa52X1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }else{
      echo "connected";
  }

// some code

mysql_close($con);


 $con=mysqli_connect("localhost","montags1_user","k941mdVa52X1","montags1_db");

    if (mysqli_connect_errno())  
    {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else{
      echo "connected";
  }
  $from="test@gmai.com";
  $boundary = uniqid('np');
    $header = "MIME-Version: 1.0\r\n";
          //  $header .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";
            $header .= "From:$from \r\n"; 
            $header .= "Content-type: text/html;charset=utf-8\r\n\r\n";
        
   $to="supriyarajlit@gmail.com"; 
 $subject="Event-Anmeldung"; 
 $message      = "Folgende Person hat sich angemeldet:<br/><br/><b>Vorname</b>   = dfdf <br/><b>Nachname</b> = dfdfdf <br/><b>Titel</b> = sdsdsd <br/><b>Geschlecht</b>   = sdsd <br/><b>Strasse / Nr</b> = sdsdsd <br/><b>E-Mailadresse</b> = ffdf@r.vvv <br/><b>PLZ</b>    = dssdsd <br/><b>Ort</b>   = wewewe <br/><b>Land</b>   = qwqwqw <br/><b>Event Name</b>   = Charisma - Kein Licht ohne Schatten äöü <br/><b>Telefonnummer</b> = 232323 <br/><b>Message</b> = weweweweweweewewe "; 


    $retval       = mail ($to,$subject,$message,$header);
    if($retval){
        echo "mail sent";
    }else{
        echo "mail not sent";
    }
?> 