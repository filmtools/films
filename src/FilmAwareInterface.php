<?php
namespace FilmTools\Films;

interface FilmAwareInterface extends FilmProviderInterface
{

    /**
     * @param FilmInterface|FilmProviderInterface $film
     */
    public function setFilm( $film );

}
