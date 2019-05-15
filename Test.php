<?php
namespace oop;

use PHPUnit\Framework\TestCase;
require __DIR__ ."/../oop/Fridge.php";

class Test extends TestCase
{
    public function test_this_should_be_the_type_of_drink()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkDrinkType('kutu kola'));
    }

    public function test_this_should_not_be_the_type_of_drink()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->checkDrinkType('kutu fanta'));
    }

}