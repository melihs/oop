<?php
namespace oop;

class Fridge
{
    public $piece;
    public $piece_33cl;
    public $piece_50cl;
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
     *
     * @return string
     */
    public function checkDrinkType($drink)
    {
        if($drink !== $this->drink_type)
        {
            return "Sadece '33cl kutu kola','50cl kutu kola' veya 'karışık kutu kola' alabilirsiniz";
        }
        return $drink;
    }

    /**
     * @param  null  $piece_33cl
     * @param  null  $piece_50cl
     *
     * @return float|int
     */
    public function checkPiece($piece_33cl = null, $piece_50cl = null)
    {
        if(isset($piece_33cl) && $piece_33cl <= 20 && !isset($piece_50cl))
        {
            return $this->capacity = $this->shelf * $piece_33cl;
        }
        if(isset($piece_50cl) && $piece_50cl <= 10 && !isset($piece_33cl))
        {
            return $this->capacity = $this->shelf * $piece_50cl;
        }
        if(isset($piece_50cl) && isset($piece_33cl))
        {
            $this->piece = $piece_33cl + 2 * $piece_50cl;

            if($this->piece <= 20)
            {
                return $this->capacity = $this->shelf * ($piece_33cl + 2 * $piece_50cl);
            }
        }
        return 'raf kapasite aşımı';
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
        else {
            return "hatalı metod değeri";
        }
    }

    /**
     * @param $drink
     * @param $piece_33cl
     * @param $piece_50cl
     * @param $total
     *
     * @return string
     */
    public function getDrink($drink,$piece_33cl,$piece_50cl, $total)
    {
        if($this->getset_drink_limit === $total && $this->checkDrinkType($drink))
        {
            return $this->checkCapacity($this->checkPiece($piece_33cl,$piece_50cl),'getDrink');
        }
        return "Tek seferde sadece '1 kutu kola' alabilirsiniz";
    }

    /**
     * @param $drink
     * @param $piece_33cl
     * @param $piece_50cl
     * @param $total
     *
     * @return string
     */
    public function setDrink($drink,$piece_33cl,$piece_50cl,$total)
    {
        if($this->getset_drink_limit === $total && $this->checkDrinkType($drink))
        {
            return $this->checkCapacity($this->checkPiece($piece_33cl,$piece_50cl),'setDrink');
        }
        return "Tek seferde sadece '1 kutu kola' koyabilirsiniz";
    }

}

