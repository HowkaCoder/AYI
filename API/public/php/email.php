<?php
    include('vendor/autoload.php');
    use Telegram\Bot\Api;
    $telegram = new Api('5301816228:AAGdvlj9O29p6l8Sald-dea2fRwyczotyPE');
    $result = $telegram->getWebhookUpdates();
    $chat_id = $result['message']['chat']['id'];
    $arr = [
    'Name: '=> $_POST['name'],
    'Email: ' => $_POST['email'],
    'Subject: ' => $_POST['subject'],
    'Text: ' => $_POST['text']
    ];

    foreach($arr as $key => $val){
        $txt .= $key . $val . "%0A";
    };
     
    $token = '5301816228:AAGdvlj9O29p6l8Sald-dea2fRwyczotyPE';
    $sendtotg = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
    header('Location:/index_en.html')  
?>