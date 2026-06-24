<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="
    background: radial-gradient(circle,rgba(21, 35, 49, 1) 0%, rgba(0, 0, 0, 1) 100%);
    height: 100vh;
">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="?page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=cadastro">Cadastrar</a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <?php 
            include('db.php');    
            switch(@$_REQUEST['page']){
                case 'login':
                    include('login.php');
                    break;
                case 'cadastro':
                    include('cadastro.php');
                    break;
                default:
                echo "<a href='?page=cadastro'>Cadastro</a>";
                echo "<h2 style='color: white;'>HOME</h2>";
            }
        ?>
    </div>
</body>
</html>