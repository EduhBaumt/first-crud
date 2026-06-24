<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="
    background: radial-gradient(circle,rgba(21, 35, 49, 1) 0%, rgba(0, 0, 0, 1) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mt-3">Login</h2>
                        <form action="testelogin.php" method="POST">
                            <input type="hidden" name="acao" value="login">
                            <div class="mb-3">
                                <label for="E-mail" class="form-label">Nome de usuário: </label>
                                <input type="emmail" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha: </label>
                                <input type="password" class="form-control" id="pass" name="pass" required>
                            </div>
                            <button type="submit" class="btn w-100" style="background: #351961; color: white;">Login</button>
                        </form>
                        <div class="container">
                            <div class="d-flex m-2 pt-2 justify-content-center align-items-center">
                                <p class="p-2 m-0">Não tem conta? </p>
                                <a href="cadastro.php">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>