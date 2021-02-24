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


<h2 id="1"></h2>
<p>OpenGL (Open Graphics Library &ndash; открытая графическая библиотека) &ndash; низкоуровневый программный интерфейс (API) для разработки приложений с использованием двухмерной и трехмерной графики. Так как интерфейс является низкоуровневым, для работы с ним необходимы иметь некоторые представления о графике в целом и знать основы линейной алгебры.</p>
<p>OpenGL состоит из нескольких библиотек. Основной библиотекой является GL. В ней описаны все базовые функции для работы с самыми простыми примитивами (точка, линия и так далее), инструменты отрисовки и все необходимые функции для организации главного цикла приложения. Так же OpenGl включает в себя и дополнительные библиотеки. Например, в библиотеке GLU (GL Utility) через базовые функции определены более сложные примитивы (куб, шар, цилиндр и так далее).&nbsp; GLUT предоставляет только минимально необходимый набор функций для создания OpenGL-приложения (смотри инструкцию по установке GLUT в проект Visual Studio).</p>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.png">
	    <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
	</a><p>&nbsp;</p>
</div>
<p class="text-center">Рисунок 1 &ndash; Состав библиотек OpenGL</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<div class="gallery"> 
	<a href="<?php echo $folder_name ?>img/t1.png">
	    <img src="<?php echo $folder_name ?>img/t1.png" alt="Рисунок t1">
	</a>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<h2 id="2">1.	Наименование функций</h2>
<p>Имя любой функции состоит из нескольких частей:</p>
<ul>
<li><strong>gl &ndash; </strong>имя библиотеки, в которой описана эта функция: для базовых функций OpenGL, функций из библиотек GL, GLU, GLUT, GLAUX это gl, glu, glut, aux соответственно;</li>
<li><strong>c</strong><strong>ommand_name </strong>&ndash; имя команды (процедуры или функции);</li>
<li><strong>[1 2 3 4] </strong>&ndash; число аргументов команды;</li>
<li><strong>[b s i f d ub us ui] </strong>&ndash; тип аргумента: b &ndash; GLbyte (char), i &ndash; GLint(int), f &ndash; GLfloat(float), ub, us, ui &ndash; unsigned byte, short, int соответственно;</li>
<li><strong>[v] </strong>&ndash; в качестве параметров функции используется указатель на массив значений.</li>
</ul>
<p>Все команды (процедуры и функции) библиотеки GL начинаются с префикса gl, все константы &ndash; с префикса GL_.</p>
<p>Соответствующие команды и константы библиотек GLU и GLUT аналогично имеют префиксы glu (GLU_) и glut (GLUT_)</p>

<!-- ///////////////////////////////2/////////////// -->
 <h2 id = "3">2.	Отрисовка примитивов</h2>
<p>Все графические объекты в&nbsp;OpenGL&nbsp;представляют собой набор точек, линий и многоугольников. Все примитивы в свою очередь задаются точками &mdash; вершинами.</p>
<p><strong>GL</strong><strong>_POINTS</strong> &mdash; каждая вершина задает точку;</p>
<p><strong>GL</strong><strong>_LINES</strong> &mdash; каждая отдельная пара вершин задает линию;</p>
<p><strong>GL</strong><strong>_LINE</strong><strong>_STRIP</strong> &mdash; каждая пара вершин задает линию (то есть&nbsp;конец предыдущей линии является началом следующей);</p>
<p><strong>GL</strong><strong>_LINE</strong><strong>_LOOP</strong> &mdash; аналогично предыдущему за исключением того, что последняя вершина соединяется с первой и получается замкнутая фигура;</p>
<p><strong>GL</strong><strong>_TRIANGLES</strong> &mdash; каждая отдельная тройка вершин задает треугольник;</p>
<p><strong>GL</strong><strong>_TRIANGLE</strong><strong>_STRIP</strong> &mdash; каждая следующая вершина задает треугольник вместе с двумя предыдущими (получается лента из треугольников);</p>
<p><strong>GL</strong><strong>_TRIANGLE</strong><strong>_FAN</strong> &mdash; каждый треугольник задается первой вершиной и последующими парами (то есть треугольники строятся вокруг первой вершины, образуя нечто похожее на диафрагму);</p>
<p><strong>GL</strong><strong>_QUADS</strong> &mdash; каждые четыре вершины образуют четырехугольник;</p>
<p><strong>GL</strong><strong>_QUAD</strong><strong>_STRIP</strong> &mdash; каждая следующая пара вершин образует четырехугольник вместе с парой предыдущих;</p>
<p><strong>GL</strong><strong>_POLYGON</strong> &mdash; задает многоугольник с количеством углов равным количеству заданных вершин.</p>
<!-- /////////////////////////////////////////////RISYNOK  2//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/2.png">
	    <img src="<?php echo $folder_name ?>img/2.png" alt="Рисунок 2">
	</a>
</div><p>&nbsp;</p>
<p class="text-center">Рисунок 2 &ndash; Правила отрисовки примитивов OpenGL</p>
<p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Положение вершины определяются заданием ее координат в двух, трех-, или четырехмерном пространстве (однородные координаты). Это реализуется с помощью нескольких вариантов команды glVertex*:</p>
<!-- /////////////КОД///////////// -->
<ol>
<li><code class="highlight">void glVertex[2 3 4][s i f d] (type <em>coords</em>);</code></li>
<li><code class="highlight">void glVertex[2 3 4][s i f d]v (type *<em>coords</em>).</code></li>
</ol>
<p>Для задания текущего цвета вершины используются команды:</p>
<ol>
<li><code class="highlight">void <strong>glColor[3 4][b s i f]</strong> (GLtype <em>components</em>);</code></li>
<li><code class="highlight">void <strong>glColor[3 4][b s i f]v</strong> (GLtype <em>components</em>).</code></li>
</ol>
<p>Первые три параметра задают <strong>R</strong><strong>, G</strong><strong>, B</strong> компоненты цвета, а последний параметр определяет коэффициент непрозрачности (так называемая альфа-компонента).</p>
<p>Если в названии команды указан тип &lsquo;<strong>f</strong>&rsquo; (<strong>float</strong>), то значения всех параметров должны принадлежать отрезку [0,1], при этом по умолчанию значение альфа-компоненты устанавливается равным 1.0, что соответствует полной непрозрачности.</p>
<p>Определение примитива или последовательности примитивов происходит между вызовами команд:</p>
<ol>
<li><code class="highlight">void glBegin (GLenum <em>mode</em>);</code></li>
<li><code class="highlight">void glEnd (void).</code></li>
</ol>
<p>Пример:</p>
<pre class="highlight"><code data-language="c">
GLfloat BlueCol[3] = {0,0,1};
glBegin(GL_TRIANGLES);
glColor3f(1.0, 0.0, 0.0);&nbsp;/* красный */
glVertex3f(0.0, 0.0, 0.0);
glColor3ub(0,255,0);&nbsp;&nbsp;/* зеленый */
glVertex3f(1.0, 0.0, 0.0);
glColor3fv(BlueCol);&nbsp;&nbsp;/* синий */
glVertex3f(1.0, 1.0, 0.0);
glEnd();
</code></pre>

<!-- ////////////////////3////////////////////// -->
<h2 id = "4">3.	Работа с матрицами</h2>
<p>Для задания различных преобразований объектов сцены в OpenGL используются операции над матрицами, при этом различают три типа матриц:</p>
<ul>
<li><strong><em>модельно-видовая</em></strong><em> (</em>определяет преобразования объекта в мировых координатах, такие как параллельный перенос, изменение масштаба и поворот);</li>
<li><strong><em>матрица проекций </em></strong><em>(</em>определяет, как будут проецироваться трехмерные объекты на плоскость экрана (в оконные координаты);</li>
<li><strong><em>матрица текстуры </em></strong><em>(</em>определяет наложение текстуры на объект).</li>
</ul>
<p>Все они имеют размер 4x4.</p>
<p>Видовая матрица определяет преобразования объекта в мировых координатах, такие как параллельный перенос, изменение масштаба и поворот. Матрица проекций определяет, как будут проецироваться трехмерные объекты на плоскость экрана (в оконные координаты), а матрица текстуры определяет наложение текстуры на объект.</p>
<p>Умножение координат на матрицы происходит в момент вызова соответствующей команды OpenGL, определяющей координату (как правило, это команда glVertex*)</p>
<p>Для того чтобы выбрать, какую матрицу надо изменить, используется команда:</p>
<p><code class="highlight">void glMatrixMode (GLenum mode)</code></p>
<p>Вызов данной функции со значением параметра&nbsp;<em>mode</em>&nbsp;равным&nbsp;<strong>GL</strong><strong>_MODELVIEW</strong>,&nbsp;<strong>GL</strong><strong>_PROJECTION</strong>, или&nbsp;<strong>GL</strong><strong>_TEXTURE</strong>&nbsp;включает режим работы с модельно-видовой матрицей, матрицей проекций, или матрицей текстуры соответственно. Для вызова команд, задающих матрицы того или иного типа, необходимо сначала установить соответствующий режим.</p>
<p>Часто бывает необходимо сохранить содержимое текущей матрицы для дальнейшего использования, для чего применяются функции:</p>
<p><code class="highlight">void glPushMatrix (void);</code></p>
<p><code class="highlight">void glPopMatrix (void);</code></p>
<p>Они записывают и восстанавливают текущую матрицу из стека, причем для каждого типа матриц стек свой. Для модельно-видовых матриц его глубина равна как минимум 32, для остальных &ndash; как минимум 2.</p>
<p>Для преобразования модельно-видовой матрицы используют команды:</p>
<p><code class="highlight">void glTranslate[f d] (GLtype x, GLtype y, GLtype z);</code></p>
<p><code class="highlight">void glRotate[f d] (GLtype angle, GLtype x, GLtype y, GLtype z);</code></p>
<p><code class="highlight">void glScale[f d] (GLtype x, GLtype y, GLtype z);</code></p>
<p>glTranlsate*() производит перенос объекта, прибавляя к координатам его вершин значения своих параметров.</p>
<p>glRotate*()&nbsp;производит поворот объекта против часовой стрелки на угол&nbsp;angle&nbsp;(измеряется в градусах) вокруг вектора (x,y,z).</p>
<p>glScale*() производит масштабирование объекта (сжатие или растяжение) вдоль вектора (x,y,z), умножая соответствующие координаты его вершин на значения своих параметров.</p>

<!-- //////////////////////4/////////////////// -->
<h2 id = "5">4.	Отрисовка текстовой информации</h2>
<p>В OpenGL не существует удобного функционала для работы с выводом текста в окно.</p>
<p>Существует 2 примитивные функции:</p>
<p><code class="highlight">void glutBitmapCharacter(void *font, int character);</code>// Bitmap текст</p>
<p><code class="highlight">void glutStrokeCharacter(void *font, int character);</code> //Stroke текст<br> <br>  Bitmap текст определен в виде растровых букв и не поддается масштабированию. Выглядит красиво, но выводится на экран медленнее, чем Stroke.</p>
<p>Stroke текст можно как угодно масштабировать и вращать. Выводится быстрее, однако не так красиво выглядит.</p>
<p>Список доступных шрифтов:</p>
<ul>
<li>Для Bitmap текста:</li>
<li>GLUT_BITMAP_9_BY_15;</li>
<li>GLUT_BITMAP_8_BY_13;</li>
<li>GLUT_BITMAP_TIMES_ROMAN_10;</li>
<li>GLUT_BITMAP_TIMES_ROMAN_24;</li>
<li>GLUT_BITMAP_HELVETICA_10;</li>
<li>GLUT_BITMAP_HELVETICA_12;</li>
<li></li>
<li>Для Stroke текста:</li>
<li>GLUT_STROKE_ROMAN;</li>
<li></li>
</ul>

<span class="lead text-center"><em>Пример программы с использованием OpenGL</em></span>
<p><em>&nbsp;</em></p>
<!-- /////////////////////////////////////////////RISYNOK  3//////////////////////////////////////// -->

<div class="gallery">
	<a href="<?php echo $folder_name ?>img/3.png">
	    <img src="<?php echo $folder_name ?>img/3.png" alt="Рисунок 3">
	</a>
</div><p>&nbsp;</p>
<p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////RISYNOK 4//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/4.png">
	    <img src="<?php echo $folder_name ?>img/4.png" alt="Рисунок 4">
	</a>
</div><p>&nbsp;</p>
<p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p><strong>&nbsp;</strong></p>
<p class="text-center"><em>Пример функции отрисовки прямоугольника</em></p>
<!-- /////////////////////////////////////////////RISYNOK 5//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/5.png">
	    <img src="<?php echo $folder_name ?>img/5.png" alt="Рисунок 5">
	</a>
</div><p>&nbsp;</p>
<p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p class="text-center"><em>Пример функции отрисовки эллипса</em></p>
<!-- /////////////////////////////////////////////RISYNOK 6//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/6.png">
	    <img src="<?php echo $folder_name ?>img/6.png" alt="Рисунок 6">
	</a>
</div><p>&nbsp;</p>
<p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p class="text-center"><em>Примеры функций отрисовки текста</em></p>
<!-- /////////////////////////////////////////////RISYNOK 7//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/7.png">
	    <img src="<?php echo $folder_name ?>img/7.png" alt="Рисунок 7">
	</a>
</div><p>&nbsp;</p>
<p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p class="text-center">Использование (текст выведется в начале координат):</p>
<!-- /////////////////////////////////////////////RISYNOK 8//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/8.png">
	    <img src="<?php echo $folder_name ?>img/8.png" alt="Рисунок 8">
	</a>
</div><p>&nbsp;</p>
<p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p class="text-center">Для отрисовки и масштабирования Stroke текста используется стек матриц:</p>
<!-- /////////////////////////////////////////////RISYNOK 9//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/9.png">
	    <img src="<?php echo $folder_name ?>img/9.png" alt="Рисунок 9">
	</a>
</div><p>&nbsp;</p>
<p>&nbsp;</p></span>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

<h2 id = "6">Список литературы</h2>
<ol>
<li>Дейв Шрайнер. The Red Book. OpenGL Programming Guide, 2017 &ndash; 384с.</li>
</ol>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>