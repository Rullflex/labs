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
<h2 id="1">1. Постановка задачи</h2>
<ol>
    <li>Определить шаблон класса-контейнера (см. лабораторную работу №23). </li>
    <li>Реализовать конструкторы, деструктор, операции ввода-вывода, операцию присваивания. </li>
    <li>Перегрузить операции, указанные в варианте. </li>
    <li>Инстанцировать шаблон для стандартных типов данных (int, float, double).</li>
    <li>Написать тестирующую программу, иллюстрирующую выполнение операций для контейнера, содержащего элементы стандартных типов данных. </li>
    <li>Реализовать пользовательский класс (см. лабораторную работу №22). </li>
    <li>Перегрузить для пользовательского класса операции ввода-вывода.</li>
    <li>Перегрузить операции необходимые для выполнения операций контейнерного класса. </li>
    <li>Инстанцировать шаблон для пользовательского класса. </li>
    <li>Написать тестирующую программу, иллюстрирующую выполнение операций для контейнера, содержащего элементы пользовательского класса.</li>
</ol>
<h2 id="2">2. Варианты заданий</h2>
<table class="">
<thead>
    <tr>
        <th>
            №
        </th>
        <th>
            Класс-контейнер
        </th>
        <th>
            Пользовательский класс
        </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
+ число – добавляет константу ко всем элементам вектора
</td>
        <td>Time для работы с временными интервалами. Интервал
должен быть представлен в виде двух полей: минуты типа int и секунды типа int. при выводе минуты отделяются от секунд двоеточием
</td>
    </tr>
    <tr>
        <td>2</td>
        <td>ВЕКТОР с элементами типа int.
Реализовать операции:
[]– доступа по индексу;
int() – определение размера вектора;
+ вектор – сложение элементов векторов a[i]+b[i]
</td>
        <td>Time для работы с временными интервалами. Интервал
должен быть представлен в виде двух полей: минуты типа int и секунды типа int. при выводе минуты отделяются от секунд двоеточием
</td>
    </tr>
    <tr>
        <td>3</td>
        <td>ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
+ вектор – сложение элементов векторов a[i]+b[i];
+ число – добавляет константу ко всем элементам вектора
</td>
        <td>Time для работы с временными интервалами. Интервал
должен быть представлен в виде двух полей: минуты типа int и секунды типа int. при выводе минуты отделяются от секунд двоеточием
</td>
    </tr>
    <tr>
        <td>4</td>
        <td>ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
* число – умножает все элементы вектора на число
</td>
        <td>Time для работы с временными интервалами. Интервал
должен быть представлен в виде двух полей: минуты типа int и секунды типа int. при выводе минуты отделяются от секунд двоеточием
</td>
    </tr>
    <tr>
        <td>5</td>
        <td>ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера вектора;
* вектор – умножение элементов векторов a[i]*b[i]
</td>
        <td>Time для работы с временными интервалами. Интервал должен быть представлен в виде двух полей: минуты типа int и секунды типа int. при выводе минуты отделяются от секунд двоеточием</td>
    </tr>
    <tr>
        <td>6</td>
        <td>МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера множества;
+ – объединение множеств
</td>
        <td>Money для работы с денежными суммами. Число должно быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой.</td>
    </tr>
    <tr>
        <td>7</td>
        <td>МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера вектора;
* – пересечение множеств
</td>
        <td>Money для работы с денежными суммами. Число должно быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой</td>
    </tr>
    <tr>
        <td>8</td>
        <td>МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
== - проверка на равенство;
> число – принадлежность числа множеству
</td>
        <td>Money для работы с денежными суммами. Число должно быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой</td>
    </tr>
    <tr>
        <td>9</td>
        <td>МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
!= - проверка на неравенство;
< число – принадлежность числа множеству
</td>
        <td>Money для работы с денежными суммами. Число должно быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой</td>
    </tr>
    <tr>
        <td>10</td>
        <td>МНОЖЕСТВО с элементами типа int. Реализовать операции: [] – доступа по индексу; () – определение размера вектора; - – разность множеств</td>
        <td>Money для работы с денежными суммами. Число должно быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой</td>
    </tr>
    <tr>
        <td>11</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[]– доступа по индексу;
int() – определение размера списка;
+ вектор – сложение элементов списков a[i]+b[i];
</td>
        <td>Money для работы с денежными суммами. Число должно
быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой
</td>
    </tr>
    <tr>
        <td>12</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
+ число – добавляет константу ко всем элементам вектора
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием</td>
    </tr>
    <tr>
        <td>13</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
+ вектор – сложение элементов списков a[i]+b[i];
+ число – добавляет константу ко всем элементам списка;
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием.</td>
    </tr>
    <tr>
        <td>14</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера списка;
* число – умножает все элементы списка на число;
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием.</td>
    </tr>
    <tr>
        <td>15</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера списка;
* вектор – умножение элементов списков a[i]*b[i];
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием.</td>
    </tr>
    <tr>
        <td>16</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
+ вектор – сложение элементов списков a[i]+b[i];
+ число – добавляет константу ко всем элементам списка;
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием.</td>
    </tr>
    <tr>
        <td>17</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера списка;
* число – умножает все элементы списка на число;
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием.</td>
    </tr>
    <tr>
        <td>18</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера списка;
* вектор – умножение элементов списков a[i]*b[i];
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием.</td>
    </tr>
    <tr>
        <td>19</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
+ число – добавляет константу ко всем элементам вектора
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием</td>
    </tr>
    <tr>
        <td>20</td>
        <td>ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
+ число – добавляет константу ко всем элементам вектора
</td>
        <td>Time для работы с временными интервалами. Интервал
должен быть представлен в виде двух полей: минуты типа int и секунды типа int. при выводе минуты отделяются от секунд двоеточием
</td>
    </tr>
    <tr>
        <td>21</td>
        <td>ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
+ вектор – сложение элементов векторов a[i]+b[i];
+ число – добавляет константу ко всем элементам вектора
</td>
        <td>Time для работы с временными интервалами. Интервал
должен быть представлен в виде двух полей: минуты типа int и секунды типа int. при выводе минуты отделяются от секунд двоеточием
</td>
    </tr>
    <tr>
        <td>22</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[]– доступа по индексу;
int() – определение размера списка;
+ вектор – сложение элементов списков a[i]+b[i];
</td>
        <td>Money для работы с денежными суммами. Число должно
быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой
</td>
    </tr>
    <tr>
        <td>23</td>
        <td>МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
!= - проверка на неравенство;
< число – принадлежность числа множеству
</td>
        <td>Money для работы с денежными суммами. Число должно быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой</td>
    </tr>
    <tr>
        <td>24</td>
        <td>СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера списка;
* вектор – умножение элементов списков a[i]*b[i];
</td>
        <td>Pair (пара чисел). Пара должна быть представлено двумя полями: типа int для первого числа и типа double для второго. Первое число при выводе на экран должно быть отделено от второго числа двоеточием.</td>
    </tr>
    <tr>
        <td>25</td>
        <td>МНОЖЕСТВО с элементами типа int. Реализовать операции: [] – доступа по индексу; () – определение размера вектора; - – разность множеств</td>
        <td>Money для работы с денежными суммами. Число должно быть представлено двумя полями: типа long для рублей и типа int для копеек. Дробная часть числа при выводе на экран должна быть отделена от целой части запятой</td>
    </tr>
</tbody>
</table>
<h2 id="3">3. Содержание отчета</h2>
<ol>
    <li>Постановка задачи (общая и конкретного варианта). </li>
    <li>Описание параметризированного класса-контейнера. </li>
    <li>Определение компонентных функций. </li>
    <li>Описание пользовательского класса и его компонентных функций </li>
    <li>Функция main(). </li>
    <li>Объяснение результатов работы программы. </li>
    <li>Ответы на контрольные вопросы.</li>
</ol>
<?php
if ($sendwork_off == false) { ?>
    <h2 id="4">4. Отправить результат работы</h2>
    <?php include ($r_base."assets/php_modules/form_sendwork.tpt.php"); 
}
?>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>