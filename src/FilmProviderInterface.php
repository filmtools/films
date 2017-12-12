<?php
namespace FilmTools\Films;

interface FilmProviderInterface
{
    /**
     * @return FilmInterface|null
     */
    public function getFilm();
}
