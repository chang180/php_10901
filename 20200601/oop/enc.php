<?php

class Pet{
    protected $hairColor="black";
    private $feet=4;

    public function __construct(){
        echo $this->sound();
    }

    public function sound(){
        return  "汪汪";
    }
    public function hairColor(){
        return $this->hairColor;
    }
    public function feet(){
        return $this->feet;
    }
    public function setFeet($num){
        $this->feet=$num;
     }
}

$dog=new Pet;

echo $dog->hairColor();
echo "<br>";
echo $dog->feet();
echo "<br>";
echo $dog->sound();
//echo $dog->run();
?>

<hr>
繼承
<hr>

<?php

class Dog extends Pet{

    //overwrite 覆寫
    public function sound(){
        return  "汪汪吼吼吼";
    }
    public function run(){
        return  "小狗跑起來了";
    }
}


$dog2=new Dog;
echo $dog2->hairColor();
echo "<br>";
echo $dog2->feet();
echo "<br>";
echo $dog2->sound();
echo "<br>";
echo $dog2->run();

?>
<hr>
封裝
<hr>

<?php

class Dog2 extends Pet{

    //overwrite 覆寫
    public function sound(){
        return  "汪汪吼吼吼";
    }
    public function run(){
        return  "小狗跑起來了";
    }


    public function setHairColor($color){
        $this->hairColor=$color;
    }


}


$dog2=new Dog2;
$dog2->setHairColor('green');  //改變毛色
echo $dog2->hairColor();
echo "<br>";
$dog2->setFeet(2);  //改變腳數
echo $dog2->feet();
echo "<br>";
echo $dog2->sound();
echo "<br>";
echo $dog2->run();

?>