<?php

class User
{

    //Atributos
    private $name;
    private $Apellido;
    private $Ci;
    private $Roll;



    //Constructor
    public function __construct($name, $Apellido, $Ci, $Roll)
    {
        $this->name = $name;
        $this->Apellido = $Apellido;
        $this->Ci = $Ci;
        $this->Roll = $Roll;
    }


    //Getters y Setters
    public function getName()
    {
        return $this->name;
    }

    public function getApellido()
    {
        return $this->Apellido;
    }

    public function getCi()
    {
        return $this->Ci;
    }

    public function getRoll()
    {
        return $this->Roll;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
    }

    public function setCi($Ci)
    {
        $this->Ci = $Ci;
    }

    public function setRoll($Roll)
    {
        $this->Roll = $Roll;
    }
}