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
<h2>Авторизация</h2>
<div class="alert alert-warning">Нет аккаунта? <a href="reg/" class="btn btn-warning ml-2">Зарегистрироваться</a></div>
<?php
    if (isset($_SESSION['user'])){			//если пользователь авторизован
        echo '<div class="alert alert-secondary">Вы уже авторизованны!</div>';
    }else{ ?>
<form action="" autocomplete="on" method="post" id="form-auth">
    <div class="form-group">
        <label for="log">Логин</label>
        <input type="text" name="log" id="" class="form-control mb-2" required>
        <label for="password">Пароль</label>
        <input type="password" name="password" id="" class="form-control mb-" required>
    </div>
    <button type="submit" class="btn btn-primary" id="btnSubmit"><span id="btnSubmit__spiner" class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Войти</button>
    
    <div id="form-success-hidden" class="hidden">
        <hr class="allert-hr">
        <div class="alert alert-success">Успешно!</div>
    </div>
    <div id="form-danger-hidden" class="hidden">
        <hr class="allert-hr">
        <div class="alert alert-danger"><span id="error_num"></span></div>
    </div>
</form>
    <?php } ?>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
<script src="auth/login.js"></script>
</body>
</html>