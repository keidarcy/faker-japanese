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

## 使い方(全ての例)

```php

<?php
// psr-4 クラスのオートロード
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$faker->addProvider(new Faker\Provider\Japanese($faker));

// カスタマイズの項目
// テキスト関連
var_dump($faker->kanji); // 純
var_dump($faker->word); // 基礎
var_dump($faker->idiom); // 阿鼻叫喚
var_dump($faker->pokemon); // ゼニガメ
var_dump($faker->bank); // 宮崎銀行
var_dump($faker->color); // 深緑
var_dump($faker->company); // 株式会社小泉輸送用機械器具

// インターネット関連
var_dump($faker->url); // www.akemi.jp
var_dump($faker->email); // matsumoto@yahoo.co.jp
var_dump($faker->userFirstName); // akemi
var_dump($faker->userLastName); // ishida
var_dump($faker->userName); // kyosuke sasaki

// 元々のコードベースにある、移行した項目
// アドレス関連
var_dump($faker->postcode); // 491-1292
var_dump($faker->country); // ブータン
var_dump($faker->prefecture); // 滋賀県
var_dump($faker->ward); // 西区
var_dump($faker->city); // 中村市
var_dump($faker->streetAddress); // 大垣町9-1-6
var_dump($faker->secondaryAddress); // 小林コーポ105号
var_dump($faker->address); // 茨城県笹田市西区江古田町10-6-6宇野コーポ110号
var_dump($faker->addressWithCode); // 484-5349  熊本県青山市西区江古田町4-7-8 西之園ハイツ105号

// 名前関連
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

- [ ] 元のパッケージに PR を出す。
- [ ] Laravel の使い方の例を出す。

## License

[LICENSE](https://github.com/xyyolab/faker-japanese/blob/master/LICENSE)

## Reporting an issue or a feature request

もし他に追加して欲しいリストがあれば、以下に出してください。

[GitHub issue tracker](https://github.com/xyyolab/faker-japanese/issues).
