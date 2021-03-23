<?php
require "./php/Classes/Manager/InformationManager.php";


$lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsa non officiis quibusdam! Accusantium aliquam
 consectetur deserunt facere fuga iure magnam nemo officia, provident quas qui quibusdam ratione sint sit?";

$manager = new InformationManager();

$array = $manager->getInformationByLocation("index.php");


foreach ($array as $item){
    pre($item);
}


