<h1>Editar usuário</h1>

<?php 

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id= :id");
    $stmt->execute([':id' => $_REQUEST['id']]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<form action="?page=salvar" method="POST" class="mx-auto p-2">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
    <div>
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" value="<?=$usuario["nome"]?>" >
    </div>
    <div>
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control" value="<?= $usuario["email"] ?>" >
    </div>
    <div>
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control" value="<?= $usuario["senha"] ?>" required>
    </div>
    <div>
        <label>Data de Nascimento:</label>
        <input type="date" name="data_nasc" class="form-control" value="<?= $usuario["data_nasc"] ?>" >
    </div>
    <div>
        <button type="submit" class="btn btn-dark mt-3">Salvar alterações</button>
    </div>
</form>