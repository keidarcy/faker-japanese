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

## Usage(all examples)

```php

<?php
// psr-4 autoload class
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$faker->addProvider(new Faker\Provider\Japanese($faker));

// customized
// text related
var_dump($faker->kanji); // 純
var_dump($faker->word); // 基礎
var_dump($faker->idiom); // 阿鼻叫喚
var_dump($faker->pokemon); // ゼニガメ
var_dump($faker->bank); // 宮崎銀行
var_dump($faker->color); // 深緑
var_dump($faker->company); // 株式会社小泉輸送用機械器具

// internet related
var_dump($faker->url); // www.akemi.jp
var_dump($faker->email); // matsumoto@yahoo.co.jp
var_dump($faker->userFirstName); // akemi
var_dump($faker->userLastName); // ishida
var_dump($faker->userName); // kyosuke sasaki

// implement from original source code
// address related
var_dump($faker->postcode); // 491-1292
var_dump($faker->country); // ブータン
var_dump($faker->prefecture); // 滋賀県
var_dump($faker->ward); // 西区
var_dump($faker->city); // 中村市
var_dump($faker->streetAddress); // 大垣町9-1-6
var_dump($faker->secondaryAddress); // 小林コーポ105号
var_dump($faker->address); // 茨城県笹田市西区江古田町10-6-6宇野コーポ110号
var_dump($faker->addressWithCode); // 484-5349  熊本県青山市西区江古田町4-7-8 西之園ハイツ105号

// person related
var_dump($faker->lastName); // 坂本
var_dump($faker->firstName('male')); // 拓真
var_dump($faker->firstName('female')); // 陽子
var_dump($faker->name('male')); // 宮沢 智也
var_dump($faker->name('female')); // 西之園 結衣
var_dump($faker->lastKanaName); // カノウ
var_dump($faker->firstKanaName('male')); // マナブ
var_dump($faker->firstKanaName('female')); // カナ
var_dump($faker->kanaName('male')); // ヤマダ ヒロシ
var_dump($faker->kanaName('female')); // タナカ アケミ

var_dump($faker->phone); // 014-204-8044
var_dump($faker->domainName); // yamada.info
var_dump($faker->realText); // このぼんやりと白い銀河ぎんがを大きないい望遠鏡ぼうえんきょうで見ますと、もうたくさんの小さな星に見えるのです。
```

## to do

- [ ] send pr to orginal package.
- [ ] add Laravel usage.

## License

Faker Japanese is released under the MIT License. See the bundled LICENSE file for details.

[LICENSE](https://github.com/xyyolab/faker-japanese/blob/master/LICENSE)

## Reporting an issue or a feature request

Fork it, send a PR. Issues and feature requests are tracked in the
[GitHub issue tracker](https://github.com/xyyolab/faker-japanese/issues).
