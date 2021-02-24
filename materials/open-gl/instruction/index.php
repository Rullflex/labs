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
<p><strong>&nbsp;</strong></p>
<ol>
<li>Пишем в поисковике &ldquo;glut&rdquo; и переходим на официальный сайт OpenGL:</li>

</ol><!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.png">
	    <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="2">
<li>Кликаем на ссылку для скачивания:</li>
</ol><!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/2.png">
	    <img src="<?php echo $folder_name ?>img/2.png" alt="Рисунок 2">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="3">
<li>Выбираем последнюю версию:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/3.png">
	    <img src="<?php echo $folder_name ?>img/3.png" alt="Рисунок 3">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="4">
<li>Вскоре начнется автоматическое скачивание:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/4.png">
	    <img src="<?php echo $folder_name ?>img/4.png" alt="Рисунок 4">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="5">
<h2 id="2"></h2>
<li>Для распаковки скачанного архива потребуются права администратора, поэтому программу-архиватор нужно &laquo;Запустить от имени администратора&raquo;:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/5.png">
	    <img src="<?php echo $folder_name ?>img/5.png" alt="Рисунок 5">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="6">
<li>Распаковываем архив, куда будет удобнее:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/6.png">
	    <img src="<?php echo $folder_name ?>img/6.png" alt="Рисунок 6">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="7">
<h2 id="3"></h2>
<li>Откладываем это все в сторону, ведь для дальнейшей работы потребуется программа CMake, поэтому возвращаемся снова к поисковику и ищем ее:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/7.png">
	    <img src="<?php echo $folder_name ?>img/7.png" alt="Рисунок 7">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="8">
<li>Скачиваем последнюю версию (в качестве примера была выбрана 32-битная версия)</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/8.png">
	    <img src="<?php echo $folder_name ?>img/8.png" alt="Рисунок 8">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="9">
<h2 id="4"></h2>
<li>Установка вполне типичная, требуется обратить внимание лишь на следующее:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/9.png">
	    <img src="<?php echo $folder_name ?>img/9.png" alt="Рисунок 9">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="10">
<li>Возвращаемся к распакованной архиву (в данном примере это папка freeglut-3.2.1) и создаем внутри нее папку build для дальнейшей работой с CMake:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/10.png">
	    <img src="<?php echo $folder_name ?>img/10.png" alt="Рисунок 10">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="11">
<h2 id="5"></h2>
<li>Запускаем программу CMake и устанавливаем пути исходников (freeglut-3.2.1) и нового проекта (freeglut-3.2.1/build), затем нажимаем Configure:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/11.png">
	    <img src="<?php echo $folder_name ?>img/11.png" alt="Рисунок 11">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="12">
<li>Выбираем версию Visual Studio и целевую архитектуру:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/12.png">
	    <img src="<?php echo $folder_name ?>img/12.png" alt="Рисунок 12">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="13">
<li>Ожидаем окончания конфигурирования:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/13.png">
	    <img src="<?php echo $folder_name ?>img/13.png" alt="Рисунок 13">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="14">
<h2 id="6"></h2>
<li>Начинаем генерацию проекта:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/14.png">
	    <img src="<?php echo $folder_name ?>img/14.png" alt="Рисунок 14">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="15">
<li>Отсутствие красных полей означает, что все прошло успешно и можно переходить к следующему шагу (если есть красные, снова нажмите Generate):</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/15.png">
	    <img src="<?php echo $folder_name ?>img/15.png" alt="Рисунок 15">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="16">
<h2 id="7"></h2>
<li>Далее запускаем сгенерированный проект:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/16.png">
	    <img src="<?php echo $folder_name ?>img/16.png" alt="Рисунок 16">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="17">
<h2 id="8"></h2>
<li>Выполняем сборку проекта:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/17.png">
	    <img src="<?php echo $folder_name ?>img/17.png" alt="Рисунок 17">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="18">
<li>Теперь создаем новый проект (так, как это делается обычно). В данном примере созданный проект будет называться TestApp Переходим в папку проекта и создаем папки Debug, includes и libs:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/18.png">
	    <img src="<?php echo $folder_name ?>img/18.png" alt="Рисунок 18">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="19">
<li>Переходим в папку freeglut-3.2.1/build/bin/Debug и из нее копируем файл freeglutd.dll в папку Debug проета:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/19.png">
	    <img src="<?php echo $folder_name ?>img/19.png" alt="Рисунок 19">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="20">
<li>Переходим в папку freeglut-3.2.1/build/lib/Debug и из нее копируем все содержимое в папку libs проета:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/20.png">
	    <img src="<?php echo $folder_name ?>img/20.png" alt="Рисунок 20">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="21">
<li>Переходим в папку freeglut-3.2.1/include/GL и из нее копируем все содержимое в папку includes проекта:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/21.png">
	    <img src="<?php echo $folder_name ?>img/21.png" alt="Рисунок 21">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="22">
<h2 id="9"></h2>
<li>Возвращаемся в наш проект в Visual Studio и переходим к свойствам проекта:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/22.png">
	    <img src="<?php echo $folder_name ?>img/22.png" alt="Рисунок 22">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="23">
<li>Во вкладке Каталоги VC++ переходим к Включаемым каталогам и добавляем туда папку includes:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/23.png">
	    <img src="<?php echo $folder_name ?>img/23.png" alt="Рисунок 23">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="24">
<li>Во вкладке Каталоги VC++ переходим к Каталогам библиотек и добавляем туда папку includes:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/24.png">
	    <img src="<?php echo $folder_name ?>img/24.png" alt="Рисунок 24">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="25">
<li>Во вкладке Компоновщик/Общие переходим к Дополнительным каталогам библиотек и добавляем туда папку libs:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/25.png">
	    <img src="<?php echo $folder_name ?>img/25.png" alt="Рисунок 25">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="26">
<li>Во вкладке Компоновщик/Ввод переходим к Дополнительным зависимостям и добавляем туда папку файл freeglutd.lib:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/26.png">
	    <img src="<?php echo $folder_name ?>img/26.png" alt="Рисунок 26">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<ol start="27">
<h2 id="10"></h2>
<li>Нажимаем &laquo;Применить&raquo; и выходим из свойств проекта. Остается проверить выполненные настройки. Создаем исполняемый файл в проекте и вводим следующий текст:</li>
</ol>
<pre class="highlight"><code data-language="c">
#include &lt;glut.h&gt;
&nbsp;
void renderScene(void)
{
 glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
&nbsp;
 glBegin(GL_TRIANGLES);
 glVertex3f(-0.5, -0.5, 0.0);
 glVertex3f(0.0, 0.5, 0.0);
 glVertex3f(0.5, -0.5, 0.0);
 glEnd();
&nbsp;
 glutSwapBuffers();
}
&nbsp;
int main(int argc, char** argv)
{
 // инициализация
 glutInit(&amp;argc, argv);
 glutInitDisplayMode(GLUT_DEPTH | GLUT_DOUBLE | GLUT_RGBA);
 glutInitWindowPosition(100, 100);
glutInitWindowSize(400, 400);
 glutCreateWindow("Урок 1");
&nbsp;
// регистрация обратных вызовов
glutDisplayFunc(renderScene);
// Основной цикл GLUT
 glutMainLoop();
&nbsp;
 return 1;
}
</code></pre>
<ol start="28">
<h2 id="11"></h2>
<li>Затем собираем проект F7 и запускаем F5:</li>
</ol>
<!-- /////////////////////////////////////////////RISYNOK  1//////////////////////////////////////// -->
<p>&nbsp;</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/27.png">
	    <img src="<?php echo $folder_name ?>img/27.png" alt="Рисунок 27">
	</a><p>&nbsp;</p>
<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
<p>&nbsp;</p>
<p>Если вывод вашей программы соответствует выводу на скриншоте, то все шаги инструкции были выполнены правильно. Теперь вы можете приступать к программированию с использованием OpenGL.</p>

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