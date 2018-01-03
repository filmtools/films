<?php
namespace tests;

use FilmTools\Films\Film;
use FilmTools\Films\FilmInterface;
use PHPUnit\Framework\TestCase;

class FilmTest extends TestCase
{

    /**
     * @dataProvider provideManufacturerAndName
     */
    public function testSimpleInstantiation( $manufacturer, $name, $asa, $expected_name )
    {
        $sut = new Film;
        $sut->setManufacturer( $manufacturer );
        $sut->setName( $name );
        $sut->setAsa( $asa );

        $this->assertInstanceOf( FilmInterface::class, $sut );

        $string_sut = (string) $sut;
        $this->assertNotEmpty( $string_sut );

        $this->assertEquals($string_sut, $sut->__toString());
        $this->assertEquals($expected_name, $sut->__toString());
    }

    /**
     * @dataProvider provideManufacturerAndName
     */
    public function testNameInterceptors( $manufacturer, $name, $asa, $expected_name )
    {
        $sut = new Film;
        $sut->setManufacturer( $manufacturer );
        $sut->setName( $name );
        $sut->setAsa( $asa );

        $new_name = "foo";
        $this->assertNotEquals( $sut->getName(), $new_name);
        $sut->setName( $new_name);
        $this->assertEquals( $sut->getName(), $new_name);

        $this->assertNotEquals( $sut->__toString(), $expected_name);
    }

    /**
     * @dataProvider provideManufacturerAndName
     */
    public function testManufacturerInterceptors( $manufacturer, $name, $asa, $expected_name )
    {
        $sut = new Film;
        $sut->setManufacturer( $manufacturer );
        $sut->setName( $name );

        $new_manufacturer = "foo";
        $this->assertNotEquals( $sut->getManufacturer(), $new_manufacturer);
        $sut->setManufacturer( $new_manufacturer);
        $this->assertEquals( $sut->getManufacturer(), $new_manufacturer);

        $this->assertNotEquals( $sut->__toString(), $expected_name);
    }

    /**
     * @dataProvider provideManufacturerAndName
     */
    public function testAsaInterceptors( $manufacturer, $name, $asa, $expected_name )
    {
        $sut = new Film;
        $sut->setManufacturer( $manufacturer );
        $sut->setName( $name );

        $new_asa = 1;
        $this->assertNotEquals( $sut->getAsa(), $new_asa);
        $sut->setAsa( $new_asa);
        $this->assertEquals( $sut->getAsa(), $new_asa);

        $this->assertNotEquals( $sut->__toString(), $expected_name);
    }


    public function provideManufacturerAndName()
    {
        return array(
            array( "Ilford", "HP5+", 400, "Ilford HP5+ 400" ),
            [ "Ilford", null, null, "Ilford" ],
            [ null, "FP4+", 125, "FP4+ 125" ],
            [ "Kentmere", null, 400, "Kentmere 400" ]
        );
    }
}
