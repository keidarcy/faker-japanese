<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Japanese;
use PHPUnit\Framework\TestCase;

class JapaneseTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = Factory::create();
        $faker->addProvider(new Japanese($faker));
        $this->faker = $faker;
    }

    public function testKanji()
    {
        $this->assertNotEmpty($this->faker->kanji);
    }

    public function testWord()
    {
        $this->assertNotEmpty($this->faker->word);
    }

    public function testIdiom()
    {
        $this->assertNotEmpty($this->faker->idiom);
    }

    public function testPhone()
    {
        $this->assertNotEmpty($this->faker->phone);
    }

    public function testPokemon()
    {
        $this->assertNotEmpty($this->faker->pokemon);
    }

    public function testBank()
    {
        $this->assertNotEmpty($this->faker->Bank);
    }

    public function testColor()
    {
        $this->assertNotEmpty($this->faker->color);
    }

    public function testCompany()
    {
        $this->assertNotEmpty($this->faker->company);
    }

    public function testAddress()
    {
        $this->assertNotEmpty($this->faker->address);
    }

    public function testPostcode()
    {
        $this->assertNotEmpty($this->faker->postcode);
    }

    public function testPrefecture()
    {
        $this->assertNotEmpty($this->faker->prefecture);
    }

    public function testCountry()
    {
        $this->assertNotEmpty($this->faker->country);
    }

    public function testRealText()
    {
        $this->assertNotEmpty($this->faker->RealText);
    }

    public function testUserName()
    {
        $this->assertNotEmpty($this->faker->userName);
    }

    public function testDomainName()
    {
        $this->assertNotEmpty($this->faker->domainName);
    }

    public function testName()
    {
        $this->assertNotEmpty($this->faker->name);
    }

    public function testFirstName()
    {
        $this->assertNotEmpty($this->faker->firstName);
    }

    public function testLastName()
    {
        $this->assertNotEmpty($this->faker->lastName);
    }
}
