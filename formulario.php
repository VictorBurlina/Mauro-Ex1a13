<?php include 'menu.php'; ?>
    <h1>Formulário de Cadastro de Aluno</h1>
    <form action="recebe.php" method="post">
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="nascimento" class="col-sm-2 col-form-label">Data de Nascimento:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="nascimento" name="nascimento" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="sexo" class="col-sm-2 col-form-label">Sexo:</label>
            <div class="col-sm-10">
                <select id="sexo" name="sexo" class="form-control" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
            <div class="col-sm-10">
                <input type="text" id="cpf" name="cpf" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <form action="sair.php" method="post" style="margin-top: 20px;">
        <button type="submit" class="btn btn-secondary">Sair</button>
    </form>
</div>
<?php include 'footer.php'; ?>
