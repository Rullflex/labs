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
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://docs.google.com/presentation/d/e/2PACX-1vQVJS3FzHxq7BPujGFlLTMSUWipOblheG5OoagaS0sV0qToXpEh07Fwt9fh-oBBB3jjZEw5NFbVaSTq/embed?start=false&loop=true&delayms=5000" frameborder="0" width="1440" height="839" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>