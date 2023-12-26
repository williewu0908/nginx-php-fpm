<?php 
ini_set('memory_limit', '44M');
require_once '../app/API.php';

if (!is_null($_GET)) {
    $route = $_GET["route"];
    switch($route){
        case 'getLimitData' :
            echo getLimitData();
            break;
        case 'searchName' : 
            if (!isset($_GET["name"]) || !isset($_GET["gender"])) {
                $result['code'] = 500;
                $result['msg']  = "error";
                $result['data'] = [];
                echo json_encode($result);
            }else{
                echo(search($_GET["name"],$_GET["gender"]));
            }
            break;
        // other API if u wanna try...    
        default : 
            $result['code'] = 500;
            $result['msg']  = "You didn't search for anything.";
            $result['data'] = [];
            echo json_encode($result);
    }    
}
?>