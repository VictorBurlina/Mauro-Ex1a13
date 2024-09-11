<?php include 'menu.php'; ?>
<?php
session_start();
include 'aluno.php';

if (isset($_SESSION['aluno'])) {
    $aluno = unserialize($_SESSION['aluno']);
    $nome = $aluno->getNome();
    $idade = $aluno->idade();
    echo "<h1>$nome, $idade anos</h1>";
} else {
    echo "<p>Nenhum dado de aluno encontrado na sessão.</p>";
}
?>
<form action="sair.php" method="post" style="margin-top: 20px;">
    <button type="submit" class="btn btn-secondary">Sair</button>
</form>
<?php include 'footer.php'; ?>
