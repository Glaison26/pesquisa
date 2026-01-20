<?php
// Código PHP para processar o formulário de pesquisa de levantamento de dados pesquisa.php
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // receber dados do formulário via método POST
    $c_orgao = $_POST['orgao'];
    $c_departamento = $_POST['departamento'];
    $c_responsavel = $_POST['responsavel'];
    $c_cargo = $_POST['cargo'];
    $c_email = $_POST['email'];
    $c_telefone = $_POST['telefone'];
    $c_data_solicitacao = $_POST['data_solicitacao'];
    // tipos de necessidade selecionada no checkbox
    // desenvolvimento de sistema
    if (isset($_POST['desenvolvimento_sistema'])) {
        $c_desenvolvimento_sistema = "SIM";
    } else {
        $c_desenvolvimento_sistema = "NÃO";
    }
    // suporte técnico
    if (isset($_POST['suporte_tecnico'])) {
        $c_suporte_tecnico = "SIM";
    } else {
        $c_suporte_tecnico = "NÃO";
    }
    // aquisição de hardware
    if (isset($_POST['aquisicao_hardware'])) {
        $c_aquisicao_hardware = "SIM";
    } else {
        $c_aquisicao_hardware = "NÃO";
    }
    // aquisição de software
    if (isset($_POST['aquisicao_software'])) {
        $c_aquisicao_software = "SIM";
    } else {
        $c_aquisicao_software = "NÃO";
    }
    // infraestrutura de rede
    if (isset($_POST['infraestrutura_rede'])) {
        $c_infraestrutura_rede = "SIM";
    } else {
        $c_infraestrutura_rede = "NÃO";
    }
    // segurança da informação
    if (isset($_POST['seguranca_informacao'])) {
        $c_seguranca_informacao = "SIM";
    } else {
        $c_seguranca_informacao = "NÃO";
    }
    // integração de sistemas
    if (isset($_POST['integracao_sistemas'])) {
        $c_integracao_sistemas = "SIM";
    } else {
        $c_integracao_sistemas = "NÃO";
    }
    // treinamento
    if (isset($_POST['treinamento'])) {
        $c_treinamento = "SIM";
    } else {
        $c_treinamento = "NÃO";
    }
    // outro tipo de necessidade
    if (isset($_POST['outro_tipo_necessidade'])) {
        $c_outro_tipo_necessidade = "SIM";
    } else {
        $c_outro_tipo_necessidade = "NÃO";
    }
    // input text para outro tipo de necessidade
    $c_outro_especificar = $_POST['especificar_outro'];
    // descrição detalhada da necessidade
    // descrição outro tipo de necessidade

    $c_descricao_necessidade = $_POST['descricao_necessidade'];
    // justificativa da necessidade
    $c_justificativa_necessidade = $_POST['justificativa'];
    // objetivo esperado com a satisfação da necessidade
    $c_objetivo_esperado = $_POST['objetivos_esperados'];
    // usuários impactados
    $c_usuarios_impactados = $_POST['quantidade_usuarios'];
    // perfil dos usuários impactados
    $c_perfil_usuarios_impactados = $_POST['perfis_usuarios'];
    // prioridade da demanda alta, media ou baixa
    $c_prioridade_demanda = $_POST['prioridade_demanda'];
    // justificativa da prioridade
    $c_justificativa_prioridade = $_POST['justificativa_prioridade'];
    // prazo desejado para atendimento da demanda
    $c_prazo_desejado = $_POST['data_ideal_atendimento'];
    // prazo legal ou normativo sim ou não
    if (isset($_POST['prazo_legal_normativo'])) {
        $c_prazo_legal_normativo = "SIM";
    } else {
        $c_prazo_legal_normativo = "NÃO";
    }
    // especificação do prazo legal ou normativo
    $c_especificacao_prazo_legal = $_POST['especificacao_prazo'];
    // inserir os dados na tabela formulario
    $c_sql = "INSERT INTO formulario (secretaria, departamento, responsavel, cargo, email, fone_ramal, 
    data, desenvolvimento_sistema, suporte_manutencao, aquisicao_equipamento, aquisicao_software, infra_rede,
    integracao_sistemas, treinamento, outro_descricao, descricao_necessidade, justificativa, objetivos_esperados,
    usuarios_impactados, perfil_usuario, prioridade, justificativa_prioridade, data_ideal, prazo_normativo,
    especificacao_prazo, outro, seguranca_informacao) 
    VALUES('$c_orgao', '$c_departamento', '$c_responsavel', '$c_cargo', '$c_email', '$c_telefone', '$c_data_solicitacao', 
    '$c_desenvolvimento_sistema', '$c_suporte_tecnico', '$c_aquisicao_hardware', '$c_aquisicao_software', '$c_infraestrutura_rede',
    '$c_integracao_sistemas', '$c_treinamento', '$c_outro_especificar', '$c_descricao_necessidade', '$c_justificativa_necessidade',
    '$c_objetivo_esperado', '$c_usuarios_impactados', '$c_perfil_usuarios_impactados', '$c_prioridade_demanda', 
    '$c_justificativa_prioridade', '$c_prazo_desejado', '$c_prazo_legal_normativo', '$c_especificacao_prazo_legal', 
    '$c_outro_tipo_necessidade', '$c_seguranca_informacao')";
    echo $c_sql;
    $result = $conection->query($c_sql);
    // redirecionar para a página de sucesso após o envio do formulário
    header("Location: sucesso.html");
}
