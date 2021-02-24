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

<h2 id="1">1. Постановка задачи</h2>
<p>
Необходимо дополнить Лабораторную работу №23 (АДТ. Контейнеры) диаграммой классов (картинкой или скриншотом).<br>
Программа для рисования UML-диаграмм может использоваться любая. В качестве примера приводится UMLet (Рисунок 1):<br>
<div class="gallery">
	<a href="<?php echo $folder_name ?>img/1.png">
	    <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
	</a>
</div><p>&nbsp;</p>
<p class="text-center">Рисунок 1 - Программа UMLet </p>
<br>Интерфейс данной программы интуитивно понятен, а возможности моделирования полностью покрывают требования данной задачи.
</p>
<?php
if ($sendwork_off == false) { ?>
    <h2 id="2">4. Отправить результат работы</h2>
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