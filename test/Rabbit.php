<?php

require __DIR__.'/../vendor/autoload.php';

$newline = (php_sapi_name() === 'cli') ? "\n\n" : "</br>";

echo "Convert zawgyi to unicode";
echo $newline;
echo Rabbit::zg2uni("သီဟိုဠ္မွ ဉာဏ္ႀကီးရွင္သည္ အာယုဝဍ္ဎနေဆးၫႊန္းစာကို ဇလြန္ေဈးေဘးဗာဒံပင္ထက္ အဓိ႒ာန္လ်က္ ဂဃနဏဖတ္ခဲ့သည္။");
echo $newline;

echo "Convert unicode to zawgyi";
echo $newline;
echo Rabbit::uni2zg("သီဟိုဠ်မှ ဉာဏ်ကြီးရှင်သည် အာယုဝဍ်ဎနဆေးညွှန်းစာကို ဇလွန်ဈေးဘေးဗာဒံပင်ထက် အဓိဋ္ဌာန်လျက် ဂဃနဏဖတ်ခဲ့သည်။");
echo $newline;