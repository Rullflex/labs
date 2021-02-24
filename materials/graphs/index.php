<?php
include ("index.config.php");
include ($r_base."assets/php_modules/addons.php");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
<?php include ($r_base."assets/php_modules/head.tpt.php"); ?>
</head>
<body data-spy="scroll" data-target="#aside-desktop__navbar" data-offset="0">
<div class='container-fluid'>
<?php include ($r_base."assets/php_modules/header.tpt.php"); ?>  
<div class="row">
<?php include ($r_base."assets/php_modules/aside.tpt.php"); ?>
<main class="col-md markdown-body">

<h2>Введение в теорию графов</h2>
<p>Графом</em> называется множество узлов и связей между ними. Каждый узел называется <em>вершиной</em>, а каждая связь &ndash; <em>ребром</em>. Каждое ребро соединяет две вершины.</p>
<h2>Виды графов</h2>
<p>Графы делятся на <strong><em>ориентированные</em></strong><em> и <strong>неориентированные</strong>. </em>Ориентированный граф &ndash; такой граф, в котором можно двигаться от вершины к вершине только в одном направлении. Например, на рисунке 1 можно двигаться из вершины v0 в v1, а из v1 в v0 нельзя. В неориентированных графах можно двигаться в обе стороны. Например, на рисунке 2 из вершины 1 можно двигаться в вершину 2, и наоборот.</p>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.png">
	    <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 1 &ndash; Ориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////RISYNOK  2//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/2.png">
	    <img src="<?php echo $folder_name ?>img/2.png" alt="Рисунок 2">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 2 &ndash; Неориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Граф, в котором присутствуют как ориентированные ребра, так и неориентированные, называется <strong><em>смешанным </em></strong>(рисунок 3).</p>
<!-- /////////////////////////////////////////////RISYNOK  3//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/3.png">
	    <img src="<?php echo $folder_name ?>img/3.png" alt="Рисунок 3">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 3 &ndash; Смешанный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>Кроме того, графы делятся на <strong><em>взвешенные</em></strong> и <strong><em>невзвешенные</em></strong>. Граф, в котором каждому ребру в соответствие поставлено некоторое числовое значение &ndash; <em>вес</em>, называется взвешенным графом (рисунок 4). Если никакого числового значения рёбрам не поставлено, то граф называется невзвешенным. Чаще всего, в названии графа указывают как его ориентированность или неориентированность, так и его взвешенность или невзвешенность.</p>
<p>Граф, в котором между любой парой вершин существует, как минимум, один путь, называется <strong><em>связным </em></strong>(рисунок 4). Если в графе существует хотя бы одна вершина, не связанная с другими, он называется <strong><em>несвязным </em></strong>(рисунок 5).</p>
<!-- /////////////////////////////////////////////RISYNOK  4//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/4.png">
	    <img src="<?php echo $folder_name ?>img/4.png" alt="Рисунок 4">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 4 &ndash; Взвешенный связанный ориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////RISYNOK  5//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/5.png">
	    <img src="<?php echo $folder_name ?>img/5.png" alt="Рисунок 5">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 5 &ndash; Несвязный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Граф, в котором число рёбер близко к максимальному (когда каждая вершина графа связана с любой другой вершиной графа рёбрами), называется <strong><em>плотным графом</em></strong>. Пример представлен на рисунке 6.</p>
<!-- /////////////////////////////////////////////RISYNOK  6//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/6.png">
	    <img src="<?php echo $folder_name ?>img/6.png" alt="Рисунок 6">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 6 &ndash; Плотный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Граф с противоположным свойством, имеющий малое число рёбер, называется&nbsp;<strong><em>разреженным</em> <em>графом</em>. </strong></p>
<p><strong><em>Петлёй</em></strong> называется ребро, которое соединяет вершины v1 и v2, причём v1 и v2 совпадают. Иными словами, петля &ndash; это ребро, которое начинается и заканчивается в одной вершине. Пример представлен на рисунке 7.</p>
<!-- /////////////////////////////////////////////RISYNOK  7//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/7.png">
	    <img src="<?php echo $folder_name ?>img/7.png" alt="Рисунок 7">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 7 &ndash; Граф с петлёй</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p><strong>Инцидентность</strong> &ndash; понятие, используемое только в отношении ребра и вершины. Если v1, v2 - вершины, а e = (v1, v2) - соединяющее их ребро, тогда вершина v1 и ребро e инцидентны, вершина v2 и ребро e тоже инцидентны. Две вершины (или два ребра) инцидентными быть не могут. Например, на рисунке 7 вершина 1 инцидентна ребру 1-2.</p>
<p><strong><em>Смежность</em></strong> &ndash; понятие, используемое в отношении только двух рёбер, либо только двух вершин: два ребра, инцидентные одной вершине, называются смежными; две вершины, инцидентные одному ребру, также называются смежными. Например, на рисунке 7 вершины 1 и 2 смежные, поскольку инциденты одному ребру.</p>
<p><strong><em>Маршрут</em></strong> &ndash; это проход по графу через заданную последовательность вершин. Если v 0 = v k {\displaystyle v_{0}=v_{k}} начальная и конечная вершины последовательности совпадают, то маршрут <em>замкнут </em>(рисунок 9), иначе маршрут <em>открыт</em> (рисунок 8).</p>
<!-- /////////////////////////////////////////////RISYNOK  8//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/8.png">
	    <img src="<?php echo $folder_name ?>img/8.png" alt="Рисунок 8">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 8 &ndash; Открытый маршрут: вершины 2-4-1-2-3-4-1</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<!-- /////////////////////////////////////////////RISYNOK  9//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/9.png">
	    <img src="<?php echo $folder_name ?>img/9.png" alt="Рисунок 9">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 9 &ndash; Замкнутый маршрут: вершины 2-3-5-4-3-2</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p><strong><em>Цепь</em></strong><em> &ndash; </em>маршрут, в котором любое ребро графа входит не более одного раза. Если все вершины такого маршрута не повторяются, то цепь называется <em>простой</em> (рисунок 10). В цепи, изображенной на рисунке 10, вершины 2 и 4 называются <em>концами</em> цепи. <strong><em>Циклом</em></strong> называется цепь в которой начальная и конечная точки маршрута являются одной вершиной. На рисунке 11 вершина 2 является началом и концом циклического маршрута.</p>
<!-- /////////////////////////////////////////////RISYNOK  10//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/10.png">
	    <img src="<?php echo $folder_name ?>img/10.png" alt="Рисунок 10">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 10 &ndash; Открытая цепь (вершины 2-5-1-2-4)</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////RISYNOK  11//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/11.png">
	    <img src="<?php echo $folder_name ?>img/11.png" alt="Рисунок 11">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 11 &ndash; Замкнутая цепь (вершины 2-4-1-2-3-5-2)</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<h2>Представление графов. Матрица смежности</h2>
<p><strong><em>Матрица смежности графа</em></strong> &ndash; это способ представления графа в виде квадратной матрицы, в которой каждый элемент принимает одно из двух значений: 0 или 1 для невзвешенного графа. Значения 1 и 0 отображают существование ребра между вершинами. Например, на рисунке 12 &ndash; невзвешенный неориентированный граф, где между вершинами 1 и 2 есть ребро, а значит в матрице смежности на пересечении первой строки и второго столбца и второй строки и первого столбца будут стоять единицы. А на рисунке 13 &ndash; невзвешенный неориентированный граф, где из вершины 1 в вершину 2 проходит путь, следовательно в матрице смежности на пересечении первой строки и второго столбца будет стоять единица, а на пересечении второй строки и первого столбца &ndash; 0. Если граф взвешенный, то элементами матрицы смежности будут числа, соответствующие весам ребер, соединяющих вершины, на пересечении которых в таблице стоит элемент (рисунок 14).</p>
<!-- /////////////////////////////////////////////RISYNOK  12//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/12.png">
	    <img src="<?php echo $folder_name ?>img/12.png" alt="Рисунок 12">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 12 &ndash; Невзвешенный неориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Матрица смежности для графа, изображенного на рисунке 12, представлена следующим образом:</p>
<table>
<tbody>
<tr>
<td width="128">
<p>№ вершины</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>2</p>
</td>
<td width="128">
<p>3</p>
</td>
<td width="128">
<p>4</p>
</td>
<td width="128">
<p>5</p>
</td>
</tr>
<tr>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
</tr>
<tr>
<td width="128">
<p>2</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
</tr>
<tr>
<td width="128">
<p>3</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
</tr>
<tr>
<td width="128">
<p>4</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
</tr>
<tr>
<td width="128">
<p>5</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
</tr>
</tbody>
</table>
<!-- /////////////////////////////////////////////RISYNOK  13//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/13.png">
	    <img src="<?php echo $folder_name ?>img/13.png" alt="Рисунок 13">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 13 &ndash; Невзвешенный ориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Матрица смежности для графа, изображенного на рисунке 13, представлена следующим образом:</p>
<table>
<tbody>
<tr>
<td width="153">
<p>№ вершины</p>
</td>
<td width="153">
<p>1</p>
</td>
<td width="153">
<p>2</p>
</td>
<td width="153">
<p>3</p>
</td>
<td width="153">
<p>4</p>
</td>
</tr>
<tr>
<td width="153">
<p>1</p>
</td>
<td width="153">
<p>0</p>
</td>
<td width="153">
<p>1</p>
</td>
<td width="153">
<p>0</p>
</td>
<td width="153">
<p>1</p>
</td>
</tr>
<tr>
<td width="153">
<p>2</p>
</td>
<td width="153">
<p>0</p>
</td>
<td width="153">
<p>0</p>
</td>
<td width="153">
<p>1</p>
</td>
<td width="153">
<p>1</p>
</td>
</tr>
<tr>
<td width="153">
<p>3</p>
</td>
<td width="153">
<p>0</p>
</td>
<td width="153">
<p>1</p>
</td>
<td width="153">
<p>0</p>
</td>
<td width="153">
<p>0</p>
</td>
</tr>
<tr>
<td width="153">
<p>4</p>
</td>
<td width="153">
<p>1</p>
</td>
<td width="153">
<p>0</p>
</td>
<td width="153">
<p>1</p>
</td>
<td width="153">
<p>0</p>
</td>
</tr>
</tbody>
</table>
<!-- /////////////////////////////////////////////RISYNOK  14//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/14.png">
	    <img src="<?php echo $folder_name ?>img/14.png" alt="Рисунок 14">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 14 &ndash; Взвешенный неориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Матрица смежности для графа, изображенного на рисунке 14, представлена следующим образом:</p>
<table>
<tbody>
<tr>
<td width="128">
<p>№ вершины</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>2</p>
</td>
<td width="128">
<p>3</p>
</td>
<td width="128">
<p>4</p>
</td>
<td width="128">
<p>5</p>
</td>
</tr>
<tr>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>40</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>18</p>
</td>
</tr>
<tr>
<td width="128">
<p>2</p>
</td>
<td width="128">
<p>40</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>22</p>
</td>
<td width="128">
<p>6</p>
</td>
<td width="128">
<p>15</p>
</td>
</tr>
<tr>
<td width="128">
<p>3</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>22</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>14</p>
</td>
<td width="128">
<p>0</p>
</td>
</tr>
<tr>
<td width="128">
<p>4</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>6</p>
</td>
<td width="128">
<p>14</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>22</p>
</td>
</tr>
<tr>
<td width="128">
<p>5</p>
</td>
<td width="128">
<p>18</p>
</td>
<td width="128">
<p>15</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>20</p>
</td>
<td width="128">
<p>0</p>
</td>
</tr>
</tbody>
</table>
<p>Граф может быть представлен с помощью <strong><em>вектора смежности</em></strong>. В векторе смежности для каждой вершины хранятся номера смежных с ней вершин (рисунок 15).</p>
<!-- /////////////////////////////////////////////RISYNOK  15//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/15.png">
	    <img src="<?php echo $folder_name ?>img/15.png" alt="Рисунок 15">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 15 &ndash; Представление графа с помощью вектора смежности</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Еще одной формой представления графа является <strong><em>матрица инцидентности</em></strong>, в которой указываются связи между инцидентными элементами графа (ребра и вершины). Столбцы матрицы соответствуют ребрам, строки &ndash; вершинам. В каждом элементе матрицы инцидентности неориентированного графа (рисунок 16) стоит 0, если вершина не инцидентна ребру, или 1, если вершина инцидентна ребру. В случае ориентированного графа (рисунок 17), в матрицу вносятся 1, если вершина инцидентна ребру и является его началом, или 0, если вершина не инцидентна ребру, или -1, если вершина инцидентна ребру и является его концом.</p>
<!-- /////////////////////////////////////////////RISYNOK  16//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/16.png">
	    <img src="<?php echo $folder_name ?>img/16.png" alt="Рисунок 16">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 16 &ndash; Взвешенный неориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>Матрица инцидентности, соответствующая графу на рисунке 16, выглядит следующим образом:</p>
<table>
<tbody>
<tr>
<td width="128">
<p>№ вершины</p>
</td>
<td width="128">
<p>a</p>
</td>
<td width="128">
<p>b</p>
</td>
<td width="128">
<p>c</p>
</td>
<td width="128">
<p>d</p>
</td>
<td width="128">
<p>e</p>
</td>
</tr>
<tr>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
</tr>
<tr>
<td width="128">
<p>2</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
</tr>
<tr>
<td width="128">
<p>3</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
</tr>
<tr>
<td width="128">
<p>4</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
</tr>
</tbody>
</table>
<p>Приведем пример построения матрицы инцидентности для взвешенного ориентированного графа</p>
<!-- /////////////////////////////////////////////RISYNOK  17//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/17.png">
	    <img src="<?php echo $folder_name ?>img/17.png" alt="Рисунок 17">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 17 &ndash; Пример матрицы инцидентности для ориентированного графа</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Матрица инцидентности, соответствующая графу на рисунке 17, выглядит следующим образом:</p>
<table>
<tbody>
<tr>
<td width="128">
<p>№ вершины</p>
</td>
<td width="128">
<p>a</p>
</td>
<td width="128">
<p>b</p>
</td>
<td width="128">
<p>c</p>
</td>
<td width="128">
<p>d</p>
</td>
<td width="128">
<p>e</p>
</td>
</tr>
<tr>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>-1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
</tr>
<tr>
<td width="128">
<p>2</p>
</td>
<td width="128">
<p>-1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>0</p>
</td>
</tr>
<tr>
<td width="128">
<p>3</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>-1</p>
</td>
<td width="128">
<p>-1</p>
</td>
</tr>
<tr>
<td width="128">
<p>4</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
<td width="128">
<p>-1</p>
</td>
<td width="128">
<p>0</p>
</td>
<td width="128">
<p>1</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p><strong><em>Список смежности</em></strong> &ndash; ещё один из способов представления графа в виде коллекции списков вершин. Каждой вершине графа соответствует список, состоящий из "соседей" этой вершины. Если граф взвешенный, то рядом с номером вершины-соседа также указывается длина ребра до этого соседа.</p>
<!-- /////////////////////////////////////////////RISYNOK  18//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/18.png">
	    <img src="<?php echo $folder_name ?>img/18.png" alt="Рисунок 18">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 18 &ndash; Cписок смежности для ориентированного взвешенного графа</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Если хватает памяти компьютера, то матрицу смежности реализовать и применить легче, чем списки смежности. В графе, представленном списком смежности, удобно искать вершины, смежные с данной, добавлять ребра и вершины, работать с разреженными графами. Однако, при таком представлении неудобно удалять элемент и выполнять поиск элемента.</p>


<h2>Проектирование графов на алгоритмическом языке С++</h2>
<p>В программном представлении графа работают с матрицей смежности, так как при ее использовании удобнее выполнять поиск элемента.</p>
<p>Создается класс Graph, он будет шаблонным, чтобы узел графа мог содержать данные разного типа (например, строки или числа). Перед описанием класса объявляется целочисленная константа &ndash; максимальный размер матрицы смежности (пусть она равна 20).</p>
<p>Граф будет представлен следующим образом: все вершины графа заносятся в вектор вершин (вектор &ndash; это контейнер из библиотеки STL (Standard Template Library), где индекс каждой вершины соответствует ее индексу в матрице смежности. Например, если в векторе вершин у одной вершины индекс [i], а у другой [j], то наличие или отсутствие ребра между вершинами в матрице смежности определяется значением по индексу [i][j]. В приватном (private) поле класса Graph хранится вектор вершин vertList (от vertex list) и матрица смежности (размером 20х20). Для работы с графом в поле public описаны следующие методы:</p>
<h3><a name="_Toc517620945"></a><strong>Конструктор Graph()</strong></h3>
<p>В нем происходит заполнение матрицы смежности нулями.</p>
<p>Названия переменных составлены таким образом, что они отображают смысл того, для чего они предназначены. Здесь: Graph &ndash; это имя класса, maxSize &ndash; максимальный размер матрицы смежности, adjMatrix (от adjacency matrix) &ndash; матрица смежности.</p>
<p>Код конструктора:</p>
<pre class="highlight"><code data-language="c">
template&#60;class T> //объявление шаблона с формальным параметром класс Т
Graph&#60;T>::Graph() { //конструктор, который инициализирует значения объектов класса Graph
//перебор строк и столбцов матрицы смежности и заполнение её нулями
	for (int i = 0; i < maxSize; ++i) {
		for (int j = 0; j < maxSize; ++j) {
			this->adjMatrix[i][j] = 0;
		}
	}
}
</code></pre>
<h3><strong>Деструктор</strong><strong> ~Graph()</strong></h3>
<p>Деструктор удаляет объект класса Graph.</p>
<pre class="highlight"><code data-language="c">
template&#60;class T>
Graph&#60;T>::~Graph() {

}
</code></pre>
<h3><strong>Метод</strong><strong> int GetVertPos(const T&amp; vertex). </strong></h3>
<p>Находит позицию вершины в векторе вершин. Сравнивает вершину, ссылку на которую получил, с каждой вершиной в векторе. Как только будет найдено совпадение&nbsp; - возвращается номер этой вершины. Если ни одного совпадения не было, возвращается число, которое равно (-1).</p>
<p>GetVertPos(const T&amp; vertex) - GetVertexPosition - получить позицию вершины типа Т; vertList -это список вершин; IsEmpty &ndash; является ли пустым; IsFull &ndash; является ли полным. GetAmountVerts - получить количество вершин; GetAmountEdges &ndash; получить количество ребер; amount - количество; vertListSize - размер списка вершин.</p>
<p>Код метода int GetVertPos(const T&amp; vertex):</p>
<pre class="highlight"><code data-language="c">
template &#60;class T>
int Graph&#60;T>::GetVertPos(const T& vertex) {
	for (int i = 0; i < this->vertList.size(); ++i) {
		if (this->vertList[i] == vertex)			
		return i;
	}
	return -1;
}

</code></pre>
<h3><strong>Метод</strong> <strong>bool IsEmpty()</strong></h3>
<p>Проверяет, пуст ли граф, то есть в нём нет ни одной вершины. Проверяется, пуст ли вектор вершин. Если да, то возвращает значение true, если нет, то false.</p>
<p>Код метода bool IsEmpty():</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
bool Graph&lt;T>::IsEmpty() {
	if (this->vertList.size() != 0)
		return false;
	else
		return true;
}
</code></pre>
<h3><strong>Метод </strong><strong>bool IsFull()</strong></h3>
<p>Проверяет, достигло ли количество вершин в графе максимально возможного предела (для нашего примера это 20). Если размер вектора вершин равен 20, то метод вернет true, если меньше, то false. Если граф пуст, то метод вернет false.</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
bool Graph&lt;T>::IsFull() {
	return (vertList.size() == maxSize);
}
</code></pre>
<h3><strong>Метод</strong> <strong>int GetAmountVerts().</strong></h3>
<p>Метод возвращает количество вершин в графе, то есть размер вектора вершин. Если граф пуст, то метод вернет 0.</p>
<p>Код метода int GetAmountVerts().</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
int Graph&lt;T>::GetAmountVerts() {
	return this->vertList.size();
}

</code></pre>
<h3><strong>Метод</strong> <strong>int GetAmountEdges()</strong></h3>
<p>Метод возвращает количество ребер в графе. Для каждой из вершин графа в цикле проверяется: если элемент в матрице смежности с индексам [i][j] равен элементу с индексам [j][i] и это значение не ноль, то найден вес ребра, соединяющего две вершины. В конце, после цикла, он делится нацело на 2 (если граф неориентированный). Деление на 2 нужно потому, что в неориентированном графе и в элементе [i][j], и в элементе [j][i] значение одно и то же. Это означает, что в цикле одно и то же значение будет посчитано 2 раза: сначала для элемента [i][j], затем для элемента [j][i]. Следовательно, между каждыми двумя вершинами к концу работы цикла будет по 2 ребра, что неправильно, поскольку рёбер изначально было по одному между каждыми двумя вершинами. Поэтому нужно итоговое значение счетчика поделить нацело на 2, чтобы результат был корректным. Если граф ориентированный, то деление на 2 и проверка на равенство элемента [i][j] элементу [j][i] не нужны. Если граф невзвешенный (до этого был описан алгоритм для взвешенных графов), то в условии проверяется равенство элемента матрицы смежности единице, если граф ориентированный, то только элемента [i][j], если граф неориентированный, то элементов [i][j] и [j][i].</p>
<p>Код метода GetAmountEdges() для взвешенного ориентированного графа:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
int Graph&lt;T>::GetAmountEdges() {
	int amount = 0; // обнуляем счетчик
	if (!this->IsEmpty()) { // проверяем, что граф не пуст
		for (int i = 0, vertListSize = this->vertList.size(); i < vertListSize; ++i) {
			for (int j = 0; j < vertListSize; ++j) {
				if (this->adjMatrix[i][j] == 1) // находим рёбра
					amount += 1; // считаем количество рёбер
			}
		}
		return amount; // возвращаем количество рёбер
	}
	else
		return 0; // если граф пуст, возвращаем 0
}

</code></pre>

<p>Код метода GetAmountEdges() для взвешенного неориентированного графа:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
int Graph&lt;T>::GetAmountEdges() {
	int amount = 0; // обнуляем счетчик
	if (!this->IsEmpty()) { // проверяем, что граф не пуст
		for (int i = 0, vertListSize = this->vertList.size(); 
i < vertListSize; ++i) {
			for (int j = 0; j < vertListSize; ++j) {
				if (this->adjMatrix[i][j] == 
this->adjMatrix[j][i] &&
					this->adjMatrix[i][j] != 0) // находим рёбра
					amount += 1; // считаем количество рёбер
			}
		}
		return (amount / 2); // приводим счетчик к корректному результату и возвращаем его
	}
	else
		return 0; // если граф пуст, возвращаем 0
}

</code></pre>
<p>Код метода GetAmountEdges() для невзвешенного ориентированного графа:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
int Graph&lt;T>::GetAmountEdges() {
	int amount = 0; // обнуляем счетчик
	if (!this->IsEmpty()) { // проверяем, что граф не пуст
		for (int i = 0, vertListSize = this->vertList.size(); i < vertListSize; ++i) {
			for (int j = 0; j < vertListSize; ++j) {
				if (this->adjMatrix[i][j] == 1) // находим рёбра
					amount += 1; // считаем количество рёбер
			}
		}
		return amount; // возвращаем количество рёбер
	}
	else
		return 0; // если граф пуст, возвращаем 0
}
</code></pre>
<p>Код метода GetAmountEdges()&nbsp; для невзвешенного неориентированного графа:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
int Graph&lt;T>::GetAmountEdges() {
	int amount = 0; // обнуляем счетчик
	if (!this->IsEmpty()) { // проверяем, что граф не пуст
		for (int i = 0, vertListSize = this->vertList.size(); i < vertListSize; ++i) {
			for (int j = 0; j < vertListSize; ++j) {
				if (this->adjMatrix[i][j] == 1 && this->adjMatrix[j][i] == 1) // находим рёбра
					amount += 1; // считаем количество рёбер
			}
		}
		return (amount / 2); // приводим счетчик к корректному результату и возвращаем его
	}
	else
		return 0; // если граф пуст, возвращаем 0
}

</code></pre>
<h3><strong>Метод</strong><strong> int GetWeight(const T&amp; vertex1, const T&amp; vertex2)</strong></h3>
<p>Метод возвращает вес ребра, соединяющего вершины vertex1 и vertex2, ссылки на которые метод принимает. Сначала производится проверка, что граф не пуст, затем вычисляются позиции вершин vertex1 и vertex2 в графе и из матрицы смежности извлекается значение на пересечении этих вершин. В невзвешенных графах этот метод не используется.</p>
<p>GetWeight - получить вес, vertPos1 - позиция первой вершины, vertPos2 - позиция второй вершины, vertex1 - исходная вершина, vertex2 &ndash; конечная вершина (в которую идёт ребро, вес которого ищет функция).</p>
<p>Код метода GetWeight(const T &amp; vertex1, const T &amp; vertex2):</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
int Graph&lt;T>::GetWeight(const T & vertex1, const T & vertex2) {
	if (!this->IsEmpty()) {
		int vertPos1 = GetVertPos(vertex1);
		int vertPos2 = GetVertPos(vertex2);
		return adjMatrix[vertPos1][vertPos2];
	}
	return 0;
}

</code></pre>
<h3><strong>Метод</strong><strong> std::vector&lt;T&gt; GetNbrs(const T&amp; vertex)</strong></h3>
<p>Метод возвращает список соседей вершины vertex, ссылку на которую метод принимает. Рассмотрим работу метода на примере графа, изображенного на рисунке 19.</p>
<!-- /////////////////////////////////////////////RISYNOK  19//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/19.png">
	    <img src="<?php echo $folder_name ?>img/19.png" alt="Рисунок 19">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 19 &ndash; Невзвешенный неориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Матрица смежности, соответствующая графу, выглядит следующим образом:</p>
<table>
<tbody>
<tr>
<td width="157">
<p>№ вершины</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>2</p>
</td>
<td width="157">
<p>3</p>
</td>
<td width="157">
<p>4</p>
</td>
</tr>
<tr>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>0</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>1</p>
</td>
</tr>
<tr>
<td width="157">
<p>2</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>0</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>0</p>
</td>
</tr>
<tr>
<td width="157">
<p>3</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>0</p>
</td>
<td width="157">
<p>1</p>
</td>
</tr>
<tr>
<td width="157">
<p>4</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>0</p>
</td>
<td width="157">
<p>1</p>
</td>
<td width="157">
<p>0</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp; Опишем, как работает метод GetNbrs на примере приведенного выше графа. Но перед описанием непосредственно работы алгоритма рассмотрим матрицу смежности. После её анализа можно сделать следующие выводы:</p>
<ol>
<li>Для вершины 1 соседями являются вершины 2,3,4;</li>
<li>Для вершины 2 соседями являются вершины 1 и 3</li>
<li>Для вершины 3 соседями являются вершины 1,2,4</li>
<li>Для вершины 4 соседями являются вершины 1 и 3.</li>
</ol>
<p>Сначала метод получает вершину, соседей которой необходимо найти. Пусть требуется найти соседей вершины 1. Алгоритм работает следующим образом:</p>
<p>Создаётся список, состоящий из соседей (изначально он пуст) &ndash; nbrsList. В матрице смежности вычисляется позиция вершины, соседей которой необходимо найти. Вершина 1 имеет позицию [1][1] &ndash; пересечение первой строки и первого столбца. В специальную переменную запоминается значение 1.</p>
<p>Затем в ходе циклического процесса проверяется, что элемент с индексом строки как у вершины 1 и индексом столбца i не равен 0 и что элемент с индексом строки i и индексом столбца, равным индексу строки у вершины 1, не равен 0. Если это так, то найден сосед, он заносится в список соседей. Например, проверяется элемент [1][2]: обнаруживается, что он не равен нулю. То есть между вершиной 1 и вершиной 2 есть ребро. Далее проверяется, что находится в ячейке [2][1]. Там тоже находится не ноль, значит, от вершины 2 до вершины 1 есть ребро, значит, они соседи. Вершина 2 заносится в список соседей. Подобные действия выполняются для других вершин. Если бы граф был ориентированный, то в циклическом процессе для поиска соседей проверялось бы, что в ячейках с индексом вершины 1 и индексом столбца i находятся не нули, а вторая проверка отсутствовала бы.</p>
<p>Таким образом, в списке соседей окажутся вершины 2,3,4. После анализа матрицы смежности было выяснено, что соседями вершины 1 являются вершины 2,3,4. Значит, функция работает корректно.</p>
<p>Код метода GetNbrs(const T&amp; vertex) для взвешенного и невзвешенного ориентированных графов:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
std::vector&lt;T> Graph&lt;T>::GetNbrs(const T & vertex) {
	std::vector&lt;T> nbrsList; // создание списка соседей
	int pos = this->GetVertPos(vertex); /* вычисление позиции vertex в матрице смежности */
	if (pos != (-1)) { /* проверка, что vertex есть в матрице смежности */
		for (int i = 0, vertListSize = this->vertList.size(); i < vertListSize; ++i) {
			if (this->adjMatrix[pos][i] != 0) /* вычисление соседей*/
				nbrsList.push_back(this->vertList[i]); /* запись соседей в вектор */
		}
	}
	return nbrsList; // возврат списка соседей
}

</code></pre>
<p>Код метода GetNbrs(const T&amp; vertex) для взвешенного и невзвешенного неориентированных графов:</p>
<pre class="highlight"><code data-language="c">
template<class T>
std::vector&lt;T> Graph&lt;T>::GetNbrs(const T & vertex) {
	std::vector&lt;T> nbrsList; // создание списка соседей
	int vertPos = this->GetVertPos(vertex); // вычисление позиции vertex в матрице смежности
	if (vertPos != (-1)) { проверка, что vertex есть в матрице смежности
		for (int i = 0, vertListSize = this->vertList.size(); i < vertListSize; ++i) {
			if (this->adjMatrix[vertPos][i] != 0 &&
				this->adjMatrix[i][vertPos] != 0) // вычисление соседей

				nbrsList.push_back(this->vertList[i]); запись соседей в вектор

		}
	}
	return nbrsList; возврат списка соседей
}

</code></pre>
<h3><strong>Метод</strong><strong> void InsertVertex(const T&amp; vertex)</strong></h3>
<p>Метод служит для добавления вершины. Проверяет, что вектор вершин не полон, и добавляет туда вершину vertex, ссылку на которую он получил.</p>
<p>Код метода void InsertVertex(const T&amp; vertex):</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::InsertVertex(const T& vertex) {
	if (!this->IsFull()) {
		this->vertList.push_back(vertex);
	}
	else {
		cout << "Граф уже заполнен. Невозможно добавить новую вершину " << endl;
		return;
	}
}

</code></pre>
<h3><strong>Метод</strong><strong> void InsertEdge(const T&amp; vertex1, const T&amp; vertex2)</strong></h3>
<p>Метод вставляет между вершинами vertex1 и vertex2 ребро весом weight (для взвешенного графа). Сначала проверяется, что vertex1 и vertex2 есть в векторе вершин, затем берутся их номера, и проверяется, что между ними еще нет ребра, если нет, то в матрицу смежности вставляется значение weight (или 1 &ndash; для невзвешенного графа), если есть, то выводится об этом сообщение на экран. Если граф ориентированный, то вставляется значение в матрицу смежности по индексам [vertPos1][vertPos2]. Если граф неориентированный, то еще вставляется значение по индексам [vertPos2][vertPos1]. Если граф невзвешенный, то третий параметр weight не нужен.</p>
<p>Код метода void InsertEdge(const T&amp; vertex1, const T&amp; vertex2) для взвешенного ориентированного графа:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::InsertEdge(const T & vertex1, const T & vertex2, int weight) {
	if (this->GetVertPos(vertex1) != (-1) && this->GetVertPos(vertex2) != (-1)) {
		int vertPos1 = GetVertPos(vertex1);
		int vertPos2 = GetVertPos(vertex2);
		if (this->adjMatrix[vertPos1][vertPos2] != 0) {
			cout << "Ребро между этими вершинами уже существует" << endl;
			return;
		}
		else {
			this->adjMatrix[vertPos1][vertPos2] = weight;
		}
	}
	else {
		cout << "Обеих вершин (или одной из них) нет в графе " << endl;
		return;
	}
}

</code></pre>
<p>Код метода void InsertEdge(const T&amp; vertex1, const T&amp; vertex2) для взвешенного неориентированного графа:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::InsertEdge(const T & vertex1, const T & vertex2, int weight) {
	if (this->GetVertPos(vertex1) != (-1) && this->GetVertPos(vertex2) != (-1)) {
		int vertPos1 = GetVertPos(vertex1);
		int vertPos2 = GetVertPos(vertex2);
		if (this->adjMatrix[vertPos1][vertPos2] != 0
			&& this->adjMatrix[vertPos2][vertPos1] != 0) {
			cout << "Ребро между вершинами уже есть" << endl;
			return;
		}
		else {
			this->adjMatrix[vertPos1][vertPos2] = weight;
			this->adjMatrix[vertPos2][vertPos1] = weight;
		}
	}
	else {
		cout << "Обеих вершин (или одной из них) нет в графе " << endl;
		return;
	}
}

</code></pre>
<p>Код метода void InsertEdge(const T&amp; vertex1, const T&amp; vertex2) для невзвешенного ориентированного графа:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::InsertEdge(const T & vertex1, const T & vertex2) {
	if (this->GetVertPos(vertex1) != (-1) && this->GetVertPos(vertex2) != (-1)) {
		int vertPos1 = GetVertPos(vertex1);
		int vertPos2 = GetVertPos(vertex2);
		if (this->adjMatrix[vertPos1][vertPos2] != 0) {
			cout << "Ребро между этими вершинами уже существует" << endl;
			return;
		}
		else {
			this->adjMatrix[vertPos1][vertPos2] = 1;
		}
	}
	else {
		cout << "Обеих вершин (или одной из них) нет в графе " << endl;
		return;
	}
}

</code></pre>
<p>Код метода void InsertEdge(const T&amp; vertex1, const T&amp; vertex2) для невзвешенного неориентированного графа:</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::InsertEdge(const T & vertex1, const T & vertex2) {
	if (this->GetVertPos(vertex1) != (-1) && this->GetVertPos(vertex2) != (-1)) {
		int vertPos1 = GetVertPos(vertex1);
		int vertPos2 = GetVertPos(vertex2);
		if (this->adjMatrix[vertPos1][vertPos2] != 0
			&& this->adjMatrix[vertPos2][vertPos1] != 0) {
			cout << "Ребро между этими вершинами уже существует" << endl;
			return;
		}
		else {
			this->adjMatrix[vertPos1][vertPos2] = 1;
			this->adjMatrix[vertPos2][vertPos1] = 1;
		}
	}
	else {
		cout << "Обеих вершин (или одной из них) нет в графе " << endl;
		return;
	}
}

</code></pre>
<h3><strong>Метод void Print()</strong></h3>
<p>Этот метод используется для печати матрицы смежности графа. Самым первым печатается номер вершины, а затем значения соответствующей строки из матрицы смежности для неё. Например, 3 0 1 0 1 будет означать, что вершина 3 не связана с вершинами 1 и 3, но связана с вершинами 2 и 4.</p>
<p>Код метода void Print():</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::Print() {
	if (!this->IsEmpty()) {
		cout << "Матрица смежности графа: " << endl;
		for (int i = 0, vertListSize = this->vertList.size(); i < vertListSize; ++i) {
			cout << this->vertList[i] << " ";
			for (int j = 0; j < vertListSize; ++j) {
				cout << " " << this->adjMatrix[i][j] << " ";
			}
			cout << endl;
		}
	}
	else {
		cout << "Граф пуст " << endl;
	}
}

</code></pre>
<h2>Пример работы с графами</h2>
<p>Выполним ввод и печать графа с использованием вышеописанных методов. Далее будут рассмотрены невзвешенный ориентированный (рисунок 20) и взвешенный неориентированный (рисунок 21) графы (так как в остальных случаях функции выглядят так же). Обе функции похожи, за исключением того, что для взвешенного графа еще требуется переменная веса.</p>
<p>В функции main() создается объект graph класса Graph типа int, а также объявляются переменные: amountVerts (количество вершин), amountEdges (количество ребер), vertex (вершина), sourceVertex, targetVertex (исходная и конечная вершины -&nbsp; sourceVertex это вершина, из которой ребро будет идти в вершину targetVertex), для взвешенного графа еще edgeWeight (вес ребра).</p>
<p>Затем пользователь вводит нужное ему количество вершин и ребер. После этого в цикле пользователь вводит вершины.</p>
<p>Объявляется и инициализируется указатель на вершину (инициализируется адресом введенной вершины), затем у объекта graph вызывается метод InsertVertex, куда передается вершина.</p>
<p>После этого цикла идет ввод ребер. Ввод ребер осуществляется также в цикле, пользователь вводит стартовую вершину, конечную вершину и вес ребра (для взвешенного графа), после того, как все данные введены, вызывается функция InsertEdge у объекта класса Graph с двумя или тремя параметрами (в зависимости от того, взвешенный граф или нет). После этого вызывается метод Print, и выводится матрица смежности.</p>
<p>После этого программа завершает работу.</p>
<p>vertPtr &ndash; vertexPointer -&nbsp; указатель на вершину, аналогично targetVertPtr - targetVertexPointer указатель на конечную(целевую) вершину, sourceVertPtr - указатель на исходную вершину.</p>
<p><strong>&nbsp;</strong></p>
<h3>Невзвешенный ориентированный граф:</h3>
<!-- /////////////////////////////////////////////RISYNOK  20//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/20.png">
	    <img src="<?php echo $folder_name ?>img/20.png" alt="Рисунок 20">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 20 &ndash; Невзвешенный ориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<pre class="highlight"><code data-language="c">
#include "Unweighted directed Graph.h"
#include &lt;iostream>
#include &lt;conio.h>
#include &lt;locale>
using namespace std;
int main() {
	setlocale(LC_ALL, "Russian");
{
		Graph&lt;int> graph; // создание графа, содержащего вершины с номерами целого типа
		int amountVerts, amountEdges, vertex, sourceVertex, targetVertex; // создание необходимых для ввода графа переменных
		cout << "Введите количество вершин графа: "; cin >> amountVerts; cout << endl; // ввод количества рёбер графа
													//в переменную amountVerts
		cout << "Введите количество ребер графа: "; cin >> amountEdges; cout << endl;  // ввод количества рёбер графа 
													//в переменную amountEdges
		for (int i = 0; i < amountVerts; ++i) {
			cout << "Вершина: "; cin >> vertex; // ввод вершины
			int* vertPtr = &amp;vertex; // запоминаем адрес вершины 
						//с помощью указателя
			graph.InsertVertex(*vertPtr); //передаём ссылку на вершину 
							//в функцию InsertVertex; 
							//происходит вставка вершины 
							//в вектор вершин
			cout << endl;
		}
		for (int i = 0; i < amountEdges; ++i) {
			cout << "Исходная вершина: "; cin >> sourceVertex; cout << endl; // ввод исходной вершины
			int* sourceVertPtr = &amp;sourceVertex; // запоминаем адрес исходной вершины
			cout << "Конечная вершина: "; cin >> targetVertex; cout << endl; // ввод вершины, 
											//до которой будет идти ребро 
											//от исходной вершины
			int* targetVertPtr = &amp;targetVertex; // запоминаем адрес конечной вершины 
								//(до которой будет идти ребро от исходной вершины)
			graph.InsertEdge(*sourceVertPtr, *targetVertPtr); // вставка ребра между исходной 
									//и конечной вершинами, 
									//в функцию передаются ссылки 
									//на исходную и конечную вершины
		}
		cout << endl;
		graph.Print(); // печать матрицы смежности графа
	}
_getch();
	return 0;
}

</code></pre>
<p><strong>Результат работы программы:</strong></p>
<p>Введите количество вершин графа: 4</p>
<p>Введите количество ребер графа: 6</p>
<p>Вершина: 1</p>
<p>Вершина: 2</p>
<p>Вершина: 3</p>
<p>Вершина: 4</p>
<p>Исходная вершина: 1</p>
<p>Конечная вершина: 2</p>
<p>Исходная вершина: 1</p>
<p>Конечная вершина: 4</p>
<p>Исходная вершина: 2</p>
<p>Конечная вершина: 4</p>
<p>Исходная вершина: 2</p>
<p>Конечная вершина: 3</p>
<p>Исходная вершина: 3</p>
<p>Конечная вершина: 4</p>
<p>Исходная вершина: 3</p>
<p>Конечная вершина: 1</p>
<p>Матрица смежности графа: // граф представлен на рисунке 20</p>
<p>1 0 1 0 1</p>
<p>2 0 0 1 1</p>
<p>3 1 0 0 1</p>
<p>4 0 0 0 0</p>
<p><strong>&nbsp;</strong></p>
<h3>Взвешенный неориентированный граф:</h3>
<!-- /////////////////////////////////////////////RISYNOK  21//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/21.png">
	    <img src="<?php echo $folder_name ?>img/21.png" alt="Рисунок 21">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 21 &ndash; Взвешенный неориентированный граф</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<pre class="highlight"><code data-language="c">
#include "Weighted undirected Graph.h"
#include &lt;iostream>
#include &lt;conio.h>
#include &lt;locale>
using namespace std;
int main() {
	setlocale(LC_ALL, "Russian");
{
		Graph&lt;int> graph; // создание графа, содержащего вершины с номерами целого типа
		int amountVerts, amountEdges, vertex, sourceVertex, targetVertex, edgeWeight; // создание необходимых для ввода графа переменных (добавилась переменная edgeWeight)
		cout << "Введите количество вершин графа: "; cin >> amountVerts; cout << endl; // ввод количества рёбер графа в переменную amountVerts
		cout << "Введите количество ребер графа: "; cin >> amountEdges; cout << endl; // ввод количества рёбер графа в переменную amountEdges
		for (int i = 0; i < amountVerts; ++i) {
			cout << "Вершина: "; cin >> vertex; ввод вершины
			int* vertPtr = &amp;vertex; // запоминаем адрес вершины с помощью указателя
			graph.InsertVertex(*vertPtr); передаём ссылку на вершину в функцию InsertVertex; происходит вставка вершины в вектор вершин

			cout << endl;
		}
		for (int i = 0; i < amountEdges; ++i) {
			cout << "Исходная вершина: "; cin >> sourceVertex; cout << endl; // ввод исходной вершины
			int* sourceVertPtr = &amp;sourceVertex; // запоминаем адрес исходной вершины
			cout << "Конечная вершина: "; cin >> targetVertex; cout << endl; // ввод вершины, до которой будет идти ребро от исходной вершины (ввод конечной вершины)
			int* targetVertPtr = &amp;targetVertex; // запоминаем адрес конечной вершины 
			cout << "Вес ребра: "; cin >> edgeWeight; cout << endl; // ввод числового значения веса ребра в переменную edgeWeight
			graph.InsertEdge(*sourceVertPtr, *targetVertPtr, edgeWeight); // вставка ребра весом edgeWeight между исходной и конечной вершинами
		}
		cout << endl;
		graph.Print(); // печать матрицы смежности
	}
_getch();
	return 0;
}

</code></pre>
<p><strong>Результат работы программы:</strong></p>
<p>Введите количество вершин графа: 4</p>
<p>Введите количество ребер графа: 6</p>
<p>Вершина: 1</p>
<p>Вершина: 2</p>
<p>Вершина: 3</p>
<p>Вершина: 4</p>
<p>Исходная вершина: 1</p>
<p>Конечная вершина: 2</p>
<p>Вес ребра: 2</p>
<p>Исходная вершина: 1</p>
<p>Конечная вершина: 4</p>
<p>Вес ребра: 10</p>
<p>Исходная вершина: 2</p>
<p>Конечная вершина: 3</p>
<p>Вес ребра: 2</p>
<p>Исходная вершина: 3</p>
<p>Конечная вершина: 4</p>
<p>Вес ребра: 3</p>
<p>Исходная вершина: 3</p>
<p>Конечная вершина: 1</p>
<p>Вес ребра: 7</p>
<p>Исходная вершина: 2</p>
<p>Конечная вершина: 4</p>
<p>Вес ребра: 11</p>
<p>Матрица смежности графа: // граф представлен на рисунке 21</p>
<p>1 0 2 7 10</p>
<p>2 2 0 2 11</p>
<p>3 7 2 0 3</p>
<p>4 10 11 3 0</p>
<h2>Алгоритмы обхода графов</h2>
<p>Обход графа &ndash; процедура однократного посещения всех вершин.</p>
<h3>Обход графа в глубину</h3>
<p>Алгоритм обхода графа в глубину начинает выполнение с одной из вершин графа - начальной вершины, фиксирует информацию о посещении этой вершины, и, перемещаясь по ребру, посещает соседние вершины. Обход графа в глубину применяется в различных расчётах на графах &ndash; например, в алгоритме Диница для поиска максимального потока в транспортной сети. Кроме того, правило левой руки при прохождении лабиринта (идти, ведя левой рукой по стенке) также является обходом в глубину<strong>.</strong> По завершении обхода все вершины окажутся пройдёнными - обработанными. Если при обходе встречается вершина, которая уже была пройдена, то повторной обработки делать не нужно.</p>
<!-- /////////////////////////////////////////////RISYNOK  22//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/22.png">
	    <img src="<?php echo $folder_name ?>img/22.png" alt="Рисунок 22">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 22 &ndash; Алгоритм обхода графа в глубину</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Обход начинается с вершины v0. Не важно, какая именно обработка выполняется на каждой вершине &ndash; может быть, выводится на печать метка вершины или выполняется более сложная процедура. После обработки вершины v0 выполняется переход по одному из ребер к одной из соседних вершин. В данном примере существуют две возможности: перейти к вершине v1 или к вершине v4. Итак, алгоритм обхода стоит перед выбором: перейти к вершине v1 или к вершине v4. Не имеет значения, как именно сделать этот выбор, - допустим, что выбрана вершина v1. После ее обработки рисунок будет выглядеть так:</p>
<!-- /////////////////////////////////////////////RISYNOK  23//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/23.png">
	    <img src="<?php echo $folder_name ?>img/23.png" alt="Рисунок 23">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 23 &ndash; Обработаны вершины v0 и v1</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Затем алгоритм совершает переход к вершине, соседствующей с вершиной v1. Если соседняя вершина уже обработана, то алгоритм продвигается дальше, пропуская уже обработанные соседние вершины. В данном примере рассматривается только одна соседняя вершина v3 и обрабатывается. В данный момент обработанными являются три вершины, как показано ниже.</p>
<!-- /////////////////////////////////////////////RISYNOK  24//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/24.png">
	    <img src="<?php echo $folder_name ?>img/24.png" alt="Рисунок 24">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 24 &ndash; Обработаны вершины v0, v1 и v3</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Одной из соседних вершин по отношению к вершине v3 является вершина v0, однако она уже обработана. Таким образом, чтобы предотвратить зацикливание, переходить от вершины v3 в вершину v0 нельзя. Поэтому можно перейти к другому соседу: v5 или v6. Перейдем в вершину v5. После ее обработки на графе будут цветом отмечены вершины v0 и v1 как посещённые:</p>
<!-- /////////////////////////////////////////////RISYNOK  25//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/25.png">
	    <img src="<?php echo $folder_name ?>img/25.png" alt="Рисунок 25">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 25 &ndash; Обработаны вершины v0, v1, v3 и v5</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>Поскольку у вершины v5 нет соседних вершин, дальнейший поиск в глубину невозможен. Далее, алгоритм возвращается назад и проверяет, нет ли у предыдущей вершины v3 других необработанных соседних вершин. У вершины v3 есть ещё необработанная соседняя вершина v6. Выполняется переход в вершину v6 и обработка вершины v6. После обработки вершины v6 рисунок имеет следующий вид:</p>
<!-- /////////////////////////////////////////////RISYNOK  26//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/26.png">
	    <img src="<?php echo $folder_name ?>img/26.png" alt="Рисунок 26">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 26 &ndash; Вершина v6 обработана после возврата к вершине v3</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>У вершины v6 есть соседняя вершина &ndash; v1, однако она уже обработана. Таким образом, у вершины v6 нет обработанных соседних вершин, поэтому обход возвращается назад &ndash; в вершину v3, чтобы проверить, остались ли у нее другие необработанные соседи. У вершины v3 больше нет необработанных соседей. Значит, алгоритм возвращается к предыдущей вершине v1, чтобы проверить, есть ли у нее непомеченные соседние вершины. У вершины v1 нет необработанных соседних вершин, поэтому выполняется возврат в вершину v0 для проверки, есть ли у вершины v0 необработанные соседи. Такой сосед есть &ndash; это вершина v4, поэтому алгоритм переходит в нее. После перехода граф выглядит так:</p>
<!-- /////////////////////////////////////////////RISYNOK  27//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/27.png">
	    <img src="<?php echo $folder_name ?>img/27.png" alt="Рисунок 27">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 27 &ndash; Вершина v4 обработана</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>У вершины v4 соседних вершин нет, поэтому происходит возврат в вершину v0. У вершины v0 больше нет необработанных соседних вершин. Поскольку вершина v0 была отправной точкой нашего обхода, дальнейшее перемещение по графу невозможно (из вершины v0 в вершину v2 попасть невозможно). Обход графа завершен.</p>
<p>Во время обхода графа в глубину обрабатываются лишь те вершины, которые достижимы из начальной вершины графа. Существует еще одно важное свойство обхода графа в глубину: из начальной вершины осуществляется переход в соседнюю вершину, оттуда &ndash; в соседнюю к соседней и так далее &ndash; при этом обход графа осуществляется настолько глубоко, насколько это возможно, и только потом выполняется возврат в исходную вершину. Таким образом, алгоритм обхода графа в глубину работает рекурсивно[8].</p>
<p>Рассмотрим программную реализацию обхода графа в глубину.</p>
<p>В заголовочном файле появится массив посещенных вершин bool *visitedVerts = new bool[20], о нём будет рассказано позже. Алгоритм обхода графа в глубину выполняет функция void DFS(T&amp; startVertex, bool *visitedVerts).</p>
<p>&nbsp;Она принимает в качестве входных параметров ссылку на вершину, из которой начать обход графа и&nbsp; указатель на первый элемент массива из логических значений. В этом массиве индекс каждой вершины соответствует индексу вершины в векторе вершин vertList. Если в visitedVerts элемент по какому-либо индексу указывает на 1, это значит, что вершина по этому индексу уже посещена. Например, если *visitedVerts[0] = 1, то вершина vertList[0] уже обработана. С помощью массива visitedVerts помечаются посещенные вершины.</p>
<p>Как только выполнение программы переходит&nbsp; в функцию, происходит следующее:</p>
<ul>
<li>Выводится сообщение о том, что вершина startVertex посещена.</li>
<li>В массиве visitedVerts по индексу вершины startVertex в векторе vertList устанавливается значение true (вершина посещена).</li>
<li>Создается вектор вершин, соседних с startVertex, в него записываются соседи startVertex с помощью функции GetNbrs.</li>
<li>Работает цикл с параметром. Он работает, пока значение переменной цикла меньше размера вектора соседей startVertex. В цикле осуществляется проверка, что вершина по индексу i (переменная цикла) в векторе соседей не посещена (то есть что в массиве visitedVerts по индексу this-&gt;GetVertPos(neighbors[i]) стоит не значение true). Если это так, то функция DFS вызывается для соседа neighbors[i]. В функцию передается этот сосед и наш массив visitedVerts.</li>
</ul>
<p>&nbsp; Затем алгоритм повторится уже для соседа. На экран выведется сообщение, что сосед посещен, в visitedVerts записывается значение true по нужному индексу, а затем для соседей переданного в функцию соседа выполняются те же действия. Как только у кого-то не окажется соседей, пойдет возврат из рекурсии.</p>
<p>&nbsp; В функции main() после печати графа добавится несколько строк &ndash; ввод стартовой вершины и вызов функции DFS(). <strong>&nbsp;</strong></p>
<p>Код метода void DFS(T&amp; startVertex, bool *visitedVerts):</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::DFS(T& startVertex, bool *visitedVerts) {
	cout << "Вершина " << startVertex << " посещена" << endl; // выводим сообщение о том, что вершина посещена
	visitedVerts[this->GetVertPos(startVertex)] = true; // отмечаем в массиве посещенных вершин, что вершина посещена
	std::vector&lt;T> neighbors = this->GetNbrs(startVertex); // создаём вектор соседей
	for (int i = 0, size = this->GetNbrs(startVertex).size(); i < size; ++i) {
		if (visitedVerts[this->GetVertPos(neighbors[i])] != true)
			this->DFS(neighbors[i], visitedVerts); // в цикле проверяем, что соседи текущей вершины ещё не посещены и вызываем функцию обхода графа в глубину
	}
}

</code></pre>
<p>Код файла main.cpp:</p>
<pre class="highlight"><code data-language="c">
#include "Unweighted directed Graph.h"
#include &lt;iostream>
#include &lt;conio.h>
#include &lt;locale>
using namespace std;
int main() {
	setlocale(LC_ALL, "Russian");
{
		Graph&lt;int> graph; // создание графа, содержащего вершины с номерами целого типа
		int amountVerts, amountEdges, vertex, sourceVertex, targetVertex; // создание необходимых для ввода графа переменных
		cout << "Введите количество вершин графа: "; cin >> amountVerts; cout << endl; // ввод количества вершин в переменную amountVerts
		cout << "Введите количество ребер графа: "; cin >> amountEdges; cout << endl; // ввод количества рёбер в переменную amountEdges
		for (int i = 0; i < amountVerts; ++i) {
			cout << "Вершина: "; cin >> vertex; // ввод вершины
			int* vertPtr = &amp;vertex; // запоминаем адрес вершины с помощью указателя
			graph.InsertVertex(*vertPtr); // вставка вершины в вектор вершин с помощью функции InsertVertex, в функцию передается ссылка на введенную вершину 
			cout << endl;
		}
		for (int i = 0; i < amountEdges; ++i) {
			cout << "Исходная вершина: "; cin >> sourceVertex; cout << endl; // ввод исходной вершины в переменную sourceVertex
			int* sourceVertPtr = &amp;sourceVertex; // запоминаем адрес исходной вершины
			cout << "Конечная вершина: "; cin >> targetVertex; cout << endl; // ввод конечной вершины (вершины, до которой идет ребро от исходной) в переменную targetVertex
			int* targetVertPtr = &amp;targetVertex; // запоминаем адрес конечной вершины
			graph.InsertEdge(*sourceVertPtr, *targetVertPtr); // вставка ребра между исходной и конечной вершинами с помощью функции InsertEdge, в которую передаются ссылки на исходную и конечную вершины
		}
		cout << endl;
		graph.Print(); // печать матрицы смежности графа
		cout << "Введите вершину, с которой начать обход: "; cin >> vertex; cout << endl; // ввод начальной вершины, с которой начнется обход графа в глубину (в нашем случае это 0)
		int* vertPtr = &amp;vertex; // запоминаем адрес введенной вершины
		graph.DFS(*vertPtr, visitedVerts); //вызываем функцию обхода графа в глубину, в функцию передаются ссылка на введенную вершину и вектор посещенных вершин
	}

</code></pre>
<p>В качестве результата приведена матрица смежности и выведенные сообщения во время выполнения метода DFS, поскольку ввод данных был продемонстрирован ранее.</p>
<p>Матрица смежности графа: // граф представлен на рисунке 22</p>
<p>0 0 1 0 0 1 0 0</p>
<p>1 0 0 0 1 0 0 0</p>
<p>2 1 0 0 0 0 0 0</p>
<p>3 1 0 0 0 0 1 1</p>
<p>4 0 0 0 0 0 0 0</p>
<p>5 0 0 0 0 0 0 0</p>
<p>6 0 0 0 0 0 0 0</p>
<p>Введите вершину, с которой начать обход: 0</p>
<p>Вершина 0 посещена</p>
<p>Вершина 1 посещена</p>
<p>Вершина 3 посещена</p>
<p>Вершина 5 посещена</p>
<p>Вершина 6 посещена</p>
<p>Вершина 4 посещена</p>
<h3>Обход графа в ширину</h3>
<p>Существует еще один алгоритм обхода графа &ndash; обход в ширину (англ. Breadth First Search). Этот алгоритм использует очередь для отслеживания необработанных соседних вершин. Этот алгоритм обхода графа применяется для поиска компонент связности в графе, а также, как и алгоритм обхода в глубину, применяется при прохождении лабиринтов. Поиск начинается с начальной вершины, которая обрабатывается, маркируется и помещается в очередь. Возьмем для примера граф, рассмотренный на рисунке 22(с прошлого раздела):</p>
<p>Предположим, что начальной является вершина v0. Тогда вершина является первой вершиной, подлежащей обработке, маркировке цветом и сохранению в очереди.</p>
<!-- /////////////////////////////////////////////RISYNOK  28//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/28.png">
	    <img src="<?php echo $folder_name ?>img/28.png" alt="Рисунок 28">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 28 &ndash; Вершина v0 промаркирована и занесена в очередь</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>На данный момент в голове очереди находится начальная вершина v0.</p>
<p>После того, как начальная вершина обработана, промаркирована и помещена в очередь, начинается выполнение основной части алгоритма обхода графа в ширину. Основой алгоритма является циклический процесс, в котором обработанная вершина удаляется из очереди, а в очередь помещаются соседствующие с обработанной вершины. Таким образом, тело цикла состоит из двух основных шагов:</p>
<ul>
<li>Удалить вершину v из головы очереди</li>
<li>Для каждой непомеченной вершины u, соседней по отношению к вершине v, обработать вершину u, маркировать ее и поместить в очередь (вершина u может иметь соседние необработанные вершины).</li>
</ul>
<p>Эти действия выполняются до тех пор, пока очередь не станет пустой.</p>
<p>Рассмотрим работу алгоритма на примере, когда вершина v0 находится в голове очереди. Вершина v0 удаляется из очереди и отмечается, что у нее остались необработанными две соседние вершины &ndash; v1 и v4. Каждая из них обрабатывается, маркируется и помещается в очередь. Допустим, сначала в очередь поставлена вершина v1, а затем вершина v4 (очередность может быть любой, вершина v4 может быть поставлена первой, а вершина v1 за ней &ndash; алгоритм будет работать корректно в любом случае). После того, как вершины v1 и v4 были поставлены в очередь, граф выглядит следующим образом:</p>
<!-- /////////////////////////////////////////////RISYNOK  29//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/29.png">
	    <img src="<?php echo $folder_name ?>img/29.png" alt="Рисунок 29">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 29 &ndash; Промаркированы вершины v0, v1, v4, в очереди находятся вершины v1 и v4</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>Поскольку очередь не пуста, два шага выполняются снова: первый элемент (вершина v1) удаляется, обрабатывается, все необработанные соседние вершины маркируются и помещаются в очередь. Единственным неотмеченным соседом вершины v1 является вершина v3, поэтому после обработки, маркировки и постановки в очередь вершины v3 граф выглядит так:</p>
<!-- /////////////////////////////////////////////RISYNOK  30//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/30.png">
	    <img src="<?php echo $folder_name ?>img/30.png" alt="Рисунок 30">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 30 &ndash; Промаркированы вершины v0, v1, v4, v3, в очереди находятся вершины v3 и v4</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>Далее из головы очереди удаляется вершина v4. Поскольку у нее нет соседних вершин, никакие вершины больше не обрабатываются и не становятся в очередь, при этом граф выглядит так:</p>
<!-- /////////////////////////////////////////////RISYNOK  31//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/31.png">
	    <img src="<?php echo $folder_name ?>img/31.png" alt="Рисунок 31">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 31 - Промаркированы вершины v0, v1, v4, v3, в очереди находится только вершина v3</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Следующей из очереди удаляется вершина v3. У нее есть две непомеченные соседние вершины (вершины v5 и v6), которые обрабатываются, маркируются и помещаются в очередь. Граф выглядит следующим образом:</p>
<!-- /////////////////////////////////////////////RISYNOK  32//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/32.png">
	    <img src="<?php echo $folder_name ?>img/32.png" alt="Рисунок 32">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 32 &ndash; Промаркированы вершины v0, v1, v4, v3, v5, v6, в очереди находятся вершины v5 и v6</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<p>Вершина v0 не обрабатывается повторно, так как она уже помечена.</p>
<p>Результат обхода графа в глубину и в ширину одинаков &ndash; отличается порядок обработки. Вершины v0, v1, v3, v4, v5 и v6 обработаны, поскольку все они достижимы из начальной точки (вершины 0). Вершина v2 не обрабатывается, поскольку не существует пути из вершины v0 в вершину v2. При обходе графа в ширину вершины обрабатываются в следующем порядке: сначала вершина v0, потом v1 и v4, затем обрабатываются их соседи (вершина v3) и так далее. При обходе графа в глубину сначала обрабатываются вершины v0, v1, v3 и v5 [8].</p>
<p>Рассмотрим программную реализацию обхода графа в ширину.</p>
<p>Она, как и функция DFS, принимает в качестве входных параметров вершину, с которой надо начать обход графа и массив значений булева типа для вершины (посещена или нет вершина по определенному индексу; индекс в массиве visitedVerts совпадает с номером вершины в векторе вершин). Кроме того, в описании класса появляется очередь std::queue&lt;T&gt; VertsQueue ().</p>
<p>Когда выполнение программы переходит внутрь функции BFS, выполняется проверка, является ли посещенной вершина startVertex. Если ее еще не посещали, то она заносится в очередь, затем на экран выводится сообщение о том, что вершина обработана и в массиве visitedVerts для нее устанавливается значение true. Если вершина обработана, ничего не происходит, управление передается следующим операторам программы: выделяются соседи вершины startVertex, из очереди удаляется голова, затем в цикле для всех соседей выполняются следующие действия.</p>
<ul>
<li>Выполняется проверка, посещен ли сосед</li>
<li>Если не посещен, то эта соседняя вершина помещается в очередь и на экран выводится сообщение о том, что вершина обработана</li>
</ul>
<p>После работы этого цикла, работает следующий цикл:</p>
<ul>
<li>Пока очередь не пуста, циклически вызывается функция BFS, в которую в качестве начальной вершины передается головная вершина очереди</li>
<li>В функции main() после ввода всех вершин и ребер пользователь вводит начальную вершину и вызывается функция BFS.</li>
</ul>
<p>Код функции void BFS(T&amp; startVertex, bool *visitedVerts):</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::BFS(T & startVertex, bool *visitedVerts) {
	if (visitedVerts[this->GetVertPos(startVertex)] == false) { // проверяем, была ли ранее посещена вершина startVertex
		this->VertsQueue.push(startVertex); // если startVertex ещё не была посещена, то она заносится в очередь вершин VertsQueue
		cout << "Вершина " << startVertex << " обработана" << endl; // выводится сообщение, что startVertex теперь посещена
		visitedVerts[this->GetVertPos(startVertex)] = true; // в массиве посещенных вершин отмечаем, 
									//что вершина по индексу, который на данный момент 
									//имеет startVertex, является посещенной
	}
	std::vector&lt;T> neighbors = this->GetNbrs(startVertex); // создаём вектор соседей startVertex
	this->VertsQueue.pop(); // удаляем голову очереди
	for (int i = 0, size = neighbors.size(); i < size; ++i) {
		if (visitedVerts[this->GetVertPos(neighbors[i])] != true) {
			this->VertsQueue.push(neighbors[i]); // в цикле проверяем, посещен ли сосед вершины startVertex,
								// если он еще не посещен, то он помещается в очередь вершин VertsQueue
			visitedVerts[this->GetVertPos(neighbors[i])] = true; // а также он помещается в массив посещенных вершин
			cout << "Вершина " << neighbors[i] << " обработана" << endl; // затем на экран выводится сообщение, 
											//что соседняя вершина обработана
		}
	}
	while (!this->VertsQueue.empty()) {
		this->BFS(this->VertsQueue.front(), visitedVerts); // в цикле вызывается функция обхода графа в ширину 
									//до тех пор, пока в очереди есть вершины
	}
}

</code></pre>
<p>Код файла main.cpp:</p>
<pre class="highlight"><code data-language="c">
#include "Unweighted directed Graph.h"
#include &lt;iostream>
#include &lt;conio.h>
#include &lt;locale>
using namespace std;
int main() {
	setlocale(LC_ALL, "Ru");
	{
		Graph&lt;int> graph; // создание графа, содержащего вершины с номерами целого типа
		int amountVerts, amountEdges, vertex, sourceVertex, targetVertex; // создание необходимых для ввода графа переменных
		cout << "Введите количество вершин графа: "; cin >> amountVerts; cout << endl; // ввод количества вершин в переменную amountVerts
		cout << "ВВедите количество ребер: "; cin >> amountEdges; cout << endl; // ввод количества рёбер в переменную amountEdges
		for (int i = 0; i < amountVerts; ++i) {
			cout << "Вершина: "; cin >> vertex; // ввод вершины
			int* VertPtr = &amp;vertex; // запоминаем адрес вершины с помощью указателя
			graph.InsertVertex(*VertPtr); // вставка вершины в вектор вершин с помощью функции InsertVertex, 
							//в функцию передается ссылка на введенную вершину 
			cout << endl;
		}
		for (int i = 0; i < amountEdges; ++i) {
			cout << "Исходная вершина: "; cin >> sourceVertex; cout << endl; // ввод исходной вершины в переменную sourceVertex
			int* sourceVertPtr = &amp;sourceVertex; // запоминаем адрес исходной вершины
			cout << "Конечная вершина: "; cin >> targetVertex; cout << endl; // ввод конечной вершины 
											//(вершины, до которой идет ребро от исходной) 
											//в переменную targetVertex
			int* targetVertPtr = &amp;targetVertex; // запоминаем адрес конечной вершины
			graph.InsertEdge(*sourceVertPtr, *targetVertPtr); // вставка ребра между исходной и конечной вершинами 
									//с помощью функции InsertEdge, 
									//в которую передаются ссылки на исходную и конечную вершины
		}
		cout << endl;
		graph.Print(); // печать матрицы смежности
		cout << "Введите вершину, с которой нужно начать обход: "; cin >> vertex; cout << endl; // ввод начальной вершины, 
													//с которой начнется обход графа 
													//в ширину (в нашем случае это 0)
		int* VertPtr = &amp;vertex; // запоминаем адрес введенной вершины
		graph.BFS(*VertPtr, visitedVerts); //вызываем функцию обхода графа в ширину, 
						//в функцию передаются ссылка на введенную вершину и вектор посещенных вершин

	}
	_getch();
	return 0;
} 

</code></pre>
<p>Результат работы программы:</p>
<p>Матрица смежности графа: // граф представлен на рисунки 22</p>
<p>0 0 1 0 0 1 0 0</p>
<p>1 0 0 0 1 0 0 0</p>
<p>2 1 0 0 0 0 0 0</p>
<p>3 1 0 0 0 0 1 1</p>
<p>4 0 0 0 0 0 0 0</p>
<p>5 0 0 0 0 0 0 0</p>
<p>6 0 0 0 0 0 0 0</p>
<p>Введите вершину, с которой начать обход: 0</p>
<p>Вершина 0 обработана</p>
<p>Вершина 1 обработана</p>
<p>Вершина 4 обработана</p>
<p>Вершина 3 обработана</p>
<p>Вершина 5 обработана</p>
<p>Вершина 6 обработана</p>

</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>