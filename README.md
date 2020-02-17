# faker-japanese

English | [日本語](./README.ja_JP.md)

[![Build Status](https://travis-ci.com/xyyolab/faker-japanese.svg?branch=master)](https://travis-ci.com/xyyolab/faker-japanese)

Japanese related random data generate using [fzaninotto/Faker](https://github.com/fzaninotto/Faker).

- You don't need specify like `Faker\Factory::create('ja_JP')`
- I implement all logic with my provider.

## Installation

To install, use composer:

```bash
composer require xyyo/faker-japanese
```

## Usage

#### Basic usage anywhere

```php

<?php
// psr-4 autoload class
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$faker->addProvider(new Faker\Provider\Japanese($faker));

// text related
$faker->color => 薄橙
$faker->kanji => 悠
$faker->word => 給料
$faker->idiom => 画竜点睛
$faker->pokemon => スリーパー
$faker->realText => 大きな望遠鏡ぼうえんきょうで銀河ぎんがをよっく調しらべると銀河ぎんがはだいたい何でしょう。

// internet related
$faker->domainName => saito.org
$faker->url => www.hiroshi.com
$faker->email => hirokawa@yahoo.co.jp
$faker->userFirstName => osamu
$faker->userLastName => yamada
$faker->userName => yamaguchi chiyo

// address related
$faker->bank => 北九州銀行
$faker->postcode => 869-5565
$faker->country => 合衆国領有小離島
$faker->prefecture => 三重県
$faker->ward => 西区
$faker->city => 松本市
$faker->streetAddress => 西之園町3-7-3
$faker->secondaryAddress => 吉田コーポ104号
$faker->address => 佐賀県山口市南区中村町4-5-9
$faker->addressWithCode => 304-6851  奈良県田中市南区佐藤町5-4-3 若松ハイツ105号

// person related
$faker->phone => 00332-8-0234
$faker->company => 有限会社佐々木木材
$faker->lastName => 渡辺
$faker->firstName('male') => 太一
$faker->firstName('female') => 明美
$faker->name('male') => 松本 涼平
$faker->name('female') => 村山 春香
$faker->lastKanaName => ツダ
$faker->firstKanaName('male') => ヨウスケ
$faker->firstKanaName('female') => モモコ
$faker->kanaName('male') => ナカジマ ミツル
$faker->kanaName('female') => ナカムラ ハルカ
```

#### Laravel usage

```php
// UserFactory.php
$factory->define(User::class, function (Faker $faker) {
    // add this simple line here
    $faker->addProvider(new \Faker\Provider\Japanese($faker));
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
.....

```

##### We can check the difference in tinker !

```php

Psy Shell v0.9.12 (PHP 7.3.13 — cli) by Justin Hileman
>>> factory(App\User::class,2)->create()
=> Illuminate\Database\Eloquent\Collection {#3330
     all: [
       App\User {#3326
         name: "宮沢 直人",
         email: "satomi.xidao@example.org",
         email_verified_at: "2020-02-17 12:21:38",
         updated_at: "2020-02-17 12:21:38",
         created_at: "2020-02-17 12:21:38",
         id: 5,
       },
       App\User {#3335
         name: "大垣 智也",
         email: "tsubasa08@example.org",
         email_verified_at: "2020-02-17 12:21:38",
         updated_at: "2020-02-17 12:21:38",
         created_at: "2020-02-17 12:21:38",
         id: 7,
       },
     ],
   }

```

## to do

- [ ] send pr to orginal package.

## License

Faker Japanese is released under the MIT License. See the bundled LICENSE file for details.

[LICENSE](https://github.com/xyyolab/faker-japanese/blob/master/LICENSE)

## Reporting an issue or a feature request

Fork it, send a PR. Issues and feature requests are tracked in the
[GitHub issue tracker](https://github.com/xyyolab/faker-japanese/issues).
