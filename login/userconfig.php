<?php
    include("db.php");
    switch($_REQUEST['acao']){
        case 'cadastro':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $cpf = $_POST['cpf'];
            $birth = $_POST['birth'];

            try{
                $sql = "INSERT INTO users ('name', 'email', 'pass', 'birth', 'cpf') 
                        VALUES (':name',':email',':pass',':cpf',':birth')";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ":name"=> $name,
                    ":email"=> $email,
                    ":pass"=> $pass,
                    ":cpf" => $cpf,
                    "birth"=> $birth
                    ]);

                $success_msg = "Usuário $name cadastrado com sucesso";

                echo ("<script>
                alert('$success_msg');
                location.href='?page=listar';
                </script>");

                } catch(PDOException $e) {
                    echo "Erro no cadastro: ". $e->getMessage();
                    }
            break;
        }