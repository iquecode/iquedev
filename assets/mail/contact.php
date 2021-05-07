<?php
// require_once __DIR__ . "vendor/autoload.php";

require_once __DIR__ . '/../../vendor/autoload.php';

use Source\Support\Email;

$email = new Email();

$subject = "ique.dev - nova msg - {$_POST['email']} - {$_POST['name']}";
$msg = "<h1>Msg do form contato de ique.dev!</h1>{$_POST['msg']}";


$email->add(
    $subject,
    $msg,
    'Henrique Mariani',
    'hemariani@gmail.com'
)->send();


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Content-Type: application/json");

$result = [];

// $result['result'] = 'ok';
// $result['msg'] = 'test';   

// $result = [];
// $result['result'] = 'ok';
// $result['msg'] = 'teste';



if (!$email->error())
{

    $result['result'] = true;
    $result['body'] = $_POST;     
    // var_dump(true);
}
else
{
    $result['result'] = false;
    $result['body'] = 'Erro ao enviar a mensagem!';     
}

echo json_encode($result);
exit;