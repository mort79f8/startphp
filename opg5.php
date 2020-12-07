<?php
include_once('Header.php');
?>

<main>
    <h1>Hello World!</h1>

    <?php
    $myString = "Den der gemmer til natten, gemmer til katten";
    $brokenUp = explode(" ", $myString);
    foreach ($brokenUp as $word) {
        echo "<br>" . $word;
    }
    ?>
</main>

<?php
include_once('Footer.php');
?>