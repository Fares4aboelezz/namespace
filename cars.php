<?php

require_once "../namespace/colorofcars/bmw.php";
require_once "../namespace/modelofcars/bmw.php";
require_once "../namespace/sizeofcar/bmw.php";

require_once "../namespace/colorofcars/bego.php";
require_once "../namespace/modelofcars/bego.php";
require_once "../namespace/sizeofcar/bego.php";

require_once "../namespace/colorofcars/volvo.php";
require_once "../namespace/modelofcars/volvo.php";
require_once "../namespace/sizeofcar/volvo.php";


use std\bmw_color;
use std\bmw_model;
use std\bmw_size;

use std\bego_color;
use std\bego_model;
use std\bego_size;

use std\volvo_color;
use std\volvo_model;
use std\volvo_size;

$bmw_color = new bmw_color();
$bmw_model = new bmw_model();
$bmw_size = new bmw_size();


$bego_color=new bego_color();
$bego_model=new bego_model();
$bego_size=new bego_size();


$volvo_color=new volvo_color();
$volvo_model=new volvo_model();
$volvo_size=new volvo_size();


echo "bmw properities ";
echo "<pre>";
print_r($bmw_color->color);
print_r($bmw_model->models);
print_r($bmw_size->size);
echo "</pre>";
echo "<br>";

echo "bego properities ";
echo "<pre>";
print_r($bego_color->color);
print_r($bego_model->models);
print_r($bego_size->size);
echo "</pre>";

echo "volvo properities ";
echo "<pre>";
print_r($volvo_color->color);
print_r($volvo_model->models);
print_r($volvo_size->size);
echo "</pre>";