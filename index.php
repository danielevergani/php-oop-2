<?php

error_reporting(E_ALL & E_STRICT);
ini_set('display_errors', '1');
ini_set('log_errors', '0');
ini_set('error_log', './');

class Prodotto {

    protected $nomeArticolo;
    protected $prezzo;
    protected $immagineProdotto;

    // costruttore
    public function __construct($_nomeArticolo, $_prezzo, $_immagineProdotto = "https://lh3.googleusercontent.com/proxy/R0O4NMv7ecZe-n7M2OCiUZuJfPji1HXcrgL50BQ3VuWkaYNZJnkb7qMnP9Frq7FT3RAc4PfXCWKI9nCJjajvLk0FRGXnhDo9nWjyjYJ1ucu-4rLV4BW9Qv7BRnpYtnE2sbthgfgXmXt64yw66dM")
    {
        $this->nomeArticolo = $_nomeArticolo;
        $this->prezzo = $_prezzo;
        $this->immagineProdotto = $_immagineProdotto;
    }

    // metodi
    public function getName(){
        return $this -> nomeArticolo;
    }
    public function getPrezzo(){
        return $this -> prezzo;
    }
    public function getImg(){
        return $this -> immagineProdotto;
    }

}

$playstation = new Prodotto("play", 450);

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
        <img src="<?php echo $playstation -> getImg(); ?>" alt="">
        <ul>
            <li><?php echo $playstation -> getName(); ?></li>
            <li><?php echo $playstation -> getPrezzo()."€"; ?></li>
        </ul>
        
        
    </body>
</html>