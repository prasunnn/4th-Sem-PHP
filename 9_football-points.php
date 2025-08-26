<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <br>
        <input type="integer" name="wins" placeholder="Enter number of wins"><br><br>
        <input type="integer" name="loss" placeholder="Enter number of losses"> <br><br>
        <input type="integer" name="draws" placeholder="Enter number of draws"> <br><br>
        <input type="submit" name="submit-btn" value="submit">
    </form>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $wins = $_REQUEST['wins'];
    $loss = $_REQUEST['loss'];
    $draws = $_REQUEST['draws'];
    $total_points = ($wins * 3) + ($draws * 1);
    echo("<br>");
    echo("Wins: $wins <br>
          Losses: $loss <br>
          Draws: $draws <br>
          Total Points: $total_points");
}
?>
</body>
</html>