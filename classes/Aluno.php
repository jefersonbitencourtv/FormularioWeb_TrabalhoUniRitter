<?php

class Aluno
{
    private $id;
    private $nome;
    private $email;
    private $datanascimento;
    private $identidade;
    private $celular;
    private $telefone;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $estado;
    private $cidade;
    private $nome_escola;
    private $bairro_escola;
    private $ano;
    private $turma;
    private $perfil_escola;
    private $realistico;
    private $investigativo;
    private $empreendeedor;
    private $convencional;
    private $artistico;
    private $social;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDatanascimento()
    {
        return $this->datanascimento;
    }

    /**
     * @param mixed $datanascimento
     */
    public function setDatanascimento($datanascimento): void
    {
        $this->datanascimento = $datanascimento;
    }

    /**
     * @return mixed
     */
    public function getIdentidade()
    {
        return $this->identidade;
    }

    /**
     * @param mixed $identidade
     */
    public function setIdentidade($identidade): void
    {
        $this->identidade = $identidade;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular): void
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento): void
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro): void
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getNomeEscola()
    {
        return $this->nome_escola;
    }

    /**
     * @param mixed $nome_escola
     */
    public function setNomeEscola($nome_escola): void
    {
        $this->nome_escola = $nome_escola;
    }

    /**
     * @return mixed
     */
    public function getBairroEscola()
    {
        return $this->bairro_escola;
    }

    /**
     * @param mixed $bairro_escola
     */
    public function setBairroEscola($bairro_escola): void
    {
        $this->bairro_escola = $bairro_escola;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    /**
     * @return mixed
     */
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * @param mixed $turma
     */
    public function setTurma($turma): void
    {
        $this->turma = $turma;
    }

    /**
     * @return mixed
     */
    public function getPerfilEscola()
    {
        return $this->perfil_escola;
    }

    /**
     * @param mixed $perfil_escola
     */
    public function setPerfilEscola($perfil_escola): void
    {
        $this->perfil_escola = $perfil_escola;
    }

    /**
     * @return mixed
     */
    public function getRealistico()
    {
        return $this->realistico;
    }

    /**
     * @param mixed $realistico
     */
    public function setRealistico($realistico): void
    {
        $this->realistico = $realistico;
    }

    /**
     * @return mixed
     */
    public function getInvestigativo()
    {
        return $this->investigativo;
    }

    /**
     * @param mixed $investigativo
     */
    public function setInvestigativo($investigativo): void
    {
        $this->investigativo = $investigativo;
    }

    /**
     * @return mixed
     */
    public function getEmpreendeedor()
    {
        return $this->empreendeedor;
    }

    /**
     * @param mixed $empreendeedor
     */
    public function setEmpreendeedor($empreendeedor): void
    {
        $this->empreendeedor = $empreendeedor;
    }

    /**
     * @return mixed
     */
    public function getConvencional()
    {
        return $this->convencional;
    }

    /**
     * @param mixed $convencional
     */
    public function setConvencional($convencional): void
    {
        $this->convencional = $convencional;
    }

    /**
     * @return mixed
     */
    public function getArtistico()
    {
        return $this->artistico;
    }

    /**
     * @param mixed $artistico
     */
    public function setArtistico($artistico): void
    {
        $this->artistico = $artistico;
    }

    /**
     * @return mixed
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * @param mixed $social
     */
    public function setSocial($social): void
    {
        $this->social = $social;
    }


}