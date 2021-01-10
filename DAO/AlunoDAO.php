<?php

class AlunoDAO
{
    public function inserirAluno(Aluno $aluno)
    {
        global $con;
        $sql = $con->prepare("INSERT INTO aluno(nome,email,datanascimento,identidade,celular,telefone,endereco,numero,complemento,bairro,estado,
                                    cidade,nome_escola,bairro_escola,ano,turma,perfil_escola,realistico
                                    ,investigativo,empreendedor,convencional,artistico,social) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->bind_param("sssiiisisssssssssssssss", $nome, $email, $datanascimento, $identidade, $celular, $telefone, $endereco,
            $numero, $complemento, $bairro, $estado,
            $cidade, $nome_escola, $bairro_escola, $ano, $turma, $perfil_escola, $realistico
            , $investigativo, $empreendedor, $convencional, $artistico, $social);
        $nome = $aluno->getNome();
        $email = $aluno->getEmail();
        $datanascimento = $aluno->getDatanascimento();
        $identidade = $aluno->getIdentidade();
        $celular = $aluno->getCelular();
        $telefone = $aluno->getTelefone();
        $endereco = $aluno->getEndereco();
        $numero = $aluno->getNumero();
        $complemento = $aluno->getComplemento();
        $bairro = $aluno->getBairro();
        $estado = $aluno->getEstado();
        $cidade = $aluno->getCidade();
        $nome_escola = $aluno->getNomeEscola();
        $bairro_escola = $aluno->getBairroEscola();
        $ano = $aluno->getAno();
        $turma = $aluno->getTurma();
        $perfil_escola = $aluno->getPerfilEscola();
        $realistico = $aluno->getRealistico();
        $investigativo = $aluno->getInvestigativo();
        $empreendedor = $aluno->getEmpreendeedor();
        $convencional = $aluno->getConvencional();
        $artistico = $aluno->getArtistico();
        $social = $aluno->getSocial();
        $sql->execute();
    }

}