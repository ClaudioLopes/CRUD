<?php

require "../../../bootstrap.php";

if(isEmpty()){
   flash('message', 'preencha todos os campos');

   redirect("contato");
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',
]);

$data =[
    'quem' => $validate->email,
    'para' => 'claudio.n.lopes@hotmail.com',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject,
];

if(send($data)){
    flash('message', 'Email enviado com secesso', 'success');
    redirect("contato");
}
