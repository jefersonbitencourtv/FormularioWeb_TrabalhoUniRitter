<?php
require_once '../Conexao.php';
require_once '../classes/Aluno.php';
require_once '../DAO/AlunoDao.php';
require_once '../pagina.html';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $aluno = new Aluno();
    $aluno->setNome($_POST['name']);
    $aluno->setEmail($_POST['email']);
    $aluno->setDatanascimento($_POST['datanascimento']);
    $aluno->setIdentidade($_POST['identidade']);
    $aluno->setCelular($_POST['celular']);
    $aluno->setTelefone($_POST['telefone']);
    $aluno->setEndereco($_POST['endereco']);
    $aluno->setNumero($_POST['numero']);
    $aluno->setComplemento($_POST['complemento']);
    $aluno->setBairro($_POST['bairro']);
    $aluno->setEstado($_POST['estado']);
    $aluno->setCidade($_POST['cidade']);
    $aluno->setNomeEscola($_POST['nome_escola']);
    $aluno->setBairroEscola($_POST['bairro_escola']);
    $aluno->setAno($_POST['ano']);
    $aluno->setTurma($_POST['turma']);
    $aluno->setPerfilEscola($_POST['perfil_escola']);

    $realistico = 0;
    $investigativo = 0;
    $empreendedor = 0;
    $convencional = 0;
    $artistico = 0;
    $social = 0;

    $realistico += intval($_POST['r1']) + intval($_POST['r2']) + intval($_POST['r3']) + intval($_POST['r4'])
        + intval($_POST['r5']) + intval($_POST['r6'])
        + intval($_POST['r7']) + intval($_POST['r8']) + intval($_POST['r9']) + intval($_POST['r10']);

    $investigativo += intval($_POST['i1']) + intval($_POST['i2']) + intval($_POST['i3']) + intval($_POST['i4'])
        + intval($_POST['i5']) + intval($_POST['i6'])
        + intval($_POST['i7']) + intval($_POST['i8']) + intval($_POST['i9']) + intval($_POST['i10']);


    $empreendedor += intval($_POST['e1']) + intval($_POST['e2']) + intval($_POST['e3']) + intval($_POST['e4'])
        + intval($_POST['e5']) + intval($_POST['e6'])
        + intval($_POST['e7']) + intval($_POST['e8']) + intval($_POST['e9']) + intval($_POST['e10']);

    $convencional += intval($_POST['c1']) + intval($_POST['c2']) + intval($_POST['c3']) + intval($_POST['c4'])
        + intval($_POST['c5']) + intval($_POST['c6'])
        + intval($_POST['c7']) + intval($_POST['c8']) + intval($_POST['c9']) + intval($_POST['c10']);

    $artistico += intval($_POST['a1']) + intval($_POST['a2']) + intval($_POST['a3']) + intval($_POST['a4'])
        + intval($_POST['a5']) + intval($_POST['a6'])
        + intval($_POST['a7']) + intval($_POST['a8']) + intval($_POST['a9']) + intval($_POST['a10']);

    $social += intval($_POST['s1']) + intval($_POST['s2']) + intval($_POST['s3']) + intval($_POST['s4'])
        + intval($_POST['s5']) + intval($_POST['s6'])
        + intval($_POST['s7']) + intval($_POST['s8']) + intval($_POST['s9']) + intval($_POST['s10']);
    $realistico = ($realistico/30)*100;
    $investigativo = ($investigativo/30)*100;
    $empreendedor = ($empreendedor/30)*100;
    $convencional = ($convencional/30)*100;
    $artistico = ($artistico/30)*100;
    $social = ($social/30)*100;
    $aluno->setRealistico($realistico);
    $aluno->setInvestigativo($investigativo);
    $aluno->setEmpreendeedor($empreendedor);
    $aluno->setConvencional($convencional);
    $aluno->setArtistico($artistico);
    $aluno->setSocial($social);

    $alunoDAO = new AlunoDAO();
    $alunoDAO->inserirAluno($aluno);
}

















