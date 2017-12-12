<?php
namespace FilmTools\Films;


class Film extends FilmAbstract implements FilmInterface
{

    /**
     * @param string $manufacturer
     * @param string $name
     * @param int    $asa
     */
    public function __construct( $manufacturer, $name, $asa = null )
    {
        $this->setManufacturer( $manufacturer );
        $this->setName( $name );
        $this->setAsa( $asa );
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $info = [
            $this->getManufacturer(),
            $this->getName(),
            $this->getAsa()
        ];
        return trim(implode(" ", $info));
    }


    /**
     * @param string $name
     */
    public function setName( $name )
    {
        $this->name = $name;
        return $this;
    }


    /**
     * @param string $manufacturer
     */
    public function setManufacturer( $manufacturer )
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @param string $asa
     */
    public function setAsa( $asa )
    {
        $this->asa = $asa;
        return $this;
    }


}
