<?php
   	include str_replace('\\','/',dirname(dirname(__DIR__))).'/Login/pdo.php';
    include str_replace('\\','/',dirname(dirname(__DIR__))).'/function.php';
    $config=require('config.php');
    $pdo=DB::getInstance()->getDB();
    $result=array();
    $res=$pdo->query('SELECT drug FROM pm_drug');
    $result['array']=$res->fetchALL(PDO::FETCH_ASSOC);
	  $drug1=trim_data($_POST['drug1']);
    if(isset($_POST['drug2'])){
  	    $drug3=trim_data($_POST['drug2']);
      }
	if(isset($_POST['drug3'])){
	    $drug3=trim_data($_POST['drug3']);
    }
    $stmt=$pdo->prepare('SELECT id FROM pm_drug WHERE drug=?');
	$stmt->execute(array($drug1));
	if(!$stmt->fetch()){
        $result['status']=0;
        $result['message']='第一个药物不在我们数据库当中';
        exit(json_encode($result));
    }
    if(isset($drug2)){
        $stmt->execute(array($drug2));
        if(!$stmt->fetch()){
            $result['status']=0;
            $result['message']='第二个药物不在我们数据库当中';
            exit(json_encode($result));
        }
    }
    if(isset($drug3)){
        $stmt->execute(array($drug3));
        if(!$stmt->fetch()){
            $result['status']=0;
            $result['message']='第三个药物不在我们数据库当中';
            exit(json_encode($result));
        }
    }
    echo json_encode(1);
    if(isset($drug3)){
        $all_drug=implode('@@@',array($drug1,$drug2,$drug3));
    }else{
        $all_drug=implode('@@@',array($drug1,$drug2));
    }
    $command=sprintf('%s %s %s %s',$config['PYTHON'],str_replace('\\','/',dirname(__DIR__)).'/'.$config['PYTHON_P_VALUE'],$all_drug,$_POST['generank']);
    $p_value=exec(escapeshellcmd($command));
    if($p_value){
        $result['status']=1;
        $result['value']=$p_value;
        exit(json_encode($result));
    }else{
        $result['status']=0;
        $result['message']='计算出错';
        exit(json_encode($result));
    }
?>
