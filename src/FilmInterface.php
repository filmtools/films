<?php
namespace FilmTools\Films;


interface FilmInterface
{

    /**
     * @return string|null
     */
    public function getName();


    /**
     * @return string|null
     */
    public function getManufacturer();


    /**
     * @return int|null
     */
    public function getAsa();

}
