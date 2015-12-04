<?php
namespace JCN\Pessoa;
class PessoaContato
{
    protected $celular;
    protected $email;

    public function __construct($celular,$email)
    {
        $this->celular=$celular;
        $this->email=$email;
    }

    public function getCelular()
    { return $this->celular; }

    public function getEmail()
    { return $this->email; }

    public function setEmail($valor)
    { $this->email = $valor; }

    public function setCelular($valor)
    { $this->celular = $valor; }
}
?>