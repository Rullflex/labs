<?php
$member = $_POST['member'];
$lr = $_POST['lr'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$other = $_POST['other'];
$add_info = $_POST['add_info'];

$file_path = 'uploads/';


if ($tutor == 'eldar') {
    $file_path .= 'Andrey_Demenev/';
}



if ( 0 < $_FILES['userfile']['error'] ) {
    echo 'Ошибка! №' . $_FILES['userfile']['error'];
}
else {
    move_uploaded_file($_FILES['userfile']['tmp_name'], $file_path . $_FILES['userfile']['name']);
}



$message = "Здравствуйте!".PHP_EOL.$member.", отправил(а) Вам готовую Лабораторную Работу №".$lr.PHP_EOL."Контакты для связи:".PHP_EOL."Тел.: ".$phone_number.PHP_EOL."Email.: ".$email.PHP_EOL."Другие способы связаться.: ".$other.PHP_EOL."Сообщение от отправителя: ".$add_info;
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