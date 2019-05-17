<?php
namespace oop;

class Fridge
{
    public $piece;
    public $quantity;
    public $capacity;
    private $fridge_door;
    private $getset_drink_limit;
    private $shelf;
    private $drink_type;

    /**
     * Fridge constructor.
     */
    public function __construct()
    {
        $this->getset_drink_limit = 1;
        $this->shelf = 3;
        $this->drink_type = 'kutu kola';
        $this->fridge_door = ['Dolap kapısı açık.','Dolap kapısı kapalı.'];
    }

    /**
     * @param $drink
     * @param $quantity
     *
     * @return string
     */
    public function checkDrinkType($drink,$quantity)
    {
        if($drink !== $this->drink_type)
        {
            return "Sadece '33cl kutu kola' ,'50cl kutu kola' veya 'karışık kutu kola' alabilirsiniz";
        }
        else
        {
            return $quantity;
        }
    }

    /**
     * @param $piece
     * @param $error
     *
     * @return float|int
     */
    public function checkPiece($piece,$error)
    {
        $this->piece = $piece;

        if($this->piece <= 20 && $this->piece >= 10)
        {
            return $this->capacity = $this->shelf * $this->piece;
        }
        else
        {
            return $error;
        }
    }

    public function checkShelf($quantity,$piece)
    {
        if($quantity == 33)
        {
          return  $this->checkPiece($piece,'Raflar 33 cl kutu koladan en fazla 20 adet alabilir');
        }
        elseif($quantity == 50)
        {
           return $this->checkPiece($piece,'Raflar 50 cl kutu koladan en fazla 10 adet alabilir');
        }
        elseif($quantity == karışık)
        {
            //bitmedi
        }

    }

    /**
     * @param $capacity
     * @param $method
     *
     * @return string
     */
    public function checkCapacity($capacity, $method)
    {
        $random = array_rand($this->fridge_door, 1);

        if ($capacity === 0)
        {
            return "Dolap tamamen dolu.";
        }
        elseif ($capacity > 0 && $capacity < 60 && $method == 'setDrink')
        {
            return $this->fridge_door[$random]." Dolap kısmen dolu.".++$capacity.' adet kola kaldı.';
        }
        elseif ($capacity > 0 && $capacity <= 60 && $method == 'getDrink')
        {
            return $this->fridge_door[$random]." Dolap kısmen dolu.".--$capacity.' adet kola kaldı.';
        }
        elseif ($capacity === 60)
        {
            return 'tamamen dolu';
        }
        else
        {
            return "hatalı metod değeri";
        }
    }

    /**
     * @param $drink
     * @param $total
     *
     * @return string
     */
    public function getDrink($drink,$quantity,$piece,$total)
    {
        if($this->getset_drink_limit === $total)
        {
            return $this->checkCapacity($this->checkShelf(checkDrinkType($drink,$quantity),$piece),'getDrink');
        }
        return "Tek seferde sadece '1 kutu kola' alabilirsiniz";
    }

    /**
     * @param $drink
     * @param $total
     *
     * @return string
     */
    public function setDrink($drink,$quantity,$piece,$total)
    {
        if($this->getset_drink_limit === $total)
        {
            return $this->checkCapacity($this->checkShelf(checkDrinkType($drink,$quantity,$piece)),'setDrink');

        }
        return "Tek seferde sadece '1 kutu kola' koyabilirsiniz";
    }

}

