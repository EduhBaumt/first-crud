<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>
    <div class="container">
        <h2>Hello World!</h2>
    </div>

    <?php 
        include('db.php');    
        switch($_REQUEST['page']){
            case 'login':
                include('login.php');
                break;
            case 'cadastro':
                include('cadastro.php');
                break;
        }
    ?>
</body>
</html>