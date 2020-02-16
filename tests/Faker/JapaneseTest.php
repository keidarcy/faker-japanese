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

    public function testPokemon()
    {
        $this->assertNotEmpty($this->faker->pokemon);
    }

    public function testBank()
    {
        $this->assertNotEmpty($this->faker->bank);
    }

    public function testColor()
    {
        $this->assertNotEmpty($this->faker->color);
    }

    public function testCompany()
    {
        $this->assertNotEmpty($this->faker->company);
    }

    public function testUrl()
    {
        $this->assertNotEmpty($this->faker->url);
    }

    public function testEmail()
    {
        $this->assertNotEmpty($this->faker->email);
    }

    public function testUserFirstName()
    {
        $this->assertNotEmpty($this->faker->userFirstName);
    }

    public function testUserLastName()
    {
        $this->assertNotEmpty($this->faker->userLastName);
    }

    public function testUserName()
    {
        $this->assertNotEmpty($this->faker->userName);
    }

    public function testPostcode()
    {
        $this->assertNotEmpty($this->faker->postcode);
    }

    public function testCountry()
    {
        $this->assertNotEmpty($this->faker->country);
    }

    public function testPrefecture()
    {
        $this->assertNotEmpty($this->faker->prefecture);
    }

    public function testWard()
    {
        $this->assertNotEmpty($this->faker->ward);
    }

    public function testCity()
    {
        $this->assertNotEmpty($this->faker->city);
    }

    public function testStreetAddress()
    {
        $this->assertNotEmpty($this->faker->streetAddress);
    }

    public function testSecondaryAddress()
    {
        $this->assertNotEmpty($this->faker->secondaryAddress);
    }

    public function testAddress()
    {
        $this->assertNotEmpty($this->faker->address);
    }

    public function testAddressWithCode()
    {
        $this->assertNotEmpty($this->faker->addressWithCode);
    }

    public function testPhone()
    {
        $this->assertNotEmpty($this->faker->phone);
    }

    public function testDomainName()
    {
        $this->assertNotEmpty($this->faker->domainName);
    }

    public function testLastName()
    {
        $this->assertNotEmpty($this->faker->lastName);
    }

    public function testFirstName()
    {
        $this->assertNotEmpty($this->faker->firstName);
    }

    public function testName()
    {
        $this->assertNotEmpty($this->faker->name);
    }

    public function testLastKanaName()
    {
        $this->assertNotEmpty($this->faker->lastKanaName);
    }

    public function testFirstKanaName()
    {
        $this->assertNotEmpty($this->faker->firstKanaName);
    }

    public function testKanaName()
    {
        $this->assertNotEmpty($this->faker->kanaName);
    }

    public function testRealText()
    {
        $this->assertNotEmpty($this->faker->realText);
    }
}
