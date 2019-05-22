<?php
// 6 Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод
// должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

class User
{
    protected $name;
    protected $age;

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
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Worker extends User
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class Driver extends Worker
{
    private $experience;
    private $category;

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

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
