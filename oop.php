<?php

class User{
    public $name;
    public $email;
    public function __construct($nm='',$eml='')
    {
        $this->name=$nm;
        $this->email=$eml;
    }
    function setName($nm){
         $this->name = $nm;
    }
    function getName(){
        return $this->name;
   }
   function getEmail(){
    return $this->email;
}

};
$user = new User('shakir','email@eml.com');
// echo $user->getName();
// echo $user->getEmail();

class Employee extends User{
    public $employeeId;
    public function __construct($nm='',$eml='',$id=null)
    {
        parent::__construct($nm,$eml);
        $this->employeeId=$id;
    }
    function getEmployeeId(){
        return $this->employeeId;
    }
}
$employee = new Employee('shakir','eml@eml.com',123);

echo $employee->getName();
echo $employee->getEmail();
echo $employee->getEmployeeId();





?>