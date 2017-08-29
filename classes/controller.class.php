
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new Usuario();
    $usuario->nome = $_REQUEST['nome'];
    $usuario->sobrenome = $_REQUEST['sobrenome'];
    $usuario->data_nasc = $_REQUEST['data_nasc'];
    $usuario->email = $_REQUEST['email'];
    $usuario->senha = $_REQUEST['senha'];
    $user->insert($usuario,$conn);
    
}

class Usuario {

    public $nome;
    public $sobrenome;
    public $data_nasc;
    public $email;
    public $senha;

    public function insert($usuario, $conn) {
        $stmt = $conn->prepare("INSERT INTO usuario (nome, sobrenome, data_nasc, email, senha) VALUES (?, ?, ?,?,?)");
        
    }

}
