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
<main class="col-md markdown-body text-justify">


<h2 id="1">1. <!-- сюда заголовки 1 уровня и ссылки на них в index.config.php, соответствующие id --></h2>
<h3>1.1 <!-- сюда заголовки 2 уровня --></h3>
<p>&#8226; <!-- сюда абзац --></p>
<!-- перенос строки, если нужен (после тегов <p> не нужен) -->
<br>
<!-- переменные или другой код, находящийся в тексте обарачивать в этот тег -->
<code class="highlight"></code>
<!-- куски кода между тегами <code> -->
<pre class="highlight"><code data-language="c"></code></pre>
<!-- в коде галочки заменять на соответствующие html элементы -->
<!-- < , > , большой пробел, обычный пробел, соответственно -->
&#60; &#62; &#8195; &#8195; 
<!-- если нужно немного выделить текст -->
<span class="lead"></span>
<!-- картинка, при нажатии всплывает -->
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.png">
	    <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
	</a>
</div>
<p class="text-center">Рисунок 1 - </p>

<!-- упорядоченный список -->
<ol>
    <li></li>
</ol>
<!-- неупорядоченный список -->
<ul>
    <li></li>
</ul>
<!-- таблица -->
<table>
<thead><!-- первый row -->
    <tr>
        <th></th><!-- ячейка -->
        <th></th>
        <th></th>
    </tr>
</thead>
<tbody><!-- остальные row -->
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
<tbody>

</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>