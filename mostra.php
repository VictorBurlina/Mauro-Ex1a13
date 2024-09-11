<?php include 'menu.php'; ?>
<?php
session_start();
include 'aluno.php';

if (isset($_SESSION['aluno'])) {
    $aluno = unserialize($_SESSION['aluno']);
?>
    <h1>Dados do Aluno</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($aluno->getNome()); ?></h5>
            <p class="card-text">Data de Nascimento: <?php echo htmlspecialchars($aluno->nascimento); ?></p>
            <p class="card-text">Sexo: <?php echo htmlspecialchars($aluno->sexo); ?></p>
            <p class="card-text">CPF: <?php echo htmlspecialchars($aluno->cpf); ?></p>
        </div>
    </div>
<?php
} else {
    echo "<p>Nenhum dado de aluno encontrado na sessão.</p>";
}
?>
<form action="sair.php" method="post" style="margin-top: 20px;">
    <button type="submit" class="btn btn-secondary">Sair</button>
</form>
<?php include 'footer.php'; ?>
