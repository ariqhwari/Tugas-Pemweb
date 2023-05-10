<?php
require_once('product.php');

class CDRack extends Product
{
    private $capacity;
    private $model;

    public function __construct($name, $price, $discount, $capacity, $model)
    {
        parent::__construct($name, $price, $discount);
        $this->capacity = $capacity;
        $this->model = $model;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getPrice()
    {
        return $this->price + ($this->price * 0.15);
    }

    public function FinalPrice()
    {
        $finalprice = $this->getPrice() - ($this->getPrice() * $this->getDiscount());
        return $finalprice;
    }
}