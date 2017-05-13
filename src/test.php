<?php
namespace HelloTexan;

require_once __DIR__ . '/../vendor/autoload.php';

use Stichoza\GoogleTranslate\TranslateClient;

$hello = new Hello(new TranslateClient());

$hello->say();
