<?php

declare(strict_types=1);


$page_title = "Sida om funktioner";
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
</head>

<body>
    <?php
    include "_includes/header.php";
    ?>
    <h1><?= $page_title ?></h1>

    <ul>
        <li>Använd beskrivande funktionsnamn</li>
        <li>Följ kodstandard för språket</li>
        <li>Validera ev. parametrar|argument som finns i funktionen</li>
        <li>Använd flera funktioner - dela upp logik</li>
        <li>Dokumentera funktionen - vilka parametrar osv...</li>
    </ul>

    <?php

    // en funktion för att beräkna en kostnad

    /**
     * calculate_total
     *
     * @param  mixed $price
     * @param  mixed $amount
     * @return int
     */
    function calculate_total(int $price, int $amount): int
    {
        return $price * $amount;
    }

    // använd funktionen, spara värdet i en ny variabel
    $total = calculate_total(7, 4);

    // presentera resultatet i ett html block-element
    echo "<div>Kostnaden är $total kr för 4 äpplen.</div><br>";

    $total = calculate_total(5, 12);

    echo "<div>Kostnaden är $total kr för 12 äpplen.</div><br>";


    // Uppgift. Skapa en funktion som använder calculate_total och därefter presenterar resultatet

    /**
     * render_total
     *
     * @param  mixed $price
     * @param  mixed $amount
     * @param  mixed $element
     * @return void
     */
    function render_total(int $price, int $amount, string $element)
    {
        // validera inkommande argument
        // ex. är det ok med negativa tal?
        // ex. vilka html ska kunna anges?
        if ($price < 0 || $amount < 0) {
            return;
        }

        // se till att endast följande html-element är giltiga
        // en array med giltiga element
        $elements = ["pre", "p", "div", "h4"];
        if (!in_array($element, $elements)) {
            $element = "pre";
        } 

        $total = calculate_total($price, $amount);
        echo "<$element>Kostnad: $total</$element>";
    }

    render_total(4, 80, "h1");


    ?>

    <?php
    include "_includes/footer.php";
    ?>
</body>

</html>