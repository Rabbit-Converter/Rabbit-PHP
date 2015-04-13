#Rabbit

![Logo](https://raw.githubusercontent.com/saturngod/Rabbit/gh-pages/rabbit_100.png)

**Another Zawgyi <=> Unicode Converter**

## Composer Package of Rabbit

This is github repository for [Composer](https://packagist.org/) package. Source code are originally written by [Ko Saturngod](https://github.com/saturngod/Rabbit).

##Info

Zawgyi to Unicode has been written in [2011](https://github.com/saturngod/ZG2Uni_JS/commits/master). Now, unicode to zawgyi has been finished.

### Why another converter ?

When I was writting [ZG2uni](https://github.com/saturngod/ZG2Uni_JS/) , [Parabaik](https://github.com/ngwestar/parabaik) is not opensource. At that time, I need to use for [MYSTERY ZILLION](http://www.mysteryzillion.org) for converting the whole database to Unicode.

For Unicode to zawgyi , Parabaik is the GPL license and cannot use in iOS app and Android App. So, decided to write new one with **WTFPL license**.

> I cannot promise , it's correct 100% after converting.

> If you are not using in app or program and just for converting the text , please use [Parabaik](https://github.com/ngwestar/parabaik)

### Demo

- [Web](http://saturngod.github.io/Rabbit/)
- [Android](https://play.google.com/store/apps/details?id=com.comquas.rabbitzawgyiunicodeconverter)


## Usage

```php

Rabbit::zg2uni("သီဟိုဠ္မွ ဉာဏ္ႀကီးရွင္သည္ အာယုဝဍ္ဎနေဆးၫႊန္းစာကို ဇလြန္ေဈးေဘးဗာဒံပင္ထက္ အဓိ႒ာန္လ်က္ ဂဃနဏဖတ္ခဲ့သည္။");

Rabbit::uni2zg("သီဟိုဠ်မှ ဉာဏ်ကြီးရှင်သည် အာယုဝဍ်ဎနဆေးညွှန်းစာကို ဇလွန်ဈေးဘေးဗာဒံပင်ထက် အဓိဋ္ဌာန်လျက် ဂဃနဏဖတ်ခဲ့သည်။");

```