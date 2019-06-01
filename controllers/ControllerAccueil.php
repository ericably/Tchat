<?php
class ControllerAccueil
{
    private $_tchatManager;
    private $_view;

    public function __construct($url)
    {
//        var_dump(count($url));
//        if(isset($url) and count($url) > 1)
//            throw new Exception('page introuvable');
//        else
            $this->tchats();
    }

    private function tchats()
    {
        $this->_tchatManager = new TchatManager();
        $tchats =$this->_tchatManager->getTchat();

        require_once('views/viewAccueil.php');
    }

    public function insertTchat($name, $message)
    {
        //tchater
        $this->_tchatManager = new TchatManager();
        $this->_tchatManager->tchater($name, $message);

        require_once ('views/viewAccueil.php');
    }
}