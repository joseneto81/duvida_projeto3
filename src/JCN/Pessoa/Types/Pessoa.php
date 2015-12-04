<?php
namespace JCN\Pessoa\Types;
use JCN\Pessoa\PessoaContato;

class Pessoa extends PessoaContato
{
    private $nome;

    public function __construct($nome='', $email='', $celular='')
    {
        $this->nome=$nome;
        $this->email=$email;
        $this->celular=$celular;
    }
    public function getNome()
    { return $this->nome; }
}
?>