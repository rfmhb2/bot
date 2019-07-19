<?php
$title = "رزرو جدید";
$message = "رزرو جدید با موفقیت انجام شد برای دیدن جزئیات لمس کنید";
$fcmMsg = [
    'body' => $message,
    'title' => $title,
    'sound' => "default",
    'color' => "#203E78"
    ];
$fcmFields = [
    'to' => $_GET['fcmToken'],
    'priority' => 'high',
    'notification' => $fcmMsg
];
$url = 'https://fcm.googleapis.com/fcm/send';
$headers = [
    'Content-Type:application/json',
    'Authorization:key= YOUR-TOKEN'
];
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, $url );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result . "\n\n";
?>
