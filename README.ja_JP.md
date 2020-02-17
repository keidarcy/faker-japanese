# faker-japanese

[English](https://github.com/xyyolab/faker-japanese) | 日本語

[![Build Status](https://travis-ci.com/xyyolab/faker-japanese.svg?branch=master)](https://travis-ci.com/xyyolab/faker-japanese)

[fzaninotto/Faker](https://github.com/fzaninotto/Faker)に基づいて、日本語特定のランダムジェネレータです。
元々のパッケージは名前などがありますが、単語、漢字なども使いたいので、色々追加しました。

- 元々日本語特定用の`Faker\Factory::create('ja_JP')`は不要
- 全てのロジックは自分のプロバイダーに

## インストール

コンポーザー利用、インストール

```bash
composer require xyyo/faker-japanese
```

## 使い方

#### 基本的な使い方

```php

<?php
// psr-4 autoload class
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$faker->addProvider(new Faker\Provider\Japanese($faker));

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

#### Laravel の Factory の使い方

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

##### tinker ですぐ確認しましょう !

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

``

## to do

- [ ] 元のパッケージに PR を出す。

## License

[LICENSE](https://github.com/xyyolab/faker-japanese/blob/master/LICENSE)

## Reporting an issue or a feature request

もし他のランダムジェネレータ追加して欲しい場合は、以下に出してください。

[GitHub issue tracker](https://github.com/xyyolab/faker-japanese/issues).
```
