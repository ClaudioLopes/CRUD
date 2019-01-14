<?php

function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email -> CharSet = 'UTF-8';
    $email -> SMTPSecure = 'plain';
    $email -> isSMTP();
    $email -> Host = 'smtp.mailtrap.io';
    $email -> Port = 465;
    $email -> SMTPAuth = true;
    $email -> Username = '512bf67bbc891e';
    $email -> Password = 'e9591bd8a9c5cd!';
    $email -> isHTML(true);
    $email -> setFrom('xandecar@hotmail.com');
    $email -> FromName = $data['quem'];
    $email -> addADDress($data['para']);
    $email -> Body = $data['massege'];
    $email -> Subject = $data['assunto'];
    $email -> AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
    $email -> MsgHTML($data['mansagem']);
    return $email->send();
}