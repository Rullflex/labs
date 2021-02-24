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

if ($_POST['log']=='' || $_POST['password']=='') {

}
	else{
		//вот так данные можно отправлять без проверки вовсе, ни чего очень плохого случиться не должно. 
		//PDO все заэкранирует и превратит в текст. 
		//Можно разве что проверять длинну текста и какие то специфическиие данные

		$sql = "SELECT * FROM users WHERE login=:login AND password=:pass";//Формируем запрос без данных
		$result = $pdo->prepare($sql);
		$result->bindvalue(':login', $_POST['log']);	//Заполняем данные
		$result->bindvalue(':pass', md5($_POST['password']));	//Заполняем данные. Пароли хранить в открытом виде, дело такое. Поэтому двойной md5)
		$result->execute( );							//Выполняем запросы
		$result = $result->fetchAll();					//переводим обьект ПДО в массив данных, для удобной работы

		if (count($result)>0) {//Если база вернула 1 значение, значит и логин и пароль совпали. отлично
			
			
			$_SESSION['user'] = $result[0];//сохраняем обьект пользователя в сессии
			
			echo '<script>document.location.href="../"</script>';
			
		}else echo 'Логин или пароль не верный или пользователь не существует ';
    }
    /*if (isset($_SESSION['user'])){			//если пользователь авторизован
        echo 'Здравствуйте, '.$_SESSION['user']['username'].'!';
    }*/
?>