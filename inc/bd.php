<?php
$bd_login = 'mixinvest';//логин базы данных

$bd_pass = 'H6j6D1P5s2R9a7X4o5K5y1e9';//пароль базы данных

$bd_name = 'mixinvest';//имя базы данных
 
mysql_connect("localhost", $bd_login, $bd_pass)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");
mysql_select_db($bd_name)//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
mysql_query("SET NAMES utf8");
?>