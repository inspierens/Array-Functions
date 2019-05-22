<?php
//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность
// (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не
// корректный - он не должен меняться).

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age)
    {
        if (($age < 1) or ($age > 100)) {
            return 0;
        } else {
            return $age;
        }
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
