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
<p class="text-justify">&#8226; <b>Перегрузка операций</b> - это пример использования полиморфизма в С++.</p>
<p class="text-justify">&#8226; Язык С++ позволяет распространить перегрузку операций на пользовательские типы, разрешая, скажем, применять символ <code class="highlight">«+»</code> для сложения двух объектов. </p>
<p class="text-justify">&#8226; Для перегрузки операций используется специальная форма функции, называемая функцией операции. Функция операции имеет следующую форму, в которой <code class="highlight">op</code> – это символ перегружаемой операции, а <code class="highlight">тип</code> – тип возвращаемого функцией значения: </p>
<ul>
	<li>тип operator op(список-аргументов);</li>
</ul>
<p class="text-justify">&#8226; Например, operator+(…) перегружает операцию сложения, а operator*() – операцию умножения. Операция op должна быть допустимой операцией в С++, а не произвольным символом. Например, объявить функцию операции operator@() невозможно, т.к. в С++ не существует операции «@». [1]</p>
<p class="text-justify">&#8226; Подразделы данной лекции:</p>
<ol>
	<li>Операция – как глобальная функция;</li>
	<li>Операция – как метод класса;</li>
	<li>Правила перегрузок;</li>
	<li>Разрешение неоднозначностей перегрузок;</li>
	<li>Перегрузка инкрементирующих операций;</li>
	<li>Перегрузка присваивающих операций;</li>
	<li>Перегрузка ввода/вывода.</li>
</ol>
<h2 id="1">1. Операция – как глобальная функция</h2>
<p class="text-justify">&#8226; Для начала следует определить пользовательский тип. Пусть это будет структурный тип <code class="highlight">Point</code>.</p>
<pre class="highlight"><code data-language="c">struct Point // Реализация через структуру
{
	int x, y; // необходимые поля
};</code></pre>
<p class="text-justify">&#8226; Теперь следует перегрузить операцию сложения для созданного типа.</p>
<pre class="highlight"><code data-language="c">// перегрузка операции сложения
Point operator + (Point A, Point B)
{
	Point C;
	C.x = A.x + B.x;
	C.y = A.y + B.y;
	return C;
}</code></pre>
<p class="text-justify">&#8226; Возвращаемое значение представляет из себя новый структурный объект Точка, в которой хранятся координаты равные суммам соответствующих координат Точек-операндов операции сложения.</p>
<h2 id="2">2. Операция – как метод класса</h2>
<p class="text-justify">&#8226; То же самое возможно реализовать через класс.</p>
<pre class="highlight"><code data-language="c">class Point  // Реализация через класс
{
protected:
	int x, y; // свойства класса

public:
	Point(int _x, int _y) : x(_x), y(_y) {};

	// перегрузка операции сложения
	Point operator + (Point);

};</code></pre>
<p class="text-justify">&#8226; Однако в этом случае требуется один параметр - правый операнд, поскольку левым операндом является данный объект, на который указывает <code class="highlight">this</code>.</p>
<pre class="highlight"><code data-language="c">Point Point::operator + (Point B)
{
	Point C(this->x, this->y);
	C.x += B.x;
	C.y += B.y;
	return C;
}
</code></pre>
<p class="text-justify">&#8226; И опять-таки возвращаемый объект – экземпляр класса, будет хранить координаты равные суммам соответствующих координат Точек-операндов операции сложения.</p>
<h2 id="3">3. Правила перегрузок</h2>
<p class="text-justify">&#8226; Использование перегрузки операции имеет некоторые ограничения:</p>
<ul>
	<li>&mdash; нельзя использовать операцию в таком стиле, которая нарушает правила синтаксиса исходной операции. Например, нельзя перегрузить операцию взятия модуля так, чтобы она применялась с одним операндом, например - %x.</li>
	<li>&mdash; перегруженные операции должны иметь, как минимум, один операнд типа, определяемого пользователем. Это предотвращает перегрузку операций, работающих со стандартными типами. То есть переопределить операцию вычитания так, чтобы она вычисляла сумму двух вещественных чисел вместо разности, не получится. </li>
	<li>&mdash; невозможно определить новые символы операций.</li>
	<li>&mdash; для перегрузки операций присваивания =, вызова функции (), индексации [], доступа к членам класса -> через указатель используются только функции-члены.</li>
	<li>&mdash; операции доступа к полям . (точка), к вложенным именам, доступа к полям по указателю, sizeof и некоторые другие не перегружаются. [2]</li>
</ul>
<h2 id="4">4. Разрешение неоднозначностей перегрузок</h2>
<p class="text-justify">&#8226; Теперь необходимо рассмотреть следующий пример все с тем же классом <code class="highlight">Point</code>:</p>
<pre class="highlight"><code data-language="c">class Point  // Неоднозначности перегрузок в классе
{
protected:
	int x, y;

public:
	Point(int _x, int _y) : x(_x), y(_y) {};

	// Две эквивалентные по смыслу перегрузки
	Point operator + (Point);
	friend Point operator + (Point, Point);

};

Point Point::operator + (Point B)
{
	Point C(this->x, this->y);
	C.x += B.x;
	C.y += B.y;
	return C;
}

Point operator + (Point A, Point B)
{
	Point C(A.x, A.y);
	C.x += B.x;
	C.y += B.y;
	return C;
}</code></pre>
<p class="text-justify">&#8226; При дальнейшем вызове операции сложения с двумя операндами типа Point будет возникать ошибка из-за неоднозначности вызова. Таких ситуаций стоит избегать и выбирать только один способ перегрузки. </p>
<h2 id="5">5. Перегрузка инкрементирующих операций</h2>
<p class="text-justify">&#8226; Для перегрузки префиксной и постфиксной форм инкрементирующих операций (как методов класса) существует такие правила:</p>
<ul>
	<li>&mdash; Префиксный инкремент не принимает аргументов и возвращает ссылку на объект;</li>
	<li>&mdash; Постфиксный – всегда принимает неиспользуемый аргумент типа int и возвращает копию первоначального объекта. [3]</li>
</ul>
<p class="text-justify">&#8226; Данные правила иллюстрируются следующим листингом:</p>
<pre class="highlight"><code data-language="c">class Integer  // Перегрузка инкремента
{
protected:
	int num;

public:
	Integer() {};
	Integer(int _num) : num(_num) {};

	// Префиксный и постфиксный инкременты
	Integer& operator ++ (); // Пре-
	Integer operator ++ (int); // Пост-
};

Integer& Integer::operator ++ ()
{
	this->num++;
	return *this;
}

Integer Integer::operator ++ (int)
{
	Integer temp(this->num);
	++(*this);
	return temp;
}</code></pre>
<p class="text-justify">&#8226; Теперь становится возможным инкрементировать объекты данного класса как префиксно, так и постфиксно.</p>
<h2 id="6">6. Перегрузка присваивающих операций</h2>
<p class="text-justify">&#8226; Присваивающие операции всегда принимают объект соответствующего типа и возвращают ссылку на данный объект (<code class="highlight">*this</code>):</p>
<pre class="highlight"><code data-language="c">class Integer  // Перегрузка присваивания
{
protected:
	int num;

public:
	Integer() {};
	Integer(int _num) : num(_num) {};

	// Простое и со сложением
	Integer& operator = (const Integer&);
	Integer& operator += (const Integer&);

	int getNum(); // получение num
};

Integer& Integer::operator = (const Integer& b)
{
	this->num = b.num;
	return *this;
}

Integer& Integer::operator += (const Integer& b)
{
	this->num = this->num + b.num;
	return *this;
}</code></pre>
<p class="text-justify">&#8226; Подобным образом перегружаются операции -=, *=, /=, %=.</p>
<h2 id="7">7. Перегрузка операций ввода/вывода</h2>
<p class="text-justify">&#8226; Операция ввода/вывода могут быть перегружены только, как глобальные функции – дружественные данному классу. </p>
<p class="text-justify">&#8226; Операция ввода принимает ссылку на поток ввода <code class="highlight">ostream</code> и ссылку на объект, возвращает ссылку на объект ввода.</p>
<p class="text-justify">&#8226; Операция вывода принимает ссылку на поток вывода <code class="highlight">istream</code> и константную ссылку на объект, возвращает ссылку на объект вывода. [4]</p>
<pre class="highlight"><code data-language="c">class Integer  // Перегрузка ввода/вывода
{
protected:
	int num;

public:
	Integer() {};
	Integer(int _num) : num(_num) {};

	friend istream& operator >> (istream&, Integer&); // ввод
	friend ostream& operator << (ostream&, const Integer&); // вывод

};

istream& operator >> (istream& in, Integer& a)
{
	in >> (a.num);
	return in;
}

ostream& operator << (ostream& out, const Integer& a)
{
	out << (a.num);
	return out;
}</code></pre>
<p class="text-justify">&#8226; Теперь становится возможным вводить и выводить объекты данного класса.</p>
<p class="text-justify">&#8226; Таким образом, были рассмотрены наиболее употребляемые перегрузки операторов. При необходимости перегрузки нерассмотренных операторов, всегда можно обратиться к справочным руководствам.</p>
<h2 id="8">8. Список использованных источников</h2>
<ol>
	<li>Саттер, Герб. Решение сложных задач на C++, 2017. – 400 c.</li>
	<li>Страуструп, Бьерн. Программирование. Принципы и практика с использованием C++, 2018. – 1328 c. </li>
	<li>Мэйерс, Скотт. Эффективное использование C++. 55 верных способов улучшить структуру и код ваших программ, 2017. – 300 c.</li>
	<li>Лафоре, Роберт. Объектно-ориентированное программирование в C++, 2018. – 928 c.</li>
</ol>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>