<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
  }

  function getName() {
    return $this->name;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "
    <h1>About my family</h1><br>"."My name is: ".$this->getName()."<br> my lastname is: ".$this->getLastname().
    "<br>my father is: ".$this->getFather()->getName()."<br>my mother is: ".$this->getMother()->getName().
    "<br>my maternal grandfather is: ".$this->getMother()->getFather()->getName()."
    <br>my maternal grandmother is: ".$this->getMother()->getMother()->getName().
    "<br>my paternal grandfather is: ".$this->getFather()->getFather()->getName()."
    <br>my paternal grandmother is: ".$this->getFather()->getMother()->getName();
  }
}

$pavel = new Person("Pavel", "Ivanov", 63);
$ira = new Person("Ira", "Ivanova", 61);

$igor = new Person("Igor", "Petrov", 62);
$kate = new Person("Kate", "Petrova", 61);

$alex = new Person("Alex", "Ivanov", 42, $ira, $pavel);
$olga = new Person("Olga", "Ivanova", 42, $kate, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);
echo $valera->getInfo();
