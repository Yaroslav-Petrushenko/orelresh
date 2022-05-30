<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <form method="POST" action="index.php">
        <h1>Your Result</h1>

        <?php
        var_dump($_POST);

        $win = $_POST['win'];
        $lose = $_POST['lose'];
        $numberGame =$_POST['numberGame'];
        $level=$_POST["level"];
        $disabled=$_POST["disabled"];

        if($win > 5 && $level == "easy" && $disabled == 0){
            $disabled = 1;
        }else if($win > 5 && $level == "medium" && $disabled == 1){
            $disabled = 2;
        } else {
            $disabled = 0;
        }
        echo("<p>win: $win</p>");
        echo("<p>Loses: $lose</p>");
        echo("<p>numberGame: $numberGame</p>");
        echo("<p>$level</p>");

    ?>

        
    <input type="hidden" name="win" value="<?php echo($win); ?>">
    <input type="hidden" name="lose" value="<?php echo($lose); ?>">
    <input type="hidden" name="disabled" value="<?php echo($disabled); ?>">
    <input type="hidden" name="level" value="<?php echo($level); ?>">
    <input type="submit" value="game">
   </form>
</body>
</html>