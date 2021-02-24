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


<h2 id="1">1. </h2>
<p class="text-justify">&#8226; </p>
<code class="highlight"></code>
<pre class="highlight"><code data-language="c"></code></pre>
&#60; &#62; &#8195; &#8195; 
<span class="lead"></span>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.png">
	    <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
	</a>
</div>
<p class="text-center lead my-2">Рисунок 1 - </p>
<table>
<thead>
</thead>
<tbody>
<tbody>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>