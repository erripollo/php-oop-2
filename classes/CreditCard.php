<?php 

class CreditCard
{
    protected $number;
    protected $expDate;
    protected $ccv;

    public function __construct($number, $expDate, $ccv)
    {
        $this->number = $number;
        $this->expDate = $expDate;
        $this->ccv = $ccv;

    }
}

?>