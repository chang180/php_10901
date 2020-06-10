<?php

class Pet{
    public $hairColor="black";
    public $feet=4;

    public function __construct(){
        echo $this->sound();
    }

    public function sound(){
        return  "汪汪";
    }
}

$dog=new Pet;

echo $dog->hairColor;
echo "<br>";
echo $dog->feet;
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
echo $dog2->hairColor;
echo "<br>";
echo $dog2->feet;
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
}


$dog2=new Dog;
$dog2->hairColor="red";  //改變毛色
echo $dog2->hairColor;
echo "<br>";
echo $dog2->feet;
echo "<br>";
echo $dog2->sound();
echo "<br>";
echo $dog2->run();

?>