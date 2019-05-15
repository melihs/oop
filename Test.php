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

    public function test_should_take_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->getDrink('kutu kola',1));
    }

    public function test_should_not_take_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->getDrink('kutu kola',2));
    }

    public function test_should_set_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->setDrink('kutu kola',1));
    }

    public function test_should_not_set_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->setDrink('kutu kola',2));
    }

    public function test_this_should_be_check_capacity_with_getDrink_method()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkCapacity(50,'getDrink'));
    }

    public function test_this_should_not_be_check_capacity_with_getDrink_method()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->checkCapacity(50,'blabla'));
    }

    public function test_this_should_be_check_capacity_with_setDrink_method()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkCapacity(50,'setDrink'));
    }

    public function test_this_should_not_be_check_capacity_with_setDrink_method()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->checkCapacity(50,'blabla'));
    }
}