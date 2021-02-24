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
<h2 id="1">1. Общая характеристика шаблонов</h2>
<p class="">&#8226; Шаблоны позволяют определить конструкции (функции, классы), которые используют определенные типы данных, но на момент написания кода точно не известно, что это будут за типы данных. Иными словами, шаблоны позволяют определить универсальные конструкции, которые не зависят от определенного типа данных. </p>
<p class="">&#8226; Правила описания шаблонов:</p>
<ol>
    <li>Шаблоны методов (функций) не являются функцией, и поэтому они не могут быть виртуальными.</li>
    <li>Шаблоны классов могут содержать статические элементы, дружественные функции и классы.</li>
    <li>Шаблоны наследуются. Они могут быть производными как от шаблонов, так и от обычных классов, а также являться базовыми и для шаблонов, и для обычных классов.</li>
</ol>
<br>
<p class="">&#8226; Все шаблоны функций или классов начинаются со слова <code class="highlight">«template»</code>. После ключевого слова <code class="highlight">«template»</code> ставятся угловые скобки < >, в которых перечисляются параметры шаблона. Каждому параметру предшествует зарезервированное слово <code class="highlight">«class»</code> или <code class="highlight">«typename»</code>. Отсутствие ключевых слов расценивается компилятором как синтаксическая ошибка. </p>
<p class="">&#8226; Пример объявления шаблонов на алгоритмическом языке C++</p>
<pre class="highlight"><code data-language="c">template &#60;class T&#62;
template &#60;typename T&#62;
template &#60;typename T1, typename T2&#62;</code></pre>
<p class="">&#8226; При использовании в шаблоне класса или функции, следующих типов данных: <code class="highlight">int</code>, <code class="highlight">double</code>, <code class="highlight">float</code>, <code class="highlight">char</code> и так далее, используется ключевое слово -  <code class="highlight">typename</code>. Ключевое слово <code class="highlight">«class»</code> сообщает компилятору, что в шаблоне функции в качестве параметра используются классы. </p>
<p class="">&#8226; Общая форма объявления шаблона класса без аргументов на алгоритмическом языке С++</p>
<pre class="highlight"><code data-language="c">template &#60;class T&#62;
class ClassName
{
//тело класса
//...
};</code></pre>
<p class="">
<code class="highlight">T</code> – имя типа, который используется методами класса;
<br>
<code class="highlight">ClassName</code> – имя класса, который содержит методы оперирования типом класса.
</p>
<p class="">&#8226; Общая форма объявления объекта шаблонного класса на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">ClassName &#60;type&#62; ObjName;</code></pre>
<p class="">
<code class="highlight">ClassName</code> – имя шаблонного класса;
<br>
<code class="highlight">type</code> – конкретный тип данных в программе;
<br>
<code class="highlight">objName</code> – имя объекта (экземпляра) класса.
</p>
<p class="">&#8226; Пример объявления шаблона класса, тип которого может быть целым или вещественным, представлен в листинге 1.</p>
<span class="lead">Листинг 1.</span> – Форма объявления шаблона класса
<pre class="highlight"><code data-language="c">template &#60;class T&#62;
class MyNumber
{
public:
MyNumber(void) { } // конструктор по умолчанию
void Mult2(T* t); // метод, умножающий число на 2
T MySquare(T); // метод, возвращающий квадрат числа для                                          //некоторого типа T
T DivNumbers(T, T);  // метод, который делит два числа                       типа //T и возвращает результат типа T  
};

// реализация метода, умножающего число на 2
template &#60;class T&#62;
void MyNumber&#60;T&#62;::Mult2(T* t)
{
*t = (*t) * 2;
}
// реализация метода, возвращающего квадрат числа
template &#60;class T&#62;
T MyNumber&#60;T&#62;::MySquare(T number)
{
return (T)(number * number);
}
// метод, который делит 2 числа и возвращает результат от деления
template &#60;class T&#62;
T MyNumber&#60;T&#62;::DivNumbers(T t1, T t2)
{
return (T)(t1 / t2);
};</code></pre>

<h2 id="2">2. Инстанцирование шаблона класса</h2>
<p class="">&#8226; Процесс создания конкретного класса из шаблона путем подстановки аргументов называется инстанцированием шаблона. Шаблон класса не является ни типом данных, ни объектом класса. Из исходного файла, содержащего только определения шаблонов, не генерируется никакого кода. Чтобы программа была скомпилирована, в шаблон должны быть переданы конкретные данные. </p>
<p class="">&#8226; Использование шаблона класса <code class="highlight">MyNumber</code> на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">MyNumber &#60;int&#62; mi; // объект mi класса работает с типом int
MyNumber &#60;float&#62; mf; // объект mf работает с типом float

int d = 8;
float x = 9.3f;

// умножение числа на 2
mi.Mult2(&d); // d = 16
mf.Mult2(&x); // x = 18.6

// возведение числа в квадрат
int dd;
dd = mi.MySquare(9); // dd = 81 - целое число

double z;
z = mf.MySquare(1.1); // z = 1.21000... - вещественное число

// деление чисел
long int t;
float f;

t = mi.DivNumbers(5, 2); // t = 2 - деление целых чисел
f = mf.DivNumbers(5, 2); // f = 2.5 - деление вещественных чисел</code></pre>
<h2 id="3">3. Шаблон класса, принимающий аргументы</h2>
<p class="">&#8226; Бывают случаи, когда в шаблоне класса нужно использовать некоторые аргументы. Эти аргументы могут использоваться методами, которые описываются в шаблоне класса. </p>
<p class="">&#8226; Общая форма шаблона класса, содержащего аргументы на алгоритмическом языке С++  </p>
<pre class="highlight"><code data-language="c">template &#60;class T, type1 var1, type2 var2, ..., typeN varN&#62;
class ClassName
{
	// тело шаблона класса
	// ...
};</code></pre>
<p class="">
<code class="highlight">T</code> – некоторый обобщенный тип данных;<br>
<code class="highlight">type1</code>, <code class="highlight">type2</code>, …, <code class="highlight">typeN</code> – конкретные типы аргументов с именами <code class="highlight">var1</code>, 
<code class="highlight"></code>var1, <code class="highlight">var2</code>, …, <code class="highlight">varN</code> – имена аргументов, которые используются в шаблоне класса.
</p>
<p class="">&#8226; Общая форма объявления объекта шаблонного класса, содержащего один аргумент на алгоритмическом языке С++  </p>
<pre class="highlight"><code data-language="c">ClassName &#60;type, arg&#62; ObjName;</code></pre>
<p class="">
<code class="highlight">ClassName</code> – имя шаблонного класса;<br>
<code class="highlight">type</code> –тип данных, для которого формируется реальный класс;<br>
<code class="highlight">arg</code> – значение аргумента, которое используется в шаблоне класса;<br>
<code class="highlight">objName</code> – имя объекта шаблонного класса.
</p>
<p class="">&#8226; Пример использования шаблона класса, принимающего один аргумент на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">template &#60; int ArrayLength, typename SomeValueType &#62; 
class SomeClass {
	SomeValueType SomeValue;
	SomeValueType SomeArray[ArrayLength];
	...
};

SomeClass &#60; 20, int &#62; SomeVariable; //первый объект класса SomeClass - тип int, 20 элементов
SomeClass &#60; 30, double&#62; SomeVariable2; //второй объект класса SomeClass - тип    double, 30 элементов
</code></pre>
<h2 id="4">4. Список литературы:</h2>
<ol>
    <li>Стивен Прата. Язык программирования С++. Лекции и упражнения, 2012. – 187 с.</li>
    <li>Функции шаблона. Ключевые слова шаблон, класс, имя типа . Явная специализация шаблонов. [Электронный ресурс], 2018. URL: <a href="https://www.bestprog.net/en/2018/10/08/generalization-in-functions-template-functions-keywords-template-class-typename-explicit-specialization-of-template-function-overloading-of-template-function/" target="_blank">https://www.bestprog.net/en/2018/10/08/generalization-in-functions-template-functions-keywords-template-class-typename-explicit-specialization-of-template-function-overloading-of-template-function/</a>  (дата обращения 20.03.2020).</li>
    <li>Дэвид Вандевурд, Николаи М. Джосаттис, Дуглас Грегор. Шаблоны C++. Справочник разработчика 2-е издание, 2018. – 37 с.</li>
</ol>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>