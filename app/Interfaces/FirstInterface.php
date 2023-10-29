<?php

namespace testTask\app\Interfaces;

interface FirstInterface
{
    public function __construct(string $name, string|float $salary);
    public function getName():string ;
    public function getSalary():string|float ;
    public function getLang():string;
    public function addLang($lang):void;
}