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
<h2>1. Создание графа.</h2>
<p>Создадим глобальный объект класса граф, визуализацию которого нам необходимо выполнить.</p>
<code class="highlight">Graph&lt;int&gt;graph;</code>
<p>Заполнение графа выполним в функции <code class="highlight">Graph&lt;int&gt; makeGraph()</code>, описание которой представлено ниже. Для взвешенного графа дополнительно требуется получить вес ребра, для невзвешенного этого делать не нужно.</p>
<pre class="highlight"><code data-language="c">
Graph&lt;int> makeGraph()
{
	Graph&lt;int> graph; // создание графа, содержащего вершины с номерами целого типа
	int amountVerts, amountEdges, sourceVertex, targetVertex, edgeWeight; // создание необходимых для ввода графа переменных
	cout << "Введите количество вершин графа: "; cin >> amountVerts; cout << endl; // ввод количества рёбер графа в переменную amountVerts
	cout << "Введите количество ребер графа: "; cin >> amountEdges; cout << endl; // ввод количества рёбер графа в переменную amountEdges
	for (int i = 1; i <= amountVerts; ++i) {
		int* vertPtr = &amp;i; // запоминаем адрес вершины с помощью указателя
		graph.InsertVertex(*vertPtr); //передаём ссылку на вершину в функцию InsertVertex; происходит вставка вершины в вектор вершин
	}

	for (int i = 0; i < amountEdges; ++i) {
		cout << "Исходная вершина: "; cin >> sourceVertex; cout << endl; // ввод исходной вершины
		int* sourceVertPtr = &amp;sourceVertex; // запоминаем адрес исходной вершины
		cout << "Конечная вершина: "; cin >> targetVertex; cout << endl; // ввод вершины, до которой будет идти ребро от исходной вершины
		int* targetVertPtr = &amp;targetVertex; // запоминаем адрес конечной вершины (до которой будет идти ребро от исходной вершины)

		cout << "Вес ребра: "; cin >> edgeWeight; cout << endl; // ввод числового значения веса ребра в переменную edgeWeight
		graph.InsertEdge(*sourceVertPtr, *targetVertPtr, edgeWeight); // вставка ребра весом edgeWeight между исходной и конечной вершинами
	}
	cout << endl;
	graph.Print();//печать матрицы смежности
	return graph;
}
</code></pre>

<p>В функции main() выполним присвоение:</p>
<code class="highlight">graph = makeGraph();</code>
<h2>2. Функции и методы необходимые для рисования элементов графа.</h2>
<p>Функция setCoord устанавливает координаты для вершин графа. Принимает значение i-ой вершины и общее количество вершин. Вершины располагаются равномерно по кругу радиусом R_. Данный алгоритм расположения вершин достаточно прост в реализации. Также он позволяет не перекрывать ребра вершинами. Кроме того данная функция устанавливает радиус вершин R(R-глобальная переменная) и позволяет масштабировать граф в зависимости от размеров окна. Переменные WinH и WinW являются глобальными и содержат размеры окна. Описание получения размеров в функции main():</p>
<pre class="highlight"><code data-language="c">
 WinW = glutGet(GLUT_WINDOW_WIDTH);
 WinH = glutGet(GLUT_WINDOW_HEIGHT);</code></pre>
<p>Координаты i-ой вершины заносятся в i-ый элемент массива структур:</p>
<pre class="highlight"><code data-language="c">
struct vertCoord
{
	int x, y;
};
vertCoord vertC[20];
</code></pre>
<p>Описание функции setCoord:</p>
<pre class="highlight"><code data-language="c">
void setCoord(int i, int n)
{
	int R_;
	int x0 = WinW / 2;
	int y0 = WinH / 2;
	if (WinW > WinH)
	{
		R = 5 * (WinH / 13) / n;
		R_ = WinH / 2 - R - 10;
	}
	else {
		R = 5 * (WinW / 13) / n;
		R_ = WinW / 2 - R - 10;
	}
	float theta = 2.0f * 3.1415926f * float(i) / float(n);
	float y1 = R_ * cos(theta) + y0;
	float x1 = R_ * sin(theta) + x0;

	vertC[i].x = x1;
	vertC[i].y = y1;
}
</code></pre>
<p>Функция drawCircle рисует круг и окружность радиуса R и заданными координатами, которые берутся из массива структур vertC. Изображение окружности уже встречалось нам в изображении дерева, поэтому много объяснений не требует.</p>
<p>Описание функции:</p>
<pre class="highlight"><code data-language="c">
void drawCircle(int x, int y, int R) //рисуем круг в заданных координатах
{
	glColor3f(1.0, 1.0, 1.0);
	float x1, y1;
	glBegin(GL_POLYGON);
	for (int i = 0; i < 360; i++)
	{
		float theta = 2.0f * 3.1415926f * float(i) / float(360);
		y1 = R * cos(theta) + y;
		x1 = R * sin(theta) + x;;
		glVertex2f(x1, y1);
	}
	glEnd();

	glColor3f(0.0f, 0.0f, 0.0f);
	float x2, y2;
	glBegin(GL_LINE_LOOP);
	for (int i = 0; i < 360; i++)
	{
		float theta = 2.0f * 3.1415926f * float(i) / float(360);
		y2 = R * cos(theta) + y;
		x2 = R * sin(theta) + x;
		glVertex2f(x2, y2);
	}
	glEnd();
}
</code></pre>
<p>Функция drawText размещает текст по заданным координатам. Данная функция используется и для изображения номера вершины, и для веса ребра. Числовое значение преобразуется в строку и выводится с помощью функции glutBitmapCharacter.</p>
<p>Описание функции:</p>
<pre class="highlight"><code data-language="c">
void drawText(int nom, int x1, int y1)
{
	GLvoid* font = GLUT_BITMAP_HELVETICA_18;
	string s = to_string(nom);
	glRasterPos2i(x1 - 5, y1 - 5);
	for (int j = 0; j < s.length(); j++)
		glutBitmapCharacter(font, s[j]);
}
</code></pre>
<p>Функция drawVertex изображает n вершин графа(окружность и цифру внутри)</p>
<p>Реализация функции:</p>
<pre class="highlight"><code data-language="c">
void drawVertex(int n)
{
	for (int i = 0; i < n; i++) {
		drawCircle(vertC[i].x, vertC[i].y, R);
		drawText(i+1, vertC[i].x, vertC[i].y);
	}
}
</code></pre>
<p>Функция drawLine изображает ребро. Реализация отличается в зависимости ориентированности графа. В ориентированном графе необходимо на конце ребра нарисовать треугольник. Реализуется это следующим образом:</p>
<p>Сначала необходимо вычислить нормализованный вектор от кончика стрелки до основания. Если линия от (x1, y1) до (x2, y2), вектор направления:</p>
<p>float vx = x1 - x2;</p>
<p>float vy = y1 - y2;</p>
<p>float s= 1.0f / sqrt(vx * vx + vy * vy);</p>
<p>vx *= s;</p>
<p>vy *= s;</p>
<p>Чтобы получить вектор с углом 45 градусов от наконечника, вычислите сумму этого вектора направления и ортогональное ему направление. Два вектора, ортогональные (vx, vy):</p>
<p>(vy, -vx)</p>
<p>(-vy, vx)</p>
<p>Тогда суммы ортогонального вектора и вектора направления:</p>
<p>(vx, vy) + (vy, -vx) = (vx + vy, vy - vx)</p>
<p>(vx, vy) + (-vy, vx) = (vx - vy, vy + vx)</p>
<p>Чтобы получить координаты точек головы стрелки, добавьте эти векторы в конечную точку, масштабированные с желаемым размером наконечника. С размером d для наконечника стрелки 3 точки наконечника стрелки:</p>
<p>(x2, y2)</p>
<p>(x2, y2) + d * (vx + vy, vy - vx)</p>
<p>(x2, y2) + d * (vx - vy, vy + vx)</p>
<p>Также необходимо перенести вершину треугольника вдоль линии на расстояние радиуса(линия рисуется от центра одного круга до центра другого). Делается это следующим образом:</p>
<p>x2 = x2+R * vx;</p>
<p>y2 = y2+R * vy;</p>
<p>Описание функции:</p>
<pre class="highlight"><code data-language="c">
void drawLine(int text, int x0, int y0, int x1, int y1) //ребро ориентированный взвешенный граф
{
	glColor3i(0, 0, 0);
	glBegin(GL_LINES);
	glVertex2i(x0, y0);
	glVertex2i(x1, y1);
	glEnd();
	drawText(text, (x0 + x1) / 2 + 10, (y0 + y1) / 2 + 10);

	float vx = x0 - x1;
	float vy = y0 - y1;
	float s = 1.0f / sqrt(vx * vx + vy * vy);
	vx *= s;
	vy *= s;
	x1 = x1+R * vx;
	y1 = y1+R * vy;

	glColor3i(0, 0, 0);
	glBegin(GL_TRIANGLES);
	glVertex2f(x1, y1);
	glVertex2f(x1 + 10 * (vx + vy), y1 + 10 * (vy - vx));
	glVertex2f(x1 + 10 * (vx - vy), y1 + 10 * (vy + vx));
	glEnd();
}

void drawLine(int text, int x0, int y0, int x1, int y1) //ребро неориентированный взвешенный граф
{
	glColor3f(0.0f, 0.0f, 0.0f);
	glBegin(GL_LINES);
	glVertex2i(x0, y0);
	glVertex2i(x1, y1);
	glEnd();

	drawText(text, (x0 + x1) / 2 + 10, (y0 + y1) / 2 + 10);
}
</code></pre>

<p>Метод DrawGraph изображает граф. Сначала всем вершинам устанавливаются координаты. Затем производится проход по матрице смежности и изображаются ребра. После чего изображаются вершины.</p>
<p>Реализация метода для неориентированного графа(для ориентированного будет немного отличаться):</p>
<pre class="highlight"><code data-language="c">
template&lt;class T>
void Graph&lt;T>::DrawGraph()
{
	int n = vertList.size();
	for (int i = 0; i < n; i++)
	{
		setCoord(i, n);
	}
	for (int i = 0; i < n; i++)
	{
		for (int j = i+1; j < n; j++)
		{
			int a = adjMatrix[i][j];
			if (a != 0)
			{
				drawLine(a, vertC[i].x, vertC[i].y, vertC[j].x, vertC[j].y);
			}
		}
	}
	drawVertex(n);
}
</code></pre>
<p>Функция reshape отвечает за масштабируемость изображения.</p>
<p>Реализация функции:</p>
<pre class="highlight"><code data-language="c">
void reshape(int w, int h)
{
	WinW = w;
	WinH = h;
	glViewport(0, 0, (GLsizei)WinW, (GLsizei)WinH);
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
	gluOrtho2D(0, (GLdouble)WinW, 0, (GLdouble)WinH);
	glutPostRedisplay();
}

</code></pre>
<p>Функция display отвечает за изображение:</p>
<pre class="highlight"><code data-language="c">
void display()
{
	glShadeModel(GL_SMOOTH);
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
	gluOrtho2D(0, WinW, 0, WinH); //ставим начало координат в левый нижний угол
	glViewport(0, 0, WinW, WinH);
	glClearColor(1.0, 1.0, 1.0, 1.0);
	glClear(GL_COLOR_BUFFER_BIT);

	graph.DrawGraph();

	glutSwapBuffers();
}
</code></pre>
<p>Описание функции main():</p>
<pre class="highlight"><code data-language="c">
int main(int argc, char* argv[])
{
	setlocale(LC_ALL, "rus");
	glutInit(&argc, argv);

	graph = makeGraph();

	glutInitDisplayMode(GLUT_DOUBLE | GLUT_RGBA);
	glutInitWindowSize(900, 720);
	glutCreateWindow("Graph");
	WinW = glutGet(GLUT_WINDOW_WIDTH);
	WinH = glutGet(GLUT_WINDOW_HEIGHT);
	glutDisplayFunc(display);
	glutReshapeFunc(reshape);
	glutMainLoop();

	return 0;
}
</code></pre>
<p>Пример изображения графа:</p>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>/img/img1.png">
	    <img src="<?php echo $folder_name ?>/img/img1.png" alt="Рисунок 1">
	</a>
    </div>
    <br>
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

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