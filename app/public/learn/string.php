<?php

// en variabel deklareras med inledande $

$name = "Alva Tenor";

echo $name;

// variablers namn skrivs som snake_case i PHP: små bokstäver och understreck

// ett förnamn
$first_name = "Harry";
$fname = "Ron";

// ett efternamn
$last_name = "Potter";

// kontrollera vilken datatyp som en variabel har
// gettype
echo "<br>";
echo gettype($first_name);
echo "<br>";

// strängar slås ihop med punkt
echo "Variabeln med namnet last_name: <b>$last_name</b>, har datatypen: " . gettype($last_name);
echo "<br>";

// en variabel med namnet comment
$comment = "PHP är ju kul";


// hur många tecken har variabeln - strlen (stringlenght)
echo strlen($comment);
$number_of_characters = strlen($comment);
echo "<br>";
echo "kommentaren <i>$comment</i> har $number_of_characters tecken";

// uppgift:
// för att validera en variabel kan olika strängmetoder användas
// gör något vettigt med följande metoder
// ta bort eventuella inledande mellanslag med trim
// räkna ord med string_word_count
// repetera en sträng med str_repeat
// ersätt ett ord i en mening med str_replace

// testa exempelvis olika ordspråk 

$proverb_1 = "    Köp aldrig grisen i säcken                ";
$proverb_2 = "Man ska inte ropa hej förrän man är över bäcken";
$proverb_3 = "Många bäckar små blir strax en hel å";
$proverb_4 = "Surt sa räven";

// echo trim($proverb_1);
// string_word_count($proverb_2);


// antal tecken innan trim
$number_before = strlen($proverb_1);

// använda funktionen trim för att ta bort blanksteg
$proverb_1 = trim($proverb_1);

$number_after = strlen($proverb_1);
echo "<br>";
echo "ordspråket $proverb_1 hade innan trim $number_before tecken, och efter trim $number_after.";


// string_word_count($proverb_2);
echo "<br>";

$promise = "Jag lovar att lära mig stava till programmering. ";

$repeat_result = str_repeat($promise,50);
echo $repeat_result;

echo "<br>";

$message = "ALLT ÄR BARA EN STOR KONSPIRATION";

echo strtolower($message);
// obs funkar ej på svenska tecken



?>