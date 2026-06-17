<h1>Novo usuário</h1>

<form action="?page=salvar" method="POST" class="mx-auto p-2">
    <input type="hidden" name="acao" value="cadastrar">
    <div>
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div>
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div>
        <label>Senha:</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div>
        <label>Data de Nascimento:</label>
        <input type="date" name="data_nasc" class="form-control" required>
    </div>
    <div>
        <button type="submit" class="btn btn-dark mt-3">Cadastrar</button>
    </div>
</form>