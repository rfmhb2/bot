<?php 

$contents = file_get_contents("php://inupt");
//$contents = json_decode($contents);

$link = "https://api.telegram.org/bot623045896:AAFT89eXGayhB7G6wlIEty-01vSuRmjXDgI/sendMessage?text=".."&chat_id=32862694";

$link = "https://api.telegram.org/bot623045896:AAFT89eXGayhB7G6wlIEty-01vSuRmjXDgI/sendMessage?text=".$contents."&chat_id=32862694";
//$link = "https://api.telegram.org/bot623045896:AAFT89eXGayhB7G6wlIEty-01vSuRmjXDgI/sendMessage?text='runned'&chat_id=32862694";

echo "reserve:".file_get_contents($link);
