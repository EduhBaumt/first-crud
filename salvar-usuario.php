<?php 
    switch($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['data_nasc'];
            
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES (:nome, :email, :senha, :data_nasc)";

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':nome' => $nome,
                    ':email' => $email,
                    ':senha' => $senha,
                    ':data_nasc' => $data_nasc
                    ]);
                    
                    $success_msg = "Usuário $nome cadastrado com sucesso";

                    echo ("<script>
                    alert('$success_msg');
                    location.href='?page=listar';
                    </script>");

                } catch (PDOException $e) {
                    echo ("Erro no cadastro: " . $e->getMessage());
                }
        break;

        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['data_nasc'];

            $sql = "UPDATE usuarios SET 
                nome = :nome,
                email = :email,
                senha = :senha,
                data_nasc = :data_nasc
             WHERE id= :id";

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':nome' => $nome,
                    ':email' => $email,
                    ':senha' => $senha,
                    ':data_nasc' => $data_nasc,
                    ':id' => $_POST['id']
                ]);
                
                $success_msg = "Usuário $nome editado com sucesso";

                echo ("<script>
                alert('$success_msg');
                location.href='?page=listar';
                </script>");

            } catch (PDOException $e) {
                echo ("Erro na edição: " . $e->getMessage());
            }
        break;
    
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id = :id";

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':id' => $_REQUEST['id']
                ]);

                echo "<script>
                alert('Usuário excluído com sucesso!');
                location.href='?page=listar';
                </script>";

            }catch(PDOException $e) {
                echo ("Erro ao excluir: " . $e->getMessage());
            }
        break;
    }
?>