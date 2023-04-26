<?php

declare(strict_types=1); //true


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
    function calculate_total(int $price, int $amount): int // int = tvinga att va siffra
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
     * @param  int $price
     * @param  int $amount
     * @param  int $in_stock
     * @param  string $element
     * @return void
     */
    function render_total(int $price, int $amount, int $in_stock, string $element)
    {
        // validera inkommande argument
        // ex. är det ok med negativa tal?
        // ex. vilka html ska kunna anges?
        if ($price < 0 || $amount < 0) {
            return;
        }

        // ny kontroll av $amount - värde inom ett intervall_ is_orderable()

        if (!is_orderable($amount, $in_stock)) {
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

    // skapa en funktion som kontrollerar att ett värde finns mellan min och max    

    /**
     * is_orderable
     *
     * @param  int $x
     * @param  int $max
     * @return void
     */
    function is_orderable(int $x, int $max = 100)
    {
        // if ($x > 0 && $x < $max) {
        //     return true;
        // } else {
        //     return false;
        // }

        // som enradskod
        return ($x > 0 && $x < $max);
    }


    // anropa funktionen med de argument som ska gälla 
    render_total(8, 2, 25, "h4");


    // skapa en funktion som presenterar en persons hela namn och ålder
    // ex. Förnamn Efternamn, siffra år.
    // funktionen ska ta 3 parametrar och ska rendera resultatet som HTML


    // $first_name = "Alva";
    // $last_name = "Tenor";
    // $age = 28;
    $htmls = ["p", "div", "span"];

    function render_name_and_age($html, $first_name, $last_name, $age)
    {
        echo "<$html>$first_name $last_name, $age år.</$html>";
    }

    (render_name_and_age("p", "Alva", "Tenor", 28));




    // FORMULÄR
    // ett exempel på hur man backend kan hantera olika språk för tex formulärfält
    // skapa en array med standardspråk

    $english = [
        "welcome" => "Hello, welcome to this application",
        "name" => "Please enter your name",
        "reset" => "Reset",
        "send" => "Send"
    ];

    $swedish = [
        "welcome" => "Välkommen till applikationen!",
        "name" => "Vänligen ange förnamn",
        "reset" => "Radera",
        "send" => "Skicka"
    ];

    $spanish = [
        "welcome" => "Hola, bienvenido a esta aplicación",
        "name" => "Por favor ingrese su nombre",
        "reset" => "Borra",
        "send" => "Envía"
    ];

    // skapa en array med giltiga språk

    $languages = [
        "en" => $english,
        "sv" => $swedish,
        "sp" => $spanish
    ];

    // en variabel för aktuellt språk
    // skulle kunna sparas i en session, eller om man i applikationen först fårr möjligheten att välja...
    // men nu bestämt (hårdkodat) såhär
    $language = "sp";

    ?>
    <hr>
    <!-- FORMULÄR
    <form action="#" method="post">
        <p>
            Välkommen till applikationen!
        </p>
        <input type="text" name="first_name" placeholder="Ange förnamn">
        <input type="reset" value="Radera">
        <button>Skicka</button>
    </form>
    <hr> -->

    <!-- FORMULÄR -->
    <form action="#" method="post">
        <p>
            <?= $languages[$language]['welcome'] ?>
        </p>
        <input type="text" name="first_name" placeholder="<?= $languages[$language]['name'] ?>">
        <input type="reset" value="<?= $languages[$language]['reset'] ?>">
        <button><?= $languages[$language]['send'] ?></button>
    </form>





    <?php
    include "_includes/footer.php";
    ?>
</body>

</html>