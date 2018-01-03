<?php
namespace FilmTools\Films;


class Film extends FilmAbstract implements FilmInterface
{

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
        return trim(implode(" ", array_filter($info)));
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
