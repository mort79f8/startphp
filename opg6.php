<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
    echo '<p>' . array_keys($ninjasOne)[0] . ' has a ' . $ninjasOne["shaun"] . ' belt</p>';
    echo '<br>';

    $products = [
        ['name' => 'shiny shell', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];
    ?>
    <main>
        <?php
        foreach ($products as $item) {
            echo '<article>';
            echo '<h1>' . $item['name'] . '</h1>';
            echo '<p> Koster: ' . $item['price'] . '</p>';
            echo '</article>';
        } ?>

    </main>
</body>

</html>