<?php
namespace tests;

use FilmTools\Films\FilmAwareTrait;
use FilmTools\Films\FilmProviderInterface;
use FilmTools\Films\FilmInterface;
use PHPUnit\Framework\TestCase;

class FilmAwareTraitTest extends TestCase
{

    /**
     * @dataProvider provideFilmInterfaceOrFilmProviderInterface
     */
    public function testGetterAndSetter( $film )
    {
        $sut = $this->getMockForTrait(FilmAwareTrait::class);
        $this->assertNull( $sut->getFilm() );

        $this->assertNotEquals( $film, $sut->getFilm());

        $sut->setFilm( $film );
        $this->assertInstanceOf(FilmInterface::class, $sut->getFilm());
    }

    /**
     * @dataProvider provideInvalidArguments
     */
    public function testInvalidFilmArguments( $invalid_film )
    {
        $sut = $this->getMockForTrait(FilmAwareTrait::class);
        $this->assertNotEquals( $invalid_film, $sut->getFilm());
        $this->expectException( \InvalidArgumentException::class );
        $sut->setFilm( $invalid_film );
    }


    public function provideInvalidArguments()
    {
        return array(
            [ "foo" ],
            [ 99 ]
        );
    }


    public function provideFilmInterfaceOrFilmProviderInterface()
    {
        $film_mock = $this->prophesize( FilmInterface::class );
        $film = $film_mock->reveal();

        $film_provider_mock = $this->prophesize( FilmProviderInterface::class );
        $film_provider_mock->getFilm()->willReturn( $film );
        $film_provider = $film_provider_mock->reveal();

        return array(
            [ $film ],
            [ $film_provider ]
        );
    }

}
