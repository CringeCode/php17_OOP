<?php
abstract class Vehicle
{
    public function beep()
    {
        echo 'beep';

    }
    public function drive()
    {
        echo "едем";
    }
    abstract public function color();
}
class Car extends Vehicle
{
    public function azot()
    {
        echo "закись азота";
    }
    public function color()
    {
        echo "зеленый";
    }
}
$car = new Car;
class Buldoser extends Vehicle
{
    public function kovsh()
    {
        echo "управление ковшом";
    }
    public function color()
    {
        echo "красный";
    }
}
$buldoser = new Buldoser;
$buldoser->color();
