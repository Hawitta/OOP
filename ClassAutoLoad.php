<?php

spl_autoload_register(function ($ClassName){
    $directories = array("dbConnection", "layout", "processes");
    foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $ClassName . ".php";
        if(is_readable($FileName)){
            require $FileName;
        }
    }
}, true, true);

$db = NEW Database();
$process = NEW Process();
$layout = NEW Layout($db);

$process -> process_register($db);