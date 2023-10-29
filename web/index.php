
<?php
/* Реализовать множественное наследование классов в php 2 разными способами (трейты и интерфейсы).
Модель данных придумать самому (в каждом классе должно быть по 2-3 метода).
Разобрать пример, когда одноименный метод используется в обоих унаследованных классах.
*/
require __DIR__.'/../vendor/autoload.php';
$programmer = new \testTask\app\Programmer("Alex", 150);
$manager = new \testTask\app\Manager("Anastasia", 300);

//Есть 3 класса
echo $programmer->getStatus();
echo '<br>';
echo $programmer->getName();
echo '<br>';
echo $programmer->getSalary();
echo '<br>';

echo '<br>';
$manager->bootSchedule();// Сработал метод из первого трейта т.к мы указали из какого трейта брать метод boot
echo '<br>';
echo $manager->getName();
echo '<br>';
$manager->sayHello();
echo '<br>';
echo $manager->getSalary();
echo '<br>';
$manager->setStatus('remove');//метод трейта переписал переменную класса
echo $manager->getStatus();
echo '<br>';
$manager->sayHello();
$manager->sayWorld();

?>
