# FilmTools · Films

**PHP classes for photo films**

[![Build Status](https://travis-ci.org/filmtools/films.svg?branch=master)](https://travis-ci.org/filmtools/films)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/filmtools/films/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/filmtools/films/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/filmtools/films/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/filmtools/films/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/filmtools/films/badges/build.png?b=master)](https://scrutinizer-ci.com/g/filmtools/films/build-status/master)

## Installation

```bash
$ composer require filmtools/films
```

## Usage

Class **FilmTools\Films\Film**  
extends **FilmTools\Films\FilmAbstract**  
implements **FilmTools\Films\FilmInterface**

```php
<?php
use FilmTools\Films\Film;

$film = new Film;
$film->setManufacturer( "Ilford" );
$film->setName( "HP5+" );
$film->setAsa( 400 );

// Outputs: Ilford HP5+ 400
echo $film;

$film->setName("");
$film->setManufacturer("Kentmere");

// Outputs: Kentmere 400
echo $film;

```

## Interfaces

### FilmInterface

```php
<?php
use FilmTools\Films\FilmInterface;

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
```

### FilmProviderInterface

```php
<?php
use FilmTools\Films\FilmProviderInterface;

/**
 * @return FilmInterface|null
 */
public function getFilm();
```


### FilmAwareInterface extends *FilmProviderInterface*

```php
<?php
use FilmTools\Films\FilmAwareInterface;

/**
 * @param FilmInterface|FilmProviderInterface $film
 */
public function setFilm( $film );
```

## Traits

### FilmProviderTrait

```php
<?php 
use FilmTools\Films\FilmProviderInterface;
use FilmTools\Films\FilmProviderTrait;

class MyClass implements FilmProviderInterface {
    use FilmProviderTrait;
}
```

### FilmAwareTrait extends *FilmProviderTrait*

```php
<?php 
use FilmTools\Films\FilmAwareInterface;
use FilmTools\Films\FilmAwareTrait;

class MyClass implements FilmAwareInterface {
    use FilmAwareTrait;
}
```

## Unit testing

```bash
$ vendor/bin/phpunit
```
