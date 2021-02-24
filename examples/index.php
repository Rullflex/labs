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
<h2 id="1">Варианты правильного отчёта</h2>
<div class="block__gallery gallery-block gallery">
	<a href="<?php echo $folder_name ?>img/right-1.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-1.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-2.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-2.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-3.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-3.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-4.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-4.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-5.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-5.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-6.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-6.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-7.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-7.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-8.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-8.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-9.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-9.jpg" alt="">
	</a>
	<a href="<?php echo $folder_name ?>img/right-10.jpg" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/right-10.jpg" alt="">
	</a>
</div>
<p class="text-success">Это вариант правильного отчёта. Нет только text-файла. Его надо добавить.</p>
<h2 id="2">Недопустимый вид отчёта</h2>
<div class="block__gallery gallery-block gallery">
	<a href="<?php echo $folder_name ?>img/wrong.png" class="gallery-block__item">
		<img src="<?php echo $folder_name ?>img/wrong.png" alt="">
	</a>
</div>
<p class="text-danger">Здесь нет полного кода, а также скриншот с результатами работы программы обрезан. И нет кода в text.</p>

</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>