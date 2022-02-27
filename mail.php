<?php
//get data from form  
$name = $_POST['name'];
$game_requested= $_POST['game'];
$data= $_POST['GB'];
$to = "rehanbro350@gmail.com";
$subject = "Mail From gamesvine";
$txt ="Name = ". $name . "\r\n Message =" . $game_requested;
$headers = "From: noreply@gamesvine.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("form.html");
?>