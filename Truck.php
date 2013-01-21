<?php

/**
 * Class to represent Truck
 */

class Truck extends Vehicle {
    
     /**
     * Return honk
     * @return str
     */
    public function honk(){
        return '';
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
