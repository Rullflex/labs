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
 <h2>Алгоритм Дейкстры</h2>   
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://docs.google.com/presentation/d/e/2PACX-1vR0BR2oDzSQr6E6nW7rBhbNHwjGUZIOsT4MWf9bYuEhgWp9YZIXIuBqD1HjZK5Ani1mPXUSSjqPn8Zy/embed?start=false&loop=true&delayms=5000" frameborder="0" width="1200" height="929" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div>  
<h2>Теория графов</h2>
<div class="embed-responsive embed-responsive-16by9">
 <iframe class="embed-responsive-item" src="https://docs.google.com/presentation/d/e/2PACX-1vQSijhxmsKzCs7uIUUsNjteBigHYJOw8xxYbhC9v18UjxU0BSJc3IHo8OgjhXVRvNx01kxG88qKvGT9/embed?start=false&loop=true&delayms=5000" frameborder="0" width="1200" height="929" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div> 
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>