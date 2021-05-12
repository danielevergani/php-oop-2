<?php

include __DIR__."/oggetti/prodotti.php";


$playstation = new Prodotti("play", 450, "https://cdn.idealo.com/folder/Product/200584/7/200584783/s10_produktbild_gross/sony-playstation-5-ps5.jpg");
$playstationCat = new Categoria("play", 450, "https://cdn.idealo.com/folder/Product/200584/7/200584783/s10_produktbild_gross/sony-playstation-5-ps5.jpg", "teck");

$listaArticoli = [
    $playstation,
    $playstationCat
];
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
        <?php foreach($listaArticoli as $item) { ?>
            <div class="prodotto">
            <img src="<?php echo $item -> getImg(); ?>" alt="">
            <ul>
                <li><?php echo $item -> getName(); ?></li>
                <li><?php echo $item -> getPrezzo()."€"; ?></li>
                <?php if (property_exists($item, "categoria")) { ?>
                    <li><?php echo $item -> categoria; ?></li>
                <?php } ?>
            </ul>
            </div>
        <?php } ?>
        
    </body>
</html>