<?php 

/**
 * Product calss
 */
class Product
{
    public $name;
    protected $desc;
    protected $price;
    protected $qty;

    function __construct($name, $desc, $price, $qty)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->qty = $qty;
    }
}

?>