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



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["user"]) && !empty($_POST["pass"])) {
        $username = $_POST["user"];
        $password = $_POST["pass"];
        
        if($user == 'user' && $pass == 'pass') {
            session_start();
            $_SESSION["authenticated"] = 'true';
            header('Location: index.php');
        }
        else {
            header('Location: login.php');
        }
        
    } else {
        header('Location: login.php');
    }
} else {


if (count($_POST))
{
    // Parse login.txt
    $loginData = file('cont.txt');
    $accessData = array();
    foreach ($loginData as $line) {
        list($username, $password) = explode(',', $line);
        $accessData[trim($username)] = trim($password);
    }


    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $upass = isset($_POST['upass']) ? $_POST['upass'] : '';


    if (array_key_exists($user, $accessData) && $upass == $accessData[$user]) {
        echo "Logare Corecta! Salut $user ";
echo ' <a href="index.php">Click aici!</a>';
      
        ///header("Location: index.php");
    } else {
        echo "Nume sau parola incorecta";
    }
}

  



?>