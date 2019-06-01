<?php
class Tchat
{
    private $_id;
    private $_name;
    private $_message;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // HYDRATION
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
                $this->$method($value);
        }
    }

    // SETTERS
    public function setId($id)
    {
        $id = (int) $id;

        if($id > 0)
            $this->_id = $id;
    }

    public function setName($name)
    {
        if(is_string($name))
            $this->_name = $name;
    }

    public function setMessage($message)
    {
        if (is_string($message))
            $this->_message = $message;
    }

    // GETTERS

    public function getId()
    {
        return $this->_id;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getMessage()
    {
        return $this->_message;
    }
}