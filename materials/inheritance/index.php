<?php
include ("index.config.php");
include ($r_base."assets/php_modules/addons.php");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
<?php include ($r_base."assets/php_modules/head.tpt.php"); ?>
</head>
<body>
<div class='container-fluid'>
<?php include ($r_base."assets/php_modules/header.tpt.php"); ?>  
<div class="row">
<?php include ($r_base."assets/php_modules/aside.tpt.php"); ?>
<main class="col-md markdown-body">

<h2 id="1">Общая характеристика наследования</h2>
<p>&#8226; <b>Наследование</b> - один из основных принципов ООП. Согласно которому, класс может использовать переменные и методы других классов как свои собственные.</p>
<p>&#8226;Класс, который наследует данные, называется подклассом <code class="highlight">(subclass)</code> , производным классом <code class="highlight">(derived class)</code>  или дочерним классом <code class="highlight">(child)</code> . Класс, из которого эти переменные или методы наследуются, называется суперклассом <code class="highlight">(super class)</code> , базовым классом <code class="highlight">(base class)</code>  или родительским классом <code class="highlight">(parent)</code> . Термины "родительский" и "дочерний" очень полезны для понимания наследия. Как ребенок получает характеристики своих родителей, производный класс получает методы и переменные базового класса [1]. </p>
<p>&#8226; Наследование полезно, так как оно позволяет структурировать и повторно использовать код, что может значительно ускорить процесс разработки. Тем не менее, наследие следует использовать с осторожностью, так как большинство изменений в суперклассе коснутся всех подклассов, что может привести к неожиданным последствиям [1].</p>
<p>&#8226; Важно помнить, что приватные переменные и методы не могут быть наследованы. </p>
<h2 id="2">1. Типы наследования</h2>
<p>&#8226; В C ++ есть несколько типов наследования:</p>
<ol>
    <li>Публичный <code class="highlight">(public)</code>- публичные <code class="highlight">(public)</code> и защищенные <code class="highlight">(protected)</code> данные наследуются без изменения уровня доступа к ним;</li>
    <li>Защищенный <code class="highlight">(protected)</code> — все унаследованные данные становятся защищенными<code class="highlight">(protected)</code>;</li>
    <li>Приватный <code class="highlight">(private)</code> — все унаследованные данные становятся приватными<code class="highlight">(private)</code>.</li>
</ol>

<pre class="highlight"><code data-language="c">
class Parent
{
public:
    int m_public; // доступ к этому члену открыт для всех объектов
private:
    int m_private; // доступ к этому члену открыт только для других членов класса Parent и для дружественных классов/функций (но не для дочерних классов)
protected:
    int m_protected; // доступ к этому члену открыт для других членов класса Parent, дружественных классов/функций, дочерних классов
};
class Child: public Parent
{
public:
    Child()
    {
        m_public = 1; // разрешено: доступ к открытым членам родительского класса из дочернего класса
        m_private = 2; // запрещено: доступ к закрытым членам родительского класса из дочернего класса
        m_protected = 3; // разрешено: доступ к защищённым членам родительского класса из дочернего класса
    }
};

int main()
{
    Parent parent;
    parent.m_public = 1; // разрешено: доступ к открытым членам класса извне
    parent.m_private = 2; // запрещено: доступ к закрытым членам класса извне
    parent.m_protected = 3; // запрещено: доступ к защищённым членам класса из вне
}
</code></pre>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.jpg">
		<img src="<?php echo $folder_name ?>img/1.jpg" alt="Рисунок 1 - Типы наследования">
	</a>
</div>
<p class="text-center lead">Рисунок 1 - Типы наследования</p>

<h2 id="3">2. Конструкторы и деструкторы</h2>
<p>&#8226; В C ++ конструкторы и деструкторы не наследуются. Однако они вызываются, когда дочерний класс инициализирует свой объект. Конструкторы вызываются один за другим иерархически, начиная с базового класса и заканчивая последним производным классом. Деструкторы вызываются в обратном порядке [2].</p>

<pre class="highlight"><code data-language="c">
class Device {
public:
	// constructor
	Device() {
		cout &#60;&#60; "Device constructor called" &#60;&#60; endl;
	}
	// destructor
	~Device() {
		cout &#60;&#60; "Device destructor called" &#60;&#60; endl;
	}
};
class Computer : public Device {
public:
	Computer() {
		cout &#60;&#60; "Computer constructor called" &#60;&#60; endl;
	}
	~Computer() {
		cout &#60;&#60; "Computer destructor called" &#60;&#60; endl;
	}
};
class Laptop : public Computer {
public:
	Laptop() {
		cout &#60;&#60; "Laptop constructor called" &#60;&#60; endl;
	}
	~Laptop() {
		cout &#60;&#60; "Laptop destructor called" &#60;&#60; endl;
	}
};
int main() {
	cout &#60;&#60; "\tConstructors" &#60;&#60; endl;
	Laptop Laptop_instance;
	cout &#60;&#60; "\tDestructors" &#60;&#60; endl;
	return 0;
}

</code></pre>
<p> Конструкторы:Device-&#62;Computer-&#62;Laptop. <br>
Деструкторы: Laptop -&#62; Computer -&#62; Device.
</p>

<h2 id="4">3. Виртуальные функции</h2>

<p>&#8226; К механизму виртуальных функций обращаются в тех случаях, когда в каждом производном классе требуется свой вариант некоторой компонентной функции. Классы, включающие такие функции, называются полиморфнымии играют особую роль в ООП. Виртуальные функции предоставляют механизм позднего(отложенного) или динамического связывания. Любая нестатическая функция базового класса может быть сделана виртуальной, для чего используется ключевое слово <span class="lead">virtual</span>.</p>

<p>&#8226; Таким образом, интерпретация каждого вызова виртуальной функции через указатель на базовый класс зависит от значения этого указателя, то есть от типа объекта, для которого выполняется вызов.</p>

<p>&#8226; Выбор того, какую виртуальную функцию вызвать, будет зависеть от типа объекта, на который фактически (в момент выполнения программы) направлен указатель, а не от типа указателя. </p>

<p>&#8226;Виртуальными могут быть только нестатические функции-члены. 
Виртуальность наследуется. После того как функция определена как виртуальная, ее повторное определение в производном классе (с тем же самым прототипом) создает в этом классе новую виртуальную функцию, причем спецификатор <span class="lead">virtual</span> может не использоваться. 
</p>

<p>&#8226;Конструкторы не могут быть виртуальными, в отличие от деструкторов. Практически каждый класс, имеющий виртуальную функцию, должен иметь виртуальный деструктор.[1]</p>

<pre class="highlight"><code data-language="c">
class First
{
public:
	virtual void print
	{
		cout &#60;&#60; "First";
	}
};
class Second : public First
{
	void print() override
	{
		cout &#60;&#60; "Second";
	}
};
int main()
{
	Second s;
	First f;
	First* p1 = &s;
	First* p2 = &f;
	p1-&#62;print();//вызывается метод Second
	p-&#62;print();//вызывается метод First
}

</code></pre>

<h2 id="5">4. Принцип подстановки</h2>

<p>&#8226;Открытое наследование устанавливает между классами отношение «является»: класс-наследник является частью класса-родителя. Это означает, что везде, где может  быть использован объект базового класса (при присваивании, при передаче параметров и возврате результата), вместо него разрешается использовать объект производного класса. </p>

<p>&#8226;Данное положение называется принципом подстановки. Принцип работает и для ссылок и для указателей. Обратное неверно. Например, всякий спортсмен (производный класс) является человеком (базовый класс), но не всякий человек является спортсменом.</p>
<p>Пример метода подстановки на алгоритмическом языке С++ </p>

<pre class="highlight"><code data-language="c">
class Base 
{ 
public:
	void f1(){}
	void f2(){}
}; 
class Derive : public Base //открытое наследование
{
	void f3(){}
};
int main()
{
	Derive a;
	a.f1();//вместо объекта базового класса используется объект производного класса
	a.f2();//
}
</code></pre>
<p>&#8226;При закрытом <span class="lead">(private) </span>наследовании принцип подстановки не соблюдается.</p>


<h2 id="6">5. Полиморфизм</h2>
<p>&#8226;<b>Полиморфизм</b> – свойство, которое позволяет использовать одно и тоже имя функции для решения двух и более схожих, но технически разных задач. Реализация полиморфизма даёт возможность замещения методов объекта родителя методами объекта-потомка, имеющих то же имя.</p>
<p>&#8226;Для использования полиморфизма, необходимо чтобы:</p>
<ol>
    <li>все классы-потомки являлись наследниками одного и того же базового класса;</li>
    <li>функция, реализующая метод,  должна быть объявлена виртуальной в базовом классе.</li>
</ol>

<h2 id="7">6. Абстрактные (базовые) классы</h2>
<p>&#8226;Полиморфизм чаще всего реализуется через абстрактные классы.
Абстрактный класс - это класс, который содержит как минимум одну чистую виртуальную функцию. Чистые виртуальные функции в таких классах называются абстрактными методами.</p>
<p>&#8226;Механизм абстрактных классов разработан для представления общих понятий, которые в дальнейшем предполагается конкретизировать. 
То есть абстрактные классы используются в качестве обобщенных концепций, на основе которых можно создавать более конкретные производные классы. </p>
<p>&#8226;Свойства абстрактных(базовых) классов:</p>

<ol>
    <li> Обязательно содержит чистую виртуальную функцию. Виртуальная функция обязательно должна быть определена в классе-наследнике перед созданием экземпляра этого класса;</li>
    <li> Невозможно создать объект типа абстрактного класса, однако можно использовать указатели и ссылки на типы абстрактных классов; </li>
	<li> Абстрактный класс нельзя употреблять для задания типа параметра функции или типа возвращаемого объекта (так как экземпляров этого класса не может быть).</li>
</ol>
<p>&#8226;Несмотря на невозможность абстрактного класса быть параметром функции,но может быть передан в функцию как указатель. В этом случае можно передать в вызываемую функцию в качестве фактического параметра значение указателя на производный объект, заменяя им указатель на абстрактный базовый класс. Таким образом, получаются полиморфные объекты.</p>
<p>&#8226;Пример создания абстрактного класса Animal, а также класса-наследника Rabbit на алгоритмическом языке С++ </p>

<pre class="highlight"><code data-language="c">
#include &#60;iostream&#62;
/*Абстрактный (базовый )класс Animal
Так как Animal абстрактный – от него нельзя создать объект*/
class Animal {
public:
   	int age;
   	Animal(int age = 0) {
         	this-&#62;age = age;
   	}
   	virtual void walk() = 0; // Чистая виртуальная функция, все наследники обязаны перегрузить её
   	~Animal() {
         	std::cout &#60;&#60; "Животное убежало:(";
   	}
};
class Rabbit : public Animal  // Производный класс Rabbit (кролик), наследуется от Animal 
{
private:
   	int color = 0;
public:
   	Rabbit(int c, int age) : Animal(age) // Конструктор Rabbit вызывает конструктор Animal через список инициализаторов
{
         	color = c;
   	}
   	void walk()
   	{
         	std::cout &#60;&#60; "Кролик бегает";
   	} // Обязательно перегружаем чистую виртуальную функцию
};

</code></pre>


<h2 id="8">Список литературы</h2>

<ol>
    <li> Роберт  Лафоре.  Объектно – ориентированное программирование в С++, 2004. – 476 с.</li>
    <li> Брюс Эккель, Чак Эллисон. Философия С++. Введение в стандартный С++,  2004.  – 427 с.</li>
    <li> Юрий Равесли. Наследование. Типы наследования: public, private, protected. Виртуальные функции. [Электронный ресурс], 2019. URL: <a href="https://ravesli.com/urok-157-nasledovanie-i-spetsifikatory-dostupa-protected/">https://ravesli.com/urok-157-nasledovanie-i-spetsifikatory-dostupa-protected/
	</a> (дата обращения 30.03.2020)
	</li>
	<li> Екатерина Бондаренко. Наследование. Типы наследования. [Электронный ресурс], 2018. URL:<a href="https://habr.com/ru/post/445948/">https://habr.com/ru/post/445948/</a> (дата обращения 31.03.2020)</li>
	<li> А. М. Ноткин. Объектно-ориентированное программирование на языке С++, 2013. - 229 с.</li>
	<li> Т. А. Павловская, Ю. А. Щупак. Объектно-ориентированное программирование, 2006. - 266 с.</li>
	<li> А. Н. Васильев. Объектно-ориентированное программирование на С++, 2016. -  544 с.</li>
</ol>

</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>