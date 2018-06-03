<?php
   	include str_replace('\\','/',dirname(dirname(__DIR__))).'/Login/pdo.php';
    include str_replace('\\','/',dirname(dirname(__DIR__))).'/function.php';
    $config=require('config.php');
    $pdo=DB::getInstance()->getDB();
    $result=array();
    $q= strtolower($_GET["term"]);
    $res=$pdo->query("select drug from pm_drug where drug like '$q%' limit 0,20");
    $resu=$res->fetchALL(PDO::FETCH_NUM );
    // $result=["sad","fgg","srr"];
    $arrlength=count($resu);
    $i=0;
    for($x=0;$x<$arrlength;$x++)
    {
       $result[$i]=$resu[$x][0];
       $i++;
    }
    echo json_encode($result);
?>
