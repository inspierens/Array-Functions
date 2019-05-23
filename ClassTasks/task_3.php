<?php
//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность
// (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не
// корректный - он не должен меняться).

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
        if ($this->checkAge($age)) {
            $this->age = $age;
        }

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
$obj1->setName('Иван')->setAge(25)->setSalary(1000);
$obj2->setName('Вася')->setAge(26)->setSalary(2000);

echo $obj1->getSalary() + $obj2->getSalary() . PHP_EOL;
echo $obj1->getAge() + $obj2->getAge();
