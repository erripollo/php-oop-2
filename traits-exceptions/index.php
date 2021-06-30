<?php 

/* 
Descrizione:
- Inventate due classi a piacere una che estende l'altra.
- Ciascuna classe avrá un constuctor e un paio di metodi a piacere.
- Create un paio di traits da usare nella classe figlia.
- in una funzione gestite eventuali errori usando un exception
- create una struttura dati (array di oggetti) e usate un ciclo foreach per mostrare i dati a schermo (con html, non var_dump)
- invocate il metodo nel quale avete usato l'exception passado al metodo dei valori sbagliati
- usate il try/catch per gestire il la richiesta e mostrare all'utente un messaggio di errore.
*/


trait GetAttribute
{
    public function name()
    {
        return $this->name;
    }

    public function desc()
    {
        return $this->desc;
    }

    public function price()
    {
        return $this->price;
    }

    public function type()
    {
        return $this->type;
    }
    
    public function resolution()
    {
        return $this->resolution;
    }

    public function sensor()
    {
        return $this->sensor;
    }
   
}


trait Stock
{
    public function stock($instock)
    {
        if ($instock > 0) {
            'Product in stock';
        }
        elseif (!is_int($instock)) {
            throw new Exception('Is not a number');
        }
        else {
            'Product out of stock';
        }
    }
}



/**
 * Product class
 * @author Enrico <email@email.com>
 * @copyright 2021 Enrico
 */
class Product
{
    protected $name;
    protected $desc;
    protected $price;
    protected $instock;

    function __construct(strin $name, string $desc, float $price, int $instock)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
    }

}


/**
 * DigitalCamera class
 * @author Enrico <email@email.com>
 * @copyright 2021 Enrico
 */
class DigitalCamera extends Product
{

    use GetAttribute, Stock;

    protected $type;  
    protected $resolution;
    protected $sensor;

    function __construct(strin $name, string $desc, float $price, int $instock, string $type, int $resolution, string $sensor)
    {
        parent::__construct($name, $desc, $price, $instock);
        $this->type = $type;
        $this->resolution = $resolution;
        $this->sensor = $sensor;

    }
}






?>
Lorem, ipsum dolor.