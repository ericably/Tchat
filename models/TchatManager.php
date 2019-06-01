<?php
class TchatManager extends  Model
{
    public function getTchat()
    {
        $this->getBdd();
        return $this->getAll('tchat','Tchat');
    }

    public function tchater($name, $message)
    {
        $this->getBdd();

        return $this->insert($name, $message);
    }
}