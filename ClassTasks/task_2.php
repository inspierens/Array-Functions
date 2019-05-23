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
    /** @var */
    private $name;
    /** @var */
    private $age;
    /** @var */
    private $salary;

    /**
     * @param string $name
     *
     * @return Worker
     */
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
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
     *
     * @return Worker
     */
    public function setAge(int $age) : self
    {
        $this->age = $age;

        return $this;
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
     *
     * @return Worker
     */
    public function setSalary(int $salary) : self
    {
        $this->salary = $salary;

        return $this;
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
$obj1->setName('Иван')->setAge(25)->setSalary(1000);
$obj2->setName('Вася')->setAge(26)->setSalary(2000);

echo $obj1->getSalary() + $obj2->getSalary() . PHP_EOL;
echo $obj1->getAge() + $obj2->getAge();
