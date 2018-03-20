<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/login.css " rel="stylesheet">
<script src="../js/login.js"></script>

<div class="container">

    <?php
    if ($_POST){

        include '../vendor/autoload.php';
        $u = new \App\Model\Usuario();
        $u->setEmail($_POST['email']);
        $u->setSenha($_POST['senha']);
        $uDAO = new \App\DAO\UsuarioDAO();
        if ($uDAO->login($u))
            header("Location: entrada.php");
        else
           echo "<div class='alert alert-danger'>E-mail ou senha incorretos!</div>";
    }
    ?>

</div>


    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form action="login.php" method="post">
            <span id="reauth-email" class="reauth-email"> </span>
            <input type="email" id="email" name="email" class="form-control" placeholder="Endereço e-mail" required autofocus>
            <br>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
        </form>

    </div>


