<?php

use Milly\WebPagePhp\exceptions\InputHandler;
use Milly\WebPagePhp\models\Email;
include '../config.php';

header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

$inputHandler = new InputHandler();

// Adiciona verificação para garantir que o email foi enviado
if (isset($_POST['email'])) {
    $email = $_POST['email'];

   
    if ($inputHandler->emailVerify($email)) {
        $Email = new Email();
        $Email->enviar('tamillycosta899@gmail.com','novo contato',$email);
        $Email->createEmail($email); 

        echo json_encode(['sucesso' => 'E-mail enviado com sucesso!']);
    } else {
        echo json_encode(['erro' => 'E-mail inválido']);
    }
} else {
    echo json_encode(['erro' => 'Dados não enviados']);
}
?>
