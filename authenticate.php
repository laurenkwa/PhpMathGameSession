<?php session_start();
    $username = $_POST["email"];
    $password = $_POST["password"];
    $i=0;
    $file = file_get_contents("credentials.config");
    $line = explode(PHP_EOL,$file);

    foreach($line as $item) {
        $item = explode(",", $item);
            if ($username == $item[0] && $password == $item[1]) {
                $_SESSION["login"] = "valid";
                header("Location:index.php");
                die();  
            } else {
               continue;
            }  
    }

        
    $_SESSION["invalidlogin"] = "Invalid login";
    header("Location:login.php");
    die();    
   
     
   
?> 