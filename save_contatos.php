<?php 

require_once "vendor/autoload.php";

use rapidweb\googlecontacts\factories\ContactFactory;

if($_POST) {
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
    $numcel = filter_input(INPUT_POST, "cel", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $note = "";

    // $dados = ['nome' => $nome, 
    //         'email' => $email, 
    //         'cel' => $numcel];

    // echo json_encode($dados);
    //echo (http_response_code(200));

     //insere no banco de dados e após insere na API do Google Contatos

    $novocontato = ContactFactory::create($nome, $numcel, $email, $note);
    if($novocontato) {
        echo 1;
    }
    else {
        echo 0;
    }
    
}