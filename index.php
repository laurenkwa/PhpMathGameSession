<?php session_start();
    if(isset($_POST["logout"])) {
            header("Location:logout.php");
            die();
    }

    
    if (!isset($_POST["answer"])) {
            echo '<h1>Math Game </h1>';

            $min = 0;
            $max = 50;
            

            $first = rand($min, $max);
            $second = rand($min, $max);
            $operator = rand(0,1);
            $_SESSION["score"] = 0;

            if($operator == 0) {
                echo $first . ' + ' . $second;
                $total = $first + $second;    
            }
        
            if ($operator == 1) {
                echo $first . ' - ' . $second;
                $total = $first - $second;
            }

            echo '<form method = "post" action="index.php">';
            echo '<input type="text" name="answer" /><br/><br/>';
            echo '<input type="submit" name="submit" value="SUBMIT"/><br/><br/>';
            echo '<input type="hidden" name="first" value="' . $first . '"/>';
            echo '<input type="hidden" name="second" value="' . $second . '"/>';
            echo '<input type="hidden" name="total" value="' . $total . '"/>';
            echo '<input type="hidden" name="operator" value="' . $operator . '"/>';
    
            echo "<hr/>";
            echo '<br/><br/><br/><input type="submit" name="logout" value="LOGOUT"/>';
        
    } else if (isset($_POST["answer"])) {

        echo '<h1>Math Game </h1>';

                $min = 0;
                $max = 50;


                $first = rand($min, $max);
                $second = rand($min, $max);
                $operator = rand(0,1);
                

                if($operator == 0) {
                    echo $first . ' + ' . $second;
                    $total = $first + $second;    
                }

                if ($operator == 1) {
                    echo $first . ' - ' . $second;
                   $total = $first - $second;
                }

                echo '<form method = "post" action="index.php">';
                echo '<input type="text" name="answer" /><br/><br/>';
                echo '<input type="submit" name="submit" value="SUBMIT"/><br/><br/>';
                echo '<input type="hidden" name="first" value="' . $first . '"/>';
                echo '<input type="hidden" name="second" value="' . $second . '"/>';
                echo '<input type="hidden" name="total" value="' . $total . '"/>';
                echo '<input type="hidden" name="operator" value="' . $operator . '"/>';


    
    
        if ($_POST["total"] == $_POST["answer"]) {
            echo "Correct. ";
            $_SESSION["score"]++;
            $_SESSION["questions"]++;
            echo '<input type="hidden" name="score" value="' . $score . '"/>';
            echo '<input type="hidden" name="questions" value="' . $questions . '"/>';
            echo "Your score is " . $_SESSION["score"] . " / " . $_SESSION["questions"];
            } else if ($_POST["total"] != $_POST["answer"]) {

            echo "<p id='error'> Incorrect. The correct answer is " . $_POST["total"] . ".</p> ";
            $_SESSION["questions"]++;
            $_SESSION["score"] = $_SESSION["score"] + 0;
            echo '<input type="hidden" name="score" value="' . $score . '"/>';
            echo '<input type="hidden" name="questions" value="' . $questions . '"/>';
            echo "<br/>Your score is " . $_SESSION["score"] . " / " . $_SESSION["questions"];

        }

        echo "<hr/>";

        echo '<br/><br/><br/><input type="submit" name="logout" value="LOGOUT"/>';
    }
?>

<html>
    <head>
        <title>Math Game</title>
        <link href="" />
        <meta charset="UTF-8"/>
        <link rel = "stylesheet" type = "text/css" href = "style/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Style/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    
    <body>
        
                    
        
    </body>
    
</html>