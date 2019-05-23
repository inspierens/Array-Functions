<?php
// Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы
// эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). Сделайте
// также public методы getName, getSalary.

//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

/**
 * Class Worker
 */
class Worker
{
    /** @var */
    private $name;
    /** @var */
    private $age;
    /** @var */
    private $salary;

    /**
     * @param string $name
     * @param int    $age
     * @param int    $salary
     */
    function __construct(string $name, int $age, int $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getSalary() : int
    {
        return $this->salary;
    }
}

$obj1 = new Worker('Дима', 25, 1000);

echo $obj1->getAge() * $obj1->getAge() . PHP_EOL;
echo $obj1->getSalary() * $obj1->getSalary();
