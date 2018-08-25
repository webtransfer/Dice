<?php
$dil1 = mt_rand(1,100);
$dil2 = mt_rand(1,111);
$dilall = $dil1 + $dil2;
$play1 = mt_rand(1,100);
$play2 = mt_rand(1,111);
$playall = $play1+$play2;
echo "Диллер: ".$dil1." и ".$dil2." Всего: ".$dilall."<br>";
echo "Ты: ".$play1. " и ".$play2." Всего: ".$playall;
?>