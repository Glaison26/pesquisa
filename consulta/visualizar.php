<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cplms_pesquisa";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// pego o ID do formulário a ser visualizado
$formulario_id = $_GET["id"];


// Recuperar dados do formulário
$sql = "SELECT * FROM formulario where id = $formulario_id";
$result = $conn->query($sql);
//echo $sql;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Pesquisas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        .formulario {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 5px;
            background-color: #fafafa;
        }
        .formulario-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .campo {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }
        .valor {
            color: #666;
            padding: 8px;
            background-color: #f9f9f9;
            border-left: 3px solid #007bff;
            padding-left: 10px;
        }
        .secao-titulo {
            background-color: #e9ecef;
            font-weight: bold;
            padding: 10px;
            margin-top: 15px;
            margin-bottom: 10px;
            border-radius: 3px;
            color: #333;
        }
        .no-data {
            text-align: center;
            color: #999;
            padding: 40px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultados da Pesquisa</h1>
        
        <?php
        if ($result->num_rows > 0) {
            $numero = 1;
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="formulario">
                    <div class="formulario-header">
                        Formulário #<?php echo $numero; ?>
                    </div>
                    
                    <!-- Seção 1: Informações do Solicitante -->
                    <div class="secao-titulo">1. Informações do Solicitante</div>
                    
                    <div class="campo">
                        <label class="label">Órgão / Unidade Administrativa:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['secretaria'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Departamento / Setor:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['departamento'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Responsável pela Solicitação:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['responsavel'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Cargo / Função:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['cargo'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">E-mail:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['email'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Telefone / Ramal:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['fone_ramal'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Data da Solicitação:</label>
                        <div class="valor"><?php echo htmlspecialchars(date('d/m/Y', strtotime($row['data'])) ?? 'Não informado'); ?></div>
                    </div>
                    
                    <!-- Seção 2: Tipo de Necessidade -->
                    <div class="secao-titulo">2. Tipo de Necessidade</div>
                    
                    <div class="campo">
                        <label class="label">Tipo de Necessidade:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['tipo_necessidade'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <!-- Seção 3: Descrição Detalhada -->
                    <div class="secao-titulo">3. Descrição Detalhada da Necessidade</div>
                    
                    <div class="campo">
                        <label class="label">Descrição:</label>
                        <div class="valor"><?php echo nl2br(htmlspecialchars($row['descricao_necessidade'] ?? 'Não informado')); ?></div>
                    </div>
                    
                    <!-- Seção 4: Justificativa -->
                    <div class="secao-titulo">4. Justificativa</div>
                    
                    <div class="campo">
                        <label class="label">Justificativa:</label>
                        <div class="valor"><?php echo nl2br(htmlspecialchars($row['justificativa'] ?? 'Não informado')); ?></div>
                    </div>
                    
                    <!-- Seção 5: Objetivos Esperados -->
                    <div class="secao-titulo">5. Objetivos Esperados</div>
                    
                    <div class="campo">
                        <label class="label">Objetivos:</label>
                        <div class="valor"><?php echo nl2br(htmlspecialchars($row['objetivos_esperados'] ?? 'Não informado')); ?></div>
                    </div>
                    
                    <!-- Seção 6: Usuários Impactados -->
                    <div class="secao-titulo">6. Usuários Impactados</div>
                    
                    <div class="campo">
                        <label class="label">Quantidade estimada de usuários:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['usuarios_impactados'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Perfis dos usuários:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['perfil_usuario'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <!-- Seção 7: Prioridade da Demanda -->
                    <div class="secao-titulo">7. Prioridade da Demanda</div>
                    
                    <div class="campo">
                        <label class="label">Prioridade:</label>
                        <div class="valor"><?php echo htmlspecialchars($row['prioridade'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Justificativa da prioridade:</label>
                        <div class="valor"><?php echo nl2br(htmlspecialchars($row['justificativa_prioridade'] ?? 'Não informado')); ?></div>
                    </div>
                    
                    <!-- Seção 8: Prazo Desejado -->
                    <div class="secao-titulo">8. Prazo Desejado</div>
                    
                    <div class="campo">
                        <label class="label">Data ideal para atendimento:</label>
                        <div class="valor"><?php  htmlspecialchars(date('d/m/Y', strtotime($row['data_ideal'])) ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Existe prazo legal ou normativo?</label>
                        <div class="valor"><?php echo htmlspecialchars($row['prazo_normativo'] ?? 'Não informado'); ?></div>
                    </div>
                    
                    <div class="campo">
                        <label class="label">Especificação do prazo legal:</label>
                        <div class="valor"><?php echo nl2br(htmlspecialchars($row['especificacao_prazo'] ?? 'Não informado')); ?></div>
                    </div>
                </div>
                <?php
                $numero++;
            }
        } else {
            ?>
            <div class="no-data">
                Nenhum formulário encontrado.
            </div>
            <?php
        }
        
        $conn->close();
        ?>
    </div>
</body>
</html>
