<?php

class Prodotti {

    protected $nomeArticolo;
    protected $prezzo;
    protected $immagineProdotto;

    // costruttore
    public function __construct($_nomeArticolo, $_prezzo, $_immagineProdotto)
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

class Categoria extends Prodotti{
    
    protected $categoria;

    // costruttore
    public function __construct($_nomeArticolo, $_prezzo, $_immagineProdotto, $_categoria)
    {
        parent::__construct($_nomeArticolo, $_prezzo, $_immagineProdotto);
        $this -> categoria = $_categoria;
    }

    // metodi
    public function getCategoria(){
        return $this -> categoria;
    }
}