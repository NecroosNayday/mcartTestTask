<?php

namespace testTask\app;

use testTask\app\Traits\FirstTrait;
use testTask\app\Traits\SecondTrait;

class Manager extends Employee
{
    use FirstTrait,SecondTrait { //Разрешение конфликта при одинаковом названии метода у унаследованных трейтов
        FirstTrait::boot insteadof SecondTrait;
    }
    private string $status = "Manager";
    private string $lang='';
    public function getStatus():string
    {
        return $this->status;
    }
    public function bootSchedule():void
    {
        $this->boot();
    }
}