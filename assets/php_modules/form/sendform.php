<?php
	$tutor = trim($_POST['tutor']);


  $message = "Это сообщение было созданно автоматически. Не отвечайте на него!".PHP_EOL."Так так так, кто тут у нас?!".PHP_EOL."Тьютор: ".$tutor;
	send(266661033, $message); // id беседы -193408081 рулл - 266661033

	function send($id , $message) {
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
      'user_id' => $id,    // Кому отправляем
      'message' => $message,   // Что отправляем
      'access_token' => 'f502d7e0f7ad90ccee08b7c44d185ecc09cf2f5fa71848110f662bb03a406fd3b00a9bd820df10bbb5e59', // токен группы  
                         
      'v' => '5.62',
    );

    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => http_build_query($params)
        )
    )));
	}
?>
