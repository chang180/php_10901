<?php
include_once("base.php");

function find($table,$arg){
    global $pdo;
return $pdo->query("SELECT * FROM ".$table." WHERE ".$arg)->fetchAll(PDO::FETCH_ASSOC);

}

var_dump(find('invoice','id>25 && year=2020'));

?>
