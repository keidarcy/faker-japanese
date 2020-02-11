# faker-japanese

Japanese related data generate using fzaninotto/Faker

## Installation

To install, use composer:

```bash
composer require xyyo/faker-japanese
```

## Usage

```php
$faker = Faker\Factory::create('ja_JP');
$faker->addProvider(new Faker\Provider\Japanese($faker));

// generate random fake kanji
echo $faker->kanji; // 興
// genertate random fake word
echo $faker->word; // 雨戸
// genertate random fake idiom
echo $faker->idiom; //天衣無縫
// genertate random fake phone
echo $faker->phone; //09-8538-0616
// genertate random fake pokemon
echo $faker->pokemon; //09-8538-0616
// genertate random fake bank
echo $faker->bank; //大垣共立銀行
// genertate random fake color
echo $faker->color; //青
// genertate random fake company
echo $faker->company; //株式会社斉藤電子部品
// genertate random fake address
echo $faker->address; //359-7612  三重県吉本市東区三宅町加納6-2-3
// genertate random fake postcode
echo $faker->postcode; //906-8846
// genertate random fake prefecture
echo $faker->prefecture; //埼玉県
// genertate random fake country
echo $faker->country; //中央アフリカ共和国
// genertate random fake RealText
echo $faker->RealText; //なげた両手りょうはもうすっかりしてから」その譜ふを聞いたのですよ。ぐあとはね、ずいぶんうしろそうか」「お母さんの旅人たちも一言ひとりは眼めをさがするはずが寄よった小さな鳥どりいろいの火だなんでした。するはずうっと川と、もうはみんなに言いっしょうが僕ぼくもそのいっぱいのりんごをむいたといをすました。ジョバンニはまったります」ジョバンニはまた
// genertate random fake userName
echo $faker->userName; //yoko.watanabe
// genertate random fake domainName
echo $faker->domainName; //yamada.jp
// genertate random fake name
echo $faker->name(); //斉藤 拓真
// genertate random fake firstName
echo $faker->firstName(); //里佳
// genertate random fake lastName
echo $faker->lastName(); //宮沢
```

## License

Faker Japanese is released under the MIT License. See the bundled LICENSE file for details.

[LICENSE](https://github.com/xyyolab/faker-japanese/blob/master/LICENSE)

## Reporting an issue or a feature request

Fork it, send a PR. Issues and feature requests are tracked in the
[GitHub issue tracker](https://github.com/xyyolab/faker-japanese/issues).
