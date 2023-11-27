<?php
/* Здоровье персонажа, не может быть более 100 ед. */
class Person{
    public $name;
    public $lastname;
    public $age;
    private $hp;
    private $mother;
    private $father;
    public function __construct($name, $lastname, $age, $mother, $father){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->hp = 100;
        $this->mother = $mother;
        $this->father = $father;
    }
    public function sayHi(){
        echo "Привет, меня зовут ".$this->name;
    }

    public function getHp(){
        return $this->hp;
    }
    public function setHp($hp){
        if($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp+$hp;
    }
    public function getMother(){
        return $this->mother;
    }
    public function getFather(){
        return $this->father;
    }
    public function getInfo(){
        $result =  "Имя: ".$this->name."<br>
              Фамилия: ".$this->lastname."<br>
              Возраст: ".$this->age."<br>";
        if($this->mother != null){
            $result .= "Имя мамы: ".$this->mother->name."<br>";
            if($this->mother->father != null){
                $result .= "Имя дедушки по маминой линии: ".$this->mother->father->name."<br>";
            }
        }
        if($this->father != null){
            $result .= "Имя папы: ".$this->father->name."<br>";
            if($this->father->mother != null){
                $result .= "Имя бабушки по папиной линии: ".$this->father->mother->name."<br>";
            }
        }
        echo $result;
    }
}
$person5 = new Person("Nina", "Ivanova", 70, null, null);
$person4 = new Person("Alex", "Petrov", 67, null, null);
$person3 = new Person("Olga", "Ivanova", 32, null, $person4);
$person2 = new Person("Igor", "Ivanov", 30, $person5, null);
$person1 = new Person( "Ivan", "Ivanov", 10, $person3, $person2);
echo $person1->getInfo();

/*$person1 = new Person( "Ivan", "Ivanov", 32);
$medkit = 50000;
echo $person1->getHp()."<br>"; // 100
$person1->setHp(-30);
echo $person1->getHp()."<br>"; // 70
$person1->setHp($medkit);
echo $person1->getHp()."<br>"; // 100*/
