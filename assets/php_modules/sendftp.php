<?php
session_start();
$member = $_SESSION['user']['username']." ".$_SESSION['user']['usersurname'];
$phone_number = $_SESSION['user']['userphone_number'];
$email = $_SESSION['user']['useremail'];
$group = $_SESSION['user']['usergroup'];

$lr = $_POST['lr'];
$other = $_POST['other'];
$add_info = $_POST['add_info'];
$tutor = $_POST['tutor'];

$file_path = '../works/'.$tutor."/".$group."/".$member."/";

$vk_id = 266661033;
if ($tutor == 'Деменев Андрей') {
    //$vk_id = 138339543;
}
if ($tutor == 'Миннахметов Эльдар') {
    //$vk_id = 426837152;
}
if ($tutor == 'Неволин Сергей') {
    //$vk_id = 175002646;
}
if ($tutor == 'Филатова Анна') {
    //$vk_id = 388227110;
}
if ($tutor == 'Пепеляев Николай') {
    //$vk_id = 216815099;
}
if ($tutor == 'Ваганов Илья') {
    //$vk_id = 184406801;
}
if ($tutor == 'Шеретов Марк') {
    //$vk_id = 123596981;
}
if ($tutor == 'Горшков Дмитрий') {
    $vk_id = 266661033;
}
if ($tutor == 'Куликов Максим') {
    $vk_id = 55515856;
}



if ( 0 < $_FILES['userfile']['error'] ) {
    echo 'Ошибка! №' . $_FILES['userfile']['error'];
    if ($_FILES['userfile']['error'] == 2)  { echo " Превышен максимальный размер файла"; }
}
else {
    if (file_exists($file_path) == 1) {
        $file_path .= "ЛР №".$lr."/";
    } else {
        mkdir($file_path, 0777, true);
        $file_path .= "ЛР №".$lr."/";
    }

    if (file_exists($file_path) == 1) {
        move_uploaded_file($_FILES['userfile']['tmp_name'], $file_path . $_FILES['userfile']['name']);
    } else {
        mkdir($file_path, 0777, true);
        move_uploaded_file($_FILES['userfile']['tmp_name'], $file_path . $_FILES['userfile']['name']);
    }
    
    $message = "Здравствуйте!".PHP_EOL.$member." из группы ".$group.", отправил(а) Вам готовую Лабораторную Работу №".$lr.PHP_EOL."Контакты для связи:".PHP_EOL."Тел.: ".$phone_number.PHP_EOL."Email.: ".$email.PHP_EOL."Другие способы связаться.: ".$other.PHP_EOL."Сообщение от отправителя: ".$add_info;
    send($vk_id, $message); // id беседы -193408081 рулл - 266661033
}
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