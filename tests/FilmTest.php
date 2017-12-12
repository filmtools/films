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
    public function testSimpleInstantiation( $manufacturer, $name, $asa )
    {
        $sut = new Film( $manufacturer, $name, $asa);
        $this->assertInstanceOf( FilmInterface::class, $sut );
        $this->assertNotEmpty( (string) $sut );
    }

    /**
     * @dataProvider provideManufacturerAndName
     */
    public function testNameInterceptors( $manufacturer, $name, $asa )
    {
        $sut = new Film( $manufacturer, $name, $asa);
        $new_name = "foo";
        $this->assertNotEquals( $sut->getName(), $new_name);
        $sut->setName( $new_name);
        $this->assertEquals( $sut->getName(), $new_name);
    }

    /**
     * @dataProvider provideManufacturerAndName
     */
    public function testManufacturerInterceptors( $manufacturer, $name, $asa )
    {
        $sut = new Film( $manufacturer, $name);
        $new_manufacturer = "foo";
        $this->assertNotEquals( $sut->getManufacturer(), $new_manufacturer);
        $sut->setManufacturer( $new_manufacturer);
        $this->assertEquals( $sut->getManufacturer(), $new_manufacturer);
    }

    /**
     * @dataProvider provideManufacturerAndName
     */
    public function testAsaInterceptors( $manufacturer, $name, $asa )
    {
        $sut = new Film( $manufacturer, $name);
        $new_asa = 1;
        $this->assertNotEquals( $sut->getAsa(), $new_asa);
        $sut->setAsa( $new_asa);
        $this->assertEquals( $sut->getAsa(), $new_asa);
    }


    public function provideManufacturerAndName()
    {
        return array(
            [ "Ilford", "HP5+", 400],
            [ "Ilford", null, null ],
            [ null, "FP4+", 125 ]
        );
    }
}
