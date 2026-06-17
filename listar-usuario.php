<h1>Listar usuário</h1>

<?php 
    $stmt = $pdo->prepare("
        SELECT id, nome, email, data_nasc
        FROM usuarios
        ORDER BY id
    ");
    $stmt->execute();
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table class="table table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data de Nascimento</th>
        <th>Ações</th>
    </tr>

    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['nome'] ?></td>
            <td><?= $usuario['email'] ?></td>
            <td><?= $usuario['data_nasc'] ?></td>
            <td>
                <button 
                    onclick="location.href='?page=editar&id=<?= $usuario['id']?>'" 
                    type="submit" 
                    class="btn btn-success">
                    Editar
                </button>

                <button 
                    onclick="if(confirm('Tem certeza que deseja excluir este usuário?')){
                    location.href='?page=salvar&acao=excluir&id=<?= $usuario['id']?>';
                     }" 
                    type="submit" 
                    class="btn btn-danger">
                    Excluir
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

