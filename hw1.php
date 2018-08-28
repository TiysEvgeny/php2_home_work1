<?php
	/**
	* Класс Cover описывает вместилище товаров, 
	* объединяющее такие сущности как склад магазина,
	* корзина покупателя или оформленный заказ
	*/
	class Cover {
		$owner='shop'; // Владелец вместилища, возможно, магазин, поставщик или покупатель
		$identifier=0; 
		$address=''; // Географическая локация вместилища
		$cost=0; // Стоимость всех товаров во вместилище
		$goods=[]; // Перечень товаров во вместилище

		function addGood ($goodId, $goodAmount) {

		}
		function removeGood ($goodId, $goodAmount) {
			
		}
		function __construct($this->goods) {
			
		}
	}

	/**
	* Класс Cart содержит товары покупателя, которые тот добавил в корзину
	*/
	class Cart extends Cover {
		$personalDiscount=0;	//Персональная скидка покупателя (программа лояльности)	
	}

	/**
	* Класс Order содержит товары отправленные покупателю
	*/
	class Order extends Cover {
		$dateOfOrder=''; // Дата совершения заказа
		function 
		{
			# code...
		}
	}



//Задание 5
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); //1
$a2->foo(); //2
$a1->foo(); //3
$a2->foo(); //4
	//$x общая переменная для всех объектов класса из-за ключевого слова static


//Задание 6
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //1
$b1->foo(); //2
$a1->foo(); //3
$b1->foo(); //4

//$x общая переменная для всех дочерних классов из-за ключевого слова static