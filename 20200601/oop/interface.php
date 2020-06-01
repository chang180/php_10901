<?php
interface Event{
    public function run();
    public function sound();
    public function catch();
}

interface Life{
    public function life();
}

class Pet{
    protected $hairColor="";
    protected $feet=0;
    protected $name="";

    public function __construct($name,$color,$feet){
        $this->name=$name;
        $this->hairColor=$color;
        $this->feet=$feet;
    }

    public function name(){
        return $this->name;
    }
    public function hairColor(){
        return $this->hairColor;
    }
    public function feet(){
        return $this->feet;
    }
}


class Dog extends Pet implements Event{
    public function run(){
        echo "狗在跑";
    }
    public function sound(){
        echo "狗在叫";
    }
    public function catch(){
        echo "狗抓貓";
    }
}

class Bird extends Pet implements Event,Life{
    public function run(){
        echo "鳥在跑";
    }
    public function sound(){
        echo "鳥在叫";
    }
    public function catch(){
        echo "鳥抓蟲";
    }
    public function life(){
        echo "鳥可以活10年";
    }
}

$dog=new Pet('dog','red',4);

echo $dog->name();
echo "<br>";
echo $dog->hairColor();
echo "<br>";
echo $dog->feet();
echo "<br>";

echo "<hr>";
echo "介面的用法";
echo "<hr>";

$dog2=new Dog('bigDog','blue',4);

echo $dog2->name();
echo "<br>";
echo $dog2->hairColor();
echo "<br>";
echo $dog2->feet();
echo "<br>";
$dog2->run();
echo "<br>";
 $dog2->sound();
echo "<br>";
 $dog2->catch();
echo "<br>";

echo "<hr>";

$bird=new Bird('bird','灰色',2);

echo $bird->name();
echo "<br>";
echo $bird->hairColor();
echo "<br>";
echo $bird->feet();
echo "<br>";
$bird->run();
echo "<br>";
 $bird->sound();
echo "<br>";
 $bird->catch();
echo "<br>";
 $bird->life();
echo "<br>";

?>