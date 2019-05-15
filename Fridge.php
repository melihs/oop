<?php
namespace oop;

class Fridge{
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
     * @return float|int|string
     */
    public function checkDrinkType($drink)
    {
        if($drink !== self::drink_type){
            return "Sadece 'kutu kola' alabilirsiniz";
        }else {
            return $this->capacity;
        }
    }

}

