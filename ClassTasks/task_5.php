<?php
// Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName,
// getName, setAge, getAge.

//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а
// также методы public getSalary и setSalary.

//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст
// 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.

//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а
// также геттеры и сеттеры для них.

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

$obj1 = new Worker();
$obj2 = new Worker();
$obj1->setName('Иван');
$obj2->setName('Вася');
$obj1->setAge(25);
$obj2->setAge(26);
$obj1->setSalary(1000);
$obj2->setSalary(2000);

echo $obj1->getSalary() + $obj2->getSalary();

class Student extends User
{
    private $scholarship;
    private $course;

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }
}
