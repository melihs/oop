<?php
namespace oop;

class Fridge
{
    public $fridge_door = ['Dolap kapısı açık.','Dolap kapısı kapalı.'];
    const shelf = 3;
    const shelf_capacity = 20;
    public $capacity = self::shelf * self::shelf_capacity;
    const drink_type = 'kutu kola';
    private $getset_drink_limit;

    /**
     * Fridge constructor.
     */
    public function __construct()
    {
        $this->getset_drink_limit = 1;
    }

    /**
     * @param $drink
     *
     * @return |int|string
     */
    public function checkDrinkType($drink)
    {
        if($drink !== self::drink_type){
            return "Sadece 'kutu kola' alabilirsiniz";
        }else {
            return $this->capacity;
        }
    }

    /**
     * @param $capacity
     * @param $method
     *
     * @return string
     */
    public function checkCapacity($capacity,$method)
    {
        $random = array_rand($this->fridge_door,1);

        if($capacity === 0){
            return 'Dolap tamamen dolu.';
        }elseif($capacity > 0 && $capacity < 60 && $method == 'setDrink'){
            return $this->fridge_door[$random]. 'Dolap kısmen dolu.'.++$capacity. 'adet kola kaldı.';
        }elseif($capacity > 0 && $capacity <= 60 && method == 'getDrink'){
            return $this->fridge_door[$random]. 'Dolap kısmen dolu.'.++$capacity.'adet kola kaldı.';
        }elseif($capacity === 60){
            return 'Dolap tamamen dolu.';
        }else{
            return 'metod türü hatalı';
        }
    }

    /**
     * @param $drink
     * @param $total
     *
     * @return string
     */
    public function getDrink($drink,$total)
    {
        if($this->getset_drink_limit === $total){
            return $this->checkCapacity($this->checkDrinkType($drink),'getDrink');
        }
        return "Tek seferde sadece '1 kutu kola' alabilirsiniz";
    }

    /**
     * @param $drink
     * @param $total
     *
     * @return string
     */
    public function setDrink($drink,$total)
    {
        if($this->getset_drink_limit === $total){
            return $this->checkCapacity($this->checkDrinkType($drink),'setDrink');
        }
        return "Tek seferde sadece '1 kutu kola' koyabilirsiniz";
    }

}

