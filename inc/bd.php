<?php
$bd_login = 'mixinvest';//����� ���� ������

$bd_pass = 'H6j6D1P5s2R9a7X4o5K5y1e9';//������ ���� ������

$bd_name = 'mixinvest';//��� ���� ������
 
mysql_connect("localhost", $bd_login, $bd_pass)//��������� � ������� ("����", "��� ������������", "������")
or die("<p>������ ����������� � ���� ������! " . mysql_error() . "</p>");
mysql_select_db($bd_name)//�������� � ������� ("��� ����, � ������� �����������")
 or die("<p>������ ������ ���� ������! ". mysql_error() . "</p>");
mysql_query("SET NAMES utf8");
?>