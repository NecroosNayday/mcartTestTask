<?php

namespace testTask\app\Interfaces;

interface SecondInterface
{
    public function getName();
    public function getStatus();
    public function getPosition();
    public function setPosition($position);
}