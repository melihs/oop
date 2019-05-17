<?php
namespace oop;

use PHPUnit\Framework\TestCase;
require __DIR__ ."/../oop/Fridge.php";

class Test extends TestCase
{
    public function test_this_should_be_the_type_of_drink()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkDrinkType('kutu kola',33));
    }

    public function test_this_should_not_be_the_type_of_drink()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkDrinkType('kutu fanta',33));
    }

    public function test_this_should_be_limit_20()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece('33',20));
    }
    public function test_this_should_not_be_quantity_33()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece('blabla',20));
    }
    public function test_this_should_not_be_limit_20()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece('33',5545455));
    }
    public function test_this_should_be_limit_10()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece('50',10));
    }
    public function test_this_should_not_be_quantity_50()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece('blabla',20));
    }
    public function test_this_should_not_be_limit_10()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkPiece('50',35654652));
    }


    public function test_should_take_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->getDrink('kutu kola','33',20,1));
    }
//
    public function test_should_not_take_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->getDrink('kutu kola','33',20,2));
    }

    public function test_should_set_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->setDrink('kutu kola','50',10,1));
    }

    public function test_should_not_set_a_drink_from_the_fridge()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->setDrink('kutu kola','50',10,2));
    }

    public function test_this_should_be_check_capacity_with_getDrink_method()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkCapacity(50,'getDrink'));
    }

    public function test_this_should_not_be_check_capacity_with_getDrink_method()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkCapacity(50,'blabla'));
    }

    public function test_this_should_be_check_capacity_with_setDrink_method()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkCapacity(50,'setDrink'));
    }

    public function test_this_should_not_be_check_capacity_with_setDrink_method()
    {
        $fridge = new Fridge();
        $this->assertTrue(true,$fridge->checkCapacity(50,'blabla'));
    }
}