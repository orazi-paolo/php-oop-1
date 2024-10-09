<?php
// ! creo una nuova classe per i generi
class Genre
{
    // dichiaro la variabile d'istanza
    public $name;

    // definisco il costruttore
    public function __construct($_name)
    {
        $this->name = $_name;
    }
}