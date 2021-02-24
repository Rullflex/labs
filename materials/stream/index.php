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
<p>&#8226; Поток определяется как последовательность байтов и не зависит от конкретного устройства, с которым производится обмен (оперативная  память,  файл  на  диске, клавиатура  или  принтер).  Обмен с  потоком  для  увеличения  скорости  передачи  данных производится,  как  правило,  через  специальную  область  оперативной  памяти —  буфер. Буфер накапливает байты, и фактическая передача данных выполняется после заполнения буфера. При вводе это дает возможность исправить ошибки, если данные из буфера еще не отправлены в программу.</p>
<p>&#8226; Существуют три основных класса файлового ввода/вывода в C++:</p>
<ol>
    <li>ifstream (является дочерним классу istream);</li>
    <li>ofstream (является дочерним классу ostream);</li>
    <li>fstream (является дочерним классу iostream).</li>
</ol>
<p>&#8226; С помощью классов файлового ввода/вывода можно выполнять однонаправленный файловый ввод, однонаправленный файловый вывод и двунаправленный файловый ввод/вывод. Для использования нужно всего лишь подключить заголовочный файл <i>fstream</i>.</p>
<p>&#8226; В отличие от потоков <i>cout, cin, cerr</i> и <i>clog</i>, которые сразу же можно использовать, файловые потоки должны быть явно установлены программистом. То есть, чтобы открыть файл для чтения и/или записи, нужно создать объект соответствующего класса файлового ввода/вывода, указав имя файла в качестве параметра. Затем, с помощью операторов вставки (<<) или извлечения (>>), можно записывать данные в файл или читать содержимое файла. После этого нужно закрыть файл: явно вызвать метод <i>close()</i> или просто позволить файловой переменной ввода/вывода выйти из области видимости (деструктор файлового класса ввода/вывода закроет этот файл автоматически вместо нас).</p>

<h2 id="2">1. Открытие файла</h2>
<p>&#8226; Для работы с файлом необходимо создать переменную, которая будет отвечать за данный файл.</p>
<p>&#8226; Пример создания переменной, отвечающей за файл на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">
ofstream fout;  //Для записи в файл
ifstream fin; //Для чтения из файла
</code></pre>
<p>&#8226; Далее необходимо открыть нужный файл. Это можно сделать двумя способами:  </p>
<ol>
    <li>При помощи инициализации;</li>
    <pre class="highlight"><code data-language="c">
    ofstream fout([путь к файлу], [режим работы]);
    </code></pre>

    <li>помощью метода <i>open</i>;</li>
    <pre class="highlight"><code data-language="c">
    ifstream fin;
    fin.open([путь к файлу], [режим работы]);
    </code></pre>
</ol>

<h2 id="3">2. Проверка открытия файла</h2>
<p>&#8226; Проверить, был ли файл открыт, можно с помощью метода  <i>is_open()</i>, который используется в связке с  <i>if</i> , так как возвращает  <i>true,</i> если файл открыт, и  <i>false</i> в обратном случае:</p>
<p>&#8226; Пример проверки открытия файла с помощью метода  <i>is_open()</i> на алгоритмическом языке С++  </p>
<pre class="highlight"><code data-language="c">
if(fin.is_open())
{ /*Тут ваши действия с файлом*/ }
</code></pre>

<h2 id="4">3. Потоковый вывод </h2>
<p>&#8226; Для форматируемых потоков вывод, как правило, осуществляется перегруженной операцией сдвига влево <i>operator</i><<, а ввод перегруженной операцией сдвига вправо <i>operator</i>>>. Операции перегружены для всех стандартных типов. Для не символьных типов при выводе выполняется преобразование из двоичного формата в символьный тип, при вводе – преобразование из символьного типа во внутренний двоичный.</p>
<p>&#8226; Примеры вывода форматируемых потоков на алгоритмическим языке С++ </p>
<pre class="highlight"><code data-language="c">
stream<&#60;3.4;stream<<’\n’; //вывод константы
stream<&#60;3.45/1.23+0.67; stream<<’\n’; //вывод выражения
int a=10;stream<&#60;a; stream<<’\n’; //вывод целой переменной double b=4.123e-2; 
stream<&#60;b; stream<<’\n’; //вывод вещественной константы
char c=’a’; stream<<’a’; stream<<’\n’; //вывод символьной переменной
stream<&#60;a<&#60;b<<’\n’; //вывод нескольких значений
char S[]=”string1\n”;
stream<&#60;S; //вывод строки символов
</code></pre>
<p>&#8226; Символы выводятся в поток без преобразования. Для вывода символов можно использовать методы, указанные в таблице 1.</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.png">
	    <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
	</a>
</div>
<p class="text-center">Таблица 1 – Методы для вывода символов.</p>


<h2 id="5">4. Потоковый вывод </h2>
<p>&#8226; Ввод значений осуществляется из входного потока в переменные программы, выполняется одинаково для всех потоков: </p>
<p>&#8226; Пример потокового ввода на алгоритмическом языке С++ </p>
<pre class="highlight"><code data-language="c">
stream>>a;
stream>>a>>b;

</code></pre>
<p>&#8226; Ввод в переменную завершается, если очередной символ в потоке не соответствует типу вводимого значения. Стандартными разделителями в потоке являются: ‘ ‘(пробел), ‘\n’, ‘\t’. Символы читаются из потока без преобразования. Поместить в символьную переменную любой символ (в том числе и символ разделитель) можно с помощью методов, указанных в таблице 2.</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/2.png">
	    <img src="<?php echo $folder_name ?>img/2.png" alt="Рисунок 2">
	</a>
</div>
<p class="text-center">Таблица 2 – Методы, позволяющие поместить в символьную переменную любой символ.</p>
<p>&#8226; Ввод символьных массивов и строк выполняется с помощью операции «>>» до первого символа-разделителя (обычно пробела). Для ввода строк с пробелами используют методы <i>get() </i> и <i>getline()</i>, описанные в таблице 3.</p>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/3.png">
	    <img src="<?php echo $folder_name ?>img/3.png" alt="Рисунок 3">
	</a>
</div>
<p class="text-center">Таблица 3 – Методы get() и getline().</p>
<p>&#8226; Ввод в двоичные файлы производится методом <i>read</i>: 
<pre class="highlight"><code data-language="c">istream&read(char*buf, streamsize size)</code></pre></p>
<p>&#8226; В данном примере метод читает <i>size</i> символов в массив <i>buf</i>. Символы разделители на ввод не влияют.</p>


<h2 id="6">5. Режимы работы с файлом </h2>
<p>&#8226; Режим работы задаётся при открытии файла. Для этого в классе ios(стандартный класс) предусмотрены несколько констант, описанных в таблице 4.</p>
<table style="margin: auto;">
<thead><!-- первый row -->
    <tr>
        <th>Константы:</th><!-- ячейка -->
        <th>Работа с файлом:</th>
    </tr>
</thead>
<tbody><!-- остальные row -->
    <tr>
        <td>ios::in</td>
        <td>Открыть файл для чтения</td>
    </tr>
    <tr>
        <td>ios::out</td>
        <td>Открыть файл для записи</td>
    </tr>
    <tr>
        <td>ios::app</td>
        <td>Открыть файл для записи в конец файла</td>
    </tr>
    <tr>
        <td>ios::trunc</td>
        <td>Удалить содержимое файла</td>
    </tr>
    <tr>
        <td>ios::binary</td>
        <td>Открыть файл в двоичном режиме</td>
    </tr>
</tbody>
</table>
<p class="text-left">Таблица 4 – Константы, определяющие режим работы с файлом.</p>
<p>&#8226; Режимы можно комбинировать между собой с помощью логического ИЛИ –знак «|». По умолчанию все классы открывают файл в потоковом режиме. Например,  класс ofstream открывает файлы в режиме [ios::out | ios::trunc] <i>(Файл открывается в потоковом режиме, стирается и доступен для записи)</i>; класс ifstream открывает файлы в режиме [ios::in] <i>(Файл открывается в потоковом режиме и доступен для чтения)</i>. Таким образом, не надо указывать эти режимы самостоятельно.</p>

<h2 id="7">Список литературы</h2>
<ol>
    <li> Брюс Эккель, Чак Эллисон. Философия C++. Практическое программирование, 2004 – 127 с</li>
    <li> Pоберт Лафоре. Объектно-ориентированное программирование в C++, 2004 – 536 с.</li>
</ol>

</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>