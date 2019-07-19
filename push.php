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
    'to' => $fcmToken,
    'priority' => 'high',
    'notification' => $fcmMsg
];
$client = new Client();
try {
    $url = 'https://fcm.googleapis.com/fcm/send';
    $headers = [
        'Content-Type:application/json',
        'Authorization:key= AIzaSyAC2ZEvHoLuJ4qPq9jL6cVzS3z4FBcZ8zI'
    ];
    $res = $client->post($url, [
        compact('headers'),
        'form_params' => [
            $fcmFields
        ]
    ]);
    return $res;

} catch (GuzzleException $e) {
    return $e->getMessage();
}
