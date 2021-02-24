<?php
include ("index.config.php");
include ($r_base."assets/php_modules/addons.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include ($r_base."assets/php_modules/head.tpt.php"); ?>
    <link rel="stylesheet" href="assets/css/main-page.css">
</head>
<body>
<div class='container-fluid'>
<?php include ($r_base."assets/php_modules/header.tpt.php"); ?>  
<div class="row">
<?php include ($r_base."assets/php_modules/index.aside.tpt.php"); ?>
<main class="col-md col-lg col-xl markdown-body">
<div class="col-md">
    <div class="block__text">
        <h2 style="border: hidden; color: rgba(0, 0, 0, 0.5);">
            I курс | Группы: 
        </h2>
        <h2 style="border: hidden; font-size: 34px;" class="d-none">
            Начало занятий с 18 марта
        </h2>
        <h3>Дисциплины:</h3>
        <p style="font-weight: normal; font-size: 18px;">
            &#8195;&#8226; Алгоритмизация и программирование
            <br>
            &#8195;&#8226; Теория алгоритмов и структуры данных
            <br>
            &#8195;&#8226; Информатика
        </p>
    </div>
</div>
<hr>
<div class="col-lg-12 col-xl-7 col-xxl-4 float-left">
    <div class="block">
        <h2>Ведущий преподаватель</h2>
        <div class="row">
            <div class="col-10">
                <img src="assets/img/photo_OA.jpg" alt="photo_OA.jpg" class="photo-img rounded-circle">
                <h3>Полякова Ольга Андреевна</h3>
                Доцент кафедры "Информационные Технологии и Автоматизированные Системы"
            </div>
            <div class="col-1 mt-4">
                <a href="tel:+79024716845" title="+7 (902) 471-68-45" class="show-phone-number clearfix"><i class="fas fa-phone-alt"></i></a>
                <a href="mailto:olgastratum@mail.ru" title="mailto:olgastratum@mail.ru" class="clearfix"><i class="fas fa-at"></i></a> 
                <a href="https://wa.me/79024716845" title="https://wa.me/79024716845" class="clearfix"><i class="fab fa-whatsapp"></i></a>
                <a href="skype:polyakovainnotech" title="skype:polyakovainnotech" class="clearfix"><i class="fab fa-skype"></i></a>
            </div>
        </div>
        
        
        <h3>Сообщения студентам</h3>
        <div class="block__spollers spollers mb-2">
            <div class="spollers__item">
                <div id="message2703" class="spollers__title spoller closeall">от 27&nbsp; марта&nbsp; 2020 <i class="fas fa-angle-down align-bottom"></i></div>
                <div class="spollers__text text-justify">
                <p class="lead">Заголовок</p>
                <p>Параграф с текстом</p>
                <p>Параграф с текстом</p>
                </div>
            </div>
            <div class="spollers__item">
                <div class="spollers__title spoller closeall">от &nbsp;9&nbsp; апреля 2020 <i class="fas fa-angle-down align-bottom"></i><span class="badge badge-primary d-none">Новое!</span></div>
                <div class="spollers__text text-justify">
                <p class="lead">Добрый вечер, коллеги!</p>
                <p>Параграф с текстом</p>
                <p>Параграф с текстом</p>
                </div>
            </div>
                    </div>
    </div>
</div>
<div class="col-lg-12 col-xl-5 col-xxl-3 float-right">
    <div class="block">
        <h2 class="mb-2">Лидеры</h2>
        <img src="assets/img/photo_blank.svg" alt="photo" class="photo-img rounded-circle">
        <h3>студент</h3>
        <!--<a href="https://vk.com/pyfork" title="vk.com/pyfork"><i class="fab fa-vk"></i></a>
        <a href="discord:pyfork#2699" title="discord:pyfork#2699"><i class="fab fa-discord"></i></a>pyfork#2699-->
        <div class="clearfix"></div>
        <img src="assets/img/photo_blank.svg" alt="photo" class="photo-img rounded-circle">
        <h3>студент</h3>
        <!--<a href="https://vk.com/pyfork" title="vk.com/pyfork"><i class="fab fa-vk"></i></a>
        <a href="discord:pyfork#2699" title="discord:pyfork#2699"><i class="fab fa-discord"></i></a>pyfork#2699-->
        <div class="clearfix"></div>
        
    </div>
</div>

<div class="col-lg-12 col-xl-7 col-xxl-5 float-left float-xxl-right">

    <div class="block">
    <h2 class="mb-2">Список лабораторных работ</h2>
        <table class="">
            <thead>
                <tr>
                    <th>
                        №
                    </th>
                    <th>
                        Названия лабораторных работ
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="position-relative">
                        <p>6 (5э)</p>
                    </td>
                    <td class="position-relative">
                        <p>Динамические массивы</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>7 (4э)</p>
                    </td>
                    <td class="position-relative">
                        <p>Функции и массивы</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>8 (8з)</p>
                    </td>
                    <td class="position-relative">
                        <p>Структуры данных</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>9 (7.4э)</p>
                    </td>
                    <td class="position-relative">
                        <p>Нелинейные уравнения (4-й столбец ЛР7э)</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>10 (7.1–7.3э)</p>
                    </td>
                    <td class="position-relative">
                        <p>Работа с функциями (1–3-й столбцы ЛР7э)</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>11</p>
                    </td>
                    <td class="position-relative">
                        <p>Методы сортировки массивов: вставки, обмена и выбора </p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>12</p>
                    </td>
                    <td class="position-relative">
                        <p>Задача о расстановке восьми ферзей</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>13</p>
                    </td>
                    <td class="position-relative">
                        <p>Рекурсивные функции</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>14.1 (8э)</p>
                    </td>
                    <td class="position-relative">
                        <p>Одно- и двунаправленные списки (через структуры, 1-2 столбцы)</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>14.2 (8э)</p>
                    </td>
                    <td class="position-relative">
                        <p>Стеки и очереди через структуры (через структуры, 1-2 столбцы)</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <p>15</p>
                    </td>
                    <td class="position-relative">
                        <p>Сортировка стека через stl-контейнеры</p>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                    <a href="materials/search-methods/lab/" class="stretched-link"><p>16 (9э)</p></a>
                    </td>
                    <td class="position-relative">
                    <a href="materials/search-methods/lab/" class="stretched-link"><p>Методы поиска: Бойера-Мура и интерполяции</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/sort-methods/lab/" class="stretched-link"><p>17 (9э)</p></a>
                    </td>
                    <td class="position-relative">
                    <a href="materials/sort-methods/lab/" class="stretched-link"><p>Методы сортировки массивов данных: подсчётом и быстрая</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/hash-table/lab/" class="stretched-link"><p>18 (9э)</p></a>
                    </td>
                    <td class="position-relative">
                    <a href="materials/hash-table/lab/" class="stretched-link"><p>Поиск данных с помощью хэш-таблиц</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/binary-tree/lab/" class="stretched-link"><p>19</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/binary-tree/lab/" class="stretched-link"><p>Бинарные деревья</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                    <a href="materials/classes/lab/" class="stretched-link"><p>20 (1-2к)</p></a>
                    </td>
                    <td class="position-relative">
                    <a href="materials/classes/lab/" class="stretched-link"><p>Классы и объекты. Инкапсуляция, конструкторы</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/inheritance/lab/" class="stretched-link"><p>21 (4-5к)</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/inheritance/lab/" class="stretched-link"><p>Наследование. Полиморфизм. Абстрактные классы. Виртуальные методы</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/overload/lab/" class="stretched-link"><p>22 (3к)</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/overload/lab/" class="stretched-link"><p>Перегрузка операций</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                     <a href="materials/containers/lab/" class="stretched-link"><p>23 (6к)</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/containers/lab/" class="stretched-link"><p>АТД. Контейнеры</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/class-template/lab/" class="stretched-link"><p>24 (7к)</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/class-template/lab/" class="stretched-link"><p>Шаблоны классов</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                    <a  href="materials/events/lab/" class="stretched-link"><p>25 (8к)</p></a>
                    </td>
                    <td class="position-relative">
                    <a  href="materials/events/lab/" class="stretched-link"><p>Программы, управляемые событиями</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                    <a href="materials/exceptions/lab/" class="stretched-link"><p>26 (9к)</p></a>
                    </td>
                    <td class="position-relative">
                    <a href="materials/exceptions/lab/" class="stretched-link"><p>Обработка исключений</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                    <a href="materials/stream/lab/" class="stretched-link"><p>27 (10к)</p></a>
                    </td>
                    <td class="position-relative">
                    <a href="materials/stream/lab/" class="stretched-link"><p>Сохранение данных в файле с использованием потоков</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/stl/lab/" class="stretched-link"><p>28 (11к)</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/stl/lab/" class="stretched-link"><p>Последовательные контейнеры библиотеки STL</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/uml/lab/" class="stretched-link"><p>29 (12к)</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/uml/lab/" class="stretched-link"><p>Построение UML-диаграмм</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/trees/lab/" class="stretched-link"><p>30</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/trees/lab/" class="stretched-link"><p>АТД. Деревья</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/graphs/lab/" class="stretched-link"><p>31</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/graphs/lab/" class="stretched-link"><p>Графы</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a class="stretched-link"><p>32</p></a>
                    </td>
                    <td class="position-relative">
                        <a class="stretched-link"><p>Задача коммивояжёра</p></a>
                    </td>
                </tr>
                <tr>
                    <td class="position-relative">
                        <a href="materials/creative-calculator/" class="stretched-link"><p>33</p></a>
                    </td>
                    <td class="position-relative">
                        <a href="materials/creative-calculator/" class="stretched-link"><p>Творческая работа «Разработка калькулятора с использованием Windows Forms»</p></a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

<div class="col-12 col-xl-5 col-xxl-4 float-left float-xl-right float-xxl-left">
    <div class="block">
        <h2 class="mb-2">Расписание занятий</h2>
        
    </div>
</div>
<div class="col-lg-12 col-md-12 float-right d-none">
    <div class="block">
        <h2 class="mb-2">Результаты дистанционного обучения</h2>
        <div class="container-fluid" id="calendar-table">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
            <?php 
            $day = 3;
            $i = 2;
            $a = array_diff(scandir('assets/timetable/4/'), array('..', '.'));
            while ($a[$i] != "resources") {
                if ($day == 1) { ?>
            <div class="row">
                <?php }
                if (substr($a[$i], 0, 2) == '01') {
                    $month = 'января';
                } elseif (substr($a[$i], 0, 2) == '02') {
                    $month = 'февраля';
                } elseif (substr($a[$i], 0, 2) == '03') {
                    $month = 'марта';
                } elseif (substr($a[$i], 0, 2) == '04') {
                    $month = 'апреля';
                } elseif (substr($a[$i], 0, 2) == '05') {
                    $month = 'мая';
                } elseif (substr($a[$i], 0, 2) == '06') {
                    $month = 'июня';
                } elseif (substr($a[$i], 0, 2) == '07') {
                    $month = 'июля';
                }
                ?>
               <div class="col"><a id="<?php echo 'd'.substr($a[$i], 3, 2).substr($a[$i], 0, 2) ?>" href="#calendar" class="box pl" data-src='<?php echo $a[$i] ?>'><div class="inner-text__under"><?php echo $month ?> 2020</div><div class="inner-text"><?php echo substr($a[$i], 3, 2) ?></div></a></div>
                <?php
                if ($day == 7) {?>
            </div>
                <?php
                $day = 0;
                }
                $day = $day + 1;
                $i = $i + 1;
            }
            ?>
        </div>
    </div>
</div>
<div class="popup popup-calendar ms_1">
	<div class="popup-table table">
		<div class="cell">
			<div class="popup-content">
				<div class="popup-close"></div>
				<div class="popup__title">18 декабря 2020</div>
				<iframe src="" frameborder="0" id="calendar-pop-iframe"></iframe>
			</div>
		</div>
	</div>
</div>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
<script src="assets/js/main_page.js"></script>
</body>
</html>