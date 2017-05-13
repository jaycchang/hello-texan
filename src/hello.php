<?php
namespace HelloTexan;

require_once __DIR__ . '/../vendor/autoload.php';

use Stichoza\GoogleTranslate\TranslateClient;

class Hello
{
    protected $translateClient;

    public function __construct(TranslateClient $translateClient)
    {
        $this->translateClient = $translateClient;
    }

    public function say()
    {
        $this->translateClient->setSource('en');
        $this->translateClient->setTarget('es');

        $output = $this->translateClient->translate('Hello');

        echo "$output\n";
    }
}
