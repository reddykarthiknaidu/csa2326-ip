<?php

$mark=90;
switch(true){

case($mark >=90 && $mark<=100):
echo" S grade";
break;
case($mark >=80 && $mark<=89):
echo" A grade";
break;
case($mark >=70 && $mark<=79):
echo" B grade";
break;
case($mark >=60 && $mark<=69):
echo" C grade";
break;
case($mark >=0 && $mark<=49):
echo" Fail";
break;
}
?>