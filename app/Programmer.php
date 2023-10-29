<?php

namespace testTask\app;

use testTask\app\Interfaces\FirstInterface;
use testTask\app\Interfaces\SecondInterface;

class Programmer extends Employee implements FirstInterface, SecondInterface
{
    private string $status = "Programmer";
    private string $lang='';
    private string $position;
    public function getStatus():string
    {
        return $this->status;
    }
    public function getName():string
    {
       return parent::getName().$this->getStatus();
    }
    public function addLang($lang): void
    {
       $this->lang=$lang;
    }
    public function getLang(): string
    {
        return $this->lang;
    }

    public function getPosition():string
    {
       return $this->position;
    }

    public function setPosition($position):void
    {
        $this->position=$position;
    }
}