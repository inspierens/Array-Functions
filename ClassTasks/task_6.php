<?php
// 6 Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод
// должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

/**
 * Class User
 */
class User
{
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $age;

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
}

/**
 * Class Worker
 */
class Worker extends User
{
    /**
     * @var
     */
    private $salary;

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

/**
 * Class Driver
 */
class Driver extends Worker
{
    /**
     * @var
     */
    private $experience;
    /**
     * @var
     */
    private $category;

    /**
     * @param int $experience
     */
    public function setExperience(int $experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return int
     */
    public function getExperience() : int
    {
        return $this->experience;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }

    /**
     *
     */
    public function showAll()
    {
        echo parent::getName() . PHP_EOL;
        echo parent::getAge() . PHP_EOL;
        echo parent::getSalary() . PHP_EOL;
        echo $this->getExperience() . PHP_EOL;
        echo $this->getCategory() . PHP_EOL;
    }
}

$obj1 = new Driver();
$obj1->setName('Иван');
$obj1->setAge(25);
$obj1->setSalary(1000);
$obj1->setExperience(2);
$obj1->setCategory('A');
$obj1->showAll();
