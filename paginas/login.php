<?php
include '../db/conn.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
    <title>Login</title>
</head>
<body class="d-flex align-items-center py-4">
<main class="w-100 m-auto form-container" style="max-width: 300px; padding: 1rem;" >
    <form action="" method="post">
        <img src="../images/logo.png" class="m-4" height="228" width="228"/>
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <div class="form-floating">  
            <input type="email" name="emailInput" id="email" class="form-control" placeholder="seuemail@gmail.com" required><br/>
            <label for="emailInput">Email</label> 
        </div>
        <div class="form-floating">  
            <input type="password" name="senhaInput" id="senha" class="form-control" placeholder="senha" required><br/>
            <label for="senhaInput">Senha</label> 
        </div>
        <div class="form-check text-start mb-3">
            <input type="checkbox" class="form-check-input" id="flexCheckDefault">
            <label  class="form-check-label" for="flexCheckDefault">Lembrar senha</label>
        </div>
        <button class="btn btn-primary w-100 py-2">Logar-se</button>
        <a href="cadastrar.php" style="color: blue;">Criar conta</a>
    </form>
    

</main>    
    

</body>
</html>