<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
date_default_timezone_set("Asia/Taipei");
session_start();


function all($table,...$arg){
    global $pdo;
    $sql="select * from $table ";

    if(!empty($arg[0]) && is_array($arg[0])){
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }

        $sql=$sql . " where ".implode(" && ",$tmp);
        // echo $sql;
    }

    if(!empty($arg[1])){
        $sql=$sql . $arg[1];
    }

    if(!empty($arg[2])){
        
        return $pdo->query($sql)->fetchAll($arg[2]);
    }else{
        return $pdo->query($sql)->fetchAll();

    }


}

function find($table,$arg){
    global $pdo;
    $sql="select * from $table ";
    
    if(is_array($arg)){

        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql . " where ".implode(" && ",$tmp);

    }else{
        $sql=$sql . " where id='".$arg."'";
    }

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

}
function nums($table,...$arg){
    global $pdo;
    $sql="select count(*) from $table ";

    if(!empty($arg[0]) && is_array($arg[0])){
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }

        $sql=$sql . " where ".implode(" && ",$tmp);
    }

    if(!empty($arg[1])){
        $sql=$sql . $arg[1];
    }
//SELECT COUNT(*) FROM user WHERE acc='admin' && pw='1234'

// 注入攻擊(截斷密碼欄位，使SQL語法變成必定為true)：
//SELECT COUNT(*) FROM user WHERE acc='admin' && pw='' OR 1=1 && 1='1234'

    return $pdo->query($sql)->fetchColumn();    
}
function save($table,$arg){
    global $pdo;

    if(!empty($arg['id'])){
        //update
        foreach($arg as $key =>$value){
            if($key!='id'){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);

            }
        }
        $sql="update $table set " . implode(",",$tmp) . " where id='".$arg['id']."'";
    }else{
        //insert

        $sql="insert into $table (`".implode("`,`",array_keys($arg))."`) values('".implode("','",$arg)."')";

    }

    echo $sql;
    return $pdo->exec($sql);

}
function del($table,$arg){
    global $pdo;
    $sql="delete from $table ";
    
    if(is_array($arg)){

        foreach($arg as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql . " where ".implode(" && ",$tmp);

    }else{
        $sql=$sql . " where id='".$arg."'";
    }

    return $pdo->exec($sql);    
}
function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll();
}
function to($url){
    header("location:".$url);
}

// 檢查字串
// 小寫字母：ASCII 97-122
// 大寫字母：ASCII 65-90
// 數字：48-57

function chkacc($acc){
    for($i=0;$i<strlen($acc);$i++){
        $char=ord(mb_substr($acc,$i,1));
if(($char>=97 && $char<=122) || ($char>=65 && $char<=90) || ($char>=48 && $char<=57)){
    //字串是允許的字元
    return true;
}else{
    // 不允許的字元
    return false;
}


    }
}

?>