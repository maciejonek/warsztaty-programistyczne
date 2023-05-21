<?php
function ClassLoader($class){
    include $class.'.php';
}
spl_autoload_register('ClassLoader');
$car1 = new NoweAuto("model1", 3000);
echo $car1->getCenaEuro().'EUR<br>';
echo $car1->ObliczCene().'PLN<br>';
$car2 = new AutoZDodatkami("model2",4000,100,200,400);
echo $car2->getCenaEuro().'EUR<br>';
echo $car2->ObliczCene().'PLN<br>';
$ubezpieczenieCar2 = new Ubezpieczenie("model2",4000,100,200,400,0.1,5);
echo $ubezpieczenieCar2->ObliczCene();
