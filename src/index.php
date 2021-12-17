<?php

namespace TDD;

include("./KerstBorrel.php");


$maxbudget = 5000;
$aantalPersoneelsleden = 21;

$kerstborrel = new KerstBorrel();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container" style="text-align:center;">
        <h1>Unit PHP</h1>

        <h4>Er komen op de kerstborrel <?php echo $aantalPersoneelsleden; ?>en het maximale budget wat is gereserveerd is voor de kerstborrel is: <?php echo $maxbudget; ?> het bedrag wat we dan kunnen besteden voor een kerstpakker bedraagt dan: <?php echo $kerstborrel->kostenKerstpakket(21, 5000) ?></h4>

    </div>
</body>

</html>