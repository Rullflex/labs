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

<h1>Лабораторная работа №33</h1>
<p>&nbsp;</p>
<h2>Постановка задачи</h2>
<p>&nbsp;</p>
<ol>
<li style="font-weight: 400;"><span style="font-weight: 400;">Разработать алгоритм калькулятора в соответствии с заданием.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Реализовать алгоритм в виде программы на алгоритмическом языке С++.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Разработать интерфейс посредством Windows Forms.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Использование анимации, автоматизации, креативной визуализации повышает рейтинг автора проекта и влияет на экзаменационную оценку.</span></li>
</ol>
<p>&nbsp;</p>
<table>
<tbody>
<tr>
<td>
<p><span style="font-weight: 400;">Вариант</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Вид данных</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Операции</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">1</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Курсы валют.</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Изменение курса валют, перевод между долларом, евро и рублем, отмена последней операции, сброс результата.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">2</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Обыкновенные и десятичные дроби.</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Сложение, вычитание, умножение, деление, преобразование десятичной дроби в обыкновенную и обратно, отмена последней операции, сброс результата.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">3</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Комплексные числа в алгебраической, тригонометрической и экспоненциальной формах.</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Сложение, вычитание, умножение, деление, возведение в целую степень, извлечение квадратного корня (по формуле Муавра),&nbsp; преобразование из одной формы в другую, отмена последней операции, сброс результата.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">4</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Даты в российском, американском и английском форматах.</span></p>
</td>
<td>
<p><span style="font-weight: 400;">-дата1-дата2=кол-во месяцев</span></p>
<p><span style="font-weight: 400;">- дата1-дата2=кол-во недель</span></p>
<p><span style="font-weight: 400;">- дата1-дата2=кол-во дней</span></p>
<p><span style="font-weight: 400;">- дата1-дата2=кол-во часов</span></p>
<p><span style="font-weight: 400;">-дата1-дата2=кол-во минут</span></p>
<p><span style="font-weight: 400;">-дата1-дата2=кол-во секунд</span></p>
<p><span style="font-weight: 400;">-дата1 - месяцы = дата2</span></p>
<p><span style="font-weight: 400;">-дата1 - недели = дата2</span></p>
<p><span style="font-weight: 400;">-дата1-дни=дата2</span></p>
<p><span style="font-weight: 400;">-дата1-часы=дата2</span></p>
<p><span style="font-weight: 400;">- дата1 - минуты = дата2</span></p>
<p><span style="font-weight: 400;">-дата1 - секунды = дата2</span></p>
<p><span style="font-weight: 400;">-дата1+месяцы=дата2</span></p>
<p><span style="font-weight: 400;">-дата1+недели=дата2</span></p>
<p><span style="font-weight: 400;">- дата1+дни=дата2</span></p>
<p><span style="font-weight: 400;">- дата1+часы=дата2</span></p>
<p><span style="font-weight: 400;">-дата1+минуты=дата2</span></p>
<p><span style="font-weight: 400;">-дата1+секунды=дата2</span></p>
<p><span style="font-weight: 400;">Обратить внимание на проверку правильности вводимой информации (33 июня не бывает)</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">5</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Обыкновенные дроби в двух формах:</span></p>
<p><span style="font-weight: 400;">- числитель/ знаменатель;</span></p>
<p><span style="font-weight: 400;">-целая часть числитель/знаменатель.</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Сложение, вычитание, умножение, деление, возведение в целую степень, сокращение дроби, обмен местами числителя и знаменателя дроби, смена&nbsp; знака, отмена последней операции, сброс результата.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">6</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Квадратные уравнения (в действительных или комплексных числах)</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Вычисление корней в форме, заданной пользователем.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">7</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Углы, измеряемые в градусной системе мер (1 градус=60 минут, 1 минута=60 секунд)</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Сложение, вычитание, умножение, деление, нахождение тригонометрических и обратных тригонометрических функций, изменение знака угла.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">8</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Выражения со скобками</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Вычисление заданного выражения со скобками, проверка правильности заданного выражения.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">9</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Целые и вещественные числа в различных системах счисления, основания систем счисления взять следующие: 2, 3, 8, 9, 10, 16.</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Перевод чисел из одной системы счисления в другую.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">10</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Логарифмы чисел при различных основаниях.</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Сложение, вычитание, умножение, деление, возведение в степень, переход к другому основанию.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">11</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Многочлены (до 8-ой степени, задаются коэффициенты).</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Сложение, вычитание, умножение, деление, возведение в целую степень, подстановка многочлена вместо переменной в другой многочлен, вычисление значения многочлена.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">12</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Система уравнений с тремя неизвестными (задаются коэффициенты).</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Ввод, хранение уравнений в памяти (до 4 систем), вычисление неизвестных.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">13</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Алгебраические или трансцендентные уравнения (задаются функции, интервалы, на которых есть корень, точность вычислений).</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Решение уравнения методами половинного деления, Ньютона или итераций (в зависимости от выбора пользователя).</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">14</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Интервалы&nbsp; времени (задаются в часах, минутах, секундах).</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Ввод данных, ввод только в часах, минутах или секундах, нахождение величины временного интервала, суммы, разности, преобразование интервала в часы, минуты, секунды.</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">15</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Сумма кредита, годовая ставка по кредиту, срок выплаты кредита.</span></p>
</td>
<td>
<p><span style="font-weight: 400;">Изменение срока выплаты кредита, изменение ставки, вывод общей суммы выплат, вывод суммы переплат,&nbsp; отмена последней операции, сброс результата.</span></p>
</td>
</tr>
</tbody>
</table>
<p><br /><br /></p>
<h2>Содержание отчета</h2>
<p>&nbsp;</p>
<ol>
<li style="font-weight: 400;"><span style="font-weight: 400;">Постановка задачи.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Анализ задачи:&nbsp;</span></li>
<ol>
<li style="font-weight: 400;"><span style="font-weight: 400;">Описание алгоритма работы калькулятора.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Описание структуры программы.</span></li>
</ol>
<li style="font-weight: 400;"><span style="font-weight: 400;">Функция main().</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Тестирование работы калькулятора.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Объяснение результатов работы калькулятора.</span></li>
</ol>
<h2>Видеоролик YouTube </h2>
<p>Записать единый видеоролик для обеих частей творческой работы: решение «Задачи Коммивояжера» и решение задачи «Разработка калькулятора» (Лабораторная работа №33) с экрана монитора при помощи программ Bandicam, OBS, Camtasia или какой-либо другой и загрузить на YouTube. В видеоролике должно быть:</p>
<ol type="circle">
<li>продемонстрирована работа программы с тем вариантом, который был установлен в пункте 1, от задания исходных данных до получения результата;</li>
<li>уделено внимание дизайнерским и конструкторским решениям;</li>
<li>показана и разъяснена UML-диаграмма;</li>
<li>представлены реализации ключевых классов и функций в коде;</li>
<li>рассказано про инструменты, технологии и программы, которые были использованы для создания программы и видеоролика;</li>
<li>подчеркнуты то достижения, которыми гордится автор в своей разработке;</li>
<li>продолжительность видеоролика не должна превышать 10 минут.</li>
</ol>
<p>&nbsp;</p>
<p>Подготовить общий отчет по: проекту &laquo;Решение задачи Коммивояжера&raquo; и &laquo;Разработке калькулятора&raquo;, который будет включать, кроме основных разделов (введение, заключение и так далее), UML-диаграмму с разъяснением реализованных классов, описание используемых инструментов: среды разработки, программы записи видео с экрана монитора, библиотеки, API и другие инструменты, а также - ссылки на используемые источники.</p>
<p>&nbsp;</p>


</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>