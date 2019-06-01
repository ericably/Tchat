<?php

class From
{
    private $data;

    public $surround = 'p';

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    private function surround($html){

        return "<{$this->surround}>{$html}</{$this->surround}>";

    }

    public function input($name)
    {
        return $this->surround('<input type="text" name="' . $name . '"></input>') ;
    }

    public function texterea($name)
    {
        return $this->surround('<textarea type="text" name="' . $name . '"></textarea>') ;
    }

    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}