<?php

namespace Faker\Provider;

//use Faker\Provider\ja_JP\Address;

class Japanese extends Base
{
    /**
     * @example '黄色'
     *
     * @return string
     */
    public function color()
    {
        return static::randomElement(JapaneseData::$color);
    }

    /**
     * @example '株式会社鈴木木材'
     *
     * @return string
     */
    public function company()
    {
        $format = static::randomElement(JapaneseData::$companyFormat);
        return $this->generator->parse($format);
    }

    /**
     * @example '560-6240'
     *
     * @return string
     */
    public function postcode()
    {
        return static::postcode1() . '-' . static::postcode2();
    }

    /**
     * @example '株式会社'
     *
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(JapaneseData::$companyPrefix);
    }

    /**
     * @example '繊維'
     *
     * @return string
     */
    public static function industry()
    {
        return static::randomElement(JapaneseData::$industry);
    }

    /**
     * @example '555-123-546'
     *
     * @return string
     */
    public function phone()
    {
        $format = static::randomElement(JapaneseData::$phoneNumber);
        return static::numerify($this->generator->parse($format));
    }

    /**
     * @example '器用'
     *
     * @return string
     */
    public static function word()
    {
        return static::randomElement((JapaneseData::$word));
    }

    /**
     * @example '紆余曲折'
     *
     * @return string
     */
    public function idiom()
    {
        return static::randomElement((JapaneseData::$idiom));
    }

    /**
     * @example '毅'
     *
     * @return string
     */
    public function kanji()
    {
        return static::randomElement((JapaneseData::$kanji));
    }

    /**
     * @example 'ラプラス'
     *
     * @return string
     */
    public function pokemon()
    {
        return static::randomElement((JapaneseData::$pokemon));
    }

    /**
     * @example 'みずほ銀行毅'
     *
     * @return string
     */
    public function bank()
    {
        return static::randomElement((JapaneseData::$bank));
    }

    /**
     * @example 'アフガニスタン'
     *
     * @return string
     */
    public function country()
    {
        return static::randomElement((JapaneseData::$country));
    }

    /**
      * @example '北海道'
      *
      * @return string
      */
    public function prefecture()
    {
        return static::randomElement((JapaneseData::$prefecture));
    }

    /**
     * @example 111
     */
    public static function postcode1()
    {
        return static::numberBetween(100, 999);
    }

    /**
     * @example 2222
     */
    public static function postcode2()
    {
        return static::numberBetween(1000, 9999);
    }

    /**
     * @example '北区'
     */
    public static function ward()
    {
        $ward = static::randomElement(JapaneseData::$ward);
        $suffix = static::randomElement(JapaneseData::$wardSuffix);

        return $ward . $suffix;
    }

    /**
     * 丁、番地、号
     *
     * @return int
     */
    public static function areaNumber()
    {
        return static::numberBetween(1, 10);
    }

    public static function buildingNumber()
    {
        return static::numberBetween(101, 110);
    }

    public function secondaryAddress()
    {
        $format = static::randomElement(JapaneseData::$secondaryAddressFormats);

        return $this->generator->parse($format);
    }

    public function address()
    {
        $format = static::randomElement(JapaneseData::$addressFormats);

        return $this->generator->parse($format);
    }

    public function city()
    {
        $format = static::randomElement(JapaneseData::$cityFormats);

        return $this->generator->parse($format);
    }

    public function addressWithCode()
    {
        $format = static::randomElement(JapaneseData::$addressWithCodeFormats);

        return $this->generator->parse($format);
    }

    public function citySuffix()
    {
        $format = static::randomElement(JapaneseData::$citySuffix);

        return $this->generator->parse($format);
    }

    public function wardSuffix()
    {
        $format = static::randomElement(JapaneseData::$wardSuffix);

        return $this->generator->parse($format);
    }

    public function streetSuffix()
    {
        $format = static::randomElement(JapaneseData::$streetSuffix);

        return $this->generator->parse($format);
    }

    public function streetAddress()
    {
        $format = static::randomElement(JapaneseData::$streetAddressFormats);

        return $this->generator->parse($format);
    }

    public function streetName()
    {
        $format = static::randomElement(JapaneseData::$streetNameFormats);

        return $this->generator->parse($format);
    }

    public function maleKanaName()
    {
        $format = static::randomElement(JapaneseData::$maleKanaNameFormats);
        return $this->generator->parse($format);
    }

    public function femaleKanaName()
    {
        $format = static::randomElement(JapaneseData::$femaleKanaNameFormats);
        return $this->generator->parse($format);
    }

    public function maleNameFormats()
    {
        $format = static::randomElement(JapaneseData::$maleNameFormats);
        return $this->generator->parse($format);
    }

    public function femaleName()
    {
        $format = static::randomElement(JapaneseData::$femaleNameFormats);
        return $this->generator->parse($format);
    }

    public function firstNameMale()
    {
        $format = static::randomElement(JapaneseData::$firstNameMale);
        return $this->generator->parse($format);
    }

    public function firstNameFemale()
    {
        $format = static::randomElement(JapaneseData::$firstNameFemale);
        return $this->generator->parse($format);
    }

    public function firstKanaNameMale()
    {
        $format = static::randomElement(JapaneseData::$firstKanaNameMale);
        return $this->generator->parse($format);
    }

    public function firstKanaNameFemale()
    {
        $format = static::randomElement(JapaneseData::$firstKanaNameFemale);
        return $this->generator->parse($format);
    }

    public function lastKanaName()
    {
        $format = static::randomElement(JapaneseData::$lastKanaName);
        return $this->generator->parse($format);
    }

    /**
     * @example '青田'
     *
     * @return string
     */
    public function lastName()
    {
        $format = static::randomElement(JapaneseData::$lastName);
        return $this->generator->parse($format);
    }

    public function kanaName($gender = null)
    {
        if ($gender === 'male') {
            $format = static::randomElement(JapaneseData::$maleKanaNameFormats);
        } elseif ($gender === 'female') {
            $format = static::randomElement(JapaneseData::$femaleKanaNameFormats);
        } else {
            $format = static::randomElement(array_merge(JapaneseData::$maleKanaNameFormats, JapaneseData::$femaleKanaNameFormats));
        }

        return $this->generator->parse($format);
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     * @return string
     * @example 'アキラ'
     */
    public function firstKanaName($gender = null)
    {
        if ($gender === 'male') {
            return static::firstKanaNameMale();
        } elseif ($gender === 'female') {
            return static::firstKanaNameFemale();
        }

        return $this->generator->parse(static::randomElement(JapaneseData::$firstKanaNameFormat));
    }

    public function firstName($gender = null)
    {
        if ($gender === 'male') {
            return static::firstNameMale();
        } elseif ($gender === 'female') {
            return static::firstNameFemale();
        }

        return $this->generator->parse(static::randomElement(JapaneseData::$firstKanaNameFormat));
    }

    public function name($gender = null)
    {
        if ($gender === 'male') {
            $format = static::randomElement(JapaneseData::$maleNameFormats);
        } elseif ($gender === 'female') {
            $format = static::randomElement(JapaneseData::$femaleNameFormats);
        } else {
            $format = static::randomElement(array_merge(JapaneseData::$maleNameFormats, JapaneseData::$femaleNameFormats));
        }

        return $this->generator->parse($format);
    }

    public function realText()
    {
        $format = static::randomElement(JapaneseData::$realText);
        return $this->generator->parse($format);
    }

    public static function lastNameAscii()
    {
        return static::randomelement(JapaneseData::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomelement(JapaneseData::$firstNameAscii);
    }

    /**
     * @example 'suzuki.taro'
     */
    public function userName()
    {
        $format = static::randomelement(JapaneseData::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'yamada.jp'
     */
    public function domainName()
    {
        return static::randomelement(JapaneseData::$lastNameAscii) . '.' . static::randomelement(JapaneseData::$tld);
    }

    public function tld()
    {
        $format = static::randomelement(JapaneseData::$tld);

        return $this->generator->parse($format);
    }

    public function userFirstName()
    {
        $format = static::randomelement(JapaneseData::$firstNameAscii);

        return $this->generator->parse($format);
    }

    public function userLastName()
    {
        $format = static::randomelement(JapaneseData::$lastNameAscii);

        return $this->generator->parse($format);
    }

    public function safeEmailTld()
    {
        $format = static::randomelement(JapaneseData::$safeEmailTld);
        return $this->generator->parse($format);
    }

    public function freeEmailDomain()
    {
        $format = static::randomelement(JapaneseData::$freeEmailDomain);
        return $this->generator->parse($format);
    }

    public function url()
    {
        $format = static::randomelement(JapaneseData::$url);
        return $this->generator->parse($format);
    }

    public function email()
    {
        $format = static::randomelement(JapaneseData::$email);

        return $this->generator->parse($format);
    }
}
