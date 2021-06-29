<?php 

/**
 * Product calss
 * @author Enrico <email@email.com>
 * @copyright 2021 Enrico
 */
class Product
{
    protected $name;
    protected $desc;
    protected $price;
    protected $instock;


    /**
     * Product Constructor
     *
     * @param string $name
     * @param string $desc
     * @param float $price
     * @param boolean $instock
     */
    function __construct(string $name, string $desc, float $price, bool $instock = false)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->instock = $instock;
    }
}

?>