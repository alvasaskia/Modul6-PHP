<?php

declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasser</title>
</head>

<body>

    <h2>Plant klass</h2>
    <?php



    // 3 egenskaper
    // färg, höjd, massa, lukt
    // metoder
    // fotosyntes, växa,

    class Plant
    {
        // egenskaper
        private string $color;
        private float $length;
        private float $mass;
        private string $scent;
        private float $sugarLevel;

        public function __construct(string $color, float $length, float $mass, string $scent)
        {
            $this->color = $color;
            $this->length = $length;
            $this->mass = $mass;
            $this->scent = $scent;
            $this->sugarLevel = 0.0;

            echo "A plant has been born! <br>";
            echo $this->color;
        }

        public function photosynthesis(float $sunlight)
        {
            // omvandlar solljus till energi
            echo "converting sunlight to energy! <br>";
            $this->sugarLevel += $sunlight * 0.1;
            echo "Sugarlevel is $this->sugarLevel <br>";
        }

        // public function respirate(float $oxygen) {
        //     // omvandlar syre till att växa
        //     if ($this->sugarLevel > 0.1 * $oxygen){
        //     $this->mass += $oxygen * 0.1;
        //     $this->length += $oxygen * 0.2;
        //     $this->sugarLevel-= 0.1 * $oxygen;
        //     echo "Plant has grown! Length is $this->length <br> Mass is $this->mass <br>";
        // }
        // else {
        //     echo "not enough sugar to grow";
        //  }
    }

    // gör en funktion respirate
    // it should consume oxygen
    // den ska öka lenght och mass 
    // it should echo the status of lengt and mess
    // ta in syre, öka längd och massa och echo status




    $kaktus = new Plant("green", 120.12, 3.0, "cactusy");

    // var_dump($kaktus);

    $kaktus->photosynthesis(200);
    // $kaktus->respirate(300);

    ?>

    <h2>Fordon</h2>
    <?php
    // gör en klass som heter Vechicle
    // den ska ha minst följande egenskaper
    // amountOfWheels, amountOfPassengers, brand, color, topSpeed, horsePower

    class Vehicle
    {
        private int $amountOfWheels;
        private int $amountOfPassengers;
        private string $brand;
        private string $color;
        private int $topSpeed;
        private int $horsePower;

        public function __construct(int $amountOfWheels, int $amountOfPassengers, string $brand, string $color, int $topSpeed, int $horsePower)
        {
            $this->amountOfWheels = $amountOfWheels;
            $this->amountOfPassengers = $amountOfPassengers;
            $this->brand = $brand;
            $this->color = $color;
            $this->topSpeed = $topSpeed;
            $this->horsePower = $horsePower;
            $this->currentSpeed = 0.0;
        }

        public function printStatus()
        {

            foreach ($this as $propertyName => $propertyValue) {
                # code...
            }
            // echo "<br> This vehicle has $this->amountOfWheels wheels.
            // <br> This vehicle has $this->amountOfPassengers seats.
            // <br> This vehicle is a $this->brand. <br> This vehicle is $this->color.
            // <br> This vehicle has a top speed of $this->topSpeed km/h.
            // <br> This vehicle has $this->horsePower horse powers.";
        }
    }

    $myCar = new Vehicle(4, 5, "Kia", "blue", 90, 300);
    // instans -> object från en class
    $myBike = new Vehicle(2, 2, "Kronan", "green", 20, 3);
    $myCar->printStatus();
    $myBike->printStatus();
    ?>

    <h2>Inheritance - arv</h2>
    
    <?php
    class 
    ?>
</body>

</html>