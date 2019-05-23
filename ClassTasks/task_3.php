<?php
//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность
// (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не
// корректный - он не должен меняться).

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
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
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

    /**
     * @param int $age
     *
     * @return int
     */
    private function checkAge(int $age) : int
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
