<?php
//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и
// следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

/**
 * Class Worker
 */
class Worker
{
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $age;
    /**
     * @var
     */
    private $salary;

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return int
     */
    public function getSalary() : int
    {
        return $this->salary;
    }
}

$obj1 = new Worker();
$obj2 = new Worker();
$obj1->setName('Иван');
$obj2->setName('Вася');
$obj1->setAge(25);
$obj2->setAge(26);
$obj1->setSalary(1000);
$obj2->setSalary(2000);

echo $obj1->getSalary() + $obj2->getSalary() . PHP_EOL;
echo $obj1->getAge() + $obj2->getAge();
