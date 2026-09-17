<?php

$cantidad1=1234.56;
$cantidad2=7890.12;

//number_fomat(cantidad,decimales,sep.decimal,sep.millar);

$cantidad2=number_format($cantidad2,1);
echo $cantidad2;