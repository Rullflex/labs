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
<h2 id="">Регистрация</h2>
<form action="" autocomplete="on" method="post" id="form-reg">
    <div class="form-group">
        <h3>Создайте Новую учетную запись</h3>

        <label for="log">Логин</label>
        <input type="text" name="log" id="" class="form-control mb-2" required>
        <label for="password">Пароль</label>
        <input type="password" name="password" id="" class="form-control mb-2" required>
        <label for="username">Имя</label>
        <input type="text" name="username" id="" class="form-control mb-2" required>
        <label for="surname">Фамилия</label>
        <input type="text" name="surname" id="" class="form-control mb-2" required>
        <label for="email">Email</label>
        <input type="text" name="email" id="" class="form-control mb-2" required>
        <label for="phone_number">Телефон</label>
        <input type="text" name="phone_number" id="" class="form-control mb-2" data-mask="8 (000) 000-00-00" required>
    </div>
    <div class="form-group">
        <label for="group">Группа</label> 
        <select name="group" id=""  class="form-control" required>
            <option value="Нет">Нет группы</option>
            <option value="РИС-19-1б">РИС-19-1б</option>
            <option value="ИВТ-19-1б">ИВТ-19-1б</option>
            <option value="ИВТ-19-2б">ИВТ-19-2б</option>
        </select>
    </div>
    
        
        
        <div class="mb-2"></div>
    <button type="submit" class="btn btn-primary" id="btnSubmit"><span id="btnSubmit__spiner" class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Зарегистрироваться</button>
    
    <div id="form-secondary-hidden" class="hidden">
        <hr class="allert-hr">
        <div class="alert alert-secondary"><span id="error_text"></span></div>
    </div>
    
</form>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
<script src="reg/reg.js"></script>
</body>
</html>