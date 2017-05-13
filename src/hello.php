<?php
namespace src;
require_once __DIR__ . '/../vendor/autoload.php';

use Stichoza\GoogleTranslate\TranslateClient;

$tr = new TranslateClient(); // Default is from 'auto' to 'en'
$tr->setSource('en'); // Translate from English
$tr->setTarget('es'); // Translate to Spanish

echo $tr->translate('Hello Texan!');
echo "\n";
