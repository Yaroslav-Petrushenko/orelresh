<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
    
    <form method="POST" action="<?php

        $numberGame = $_POST['numberGame'];
        if ($numberGame == 9) {
            echo ("result.php");
        } else {
            echo ("game.php");
        }
        $numberGame +=1;



        ?>">  

        <p>
        <label>   
            <button type="submit" name="game" value="1">Orel</button>
        </label>
        <label>
            <button type="submit" name="game" value="2">Reshka</button>
        </label>
        </p>
     
   <?php
    var_dump($_POST);
    
    if ($_POST){
        $level = $_POST['level']; // ease medium hard
         //2 or 1
        $rand = rand(0,100);
        $result="";
        $win = $_POST['win'];
        $lose = $_POST['lose'];
        $disabled=$_POST["disabled"];
        
        if(isset($_POST['game'])){
            $game = $_POST['game'];
            if ($rand == 0) {
                $result= "Ребро";
            } else if ($rand <= 50) {
                $result= "reshka";
                $rand = 2;
            } else if ($rand > 50) {
                $result= "orel";
                $rand = 1;
            }
            if ($game == 1) {
                echo "<p>You choise orel</p>";
            } else if ($game == 2) {
                echo "<p>You choise reshka</p>";
            }
            if ($game == $rand) { 
                if ($level == "hard") {
                    $rand = rand(0,2);
                    if ($rand == 0) {
                        if($game == 1){
                            $result = "reshka";
                        }else{
                            $result = "orel";
                                }
                                echo ("Your Lose!!!");
                                $lose+=1;
                            } else {
                                echo "Your Win";
                                $win+=1;
                            }
                        } else {
                            echo "<h2>Victori</h2>";
                            $win+=1;
                        }
                    } else {
                        if ($level == "easy") {
                            $rand = rand(0,1);
                            if ($rand == 1) {
                                if($game ==1){
                                    $result = "orel";
                                } else if($game == 2) {
                                    $result = "reshka";
                                }
                                echo ("WIN");
                                $win +=1;
                            } else {
                                echo ("LOSE");
                                $lose +=1;
                            }
                        } else {
                            echo ("<h2>Lose</h2>");
                            $lose +=1; 
                        }
                    }
                    echo("<p>$result</p>");
                }
                } 
                
                ?> 
                
                <input type="hidden" name="level" value="<?php echo($level); ?>">
                <input type="hidden" name="win" value="<?php echo($win); ?>">
                <input type="hidden" name="lose" value="<?php echo($lose); ?>">
                
                <input type="hidden" name="numberGame" value="<?php echo($numberGame); ?>">
                <input type="hidden" name="disabled" value="<?php echo($disabled); ?>">
            </form>

            
        </body>
        </html>