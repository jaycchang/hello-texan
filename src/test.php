<?php
namespace HelloTexan;

require_once __DIR__ . '/../vendor/autoload.php';

use Stichoza\GoogleTranslate\TranslateClient;

$translateClient = new TranslateClient();

$hello = new Hello($translateClient);
$hello->say();
