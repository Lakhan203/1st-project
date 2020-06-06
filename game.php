<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>STONE PAPER SCISSOR</title>
  </head>
  <body>
<div class="container">

<!-- starting of php -->
<?php
//players

$p1="Player 1";
$p2="Player 2";
$p3="Player 3";
$p4="Player 4";

// for loop 

for ($i=1; $i <=50 ; $i++) { 
    
echo "<em><u> $i iteration </u></em>";  
echo "<br>";  
echo "<br>";  

//array item 

 $item= array("ROCK","PAPER","SCISSOR");

//random selection 

 $p1=$item[rand(0,2)];
    echo " Player 1 select => <strong>$p1</strong>";
echo "<br>";

 $p2=$item[rand(0,2)];
    echo " Player 2 select => <strong>$p2</strong>";
echo "<br>";

 $p3=$item[rand(0,2)];
    echo " Player 3 select => <strong>$p3</strong>";
echo "<br>";

 $p4=$item[rand(0,2)];
    echo " Player 4 select => <strong>$p4</strong>";
echo "<br>";

echo "<br>";



//player 1 match
//player 1 and player 1

if ($p1 == $p1) {
    echo "Player 1 vs Player 1 => <strong>N/A</strong>";
    echo "<br>";
}
//player 1 and player 2

if ($p1 == $p2) {
    echo "Player 1 vs Player 2 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p1 == "ROCK" && $p2 == "PAPER" || $p1 == "PAPER" && $p2 == "SCISSOR" || $p1 == "SCISSOR" && $p2 == "ROCK") {
    echo "Player 1 vs Player 2 => <strong>Player 1 LOSS</strong>";
    echo "<br>";
}

if ($p1 == "SCISSOR" && $p2 == "PAPER" || $p1 == "PAPER" && $p2 == "ROCK" || $p1 == "ROCK" && $p2 == "SCISSOR") {
    echo "Player 1 vs Player 2 => <strong>Player 1 WIN</strong>";
    echo "<br>";
    }
    
   
//player 1 and player 3

if ($p1 == $p3) {
    echo "Player 1 vs Player 3 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p1 == "ROCK" && $p3 == "PAPER" || $p1 == "PAPER" && $p3 == "SCISSOR" || $p1 == "SCISSOR" && $p3 == "ROCK") {
    echo "Player 1 vs Player 3 => <strong>Player 1 LOSS</strong>";
    echo "<br>";
}

if ($p1 == "SCISSOR" && $p3 == "PAPER" || $p1 == "PAPER" && $p3 == "ROCK" || $p1 == "ROCK" && $p3 == "SCISSOR") {
    echo "Player 1 vs Player 3 => <strong>Player 1 WIN</strong>";
    echo "<br>";
    }
    

//player 1 and player 4

if ($p1 == $p4) {
    echo "Player 1 vs Player 4 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p1 == "ROCK" && $p4 == "PAPER" || $p1 == "PAPER" && $p4 == "SCISSOR" || $p1 == "SCISSOR" && $p4 == "ROCK") {
    echo "Player 1 vs Player 4 => <strong>Player 1 LOSS</strong>";
    echo "<br>";
}

if ($p1 == "SCISSOR" && $p4 == "PAPER" || $p1 == "PAPER" && $p4 == "ROCK" || $p1 == "ROCK" && $p4 == "SCISSOR") {
    echo "Player 1 vs Player 4 => <strong>Player 1 WIN</strong>";
    echo "<br>";
    }

    echo "<hr>";   

//player 2 match
//player 2 and player 1

if ($p2 == $p1) {
    echo "Player 2 vs Player 1 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p2 == "ROCK" && $p1 == "PAPER" || $p2 == "PAPER" && $p1 == "SCISSOR" || $p2 == "SCISSOR" && $p1 == "ROCK") {
    echo "Player 2 vs Player 1 => <strong>Player 2 LOSS</strong>";
    echo "<br>";
}

if ($p2 == "SCISSOR" && $p1 == "PAPER" || $p2 == "PAPER" && $p1 == "ROCK" || $p2 == "ROCK" && $p1 == "SCISSOR") {
    echo "Player 2 vs Player 1 => <strong>Player 2 WIN</strong>";
    echo "<br>";
    }

//player 2 and player 2

if ($p2 == $p2) {
    echo "Player 2 vs Player 2 => <strong>N/A</strong>";
    echo "<br>";
}    

//player 2 and player 3

if ($p2 == $p3) {
    echo "Player 2 vs Player 3 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p2 == "ROCK" && $p3 == "PAPER" || $p2 == "PAPER" && $p3 == "SCISSOR" || $p2 == "SCISSOR" && $p3 == "ROCK") {
    echo "Player 2 vs Player 3 => <strong>Player 2 LOSS</strong>";
    echo "<br>";
}

if ($p2 == "SCISSOR" && $p3 == "PAPER" || $p2 == "PAPER" && $p3 == "ROCK" || $p2 == "ROCK" && $p3 == "SCISSOR") {
    echo "Player 2 vs Player 3 => <strong>Player 2 WIN</strong>";
    echo "<br>";
    }

//player 2 and player 4

if ($p2 == $p4) {
    echo "Player 2 vs Player 4 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p2 == "ROCK" && $p4 == "PAPER" || $p2 == "PAPER" && $p4 == "SCISSOR" || $p2 == "SCISSOR" && $p4 == "ROCK") {
    echo "Player 2 vs Player 4 => <strong>Player 2 LOSS</strong>";
    echo "<br>";
}

if ($p2 == "SCISSOR" && $p4 == "PAPER" || $p2 == "PAPER" && $p4 == "ROCK" || $p2 == "ROCK" && $p4 == "SCISSOR") {
    echo "Player 2 vs Player 4 => <strong>Player 2 WIN</strong>";
    echo "<br>";
    }

    echo "<hr>"; 

//player 3 match
//player 3 and player 1

if ($p3 == $p1) {
    echo "Player 3 vs Player 1 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p3 == "ROCK" && $p1 == "PAPER" || $p3 == "PAPER" && $p1 == "SCISSOR" || $p3 == "SCISSOR" && $p1 == "ROCK") {
    echo "Player 3 vs Player 1 => <strong>Player 3 LOSS</strong>";
    echo "<br>";
}

if ($p3 == "SCISSOR" && $p1 == "PAPER" || $p3 == "PAPER" && $p1 == "ROCK" || $p3 == "ROCK" && $p1 == "SCISSOR") {
    echo "Player 3 vs Player 1 => <strong>Player 3 WIN</strong>";
    echo "<br>";
    }

//player 3 and player 2

if ($p3 == $p2) {
    echo "Player 3 vs Player 2 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p3 == "ROCK" && $p2 == "PAPER" || $p3 == "PAPER" && $p2 == "SCISSOR" || $p3 == "SCISSOR" && $p2 == "ROCK") {
    echo "Player 3 vs Player 2 => <strong>Player 3 LOSS</strong>";
    echo "<br>";
}

if ($p3 == "SCISSOR" && $p2 == "PAPER" || $p3 == "PAPER" && $p2 == "ROCK" || $p3 == "ROCK" && $p2 == "SCISSOR") {
    echo "Player 3 vs Player 2 => <strong>Player 3 WIN</strong>";
    echo "<br>";
    }

//player 3 and player 3

if ($p3 == $p3) {
    echo "Player 3 vs Player 3 => <strong>N/A</strong>";
    echo "<br>";
}  

//player 3 and player 4

if ($p3 == $p4) {
    echo "Player 3 vs Player 4 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p3 == "ROCK" && $p4 == "PAPER" || $p3 == "PAPER" && $p4 == "SCISSOR" || $p3 == "SCISSOR" && $p4 == "ROCK") {
    echo "Player 3 vs Player 4 => <strong>Player 3 LOSS</strong>";
    echo "<br>";
}

if ($p3 == "SCISSOR" && $p4 == "PAPER" || $p3 == "PAPER" && $p4 == "ROCK" || $p3 == "ROCK" && $p4 == "SCISSOR") {
    echo "Player 3 vs Player 4 => <strong>Player 3 WIN</strong>";
    echo "<br>";
    }

    echo "<hr>"; 

// Player 4 match
//player 4 and player 1

if ($p4 == $p1) {
    echo "Player 4 vs Player 1 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p4 == "ROCK" && $p1 == "PAPER" || $p4 == "PAPER" && $p1 == "SCISSOR" || $p4 == "SCISSOR" && $p1 == "ROCK") {
    echo "Player 4 vs Player 1 => <strong>Player 4 LOSS</strong>";
    echo "<br>";
}

if ($p4 == "SCISSOR" && $p1 == "PAPER" || $p4 == "PAPER" && $p1 == "ROCK" || $p4 == "ROCK" && $p1 == "SCISSOR") {
    echo "Player 4 vs Player 1 => <strong>Player 4 WIN</strong>";
    echo "<br>";
    }

//player 4 and player 2

if ($p4 == $p2) {
    echo "Player 4 vs Player 2 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p4 == "ROCK" && $p2 == "PAPER" || $p4 == "PAPER" && $p2 == "SCISSOR" || $p4 == "SCISSOR" && $p2 == "ROCK") {
    echo "Player 4 vs Player 2 => <strong>Player 4 LOSS</strong>";
    echo "<br>";
}

if ($p4 == "SCISSOR" && $p2 == "PAPER" || $p4 == "PAPER" && $p2 == "ROCK" || $p4 == "ROCK" && $p2 == "SCISSOR") {
    echo "Player 4 vs Player 2 => <strong>Player 4 WIN</strong>";
    echo "<br>";
    }

//player 4 and player 3

if ($p4 == $p3) {
    echo "Player 4 vs Player 3 => <strong>MATCH DRAW</strong>";
    echo "<br>";
}
if ($p4 == "ROCK" && $p3 == "PAPER" || $p4 == "PAPER" && $p3 == "SCISSOR" || $p4 == "SCISSOR" && $p3 == "ROCK") {
    echo "Player 4 vs Player 3 => <strong>Player 4 LOSS</strong>";
    echo "<br>";
}

if ($p4 == "SCISSOR" && $p3 == "PAPER" || $p4 == "PAPER" && $p3 == "ROCK" || $p4 == "ROCK" && $p3 == "SCISSOR") {
    echo "Player 4 vs Player 3 => <strong>Player 4 WIN</strong>";
    echo "<br>";
    }

//player 4 and player 4

if ($p4 == $p4) {
    echo "Player 4 vs Player 4 => <strong>N/A</strong>";
    echo "<br>";
}  

    echo "<br>";
    echo "<br>";
    echo "<hr style= 'border: 1px dashed #000; width: 100%; margin: auto; margin-top: 5%; margin-bottom: 5%;'>";
}
?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
