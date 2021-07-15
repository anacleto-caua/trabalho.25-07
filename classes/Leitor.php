<?php
class Leitor{
    
    private $cpf;
    private $matricula;
    private $nome;
    private $senha;
    private $aluguel_id;
    private $aluguel_data;
    
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getAluguelId()
    {
        return $this->aluguel_id;
    }

    public function setAluguelId($aluguel_id)
    {
        $this->aluguel_id = $aluguel_id;
    }

    public function getAluguelData()
    {
        return $this->aluguel_data;
    }

    public function setAluguelData($aluguel_data)
    {
        $this->aluguel_data = $aluguel_data;
    }
}
?>