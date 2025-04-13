<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Hospedes</title>
</head>
<body class="d-flex justify-content-center py-4">
  <main class="w-100 m-auto form-container " style="max-width: 1000px; padding: 1rem;">


  <form method="POST" class="d-flex align-items-end gap-2 flex-wrap">
  <div >
    <label for="pesquisar" class="form-label">Pesquisar</label>
    <input type="text" class="form-control" id="pesquisar" placeholder="Nome ou Id do hóspede.">
  </div>
  <button type="submit" class="btn btn-primary" style="height: 40px;">
    Filtrar
  </button>
</form>
<!--ACIMA ESTA O INPUT DE FILTRAR. FAZER SCRIPT DPS XD-->

    <table class="table table-bordered align-middle caption-top mb-0">
        <thead class="table-dark text-center">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>cpf</th>
                <th>telefone</th>
                <th>Reservas</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center align-middle">
                <td>1</td>
                <td>João</td>
                <td>joao@email.com</td>
                <td>***.***.***-00</td>
                <td>(11) 99999-9999</td>
                <!-- ACIMA SAO DADOS SO PRA TABELA FICAR PREENCHIDA. DEPOIS TROCAR POR DADOS DO BANCO-->
                <td class="p-1">
                    <button class="btn btn-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#modalReservas">
                        Ver Reservas
                    </button>
                </td>
                <td class="p-1">
                <button class="btn btn-success btn-sm w-49" data-bs-toggle="modal" data-bs-target="#modalEditar">
                        Editar
                    </button>
                <button class="btn btn-danger btn-sm w-49" onclick="removerHospede(/*aqui vai o id do hospede*/)"> <!--ESSE BOTÃO PRECISA DE FUNÇAO PARA REMOVER!!!-->
                        Remover
                    </button>
                </td>
            </tr>
        </tbody>
        <caption class="text-center">Hóspedes</caption>
    </table>
  </main>

<!-- Modal de Reservas -->
<div class="modal fade" id="modalReservas" tabindex="-1" aria-labelledby="modalReservasLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalReservasLabel">Reservas do Hóspede</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <!-- Aqui você preenche com os dados do banco via PHP ou JS -->
        <table class="table table-hover text-center align-middle">
          <thead class="table-secondary">
            <tr>
              <th>id</th>
              <th>Check_In</th>
              <th>Check_Out</th>
              <th>Quarto</th>
              <th>Tipo Quarto</th>
              <th>Preço da reserva</th>
            </tr>
          </thead>
          <tbody id="corpo-tabela-reservas">
            <!-- Dados das reservas vão aqui -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Script Bootstrap necessário para funcionamento do modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

<!--modal Editar-->
<div class="modal fade" id="modalEditar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Hóspede</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="editar.php" method="POST"> <!--Fazer arquivo editar.php para funcionar !!! --> 
                    <input type="hidden" id="editId" name="idHospede">
                    <div class="mb-3">
                        <label for="editNome" class="form-label">Nome do hóspede</label>
                        <input type="text" class="form-control" id="editNome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="editemail" class="form-label">Email do hóspede</label>
                        <input type="text" class="form-control" id="editemail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edittelefone" class="form-label">Telefone do hóspede</label>
                        <input type="text" class="form-control" id="edittelefone" name="telefone" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

  function removerHospede(id){
    alert("NADA FOI REMOVIDO PQ NAO FUNCIONA AINDA '-')b") // seria bom todos os scripts serem em arquivos separados !! coloquei aqui so por conveniência
  }


</script>
</body>
</html>