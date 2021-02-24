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
<div class="alert alert-warning">Подробный материал по Open GL <a href="materials/open-gl/" class="alert-link">по этой ссылке</a></div>
<h2>Постановка задачи</h2>
<ol>
<li>Написать программу, которая будет рисовать бинарное дерево так, как показано на рисунке 1:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.png">
	    <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 1 &ndash; Пример визуализации бинарного дерева</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="2">
<li>Программа должна содержать кнопки управления, которые будут позволяют выполнять базовые операции и действия, указанные в вашем варианте Лабораторной работы №30 &laquo;АТД. Деревья&raquo;:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  2//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/2.png">
	    <img src="<?php echo $folder_name ?>img/2.png" alt="Рисунок 2">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 2 &ndash; Панель управления</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<ol start="3">
<li>Для ввода используется консоль:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  3//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/3.png">
	    <img src="<?php echo $folder_name ?>img/3.png" alt="Рисунок 3">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 3 &ndash; Ввод с консоли</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<ol start="4">
<li>Кнопки и узлы дерева должны подсвечиваться при наведении на них курсора мыши. Это может быть смена фона, либо цвета и толщины границы элемента, либо комбинация перечисленного:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  4//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/4.png">
	    <img src="<?php echo $folder_name ?>img/4.png" alt="Рисунок 4">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 4 &ndash; Подсветка элементов</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<ol start="5">
<li>При выполнении работы можно пользоваться:</li>
</ol>
<ul>
<li><a href="materials/open-gl/" target="_blank">Лекцией по OpenGL;</a></li>
<li>Лекциями по математике за 1 семестр. Например, когда потребуется определить принадлежность точки области круга;</li>
<li>Книгой Дейва Шрайнера &laquo;OpenGL Redbook&raquo;, в которой вы найдете все ответы на оставшиеся вопросы. Настоятельно рекомендуется.</li>
</ul>
<p>&nbsp;</p>
<h2>Вспомогательные материалы</h2>
<h3>1.&nbsp;&nbsp;&nbsp; Переменные и прототипы функций</h3>
<p>Для представления бинарного дерева в OpenGL необходимо знать координаты, каждого из элементов. Для этого необходимо применить формулы вычисления координат каждого узла для функции вертикальной печати.</p>
<p>То, сколько пробелов нужно поставить перед данным элементом, отсчитывая с начала печатаемой в консоли строки, предназначенной для печати отдельного уровня дерева, зависит от уровня, на котором сейчас находится элемент, от уровня, который может быть, в качестве максимального, и от минимальной ширины дерева, требуемой для печати какого-либо полного дерева (если печатается неполное дерево, то оно пополнится значениями NULL). Ширина данных, хранимых в дереве, при печати может занимать более одного символа, вследствие чего введен дополнительный коэффициент, выбираемый пользователем. И это очень удобно.</p>
<p>Можно считать, что &nbsp;количество пробелов &ndash; это эквивалент координаты х, а текущий уровень &ndash; это координата у. Следовательно, работа идёт &nbsp;с координатами.</p>
<p>Но &nbsp;значения координат пока &nbsp;не готовы к использованию в представлении дерева в OpenGL. Их нужно преобразовать в зависимости от ширины, высоты окна, возможного отступа (от краев окна), а также от собственных характеристик дерева, как например, от введенной минимальной ширины печатаемого дерева и его высоты (будут использоваться некоторые понятия из функции вертикальной печати). Так, будущее дерево будет отображаться в некоторых рамках, то есть предусмотрен факт того, что пространство для изображения дерева ограничено. При этом дерево размещается, максимально занимая данное пространство, с соблюдением отступов, без нарушения границ окна. В основном размеры элементов зависят от ширины пространства, хотя дерево располагается как в ширину, так и в высоту.</p>
<p>Для управления динамической памятью, где размещено дерево, вводятся специальные коэффициенты. Имеется в виду, что, меняя специальные коэффициенты, тем самым изменяются и координаты узлов, и размеры узлов, внутри которых будут размещены какие-либо данные. Кроме того, учтем то, что число разрядов в данных может быть больше единицы.</p>
<p>Так дерево на рисунке 5 имеет высоту, равную 3; минимальную ширину, равную 7; максимальную число разрядов в значениях узлов - 3. Ширина и высота окна, соответственно, 800 и 600, а отступ от краев 10.</p>
<p>При этом радиусы кругов (размещаться значения данных будут в кругах) таковы, что между любыми элементами можно расположить, как минимум, один такой же.</p>
<!-- /////////////////////////////////////////////RISYNOK  5//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/5.png">
	    <img src="<?php echo $folder_name ?>img/5.png" alt="Рисунок 5">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 5 &ndash; изображение дерева в окне 800х600 пикселей</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>В функции отображения дерева, необходимы параметры ширины, высоты окна, величины отступа от краев окна, а также - коэффициент количества разрядов значений данных в узлах (КШД).</p>
<p>Далее просчитываются, в первую очередь, радиусы кругов для отображения узлов дерева, затем координаты самих узлов и координаты текста.</p>
<p>Обозначения:</p>
<p>window_width &ndash; ширина окна;</p>
<p>window_height &ndash; высота окна;</p>
<p>tree_width &ndash; минимальная ширина дерева (МШД), используемая для вертикальной печати;</p>
<p>tree_height &ndash; высота дерева;</p>
<p>shift &ndash; отступ от краев (одинаковый с двух сторон);</p>
<p>R &ndash; радиус круга;</p>
<p>node_x &ndash; х-координата элемента;</p>
<p>node_y &ndash; y-координата элемента;</p>
<p>k_x &ndash; коэффициент пропорциональности по оси Ох;</p>
<p>k_y &ndash; коэффициент пропорциональности по оси Оy;</p>
<p>text_x &ndash; х-координата текста;</p>
<p>text_y &ndash; y-координата текста;</p>
<p>x &ndash; индекс узла на данном уровне, если представить уровень как массив;</p>
<p>у &ndash; текущий уровень;</p>
<p>k &ndash; коэффициент расширения данных.</p>
<p>Если элемент в дереве один, а это означает, что высота и МШД равны, то радиус изображения узла рассчитывается по формуле:</p>

<!-- /////!!!!formula  1!!!!!///// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/f1.png">
	    <img src="<?php echo $folder_name ?>img/f1.png" alt="Формула 1">
	</a>
    </div>
    <br>
<!-- ///////////////////////////// -->

<p>Иначе, если узел не один, то по формуле:</p>

<!-- /////!!!!formula  2!!!!!///// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/f2.png">
	    <img src="<?php echo $folder_name ?>img/f2.png" alt="Формула 2">
	</a>
    </div>
    <br>
<!-- ///////////////////////////// -->

<p>Если элемент в дереве один, то рассчитываем координаты расположения узла по формулам:</p>

<!-- /////!!!!formula  3!!!!!///// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/f3.png">
	    <img src="<?php echo $folder_name ?>img/f3.png" alt="Формула 3">
	</a>
    </div>
    <br>
<!-- ///////////////////////////// -->

<p>Иначе, если узел в дереве не один, то считаем коэффициенты пропорциональности по осям Ох и Оу, чтобы получить координаты узлов дерева по формулам:</p>

<!-- /////!!!!formula  4!!!!!///// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/f4.png">
	    <img src="<?php echo $folder_name ?>img/f4.png" alt="Формула 4">
	</a>
    </div>
    <br>
<!-- ///////////////////////////// -->

<p>Главное свойство отображаемого дерева &ndash; масштабируемость. &nbsp;При этом меняются не только расстояние между узлами и размеры кругов, но и шрифт (необходимо заострить на этом внимание, так как в будущем, на основании этого свойства, будет отображаться текст определенным шрифтом).</p>
<p>На рисунке 6 представлены узлы деревьев разных размеров в окне одного и тоже размера для иллюстрации масштабирования.</p>

<!-- /////////////////////////////////////////////RISYNOK  6//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/6.png">
	    <img src="<?php echo $folder_name ?>img/6.png" alt="Рисунок 6">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 6 &ndash; Изображения разных узлов деревьев в окнах 800х600</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Кроме того, при наведении курсора на узел дерева, цвет окружности должен поменяться на синий, что продемонстрирует работу с мышкой (рисунок 7).</p>
<!-- /////////////////////////////////////////////RISYNOK  7//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/7.png">
	    <img src="<?php echo $folder_name ?>img/7.png" alt="Рисунок 7">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 7 &ndash; Изменение цвета окружности при наведении мышки</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>Так как некоторые актуальные функции OpenGL принимают только прописанные в них аргументы, что вызывает некоторые неудобства, нужно использовать глобальными переменные.</p>
<p>Пример структуры в заголовочного файла &ldquo;tree.h&rdquo;, в которой обозначены такие глобальные переменные, как tree &ndash; копия дерева, а также ширина, высота окна, отступы, коэффициент ширины данных (КШД), радиус круга, координаты мышки x, y и переменная состояния, которая отвечает за работу с мышью на алгоритмическом языке С++ :</p>
<pre class="highlight"><code data-language="c">
struct SGlutContextStruct
{
	void* tree;
	int window_width, window_height, shift, k, R, x, y, state;
};
</code></pre>
<p>В классе Tree появятся новые поля и функции. Главная функция - drawTree():</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Пример класса Tree на алгоритмическом языке С++ (развернуть)</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
int node_x;
int node_y;
int text_x;
int text_y;

//установить координаты для данного узла при рисовании
void setCoordsForNode(
	int window_width, int window_height,
	int shift,
	int tree_width, int tree_height,
	int x, int y, int R);

template &#60;class T>
Tree* Tree&#60;T>::getNodeByCoords(int x, int y, int R);

//установить координаты для текста текущего узла при рисовании
void setCoordsForText(int k, int shift);

//рисовать дерево
void drawTree(
	int argc, char** argv,
	int window_width, int window_height,
	int shift, int k);
</code></pre>
				</div>
			</div>
			<p>. . .</p>
<h3>2.&nbsp;&nbsp;&nbsp; Реализация функций</h3>
<p>Подключается структура, позволяющая инициализировать переменные и выполнять с ними какие-либо операции в дальнейшем, в файле &ldquo;tree.cpp&rdquo; &ndash; он же файл описания классов Tree/SearchTreе:</p>
<pre class="highlight"><code data-language="c">
<p>extern SGlutContextStructglutContext;</p>
</code></pre>
<div class="spollers__item">
				<div class="spollers__title spoller">Пример реализации функций: <b>SetCoordsForText(), SetCoordsForNode(), getNodeByCoords()</b> на алгоритмическом языке С++(развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
	//Функции-сеттеры используют формулы, разработанные ранее, 
	//а функция-геттер, используя вспомогательную функцию, 
	//проходится по дереву и сверяется со стандартной формулой окружности
	//в координатной плоскости хОу для того, чтобы найти узел.   

template &#60;class T>
void Tree&#60;T>::setCoordsForNode(
	int window_width, int window_height,
	int shift,
	int tree_width, int tree_height,
	int x, int y, int R)
{
	//это условие не выполняется, когда дерево состоит из одного элемента
	if (tree_width != tree_height)
	{
		//коэффициент пропорциональности по оси Ох
		int k_x = (window_width - 2 * (shift + R)) / (tree_width - 1);
		//коэффициент пропорциональности по оси Оy
		int k_y = (window_height - 2 * (shift + R)) / (tree_height - 1);
		//x-координата узла
		node_x = k_x * x + shift + R;
		//у-координата узла
		node_y = window_height - k_y * y - shift - R;
	}
	else
	{
		//x-координата узла
		node_x = window_width / 2;
		//у-координата узла
		node_y = window_height / 2;
	}
}
</code></pre>
				</div>
			</div>
			<p>. . .</p>
<p>На листинге 1 представлены реализация функции установления координат для текста и функции получения узла по координатам и радиусу.</p>
<p>Во вспомогательной функции get_help() применяется прямой обход по дереву, проверяя справедливость формулы окружности:</p>

<!-- /////!!!!formula  5!!!!!///// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/f5.png">
	    <img src="<?php echo $folder_name ?>img/f5.png" alt="Формула 5">
	</a>
    </div>
    <br>
<!-- ///////////////////////////// -->

<p>где x и y &ndash; координаты мышки, x0 и y0 &ndash; координаты центра окружности узла, R &ndash; радиус данной окружности.</p>
<p>Если ни один элемент дерева не будет подходить по данной формуле, функция вернет NULL.</p>
<p class="text-center">Листинг 1 - Функция установления координат для текста и функции получения узла по координатам и радиусу</p>
<pre class="highlight"><code data-language="c">
template&#60;class T>
void Tree&#60;T>::setCoordsForText(int k, int R)
{
	//х-координата первого символа текста
	text_x = node_x - 3 * R / 4;
	//у-координата первого символа текста
	text_y = node_y - 3 * R / (4 * k);
}

template&#60;class T>
Tree&#60;T>* Tree&#60;T>::getNodeByCoords(int x, int y, int R)
{
	Tree&#60;T>* node = this;
	node = get_help(node, x, y, R);
	return node;
}

template&#60;class T>
Tree&#60;T>* get_help(Tree&#60;T>* node, int x, int y, int R)
{
	if (pow(x - node->node_x, 2) + pow(y - node->node_y, 2) <= pow(R, 2))
		return node;
	Tree&#60;T>* temp = NULL;
	if (node->getLeft() != NULL)
		temp = get_help(node->getLeft(), x, y, R);
	if (temp != NULL)
		return temp;
	if (node->getRight() != NULL)
		temp = get_help(node->getRight(), x, y, R);
	return temp;
}
</code></pre>
<p>Чтобы формула нахождения координат элементов была справедлива, дерево должно быть полным. Для этого была объявлена переменная структуры tree, которая будет хранить, практически, копию дерева, которое необходимо отобразить, пополнением значениями NULL, не превышая высоту дерева. Делается это с помощью функции replaceNULLForEmpty(), используемой в функции вертикальной печати дерева.</p>
<p>Помимо изменений в переменной дерева, нужно инициализировать и другие глобальные переменные, обозначенные в структуре.</p>
<p>Первые два аргумента функции drawTree() берутся из аргументов main() и необходимы в дальнейшей инициализации, для работы приложения с консолью. Первый аргумент &ndash; это какое-либо число, а второй &ndash; массив символов.</p>
<pre class="highlight"><code data-language="c">
template&#60;class T>
void Tree&#60;T>::drawTree(
	int argc, char** argv,
	int window_width, int window_height,
	int shift, int k)
{
	Tree&#60;T>* temp = this->copyTree();
	temp = temp->replaceNULLforEmpty();
	glutContext.tree = temp;
	glutContext.window_width = window_width;
	glutContext.window_height = window_height;
	glutContext.shift = shift;
	glutContext.k = k;
	initWindow&#60;T>(argc, argv);
}
</code></pre>
<p>Далее, описывается работа функции initWindow&lt;T&gt;().&nbsp;&nbsp;</p>
<p>glutInit() инициализирует GLUT. Мы обязательно должны ее вызвать до того, как начнем использовать любые другие функции данной библиотеки</p>
<p>glutInitDisplayMode() задает режим дисплея, параметры GLUT_DOUBLE|GLUT_RGBA обозначают двойную буферизацию и четырехкомпонентный цвет.</p>
<p>glutInitWindowSize() по заданным ширине и высоте определяет окно.</p>
<p>glutCreateWindow() создает его с заголовком в качестве аргумента.</p>
<p>glutDisplayFunc() подключает дисплей.</p>
<p>glutReshapeFunc() подключает функцию обработки изменений размеров окна.</p>
<p>glutPassiveMotionFunc() подключает работу с мышью, в данном случае &ndash; пассивное движение мыши, обозначающее, что мы просто двигаем мышью, не совершая никаких нажатий на ее клавиши.</p>
<p>glutMainLoop() запускает главный цикл.</p>
<pre class="highlight"><code data-language="c">
template&#60;class T>
void initWindow(int argc, char** argv)
{
	glutInit(&argc, argv);
	glutInitDisplayMode(GLUT_DOUBLE | GLUT_RGBA);
	glutInitWindowSize(glutContext.window_width, glutContext.window_height);
	glutCreateWindow("DrawTree");
	glutDisplayFunc(display&#60;T>);
	glutReshapeFunc(reshape);
	glutPassiveMotionFunc(mouseMove&#60;T>);
	glutMainLoop();
}

</code></pre>
<h3>3.&nbsp;&nbsp;&nbsp; Функции изменений размеров окна, изображения линий и окружности</h3>
<h4>3.1&nbsp;&nbsp;&nbsp; Реализация функции обработки изменений размеров окна.</h4>
</ul>
<p>glViewport() отвечает за вывод изображения, начиная с первых двух координат и заканчивая последними двумя.</p>
<p>glMaxtrixMode(GL_PROJECTION) и glMatrixMode (GL_MODELVIEW) подключают матрицу проекции и модельно-видовую матрицу, а glLoadIdentity() загружает единичную матрицу.</p>
<p>gluOrtho2D() по четырем аргументам определяет систему координат. Первый аргумент &ndash; абстрактное лево, второй &ndash; право, третий &ndash; низ, четвертый &ndash; верх. Так, слева-направо задается привычная нам ось Ох, а снизу-вверх &ndash; ось Оу. В данном случае Ох начинается нулем, а заканчивается численным значением ширины окна. А ось Оу начинается нулем и заканчивается численным значением высоты окна.</p>
<p>glutContext.window_width и glutContext.window_height инициализируют переменные размеров окна, а glutPostRedisplay() будет перерисовывать изображение в окне, если его два параметра будут меняться.</p>
<pre class="highlight"><code data-language="c">
static void reshape(int w, int h)
{
	glViewport(0, 0, (GLsize i)w, (GLsize i)h);
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
	gluOrtho2D(0, (GLsize i)w, 0, (GLsize i)h);
	glMatrixMode(GL_MODELVIEW);
	glLoadIdentity();
	glutContext.window_width = w;
	glutContext.window_height = h;
	glutPostRedisplay();
}
</code></pre>
<h4>3.2&nbsp;&nbsp;&nbsp; Создание и реализация простейшей функции рисования линии по координатам первой и второй точек.</h4>
<p>glBegin(GL_LINES) говорит о том, что все отдельные пары вершин, написанные после него, будут соединяться линиями.</p>
<p>glColor3f(0.0, 0.0, 0.0) задает черный цвет.</p>
<p>glVertex2i(x1, y1) и glVertex2i(x2, y2) определяют, соответственно, конечные первую и вторую точку линии.</p>
<p>glEnd() говорит об окончании действия glBegin().</p>
<pre class="highlight"><code data-language="c">
static void drawLine(int x1, int y1, int x2, int y2)
{
	glBegin(GL_LINES);
	glColor3f(0.0, 0.0, 0.0);
	glVertex2i(x1, y1);
	glVertex2i(x2, y2);
	glEnd();
}
</code></pre>
<h4>3.3&nbsp;&nbsp;&nbsp; Реализация функции изображения кругов и окружностей.</h4>
<p>Обе функции используют три аргумента: x- и y-координаты в сочетании с радиусом R.</p>
<p>drawFillCircle() рисует сначала белый круг, а затем окаймляет его черным &laquo;ободком&raquo; - окружностью. Белый круг &ndash; это просто точки, x- и y-координаты которых задаются формулами:</p>

<!-- /////!!!!formula  6!!!!!///// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/f6.png">
	    <img src="<?php echo $folder_name ?>img/f6.png" alt="Формула 6">
	</a>
    </div>
    <br>
<!-- ///////////////////////////// -->
<p>где i &ndash; это часть или весь радиус, а t &ndash; градусная мера угла.&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>drawBlueCircle() рисует только окружность синего цвета.</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Реализация функции изображения кругов и окружностей на алгоритмическом языке С++(развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
static void drawFillCircle(int x, int y, int R)
{
	glColor3f(1.0, 1.0, 1.0);
	float x1, y1;
	glBegin(GL_POINTS);
	for (int i = 0; i <= R; i++) {
		for (int t = 0; t <= 360; t++) {
			x1 = i * sin(t) + x;
			y1 = i * cos(t) + y;
			glVertex2f(x1, y1);
		}
	}
	glEnd();
	glColor3f(0.0, 0.0, 0.0);
	glBegin(GL_POINTS);
	for (int i = R - 1; i <= R; i++) {
		for (int t = 0; t <= 360; t++) {
			x1 = R * sin(t) + x;
			y1 = R * cos(t) + y;
			glVertex2f(x1, y1);
		}
	}
	glEnd();
}

static void drawBlueCircle(int x, int y, int R)
{
	glColor3f(0.0, 0.0, 1.0);
	float x1, y1;
	glBegin(GL_POINTS);
	for (int i = R - 1; i <= R; i++) {
		for (int t = 0; t <= 360; t++) {
			x1 = R * sin(t) + x;
			y1 = R * cos(t) + y;
			glVertex2f(x1, y1);
		}
	}
	glEnd();
}


			</code></pre>
				</div>
			</div>
			<p>. . .</p>
<h3>4.&nbsp;&nbsp;&nbsp; Реализация функции изображения текста</h3>
<p>Функция использует в качестве аргументов текст неопределенного типа, который затем переводится в строковый; шрифт, координаты текста, радиус и коэффициент ширины данных.</p>
<p>glPushMatrix() - положить в стек текущую матрицу, а glPopMatrix() - вытащить со стека положенную туда матрицу.</p>
<p>Между этими двумя командами мы будем делать различные расчеты и рисовать текст.</p>
<p>glTranslatef() &ndash; это переход в точку, с которой нужно начать что-либо рисовать.</p>
<p>После нее следует преобразование строки из типа string, сконвертированного из типа Т, в&nbsp; тип char*.</p>
<p>Затем идет прохождение по массиву char* и с помощью функции glutStrokeWidth() получается целочисленное значение ширины каждого символа. Из всех значений выбирается максимальное. По формулам определяется коэффициент расширения для осей Ох и Оу, чтобы масштабировать текст:</p>

<!-- /////!!!!formula  7!!!!!///// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/f7.png">
	    <img src="<?php echo $folder_name ?>img/f7.png" alt="Формула 7">
	</a>
    </div>
    <br>
<!-- ///////////////////////////// -->
<p>Условимся, что максимальная высота символа = 100 пикселей, но это только для цифр. Можно, конечно, посчитать и для других символов, но нет необходимости вычислять пиксели и для них, пока что будет достаточно цифр.</p>
<p>glScalef() масштабирует символы текста, а glStrokeCharacter() выводит.</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Реализация функции отображения текста на алгоритмическом языке С++(развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
template&#60;class T>
static void drawText(T text, void* font, int text_x, int text_y, int R, int k)
{
	glColor3f(0.0, 0.0, 0.0);
	glPushMatrix();
	glTranslatef(text_x, text_y, 0.0);
	string s = to_string(text);
	char* s1 = newchar[s.size() + 1];
	for (int i = 0; i < s.size(); i++) {
		s1[i] = s.at(i);
	}
	s1[s.size()] = 0;
	char* c;
	int max_char_width = 0;
	int char_width = 0;
	for (c = s1; *c != '\0'; c++) {
		char_width = glutStrokeWidth(font, *c);
		if (max_char_width < char_width) max_char_width = char_width;
	}
	float expand_x = (float)1.5 * R / (float)(k * max_char_width);
	float expand_y = (float)1.5 * R / (float)(k * 100);
	glScalef(expand_x, expand_y, 1.0);
	for (c = s1; *c != '\0'; c++)
		glutStrokeCharacter(font, *c);
	glPopMatrix();
}

			</code></pre>
				</div>
			</div>
			<p>. . .</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Пример использования glutBitmapCharacter() на алгоритмическом языке С++(развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
void draw_string_bitmap(void* font, const char* string)
{
	while (*string)
	glutBitmapCharacter(font, *string++);
}

// далее где-то в коде
glRasterPos2f(0, 0);
draw_string_bitmap(GLUT_BITMAP_HELVETICA_18, "Hello!");
			</code></pre>
				</div>
			</div>
			<p>. . .</p>
<p>Для отображения текста с помощью Bitmap достаточно указать позицию с помощью glRasterPos2f() и посимвольно вывести каким-либо шрифтом, например GLUT_BITMAP_HELVECITCA_18, какую-либо строчку. Однако, этот шрифт нельзя масштабировать самостоятельно, из-за чего приходится пользоваться уже готовыми вариантами размеров данного шрифта.&nbsp;</p>
<p>Легче следить по математической зависимости за поведением векторного шрифта, чем за поведением растрового, учитывая его ограничения в масштабировании. Вследствие этого оперируем именно glutStrokeCharacter().</p>
<h3>5.&nbsp;&nbsp;&nbsp; Организация функции display()</h3>
<p>Первая часть функции &ndash; это инициализация и расчеты.</p>
<p>Во временные переменные копируются значения соответствующих глобальных переменных. Определяется высота дерева и минимальная ширина дерева &ndash; как в функции вертикальной печати. Инициализируются первоначальные значения известных переменных текущего уровня, индекса и числа пробелов для корня.</p>
<p>Задаются структура и два списка.</p>
<p>Далее, идет расчет радиуса для каждого из элементов дерева по ширине, высоте окна и ширине дерева. Именно здесь устанавливается глобальная переменная R.</p>
<p>Просчитываются координаты для первого узла &ndash; корня, обновляются списки и структура элемента.</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Пример организации функции display() на алгоритмическом языке С++(развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
	void display(void) {
	Tree&#60;T>* tree = (Tree&#60;T>*)glutContext.tree;
	int k = glutContext.k;
	int window_width = glutContext.window_width;
	int window_height = glutContext.window_height;
	int shift = glutContext.shift;
	int height = tree->getHeight();
	int maxLeafs = pow(2, height - 1); //максимальное число листов на нижнем уровне (нумерация с нуля)
	int width = 2 * maxLeafs - 1; //минимальная ширина дерева для печати (не конечная, но необходимая)
	int curLevel = 0; //номер строки (на выводе)
	int index = 0; //номер элемента в строке (нумерация с нуля)
	intfactSpaces = getPos(index, width, curLevel, height - 1); //позиция корня (число пробелов перед ним)
	pos node;
	vector&#60;Tree&#60;T>*> V;
	vector&#60;pos> Vi;
	int R; //радиускруга
	R = (window_width - 2 * shift) / (2 * width);
	if (2 * R * height > (window_height - 2 * shift)) R = (window_height - 2 * shift) / (2 * height);
	glutContext.R = R;
	tree->setCoordsForNode(window_width, window_height, shift, width, height, factSpaces, curLevel, R); //установили координаты корня при рисовании
	V.push_back(tree);
	node.col = factSpaces;
	node.str = curLevel;
	Vi.push_back(node);

			</code></pre>
				</div>
			</div>
<p>. . .</p>
<p>glClearColor() устанавливает белый цвет экрана, glClear() очищает его, glLineWidth() устанавливает ширину линии, с помощью которой будут отображаться в дальнейшем соединительные линии между вершинами, glEnable() с данным параметром устанавливает режим сглаживания.</p>
<p>Далее, реализуется обычное поперечное прохождение по дереву, какое использовалось в функции вертикальной печати.</p>
<p>При условии, что потомок слева имеет данные, не равные NULL, будет отображаться линия в его сторону, начиная с текущего элемента. То есть если у узла А слева узел с данными NULL, линия между ними чертиться не будет.</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Пример реализации поперечного прохождения по левым потомкам дерева на алгоритмическом языке С++(развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
glClearColor(1.0, 1.0, 1.0, 1.0);
glClear(GL_COLOR_BUFFER_BIT);
glLineWidth(2);
glEnable(GL_POINT_SMOOTH);
for (int i = 0; i < tree->getAmountOfNodes(); i++) {
	if (pow(2, curLevel) <= index + 1) {
		index = 0;
		curLevel++;
	}
	if (V.at(i)->getLeft() != NULL) {
		V.push_back(V.at(i)->getLeft());
		factSpaces = getPos(index, width, curLevel, height - 1);
		node.col = factSpaces;
		node.str = curLevel;
		Vi.push_back(node);
		index++;
		V.at(i)->getLeft()->setCoordsForNode(window_width, window_height, shift, width, height, factSpaces, curLevel, R);
		if (V.at(i)->getLeft()->getData() != NULL) {
			int x1 = V.at(i)->node_x;
			int y1 = V.at(i)->node_y;
			int x2 = V.at(i)->getLeft()->node_x;
			int y2 = V.at(i)->getLeft()->node_y;
			drawLine(x1, y1, x2, y2);
		}
	}
}
			</code></pre>
				</div>
			</div>
<p>. . .</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Пример реализации поперечного прохождения по правым потомкам дерева на алгоритмическом языке С++(развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
	if (V.at(i)->getRight() != NULL) {
	V.push_back(V.at(i)->getRight());
	factSpaces = getPos(index, width, curLevel, height - 1);
	node.col = factSpaces;
	node.str = curLevel;
	Vi.push_back(node);
	index++;
	V.at(i)->getRight()->setCoordsForNode(window_width, window_height, shift, width, height, factSpaces, curLevel, R);
	if (V.at(i)->getRight()->getData() != NULL) {
		int x1 = V.at(i)->node_x;
		int y1 = V.at(i)->node_y;
		int x2 = V.at(i)->getRight()->node_x;
		int y2 = V.at(i)->getRight()->node_y;
		drawLine(x1, y1, x2, y2);
	}
}
			</code></pre>
				</div>
			</div>
<p>. . .</p>
<p>Только после того, как нарисованы линии, нужно отобразить круги, а затем и текст.</p>
<p>Делается это все при условии, что данные таких элементов не равны NULL.</p>
<p>Затем проверяется значение переменной state. Если она равна 0, нарисуется просто белый круг, окаймленный черной окружностью.</p>
<p>В противном случае, допустим 1, нарисуется белый круг, окаймленный синей окружностью. То есть при наведении мыши (функцию работы с мышью мы рассмотрим позже). Но произойдет это, если координаты данного узла будут соответствовать области, в которой сейчас находится курсор.</p>
<p>Далее, рисуется текст и заканчивается цикл.</p>
<p>После рисования нужно сменить экранные буфера при помощи glutSwapBuffers(), ведь была &nbsp;включена двойная буферизация.</p>
<p>glDisable() отключает сглаживание при таком параметре.</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Пример вызова функций отображения кругов, текста, а также функции смены экранного буфера на алгоритмическом языке С++ (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
			if (V.at(i)->getData() != NULL) {
	if (glutContext.state == 0) {
		drawFillCircle(V.at(i)->node_x, V.at(i)->node_y, R);
	}
	else {
		drawFillCircle(V.at(i)->node_x, V.at(i)->node_y, R);
		if ((tree->getNodeByCoords(glutContext.x, glutContext.y, R)->node_x == V.at(i)->node_x)
			& (tree->getNodeByCoords(glutContext.x, glutContext.y, R)->node_y == V.at(i)->node_y))
			drawBlueCircle(V.at(i)->node_x, V.at(i)->node_y, R);
	}
	V.at(i)->setCoordsForText(k, R);
	drawText(V.at(i)->getData(), GLUT_STROKE_ROMAN, V.at(i)->text_x, V.at(i)->text_y, R, k);
}
}
glutSwapBuffers();
glDisable(GL_POINT_SMOOTH);
}
			</code></pre>
				</div>
			</div>
			<p>. . .</p>
<h3>6. &nbsp;&nbsp;&nbsp;Отображение уровней дерева</h3>
<p>Деление экрана пополам также справедливо для отобрадения уровней дерева отдельно для каждого уровня. Например, корень дерева должен располагаться по центру, соответственно, его x-координата &ndash; численно половина ширины окна (учтем то, что нужно вычесть два отступа). Его потомок слева имеет x-координату, расположенную по середине между левой границей рисования дерева и x-координатой своего родителя &ndash; корня. Потомок справа находится ровно в середине между x-координатой корня и правой границей. Все узлы на последующих уровнях так же будут располагаться в середине пространства, ограниченного слева и справа x-координатами ближайших по оси Ох узлов.</p>
<p>Для этого в функцию <b>setCoordsForNode()</b> вместо аргумента factSpaces, представляющего собой количество пробелов перед узлом (если бы это был вывод дерева в консоли), нужно поместить аргумент index, идентифицирующий индекс элемента отдельного уровня-массива.</p>
<p>И теперь node_x &ndash; x-координата узла будет высчитываться по такой формуле:</p>

<!-- /////!!!!formula  8!!!!!///// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/f8.png">
	    <img src="<?php echo $folder_name ?>img/f8.png" alt="Формула 8">
	</a>
    </div>
    <br>
<!-- ///////////////////////////// -->
<p>Соответственно, в самой функции node_x будет высчитываться иначе:</p>
<p>&nbsp;</p>
<table width="807">
<tbody>
<tr>
<td width="807">
<p>node_x = (window_width-2*shift)*abs(2*x-1)/pow(2,y+1)+shift;</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>В отличие от предыдущего варианта вычисления node_x, этот справедлив как для корня, так и для любого другого узла.</p>
<h3>7.&nbsp;&nbsp;&nbsp; Работа с мышкой в OpenGL. Регистрация нажатий мышкой</h3>
<p>GLUT предлагает Вам способ, чтобы зарегистрировать функцию, которая будет отвечать за обработку событий, создаваемых нажатиями клавиш мыши. Название этой функции glutMouseFunc(). Синтаксис выглядит следующим образом:</p>
<pre class="highlight"><code data-language="c">
void glutMouseFunc(void (*func)(int button, int state, int x, int y));</code></pre>
<p>Параметры:</p>
<p>*func - имя функции, которая будет обрабатывать события мыши.</p>
<p>С момента подписания glutMouseFunc(), функция, которая будет обрабатывать события мыши, должна иметь 4 параметра. Первый из них касается того, какая кнопка была нажата или отпущена. Этот аргумент может иметь одно из трех значений:</p>
<p>GLUT_LEFT_BUTTON;</p>
<p>GLUT_MIDDLE_BUTTON;</p>
<p>GLUT_RIGHT_BUTTON;</p>
<p>Второй аргумент относится к состоянию кнопки, то есть идентификации момента нажатия и отпускания кнопки. Возможные значения:</p>
<p>GLUT_DOWN;</p>
<p>GLUT_UP;</p>
<p>Если ответный вызов генерируется со статусом GLUT_DOWN, приложение может предположить, что GLUT_UP будет после этого события, даже если мышь перемещается за пределы окна. Остальные два параметра обеспечивают (х, у) координаты мыши относительно левого верхнего угла рабочей области окна.</p>
<p>Определение перемещения мыши</p>
<p>GLUT дает возможность обнаружения движения мыши для нашего приложения. Есть два типа движения для GLUT: активные и пассивные движения. Активное движение происходит при перемещении мыши и нажатия кнопки. Пассивные движения, когда мышь движется, но ни одна кнопка не нажата. Если приложение отслеживает движение манипулятора, будет сгенерировано событие в кадре во время периода, когда мышь движется.</p>
<p>Нужно зарегистрировать функцию, которая будет отвечать за обработку событий движения. Определено две различных функции: одна для отслеживания пассивных движений, а другая, чтобы отслеживать активные движения.</p>
<p>Синтаксис GLUT функций слежения за перемещением:</p>
<pre class="highlight"><code data-language="c">
void glutMotionFunc(void (*func) (int x,int y));
void glutPassiveMotionFunc(void (*func) (int x, int y));
</code></pre>
<p>Параметры:</p>
<p>*func - функция, которая будет отвечать за соответствующий тип движения.</p>
<p>Параметры функции обработки движения мыши являются (х, у) декартовы координаты курсора мыши относительно левого верхнего угла рабочей области окна.</p>
<p>Обнаружение попадания или выхода из рабочей области окна курсора мыши</p>
<p>GLUT может определять, когда мышь покидает или входит в рабочую область окна. Зарегистрируем функцию обратного вызова для обработки этих двух событий. GLUT функцией регистрации является обратный вызов glutEntryFunc() и синтаксис выглядит следующим образом:</p>
<pre class="highlight"><code data-language="c">void glutEntryFunc(void (*func)(int state));</code></pre>
<p>Параметры:</p>
<p>*func - функция, которая будет обрабатывать эти события.</p>
<p>Параметр функции, которая будет обрабатывать эти события, сообщает нам, если мышь попадает в левую область окна. GLUT определяет две константы, которые можно использовать в приложении[22]:</p>
<p>GLUT_LEFT;</p>
<p>GLUT_ENTERED;</p>
<p>Реализуем функцию работы с мышью.</p>
<p>Функция работы с мышью в качестве аргументов принимает текущие координаты курсора. Затем по функции нахождения узла по этим координатам определяется, попадает ли курсор в нужную область.</p>
<p>О том, что он не попадает, сообщит функция getNodeByCoords(), вернув значение NULL. Тогда придадим глобальной переменной state значение 0. Учтем: в функции display() это значение говорило о том, что соответствующий узел будет нарисован по умолчанию, то есть белый круг и черная окружность вокруг него.</p>
<p>Если значение не равно NULL, обновятся глобальные переменные x и y полученными значениями, обновится переменная state, допустим, значением 1.</p>
<p>В обоих случаях необходимо перерисовать изображение с помощью функции glutPostRedisplay().</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Пример работы с мышкой в Open GL на алгоритмическом языке С++ (развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
			template &#60;class T>
static void mouseMove(int x, int y) {
	Tree&#60;T>* tree = (Tree&#60;T>*)glutContext.tree;
	int R = glutContext.R;
	Tree&#60;T>* node = tree->getNodeByCoords(x, glutContext.window_height - y, R);
	if (node != NULL) {
		glutContext.x = x;
		glutContext.y = glutContext.window_height - y;
		glutContext.state = 1;
		glutPostRedisplay();
	}
	else {
		glutContext.state = 0;
		glutPostRedisplay();
	}
}
			</code></pre>
				</div>
			</div>
			<p>. . .</p>
<div class="spollers__item">
				<div class="spollers__title spoller">Итоговое отображение бинарного дерева (рисунок 8) на алгоритмическом языке С++(развернуть)...</div>
				<div class="spollers__text">
			<pre class="highlight"><button class="btn-copy" data-clipboard-target="#GetCount">COPY</button><code data-language="c" id="GetCount">
vector&#60;int> arr = { 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24 };
Tree&#60;int>* tree = newTree&#60;int>(arr.at(0));
for (int i = 0; i < arr.size(); i++) {
	int left = 2 * i + 1;
	int right = left + 1;
	if (left < arr.size()) {
		tree->findElement_insertLeft(tree, arr.at(i), arr.at(left));
	}
	if (right < arr.size()) {
		tree->findElement_insertRight(tree, arr.at(i), arr.at(right));
	}
}
tree->drawTree(argc, argv, 800, 600, 10, 2);

			</code></pre>
				</div>
			</div>
			<p>. . .</p>
<!-- /////////////////////////////////////////////RISYNOK  8//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/8.png">
	    <img src="<?php echo $folder_name ?>img/8.png" alt="Рисунок 8">
	</a>
    </div>
    <br>
<p class="text-center">Рисунок 8 &ndash; Отображение полного дерева</p>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->


</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>