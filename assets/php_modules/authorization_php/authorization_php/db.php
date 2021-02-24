<?php 
$dblocation="localhost"; 
$db_name="h002292241_dl";
$login="root";
$password="1234"; 
require 'libs/rb.php';
R::setup( 'mysql:host=127.0.0.1;dbname=h002292241_dl','root', '1234' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

session_start();