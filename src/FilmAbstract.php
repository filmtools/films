<?php
namespace FilmTools\Films;


abstract class FilmAbstract implements FilmInterface
{

    /**
     * @var string
     */
    public $name;


    /**
     * @var string
     */
    public $manufacturer;


    /**
     * @var int|null
     */
    public $asa;


    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * @return int|null
     */
    public function getAsa()
    {
        return $this->asa;
    }


}
