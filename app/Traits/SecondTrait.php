<?php

namespace testTask\app\Traits;

trait SecondTrait
{
    private string|float $position='';
    public function sayWorld():void{
        echo " World";
    }
    public function setPosition($salary):void{
        $this->position=$salary;
    }
    public function getPosition():string|float{
        return $this->position;
    }
    public function boot():void{
        echo 'Загрузка...'. ' SecondTrait';
    }
}