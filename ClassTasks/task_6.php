<?php
// 6 Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод
// должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

/**
 * Class User
 */
class User
{
    /** @var */
    protected $name;
    /** @var */
    protected $age;

    /**
     * @param string $name
     *
     * @return User
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
     * @return User
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
}

/**
 * Class Worker
 */
class Worker extends User
{
    /** @var */
    private $salary;

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

/**
 * Class Driver
 */
class Driver extends Worker
{
    /** @var */
    private $experience;
    /** @var */
    private $category;

    /**
     * @param int $experience
     *
     * @return Driver
     */
    public function setExperience(int $experience) : self
    {
        $this->experience = $experience;

        return $this;
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
     *
     * @return Driver
     */
    public function setCategory(string $category) : self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
}

$obj1 = new Driver();
$obj1->setName('Иван')->setAge(25)->setSalary(1000);
$obj1->setExperience(2)->setCategory('A');
