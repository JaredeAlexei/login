<?php require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP HelpDesk - Novo chamado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="m-5">
  <nav class="bg-info d-flex justify-content-between p-3">
    <div>
      <a href="add-new-call.php" class="text-white text-decoration-none">Abrir chamado</a>
      <a href="../Controller/Call.php?operation=findAll" class="text-white text-decoration-none">Listar chamados</a>
    </div>
    <a href="../Controller/Auth.php?operation=logout" class="text-white text-decoration-none">Sair</a>
  </nav>
  <main class="bg-info card d-flex align-items-center mt-6">
    <h1></h1>
    <form action="../Controller/Call.php?operation=insert" method="post" class="w-75 p-3">
      <label for="user_name">Nome do usuário</label>
      <input type="text" id="user_name" name="user_name" class="form-control" required />
      <label for="user_email">Email do usuário</label>
      <input type="email" id="user_email" name="user_email" class="form-control" required />
      <label for="pc_number">Número do Epi</label>
      <input type="number" id="pc_number" name="pc_number" class="form-control" required />
      <label for="floor">Tamanho do Epi</label>
      <input type="number" id="floor" name="floor" class="form-control" required />
      <label for="room">Sala do Epi</label>
      <input type="number" id="room" name="room" class="form-control" required />
      <label for="classification" class="d-block">Modelo de Epi</label>
      <select name="classification" id="classification" class="form-select">
        <option value="low">Proteção da cabeça</option>
        <option value="medium">Proteção de mãos</option>
        <option value="high">Proteção visual e facial</option>
        <option value="high">Proteção auditiva</option>
      </select>
      <label for="description">Descrição do pedido</label>
      <textarea name="description" id="description" cols="30" rows="5" class="form-control" required></textarea>
      <label for="notes">Notas e observações</label>
      <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"></textarea>
      <button class="btn btn-light mt-3">Registrar</button>
    </form>
  </main>
</body>

</html>