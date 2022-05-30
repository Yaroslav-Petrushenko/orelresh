<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Orel & Reshka</h1>
        <form method="post" action="index.php">
            <p>
            <label>
                <input type="radio" name="level" value="ease">ease
            </label>
            <label>
                <input type="radio" name="level" value="medium" checked>medium
            </label>
            <label>
                <input type="radio" name="level" value="hard">hard
            </label>
            </p>
            <p>
            <label>
                <button type="submi" name="game" value="1" > Orel</button>
            </label>
            <label>
                <button type="submit" name="game" value="2"> Reshka</button>
            </label> 
            </p>
        </form>
        <?php
        var_dump($_POST);
            if ($_POST){
                $level = $_POST['level']; // ease medium hard
                $game = $_POST['game']; //2 or 1
                $rand = rand(0,100);
                if ($rand == 0) {
                    echo "Ребро";
                } else if ($rand <= 50) {
                    echo "Решка";
                    $rand = 2;
                } else if ($rand > 50) {
                    echo "Орел";
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
                            echo "hahahahah loser!!!";
                        } else {
                            echo "today you are lucky";
                        }
                    } else {
                        echo "<h2>Victori</h2>";
                    }
                } else {
                    if ($level == "ease"){
                        $rand = rand(0,1);
                        if ($rand == 1) {
                            echo "You are lucky";
                        } else {
                            echo "you are LOSER";
                        }
                    } else {
                        echo "<h2>Lose</h2>";
                    }
                }
            }
        ?>
</body>
</html>   




if ($level == "ease"){
                        $rand = rand(0,1);
                        if ($rand == 1) {
                            if($game ==0){
                              $result = "orel";
                            }
                            echo "You are lucky";
                        } else {
                            echo "you are LOSER";
                        }
                    } else {
                        echo "<h2>Lose</h2>";
                        
                    }




                    $win = $_POST["win"];
        if(isset($_POST["disabled"])){
            $disabled = $_POST["disabled"];
        }else{
            $disabled = 0;
        }
        echo(var_dump($_POST));
    ?>