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


<h2>Постановка задачи:</h2>
<ol>
<li>Сформировать идеально сбалансированное бинарное дерево</li>
<li>Распечатать полученное дерево посредствам OpenGL. Печать &ndash; вертикальная.</li>
<li>Выполнить задание в соответствии с вариантом, вывести полученный результат.</li>
<li>Интерфейс разработать посредством Windows Forms.</li>
</ol>
<div class="alert alert-warning">Обучающий материал по Windows Forms <a href="materials/win-forms/" class="alert-link">по этой ссылке</a></div>
<h2>Варианты заданий</h2>
<table>
<tbody>
<tr>
<td>
<p>Вариант</p>
</td>
<td width="249">
<p>Вид данных</p>
</td>
<td width="435">
<p>Операции</p>
</td>
</tr>
<tr>
<td>
<p>1</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева), найти величину наибольшего элемента дерева, напечатать элементы из всех листьев дерева, найти длину пути от корня до ближайшей вершины с элементом Е.</p>
</td>
</tr>
<tr>
<td>
<p>2</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева), определить максимальную глубину о дерева, определить есть&nbsp; ли в дереве&nbsp; хотя бы 2 одинаковых элемента, определить входит ли элемент Е в дерево, если таких элементов несколько, то определить число вхождений элемента Е в дерево.&nbsp;</p>
</td>
</tr>
<tr>
<td>
<p>3</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево Т, распечатать его (в виде дерева), построить&nbsp; и напечатать по уровням дерево поиска Т1 для дерева Т, удалить из непустого дерева Т все четные элементы, найти количество вершин на n-ом уровне непустого дерева Т (корень - вершина 0 уровня).</p>
</td>
</tr>
<tr>
<td>
<p>4</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Составить программу, которая содержит текущую информацию о книгах в библиотеке. Сведения о книгах содержат:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; номер УДК;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; фамилию и инициалы автора;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; название;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; год издания;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; количество экземпляров в библиотеке.</p>
<p>Программа должна обеспечить:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; начальное формирование данных обо всех книгах в виде бинарного дерева;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; добавление данных о книгах, поступающих в библиотеку;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; удаление данных о списываемых книгах;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; выдачу данных о наличии в библиотеке требуемой книги.</p>
</td>
</tr>
<tr>
<td>
<p>5</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Составить программу, которая формирует англо-русский словарь. Словарь должен содержать английское слово, русское слово и количество обращений к слову. Программа должна:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; обеспечить начальный ввод словаря (по алфавиту) с конкретными значениями счетчиков обращений;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; формирует новое дерево, в котором слова отсортированы не по алфавиту, а по количеству обращений.</p>
<p>Пользователь должен иметь возможность добавлять новые слова, удалять существующие, выполнять писк нужного слова, выполнять просмотр обоих вариантов словаря</p>
</td>
</tr>
<tr>
<td>
<p>6</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td width="435">
<p>Автоматизированная информационная система на железнодорожном вокзале содержит сведения об отправлении поездов дальнего следования. Для каждого поезда указывается:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; номер поезда;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; станция назначения;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; время отправления.</p>
<p>Составить программу, которая</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; обеспечивает первоначальный ввод данных в информационную систему и формирование дерева;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; производит вывод всего дерева;</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; вводит номер поезда и выводит данные об этом поезде;</p>
<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; вводит название станции назначения и выводит данные о всех поездах, которые следуют до этой станции.</p>
</td>
</tr>
<tr>
<td>
<p>7</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Составить программу, которая содержит динамическую информацию о наличии автобусов в автобусном парке. Сведения о каждом автобусе включают</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; номер автобуса;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; фамилию и инициалы водителя;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; номер маршрута.</p>
<p>Программа должна обеспечивать:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; начальное формирование данных обо всех автобусах в парке в виде дерева;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; при выезде каждого автобуса из парка вводится номер автобуса, и программа удаляет данные об этом автобусе из списка автобусов, находящихся в парке, и записывает эти данные в список автобусов, находящихся на маршруте;</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; по запросу выдаются сведения об автобусах, находящихся в парке, или об автобусах, находящихся на маршруте.</p>
</td>
</tr>
<tr>
<td>
<p>8</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Составить программу, которая содержит текущую информацию о заявках на авиабилеты. Каждая заявка включает:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; пункт назначения;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; номер рейса;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; фамилию и инициалы пассажира;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; желаемую дату вылета.</p>
<p>Программа должна обеспечивать:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; хранение всех заявок в виде дерева;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; добавление и удаление заявок;</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; по заданным номеру рейса и дате вылета вывод заявок с их последующим удалением;</p>
<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; вывод всех заявок.</p>
</td>
</tr>
<tr>
<td>
<p>9</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Англо-русский словарь построен в виде двоичного дерева. Каждый компонент содержит английское слово, соответствующее ему русское слово и счетчик количества обращений к данному компоненту.</p>
<p>Первоначально дерево формируется в порядке английского алфавита. В процессе эксплуатации словаря при каждом обращении к компоненту к счетчику обращений добавляется единица. Написать программу, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; обеспечивает начальный ввод словаря с конкретными значениями счетчиков обращений;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; формирует новое представление словаря в виде двоичного дерева по следующему алгоритму: производит вывод исходного и нового словарей;</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; обеспечивает диалог с помощью меню и контроль ошибок при вводе.</p>
</td>
</tr>
<tr>
<td>
<p>10</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>На междугородной телефонной станции картотека абонентов, содержащая сведения о телефонах и их владельцах, организована в виде двоичного дерева. Написать программу, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; обеспечивает начальное формирование картотеки в виде двоичного дерева;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; производит вывод всей картотеки;</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; вводит номер телефона и время разговора;</p>
<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; выводит извещение на оплату телефонного разговора;</p>
<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; обеспечивает диалог с помощью меню и контроль ошибок при вводе.</p>
</td>
</tr>
<tr>
<td>
<p>11</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева).</p>
<p>Описать функцию, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; находит в непустом дереве Т длину (число ветвей) пути от корня до ближайшей вершины с записью Е; если Е не входит в Т, то за ответ принять -1.</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; определяет максимальную глубину непустого дерева Т, т.е. число ветвей в самом длинном из путей от корня дерева до листьев.</p>
</td>
</tr>
<tr>
<td>
<p>12</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева).</p>
<p>Описать функцию, которая:</p>
<p>1. присваивает переменной b типа char значение:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; К - если вершина - корень</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; П - если вершина - промежуточная вершина,</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Л - если вершина - лист;</p>
<p>2. распечатывает атрибуты всех вершин дерева.</p>
</td>
</tr>
<tr>
<td>
<p>13</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева).</p>
<p>Описать функцию, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; вставляет узел с записью Е в дерево, если ранее такой не было;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; удалить ее, если она уже существует.</p>
</td>
</tr>
<tr>
<td>
<p>14</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева).</p>
<p>Описать функцию, которая</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; печатает запись, встречающуюся в дереве один раз;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; печатает запись, встречающееся в дереве максимальное число раз.</p>
</td>
</tr>
<tr>
<td>
<p>15</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева).</p>
<p>Описать функцию, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; определяет, входит ли вершина с записью Е в дерево Т;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; если такая запись не найдена, то она добавляется.</p>
</td>
</tr>
<tr>
<td>
<p>16</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Составить программу, которая содержит динамическую информацию о наличии свободных мест на парковке. Сведения о каждом транспортном средстве включают</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; номер ТС;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; тип ТС (автомобиль, мотоцикл, &hellip;);</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Марка и модель ТС.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Номер места на парковке</p>
<p>Программа должна обеспечивать:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; начальное формирование данных обо всех ТС на парковке в виде дерева;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; начальное формирование мест на парковке в виде дерева. Парковка многоэтажная, следующий этаж открывается после заполнения предыдущего хотя-бы на 70%.</p>
<p>Парковка имеет вид воронки. Мест на следующем этаже больше в 2 раза чем на предыдущем.</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; при выезде каждого ТС с парковки вводится номер ТС, и программа удаляет данные об этом автобусе из списка ТС, находящихся на парковке, и записывает освободившиеся места парковки в соответствующее дерево.</p>
<p>по запросу выдаются сведения об ТС, находящихся на парковке, или об парковочных местах, открытых для использования.</p>
</td>
</tr>
<tr>
<td>
<p>17</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>В одном компьютерном клубе информация о клиентах организована в виде двоичного дерева.</p>
<p>Информация представленная БД:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ф.И.О. клиента.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Номер его счёта.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Время, наигранное в клубе.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Остаток денежных средств на счёте.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Название любимой игры (в которую наиграно наибольшее количество часов).</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Количество часов, наигранных в любимую игру.</p>
<p>Написать программу, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; обеспечивает начальное формирование базы данных в виде двоичного дерева;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; производит вывод всей базы данных;</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ф.И.О. клиента и его номер счёта;</p>
<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Выводит название любимой игры и количество часов, сыгранных в неё;</p>
<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; обеспечивает диалог с помощью меню.</p>
</td>
</tr>
<tr>
<td>
<p>18</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Составить программу, которая содержит текущую информацию о заявках на ж/д билеты. Каждая заявка включает:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; пункт назначения;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; номер рейса;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; продолжительность рейса;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; фамилию и инициалы пассажира;</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; желаемую дату отправления.</p>
<p>Программа должна обеспечивать:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; хранение всех заявок в виде дерева;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; добавление и удаление заявок;</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; по заданным номеру рейса и дате отправления вывод заявок, к выводу заявок добавить расчётное время прибытия к месту назначения. Вывод всех заявок.</p>
</td>
</tr>
<tr>
<td>
<p>19</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева).</p>
<p>Описать функцию, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; вставляет узел с записью Е в дерево, если ранее такой не было;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; удалить ее, если она уже существует.</p>
</td>
</tr>
<tr>
<td>
<p>20</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Составить базу данных (далее БД) для магазина цифровой дистрибьюции в виде бинарного дерева.</p>
<p>Информация о товаре:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Номер товара.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Наименование товара.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Количество единиц в наличии.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Цена в рознице.</p>
<p>Написать программу, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Обеспечивает начальное формирование БД.</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Выводит БД на печать.</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; По номеру товара выводит всю информацию о нём.</p>
<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Обеспечивает возможность добавлять и удалять целые позиции товаров.</p>
</td>
</tr>
<tr>
<td>
<p>21</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Новый wi-fi роутер ведёт учёт информации о подключённых клиентах с момента его подключения в виде бинарного дерева.</p>
<p>Роутер хранит:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Выделенный ip-адрес клиента.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Время первого подключения.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Количество информации, переданной клиенту (в кБайт).</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Количество информации, полученной от клиента.</p>
<p>Написать программу, которая:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Обеспечивает формирование дерева клиентов.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; По введённому ip-адресу возвращает всю доступную информацию о клиенте.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Выводит бинарное дерево на печать.</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Позволяет удалить информацию о выбранном клиенте.</p>
</td>
</tr>
<tr>
<td>
<p>22</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево Т, распечатать его (в виде дерева), построить&nbsp; и напечатать по уровням дерево поиска Т1 для дерева Т, удалить из непустого дерева Т все четные элементы, найти количество вершин на n-ом уровне непустого дерева Т (корень - вершина 0 уровня).</p>
</td>
</tr>
<tr>
<td>
<p>23</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева).</p>
<p>Описать функцию, которая</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Печатает запись, встречающуюся в дереве один раз;</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Печатает запись, встречающееся в дереве максимальное число раз.</p>
<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Печатает запись, встречающуюся в дереве заданное количество раз.</p>
</td>
</tr>
<tr>
<td>
<p>24</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, распечатать его (в виде дерева).</p>
<p>Описать функцию, которая:</p>
<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; находит в непустом дереве Т длину (число ветвей) пути от корня до ближайшей вершины с записью Е; если Е не входит в Т, то за ответ принять -228.</p>
<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; определяет максимальную глубину непустого дерева Т, т.е. число ветвей в самом длинном из путей от корня дерева до листьев.</p>
</td>
</tr>
<tr>
<td>
<p>25</p>
</td>
<td width="249">
<p>Бинарное дерево</p>
</td>
<td width="435">
<p>Создать идеально сбалансированное дерево, содержащее названия стран. Распечатать его (в виде дерева).</p>
<p>Описать функцию, которая:</p>
<p>1. присваивает переменной b типа char значение:</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; К - если вершина - корень</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; П - если вершина - промежуточная вершина,</p>
<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Л - если вершина - лист;</p>
<p>2. распечатывает атрибуты всех вершин дерева.</p>
</td>
</tr>
</tbody>
</table>
<p><strong>&nbsp;</strong></p>
<h2>Содержание отчёта:</h2>
<ol>
<li>Постановка задачи(общая и конкретного варианта).<br /> 2. Описание класса бинарного дерева.<br /> 3. Определение функций для работы с бинарными деревьями(акцент на необходимых для решения задачи по варианту).<br /> 4. Функция main().<br /> 5. Описание алгоритма вертикальной печати дерева с помощью OpenGL.<br /> 6. Изображение вертикально распечатанного дерева.<br /> 7. Изображение и описание интерфейса Windows Forms.<br /> 8. Объяснение результатов выполнения работы программы.</li>
</ol>
<p>&nbsp;</p>


<!-- У отправки поменять только id и номер -->
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