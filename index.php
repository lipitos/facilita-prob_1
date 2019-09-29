<?php

require __DIR__ . "/config/conn.php";
require __DIR__ . "/utils/utils.php";
require __DIR__ . "/model/personModel.php";
require __DIR__ . "/model/Person.php";

$model_person = new personModel($pdo);

$router = "personController";

if(array_key_exists("router", $_GET)){
	$router = (string) $_GET["router"];
}

if(is_file("controller/{$router}.php")){
	require "controller/{$router}.php";
}else{
	echo "Rota não encontrada";
}
