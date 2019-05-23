<?php

/**
 * Class Vehicle
 */
abstract class Vehicle
{
    /** @var */
    private static $maxSpeed;

    /**
     * @param string $model
     *
     * @return Vehicle
     */
    abstract public function setModel(string $model) : self;

    /**
     * @param int $speed
     *
     * @return Vehicle
     */
    abstract public function setSpeed(int $speed) : self;

    /**
     * @return string
     */
    abstract public function getName() : string;

    /**
     * @return string
     */
    abstract public function getModel() : string;

    /**
     * @return int
     */
    abstract public function getSpeed() : int;

    /**
     * @return Vehicle
     */
    protected function setMaxSpeed() : self
    {
        if (self::$maxSpeed < $this->getSpeed()) {
            self::$maxSpeed = $this->getSpeed();
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getDiffSpeed() : int
    {
        return self::$maxSpeed - $this->getSpeed();
    }

    /**
     * @return string
     */
    public function showVehicle() : string
    {
        return $this->getName() . PHP_EOL .
            $this->getModel() . PHP_EOL .
            'Max speed: ' . $this->getSpeed() . PHP_EOL . PHP_EOL;
    }
}

/**
 * Class Car
 */
class Car extends Vehicle
{
    /** @var */
    private $name;
    /** @var */
    private $speed;
    /** @var */
    private $model;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $model
     *
     * @return Vehicle
     */
    public function setModel(string $model) : Vehicle
    {
        $this->model = $model;

        return $this;
        // TODO: Implement setModel() method.
    }

    /**
     * @param int $speed
     *
     * @return Vehicle
     */
    public function setSpeed(int $speed) : Vehicle
    {
        $this->speed = $speed;
        parent::setMaxSpeed();

        return $this;
        // TODO: Implement setSpeed() method.
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return 'Marka: ' . $this->name;
        // TODO: Implement getName() method.
    }

    /**
     * @return string
     */
    public function getModel() : string
    {
        return 'Model: ' . $this->model;
        // TODO: Implement getModel() method.
    }

    /**
     * @return int
     */
    public function getSpeed() : int
    {
        return $this->speed;
        // TODO: Implement getSpeed() method.
    }
}

/**
 * Class Moto
 */
class Moto extends Vehicle
{
    /** @var */
    private $name;
    /** @var */
    private $speed;
    /** @var */
    private $model;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $model
     *
     * @return Vehicle
     */
    public function setModel(string $model) : Vehicle
    {
        $this->model = $model;

        return $this;
        // TODO: Implement setModel() method.
    }

    /**
     * @param int $speed
     *
     * @return Vehicle
     */
    public function setSpeed(int $speed) : Vehicle
    {
        $this->speed = $speed;
        parent::setMaxSpeed();

        return $this;
        // TODO: Implement setSpeed() method.
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return 'Marka: ' . $this->name;
        // TODO: Implement getName() method.
    }

    /**
     * @return string
     */
    public function getModel() : string
    {
        return 'Model: ' . $this->model;
        // TODO: Implement getModel() method.
    }

    /**
     * @return int
     */
    public function getSpeed() : int
    {
        return $this->speed;
        // TODO: Implement getSpeed() method.
    }
}

$moto1 = new Moto('Suzuki');
$moto1->setModel('GRX-750')->setSpeed(240);
$moto2 = new Moto('Yamaha');
$moto2->setModel('R1')->setSpeed(300);
$moto3 = new Moto('Honda');
$moto3->setModel('CBR125')->setSpeed(100);
$car1 = new Car('Audi');
$car1->setModel('TT')->setSpeed(180);
$car2 = new Car('VW');
$car2->setModel('Polo')->setSpeed(120);

echo $car2->showVehicle();

echo $moto1->getDiffSpeed(); //найдет разницу скорости мото1 и максимальной возможной
