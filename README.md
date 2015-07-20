# Rabbit-PHP

![Logo](https://avatars3.githubusercontent.com/u/11961573?v=3&s=100)

[![Build Status](https://travis-ci.org/Rabbit-Converter/Rabbit-PHP.svg?branch=master)](https://travis-ci.org/Rabbit-Converter/Rabbit-PHP)

**Another Zawgyi <=> Unicode Converter for composer packagist**

## About

Zawgyi to Unicode has been written in [2011](https://github.com/saturngod/ZG2Uni_JS/commits/master). Now, unicode to zawgyi has been finished.

## Motivation. Why another converter ?

When I was writting [ZG2uni](https://github.com/saturngod/ZG2Uni_JS/), [Parabaik](https://github.com/ngwestar/parabaik) was not opensource. At that time, I need to use for [MYSTERY ZILLION](http://www.mysteryzillion.org) for converting the whole database to Unicode.

For Unicode to Zawgyi, Parabaik is under the ~~GPL license and cannot use in iOS app and Android App~~ LGPL. So, I decided to write new one with **WTFPL license**. This library is under MIT License.

> I cannot promise , it's correct 100% after converting.

> If you are not using in app or program and just for converting the text , please use [Parabaik](https://github.com/ngwestar/parabaik)

## Installation

Install using composer:

```json
composer require "rabbit-converter/rabbit-php:dev-master"
```

## Usage

```php

Rabbit::zg2uni("သီဟိုဠ္မွ ဉာဏ္ႀကီးရွင္သည္ အာယုဝဍ္ဎနေဆးၫႊန္းစာကို ဇလြန္ေဈးေဘးဗာဒံပင္ထက္ အဓိ႒ာန္လ်က္ ဂဃနဏဖတ္ခဲ့သည္။");

Rabbit::uni2zg("သီဟိုဠ်မှ ဉာဏ်ကြီးရှင်သည် အာယုဝဍ်ဎနဆေးညွှန်းစာကို ဇလွန်ဈေးဘေးဗာဒံပင်ထက် အဓိဋ္ဌာန်လျက် ဂဃနဏဖတ်ခဲ့သည်။");

```

## Contributing

1. Fork it ( https://github.com/Rabbit-Converter/Rabbit-PHP )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request

## License

MIT
