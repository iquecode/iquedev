<?php
require_once __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    'Olá... Esse é o meu primeiro e-mail',
    '<h1>Estou apenas testando!</h1>Espeto que tenha dado certo',
    'Henrique Mariani',
    'hemariani@gmail.com'
)->send();


if (!$email->error())
{
    // var_dump(true);
}
else
{
    echo $email->error()->getMessage();
}