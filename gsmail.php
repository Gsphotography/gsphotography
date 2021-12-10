<?php
$name=$_POST['name'];
$contect=$_POST['contectno'];
$email=$_POST['email'];
$email=$_POST['event'];
$email=$_POST['date'];
$email=$_POST['venue'];
$to="gsphotography00123@gmail.com";
$subject="PRE BOOKING";
$txt="Name:".$name."\r\n Contect no:".$contectno."\r\n Email Id:".$email."\r\n Event:".$event."\r\n Date:".$date."\r\n Venue:".$venue;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
} 
?>