<?php
// Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName,
// getName, setAge, getAge.

//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а
// также методы public getSalary и setSalary.

//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст
// 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.

//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а
// также геттеры и сеттеры для них.

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

$obj1 = new Worker();
$obj2 = new Worker();
$obj1->setName('Иван')->setAge(25)->setSalary(1000);
$obj2->setName('Вася')->setAge(26)->setSalary(2000);

echo $obj1->getSalary() + $obj2->getSalary();

/**
 * Class Student
 */
class Student extends User
{
    /** @var */
    private $scholarship;
    /** @var */
    private $course;

    /**
     * @param int $scholarship
     *
     * @return Student
     */
    public function setScholarship(int $scholarship) : self
    {
        $this->scholarship = $scholarship;

        return $this;
    }

    /**
     * @return int
     */
    public function getScholarship() : int
    {
        return $this->scholarship;
    }

    /**
     * @param int $course
     *
     * @return Student
     */
    public function setCourse(int $course) : self
    {
        $this->course = $course;

        return $this;
    }

    /**
     * @return int
     */
    public function getCourse() : int
    {
        return $this->course;
    }
}
