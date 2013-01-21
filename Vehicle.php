<?php

/**
 * Abstract class to represent vehicle
 */
abstract class Vehicle
{
    /**
     * Number of doors
     * @var int
     */
    protected $_numberOfDoors;

    /**
     * Return the number of doors
     * @return int
     */
    abstract public function getNumberOfDoors();
    
    /**
     * Model year
     * @var int
     */
    public $year;
    
    /**
     * Number of doors
     * @var int
     */
    public $doors;
    
    /**
     * Return the year
     * @return int
     */
    public function getYear(){
        return $this->year;
    }
    
     /**
     * Set the year
     * @var int
     */
    public function setYear($y){
        $this->year = $y;
    }
    

}

?>
