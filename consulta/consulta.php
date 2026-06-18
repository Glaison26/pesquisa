<?php
session_start();
$servername = "localhost";
$username = "root";
$password =  "";
$database = "cplms_pesquisa";
// criando a conexão com banco de dados
$conection = new mysqli($servername, $username, $password, $database);
// checo erro na conexão
if ($conection->connect_error) {
    die("Erro na Conexão com o Banco de Dados!! " . $conection->connect_error);
}
// sql para leitura da tabela de consulta pesquisa chamada formulario
$sql = "SELECT formulario.id, formulario.data, formulario.secretaria, formulario.departamento, formulario.cargo, formulario.responsavel,
formulario.fone_ramal, formulario.email FROM formulario";
$result = $conection->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script scr="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">
    <link rel="shortcut icon" type="imagex/png" href="./imagens/img_gop.ico">
    <link rel="shortcut icon" type="imagex/png" href="./images/img_gop.ico">

    <script scr="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script scr="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <h1 class="mb-4">Consultas</h1>
        <table id="consultasTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Secretaria</th>
                    <th>Departamento</th>
                    <th>Telefone</th>
                    <th>Responsável</th>
                    <th>Cargo</th>
                    <th>e-mail</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($c_linha = $result->fetch_assoc()) {
                    $c_data = date('d/m/Y', strtotime($c_linha['data'])); 
                    echo "
                    <tr>
                        <td>$c_linha[id]</td>
                        <td>$c_data</td>
                        <td>$c_linha[secretaria]</td>
                        <td>$c_linha[departamento]</td>
                        <td>$c_linha[fone_ramal]</td>
                        <td>$c_linha[responsavel]</td>
                        <td>$c_linha[cargo]</td>
                        <td>$c_linha[email]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' title='Visualizar resposta' href='/pesquisa/consulta/visualizar.php?id=$c_linha[id]'><span class='glyphicon glyphicon-zoom-in'></span></a>
                            
                        </td>

                    </tr>";
               }
                     ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {

            // traduzir o DataTable para português
            $('#consultasTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Nenhum registro encontrado",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtrado de _MAX_ registros no total)",
                    "search": "Pesquisar:",
                    "paginate": {
                        "first": "Primeira",
                        "last": "Última",
                        "next": "Próxima",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
</body>

</html>