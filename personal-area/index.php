<?php
include ("index.config.php");
include ($r_base."assets/php_modules/addons.php");
include ("../assets/php_modules/connection.php");
try{
    $pdo = new PDO("mysql:host=localhost;dbname=".$db_name.";charset=utf8",$login, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    $Log_File = "log.txt";
    file_put_contents($Log_File, date("Y-m-d H:i:s")." -//- ".$e->getMessage().PHP_EOL, FILE_APPEND | LOCK_EX);	
    echo 'Ошибка базы данных';
}


if(isset($_POST['phone_number_ch']))
{ 
    $sql = "UPDATE users SET userphone_number = :phone WHERE users.id = :id";
    $result = $pdo->prepare($sql);
    $result->bindvalue(':phone', $_POST['phone_number_ch']);
    $result->bindvalue(':id', $_SESSION['user']['id']);
    $result->execute( );
    
    ?> <meta http-equiv="refresh" content="0; url=<?php echo $base.'personal-area/' ?>"> <?php
}

if(isset($_POST['email_ch']))
{ 
    $sql = "UPDATE users SET useremail = :email WHERE users.id = :id";
    $result = $pdo->prepare($sql);
    $result->bindvalue(':email', $_POST['email_ch']);
    $result->bindvalue(':id', $_SESSION['user']['id']);
    $result->execute( );
    
    ?> <meta http-equiv="refresh" content="0; url=<?php echo $base.'personal-area/' ?>"> <?php
}

if(isset($_POST['email_ch']))
{ 
    $sql = "UPDATE users SET useremail = :email WHERE users.id = :id";
    $result = $pdo->prepare($sql);
    $result->bindvalue(':email', $_POST['email_ch']);
    $result->bindvalue(':id', $_SESSION['user']['id']);
    $result->execute( );
    
    ?> <meta http-equiv="refresh" content="0; url=<?php echo $base.'personal-area/' ?>"> <?php
}

if(isset($_POST['group_ch']))
{ 
    $sql = "UPDATE users SET usergroup = :group WHERE users.id = :id";
    $result = $pdo->prepare($sql);
    $result->bindvalue(':group', $_POST['group_ch']);
    $result->bindvalue(':id', $_SESSION['user']['id']);
    $result->execute( );
    
    ?> <meta http-equiv="refresh" content="0; url=<?php echo $base.'personal-area/' ?>"> <?php
}
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
<?php
if (isset($_SESSION['user'])) { 
    $id = $_SESSION['user']['id'];

    $sql = "SELECT userphone_number FROM users WHERE id = :id";
    $result = $pdo->prepare($sql);
    $result->bindvalue(':id', $_SESSION['user']['id']);
    $result->execute( );
    $phone_number = $result->fetch();

    $sql = "SELECT useremail FROM users WHERE id = :id";
    $result = $pdo->prepare($sql);
    $result->bindvalue(':id', $_SESSION['user']['id']);
    $result->execute( );
    $email = $result->fetch();

    $sql = "SELECT usergroup FROM users WHERE id = :id";
    $result = $pdo->prepare($sql);
    $result->bindvalue(':id', $_SESSION['user']['id']);
    $result->execute( );
    $group = $result->fetch();

    ?>

<h2><?php echo $_SESSION['user']['username'].'  '.$_SESSION['user']['usersurname'];?></h2>
<h3>Контактная информация</h3>
<p class="ml-4">Телефон: <b><?php echo $phone_number[0];?></b><a href="personal-area/?change_phone" class="ml-2">Изменить</a></p>
<?php
if(isset($_GET['change_phone']))
{ ?>
  <form action="personal-area/" class="ml-4 mb-3"  method="post">
      <div class="form-group">
      <input type="text" class="p-1" name="phone_number_ch" placeholder="Введите новый номер" data-mask="8 (000) 000-00-00" required><button type="submit" class="btn btn-primary" id="btnSubmit">Изменить</button>
      </div>
      
  </form>  
<?php } ?>
<p class="ml-4">Email: <b><?php echo $email[0];?></b><a href="personal-area/?change_email" class="ml-2">Изменить</a></p>
<?php
if(isset($_GET['change_email']))
{ ?>
  <form action="personal-area/" class="ml-4 mb-3"  method="post">
      <div class="form-group">
      <input type="email" class="p-1" name="email_ch" placeholder="Введите новый email" required><button type="submit" class="btn btn-primary" id="btnSubmit">Изменить</button>
      </div>
      
  </form>  
<?php } ?>
<p class="ml-4">Группа: <b><?php echo $group[0];?></b><a href="personal-area/?change_group" class="ml-2">Изменить</a></p>
<?php
if(isset($_GET['change_group']))
{ ?>
  <form action="personal-area/" class="ml-4 mb-3"  method="post">
      <div class="form-group">
      <select name="group_ch" id="" required>
            <option value="none">Нет группы</option>
            <option value="РИС-19-1б">РИС-19-1б</option>
            <option value="ИВТ-19-1б">ИВТ-19-1б</option>
            <option value="ИВТ-19-2б">ИВТ-19-2б</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" id="btnSubmit">Изменить</button>
  </form>  
<?php } ?>

<?php } else {?>
    <a href="/auth" class="btn btn-warning" style="">Авторизуйтесь, что бы иметь доступ к личному кабинету</a>  
<?php }?>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>