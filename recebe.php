<?php include 'menu.php'; ?>
<?php
session_start();
include 'aluno.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
    $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

    if ($nome && $nascimento && $sexo && $cpf) {
        $aluno = new Aluno($nome, $nascimento, $sexo, $cpf);
        $_SESSION['aluno'] = serialize($aluno);
    } else {
        echo "<p>Por favor, preencha todos os campos do formulário.</p>";
    }
}
?>
<h1>Dados do Aluno</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alunoModal">
    Mostrar
</button>

<div class="modal fade" id="alunoModal" tabindex="-1" role="dialog" aria-labelledby="alunoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alunoModalLabel">Dados do Aluno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (isset($_SESSION['aluno'])): ?>
                    <?php $aluno = unserialize($_SESSION['aluno']); ?>
                    <p><strong>Nome:</strong> <?php echo htmlspecialchars($aluno->getNome()); ?></p>
                    <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($aluno->nascimento); ?></p>
                    <p><strong>Sexo:</strong> <?php echo htmlspecialchars($aluno->sexo); ?></p>
                    <p><strong>CPF:</strong> <?php echo htmlspecialchars($aluno->cpf); ?></p>
                <?php else: ?>
                    <p>Nenhum dado de aluno encontrado na sessão.</p>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<form action="sair.php" method="post" style="margin-top: 20px;">
    <button type="submit" class="btn btn-secondary">Sair</button>
</form>
<?php include 'footer.php'; ?>
