<?php
namespace FilmTools\Films;

trait FilmAwareTrait
{
    use FilmProviderTrait;

    /**
     * @param FilmInterface|FilmProviderInterface $film
     */
    public function setFilm( $film )
    {
        if ($film instanceOf FilmProviderInterface):
            $this->film = $film->getFilm();
        elseif ($film instanceOf FilmInterface):
            $this->film = $film;
        else:
            throw new \InvalidArgumentException("Instance of FilmInterface or FilmProviderInterface expected.");
        endif;

        return $this;
    }
}
