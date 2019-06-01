<?php
class View
{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view'.$action.'php';
    }

    public function generate($data)
    {
        $content = $this->generateFile($this->_file, $data);
    }
}