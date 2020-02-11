<?php

namespace Faker\Provider;

use Faker\Provider\ja_JP\Address;

class Japanese extends Base
{
    /**
     * @example '黄色'
     *
     * @return string
     */
    public function color()
    {
        return static::randomElement(JapaneseData::getColor());
    }

    /**
     * @example '株式会社鈴木木材'
     *
     * @return string
     */
    public function company()
    {
        return $this->generator->parse(static::randomElement(JapaneseData::getCompany()));
    }

    /**
     * @example '560-6240'
     *
     * @return string
     */
    public function postcode()
    {
        return Address::postcode1() . '-' . Address::postcode2();
    }

    /**
     * @example '株式会社'
     *
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(JapaneseData::getCompanyPrefix());
    }

    /**
     * @example '青田'
     *
     * @return string
     */
    public static function lastName()
    {
        return static::randomElement(JapaneseData::getLastName());
    }

    /**
     * @example '繊維'
     *
     * @return string
     */
    public static function industry()
    {
        return static::randomElement(JapaneseData::getIndustry());
    }

    /**
     * @example '555-123-546'
     *
     * @return string
     */
    public function phone()
    {
        return static::numerify($this->generator->parse(static::randomElement(JapaneseData::getPhoneNumber())));
    }

    /**
     * @example '器用'
     *
     * @return string
     */
    public static function word()
    {
        return (string) static::randomElement((JapaneseData::getWord()));
    }

    /**
     * @example '紆余曲折'
     *
     * @return string
     */
    public function idiom()
    {
        return (string) static::randomElement((JapaneseData::getIdiom()));
    }

    /**
     * @example '毅'
     *
     * @return string
     */
    public function kanji()
    {
        return (string) static::randomElement((JapaneseData::getKanji()));
    }

    /**
     * @example 'ラプラス'
     *
     * @return string
     */
    public function pokemon()
    {
        return (string) static::randomElement((JapaneseData::getPokemon()));
    }

    /**
     * @example 'みずほ銀行毅'
     *
     * @return string
     */
    public function bank()
    {
        return (string) static::randomElement((JapaneseData::getBank()));
    }

    /**
     * @example 'アフガニスタン'
     *
     * @return string
     */
    public function country()
    {
        return (string) static::randomElement((JapaneseData::getCountry()));
    }

    /**
      * @example '北海道'
      *
      * @return string
      */
    public function prefecture()
    {
        return (string) static::randomElement((JapaneseData::getPrefecture()));
    }
}
