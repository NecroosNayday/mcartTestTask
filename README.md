# Тестовое задание 
___
 > Реализовать множественное наследование классов в php 2 разными способами (трейты и интерфейсы).Модель данных придумать самому (в каждом классе должно быть по 2-3 метода).Разобрать пример, когда одноименный метод используется в обоих унаследованных классах.
___ 
### Решение

Создал 3 класса, базовый класс Employee и 2 наследника Programmer и Manager.
В базовом классе Employee создал методы из FirstInterface без его наследования.   
В классе Programmer унаследовал класс Employee и имплементировал интерфейсы FirstInterface и SecondInterface.  
Часть методов была реализована в базовом классе так что реализовал оставшиеся и переопределил метод getName()
добавив к значению базового класса новое.  
В обоих интерфейсах есть метод getName() не вызывает ошибок при совпадении сигнатур.  
В классе Manager так же унаследовал базовый класс Employee, а так же 2 трейта FirstTrait и SecondTrait.
При одинаковых названияз методов в трейтах возникает ошибка, чтобы ее решить нужно укаазать какой метод к какому трейту должен относится.