<?php
namespace tests;

use FilmTools\Films\FilmProviderTrait;
use PHPUnit\Framework\TestCase;

class FilmProviderTraitTest extends TestCase
{

    public function testGetInterceptor()
    {
        $mock = $this->getMockForTrait(FilmProviderTrait::class);

        $data = array(2);

        // Trait introduces this attribute
        $this->assertObjectHasAttribute('film', $mock);
        $mock->film = $data;

        $this->assertEquals( $data, $mock->getFilm());
    }

}
