<?php 

    require "config.php";

    $secret = "6Le2QxcsAAAAAFij_h0aFrdsbDQxWvI8vGoBXOpZ";
    $token = $_POST['recaptcha_token'];

    $verifyURL = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $secret,
        'response' => $token
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $response = file_get_contents($verifyURL, false, $context);
    $result = json_decode($response, true);

    // Avaliar pontuação
    if ($result["success"] && $result["score"] >= 0.5) {
        echo "Verificação OK!";
    } else {
        echo "Falha no reCAPTCHA.";
    }

?>