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

    public function test_this_should_be_limit_20_only_33cl()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece(20,null));
    }

    public function test_this_should_not_be_limit_10_only_33cl()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->checkPiece(121212121,null));
    }

    public function test_this_should_be_limit_10_only_50cl()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece(10,null));
    }

    public function test_this_should_not_be_limit_10_only_50cl()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->checkPiece(null,3434));
    }

    public function test_this_should_be_limit_20_mixed()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece(10,5));
    }


    public function test_this_should_not_be_limit_20_mixed()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->checkPiece(2235,5545455));
    }

    public function test_should_take_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->getDrink('kutu kola',25,null,1));
    }

    public function test_should_not_take_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->getDrink('kutu kola',33,20,2));
    }

    public function test_should_set_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->setDrink('kutu kola',3,1,10,1));
    }

    public function test_should_not_set_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertFalse(true,$fridge->setDrink('kutu kola',3,5,10,2));
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