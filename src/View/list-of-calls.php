<?php require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Help Desk - Lista de chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="m-5">
    <nav class="bg-info p-3 d-flex justify-content-between">
        <div>
            <a href="add-new-call.php" class="text-decoration-none text-white">Novo chamado</a>
            <a href="#" class="text-decoration-none text-white">Lista de chamados</a>
        </div>
        <a href="../Controller/Auth.php?operation=logout" class="text-decoration-none text-white">Sair</a>
    </nav>
    <main class="m-5">
        <table class="table table-bordered table-primary">
            <thead>
                <th>#</th>
                <th>Nome do usuário</th>
                <th>Código do equipamento</th>
                <th>Classificação</th>
                <th>Descrição</th>
                <th>Observações</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                if (empty($_SESSION["list-of-calls"])) :
                ?>
                    <td colspan=7>Não existem chamados cadastrados</td>
                <?php
                endif;
                foreach ($_SESSION["list-of-calls"] as $call) :
                ?>
                    <tr>
                        <td>
                            <?= $call["id"] ?>
                        </td>
                        <td>
                            <?= $call["name"] ?>
                        </td>
                        <td>
                            <?= $call["equipment_id"] ?>
                        </td>
                        <td>
                            <?= $call["classification"] ?>
                        </td>
                        <td>
                            <?= $call["description"] ?>
                        </td>
                        <td>
                            <?= ($call["notes"]) ? $call["notes"] : "Nenhuma observação" ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="../Controller/Call.php?operation=findOne&code=<?= $call["id"] ?>" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="../Controller/Call.php?operation=delete&code=<?= $call["id"] ?>" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>