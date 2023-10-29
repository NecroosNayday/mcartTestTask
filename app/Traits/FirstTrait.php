<?php

namespace testTask\app\Traits;

trait FirstTrait
{
    public function sayHello():void{
        echo "Hello";
    }
    public function setStatus($status):void{
        $this->status=$status;
    }
    public function boot():void{
        echo 'Загрузка...'. ' FirstTrait';
    }
}