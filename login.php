<?php session_start();
    if($_POST["login"]) {
        header("Location:authenticate.php");
        die();
        
    } else if(isset($_SESSION["invalidlogin"])) {
        $error = $_SESSION["invalidlogin"];
        unset($_SESSION["invalidlogin"]);
        
    }  
      
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Math Game</title>
        <meta charset="UTF-8"/>
        <link rel = "stylesheet" type = "text/css" href = "style/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Style/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    
    <body>
      <h1>The Math Game</h1> 
            <br/><img src="Images/calculator.png" alt="calculator"/>
            <br/><br/>
            <div class="container"><p id="error"> <?php echo $error ?> 
            </p><br/><br/><form action="authenticate.php" method="post">
                <div class="row">
                    <div class="col-md-2 col-md-offset-4"><span id="caption">Email: </span> </div>
                    <div class="col-md-1">
                        <input name="email" type="email" required/>
                    </div>   
                </div>
                <div class="row">
                    <br/>
                    <div class="col-md-2 col-md-offset-4"><span id="caption">Password: </span></div>
                    <div class="col-md-1">
                        <input name="password" type="password" required/>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br/><br/>
                        <input type="submit" name="login" value="LOGIN" class="btn btn-info"/>
                    </div>   
                </div>
            </form>
        </div>
        
        <?php unset($_SESSION["invalidlogin"]); ?>

    </body>
    
</html>