<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */

class modifier
{   
    // properties
    public $name;

    //  static method
    public static function static()
    {
        echo "\nMethot static";
    }
    // mathot non static
    public function setNonstatic($address)
    {
        $this->address=$address;
    }
    
    public function getNonstatic()
    {
        return $this->address;
    }
}

$data=new modifier();

$data::static();

$data->setNonstatic("\nMethot non static");

echo $data->getNonstatic();
