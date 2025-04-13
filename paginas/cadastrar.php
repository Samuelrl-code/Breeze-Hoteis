<?php
include '../db/conn.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
    <title>Cadastrar</title>
</head>
<body class="d-flex align-items-center py-4">
<main class="w-100 m-auto form-container" style="max-width: 900px; padding: 1rem;" >
    <form action="" method="post">

    <div class="row">
    <div class="col-sm"></div>
        <img src="../images/logo.png" class="m-4 col-md-auto" height="228" width="228"/>
    <div class="col-sm"></div>
    </div>
        <h1 class="h3 mb-3 fw-normal align-self-center">Cadastrar-se</h1>
    <div class="row">
        <div class="form-floating col-sm">  
            <input type="text" name="nomeInput" id="nome" class="form-control" placeholder="seunome" required><br/>
            <label for="nomeInput" style="padding-left: 5%;">Nome</label> 
        </div>
        <div class="form-floating col-sm">  
            <input type="text" name="cpfInput" id="cpf" class="form-control" placeholder="12345678910" required><br/>
            <label for="cpfInput" style="padding-left: 5%;">CPF</label> 
        </div>
    </div>
    <div class="row">
        <div class="form-floating col-sm">  
            <input type="text" name="telefoneInput" id="telefone" class="form-control" placeholder="seunumero" required><br/>
            <label for="cpfInput" style="padding-left: 5%;">Telefone</label> 
        </div>
        <div class="form-floating col-sm">  
            <input type="email" name="emailInput" id="email" class="form-control" placeholder="seuemail@gmail.com" required><br/>
            <label for="emailInput" style="padding-left: 5%;">Email</label> 
        </div>
    </div>
    <div class="row">
        <div class="form-floating col-sm">  
            <input type="password" name="senhaInput" id="senha" class="form-control" placeholder="senha" required><br/>
            <label for="senhaInput" style="padding-left: 5%;">Senha</label> 
        </div>
        <div class="form-floating col-sm">  
            <input type="password" name="senhaConf" id="senhaConf" class="form-control" placeholder="Confirme sua senha" required><br/>
            <label for="senhaConf" style="padding-left: 5%;">Confirme sua senha</label> 
        </div>
    </div>
    <div class="row">
        <div class="col-sm"></div>
        <button class="btn btn-primary w-100 py-2 align-self-center col-sm">Cadastrar</button>
        <div class="col-sm"></div>
    </div>
    <a href="login.php" style="color: blue;">Login</a>

    </form>

</main>    
    

</body>
</html>