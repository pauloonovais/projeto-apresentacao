<?php
$titulo = "Alterar";
include 'cabecalho.php';?>
<h1>Alterar senha de usuário</h1>

<?php
include '../vendor/autoload.php';
session_start();

if ($_POST){
    $p = new \App\Model\Usuario();
    $p->setId($_POST['id']);
    $p->setEmail($_POST['email']);
    $p->setSenha($_POST['senha']);

    $pDAO = new \App\DAO\UsuarioDAO();
    if ($pDAO->alterarUsuario($p))
        echo "<div class='alert alert-success'> Usuário alterado com sucesso!</div>";

}
$us = new \App\Model\Usuario();
$us->setId($_SESSION['id']);
$usDAO = new \App\DAO\UsuarioDAO();
$r= $usDAO->consulta($us);

?>
    <form action="alterarUsuario.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input value="<?php echo $r['email']?>" type="text" id="email" name="email" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control"  required>
        </div>


        <button type="submit" class="btn btn-success">Alterar</button>
    </form>

<?php include 'rodape.php';?>