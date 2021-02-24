<?php

include ("../assets/php_modules/connection.php");

session_start();
try{
    $pdo = new PDO("mysql:host=localhost;dbname=".$db_name.";charset=utf8",$login, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    $Log_File = "log.txt";
    file_put_contents($Log_File, date("Y-m-d H:i:s")." -//- ".$e->getMessage().PHP_EOL, FILE_APPEND | LOCK_EX);	
    echo 'Ошибка базы данных';
}

//проверка на одинаковость
$sql = 'SELECT `login` 
FROM `users`
WHERE `login` = :login';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':login', $_POST['log'], PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($rows) > 0) {
    echo 'К сожалению Логин: <b>'. $_POST['log'] .'</b> занят!';            
}else {
    try{
        

        $sql = "INSERT INTO  users (id, login, password, username, usersurname, useremail, userphone_number, usergroup, priority)
                VALUES (
                NULL , :logen,  :pass, :name, :surname, :email, :phone, :group, 0
                );";//Формируем запрос без данных
        $result = $pdo->prepare($sql);
        $result->bindvalue(':logen', $_POST['log']);	//Заполняем данные
        $result->bindvalue(':pass', md5($_POST['password']));	//Заполняем данные. Пароли хранить в открытом виде, дело такое. Поэтому двойной md5)
        $result->bindvalue(':name', $_POST['username']);
        $result->bindvalue(':surname', $_POST['surname']);
        $result->bindvalue(':email', $_POST['email']);
        $result->bindvalue(':phone', $_POST['phone_number']);
        $result->bindvalue(':group', $_POST['group']);
        $result->execute( );							//Выполняем запросы

        echo 'Регистрация успешна!'; ?>
        <script type="text/javascript">
        setTimeout("location.replace('http://site/auth%27)", 15000);
        </script> <?php
    }catch(PDOException $e){
        $Log_File = "log.txt";
        file_put_contents($Log_File, date("Y-m-d H:i:s")." -//- ".$e->getMessage().PHP_EOL, FILE_APPEND | LOCK_EX);				
        echo 'Ошибка регистрации';
    }

    
}
?>