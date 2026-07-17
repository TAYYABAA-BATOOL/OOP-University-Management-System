<?php

// 1. Encapsulation: Private properties aur Getters/Setters
class Person {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// 2. Inheritance: Student class, Person class ko extend kar rahi hai
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // 3. Polymorphism: Same function 'getDetails' different behavior
    public function getDetails() {
        return "Student: " . $this->getName() . " | ID: " . $this->studentID;
    }
}

class Teacher extends Person {
    private $subject;

    public function __construct($name, $subject) {
        parent::__construct($name);
        $this->subject = $subject;
    }

    public function getDetails() {
        return "Teacher: " . $this->getName() . " | Subject: " . $this->subject;
    }
}

// Testing the code
$student = new Student("Tayyaba Batool", "CS-2023-001");
$teacher = new Teacher("Dr. Ahmed", "Artificial Intelligence");

echo $student->getDetails() . "\n";
echo $teacher->getDetails() . "\n";
?>