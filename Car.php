<?php

/**
 * Class to represent Car
 */

class Car extends Vehicle {
    
     /**
     * Return honk
     * @return str
     */
    public function honk(){
        return 'honk honk';
    }
    
     /**
     * Return the number of doors
     * @return int
     */
    public function getNumberOfDoors(){
        return $this->doors;
    }
    
}
?>
