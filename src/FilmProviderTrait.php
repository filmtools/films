<?php
namespace FilmTools\Films;

trait FilmProviderTrait
{

    /**
     * @var FilmInterface|null
     */
    public $film;


    /**
     * @return FilmInterface|null
     */
    public function getFilm()
    {
        return $this->film;
    }
}
