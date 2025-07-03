<?php

    $name = $_POST['user-name'];
    $phone = $_POST['user-phone'];
    $email = $_POST['user-email'];

    $token = "8170998246:AAGG6oxgZPgmQs_jUqb6L-luPP7t8NBd7_M";

    $chat_id = "1337887109";

    // https:api.telegram.org/bot8170998246:AAGG6oxgZPgmQs_jUqb6L-luPP7t8NBd7_M/getUpdates

    $user = array(

        'Имя пользвателя:  ' => $name,
        'Телефон пользвателя:  ' => $phone,
        'Email пользвателя:  ' => $email,
    );

    foreach ($user as $key => $value) {
        $text .= "<b>" . $key . "</b>" . $value. "%0A";
    };

    $infoTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");

    if ($infoTelegram) {
        header('Location: thank-you.html');
    }

    else{
        echo "ERROR";
    }
    
?>