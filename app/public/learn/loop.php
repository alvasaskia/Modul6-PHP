<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP loopar</title>
    <style>
        .white {
            background-color: white;
            width: 20px;
            height: 20px;
            border: 1px solid black;

        }
        .black {
        background-color: black; 
        width: 20px;
            height: 20px;
    }
    table {
        border: 1px solid black;
    }
    </style>
</head>
<body>
<h1>PHP Loopar - Uppgifter</h1>
<h3>1. Skriv ett PHP-skript som använder en for-loop för att skriva ut siffrorna 1 till 10.</h3>

 <!-- JS-way | for (let i = 0; i <= 10; $i++) {
    console.log(i);
 } -->


<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . ", ";
};

?>

<h3>2. Skriv ett PHP-skript som använder en while-loop för att skriva ut de jämna talen mellan 0 och 20.</h3>

<script>
    // while-loop i JS
    
    let number = 0;

    while(number <= 20) {
console.log(number);
number = number + 2;
    }
</script>



<?php
  $number = 0;

  while($number <= 20) {
echo $number . ". ";
// $number = $number + 2;
$number += 2;
  }
?>

<!-- ALTERNATIV 2 -->
<br>
<br>

<?php
//   $number = 0;

//   while($number <= 20) {
// if ($number % 2) {

// printf ("This is the number %d\n <br>", $number);
// $number += 1;
// }
// // $number = $number + 2;

//   };
?>


<h3>3. Skriv ett PHP-skript som använder en do-while loop för att generera att slumpmässigt nummer mellan 1 och 10 tills de anger nummer 5.</h3>
<script>
    let rN = -1;
    do {
        rN = Math.floor(Math.random() * 10);
        console.log("siffran är", rN);
    } while (rN !== 5);
</script>

<?php
$rN = -1;
do {
$rN = rand(0, 10);
echo $rN . "...";
} while ($rN !== 5);

?>

<h3>4. Skriv ett PHP-skript som använder en foreach loop för att skriva ut nycklar och värdena för följande associativ array.</h3>

<?php

$person = [ "name" => "Bob", "age" => 25, "hobby" => "cooking", "hasDrivingLicence" => true];

foreach ($person as $key => $value) {
echo "$key => $value <br>";
}

?>

<h3>5. Skriv ett PHP-skript som använder en nestlad for-loop för att skriva ut en multiplikationstabell för talen 1 till 10.</h3>
<!-- <script>
for (1..10) {
    for (1..10) {
        // do-something
    }
}
</script> -->

<?php

for ($n = 1; $n <= 10; $n++) {
    echo "multiplikationstabell för siffran $n <br>";

    for ($factor = 1; $factor <= 10 ; $factor++) { 
      echo $n * $factor . ", ";
    }

echo "<br>";

};

?>


<!-- <h3>4b. Gör en likadan fast från -5 till 5.</h3>
<table>
    <?php
// for ($num=-5; $num <=5 ; $num++) { 
//     for ($otherNum=1; $otherNum <=10 ; $otherNum++) { 
// echo "<td>" . $num * $otherNum . "</td>";
//     } echo "<br>";
// }

?> 
</table> -->


<table>
    <tr>
        <td class="black"></td>
        <td class="white"></td>
        <td class="black"></td>
        <td class="white"></td>
    </tr>
    <tr>
        <td class="white"></td>
        <td class="black"></td>
        <td class="white"></td>
        <td class="black"></td>
    </tr>
    <tr>
        <td class="black"></td>
        <td class="white"></td>
        <td class="black"></td>
        <td class="white"></td>
    </tr>
    <tr>
        <td class="white"></td>
        <td class="black"></td>
        <td class="white"></td>
        <td class="black"></td>
    </tr>
</table>
<br>
<?php

$nrows = 8;
$ncols = 8;

echo "<table>";

for ($row=0; $row < $nrows; $row+=1) { 
    echo "<tr>";
    for ($col=0; $col < $ncols ; $col++) { 
      if (($col+$row) % 2 === 0)
      echo "<td class='black'>";
      else echo "<td class='white'>";
    }
}



echo "</table>";

?>

<h3>7. Skriv ett PHP-skript som använder en foreach loop för att beräkna summan av värdena i en array av tal.</h3>
<?php

$numbers = [1,4,8,10,3,2,7,6];

$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}
echo $total;
?>
    



</body>
</html>



