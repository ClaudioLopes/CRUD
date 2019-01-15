<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'preencha todos os campos');

    redirect("contato");
}

$validate = validate([
    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's',
]);

$cadastrado = create('users', $validate);

if($cadastrado){
    flash('message', 'Cadastrado com sucesso', 'success');

    return redirect('create_user');
}
flash('message', 'Erro ao cadastrar');
redirect('create_user');