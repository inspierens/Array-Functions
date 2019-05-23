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

$obj1 = new Worker();
$obj2 = new Worker();
$obj1->setName('Иван');
$obj2->setName('Вася');
$obj1->setAge(25);
$obj2->setAge(26);
$obj1->setSalary(1000);
$obj2->setSalary(2000);

echo $obj1->getSalary() + $obj2->getSalary();

/**
 * Class Student
 */
class Student extends User
{
    /**
     * @var
     */
    private $scholarship;
    /**
     * @var
     */
    private $course;

    /**
     * @param int $scholarship
     */
    public function setScholarship(int $scholarship)
    {
        $this->scholarship = $scholarship;
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
     */
    public function setCourse(int $course)
    {
        $this->course = $course;
    }

    /**
     * @return int
     */
    public function getCourse() : int
    {
        return $this->course;
    }
}
