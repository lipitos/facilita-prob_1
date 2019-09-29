<?php

$people = $model_person->list(); 

$person_1 = new Person();
$person_2 = new Person();

$year = 0;

$person_1->setName("Chico");
$person_1->setHeight(1.30);
$person_1->setRate(0.02);

$person_2->setName("Juca");
$person_2->setHeight(1.10);
$person_2->setRate(0.03);

$rate_1 = convert($person_1->getRate());
$rate_2 = convert($person_2->getRate());

$height_1 = convert($person_1->getHeight());
$height_2 = convert($person_2->getHeight());

if(!$person_1->getId()){
    $id = $model_person->search(1);
    if($id==null){
        $model_person->save($person_1);
    }
}

if(!$person_2->getId()){
    $id = $model_person->search(2);
    if($id==null){
        $model_person->save($person_2);
    }
}

while($height_1 <> $height_2){
    $height_1 = $height_1 + $rate_1;
    $height_2 = $height_2 + $rate_2;

    $year++;
}

require __DIR__ . "/../view/template.php";